<?php
/**
 * File for class PayPalEnumAuctionTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAuctionTypeCodeType originally named AuctionTypeCodeType
 * Documentation : AuctionTypeCodeType - Type declaration to be used by other schema's. This includes codes indicating the type of auction for the listed item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAuctionTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations extracted from the WSDL
	 * - documentation : Unknown auction type
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Chinese'
	 * Meta informations extracted from the WSDL
	 * - documentation : Chinese auction
	 * @return string 'Chinese'
	 */
	const VALUE_CHINESE = 'Chinese';
	/**
	 * Constant for value 'Dutch'
	 * Meta informations extracted from the WSDL
	 * - documentation : Dutch auction
	 * @return string 'Dutch'
	 */
	const VALUE_DUTCH = 'Dutch';
	/**
	 * Constant for value 'Live'
	 * Meta informations extracted from the WSDL
	 * - documentation : Live Auctions-type auction
	 * @return string 'Live'
	 */
	const VALUE_LIVE = 'Live';
	/**
	 * Constant for value 'Ad type'
	 * Meta informations extracted from the WSDL
	 * - documentation : Ad type auction
	 * @return string 'Ad type'
	 */
	const VALUE_AD_TYPE = 'Ad type';
	/**
	 * Constant for value 'Stores Fixed-price'
	 * Meta informations extracted from the WSDL
	 * - documentation : Stores Fixed-price auction (US only)
	 * @return string 'Stores Fixed-price'
	 */
	const VALUE_STORES_FIXED_PRICE = 'Stores Fixed-price';
	/**
	 * Constant for value 'Personal Offer'
	 * Meta informations extracted from the WSDL
	 * - documentation : Personal Offer auction
	 * @return string 'Personal Offer'
	 */
	const VALUE_PERSONAL_OFFER = 'Personal Offer';
	/**
	 * Constant for value 'Fixed Price Item'
	 * Meta informations extracted from the WSDL
	 * - documentation : Fixed Price item ("BIN only").
	 * @return string 'Fixed Price Item'
	 */
	const VALUE_FIXED_PRICE_ITEM = 'Fixed Price Item';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_UNKNOWN
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_CHINESE
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_DUTCH
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_LIVE
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_AD_TYPE
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_STORES_FIXED_PRICE
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_PERSONAL_OFFER
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_FIXED_PRICE_ITEM
	 * @uses PayPalEnumAuctionTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAuctionTypeCodeType::VALUE_UNKNOWN,PayPalEnumAuctionTypeCodeType::VALUE_CHINESE,PayPalEnumAuctionTypeCodeType::VALUE_DUTCH,PayPalEnumAuctionTypeCodeType::VALUE_LIVE,PayPalEnumAuctionTypeCodeType::VALUE_AD_TYPE,PayPalEnumAuctionTypeCodeType::VALUE_STORES_FIXED_PRICE,PayPalEnumAuctionTypeCodeType::VALUE_PERSONAL_OFFER,PayPalEnumAuctionTypeCodeType::VALUE_FIXED_PRICE_ITEM,PayPalEnumAuctionTypeCodeType::VALUE_CUSTOMCODE));
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