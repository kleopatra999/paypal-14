<?php
/**
 * File for class PayPalStructSetEbayMobileCheckoutRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetEbayMobileCheckoutRequestDetailsType originally named SetEbayMobileCheckoutRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetEbayMobileCheckoutRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The CheckoutType
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 'Auction' indicates that user is coming to checkout after an auction ended. A value of 'BuyItNow' indicates if the user is coming to checkout by clicking on the 'buy it now' button in a chinese auction. A value of 'FixedPriceItem' indicates that user clicked on 'Buy it now' on a fixed price item. A value of Autopay indicates autopay (or immediate pay) which is not supported at the moment. Required
	 * - minOccurs : 1
	 * @var PayPalEnumEbayCheckoutType
	 */
	public $CheckoutType;
	/**
	 * The ItemId
	 * Meta informations extracted from the WSDL
	 * - documentation : An item number assigned to the item in eBay database. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 1
	 * @var string
	 */
	public $ItemId;
	/**
	 * The TransactionId
	 * Meta informations extracted from the WSDL
	 * - documentation : An Transaction id assigned to the item in eBay database. In case of Chinese auction Item Id itself indicates Transaction Id. Transaction Id in this case is Zero. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 1
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The SiteId
	 * Meta informations extracted from the WSDL
	 * - documentation : An id indicating the site on which the item was listed. Required Character length and limitations: 2 alphanumeric characters
	 * - minOccurs : 1
	 * @var string
	 */
	public $SiteId;
	/**
	 * The BuyerId
	 * Meta informations extracted from the WSDL
	 * - documentation : Buyers ebay Id. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 1
	 * @var string
	 */
	public $BuyerId;
	/**
	 * The ClientType
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicating the client type. Weather it is WAP or J2ME. A value of 'WAP' indicates WAP. A value of 'J2MEClient' indicates J2ME client. Required
	 * - minOccurs : 1
	 * @var PayPalEnumDyneticClientType
	 */
	public $ClientType;
	/**
	 * The BuyerPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : The phone number of the buyer's mobile device, if available. Optional
	 * - minOccurs : 0
	 * @var PayPalStructPhoneNumberType
	 */
	public $BuyerPhone;
	/**
	 * The ReturnURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Optional Character length and limitations: no limit.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Optional Character length and limitations: no limit
	 * - minOccurs : 0
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The Quantity
	 * Meta informations extracted from the WSDL
	 * - documentation : Specify quantity in case it is an immediate pay (or autopay) item. Optional
	 * - minOccurs : 0
	 * @var int
	 */
	public $Quantity;
	/**
	 * The ItemAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.Used only for autopay items. Optional
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemAmount;
	/**
	 * Constructor method for SetEbayMobileCheckoutRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumEbayCheckoutType $_checkoutType
	 * @param string $_itemId
	 * @param string $_transactionId
	 * @param string $_siteId
	 * @param string $_buyerId
	 * @param PayPalEnumDyneticClientType $_clientType
	 * @param PayPalStructPhoneNumberType $_buyerPhone
	 * @param string $_returnURL
	 * @param string $_cancelURL
	 * @param int $_quantity
	 * @param PayPalStructBasicAmountType $_itemAmount
	 * @return PayPalStructSetEbayMobileCheckoutRequestDetailsType
	 */
	public function __construct($_checkoutType,$_itemId,$_transactionId,$_siteId,$_buyerId,$_clientType,$_buyerPhone = NULL,$_returnURL = NULL,$_cancelURL = NULL,$_quantity = NULL,$_itemAmount = NULL)
	{
		parent::__construct(array('CheckoutType'=>$_checkoutType,'ItemId'=>$_itemId,'TransactionId'=>$_transactionId,'SiteId'=>$_siteId,'BuyerId'=>$_buyerId,'ClientType'=>$_clientType,'BuyerPhone'=>$_buyerPhone,'ReturnURL'=>$_returnURL,'CancelURL'=>$_cancelURL,'Quantity'=>$_quantity,'ItemAmount'=>$_itemAmount));
	}
	/**
	 * Get CheckoutType value
	 * @return PayPalEnumEbayCheckoutType
	 */
	public function getCheckoutType()
	{
		return $this->CheckoutType;
	}
	/**
	 * Set CheckoutType value
	 * @uses PayPalEnumEbayCheckoutType::valueIsValid()
	 * @param PayPalEnumEbayCheckoutType $_checkoutType the CheckoutType
	 * @return PayPalEnumEbayCheckoutType
	 */
	public function setCheckoutType($_checkoutType)
	{
		if(!PayPalEnumEbayCheckoutType::valueIsValid($_checkoutType))
		{
			return false;
		}
		return ($this->CheckoutType = $_checkoutType);
	}
	/**
	 * Get ItemId value
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set ItemId value
	 * @param string $_itemId the ItemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->ItemId = $_itemId);
	}
	/**
	 * Get TransactionId value
	 * @return string
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
	 * Get SiteId value
	 * @return string
	 */
	public function getSiteId()
	{
		return $this->SiteId;
	}
	/**
	 * Set SiteId value
	 * @param string $_siteId the SiteId
	 * @return string
	 */
	public function setSiteId($_siteId)
	{
		return ($this->SiteId = $_siteId);
	}
	/**
	 * Get BuyerId value
	 * @return string
	 */
	public function getBuyerId()
	{
		return $this->BuyerId;
	}
	/**
	 * Set BuyerId value
	 * @param string $_buyerId the BuyerId
	 * @return string
	 */
	public function setBuyerId($_buyerId)
	{
		return ($this->BuyerId = $_buyerId);
	}
	/**
	 * Get ClientType value
	 * @return PayPalEnumDyneticClientType
	 */
	public function getClientType()
	{
		return $this->ClientType;
	}
	/**
	 * Set ClientType value
	 * @uses PayPalEnumDyneticClientType::valueIsValid()
	 * @param PayPalEnumDyneticClientType $_clientType the ClientType
	 * @return PayPalEnumDyneticClientType
	 */
	public function setClientType($_clientType)
	{
		if(!PayPalEnumDyneticClientType::valueIsValid($_clientType))
		{
			return false;
		}
		return ($this->ClientType = $_clientType);
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
	 * Get ReturnURL value
	 * @return string|null
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
	 * Get Quantity value
	 * @return int|null
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Quantity value
	 * @param int $_quantity the Quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->Quantity = $_quantity);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetEbayMobileCheckoutRequestDetailsType
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