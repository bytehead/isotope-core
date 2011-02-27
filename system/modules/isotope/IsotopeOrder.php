<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009, Intelligent Spark 2010, iserv.ch GmbH 2010
 * @author     Fred Bliss <fred.bliss@intelligentspark.com>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


class IsotopeOrder extends IsotopeProductCollection
{

	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_iso_orders';

	/**
	 * Name of the child table
	 * @var string
	 */
	protected $ctable = 'tl_iso_order_items';

	/**
	 * Lock products from apply rule prices
	 * @var bool
	 */
	protected $blnLocked = true;


	public function __get($strKey)
	{
		switch($strKey)
		{
			case 'surcharges':
				return $this->arrData['surcharges'] ? deserialize($this->arrData['surcharges']) : array();
				break;

			case 'billingAddress':
				return deserialize($this->arrData['billing_address'], true);

			case 'shippingAddress':
				return deserialize($this->arrData['shipping_address'], true);

			default:
				return parent::__get($strKey);
		}
	}


	/**
	 * Add downloads to this order
	 */
	public function transferFromCollection(IsotopeProductCollection $objCollection, $blnDuplicate=true)
	{
		$arrIds = parent::transferFromCollection($objCollection, $blnDuplicate);

		foreach( $arrIds as $id )
		{
			$objDownloads = $this->Database->execute("SELECT *, (SELECT product_quantity FROM {$this->ctable} WHERE id=$id) AS product_quantity FROM tl_iso_downloads WHERE pid=(SELECT product_id FROM {$this->ctable} WHERE id=$id)");

			while( $objDownloads->next() )
			{
				$arrSet = array
				(
					'pid'					=> $id,
					'tstamp'				=> time(),
					'download_id'			=> $objDownloads->id,
					'downloads_remaining'	=> ($objDownloads->downloads_allowed > 0 ? ($objDownloads->downloads_allowed * $objDownloads->product_quantity) : ''),
				);

				$this->Database->prepare("INSERT INTO tl_iso_order_downloads %s")->set($arrSet)->executeUncached();
			}
		}

		return $arrIds;
	}


	/**
	 * Find a record by its reference field and return true if it has been found
	 * @param  int
	 * @return boolean
	 */
	public function findBy($strRefField, $varRefId)
	{
		if (parent::findBy($strRefField, $varRefId))
		{
			$this->Shipping = null;
			$this->Payment = null;

			$objPayment = $this->Database->execute("SELECT * FROM tl_iso_payment_modules WHERE id=" . $this->payment_id);

			if ($objPayment->numRows)
			{
				$strClass = $GLOBALS['ISO_PAY'][$objPayment->type];

				try
				{
					$this->Payment = new $strClass($objPayment->row());
				}
				catch (Exception $e) {}
			}

			if ($this->shipping_id > 0)
			{
				$objShipping = $this->Database->execute("SELECT * FROM tl_iso_shipping_modules WHERE id=" . $this->shipping_id);

				if ($objShipping->numRows)
				{
					$strClass = $GLOBALS['ISO_SHIP'][$objShipping->type];

					try
					{
						$this->Shipping = new $strClass($objShipping->row());
					}
					catch (Exception $e) {}
				}
			}

			return true;
		}

		return false;
	}


	/**
	 * Remove downloads when removing a product
	 */
	public function deleteProduct(IsotopeProduct $objProduct)
	{
		if (parent::deleteProduct($objProduct))
		{
			$this->Database->query("DELETE FROM tl_iso_order_downloads WHERE pid={$objProduct->cart_id}");
		}

		return false;
	}


	/**
	 * Also delete downloads when deleting this order.
	 */
	public function delete()
	{
		$this->Database->query("DELETE FROM tl_iso_order_downloads WHERE pid IN (SELECT id FROM {$this->ctable} WHERE pid={$this->id})");

		return parent::delete();
	}

