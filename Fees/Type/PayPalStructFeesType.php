<?php
/**
 * File for class PayPalStructFeesType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFeesType originally named FeesType
 * Documentation : Following are the current set of eBay fee types AuctionLengthFee BoldFee BuyItNowFee CategoryFeaturedFee FeaturedFee FeaturedGalleryFee FixedPriceDurationFee GalleryFee GiftIconFee HighLightFee InsertionFee ListingDesignerFee ListingFee PhotoDisplayFee PhotoFee ReserveFee SchedulingFee ThirtyDaysAucFee Instances of this type could hold one or more supported types of fee.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFeesType extends PayPalWsdlClass
{
	/**
	 * The Fee
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var PayPalStructFeeType
	 */
	public $Fee;
	/**
	 * Constructor method for FeesType
	 * @see parent::__construct()
	 * @param PayPalStructFeeType $_fee
	 * @return PayPalStructFeesType
	 */
	public function __construct($_fee = NULL)
	{
		parent::__construct(array('Fee'=>$_fee));
	}
	/**
	 * Get Fee value
	 * @return PayPalStructFeeType|null
	 */
	public function getFee()
	{
		return $this->Fee;
	}
	/**
	 * Set Fee value
	 * @param PayPalStructFeeType $_fee the Fee
	 * @return PayPalStructFeeType
	 */
	public function setFee($_fee)
	{
		return ($this->Fee = $_fee);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFeesType
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