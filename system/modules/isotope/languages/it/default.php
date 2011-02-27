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
 * @author     Angelica Schempp <aschempp@gmx.net>
 * @author     Paolo B. <paolob@contaocms.it>
 * @author     Dan N <dan@dss.uniud.it>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_LANG']['ERR']['systemColumn'] = 'Questo nome è riservato per l\'uso del sistema. Si prega di scegliere un nome diverso.';
$GLOBALS['TL_LANG']['ERR']['missingButtonTemplate'] = 'Si prega di specificare un template per il pulsante "%s".';
$GLOBALS['TL_LANG']['ERR']['order_conditions'] = 'Deve accettare i termini e le condizioni per poter continuare.';
$GLOBALS['TL_LANG']['ERR']['noStoreConfigurationSet'] = 'Configurazione negozio non disponibile.';
$GLOBALS['TL_LANG']['ERR']['noDefaultStoreConfiguration'] = 'Si prega di creare una configurazione preimpostata del negozio.';
$GLOBALS['TL_LANG']['ERR']['productNameMissing'] = '<nome prodotto non trovato>';
$GLOBALS['TL_LANG']['ERR']['noSubProducts'] = 'nessun sotto-prodotto trovato';
$GLOBALS['TL_LANG']['ERR']['emptyOrderHistory'] = 'Non ha ancora fatto nessun ordine.';
$GLOBALS['TL_LANG']['ERR']['orderNotFound'] = 'L\'ordine richiesto non è stato trovato.';
$GLOBALS['TL_LANG']['ERR']['missingCurrencyFormat'] = 'Formattazione valuta non trovata';
$GLOBALS['TL_LANG']['ERR']['searchNotEnabled'] = 'Funzione ricerca non attivata!';
$GLOBALS['TL_LANG']['ERR']['isoLoginRequired'] = 'Deve essere autenticato per procedere al checkout.';
$GLOBALS['TL_LANG']['ERR']['mandatoryOption'] = 'Si prega di selezionare un\'opzione.';
$GLOBALS['TL_LANG']['ERR']['noAddressData'] = 'E\' richiesto l\'indirizzo postale per poter calcolare le tasse!';
$GLOBALS['TL_LANG']['ERR']['variantDuplicate'] = 'Una variante con questi attributi è già disponibile. Si prega di scegliere una combinazione diversa.';
$GLOBALS['TL_LANG']['ERR']['breadcrumbEmpty'] = 'La categoria filtrata è vuota, tutti prodotti sono visualizzati.';
$GLOBALS['TL_LANG']['ERR']['discount'] = 'Si prega di inserire numeri interi o decimali con il segno + o - e facoltativamente con una percentuale.';
$GLOBALS['TL_LANG']['ERR']['surcharge'] = 'Si prega di inserire numeri interi o decimali, facoltativamente con una percentuale.';
$GLOBALS['TL_LANG']['ERR']['orderFailed'] = 'Checkout fallito. Si prega di riprovare o di scegliere un altro metodo di pagamento.';
$GLOBALS['TL_LANG']['ERR']['specifyBillingAddress'] = 'Non è stato trovato un indirizzo di fatturazione. Si prega di specificarne uno.';
$GLOBALS['TL_LANG']['ERR']['cc_num'] = 'Si prega di inserire un numero valido per la carta di credito.';
$GLOBALS['TL_LANG']['ERR']['cc_type'] = 'Si prega di scegliere il tipo della carta di credito.';
$GLOBALS['TL_LANG']['ERR']['cc_exp'] = 'Si prega di inserire la data di scadenza della carta di credito nel formato mm/aa.';
$GLOBALS['TL_LANG']['ERR']['cc_ccv'] = 'Si prega di inserire il codice di sicurezza della carta di credito (numero di tre o quattro cifre presente sul retro o sul fronte della carta).';
$GLOBALS['TL_LANG']['ERR']['cc_match'] = 'Il suo numero della carta di credito non corrisponde con il tipo della carta di credito selezionato.';
$GLOBALS['TL_LANG']['ERR']['addressDoesNotExist'] = 'Questo indirizzo non esiste nella sua rubrica.';
$GLOBALS['TL_LANG']['ERR']['noAddressBookEntries'] = 'La sua rubrica è vuota.';
$GLOBALS['TL_LANG']['MSC']['labelLanguage'] = 'Lingua';
$GLOBALS['TL_LANG']['MSC']['editLanguage'] = 'Modifica';
$GLOBALS['TL_LANG']['MSC']['deleteLanguage'] = 'Cancella';
$GLOBALS['TL_LANG']['MSC']['defaultLanguage'] = 'Lingua preimpostata';
$GLOBALS['TL_LANG']['MSC']['editingLanguage'] = 'Attenzione: sta per modificare i dati di lingua.';
$GLOBALS['TL_LANG']['MSC']['deleteLanguageConfirm'] = 'E\' sicuro di voler cancellare questa lingua? Non c\'è la possbilità di ripristino!';
$GLOBALS['TL_LANG']['MSC']['undefinedLanguage'] = 'indefinito';
$GLOBALS['TL_LANG']['MSC']['copyFallback'] = 'Duplica la lingua preimpostata';
$GLOBALS['TL_LANG']['MSC']['noSurcharges'] = 'Nessun sovrapprezzo è stato trovato.';
$GLOBALS['TL_LANG']['MSC']['ajaxLoadingMessage'] = 'Caricamento...';
$GLOBALS['TL_LANG']['MSC']['orderDetailsHeadline'] = 'Ordine no %s / %s';
$GLOBALS['TL_LANG']['MSC']['payment_processing'] = 'Stiamo processando il suo pagamento. Si prega di avere un attimo di pazienza...';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet_process_failed'] = 'Il suo pagamento non ha potuto essere processato.<br/><br/>Motivo: %s';
$GLOBALS['TL_LANG']['MSC']['mmNoUploads'] = 'Nessun file caricato.';
$GLOBALS['TL_LANG']['MSC']['mmUpload'] = 'Caricare un nuovo file.';
$GLOBALS['TL_LANG']['MSC']['quantity'] = 'Quantità';
$GLOBALS['TL_LANG']['MSC']['order_conditions'] = 'Accetto i termini e le condizioni';
$GLOBALS['TL_LANG']['MSC']['defaultSearchText'] = 'cercare prodotti';
$GLOBALS['TL_LANG']['MSC']['blankSelectOptionLabel'] = '-';
$GLOBALS['TL_LANG']['MSC']['emptySelectOptionLabel'] = 'Per cortesia scelga...';
$GLOBALS['TL_LANG']['MSC']['downloadsLabel'] = 'I suoi prodotti scaricabili';
$GLOBALS['TL_LANG']['MSC']['priceRangeLabel'] = '<span class="from">Da</span> %s';
$GLOBALS['TL_LANG']['MSC']['detailLabel'] = 'Visualizzare i dettagli';
$GLOBALS['TL_LANG']['MSC']['searchTextBoxLabel'] = 'Cercare termine:';
$GLOBALS['TL_LANG']['MSC']['searchFieldsLabel'] = 'Cercare campi:';
$GLOBALS['TL_LANG']['MSC']['perPageLabel'] = 'Prodotti per pagina';
$GLOBALS['TL_LANG']['MSC']['searchTermsLabel'] = 'Parole chiave';
$GLOBALS['TL_LANG']['MSC']['submitLabel'] = 'Inviare';
$GLOBALS['TL_LANG']['MSC']['clearFiltersLabel'] = 'Cancellare i filtri';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['update'] = 'Aggiornamento';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_cart'] = 'Aggiungere al carello';
$GLOBALS['TL_LANG']['MSC']['pagerSectionTitleLabel'] = 'Pagina:';
$GLOBALS['TL_LANG']['MSC']['orderByLabel'] = 'Ordina per:';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_cart'] = 'Aggiunga il prodotto %s  al carello.';
$GLOBALS['TL_LANG']['MSC']['noProducts'] = 'Nessun prodotto trovato.';
$GLOBALS['TL_LANG']['MSC']['invalidProductInformation'] = 'Spiacenti, l\'informazione sul prodotto riechiesto non puo\' essere visualizzata. Si prega di contattarci per ulteriore assistenza.';
$GLOBALS['TL_LANG']['MSC']['productOptionsLabel'] = 'Opzioni';
$GLOBALS['TL_LANG']['MSC']['previousStep'] = 'Indietro';
$GLOBALS['TL_LANG']['MSC']['nextStep'] = 'Continuare';
$GLOBALS['TL_LANG']['MSC']['confirmOrder'] = 'Ordine';
$GLOBALS['TL_LANG']['MSC']['noCategoriesAssociated'] = 'Nessuna categoria è associata a questo prodotto.';
$GLOBALS['TL_LANG']['MSC']['labelPerPage'] = 'Per pagina';
$GLOBALS['TL_LANG']['MSC']['labelSortBy'] = 'Ordinare per';
$GLOBALS['TL_LANG']['MSC']['labelSubmit'] = 'Inviare';
$GLOBALS['TL_LANG']['MSC']['labelProductVariants'] = 'Per favore selezioni';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkText'] = 'Togliere';
$GLOBALS['TL_LANG']['MSC']['noItemsInCart'] = 'Non ci sono prodotti nel suo carrello.';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkTitle'] = 'Togliere %s dal carrello.';
$GLOBALS['TL_LANG']['MSC']['subTotalLabel'] = 'Subtotale ordine:';
$GLOBALS['TL_LANG']['MSC']['shippingLabel'] = 'Spedizione';
$GLOBALS['TL_LANG']['MSC']['paymentLabel'] = 'Pagamento';
$GLOBALS['TL_LANG']['MSC']['taxLabel'] = '%s Tasse:';
$GLOBALS['TL_LANG']['MSC']['grandTotalLabel'] = 'Totale Ordine:';
$GLOBALS['TL_LANG']['MSC']['shippingOptionsLabel'] = 'Opzioni di spedizione selezionati:';
$GLOBALS['TL_LANG']['MSC']['noVariants'] = 'Nessuna versione di prodotto trovata.';
$GLOBALS['TL_LANG']['MSC']['generateSubproducts'] = 'Crea sottoprodotti';
$GLOBALS['TL_LANG']['MSC']['selectItemPrompt'] = '(seleziona)';
$GLOBALS['TL_LANG']['MSC']['actualPrice'] = 'Prezzo attuale';
$GLOBALS['TL_LANG']['MSC']['noPaymentModules'] = 'Nessun opzione di pagamento è disponibile al momento.';
$GLOBALS['TL_LANG']['MSC']['noShippingModules'] = 'Nessun opzione di spedizione è disponibile al momento.';
$GLOBALS['TL_LANG']['MSC']['noOrderEmails'] = 'Nessun ordine per email trovato.';
$GLOBALS['TL_LANG']['MSC']['noOrders'] = 'Nessun ordine trovato.';
$GLOBALS['TL_LANG']['ISO']['couponsInputLabel'] = 'Codice promozionale';
$GLOBALS['TL_LANG']['ISO']['couponsHeadline'] = 'Applica Codici Promozionali';
$GLOBALS['TL_LANG']['ISO']['couponsSubmitLabel'] = 'Applicare';
$GLOBALS['TL_LANG']['MSC']['cartBT'] = 'Carrello';
$GLOBALS['TL_LANG']['MSC']['checkoutBT'] = 'Procede al Checkout';
$GLOBALS['TL_LANG']['MSC']['continueShoppingBT'] = 'Continuare ad acquistare';
$GLOBALS['TL_LANG']['MSC']['updateCartBT'] = 'Aggiornare il carrello';
$GLOBALS['TL_LANG']['MSC']['orderStatusHeadline'] = 'Stato Ordine: %s';
$GLOBALS['TL_LANG']['MSC']['checkboutStepBack'] = 'Indietro al passo "%s"';
$GLOBALS['TL_LANG']['MSC']['createNewAddressLabel'] = 'Creare un nuovo indirizzo';
$GLOBALS['TL_LANG']['MSC']['useBillingAddress'] = 'Usare l\'indirizzo di fatturazione';
$GLOBALS['TL_LANG']['MSC']['useCustomerAddress'] = 'Usare l\'indirizzo del cliente';
$GLOBALS['TL_LANG']['MSC']['differentShippingAddress'] = 'Indirizzo di spedizione diverso';
$GLOBALS['TL_LANG']['MSC']['addressBookLabel'] = 'Indirizzi';
$GLOBALS['TL_LANG']['MSC']['editAddressLabel'] = 'Modificare';
$GLOBALS['TL_LANG']['MSC']['deleteAddressLabel'] = 'Cancellare';
$GLOBALS['TL_LANG']['MSC']['iso_invoice_title'] = 'Fattura';
$GLOBALS['TL_LANG']['MSC']['iso_order_status'] = 'Stato';
$GLOBALS['TL_LANG']['MSC']['iso_order_date'] = 'Data dell\'ordine';
$GLOBALS['TL_LANG']['MSC']['iso_billing_address_header'] = 'Indirizzo di fattura';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_address_header'] = 'Indirizzo di spedizione';
$GLOBALS['TL_LANG']['MSC']['iso_tax_header'] = 'Tasse';
$GLOBALS['TL_LANG']['MSC']['iso_subtotal_header'] = 'Subtotale';
$GLOBALS['TL_LANG']['MSC']['iso_order_shipping_header'] = 'Servizio di imballaggio e spedizione';
$GLOBALS['TL_LANG']['MSC']['iso_order_grand_total_header'] = 'Importo totale';
$GLOBALS['TL_LANG']['MSC']['iso_order_items'] = 'Oggetti';
$GLOBALS['TL_LANG']['MSC']['iso_quantity_header'] = 'Quantità';
$GLOBALS['TL_LANG']['MSC']['iso_price_header'] = 'Prezzo';
$GLOBALS['TL_LANG']['MSC']['iso_sku_header'] = 'Numero dell\'articolo';
$GLOBALS['TL_LANG']['MSC']['iso_product_name_header'] = 'Nome Prodotto';
$GLOBALS['TL_LANG']['MSC']['iso_card_name_title'] = 'Nome sulla Carta di Credito';
$GLOBALS['TL_LANG']['ORDER']['pending'] = 'Pendente';
$GLOBALS['TL_LANG']['ORDER']['processing'] = 'In elaborazione';
$GLOBALS['TL_LANG']['ORDER']['complete'] = 'Completato';
$GLOBALS['TL_LANG']['ORDER']['on_hold'] = 'In attesa';
$GLOBALS['TL_LANG']['ORDER']['cancelled'] = 'Cancellato';
$GLOBALS['TL_LANG']['MSC']['low_to_high'] = 'dal basso all\'alto';
$GLOBALS['TL_LANG']['MSC']['high_to_low'] = 'dall\'alto al basso';
$GLOBALS['TL_LANG']['MSC']['a_to_z'] = 'dalla A alla Z';
$GLOBALS['TL_LANG']['MSC']['z_to_a'] = 'dalla Z alla A';
$GLOBALS['TL_LANG']['MSC']['old_to_new'] = 'dal meno recente all\'ultimo';
$GLOBALS['TL_LANG']['MSC']['new_to_old'] = 'dall\'ultimo al meno recente';
$GLOBALS['ISO_LANG']['MSC']['useDefault'] = 'Usa valori preimpostati';
$GLOBALS['TL_LANG']['ISO']['productSingle'] = '1 Prodotto';
$GLOBALS['TL_LANG']['ISO']['productMultiple'] = '%s Prodotti';
$GLOBALS['TL_LANG']['ISO']['shipping_address_message'] = 'Inserire l\'informazione sulla spedizione o scegliere un indirizzo esistente.';
$GLOBALS['TL_LANG']['ISO']['billing_address_message'] = 'Inserire l\'informazione sul pagamento o scegliere un indirizzo esistente.';
$GLOBALS['TL_LANG']['ISO']['billing_address_guest_message'] = 'Inserire l\'informazione sul pagamento.';
$GLOBALS['TL_LANG']['ISO']['customer_address_message'] = 'Inserisca i suoi dati cliente o scelga un indirizzo esistente.';
$GLOBALS['TL_LANG']['ISO']['customer_address_guest_message'] = 'Inserisca le sue informazioni cliente';
$GLOBALS['TL_LANG']['ISO']['shipping_method_message'] = 'Selezionare un servizio di spedizione.';
$GLOBALS['TL_LANG']['ISO']['shipping_method_missing'] = 'Si prega di selezionare un servizio di spedizione.';
$GLOBALS['TL_LANG']['ISO']['payment_method_message'] = 'Inserire l\'informazione sul pagamento.';
$GLOBALS['TL_LANG']['ISO']['payment_method_missing'] = 'Si prega di selezionare un metodo di pagamento.';
$GLOBALS['TL_LANG']['ISO']['order_review_message'] = 'Controlli e confermi i dettagli dell\'ordine.';
$GLOBALS['TL_LANG']['ISO']['checkout_address'] = 'Indirizzo';
$GLOBALS['TL_LANG']['ISO']['checkout_shipping'] = 'Spedizione';
$GLOBALS['TL_LANG']['ISO']['checkout_payment'] = 'Pagamento';
$GLOBALS['TL_LANG']['ISO']['checkout_review'] = 'Controllare';
$GLOBALS['TL_LANG']['ISO']['billing_address'] = 'Indirizzo di pagamento';
$GLOBALS['TL_LANG']['ISO']['shipping_address'] = 'Indirizzo di spedizione';
$GLOBALS['TL_LANG']['ISO']['billing_shipping_address'] = 'Indirizzo di pagamento e spedizione';
$GLOBALS['TL_LANG']['ISO']['customer_address'] = 'Indirizzo del cliente';
$GLOBALS['TL_LANG']['ISO']['shipping_method'] = 'Servizio di spedizione';
$GLOBALS['TL_LANG']['ISO']['payment_method'] = 'Metodo di pagamento';
$GLOBALS['TL_LANG']['ISO']['order_conditions'] = 'Condizioni per poter ordinare';
$GLOBALS['TL_LANG']['ISO']['order_review'] = 'Controllare l\'ordine';
$GLOBALS['TL_LANG']['ISO']['changeCheckoutInfo'] = 'Cambia';
$GLOBALS['TL_LANG']['ISO']['cc_num'] = 'Numero della carta di credito';
$GLOBALS['TL_LANG']['ISO']['cc_type'] = 'Tipo della carta di credito';
$GLOBALS['TL_LANG']['ISO']['cc_ccv'] = 'Numero CCV (codice di 3 o 4 cifre)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_paypal'] = 'Data di scadenza';
$GLOBALS['TL_LANG']['ISO']['cc_exp_date'] = 'Scadenza mese/anno';
$GLOBALS['TL_LANG']['ISO']['cc_exp_month'] = 'Mese di scadenza';
$GLOBALS['TL_LANG']['ISO']['cc_exp_year'] = 'Anno di scadenza';
$GLOBALS['TL_LANG']['ISO']['cc_issue_number'] = 'Data di rilascio della carta di credito, 2 cifre (richiesta per carte Maestro e Solo)';
$GLOBALS['TL_LANG']['ISO']['cc_start_date'] = 'Data d\'inizio della carta di credito (richiesta per carte Maestro e Solo)';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][0] = 'Il pagamento viene elaborato';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][1] = 'Si prega di inserire l\'informazione richiesta per poter elaborare il pagamento.';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][2] = 'Paga ora';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][0] = 'Il pagamento viene processato';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][1] = 'Sarà automaticamente deviato/a sul sito del prestatore di servizi di pagamento. Se la deviazione non avviene automaticamente, si prega di cliccare sul bottone "Paga ora".';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][2] = 'Paga ora';
$GLOBALS['TL_LANG']['MSC']['backendPaymentEPay'] = 'Per cortesia usi il seguente indirizzo per accedere al pannello amministratore di ePay';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNotFound'] = 'Modulo di pagamento non trovato!';
$GLOBALS['TL_LANG']['ISO']['backendShippingNotFound'] = 'Modulo di spedizione non trovato!';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNoInfo'] = 'Questo modulo di pagamento non ha informazioni aggiuntivi.';
$GLOBALS['TL_LANG']['ISO']['backendShippingNoInfo'] = 'Questo modulo di spedizione non ha informazioni aggiuntivi.';
$GLOBALS['TL_LANG']['SHIP']['flat'][0] = 'Spedizione a prezzo fisso';
$GLOBALS['TL_LANG']['SHIP']['weight_total'][0] = 'Spedizione in base al peso totale';
$GLOBALS['TL_LANG']['SHIP']['order_total'][0] = 'Spedizione in base all\'ordine totale';
$GLOBALS['TL_LANG']['SHIP']['collection'][0] = 'Incasso';
$GLOBALS['TL_LANG']['SHIP']['ups'][0] = 'Tariffe e servizio spedizione UPS Live';
$GLOBALS['TL_LANG']['SHIP']['usps'][0] = 'Tariffe e servizio spedizione USPS Live';
$GLOBALS['TL_LANG']['PAY']['cash'][0] = 'Pagamento in contanti (bonifico)';
$GLOBALS['TL_LANG']['PAY']['cash'][1] = 'Usa questo per tutti i pagamenti elaborati offline.';
$GLOBALS['TL_LANG']['PAY']['paypal'][0] = 'Checkout PayPal Standard';
$GLOBALS['TL_LANG']['PAY']['paypal'][1] = 'Questo modulo PayPal supporta IPN (Notifiche Pagamenti Istantanee)';
$GLOBALS['TL_LANG']['PAY']['paypalpayflowpro'][0] = 'PayPal Payflow Pro';
$GLOBALS['TL_LANG']['PAY']['paypalpayflowpro'][1] = 'Il modulo Paypal Payflow è un\'interfaccia per carte di credito che offre un servizio completo. Una soluzione robusta per la maggior parte dei siti e-commerce.';
$GLOBALS['TL_LANG']['PAY']['postfinance'][0] = 'Postfinance';
$GLOBALS['TL_LANG']['PAY']['postfinance'][1] = 'Un\'interfaccia di pagamento per il sistema di pagamento delle Poste Svizzere che supporta vari tipi di carte di credito. Il negozio viene subito avvertito di tutte le transazioni andate a buon fine.';
$GLOBALS['TL_LANG']['PAY']['authorizedotnet'][0] = 'Authorize.net';
$GLOBALS['TL_LANG']['PAY']['authorizedotnet'][1] = 'Un\'interfaccia di pagamento Authorize.net';
$GLOBALS['TL_LANG']['PAY']['cybersource'][0] = 'Cybersource';
$GLOBALS['TL_LANG']['PAY']['cybersource'][1] = 'Per utenti Cybersource. Usa il metodo Simple Order API.';
$GLOBALS['TL_LANG']['GAL']['default'][0] = 'Galleria preimpostata (Lightbox / Mediabox)';
$GLOBALS['TL_LANG']['GAL']['default'][1] = '<p>Usa la lightbox/mediabox per immagini di misura 1:1. Assicurarsi di selezionare il moo_template appropriato nella configurazione del layout della pagina.</p><p>Può fornire un attributo "rel" al link target usando una pipe (ad esempio "tl_files/video.mov|lightbox[400 300]"). Se nessun attributo "rel" è stato fornito, il link sarà aperto in una nuova finestra.</p>';
$GLOBALS['TL_LANG']['GAL']['inline'][0] = 'Galleria inline';
$GLOBALS['TL_LANG']['GAL']['inline'][1] = '<p>Cliccando sulla galleria l\'immagine la caricherà al posto dell\'immagine principale. Deve caricare l\'immagine principale due volte nel sistema per averla disponibile nella gallery</p>';
$GLOBALS['TL_LANG']['ISO_PRODUCT']['regular'][0] = 'Prodotto normale';
$GLOBALS['TL_LANG']['ISO_PRODUCT']['regular'][1] = 'Prodotto preimpostato. Scegliere questo nel caso nessun\'altro prodotto fosse appropriato.';
$GLOBALS['TL_LANG']['CCT']['mc'] = 'MasterCard';
$GLOBALS['TL_LANG']['CCT']['visa'] = 'Visa';
$GLOBALS['TL_LANG']['CCT']['amex'] = 'American Express';
$GLOBALS['TL_LANG']['CCT']['discover'] = 'Discover';
$GLOBALS['TL_LANG']['CCT']['jcb'] = 'JCB';
$GLOBALS['TL_LANG']['CCT']['diners'] = 'Diner\'s Club';
$GLOBALS['TL_LANG']['CCT']['enroute'] = 'EnRoute';
$GLOBALS['TL_LANG']['CCT']['carte_blanche'] = 'Carte Blanche';
$GLOBALS['TL_LANG']['CCT']['jal'] = 'JAL';
$GLOBALS['TL_LANG']['CCT']['maestro'] = 'Maestro UK';
$GLOBALS['TL_LANG']['CCT']['delta'] = 'Delta';
$GLOBALS['TL_LANG']['CCT']['solo'] = 'Solo';
$GLOBALS['TL_LANG']['CCT']['visa_electron'] = 'Visa Electron';
$GLOBALS['TL_LANG']['CCT']['dankort'] = 'Dankort';
$GLOBALS['TL_LANG']['CCT']['laser'] = 'Laser';
$GLOBALS['TL_LANG']['CCT']['carte_bleue'] = 'Carte Bleue';
$GLOBALS['TL_LANG']['CCT']['carta_si'] = 'Carta Sì';
$GLOBALS['TL_LANG']['CCT']['enc_acct_num'] = 'Encoded Account Number';
$GLOBALS['TL_LANG']['CCT']['uatp'] = 'UniveUniversal Air Travel Program';
$GLOBALS['TL_LANG']['CCT']['maestro_intl'] = 'Maestro International';
$GLOBALS['TL_LANG']['CCT']['ge_money_uk'] = 'GE Money UK';
$GLOBALS['TL_LANG']['WGT']['mg'][0] = 'Miligrammo (mg)';
$GLOBALS['TL_LANG']['WGT']['mg'][1] = 'Un\'unità di misura equivalente ad un millesimo di un grammo.';
$GLOBALS['TL_LANG']['WGT']['g'][0] = 'Grammo (g)';
$GLOBALS['TL_LANG']['WGT']['g'][1] = 'Un\'unità di peso equivalente ad un millesimo di un chilogrammo.';
$GLOBALS['TL_LANG']['WGT']['kg'][0] = 'Kilogrammo (kg)';
$GLOBALS['TL_LANG']['WGT']['kg'][1] = 'Un kilogrammo è equivalente a 1000 grammi o 2,2 libbre; la misura di un litro d\'acqua.';
$GLOBALS['TL_LANG']['WGT']['t'][0] = 'Tonnellata metrica (t)';
$GLOBALS['TL_LANG']['WGT']['t'][1] = 'Un\'unità equivalente a 1000 chilogrammi, o 2204,6 libbre.';
$GLOBALS['TL_LANG']['WGT']['ct'][0] = 'Carato (ct)';
$GLOBALS['TL_LANG']['WGT']['ct'][1] = 'Una misura di peso per pietre preziose. Un carato è equivalente ad 1/5 di un grammo (200 milligrammo). Si prega di notificare che un carato con la lettera "K" è una misura per la purità di una lega d\'oro.';
$GLOBALS['TL_LANG']['WGT']['oz'][0] = 'Oncia (oz)';
$GLOBALS['TL_LANG']['WGT']['oz'][1] = 'Un\'unità equivalente ad un sedicesimo di una libbra o 28,35 grammi.';
$GLOBALS['TL_LANG']['WGT']['lb'][0] = 'Libbra (lb)';
$GLOBALS['TL_LANG']['WGT']['lb'][1] = 'Un\'unità equivalente a 16 once.';
$GLOBALS['TL_LANG']['WGT']['st'][0] = 'Stone (st)';
$GLOBALS['TL_LANG']['WGT']['st'][1] = 'Un\'unità di misura britannica equivalente a quattordici libbre.';
$GLOBALS['TL_LANG']['WGT']['grain'][0] = 'Grain';
$GLOBALS['TL_LANG']['WGT']['grain'][1] = '1/7000 libbre, equivalente ad un troy grain o 64,799 milligrammo.';
$GLOBALS['TL_LANG']['ATTR']['text'][0] = 'Campo di testo';
$GLOBALS['TL_LANG']['ATTR']['text'][1] = 'Un campo d\'inserimento di una riga per un testo di piccola o media dimensione.';
$GLOBALS['TL_LANG']['ATTR']['textarea'][0] = 'Area di testo';
$GLOBALS['TL_LANG']['ATTR']['textarea'][1] = 'Un campo d\'inserimento di piu\' righe per un testo di media o grande dimensione.';
$GLOBALS['TL_LANG']['ATTR']['select'][0] = 'Menu selezione';
$GLOBALS['TL_LANG']['ATTR']['select'][1] = 'Un menu a tendina di una o piu\' righe.</br><i>Questo campo puo\' essere utilizzato per vari prodotti.</i>';
$GLOBALS['TL_LANG']['ATTR']['radio'][0] = 'Menu bottoni radio';
$GLOBALS['TL_LANG']['ATTR']['radio'][1] = 'Una lista di varie opzioni dalla quale una puo\' essere selezionata.<br/><i> Questo campo puo\' essere utilizzato per vari prodotti.</i>';
$GLOBALS['TL_LANG']['ATTR']['checkbox'][0] = 'Menu checkbox';
$GLOBALS['TL_LANG']['ATTR']['checkbox'][1] = 'Una lista con varie opzioni dalla quale qualsiasi può essere selezionata.';
$GLOBALS['TL_LANG']['ATTR']['mediaManager'][0] = 'Media Manager';
$GLOBALS['TL_LANG']['ATTR']['mediaManager'][1] = 'Carica immagini ed altri file nel sistema Isotope eCommerce. L\'output è processato tramite una classe IsotopeGallery.';
$GLOBALS['TL_LANG']['ATTR']['conditionalselect'][0] = 'Menu Selezione Condizionale';
$GLOBALS['TL_LANG']['ATTR']['conditionalselect'][1] = 'Mostra opzioni di selezione basato su un altro menu di selezione.';
$GLOBALS['TL_LANG']['CUR']['AED'] = 'AED - Dirham Emirati Arabi Uniti';
$GLOBALS['TL_LANG']['CUR']['AFN'] = 'AFN - Afghani';
$GLOBALS['TL_LANG']['CUR']['ALL'] = 'ALL - Lek';
$GLOBALS['TL_LANG']['CUR']['AMD'] = 'AMD - Dram';
$GLOBALS['TL_LANG']['CUR']['ANG'] = 'ANG - Fiorino Antille Olandesi';
$GLOBALS['TL_LANG']['CUR']['AOA'] = 'AOA - Kwanza';
$GLOBALS['TL_LANG']['CUR']['ARS'] = 'ARS - Peso Nuovo \'Argentina';
$GLOBALS['TL_LANG']['CUR']['AUD'] = 'AUD - Dollaro Australia';
$GLOBALS['TL_LANG']['CUR']['AWG'] = 'AWG - Fiorino Aruba';
$GLOBALS['TL_LANG']['CUR']['AZN'] = 'AZN - Nuova Manat Azerbaigian';
$GLOBALS['TL_LANG']['CUR']['BAM'] = 'BAM - Marco Bosnia';
$GLOBALS['TL_LANG']['CUR']['BBD'] = 'BBD - Dollaro delle Barbados';
$GLOBALS['TL_LANG']['CUR']['BDT'] = 'BDT - Taka';
$GLOBALS['TL_LANG']['CUR']['BGN'] = 'BGN - Lev della Bulgaria';
$GLOBALS['TL_LANG']['CUR']['BHD'] = 'BHD - Dinaro del Bahrain';
$GLOBALS['TL_LANG']['CUR']['BIF'] = 'BIF - Franco del Burundi';
$GLOBALS['TL_LANG']['CUR']['BMD'] = 'BMD - Dollaro delle Bermuda';
$GLOBALS['TL_LANG']['CUR']['BND'] = 'BND - Dollaro del Brunei';
$GLOBALS['TL_LANG']['CUR']['BOB'] = 'BOB - Boliviano';
$GLOBALS['TL_LANG']['CUR']['BRL'] = 'BRL - Real del Brasile';
$GLOBALS['TL_LANG']['CUR']['BSD'] = 'BSD - Dollaro delle Bahamas';
$GLOBALS['TL_LANG']['CUR']['BTN'] = 'BTN - Ngultrum';
$GLOBALS['TL_LANG']['CUR']['BWP'] = 'BWP - Pula';
$GLOBALS['TL_LANG']['CUR']['BYR'] = 'BYR - Rublo bielorusso';
$GLOBALS['TL_LANG']['CUR']['BZD'] = 'BZD - Dollaro del Belize';
$GLOBALS['TL_LANG']['CUR']['CAD'] = 'CAD - Dollaro canadiano';
$GLOBALS['TL_LANG']['CUR']['CDZ'] = 'CDZ - Nuova Zaire';
$GLOBALS['TL_LANG']['CUR']['CHF'] = 'CHF - Franco svizzero';
$GLOBALS['TL_LANG']['CUR']['CLF'] = 'CLF - Unidades de Fomento';
$GLOBALS['TL_LANG']['CUR']['CLP'] = 'CLP - Peso cileno';
$GLOBALS['TL_LANG']['CUR']['CNY'] = 'CNY - Renminbi Yuan della Cina';
$GLOBALS['TL_LANG']['CUR']['COP'] = 'COP - Peso colombiano';
$GLOBALS['TL_LANG']['CUR']['CRC'] = 'CRC - Colon della Costa Rica';
$GLOBALS['TL_LANG']['CUR']['CUP'] = 'CUP - Peso cubano';
$GLOBALS['TL_LANG']['CUR']['CVE'] = 'CVE - Scudo del Capoverde';
$GLOBALS['TL_LANG']['CUR']['CZK'] = 'CZK - Corona ceca';
$GLOBALS['TL_LANG']['CUR']['DJF'] = 'DJF - Franco del Djibouti';
$GLOBALS['TL_LANG']['CUR']['DKK'] = 'DKK - Corona danese';
$GLOBALS['TL_LANG']['CUR']['DOP'] = 'DOP - Peso della Repubblica Dominicana';
$GLOBALS['TL_LANG']['CUR']['DZD'] = 'DZD - Dinaro algerino';
$GLOBALS['TL_LANG']['CUR']['EEK'] = 'EEK - Corona dell\'Estonia';
$GLOBALS['TL_LANG']['CUR']['EGP'] = 'EGP - Sterlina egiziana';
$GLOBALS['TL_LANG']['CUR']['ERN'] = 'ERN - Nakfa dell\'Eritrea';
$GLOBALS['TL_LANG']['CUR']['ETB'] = 'ETB - Birr dell\'Etiopia';
$GLOBALS['TL_LANG']['CUR']['EUR'] = 'EUR - Euro';
$GLOBALS['TL_LANG']['CUR']['FJD'] = 'FJD - Dollaro delle Figi';
$GLOBALS['TL_LANG']['CUR']['FKP'] = 'FKP - Lira sterlina delle Falkland';
$GLOBALS['TL_LANG']['CUR']['GBP'] = 'GBP - Sterlina inglese';
$GLOBALS['TL_LANG']['CUR']['GEL'] = 'GEL - Lari';
$GLOBALS['TL_LANG']['CUR']['GHS'] = 'GHS - Nuovo cedi del Ghana';
$GLOBALS['TL_LANG']['CUR']['GIP'] = 'GIP - Lira sterlina della Gibilterra';
$GLOBALS['TL_LANG']['CUR']['GMD'] = 'GMD - Dalasi';
$GLOBALS['TL_LANG']['CUR']['GNS'] = 'GNS - Syli (anche franco del Guinea)';
$GLOBALS['TL_LANG']['CUR']['GTQ'] = 'GTQ - Quetzal';
$GLOBALS['TL_LANG']['CUR']['GYD'] = 'GYD - Dollaro della Guyana';
$GLOBALS['TL_LANG']['CUR']['HKD'] = 'HKD - Dollaro del Hong Kong';
$GLOBALS['TL_LANG']['CUR']['HNL'] = 'HNL - Lempira';
$GLOBALS['TL_LANG']['CUR']['HRD'] = 'HRD - Dinaro croato';
$GLOBALS['TL_LANG']['CUR']['HRK'] = 'HRK - Kuna croata';
$GLOBALS['TL_LANG']['CUR']['HTG'] = 'HTG - Gourde';
$GLOBALS['TL_LANG']['CUR']['HUF'] = 'HUF - Forint';
$GLOBALS['TL_LANG']['CUR']['IDR'] = 'IDR - Rupia';
$GLOBALS['TL_LANG']['CUR']['ILS'] = 'ILS - Nuovo shekel';
$GLOBALS['TL_LANG']['CUR']['INR'] = 'INR - Rupia indiana';
$GLOBALS['TL_LANG']['CUR']['IQD'] = 'IQD - Dinaro iracheno';
$GLOBALS['TL_LANG']['CUR']['IRR'] = 'IRR - Rial del Iran';
$GLOBALS['TL_LANG']['CUR']['ISK'] = 'ISK - Corona dell\'Islanda';
$GLOBALS['TL_LANG']['CUR']['JMD'] = 'JMD - Dollaro della Giamaica';
$GLOBALS['TL_LANG']['CUR']['JOD'] = 'JOD - Dinaro della Jordania';
$GLOBALS['TL_LANG']['CUR']['JPY'] = 'JPY - Yen';
$GLOBALS['TL_LANG']['CUR']['KES'] = 'KES - Scellino keniano';
$GLOBALS['TL_LANG']['CUR']['KGS'] = 'KGS - Som del Kirghizistan';
$GLOBALS['TL_LANG']['CUR']['KHR'] = 'KHR - Riel';
$GLOBALS['TL_LANG']['CUR']['KMF'] = 'KMF - Franco del Comore';
$GLOBALS['TL_LANG']['CUR']['KPW'] = 'KPW - Won del Corea del Nord';
$GLOBALS['TL_LANG']['CUR']['KRW'] = 'KRW - Won del Corea del Sud';
$GLOBALS['TL_LANG']['CUR']['KWD'] = 'KWD - Dinaro del Kuwait';
$GLOBALS['TL_LANG']['CUR']['KYD'] = 'KYD - Dollaro delle Isole Cayman';
$GLOBALS['TL_LANG']['CUR']['KZT'] = 'KZT - Tenge';
$GLOBALS['TL_LANG']['CUR']['LAK'] = 'LAK - Kip';
$GLOBALS['TL_LANG']['CUR']['LBP'] = 'LBP - Sterlina del Libano';
$GLOBALS['TL_LANG']['CUR']['LKR'] = 'LKR - Rupia dello Sri Lanka';
$GLOBALS['TL_LANG']['CUR']['LRD'] = 'LRD - Dollaro liberiano';
$GLOBALS['TL_LANG']['CUR']['LSL'] = 'LSL - Loti';
$GLOBALS['TL_LANG']['CUR']['LSM'] = 'LSM - Maloti';
$GLOBALS['TL_LANG']['CUR']['LTL'] = 'LTL - Litas';
$GLOBALS['TL_LANG']['CUR']['LVL'] = 'LVL - Lats';
$GLOBALS['TL_LANG']['CUR']['LYD'] = 'LYD - Dinaro della Libia';
$GLOBALS['TL_LANG']['CUR']['MAD'] = 'MAD - Dirham marochino';
$GLOBALS['TL_LANG']['CUR']['MDL'] = 'MDL - Leu della Moldavia';
$GLOBALS['TL_LANG']['CUR']['MGA'] = 'MGA - Ariary del Madagascar';
$GLOBALS['TL_LANG']['CUR']['MKD'] = 'MKD - Dinaro macedone';
$GLOBALS['TL_LANG']['CUR']['MMK'] = 'MMK - Kyat';
$GLOBALS['TL_LANG']['CUR']['MNT'] = 'MNT - Tugrik';
$GLOBALS['TL_LANG']['CUR']['MOP'] = 'MOP - Pataca';
$GLOBALS['TL_LANG']['CUR']['MRO'] = 'MRO - Ouguiya';
$GLOBALS['TL_LANG']['CUR']['MUR'] = 'MUR - Rupia mauriziana';
$GLOBALS['TL_LANG']['CUR']['MVR'] = 'MVR - Rufiyaa';
$GLOBALS['TL_LANG']['CUR']['MWK'] = 'MWK - Kwacha del Malawi';
$GLOBALS['TL_LANG']['CUR']['MYR'] = 'MYR - Ringgit (Dollaro della Malesia)';
$GLOBALS['TL_LANG']['CUR']['MZN'] = 'MZN - Metical Mozambico';
$GLOBALS['TL_LANG']['CUR']['NAD'] = 'NAD - Dollaro Namibia';
$GLOBALS['TL_LANG']['CUR']['NGN'] = 'NGN - Naira';
$GLOBALS['TL_LANG']['CUR']['NIC'] = 'NIC - Córdoba';
$GLOBALS['TL_LANG']['CUR']['NOK'] = 'NOK - Corona Norvegese';
$GLOBALS['TL_LANG']['CUR']['NPR'] = 'NPR - Rupia Nepalese';
$GLOBALS['TL_LANG']['CUR']['NZD'] = 'NZD - Dollaro Nuova Zeelanda';
$GLOBALS['TL_LANG']['CUR']['OMR'] = 'OMR - Reale Oman';
$GLOBALS['TL_LANG']['CUR']['PAB'] = 'PAB - Balboa';
$GLOBALS['TL_LANG']['CUR']['PEN'] = 'PEN - Nuovo Sol';
$GLOBALS['TL_LANG']['CUR']['PGK'] = 'PGK - Kina';
$GLOBALS['TL_LANG']['CUR']['PHP'] = 'PHP - Peso Filipino';
$GLOBALS['TL_LANG']['CUR']['PKR'] = 'PKR - Rupia Pakistani';
$GLOBALS['TL_LANG']['CUR']['PLN'] = 'PLN - Nuovo Zloty Polacco';
$GLOBALS['TL_LANG']['CUR']['PYG'] = 'PYG - Guarani';
$GLOBALS['TL_LANG']['CUR']['QAR'] = 'QAR - Reale Qatar';
$GLOBALS['TL_LANG']['CUR']['RON'] = 'RON - Nuovo Leu Romeno';
$GLOBALS['TL_LANG']['CUR']['RSD'] = 'RSD - Dinar Serbo';
$GLOBALS['TL_LANG']['CUR']['RUB'] = 'RUB - Rublo Federazione Russa';
$GLOBALS['TL_LANG']['CUR']['RWF'] = 'RWF - Franco Rwandana';
$GLOBALS['TL_LANG']['CUR']['SAR'] = 'SAR - Reale Saudita';
$GLOBALS['TL_LANG']['CUR']['SBD'] = 'SBD - Dollaro Isole Solomon';
$GLOBALS['TL_LANG']['CUR']['SCR'] = 'SCR - Rupia Seychelles';
$GLOBALS['TL_LANG']['CUR']['SDG'] = 'SDG - Pound Sudanese';
$GLOBALS['TL_LANG']['CUR']['SEK'] = 'SEK - Corona Svedese';
$GLOBALS['TL_LANG']['CUR']['SGD'] = 'SGD - Dollaro Singapore';
$GLOBALS['TL_LANG']['CUR']['SHP'] = 'SHP - Pound St Helena';
$GLOBALS['TL_LANG']['CUR']['SLL'] = 'SLL - Leone';
$GLOBALS['TL_LANG']['CUR']['SOS'] = 'SOS - Somalo Shilling';
$GLOBALS['TL_LANG']['CUR']['SRD'] = 'SRD - Dollaro Surinam';
$GLOBALS['TL_LANG']['CUR']['STD'] = 'STD - Dobra';
$GLOBALS['TL_LANG']['CUR']['SYP'] = 'SYP - Pound Siriano';
$GLOBALS['TL_LANG']['CUR']['SZL'] = 'SZL - Lilangeni';
$GLOBALS['TL_LANG']['CUR']['THB'] = 'THB - Baht';
$GLOBALS['TL_LANG']['CUR']['TJS'] = 'TJS - Somoni Tajikistan';
$GLOBALS['TL_LANG']['CUR']['TMT'] = 'TMT - Manat Turkmenistani';
$GLOBALS['TL_LANG']['CUR']['TND'] = 'TND - Dinar Tunisino';
$GLOBALS['TL_LANG']['CUR']['TOP'] = 'TOP - Pa\'anga';
$GLOBALS['TL_LANG']['CUR']['TPE'] = 'TPE - Escudo Timorian';
$GLOBALS['TL_LANG']['CUR']['TRY'] = 'TRY - Nuova Lira Turchia';
$GLOBALS['TL_LANG']['CUR']['TTD'] = 'TTD - Dollar  Trinidad e Tobago';
$GLOBALS['TL_LANG']['CUR']['TWD'] = 'TWD - Dollaro Taiwan';
$GLOBALS['TL_LANG']['CUR']['TZS'] = 'TZS - Shilling Tanzania';
$GLOBALS['TL_LANG']['CUR']['UAH'] = 'UAH - Hryvna';
$GLOBALS['TL_LANG']['CUR']['UGX'] = 'UGX - Shilling  Uganda';
$GLOBALS['TL_LANG']['CUR']['USD'] = 'USD - Dollaro Stati Uniti';
$GLOBALS['TL_LANG']['CUR']['UYU'] = 'UYU - Peso Uruguay';
$GLOBALS['TL_LANG']['CUR']['UZS'] = 'UZS - Som Uzbekistan';
$GLOBALS['TL_LANG']['CUR']['VEF'] = 'VEF - Bolivar Forte';
$GLOBALS['TL_LANG']['CUR']['VND'] = 'VND - Dông Vietnam';
$GLOBALS['TL_LANG']['CUR']['VUV'] = 'VUV - Vatu';
$GLOBALS['TL_LANG']['CUR']['WST'] = 'WST - Tala';
$GLOBALS['TL_LANG']['CUR']['YER'] = 'YER - Real Yemen';
$GLOBALS['TL_LANG']['CUR']['ZAR'] = 'ZAR - Rand';
$GLOBALS['TL_LANG']['CUR']['ZMK'] = 'ZMK -  Kwacha Zambia';
$GLOBALS['TL_LANG']['CUR']['ZWL'] = 'ZWL - Dollaro Zimbabwe';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['USD'] = '$';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['EUR'] = '€';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['GBP'] = '£';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['JPY'] = '£';