	public function getSurcharges()
	{
		$this->import('Isotope');

		$arrPreTax = $arrPostTax = $arrTaxes = array();
		$arrProducts = $this->getProducts();

		foreach( $arrProducts as $pid => $objProduct )
		{
			$arrTaxIds = array();
			$arrTax = $this->calculateTax($objProduct->tax_class, $objProduct->tax_free_total_price);

			if (is_array($arrTax))
			{
				foreach ($arrTax as $k => $tax)
				{
					if (array_key_exists($k, $arrTaxes))
					{
						$arrTaxes[$k]['total_price'] += $tax['total_price'];

						if (is_numeric($arrTaxes[$k]['price']) && is_numeric($tax['price']))
						{
							$arrTaxes[$k]['price'] += $tax['price'];
						}
					}
					else
					{
						$arrTaxes[$k] = $tax;
					}

					$arrTaxes[$k]['tax_id'] = array_search($k, array_keys($arrTaxes)) + 1;
					$arrTaxIds[] = array_search($k, array_keys($arrTaxes)) + 1;
				}
			}

			$this->arrProducts[$pid]->tax_id = implode(',', $arrTaxIds);
		}

		$arrSurcharges = array();

		$arrSurcharges = $this->getShippingSurcharge($arrSurcharges);
		$arrSurcharges = $this->getPaymentSurcharge($arrSurcharges);


		foreach( $arrSurcharges as $arrSurcharge )
		{
			if ($arrSurcharge['tax_class'] > 0)
			{
				$arrPreTax[] = $arrSurcharge;
			}
			else
			{
				$arrPostTax[] = $arrSurcharge;
			}
		}

		foreach( $arrPreTax as $arrSurcharge )
		{

			$arrTax = $this->calculateTax($arrSurcharge['tax_class'], $arrSurcharge['total_price'], $arrSurcharge['before_tax']);

			if (is_array($arrTax))
			{
				foreach ($arrTax as $k => $tax)
				{
					if (array_key_exists($k, $arrTaxes))
					{
						$arrTaxes[$k]['total_price'] += $tax['total_price'];

						if (is_numeric($arrTaxes[$k]['price']) && is_numeric($tax['price']))
						{
							$arrTaxes[$k]['price'] += $tax['price'];
						}
					}
					else
					{
						$arrTaxes[$k] = $tax;
					}

					$arrTaxes[$k]['tax_id'] = array_search($k, array_keys($arrTaxes)) + 1;
				}
			}
		}

		return array_merge($arrPreTax, $arrTaxes, $arrPostTax);
	}

	/**
	 * Hook-callback for isoCheckoutSurcharge. Accesses the shipping module to get a shipping surcharge.
	 *
	 * @access	public
	 * @param	array
	 * @return	array
	 */
	public function getShippingSurcharge($arrSurcharges)
	{
		if ($this->hasShipping && $this->Shipping->price > 0)
		{
			$arrSurcharges[] = array
			(
				'label'			=> ($GLOBALS['TL_LANG']['MSC']['shippingLabel'] . ' (' . $this->Shipping->label . ')'),
				'price'			=> '&nbsp;',
				'total_price'	=> $this->Shipping->price,
				'tax_class'		=> $this->Shipping->tax_class,
				'before_tax'	=> ($this->Shipping->tax_class ? true : false),
			);
		}

		return $arrSurcharges;
	}


	/**
	 * Hook-callback for isoCheckoutSurcharge.
	 *
	 * @todo	Accesses the payment module to get a payment surcharge.
	 *
	 * @access	public
	 * @param	array
	 * @return	array
	 */
	public function getPaymentSurcharge($arrSurcharges)
	{
		if ($this->hasPayment && $this->Payment->price > 0)
		{
			$arrSurcharges[] = array
			(
				'label'			=> ($GLOBALS['TL_LANG']['MSC']['paymentLabel'] . ' (' . $this->Payment->label . ')'),
				'price'			=> '&nbsp;',
				'total_price'	=> $this->Payment->price,
				'tax_class'		=> $this->Payment->tax_class,
				'before_tax'	=> ($this->Payment->tax_class ? true : false),
			);
		}

		return $arrSurcharges;
	}


	/**
	 * Calculate tax for a certain tax class, based on the current user information
	 */
	public function calculateTax($intTaxClass, $fltPrice, $blnAdd=true, $arrAddresses=null)
	{
		if (!is_array($arrAddresses))
		{
			$arrAddresses = array('billing'=>deserialize($this->arrData['billing_address']), 'shipping'=>deserialize($this->arrData['shipping_address']));
		}

		$objTaxClass = $this->Database->prepare("SELECT * FROM tl_iso_tax_class WHERE id=?")->limit(1)->execute($intTaxClass);

		if (!$objTaxClass->numRows)
			return $fltPrice;

		$arrTaxes = array();
		$objIncludes = $this->Database->prepare("SELECT * FROM tl_iso_tax_rate WHERE id=?")->limit(1)->execute($objTaxClass->includes);

		if ($objIncludes->numRows)
		{
			$arrTaxRate = deserialize($objIncludes->rate);

			// final price / (1 + (tax / 100)
			if (strlen($arrTaxRate['unit']))
			{
				$fltTax = $fltPrice - ($fltPrice / (1 + (floatval($arrTaxRate['value']) / 100)));
			}
			// Full amount
			else
			{
				$fltTax = floatval($arrTaxRate['value']);
			}

			if (!$this->useTaxRate($objIncludes, $fltPrice, $arrAddresses))
			{
				$fltPrice -= $fltTax;
			}
			else
			{
				$arrTaxes[$objTaxClass->id.'_'.$objIncludes->id] = array
				(
					'label'			=> (strlen($objTaxClass->label) ? $objTaxClass->label : $objIncludes->label),
					'price'			=> $arrTaxRate['value'] . $arrTaxRate['unit'],
					'total_price'	=> $fltTax,
					'add'			=> false,
				);
			}
		}

		if (!$blnAdd)
		{
			return $fltPrice;
		}

		$arrRates = deserialize($objTaxClass->rates);
		if (!is_array($arrRates) || !count($arrRates))
			return $arrTaxes;

		$objRates = $this->Database->execute("SELECT * FROM tl_iso_tax_rate WHERE id IN (" . implode(',', $arrRates) . ") ORDER BY id=" . implode(" DESC, id=", $arrRates) . " DESC");

		while( $objRates->next() )
		{
			if ($this->useTaxRate($objRates, $fltPrice, $arrAddresses))
			{
				$arrTaxRate = deserialize($objRates->rate);

				// final price * (1 + (tax / 100)
				if (strlen($arrTaxRate['unit']))
				{
					$fltTax = ($fltPrice * (1 + (floatval($arrTaxRate['value']) / 100))) - $fltPrice;
				}
				// Full amount
				else
				{
					$fltTax = floatval($arrTaxRate['value']);
				}

				$arrTaxes[$objRates->id] = array
				(
					'label'			=> $objRates->label,
					'price'			=> $arrTaxRate['value'] . $arrTaxRate['unit'],
					'total_price'	=> $fltTax,
					'add'			=> true,
				);

				if ($objRates->stop)
					break;
			}
		}

		return $arrTaxes;
	}

