<?php
/**
 * File for class PayPalEnumListingTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumListingTypeCodeType originally named ListingTypeCodeType
 * Documentation : ListingTypeCodeType - Type declaration to be used by other schema. This includes codes indicating the type of auction for the listed item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumListingTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations extracted from the WSDL
	 * - documentation : Unknown Listing Type
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
	 * Constant for value 'AdType'
	 * Meta informations extracted from the WSDL
	 * - documentation : Ad type auction
	 * @return string 'AdType'
	 */
	const VALUE_ADTYPE = 'AdType';
	/**
	 * Constant for value 'StoresFixedPrice'
	 * Meta informations extracted from the WSDL
	 * - documentation : Stores Fixed-price auction (US only)
	 * @return string 'StoresFixedPrice'
	 */
	const VALUE_STORESFIXEDPRICE = 'StoresFixedPrice';
	/**
	 * Constant for value 'PersonalOffer'
	 * Meta informations extracted from the WSDL
	 * - documentation : Personal Offer auction
	 * @return string 'PersonalOffer'
	 */
	const VALUE_PERSONALOFFER = 'PersonalOffer';
	/**
	 * Constant for value 'FixedPriceItem'
	 * Meta informations extracted from the WSDL
	 * - documentation : Fixed Price item ("BIN only").
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumListingTypeCodeType::VALUE_UNKNOWN
	 * @uses PayPalEnumListingTypeCodeType::VALUE_CHINESE
	 * @uses PayPalEnumListingTypeCodeType::VALUE_DUTCH
	 * @uses PayPalEnumListingTypeCodeType::VALUE_LIVE
	 * @uses PayPalEnumListingTypeCodeType::VALUE_ADTYPE
	 * @uses PayPalEnumListingTypeCodeType::VALUE_STORESFIXEDPRICE
	 * @uses PayPalEnumListingTypeCodeType::VALUE_PERSONALOFFER
	 * @uses PayPalEnumListingTypeCodeType::VALUE_FIXEDPRICEITEM
	 * @uses PayPalEnumListingTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumListingTypeCodeType::VALUE_UNKNOWN,PayPalEnumListingTypeCodeType::VALUE_CHINESE,PayPalEnumListingTypeCodeType::VALUE_DUTCH,PayPalEnumListingTypeCodeType::VALUE_LIVE,PayPalEnumListingTypeCodeType::VALUE_ADTYPE,PayPalEnumListingTypeCodeType::VALUE_STORESFIXEDPRICE,PayPalEnumListingTypeCodeType::VALUE_PERSONALOFFER,PayPalEnumListingTypeCodeType::VALUE_FIXEDPRICEITEM,PayPalEnumListingTypeCodeType::VALUE_CUSTOMCODE));
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