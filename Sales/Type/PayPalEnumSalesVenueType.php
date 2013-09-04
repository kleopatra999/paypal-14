<?php
/**
 * File for class PayPalEnumSalesVenueType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSalesVenueType originally named SalesVenueType
 * Documentation : SalesVenueType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSalesVenueType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Venue-Unspecified'
	 * @return string 'Venue-Unspecified'
	 */
	const VALUE_VENUE_UNSPECIFIED = 'Venue-Unspecified';
	/**
	 * Constant for value 'eBay'
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'AnotherMarketPlace'
	 * @return string 'AnotherMarketPlace'
	 */
	const VALUE_ANOTHERMARKETPLACE = 'AnotherMarketPlace';
	/**
	 * Constant for value 'OwnWebsite'
	 * @return string 'OwnWebsite'
	 */
	const VALUE_OWNWEBSITE = 'OwnWebsite';
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSalesVenueType::VALUE_VENUE_UNSPECIFIED
	 * @uses PayPalEnumSalesVenueType::VALUE_EBAY
	 * @uses PayPalEnumSalesVenueType::VALUE_ANOTHERMARKETPLACE
	 * @uses PayPalEnumSalesVenueType::VALUE_OWNWEBSITE
	 * @uses PayPalEnumSalesVenueType::VALUE_OTHER
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSalesVenueType::VALUE_VENUE_UNSPECIFIED,PayPalEnumSalesVenueType::VALUE_EBAY,PayPalEnumSalesVenueType::VALUE_ANOTHERMARKETPLACE,PayPalEnumSalesVenueType::VALUE_OWNWEBSITE,PayPalEnumSalesVenueType::VALUE_OTHER));
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