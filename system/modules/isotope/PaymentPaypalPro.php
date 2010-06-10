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
 
 
/**
 * Handle Paypal payments
 * 
 * @extends Payment
 */
class PaymentPaypalPro extends IsotopePayment
{

	/**
	 * processPayment function.
	 * 
	 * @access public
	 * @return void
	 */
	public function processPayment()
	{
		$this->import('IsotopeCart', 'Cart');
		$this->import('Isotope');
		
		$objOrder = $this->Database->prepare("SELECT * FROM tl_iso_orders WHERE cart_id=? AND status!='cancelled'")->limit(1)->execute($this->Cart->id);
		
		$arrPaymentData = deserialize($objOrder->payment_data);
		
		$arrBillingSubdivision = explode('-', $this->Cart->billingAddress['subdivision']);
		$arrShippingSubdivision = explode('-', $this->Cart->shippingAddress['subdivision']); 
		
		$strExp = str_replace('/','',$_SESSION['CHECKOUT_DATA']['payment'][$this->id]['cc_exp']);
		
		switch($_SESSION['CHECKOUT_DATA']['payment'][$this->id]['cc_type'])
		{
			case 'mc':
				$strCardType = 'MasterCard';
				break;
			case 'visa':
				$strCardType = 'Visa';
				break;
			case 'amex':
				$strCardType = 'Amex';
				break; 
			case 'discover':
				$strCardType = 'Discover';
				break;
			case 'jcb':
				$strCardType = 'Jcb';
				break;
			case 'diners':
				$strCardType = 'Diners';
				break;
		}
		
		
		$arrData = array
		(
			'METHOD'				=> 'DoDirectPayment',
			'VERSION'				=> '51.0',
			'PWD'					=> ($this->debug ? 'QFZCWN5HZM8VBG7Q' : $this->paypalpro_apiPassword),
			'USER'					=> ($this->debug ? 'sdk-three_api1.sdk.com' : $this->paypalpro_apiUserName),
			'SIGNATURE'				=> ($this->debug ? 'A-IzJhZZjhg29XQ2qnhapuwxIDzyAZQ92FRP5dqBzVesOkzbdUONzmOU' : $this->paypalpro_apiSignature),
			'PAYMENTACTION'			=> $this->paypalpro_transType,
			'IPADDRESS'				=> $this->Environment->ip,
			'AMT'					=> round($this->Cart->grandTotal, 2),
			'RETURNFMFDETAILS'		=> ($this->debug ? 1 : 0),
			'CREDITCARDTYPE'		=> $strCardType,
			'ACCT'					=> $_SESSION['CHECKOUT_DATA']['payment'][$this->id]['cc_num'],
			'EXPDATE'				=> $strExp,
			'FIRSTNAME'				=> $this->Cart->billingAddress['firstname'],
			'LASTNAME'				=> $this->Cart->billingAddress['lastname'],
			'STREET'				=> $this->Cart->billingAddress['street_1'],
			'STREET2'				=> $this->Cart->billingAddress['street_2']."\n".$this->Cart->billingAddress['street_3'],
			'CITY'					=> $this->Cart->billingAddress['city'],
			'STATE'					=> $arrBillingSubdivision[1],
			'COUNTRYCODE'			=> strtoupper($this->Cart->billingAddress['country']),
			'ZIP'					=> $this->Cart->billingAddress['postal'],
			'CURRENCYCODE'			=> $this->Isotope->Config->currency,
			'ITEMAMT'				=> round($this->Cart->subTotal, 2),
			'SHIPPINGAMT'			=> round($this->Cart->shippingTotal, 2),
			'HANDLINGAMT'			=> 0,	//TODO: support handling charges
			'TAXAMT'				=> $this->Cart->taxTotal,
			'DESC'					=> "Order Number " . $objOrder->order_id,
			'INVNUM'				=> $objOrder->id . '-' . time(),
			'EMAIL'					=> $this->Cart->billingAddress['email'],
			'PHONENUM'				=> $this->Cart->billingAddress['phone'],
			
			
		);	
	
		if($this->requireCCV)
		{
			$arrData['CVV2'] = $_SESSION['CHECKOUT_DATA']['payment'][$this->id]['cc_ccv'];
		}
		
		$arrFinal = array_map(array($this,'urlEncodeVars'), $arrData);
		
		foreach($arrFinal as $k=>$v)
		{
			$arrNVP[] .= $k . '=' . $v;
		}
					
		$objRequest = new Request();
		$objRequest->send('https://api-3t.' . ($this->debug ? 'sandbox.' : '') . 'paypal.com/nvp', implode('&', $arrNVP), 'post');
		
		$nvpstr = $objRequest->response;
				
		while(strlen($nvpstr))
		{
			//postion of Key
			$keypos= strpos($nvpstr,'=');
			
			//position of value
			$valuepos = strpos($nvpstr,'&') ? strpos($nvpstr,'&'): strlen($nvpstr);
	
			/*getting the Key and Value values and storing in a Associative Array*/
			$keyval=substr($nvpstr,$intial,$keypos);
			$valval=substr($nvpstr,$keypos+1,$valuepos-$keypos-1);
			
			//decoding the respose
			$arrResponse[urldecode($keyval)] =urldecode( $valval);
			
			$nvpstr=substr($nvpstr,$valuepos+1,strlen($nvpstr));
		}
		
				
		/*
			response array
			'DoDirectPayment' => array
			(
						'timestamp' => 'TIMESTAMP',
						'correlation_id' => 'CORRELATIONID',
						'ack' => 'ACK',
						'version' => 'VERSION',
						'build' => 'BUILD',
						'avs_code' => 'AVSCODE',
						'cvv2_match' => 'CVV2MATCH',
						'transaction_id' => 'TRANSACTIONID',
						'amount_total' => 'AMT',
						'currency_code' => 'CURRENCYCODE'
			)
		*/
		
		if(strtoupper($arrResponse["ACK"]) != "SUCCESS" && strtoupper($arrResponse["ACK"]) != "SUCCESSWITHWARNING")
		{
			/*$this->Error['TIMESTAMP']		= $arrResponse['TIMESTAMP'];
			$this->Error['CORRELATIONID']	= @$this->Response['CORRELATIONID'];
			$this->Error['ACK']				= $this->Response['ACK'];
			$this->Error['ERRORCODE']		= $this->Response['L_ERRORCODE0'];
			$this->Error['SHORTMESSAGE']	= $this->Response['L_SHORTMESSAGE0'];
			$this->Error['LONGMESSAGE']		= $this->Response['L_LONGMESSAGE0'];
			$this->Error['SEVERITYCODE']	= $this->Response['L_SEVERITYCODE0'];
			$this->Error['VERSION']			= @$this->Response['VERSION'];
			$this->Error['BUILD']			= @$this->Response['BUILD'];*/
			
			//!@todo: Error codes for AVSCODE and CVV@MATCH
			/*
			$this->_error				= true;
			$this->_error_ack			= $this->Response['ACK'];
			$this->ack					= 'Failure';
			$this->_error_type			= 'paypal';
			$this->_error_date			= $this->Response['TIMESTAMP'];
			$this->_error_code			= $this->Response['L_ERRORCODE0'];
			$this->_error_short_message	= $this->Response['L_SHORTMESSAGE0'];
			$this->_error_long_message	= $this->Response['L_LONGMESSAGE0'];
			$this->_error_severity_code	= $this->Response['L_SEVERITYCODE0'];
			$this->_error_version		= @$this->Response['VERSION'];
			$this->_error_build			= @$this->Response['BUILD']; 
			*/

			
			
			$_SESSION['CHECKOUT_DATA']['payment'][$this->id]['error'] = $arrResponse['L_LONGMESSAGE0'];

			//!@todo: store the reason for a failure for later in case the payment info can be corrected.
			
			$this->redirect($this->addToUrl('step=payment'));
		}			
		elseif(strtoupper($arrResponse["ACK"]) == 'SUCCESS' OR strtoupper($arrResponse["ACK"]) == 'SUCCESSWITHWARNING')
		{
			/*
			Take the response variables and put them into the local class variables
			*/
			/*foreach($this->ResponseFieldsArray['DoDirectPayment'] as $key => $value)
				$this->$key = $this->Response[$value];
			*/
			return true;
		}
		
	}
	
