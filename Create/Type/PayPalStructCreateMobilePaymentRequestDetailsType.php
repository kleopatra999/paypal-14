<?php
/**
 * File for class PayPalStructCreateMobilePaymentRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateMobilePaymentRequestDetailsType originally named CreateMobilePaymentRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateMobilePaymentRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of the payment Required
	 * @var PayPalEnumMobilePaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The PaymentAction
	 * Meta informations extracted from the WSDL
	 * - documentation : How you want to obtain payment. Defaults to Sale. Optional Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment.
	 * @var PayPalEnumPaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The SenderPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Phone number of the user making the payment. Required
	 * @var PayPalStructPhoneNumberType
	 */
	public $SenderPhone;
	/**
	 * The RecipientType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of recipient specified, i.e., phone number or email address Required
	 * @var PayPalEnumMobileRecipientCodeType
	 */
	public $RecipientType;
	/**
	 * The RecipientEmail
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address of the recipient
	 * - minOccurs : 0
	 * @var string
	 */
	public $RecipientEmail;
	/**
	 * The RecipientPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Phone number of the recipipent Required
	 * - minOccurs : 0
	 * @var PayPalStructPhoneNumberType
	 */
	public $RecipientPhone;
	/**
	 * The ItemAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of item before tax and shipping
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemAmount;
	/**
	 * The Tax
	 * Meta informations extracted from the WSDL
	 * - documentation : The tax charged on the transactionTax Optional
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
	 * The ItemName
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of the item being ordered Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ItemNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : SKU of the item being ordered Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - documentation : Memo entered by sender in PayPal Website Payments note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * The CustomID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique ID for the order. Required for non-P2P transactions Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $CustomID;
	/**
	 * The SharePhoneNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the sender's phone number will be shared with recipient Optional
	 * - minOccurs : 0
	 * @var integer
	 */
	public $SharePhoneNumber;
	/**
	 * The ShareHomeAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the sender's home address will be shared with recipient Optional
	 * - minOccurs : 0
	 * @var integer
	 */
	public $ShareHomeAddress;
	/**
	 * Constructor method for CreateMobilePaymentRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumMobilePaymentCodeType $_paymentType
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction
	 * @param PayPalStructPhoneNumberType $_senderPhone
	 * @param PayPalEnumMobileRecipientCodeType $_recipientType
	 * @param string $_recipientEmail
	 * @param PayPalStructPhoneNumberType $_recipientPhone
	 * @param PayPalStructBasicAmountType $_itemAmount
	 * @param PayPalStructBasicAmountType $_tax
	 * @param PayPalStructBasicAmountType $_shipping
	 * @param string $_itemName
	 * @param string $_itemNumber
	 * @param string $_note
	 * @param string $_customID
	 * @param integer $_sharePhoneNumber
	 * @param integer $_shareHomeAddress
	 * @return PayPalStructCreateMobilePaymentRequestDetailsType
	 */
	public function __construct($_paymentType = NULL,$_paymentAction = NULL,$_senderPhone = NULL,$_recipientType = NULL,$_recipientEmail = NULL,$_recipientPhone = NULL,$_itemAmount = NULL,$_tax = NULL,$_shipping = NULL,$_itemName = NULL,$_itemNumber = NULL,$_note = NULL,$_customID = NULL,$_sharePhoneNumber = NULL,$_shareHomeAddress = NULL)
	{
		parent::__construct(array('PaymentType'=>$_paymentType,'PaymentAction'=>$_paymentAction,'SenderPhone'=>$_senderPhone,'RecipientType'=>$_recipientType,'RecipientEmail'=>$_recipientEmail,'RecipientPhone'=>$_recipientPhone,'ItemAmount'=>$_itemAmount,'Tax'=>$_tax,'Shipping'=>$_shipping,'ItemName'=>$_itemName,'ItemNumber'=>$_itemNumber,'Note'=>$_note,'CustomID'=>$_customID,'SharePhoneNumber'=>$_sharePhoneNumber,'ShareHomeAddress'=>$_shareHomeAddress));
	}
	/**
	 * Get PaymentType value
	 * @return PayPalEnumMobilePaymentCodeType|null
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set PaymentType value
	 * @uses PayPalEnumMobilePaymentCodeType::valueIsValid()
	 * @param PayPalEnumMobilePaymentCodeType $_paymentType the PaymentType
	 * @return PayPalEnumMobilePaymentCodeType
	 */
	public function setPaymentType($_paymentType)
	{
		if(!PayPalEnumMobilePaymentCodeType::valueIsValid($_paymentType))
		{
			return false;
		}
		return ($this->PaymentType = $_paymentType);
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
	 * Get SenderPhone value
	 * @return PayPalStructPhoneNumberType|null
	 */
	public function getSenderPhone()
	{
		return $this->SenderPhone;
	}
	/**
	 * Set SenderPhone value
	 * @param PayPalStructPhoneNumberType $_senderPhone the SenderPhone
	 * @return PayPalStructPhoneNumberType
	 */
	public function setSenderPhone($_senderPhone)
	{
		return ($this->SenderPhone = $_senderPhone);
	}
	/**
	 * Get RecipientType value
	 * @return PayPalEnumMobileRecipientCodeType|null
	 */
	public function getRecipientType()
	{
		return $this->RecipientType;
	}
	/**
	 * Set RecipientType value
	 * @uses PayPalEnumMobileRecipientCodeType::valueIsValid()
	 * @param PayPalEnumMobileRecipientCodeType $_recipientType the RecipientType
	 * @return PayPalEnumMobileRecipientCodeType
	 */
	public function setRecipientType($_recipientType)
	{
		if(!PayPalEnumMobileRecipientCodeType::valueIsValid($_recipientType))
		{
			return false;
		}
		return ($this->RecipientType = $_recipientType);
	}
	/**
	 * Get RecipientEmail value
	 * @return string|null
	 */
	public function getRecipientEmail()
	{
		return $this->RecipientEmail;
	}
	/**
	 * Set RecipientEmail value
	 * @param string $_recipientEmail the RecipientEmail
	 * @return string
	 */
	public function setRecipientEmail($_recipientEmail)
	{
		return ($this->RecipientEmail = $_recipientEmail);
	}
	/**
	 * Get RecipientPhone value
	 * @return PayPalStructPhoneNumberType|null
	 */
	public function getRecipientPhone()
	{
		return $this->RecipientPhone;
	}
	/**
	 * Set RecipientPhone value
	 * @param PayPalStructPhoneNumberType $_recipientPhone the RecipientPhone
	 * @return PayPalStructPhoneNumberType
	 */
	public function setRecipientPhone($_recipientPhone)
	{
		return ($this->RecipientPhone = $_recipientPhone);
	}
	/**
	 * Get ItemAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getItemAmount()
	{
		return $this->ItemAmount;
	}
	/**
	 * Set ItemAmount value
	 * @param PayPalStructBasicAmountType $_itemAmount the ItemAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setItemAmount($_itemAmount)
	{
		return ($this->ItemAmount = $_itemAmount);
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
	 * Get Note value
	 * @return string|null
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Note value
	 * @param string $_note the Note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->Note = $_note);
	}
	/**
	 * Get CustomID value
	 * @return string|null
	 */
	public function getCustomID()
	{
		return $this->CustomID;
	}
	/**
	 * Set CustomID value
	 * @param string $_customID the CustomID
	 * @return string
	 */
	public function setCustomID($_customID)
	{
		return ($this->CustomID = $_customID);
	}
	/**
	 * Get SharePhoneNumber value
	 * @return integer|null
	 */
	public function getSharePhoneNumber()
	{
		return $this->SharePhoneNumber;
	}
	/**
	 * Set SharePhoneNumber value
	 * @param integer $_sharePhoneNumber the SharePhoneNumber
	 * @return integer
	 */
	public function setSharePhoneNumber($_sharePhoneNumber)
	{
		return ($this->SharePhoneNumber = $_sharePhoneNumber);
	}
	/**
	 * Get ShareHomeAddress value
	 * @return integer|null
	 */
	public function getShareHomeAddress()
	{
		return $this->ShareHomeAddress;
	}
	/**
	 * Set ShareHomeAddress value
	 * @param integer $_shareHomeAddress the ShareHomeAddress
	 * @return integer
	 */
	public function setShareHomeAddress($_shareHomeAddress)
	{
		return ($this->ShareHomeAddress = $_shareHomeAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateMobilePaymentRequestDetailsType
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