	public function useTaxRate($objRate, $fltPrice, $arrAddresses)
	{
		if ($objRate->config > 0 && $objRate->config != $this->Config->id)
			return false;

		$objRate->address = deserialize($objRate->address);

		if (is_array($objRate->address) && count($objRate->address))
		{
			foreach( $arrAddresses as $name => $arrAddress )
			{
				if (!in_array($name, $objRate->address))
					continue;

				if (strlen($objRate->country) && $objRate->country != $arrAddress['country'])
					return false;

				if (strlen($objRate->subdivision) && $objRate->subdivision != $arrAddress['subdivision'])
					return false;

				$arrPostal = deserialize($objRate->postal);
				if (is_array($arrPostal) && count($arrPostal) && strlen($arrPostal[0]))
				{
					if (strlen($arrPostal[1]))
					{
						if ($arrPostal[0] > $arrAddress['postal'] || $arrPostal[1] < $arrAddress['postal'])
							return false;
					}
					else
					{
						if ($arrPostal[0] != $arrAddress['postal'])
							return false;
					}
				}

				$arrPrice = deserialize($objRate->amount);
				if (is_array($arrPrice) && count($arrPrice) && strlen($arrPrice[0]))
				{
					if (strlen($arrPrice[1]))
					{
						if ($arrPrice[0] > $fltPrice || $arrPrice[1] < $fltPrice)
							return false;
					}
					else
					{
						if ($arrPrice[0] != $fltPrice)
							return false;
					}
				}
			}
		}

		return true;
	}


	public function checkout($objCart=null)
	{
		if ($this->checkout_complete)
		{
			return true;
		}

		$this->import('Isotope');

		// This is the case when not using ModuleIsotopeCheckout
		if (!is_object($objCart))
		{
			$objCart = new IsotopeCart();
			if (!$objCart->findBy('id', $this->cart_id))
			{
				return false;
			}

			// Set the current system to the language when the user placed the order.
			// This will result in correct e-mails and payment description.
			$GLOBALS['TL_LANGUAGE'] = $this->language;
			$this->loadLanguageFile('default');

			// Initialize system
			$this->Isotope->overrideConfig($this->config_id);
			$this->Isotope->Cart = $objCart;
		}

		// HOOK: process checkout
		if (isset($GLOBALS['ISO_HOOKS']['checkout']) && is_array($GLOBALS['ISO_HOOKS']['checkout']))
		{
			foreach ($GLOBALS['ISO_HOOKS']['checkout'] as $callback)
			{
				$this->import($callback[0]);

				if ($this->$callback[0]->$callback[1]($this, $objCart) === false)
				{
					return false;
				}
			}
		}

		$this->transferFromCollection($objCart);
		$objCart->delete();

		$this->checkout_complete = true;
		$this->status = $this->new_order_status;
		$arrData = $this->email_data;

		$this->log('New order ID ' . $this->id . ' has been placed', 'IsotopeOrder checkout()', TL_ACCESS);

		if ($this->iso_mail_admin && $this->iso_sales_email != '')
		{
			$this->Isotope->sendMail($this->iso_mail_admin, $this->iso_sales_email, $this->language, $arrData, $this->iso_customer_email);
		}

		if ($this->iso_mail_customer && $this->iso_customer_email != '')
		{
			$this->Isotope->sendMail($this->iso_mail_customer, $this->iso_customer_email, $this->language, $arrData);
		}
		else
		{
			$this->log('Unable to send customer confirmation for order ID '.$this->id, 'IsotopeOrder checkout()', TL_ERROR);
		}

		// Store address in address book
		if ($this->iso_addToAddressbook && $this->pid > 0)
		{
			$time = time();

			foreach( array('billing', 'shipping') as $address )
			{
				$arrData = deserialize($this->arrData[$address.'_address'], true);

				if ($arrData['id'] == 0)
				{
					$arrAddress = array_intersect_key($arrData, array_flip($this->Isotope->Config->{$address.'_fields_raw'}));
					$arrAddress['pid'] = $this->pid;
					$arrAddress['tstamp'] = $time;

					$this->Database->prepare("INSERT INTO tl_iso_addresses %s")->set($arrAddress)->execute();
				}
			}
		}

		$this->save();

		return true;
	}

}
