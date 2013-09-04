<?php
/**
 * File for class PayPalEnumListingDurationCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumListingDurationCodeType originally named ListingDurationCodeType
 * Documentation : ListingDurationCodeType These are the possible codes to describe the number of days the auction will be active. Must be one of the values 3, 5, 7, or 10 for auction and basic Fixed-Price (Type 9) listings. Must be 30, 60, 90, 120, or GTC for Stores Fixed-Price (Type 7) listings. Specify GTC for the Good 'Til Cancel feature (eBay Stores items only).
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumListingDurationCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Days_1'
	 * Meta informations extracted from the WSDL
	 * - documentation : 1 Day
	 * @return string 'Days_1'
	 */
	const VALUE_DAYS_1 = 'Days_1';
	/**
	 * Constant for value 'Days_3'
	 * Meta informations extracted from the WSDL
	 * - documentation : 3 Days
	 * @return string 'Days_3'
	 */
	const VALUE_DAYS_3 = 'Days_3';
	/**
	 * Constant for value 'Days_5'
	 * Meta informations extracted from the WSDL
	 * - documentation : 5 Days
	 * @return string 'Days_5'
	 */
	const VALUE_DAYS_5 = 'Days_5';
	/**
	 * Constant for value 'Days_7'
	 * Meta informations extracted from the WSDL
	 * - documentation : 7 Days
	 * @return string 'Days_7'
	 */
	const VALUE_DAYS_7 = 'Days_7';
	/**
	 * Constant for value 'Days_10'
	 * Meta informations extracted from the WSDL
	 * - documentation : 10 Days
	 * @return string 'Days_10'
	 */
	const VALUE_DAYS_10 = 'Days_10';
	/**
	 * Constant for value 'Days_30'
	 * Meta informations extracted from the WSDL
	 * - documentation : 30 Days
	 * @return string 'Days_30'
	 */
	const VALUE_DAYS_30 = 'Days_30';
	/**
	 * Constant for value 'Days_60'
	 * Meta informations extracted from the WSDL
	 * - documentation : 60 Days
	 * @return string 'Days_60'
	 */
	const VALUE_DAYS_60 = 'Days_60';
	/**
	 * Constant for value 'Days_90'
	 * Meta informations extracted from the WSDL
	 * - documentation : 90 Days
	 * @return string 'Days_90'
	 */
	const VALUE_DAYS_90 = 'Days_90';
	/**
	 * Constant for value 'Days_120'
	 * Meta informations extracted from the WSDL
	 * - documentation : 120 Days
	 * @return string 'Days_120'
	 */
	const VALUE_DAYS_120 = 'Days_120';
	/**
	 * Constant for value 'GTC'
	 * Meta informations extracted from the WSDL
	 * - documentation : GTC
	 * @return string 'GTC'
	 */
	const VALUE_GTC = 'GTC';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_1
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_3
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_5
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_7
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_10
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_30
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_60
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_90
	 * @uses PayPalEnumListingDurationCodeType::VALUE_DAYS_120
	 * @uses PayPalEnumListingDurationCodeType::VALUE_GTC
	 * @uses PayPalEnumListingDurationCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumListingDurationCodeType::VALUE_DAYS_1,PayPalEnumListingDurationCodeType::VALUE_DAYS_3,PayPalEnumListingDurationCodeType::VALUE_DAYS_5,PayPalEnumListingDurationCodeType::VALUE_DAYS_7,PayPalEnumListingDurationCodeType::VALUE_DAYS_10,PayPalEnumListingDurationCodeType::VALUE_DAYS_30,PayPalEnumListingDurationCodeType::VALUE_DAYS_60,PayPalEnumListingDurationCodeType::VALUE_DAYS_90,PayPalEnumListingDurationCodeType::VALUE_DAYS_120,PayPalEnumListingDurationCodeType::VALUE_GTC,PayPalEnumListingDurationCodeType::VALUE_CUSTOMCODE));
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