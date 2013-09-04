<?php
/**
 * File for class PayPalStructListingDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructListingDetailsType originally named ListingDetailsType
 * Documentation : Contains the listed item details which consists of following information: .
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructListingDetailsType extends PayPalWsdlClass
{
	/**
	 * The Adult
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Adult;
	/**
	 * The BindingAuction
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BindingAuction;
	/**
	 * The CheckoutEnabled
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $CheckoutEnabled;
	/**
	 * The ConvertedBuyItNowPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Converted value of the BuyItNowPrice in the currency indicated by SiteCurrency. This value must be refreshed every 24 hours to pick up the current conversion rates.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ConvertedBuyItNowPrice;
	/**
	 * The ConvertedStartPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Converted value of the StartPrice field in the currency indicated by SiteCurrency. This value must be refreshed every 24 hours to pick up the current conversion rates.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ConvertedStartPrice;
	/**
	 * The ConvertedReservePrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the converted reserve price for a reserve auction. Returned only if DetailLevel = 4. ReservePrice is only returned for auctions with a reserve price where the user calling GetItem is the item's seller. Returned as null for International Fixed Price items. For more information on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ConvertedReservePrice;
	/**
	 * The HasReservePrice
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $HasReservePrice;
	/**
	 * The RegionName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $RegionName;
	/**
	 * The RelistedItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the new ItemID for a relisted item. When an item is relisted, the old (expired) listing is annotated with the new (relist) ItemID. This field only appears when the old listing is retrieved.
	 * - minOccurs : 0
	 * - documentation : Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
	 * @var string
	 */
	public $RelistedItemID;
	/**
	 * The SecondChanceOriginalItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The ItemID for the original listing (i.e., OriginalItemID specific to Second Chance Offer items).
	 * - minOccurs : 0
	 * - documentation : Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
	 * @var string
	 */
	public $SecondChanceOriginalItemID;
	/**
	 * The StartTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Time stamp for the start of the listing (in GMT). For regular items, StartTime is not sent in at listing time.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Time stamp for the end of the listing (in GMT).
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The ViewItemURL
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $ViewItemURL;
	/**
	 * Constructor method for ListingDetailsType
	 * @see parent::__construct()
	 * @param boolean $_adult
	 * @param boolean $_bindingAuction
	 * @param boolean $_checkoutEnabled
	 * @param PayPalStructAmountType $_convertedBuyItNowPrice
	 * @param PayPalStructAmountType $_convertedStartPrice
	 * @param PayPalStructAmountType $_convertedReservePrice
	 * @param boolean $_hasReservePrice
	 * @param string $_regionName
	 * @param string $_relistedItemID
	 * @param string $_secondChanceOriginalItemID
	 * @param dateTime $_startTime
	 * @param dateTime $_endTime
	 * @param anyURI $_viewItemURL
	 * @return PayPalStructListingDetailsType
	 */
	public function __construct($_adult = NULL,$_bindingAuction = NULL,$_checkoutEnabled = NULL,$_convertedBuyItNowPrice = NULL,$_convertedStartPrice = NULL,$_convertedReservePrice = NULL,$_hasReservePrice = NULL,$_regionName = NULL,$_relistedItemID = NULL,$_secondChanceOriginalItemID = NULL,$_startTime = NULL,$_endTime = NULL,$_viewItemURL = NULL)
	{
		parent::__construct(array('Adult'=>$_adult,'BindingAuction'=>$_bindingAuction,'CheckoutEnabled'=>$_checkoutEnabled,'ConvertedBuyItNowPrice'=>$_convertedBuyItNowPrice,'ConvertedStartPrice'=>$_convertedStartPrice,'ConvertedReservePrice'=>$_convertedReservePrice,'HasReservePrice'=>$_hasReservePrice,'RegionName'=>$_regionName,'RelistedItemID'=>$_relistedItemID,'SecondChanceOriginalItemID'=>$_secondChanceOriginalItemID,'StartTime'=>$_startTime,'EndTime'=>$_endTime,'ViewItemURL'=>$_viewItemURL));
	}
	/**
	 * Get Adult value
	 * @return boolean|null
	 */
	public function getAdult()
	{
		return $this->Adult;
	}
	/**
	 * Set Adult value
	 * @param boolean $_adult the Adult
	 * @return boolean
	 */
	public function setAdult($_adult)
	{
		return ($this->Adult = $_adult);
	}
	/**
	 * Get BindingAuction value
	 * @return boolean|null
	 */
	public function getBindingAuction()
	{
		return $this->BindingAuction;
	}
	/**
	 * Set BindingAuction value
	 * @param boolean $_bindingAuction the BindingAuction
	 * @return boolean
	 */
	public function setBindingAuction($_bindingAuction)
	{
		return ($this->BindingAuction = $_bindingAuction);
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
	 * Get ConvertedBuyItNowPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}
	/**
	 * Set ConvertedBuyItNowPrice value
	 * @param PayPalStructAmountType $_convertedBuyItNowPrice the ConvertedBuyItNowPrice
	 * @return PayPalStructAmountType
	 */
	public function setConvertedBuyItNowPrice($_convertedBuyItNowPrice)
	{
		return ($this->ConvertedBuyItNowPrice = $_convertedBuyItNowPrice);
	}
	/**
	 * Get ConvertedStartPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getConvertedStartPrice()
	{
		return $this->ConvertedStartPrice;
	}
	/**
	 * Set ConvertedStartPrice value
	 * @param PayPalStructAmountType $_convertedStartPrice the ConvertedStartPrice
	 * @return PayPalStructAmountType
	 */
	public function setConvertedStartPrice($_convertedStartPrice)
	{
		return ($this->ConvertedStartPrice = $_convertedStartPrice);
	}
	/**
	 * Get ConvertedReservePrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getConvertedReservePrice()
	{
		return $this->ConvertedReservePrice;
	}
	/**
	 * Set ConvertedReservePrice value
	 * @param PayPalStructAmountType $_convertedReservePrice the ConvertedReservePrice
	 * @return PayPalStructAmountType
	 */
	public function setConvertedReservePrice($_convertedReservePrice)
	{
		return ($this->ConvertedReservePrice = $_convertedReservePrice);
	}
	/**
	 * Get HasReservePrice value
	 * @return boolean|null
	 */
	public function getHasReservePrice()
	{
		return $this->HasReservePrice;
	}
	/**
	 * Set HasReservePrice value
	 * @param boolean $_hasReservePrice the HasReservePrice
	 * @return boolean
	 */
	public function setHasReservePrice($_hasReservePrice)
	{
		return ($this->HasReservePrice = $_hasReservePrice);
	}
	/**
	 * Get RegionName value
	 * @return string|null
	 */
	public function getRegionName()
	{
		return $this->RegionName;
	}
	/**
	 * Set RegionName value
	 * @param string $_regionName the RegionName
	 * @return string
	 */
	public function setRegionName($_regionName)
	{
		return ($this->RegionName = $_regionName);
	}
	/**
	 * Get RelistedItemID value
	 * @return string|null
	 */
	public function getRelistedItemID()
	{
		return $this->RelistedItemID;
	}
	/**
	 * Set RelistedItemID value
	 * @param string $_relistedItemID the RelistedItemID
	 * @return string
	 */
	public function setRelistedItemID($_relistedItemID)
	{
		return ($this->RelistedItemID = $_relistedItemID);
	}
	/**
	 * Get SecondChanceOriginalItemID value
	 * @return string|null
	 */
	public function getSecondChanceOriginalItemID()
	{
		return $this->SecondChanceOriginalItemID;
	}
	/**
	 * Set SecondChanceOriginalItemID value
	 * @param string $_secondChanceOriginalItemID the SecondChanceOriginalItemID
	 * @return string
	 */
	public function setSecondChanceOriginalItemID($_secondChanceOriginalItemID)
	{
		return ($this->SecondChanceOriginalItemID = $_secondChanceOriginalItemID);
	}
	/**
	 * Get StartTime value
	 * @return dateTime|null
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set StartTime value
	 * @param dateTime $_startTime the StartTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->StartTime = $_startTime);
	}
	/**
	 * Get EndTime value
	 * @return dateTime|null
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set EndTime value
	 * @param dateTime $_endTime the EndTime
	 * @return dateTime
	 */
	public function setEndTime($_endTime)
	{
		return ($this->EndTime = $_endTime);
	}
	/**
	 * Get ViewItemURL value
	 * @return anyURI|null
	 */
	public function getViewItemURL()
	{
		return $this->ViewItemURL;
	}
	/**
	 * Set ViewItemURL value
	 * @param anyURI $_viewItemURL the ViewItemURL
	 * @return anyURI
	 */
	public function setViewItemURL($_viewItemURL)
	{
		return ($this->ViewItemURL = $_viewItemURL);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructListingDetailsType
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