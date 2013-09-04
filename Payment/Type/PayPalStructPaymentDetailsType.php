<?php
/**
 * File for class PayPalStructPaymentDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentDetailsType originally named PaymentDetailsType
 * Documentation : PaymentDetailsType Information about a payment. Used by DCC and Express Checkout.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentDetailsType extends PayPalWsdlClass
{
	/**
	 * The OrderTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total of order, including shipping, handling, and tax. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $OrderTotal;
	/**
	 * The ItemTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Sum of cost of all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemTotal;
	/**
	 * The ShippingTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total shipping costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingTotal;
	/**
	 * The HandlingTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total handling costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $HandlingTotal;
	/**
	 * The TaxTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Sum of tax for all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxTotal;
	/**
	 * The OrderDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $OrderDescription;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : A free-form field for your own use. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Your own invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ButtonSource
	 * Meta informations extracted from the WSDL
	 * - documentation : An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The NotifyURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Your URL for receiving Instant Payment Notification (IPN) about this transaction. Optional If you do not specify NotifyURL in the request, the notification URL from your Merchant Profile is used, if one exists. Character length and limitations: 2,048 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $NotifyURL;
	/**
	 * The ShipToAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Address the order will be shipped to. Optional If you include the ShipToAddress element, the AddressType elements are required: Name Street1 CityName CountryCode Do not set set the CountryName element.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $ShipToAddress;
	/**
	 * The MultiShipping
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that this payment is associated with multiple shipping addresses. Optional Character length and limitations: Four single-byte numeric characters.
	 * - minOccurs : 0
	 * @var string
	 */
	public $MultiShipping;
	/**
	 * The FulfillmentReferenceNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Thirdparty Fulfillment Reference Number. Optional Character length and limitations: 32 alphanumeric characters.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $FulfillmentReferenceNumber;
	/**
	 * The FulfillmentAddress
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $FulfillmentAddress;
	/**
	 * The PaymentCategoryType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentCategoryType
	 */
	public $PaymentCategoryType;
	/**
	 * The ShippingMethod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumShippingServiceCodeType
	 */
	public $ShippingMethod;
	/**
	 * The ProfileAddressChangeDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $ProfileAddressChangeDate;
	/**
	 * The PaymentDetailsItem
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the individual purchased items
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDetailsItemType
	 */
	public $PaymentDetailsItem;
	/**
	 * The InsuranceTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total shipping insurance costs for this order. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $InsuranceTotal;
	/**
	 * The ShippingDiscount
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping discount for this order, specified as a negative number. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingDiscount;
	/**
	 * The InsuranceOptionOffered
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Insurance options.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InsuranceOptionOffered;
	/**
	 * The AllowedPaymentMethod
	 * Meta informations extracted from the WSDL
	 * - documentation : Allowed payment methods for this transaction.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumAllowedPaymentMethodType
	 */
	public $AllowedPaymentMethod;
	/**
	 * The EnhancedPaymentData
	 * Meta informations extracted from the WSDL
	 * - documentation : Enhanced Data section to accept channel specific data. Optional Refer to EnhancedPaymentDataType for details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructEnhancedPaymentDataType
	 */
	public $EnhancedPaymentData;
	/**
	 * The SellerDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about the seller. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructSellerDetailsType
	 */
	public $SellerDetails;
	/**
	 * The NoteText
	 * Meta informations extracted from the WSDL
	 * - documentation : Note to recipient/seller. Optional Character length and limitations: 127 single-byte alphanumeric characters.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $NoteText;
	/**
	 * The TransactionId
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal Transaction Id, returned once DoExpressCheckout is completed.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The PaymentAction
	 * Meta informations extracted from the WSDL
	 * - documentation : How you want to obtain payment. This payment action input will be used for split payments Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The PaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier and mandatory for the particular payment request in case of multiple payment
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The OrderURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL on Merchant site pertaining to this invoice. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OrderURL;
	/**
	 * The SoftDescriptor
	 * Meta informations extracted from the WSDL
	 * - documentation : Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * The BranchLevel
	 * Meta informations extracted from the WSDL
	 * - documentation : BranchLevel is used to identify chain payment. If BranchLevel is 0 or 1, this payment is where money moves to. If BranchLevel greater than 1, this payment contains the actual seller info. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var integer
	 */
	public $BranchLevel;
	/**
	 * The OfferDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructOfferDetailsType
	 */
	public $OfferDetails;
	/**
	 * The Recurring
	 * Meta informations extracted from the WSDL
	 * - documentation : Flag to indicate the recurring transaction
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumRecurringFlagType
	 */
	public $Recurring;
	/**
	 * The PaymentReason
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the purpose of this payment like Refund
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentReasonType
	 */
	public $PaymentReason;
	/**
	 * Constructor method for PaymentDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_orderTotal
	 * @param PayPalStructBasicAmountType $_itemTotal
	 * @param PayPalStructBasicAmountType $_shippingTotal
	 * @param PayPalStructBasicAmountType $_handlingTotal
	 * @param PayPalStructBasicAmountType $_taxTotal
	 * @param string $_orderDescription
	 * @param string $_custom
	 * @param string $_invoiceID
	 * @param string $_buttonSource
	 * @param string $_notifyURL
	 * @param PayPalStructAddressType $_shipToAddress
	 * @param string $_multiShipping
	 * @param string $_fulfillmentReferenceNumber
	 * @param PayPalStructAddressType $_fulfillmentAddress
	 * @param PayPalEnumPaymentCategoryType $_paymentCategoryType
	 * @param PayPalEnumShippingServiceCodeType $_shippingMethod
	 * @param dateTime $_profileAddressChangeDate
	 * @param PayPalStructPaymentDetailsItemType $_paymentDetailsItem
	 * @param PayPalStructBasicAmountType $_insuranceTotal
	 * @param PayPalStructBasicAmountType $_shippingDiscount
	 * @param string $_insuranceOptionOffered
	 * @param PayPalEnumAllowedPaymentMethodType $_allowedPaymentMethod
	 * @param PayPalStructEnhancedPaymentDataType $_enhancedPaymentData
	 * @param PayPalStructSellerDetailsType $_sellerDetails
	 * @param string $_noteText
	 * @param string $_transactionId
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction
	 * @param string $_paymentRequestID
	 * @param string $_orderURL
	 * @param string $_softDescriptor
	 * @param integer $_branchLevel
	 * @param PayPalStructOfferDetailsType $_offerDetails
	 * @param PayPalEnumRecurringFlagType $_recurring
	 * @param PayPalEnumPaymentReasonType $_paymentReason
	 * @return PayPalStructPaymentDetailsType
	 */
	public function __construct($_orderTotal = NULL,$_itemTotal = NULL,$_shippingTotal = NULL,$_handlingTotal = NULL,$_taxTotal = NULL,$_orderDescription = NULL,$_custom = NULL,$_invoiceID = NULL,$_buttonSource = NULL,$_notifyURL = NULL,$_shipToAddress = NULL,$_multiShipping = NULL,$_fulfillmentReferenceNumber = NULL,$_fulfillmentAddress = NULL,$_paymentCategoryType = NULL,$_shippingMethod = NULL,$_profileAddressChangeDate = NULL,$_paymentDetailsItem = NULL,$_insuranceTotal = NULL,$_shippingDiscount = NULL,$_insuranceOptionOffered = NULL,$_allowedPaymentMethod = NULL,$_enhancedPaymentData = NULL,$_sellerDetails = NULL,$_noteText = NULL,$_transactionId = NULL,$_paymentAction = NULL,$_paymentRequestID = NULL,$_orderURL = NULL,$_softDescriptor = NULL,$_branchLevel = NULL,$_offerDetails = NULL,$_recurring = NULL,$_paymentReason = NULL)
	{
		parent::__construct(array('OrderTotal'=>$_orderTotal,'ItemTotal'=>$_itemTotal,'ShippingTotal'=>$_shippingTotal,'HandlingTotal'=>$_handlingTotal,'TaxTotal'=>$_taxTotal,'OrderDescription'=>$_orderDescription,'Custom'=>$_custom,'InvoiceID'=>$_invoiceID,'ButtonSource'=>$_buttonSource,'NotifyURL'=>$_notifyURL,'ShipToAddress'=>$_shipToAddress,'MultiShipping'=>$_multiShipping,'FulfillmentReferenceNumber'=>$_fulfillmentReferenceNumber,'FulfillmentAddress'=>$_fulfillmentAddress,'PaymentCategoryType'=>$_paymentCategoryType,'ShippingMethod'=>$_shippingMethod,'ProfileAddressChangeDate'=>$_profileAddressChangeDate,'PaymentDetailsItem'=>$_paymentDetailsItem,'InsuranceTotal'=>$_insuranceTotal,'ShippingDiscount'=>$_shippingDiscount,'InsuranceOptionOffered'=>$_insuranceOptionOffered,'AllowedPaymentMethod'=>$_allowedPaymentMethod,'EnhancedPaymentData'=>$_enhancedPaymentData,'SellerDetails'=>$_sellerDetails,'NoteText'=>$_noteText,'TransactionId'=>$_transactionId,'PaymentAction'=>$_paymentAction,'PaymentRequestID'=>$_paymentRequestID,'OrderURL'=>$_orderURL,'SoftDescriptor'=>$_softDescriptor,'BranchLevel'=>$_branchLevel,'OfferDetails'=>$_offerDetails,'Recurring'=>$_recurring,'PaymentReason'=>$_paymentReason));
	}
	/**
	 * Get OrderTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getOrderTotal()
	{
		return $this->OrderTotal;
	}
	/**
	 * Set OrderTotal value
	 * @param PayPalStructBasicAmountType $_orderTotal the OrderTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setOrderTotal($_orderTotal)
	{
		return ($this->OrderTotal = $_orderTotal);
	}
	/**
	 * Get ItemTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getItemTotal()
	{
		return $this->ItemTotal;
	}
	/**
	 * Set ItemTotal value
	 * @param PayPalStructBasicAmountType $_itemTotal the ItemTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setItemTotal($_itemTotal)
	{
		return ($this->ItemTotal = $_itemTotal);
	}
	/**
	 * Get ShippingTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingTotal()
	{
		return $this->ShippingTotal;
	}
	/**
	 * Set ShippingTotal value
	 * @param PayPalStructBasicAmountType $_shippingTotal the ShippingTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingTotal($_shippingTotal)
	{
		return ($this->ShippingTotal = $_shippingTotal);
	}
	/**
	 * Get HandlingTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getHandlingTotal()
	{
		return $this->HandlingTotal;
	}
	/**
	 * Set HandlingTotal value
	 * @param PayPalStructBasicAmountType $_handlingTotal the HandlingTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setHandlingTotal($_handlingTotal)
	{
		return ($this->HandlingTotal = $_handlingTotal);
	}
	/**
	 * Get TaxTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxTotal()
	{
		return $this->TaxTotal;
	}
	/**
	 * Set TaxTotal value
	 * @param PayPalStructBasicAmountType $_taxTotal the TaxTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxTotal($_taxTotal)
	{
		return ($this->TaxTotal = $_taxTotal);
	}
	/**
	 * Get OrderDescription value
	 * @return string|null
	 */
	public function getOrderDescription()
	{
		return $this->OrderDescription;
	}
	/**
	 * Set OrderDescription value
	 * @param string $_orderDescription the OrderDescription
	 * @return string
	 */
	public function setOrderDescription($_orderDescription)
	{
		return ($this->OrderDescription = $_orderDescription);
	}
	/**
	 * Get Custom value
	 * @return string|null
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set Custom value
	 * @param string $_custom the Custom
	 * @return string
	 */
	public function setCustom($_custom)
	{
		return ($this->Custom = $_custom);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
	}
	/**
	 * Get ButtonSource value
	 * @return string|null
	 */
	public function getButtonSource()
	{
		return $this->ButtonSource;
	}
	/**
	 * Set ButtonSource value
	 * @param string $_buttonSource the ButtonSource
	 * @return string
	 */
	public function setButtonSource($_buttonSource)
	{
		return ($this->ButtonSource = $_buttonSource);
	}
	/**
	 * Get NotifyURL value
	 * @return string|null
	 */
	public function getNotifyURL()
	{
		return $this->NotifyURL;
	}
	/**
	 * Set NotifyURL value
	 * @param string $_notifyURL the NotifyURL
	 * @return string
	 */
	public function setNotifyURL($_notifyURL)
	{
		return ($this->NotifyURL = $_notifyURL);
	}
	/**
	 * Get ShipToAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getShipToAddress()
	{
		return $this->ShipToAddress;
	}
	/**
	 * Set ShipToAddress value
	 * @param PayPalStructAddressType $_shipToAddress the ShipToAddress
	 * @return PayPalStructAddressType
	 */
	public function setShipToAddress($_shipToAddress)
	{
		return ($this->ShipToAddress = $_shipToAddress);
	}
	/**
	 * Get MultiShipping value
	 * @return string|null
	 */
	public function getMultiShipping()
	{
		return $this->MultiShipping;
	}
	/**
	 * Set MultiShipping value
	 * @param string $_multiShipping the MultiShipping
	 * @return string
	 */
	public function setMultiShipping($_multiShipping)
	{
		return ($this->MultiShipping = $_multiShipping);
	}
	/**
	 * Get FulfillmentReferenceNumber value
	 * @return string|null
	 */
	public function getFulfillmentReferenceNumber()
	{
		return $this->FulfillmentReferenceNumber;
	}
	/**
	 * Set FulfillmentReferenceNumber value
	 * @param string $_fulfillmentReferenceNumber the FulfillmentReferenceNumber
	 * @return string
	 */
	public function setFulfillmentReferenceNumber($_fulfillmentReferenceNumber)
	{
		return ($this->FulfillmentReferenceNumber = $_fulfillmentReferenceNumber);
	}
	/**
	 * Get FulfillmentAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getFulfillmentAddress()
	{
		return $this->FulfillmentAddress;
	}
	/**
	 * Set FulfillmentAddress value
	 * @param PayPalStructAddressType $_fulfillmentAddress the FulfillmentAddress
	 * @return PayPalStructAddressType
	 */
	public function setFulfillmentAddress($_fulfillmentAddress)
	{
		return ($this->FulfillmentAddress = $_fulfillmentAddress);
	}
	/**
	 * Get PaymentCategoryType value
	 * @return PayPalEnumPaymentCategoryType|null
	 */
	public function getPaymentCategoryType()
	{
		return $this->PaymentCategoryType;
	}
	/**
	 * Set PaymentCategoryType value
	 * @uses PayPalEnumPaymentCategoryType::valueIsValid()
	 * @param PayPalEnumPaymentCategoryType $_paymentCategoryType the PaymentCategoryType
	 * @return PayPalEnumPaymentCategoryType
	 */
	public function setPaymentCategoryType($_paymentCategoryType)
	{
		if(!PayPalEnumPaymentCategoryType::valueIsValid($_paymentCategoryType))
		{
			return false;
		}
		return ($this->PaymentCategoryType = $_paymentCategoryType);
	}
	/**
	 * Get ShippingMethod value
	 * @return PayPalEnumShippingServiceCodeType|null
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ShippingMethod value
	 * @uses PayPalEnumShippingServiceCodeType::valueIsValid()
	 * @param PayPalEnumShippingServiceCodeType $_shippingMethod the ShippingMethod
	 * @return PayPalEnumShippingServiceCodeType
	 */
	public function setShippingMethod($_shippingMethod)
	{
		if(!PayPalEnumShippingServiceCodeType::valueIsValid($_shippingMethod))
		{
			return false;
		}
		return ($this->ShippingMethod = $_shippingMethod);
	}
	/**
	 * Get ProfileAddressChangeDate value
	 * @return dateTime|null
	 */
	public function getProfileAddressChangeDate()
	{
		return $this->ProfileAddressChangeDate;
	}
	/**
	 * Set ProfileAddressChangeDate value
	 * @param dateTime $_profileAddressChangeDate the ProfileAddressChangeDate
	 * @return dateTime
	 */
	public function setProfileAddressChangeDate($_profileAddressChangeDate)
	{
		return ($this->ProfileAddressChangeDate = $_profileAddressChangeDate);
	}
	/**
	 * Get PaymentDetailsItem value
	 * @return PayPalStructPaymentDetailsItemType|null
	 */
	public function getPaymentDetailsItem()
	{
		return $this->PaymentDetailsItem;
	}
	/**
	 * Set PaymentDetailsItem value
	 * @param PayPalStructPaymentDetailsItemType $_paymentDetailsItem the PaymentDetailsItem
	 * @return PayPalStructPaymentDetailsItemType
	 */
	public function setPaymentDetailsItem($_paymentDetailsItem)
	{
		return ($this->PaymentDetailsItem = $_paymentDetailsItem);
	}
	/**
	 * Get InsuranceTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getInsuranceTotal()
	{
		return $this->InsuranceTotal;
	}
	/**
	 * Set InsuranceTotal value
	 * @param PayPalStructBasicAmountType $_insuranceTotal the InsuranceTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setInsuranceTotal($_insuranceTotal)
	{
		return ($this->InsuranceTotal = $_insuranceTotal);
	}
	/**
	 * Get ShippingDiscount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}
	/**
	 * Set ShippingDiscount value
	 * @param PayPalStructBasicAmountType $_shippingDiscount the ShippingDiscount
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingDiscount($_shippingDiscount)
	{
		return ($this->ShippingDiscount = $_shippingDiscount);
	}
	/**
	 * Get InsuranceOptionOffered value
	 * @return string|null
	 */
	public function getInsuranceOptionOffered()
	{
		return $this->InsuranceOptionOffered;
	}
	/**
	 * Set InsuranceOptionOffered value
	 * @param string $_insuranceOptionOffered the InsuranceOptionOffered
	 * @return string
	 */
	public function setInsuranceOptionOffered($_insuranceOptionOffered)
	{
		return ($this->InsuranceOptionOffered = $_insuranceOptionOffered);
	}
	/**
	 * Get AllowedPaymentMethod value
	 * @return PayPalEnumAllowedPaymentMethodType|null
	 */
	public function getAllowedPaymentMethod()
	{
		return $this->AllowedPaymentMethod;
	}
	/**
	 * Set AllowedPaymentMethod value
	 * @uses PayPalEnumAllowedPaymentMethodType::valueIsValid()
	 * @param PayPalEnumAllowedPaymentMethodType $_allowedPaymentMethod the AllowedPaymentMethod
	 * @return PayPalEnumAllowedPaymentMethodType
	 */
	public function setAllowedPaymentMethod($_allowedPaymentMethod)
	{
		if(!PayPalEnumAllowedPaymentMethodType::valueIsValid($_allowedPaymentMethod))
		{
			return false;
		}
		return ($this->AllowedPaymentMethod = $_allowedPaymentMethod);
	}
	/**
	 * Get EnhancedPaymentData value
	 * @return PayPalStructEnhancedPaymentDataType|null
	 */
	public function getEnhancedPaymentData()
	{
		return $this->EnhancedPaymentData;
	}
	/**
	 * Set EnhancedPaymentData value
	 * @param PayPalStructEnhancedPaymentDataType $_enhancedPaymentData the EnhancedPaymentData
	 * @return PayPalStructEnhancedPaymentDataType
	 */
	public function setEnhancedPaymentData($_enhancedPaymentData)
	{
		return ($this->EnhancedPaymentData = $_enhancedPaymentData);
	}
	/**
	 * Get SellerDetails value
	 * @return PayPalStructSellerDetailsType|null
	 */
	public function getSellerDetails()
	{
		return $this->SellerDetails;
	}
	/**
	 * Set SellerDetails value
	 * @param PayPalStructSellerDetailsType $_sellerDetails the SellerDetails
	 * @return PayPalStructSellerDetailsType
	 */
	public function setSellerDetails($_sellerDetails)
	{
		return ($this->SellerDetails = $_sellerDetails);
	}
	/**
	 * Get NoteText value
	 * @return string|null
	 */
	public function getNoteText()
	{
		return $this->NoteText;
	}
	/**
	 * Set NoteText value
	 * @param string $_noteText the NoteText
	 * @return string
	 */
	public function setNoteText($_noteText)
	{
		return ($this->NoteText = $_noteText);
	}
	/**
	 * Get TransactionId value
	 * @return string|null
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set TransactionId value
	 * @param string $_transactionId the TransactionId
	 * @return string
	 */
	public function setTransactionId($_transactionId)
	{
		return ($this->TransactionId = $_transactionId);
	}
	/**
	 * Get PaymentAction value
	 * @return PayPalEnumPaymentActionCodeType|null
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set PaymentAction value
	 * @uses PayPalEnumPaymentActionCodeType::valueIsValid()
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction the PaymentAction
	 * @return PayPalEnumPaymentActionCodeType
	 */
	public function setPaymentAction($_paymentAction)
	{
		if(!PayPalEnumPaymentActionCodeType::valueIsValid($_paymentAction))
		{
			return false;
		}
		return ($this->PaymentAction = $_paymentAction);
	}
	/**
	 * Get PaymentRequestID value
	 * @return string|null
	 */
	public function getPaymentRequestID()
	{
		return $this->PaymentRequestID;
	}
	/**
	 * Set PaymentRequestID value
	 * @param string $_paymentRequestID the PaymentRequestID
	 * @return string
	 */
	public function setPaymentRequestID($_paymentRequestID)
	{
		return ($this->PaymentRequestID = $_paymentRequestID);
	}
	/**
	 * Get OrderURL value
	 * @return string|null
	 */
	public function getOrderURL()
	{
		return $this->OrderURL;
	}
	/**
	 * Set OrderURL value
	 * @param string $_orderURL the OrderURL
	 * @return string
	 */
	public function setOrderURL($_orderURL)
	{
		return ($this->OrderURL = $_orderURL);
	}
	/**
	 * Get SoftDescriptor value
	 * @return string|null
	 */
	public function getSoftDescriptor()
	{
		return $this->SoftDescriptor;
	}
	/**
	 * Set SoftDescriptor value
	 * @param string $_softDescriptor the SoftDescriptor
	 * @return string
	 */
	public function setSoftDescriptor($_softDescriptor)
	{
		return ($this->SoftDescriptor = $_softDescriptor);
	}
	/**
	 * Get BranchLevel value
	 * @return integer|null
	 */
	public function getBranchLevel()
	{
		return $this->BranchLevel;
	}
	/**
	 * Set BranchLevel value
	 * @param integer $_branchLevel the BranchLevel
	 * @return integer
	 */
	public function setBranchLevel($_branchLevel)
	{
		return ($this->BranchLevel = $_branchLevel);
	}
	/**
	 * Get OfferDetails value
	 * @return PayPalStructOfferDetailsType|null
	 */
	public function getOfferDetails()
	{
		return $this->OfferDetails;
	}
	/**
	 * Set OfferDetails value
	 * @param PayPalStructOfferDetailsType $_offerDetails the OfferDetails
	 * @return PayPalStructOfferDetailsType
	 */
	public function setOfferDetails($_offerDetails)
	{
		return ($this->OfferDetails = $_offerDetails);
	}
	/**
	 * Get Recurring value
	 * @return PayPalEnumRecurringFlagType|null
	 */
	public function getRecurring()
	{
		return $this->Recurring;
	}
	/**
	 * Set Recurring value
	 * @uses PayPalEnumRecurringFlagType::valueIsValid()
	 * @param PayPalEnumRecurringFlagType $_recurring the Recurring
	 * @return PayPalEnumRecurringFlagType
	 */
	public function setRecurring($_recurring)
	{
		if(!PayPalEnumRecurringFlagType::valueIsValid($_recurring))
		{
			return false;
		}
		return ($this->Recurring = $_recurring);
	}
	/**
	 * Get PaymentReason value
	 * @return PayPalEnumPaymentReasonType|null
	 */
	public function getPaymentReason()
	{
		return $this->PaymentReason;
	}
	/**
	 * Set PaymentReason value
	 * @uses PayPalEnumPaymentReasonType::valueIsValid()
	 * @param PayPalEnumPaymentReasonType $_paymentReason the PaymentReason
	 * @return PayPalEnumPaymentReasonType
	 */
	public function setPaymentReason($_paymentReason)
	{
		if(!PayPalEnumPaymentReasonType::valueIsValid($_paymentReason))
		{
			return false;
		}
		return ($this->PaymentReason = $_paymentReason);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentDetailsType
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>