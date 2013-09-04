<?php
/**
 * File for class PayPalStructSetMobileCheckoutRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetMobileCheckoutRequestDetailsType originally named SetMobileCheckoutRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetMobileCheckoutRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ItemAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Required
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemAmount;
	/**
	 * The ItemName
	 * Meta informations extracted from the WSDL
	 * - documentation : Description of the item that the customer is purchasing. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 1
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ReturnURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Required Character length and limitations: no limit.
	 * - minOccurs : 1
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The BuyerPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : The phone number of the buyer's mobile device, if available. Optional
	 * - minOccurs : 0
	 * @var PayPalStructPhoneNumberType
	 */
	public $BuyerPhone;
	/**
	 * The Tax
	 * Meta informations extracted from the WSDL
	 * - documentation : Tax amount for this item.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Tax;
	/**
	 * The Shipping
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping amount for this item.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Shipping;
	/**
	 * The ItemNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Reference number of the item that the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The CancelURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Optional Character length and limitations: no limit
	 * - minOccurs : 0
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The AddressDisplayOptions
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Setting this element overrides the setting you have specified in your Merchant Account Profile. Optional
	 * - minOccurs : 0
	 * @var int
	 */
	public $AddressDisplayOptions;
	/**
	 * The SharePhone
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require that the customer specifies a contact phone for the transactxion. Default is 0 / none required. Optional
	 * - minOccurs : 0
	 * @var int
	 */
	public $SharePhone;
	/**
	 * The ShipToAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer's shipping address. Optional
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $ShipToAddress;
	/**
	 * The BuyerEmail
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the login portion of the PayPal login page. Optional Character length and limit: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerEmail;
	/**
	 * Constructor method for SetMobileCheckoutRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_itemAmount
	 * @param string $_itemName
	 * @param string $_returnURL
	 * @param PayPalStructPhoneNumberType $_buyerPhone
	 * @param PayPalStructBasicAmountType $_tax
	 * @param PayPalStructBasicAmountType $_shipping
	 * @param string $_itemNumber
	 * @param string $_custom
	 * @param string $_invoiceID
	 * @param string $_cancelURL
	 * @param int $_addressDisplayOptions
	 * @param int $_sharePhone
	 * @param PayPalStructAddressType $_shipToAddress
	 * @param string $_buyerEmail
	 * @return PayPalStructSetMobileCheckoutRequestDetailsType
	 */
	public function __construct($_itemAmount,$_itemName,$_returnURL,$_buyerPhone = NULL,$_tax = NULL,$_shipping = NULL,$_itemNumber = NULL,$_custom = NULL,$_invoiceID = NULL,$_cancelURL = NULL,$_addressDisplayOptions = NULL,$_sharePhone = NULL,$_shipToAddress = NULL,$_buyerEmail = NULL)
	{
		parent::__construct(array('ItemAmount'=>$_itemAmount,'ItemName'=>$_itemName,'ReturnURL'=>$_returnURL,'BuyerPhone'=>$_buyerPhone,'Tax'=>$_tax,'Shipping'=>$_shipping,'ItemNumber'=>$_itemNumber,'Custom'=>$_custom,'InvoiceID'=>$_invoiceID,'CancelURL'=>$_cancelURL,'AddressDisplayOptions'=>$_addressDisplayOptions,'SharePhone'=>$_sharePhone,'ShipToAddress'=>$_shipToAddress,'BuyerEmail'=>$_buyerEmail));
	}
	/**
	 * Get ItemAmount value
	 * @return PayPalStructBasicAmountType
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
	 * Get ItemName value
	 * @return string
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
	 * Get ReturnURL value
	 * @return string
	 */
	public function getReturnURL()
	{
		return $this->ReturnURL;
	}
	/**
	 * Set ReturnURL value
	 * @param string $_returnURL the ReturnURL
	 * @return string
	 */
	public function setReturnURL($_returnURL)
	{
		return ($this->ReturnURL = $_returnURL);
	}
	/**
	 * Get BuyerPhone value
	 * @return PayPalStructPhoneNumberType|null
	 */
	public function getBuyerPhone()
	{
		return $this->BuyerPhone;
	}
	/**
	 * Set BuyerPhone value
	 * @param PayPalStructPhoneNumberType $_buyerPhone the BuyerPhone
	 * @return PayPalStructPhoneNumberType
	 */
	public function setBuyerPhone($_buyerPhone)
	{
		return ($this->BuyerPhone = $_buyerPhone);
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
	 * Get CancelURL value
	 * @return string|null
	 */
	public function getCancelURL()
	{
		return $this->CancelURL;
	}
	/**
	 * Set CancelURL value
	 * @param string $_cancelURL the CancelURL
	 * @return string
	 */
	public function setCancelURL($_cancelURL)
	{
		return ($this->CancelURL = $_cancelURL);
	}
	/**
	 * Get AddressDisplayOptions value
	 * @return int|null
	 */
	public function getAddressDisplayOptions()
	{
		return $this->AddressDisplayOptions;
	}
	/**
	 * Set AddressDisplayOptions value
	 * @param int $_addressDisplayOptions the AddressDisplayOptions
	 * @return int
	 */
	public function setAddressDisplayOptions($_addressDisplayOptions)
	{
		return ($this->AddressDisplayOptions = $_addressDisplayOptions);
	}
	/**
	 * Get SharePhone value
	 * @return int|null
	 */
	public function getSharePhone()
	{
		return $this->SharePhone;
	}
	/**
	 * Set SharePhone value
	 * @param int $_sharePhone the SharePhone
	 * @return int
	 */
	public function setSharePhone($_sharePhone)
	{
		return ($this->SharePhone = $_sharePhone);
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
	 * Get BuyerEmail value
	 * @return string|null
	 */
	public function getBuyerEmail()
	{
		return $this->BuyerEmail;
	}
	/**
	 * Set BuyerEmail value
	 * @param string $_buyerEmail the BuyerEmail
	 * @return string
	 */
	public function setBuyerEmail($_buyerEmail)
	{
		return ($this->BuyerEmail = $_buyerEmail);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetMobileCheckoutRequestDetailsType
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