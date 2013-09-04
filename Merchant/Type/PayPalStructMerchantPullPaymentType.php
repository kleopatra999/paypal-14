<?php
/**
 * File for class PayPalStructMerchantPullPaymentType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMerchantPullPaymentType originally named MerchantPullPaymentType
 * Documentation : MerchantPullPayment Parameters to make initiate a pull payment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMerchantPullPaymentType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : The amount to charge to the customer. Required Only numeric characters and a decimal separator are allowed. Limit: 10 single-byte characters, including two for decimals You must set the currencyID attribute to one of the three-character currency code for any of the supported PayPal currencies.
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The MpID
	 * Meta informations extracted from the WSDL
	 * - documentation : Preapproved Payments billing agreement identification number between the PayPal customer and you. Required Character limit: 19 single-byte alphanumeric characters. The format of a billing agreement identification number is the single-character prefix B, followed by a hyphen and an alphanumeric character string: B-unique_alphanumeric_string
	 * @var string
	 */
	public $MpID;
	/**
	 * The PaymentType
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies type of PayPal payment you require Optional
	 * - minOccurs : 0
	 * @var PayPalEnumMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The Memo
	 * Meta informations extracted from the WSDL
	 * - documentation : Text entered by the customer in the Note field during enrollment Optional
	 * - minOccurs : 0
	 * @var string
	 */
	public $Memo;
	/**
	 * The EmailSubject
	 * Meta informations extracted from the WSDL
	 * - documentation : Subject line of confirmation email sent to recipient Optional
	 * - minOccurs : 0
	 * @var string
	 */
	public $EmailSubject;
	/**
	 * The Tax
	 * Meta informations extracted from the WSDL
	 * - documentation : The tax charged on the transaction Optional
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Tax;
	/**
	 * The Shipping
	 * Meta informations extracted from the WSDL
	 * - documentation : Per-transaction shipping charge Optional
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Shipping;
	/**
	 * The Handling
	 * Meta informations extracted from the WSDL
	 * - documentation : Per-transaction handling charge Optional
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Handling;
	/**
	 * The ItemName
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of purchased item Optional
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ItemNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Reference number of purchased item Optional
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The Invoice
	 * Meta informations extracted from the WSDL
	 * - documentation : Your invoice number Optional
	 * - minOccurs : 0
	 * @var string
	 */
	public $Invoice;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom annotation field for tracking or other use Optional
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The ButtonSource
	 * Meta informations extracted from the WSDL
	 * - documentation : An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The SoftDescriptor
	 * Meta informations extracted from the WSDL
	 * - documentation : Passed in soft descriptor string to be appended. Optional Character length and limitations: single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * Constructor method for MerchantPullPaymentType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_mpID
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType
	 * @param string $_memo
	 * @param string $_emailSubject
	 * @param PayPalStructBasicAmountType $_tax
	 * @param PayPalStructBasicAmountType $_shipping
	 * @param PayPalStructBasicAmountType $_handling
	 * @param string $_itemName
	 * @param string $_itemNumber
	 * @param string $_invoice
	 * @param string $_custom
	 * @param string $_buttonSource
	 * @param string $_softDescriptor
	 * @return PayPalStructMerchantPullPaymentType
	 */
	public function __construct($_amount = NULL,$_mpID = NULL,$_paymentType = NULL,$_memo = NULL,$_emailSubject = NULL,$_tax = NULL,$_shipping = NULL,$_handling = NULL,$_itemName = NULL,$_itemNumber = NULL,$_invoice = NULL,$_custom = NULL,$_buttonSource = NULL,$_softDescriptor = NULL)
	{
		parent::__construct(array('Amount'=>$_amount,'MpID'=>$_mpID,'PaymentType'=>$_paymentType,'Memo'=>$_memo,'EmailSubject'=>$_emailSubject,'Tax'=>$_tax,'Shipping'=>$_shipping,'Handling'=>$_handling,'ItemName'=>$_itemName,'ItemNumber'=>$_itemNumber,'Invoice'=>$_invoice,'Custom'=>$_custom,'ButtonSource'=>$_buttonSource,'SoftDescriptor'=>$_softDescriptor));
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Get MpID value
	 * @return string|null
	 */
	public function getMpID()
	{
		return $this->MpID;
	}
	/**
	 * Set MpID value
	 * @param string $_mpID the MpID
	 * @return string
	 */
	public function setMpID($_mpID)
	{
		return ($this->MpID = $_mpID);
	}
	/**
	 * Get PaymentType value
	 * @return PayPalEnumMerchantPullPaymentCodeType|null
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set PaymentType value
	 * @uses PayPalEnumMerchantPullPaymentCodeType::valueIsValid()
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType the PaymentType
	 * @return PayPalEnumMerchantPullPaymentCodeType
	 */
	public function setPaymentType($_paymentType)
	{
		if(!PayPalEnumMerchantPullPaymentCodeType::valueIsValid($_paymentType))
		{
			return false;
		}
		return ($this->PaymentType = $_paymentType);
	}
	/**
	 * Get Memo value
	 * @return string|null
	 */
	public function getMemo()
	{
		return $this->Memo;
	}
	/**
	 * Set Memo value
	 * @param string $_memo the Memo
	 * @return string
	 */
	public function setMemo($_memo)
	{
		return ($this->Memo = $_memo);
	}
	/**
	 * Get EmailSubject value
	 * @return string|null
	 */
	public function getEmailSubject()
	{
		return $this->EmailSubject;
	}
	/**
	 * Set EmailSubject value
	 * @param string $_emailSubject the EmailSubject
	 * @return string
	 */
	public function setEmailSubject($_emailSubject)
	{
		return ($this->EmailSubject = $_emailSubject);
	}
	/**
	 * Get Tax value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTax()
	{
		return $this->Tax;
	}
	/**
	 * Set Tax value
	 * @param PayPalStructBasicAmountType $_tax the Tax
	 * @return PayPalStructBasicAmountType
	 */
	public function setTax($_tax)
	{
		return ($this->Tax = $_tax);
	}
	/**
	 * Get Shipping value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShipping()
	{
		return $this->Shipping;
	}
	/**
	 * Set Shipping value
	 * @param PayPalStructBasicAmountType $_shipping the Shipping
	 * @return PayPalStructBasicAmountType
	 */
	public function setShipping($_shipping)
	{
		return ($this->Shipping = $_shipping);
	}
	/**
	 * Get Handling value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getHandling()
	{
		return $this->Handling;
	}
	/**
	 * Set Handling value
	 * @param PayPalStructBasicAmountType $_handling the Handling
	 * @return PayPalStructBasicAmountType
	 */
	public function setHandling($_handling)
	{
		return ($this->Handling = $_handling);
	}
	/**
	 * Get ItemName value
	 * @return string|null
	 */
	public function getItemName()
	{
		return $this->ItemName;
	}
	/**
	 * Set ItemName value
	 * @param string $_itemName the ItemName
	 * @return string
	 */
	public function setItemName($_itemName)
	{
		return ($this->ItemName = $_itemName);
	}
	/**
	 * Get ItemNumber value
	 * @return string|null
	 */
	public function getItemNumber()
	{
		return $this->ItemNumber;
	}
	/**
	 * Set ItemNumber value
	 * @param string $_itemNumber the ItemNumber
	 * @return string
	 */
	public function setItemNumber($_itemNumber)
	{
		return ($this->ItemNumber = $_itemNumber);
	}
	/**
	 * Get Invoice value
	 * @return string|null
	 */
	public function getInvoice()
	{
		return $this->Invoice;
	}
	/**
	 * Set Invoice value
	 * @param string $_invoice the Invoice
	 * @return string
	 */
	public function setInvoice($_invoice)
	{
		return ($this->Invoice = $_invoice);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMerchantPullPaymentType
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