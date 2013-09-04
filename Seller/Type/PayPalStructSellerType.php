<?php
/**
 * File for class PayPalStructSellerType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSellerType originally named SellerType
 * Documentation : Information about user used by selling applications there are number of required elements - they will always show up for seller node there is not such a call to do revise seller info. only added minoccur=0 to elements that will not show up in every type of request/responce
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSellerType extends PayPalWsdlClass
{
	/**
	 * The AllowPaymentEdit
	 * @var boolean
	 */
	public $AllowPaymentEdit;
	/**
	 * The BillingCurrency
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumCurrencyCodeType
	 */
	public $BillingCurrency;
	/**
	 * The CheckoutEnabled
	 * @var boolean
	 */
	public $CheckoutEnabled;
	/**
	 * The CIPBankAccountStored
	 * @var boolean
	 */
	public $CIPBankAccountStored;
	/**
	 * The GoodStanding
	 * @var boolean
	 */
	public $GoodStanding;
	/**
	 * The LiveAuctionAuthorized
	 * @var boolean
	 */
	public $LiveAuctionAuthorized;
	/**
	 * The MerchandizingPref
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the user has elected to participate as a seller in the Merchandising Manager feature.
	 * @var PayPalEnumMerchandizingPrefCodeType
	 */
	public $MerchandizingPref;
	/**
	 * The QualifiesForB2BVAT
	 * @var boolean
	 */
	public $QualifiesForB2BVAT;
	/**
	 * The SellerLevel
	 * @var PayPalEnumSellerLevelCodeType
	 */
	public $SellerLevel;
	/**
	 * The SellerPaymentAddress
	 * @var PayPalStructAddressType
	 */
	public $SellerPaymentAddress;
	/**
	 * The SchedulingInfo
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructSchedulingInfoType
	 */
	public $SchedulingInfo;
	/**
	 * The StoreOwner
	 * @var boolean
	 */
	public $StoreOwner;
	/**
	 * The StoreURL
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * Constructor method for SellerType
	 * @see parent::__construct()
	 * @param boolean $_allowPaymentEdit
	 * @param PayPalEnumCurrencyCodeType $_billingCurrency
	 * @param boolean $_checkoutEnabled
	 * @param boolean $_cIPBankAccountStored
	 * @param boolean $_goodStanding
	 * @param boolean $_liveAuctionAuthorized
	 * @param PayPalEnumMerchandizingPrefCodeType $_merchandizingPref
	 * @param boolean $_qualifiesForB2BVAT
	 * @param PayPalEnumSellerLevelCodeType $_sellerLevel
	 * @param PayPalStructAddressType $_sellerPaymentAddress
	 * @param PayPalStructSchedulingInfoType $_schedulingInfo
	 * @param boolean $_storeOwner
	 * @param anyURI $_storeURL
	 * @return PayPalStructSellerType
	 */
	public function __construct($_allowPaymentEdit = NULL,$_billingCurrency = NULL,$_checkoutEnabled = NULL,$_cIPBankAccountStored = NULL,$_goodStanding = NULL,$_liveAuctionAuthorized = NULL,$_merchandizingPref = NULL,$_qualifiesForB2BVAT = NULL,$_sellerLevel = NULL,$_sellerPaymentAddress = NULL,$_schedulingInfo = NULL,$_storeOwner = NULL,$_storeURL = NULL)
	{
		parent::__construct(array('AllowPaymentEdit'=>$_allowPaymentEdit,'BillingCurrency'=>$_billingCurrency,'CheckoutEnabled'=>$_checkoutEnabled,'CIPBankAccountStored'=>$_cIPBankAccountStored,'GoodStanding'=>$_goodStanding,'LiveAuctionAuthorized'=>$_liveAuctionAuthorized,'MerchandizingPref'=>$_merchandizingPref,'QualifiesForB2BVAT'=>$_qualifiesForB2BVAT,'SellerLevel'=>$_sellerLevel,'SellerPaymentAddress'=>$_sellerPaymentAddress,'SchedulingInfo'=>$_schedulingInfo,'StoreOwner'=>$_storeOwner,'StoreURL'=>$_storeURL));
	}
	/**
	 * Get AllowPaymentEdit value
	 * @return boolean|null
	 */
	public function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * Set AllowPaymentEdit value
	 * @param boolean $_allowPaymentEdit the AllowPaymentEdit
	 * @return boolean
	 */
	public function setAllowPaymentEdit($_allowPaymentEdit)
	{
		return ($this->AllowPaymentEdit = $_allowPaymentEdit);
	}
	/**
	 * Get BillingCurrency value
	 * @return PayPalEnumCurrencyCodeType|null
	 */
	public function getBillingCurrency()
	{
		return $this->BillingCurrency;
	}
	/**
	 * Set BillingCurrency value
	 * @uses PayPalEnumCurrencyCodeType::valueIsValid()
	 * @param PayPalEnumCurrencyCodeType $_billingCurrency the BillingCurrency
	 * @return PayPalEnumCurrencyCodeType
	 */
	public function setBillingCurrency($_billingCurrency)
	{
		if(!PayPalEnumCurrencyCodeType::valueIsValid($_billingCurrency))
		{
			return false;
		}
		return ($this->BillingCurrency = $_billingCurrency);
	}
	/**
	 * Get CheckoutEnabled value
	 * @return boolean|null
	 */
	public function getCheckoutEnabled()
	{
		return $this->CheckoutEnabled;
	}
	/**
	 * Set CheckoutEnabled value
	 * @param boolean $_checkoutEnabled the CheckoutEnabled
	 * @return boolean
	 */
	public function setCheckoutEnabled($_checkoutEnabled)
	{
		return ($this->CheckoutEnabled = $_checkoutEnabled);
	}
	/**
	 * Get CIPBankAccountStored value
	 * @return boolean|null
	 */
	public function getCIPBankAccountStored()
	{
		return $this->CIPBankAccountStored;
	}
	/**
	 * Set CIPBankAccountStored value
	 * @param boolean $_cIPBankAccountStored the CIPBankAccountStored
	 * @return boolean
	 */
	public function setCIPBankAccountStored($_cIPBankAccountStored)
	{
		return ($this->CIPBankAccountStored = $_cIPBankAccountStored);
	}
	/**
	 * Get GoodStanding value
	 * @return boolean|null
	 */
	public function getGoodStanding()
	{
		return $this->GoodStanding;
	}
	/**
	 * Set GoodStanding value
	 * @param boolean $_goodStanding the GoodStanding
	 * @return boolean
	 */
	public function setGoodStanding($_goodStanding)
	{
		return ($this->GoodStanding = $_goodStanding);
	}
	/**
	 * Get LiveAuctionAuthorized value
	 * @return boolean|null
	 */
	public function getLiveAuctionAuthorized()
	{
		return $this->LiveAuctionAuthorized;
	}
	/**
	 * Set LiveAuctionAuthorized value
	 * @param boolean $_liveAuctionAuthorized the LiveAuctionAuthorized
	 * @return boolean
	 */
	public function setLiveAuctionAuthorized($_liveAuctionAuthorized)
	{
		return ($this->LiveAuctionAuthorized = $_liveAuctionAuthorized);
	}
	/**
	 * Get MerchandizingPref value
	 * @return PayPalEnumMerchandizingPrefCodeType|null
	 */
	public function getMerchandizingPref()
	{
		return $this->MerchandizingPref;
	}
	/**
	 * Set MerchandizingPref value
	 * @uses PayPalEnumMerchandizingPrefCodeType::valueIsValid()
	 * @param PayPalEnumMerchandizingPrefCodeType $_merchandizingPref the MerchandizingPref
	 * @return PayPalEnumMerchandizingPrefCodeType
	 */
	public function setMerchandizingPref($_merchandizingPref)
	{
		if(!PayPalEnumMerchandizingPrefCodeType::valueIsValid($_merchandizingPref))
		{
			return false;
		}
		return ($this->MerchandizingPref = $_merchandizingPref);
	}
	/**
	 * Get QualifiesForB2BVAT value
	 * @return boolean|null
	 */
	public function getQualifiesForB2BVAT()
	{
		return $this->QualifiesForB2BVAT;
	}
	/**
	 * Set QualifiesForB2BVAT value
	 * @param boolean $_qualifiesForB2BVAT the QualifiesForB2BVAT
	 * @return boolean
	 */
	public function setQualifiesForB2BVAT($_qualifiesForB2BVAT)
	{
		return ($this->QualifiesForB2BVAT = $_qualifiesForB2BVAT);
	}
	/**
	 * Get SellerLevel value
	 * @return PayPalEnumSellerLevelCodeType|null
	 */
	public function getSellerLevel()
	{
		return $this->SellerLevel;
	}
	/**
	 * Set SellerLevel value
	 * @uses PayPalEnumSellerLevelCodeType::valueIsValid()
	 * @param PayPalEnumSellerLevelCodeType $_sellerLevel the SellerLevel
	 * @return PayPalEnumSellerLevelCodeType
	 */
	public function setSellerLevel($_sellerLevel)
	{
		if(!PayPalEnumSellerLevelCodeType::valueIsValid($_sellerLevel))
		{
			return false;
		}
		return ($this->SellerLevel = $_sellerLevel);
	}
	/**
	 * Get SellerPaymentAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}
	/**
	 * Set SellerPaymentAddress value
	 * @param PayPalStructAddressType $_sellerPaymentAddress the SellerPaymentAddress
	 * @return PayPalStructAddressType
	 */
	public function setSellerPaymentAddress($_sellerPaymentAddress)
	{
		return ($this->SellerPaymentAddress = $_sellerPaymentAddress);
	}
	/**
	 * Get SchedulingInfo value
	 * @return PayPalStructSchedulingInfoType|null
	 */
	public function getSchedulingInfo()
	{
		return $this->SchedulingInfo;
	}
	/**
	 * Set SchedulingInfo value
	 * @param PayPalStructSchedulingInfoType $_schedulingInfo the SchedulingInfo
	 * @return PayPalStructSchedulingInfoType
	 */
	public function setSchedulingInfo($_schedulingInfo)
	{
		return ($this->SchedulingInfo = $_schedulingInfo);
	}
	/**
	 * Get StoreOwner value
	 * @return boolean|null
	 */
	public function getStoreOwner()
	{
		return $this->StoreOwner;
	}
	/**
	 * Set StoreOwner value
	 * @param boolean $_storeOwner the StoreOwner
	 * @return boolean
	 */
	public function setStoreOwner($_storeOwner)
	{
		return ($this->StoreOwner = $_storeOwner);
	}
	/**
	 * Get StoreURL value
	 * @return anyURI|null
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set StoreURL value
	 * @param anyURI $_storeURL the StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_storeURL)
	{
		return ($this->StoreURL = $_storeURL);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSellerType
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