	public function urlEncodeVars($v)
	{
		return urlencode($v);
	}
	
	
	/**
	 * Return the PayPal form.
	 * 
	 * @access public
	 * @return string
	 */
	public function paymentForm($objCheckoutModule)
	{
		$strBuffer = '';
		$arrPayment = $this->Input->post('payment');
		$arrCCTypes = deserialize($this->allowed_cc_types);
		
		$arrFields = array
		(
			'cc_num' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['ISO']['cc_num'],
				'inputType'		=> 'text',
				'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'tableless'=>true),
			),
			'cc_type' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['ISO']['cc_type'],
				'inputType'		=> 'select',
				'options'		=> $arrCCTypes,
				'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'tableless'=>true),
				'reference'		=> &$GLOBALS['TL_LANG']['CCT'],
			),
			'cc_exp' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['ISO']['cc_exp_paypal'],
				'inputType'		=> 'text',
				'eval'			=> array('mandatory'=>true, 'tableless'=>true),
			),
			'cc_ccv' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['ISO']['cc_ccv'],
				'inputType'		=> 'text',
				'eval'			=> array('mandatory'=>true, 'tableless'=>true)						
			),
		);
				
		foreach( $arrFields as $field => $arrData )
		{
			$strClass = $GLOBALS['TL_FFL'][$arrData['inputType']];

			// Continue if the class is not defined
			if (!$this->classFileExists($strClass))
			{
				continue;
			}

			$objWidget = new $strClass($this->prepareForWidget($arrData, 'payment['.$this->id.']['.$field.']', $_SESSION['CHECKOUT_DATA']['payment'][$this->id][$field]));
			
			// Validate input
			if ($this->Input->post('FORM_SUBMIT') == 'iso_mod_checkout_payment' && $arrPayment['module'] == $this->id)
			{
				$objWidget->validate();
				
				if ($objWidget->hasErrors())
				{
					$objCheckoutModule->doNotSubmit = true;
				}
			
				
			}
			elseif ($objWidget->mandatory && !strlen($objWidget->value))
			{
				$objCheckoutModule->doNotSubmit = true;
			}
			
			$strBuffer .= $objWidget->parse();
		}
		
		if ($this->Input->post('FORM_SUBMIT') == 'iso_mod_checkout_payment' && $arrPayment['module'] == $this->id && !$objCheckoutModule->doNotSubmit)
		{
			$strCard = $this->validateCreditCard($arrPayment[$this->id]['cc_num']);
			
			if(!preg_match('/^((0[1-9])|(1[0-2]))\/((20[1-2][0-9]))$/', $arrPayment[$this->id]['cc_exp']))
			{
				$strBuffer = '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['cc_exp_paypal'] . '</p>' . $strBuffer;
				$objCheckoutModule->doNotSubmit = true;
			}

			if ($strCard === false)
			{
				$strBuffer = '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['cc_num'] . '</p>' . $strBuffer;
				$objCheckoutModule->doNotSubmit = true;
			}
			elseif ($strCard != $arrPayment[$this->id]['cc_type'])
			{
				$strBuffer = '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['cc_match'] . '</p>' . $strBuffer;
				$objCheckoutModule->doNotSubmit = true;
			}			
			
		}
		
		if (strlen($_SESSION['CHECKOUT_DATA']['payment'][$this->id]['error']))
		{
			$strBuffer = '<p class="error">' . $_SESSION['CHECKOUT_DATA']['payment'][$this->id]['error'] . '</p>' . $strBuffer;
			unset($_SESSION['CHECKOUT_DATA']['payment'][$this->id]['error']);
		}
		
		return $strBuffer;
	}
	
	public function checkoutReview()
	{
		$type = $_SESSION['CHECKOUT_DATA']['payment'][$this->id]['cc_type'];
		$num = $_SESSION['CHECKOUT_DATA']['payment'][$this->id]['cc_num'];
		
		$strCard = implode(' ', str_split((substr($num, 0, 2) . str_repeat('*', (strlen($num)-6)) . substr($num, -4)), 4));
		
		return sprintf('%s<br />%s: %s', $this->label, $GLOBALS['TL_LANG']['CCT'][$type], $strCard);
	}

	
	public function getAllowedCCTypes()
	{
		return array('mc', 'visa', 'amex', 'discover', 'jcb', 'diners');				
	}
	
}

