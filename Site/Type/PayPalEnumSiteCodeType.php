<?php
/**
 * File for class PayPalEnumSiteCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSiteCodeType originally named SiteCodeType
 * Documentation : SiteCodeType These are site codes that buyers and sellers can use to identify their sites.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSiteCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'US'
	 * Meta informations extracted from the WSDL
	 * - documentation : USA
	 * @return string 'US'
	 */
	const VALUE_US = 'US';
	/**
	 * Constant for value 'Canada'
	 * Meta informations extracted from the WSDL
	 * - documentation : Canada
	 * @return string 'Canada'
	 */
	const VALUE_CANADA = 'Canada';
	/**
	 * Constant for value 'UK'
	 * Meta informations extracted from the WSDL
	 * - documentation : United Kingdom
	 * @return string 'UK'
	 */
	const VALUE_UK = 'UK';
	/**
	 * Constant for value 'Australia'
	 * Meta informations extracted from the WSDL
	 * - documentation : Australia
	 * @return string 'Australia'
	 */
	const VALUE_AUSTRALIA = 'Australia';
	/**
	 * Constant for value 'Austria'
	 * Meta informations extracted from the WSDL
	 * - documentation : Austria
	 * @return string 'Austria'
	 */
	const VALUE_AUSTRIA = 'Austria';
	/**
	 * Constant for value 'Belgium_French'
	 * Meta informations extracted from the WSDL
	 * - documentation : Belgium (French)
	 * @return string 'Belgium_French'
	 */
	const VALUE_BELGIUM_FRENCH = 'Belgium_French';
	/**
	 * Constant for value 'France'
	 * Meta informations extracted from the WSDL
	 * - documentation : France
	 * @return string 'France'
	 */
	const VALUE_FRANCE = 'France';
	/**
	 * Constant for value 'Germany'
	 * Meta informations extracted from the WSDL
	 * - documentation : Germany
	 * @return string 'Germany'
	 */
	const VALUE_GERMANY = 'Germany';
	/**
	 * Constant for value 'Italy'
	 * Meta informations extracted from the WSDL
	 * - documentation : Italy
	 * @return string 'Italy'
	 */
	const VALUE_ITALY = 'Italy';
	/**
	 * Constant for value 'Belgium_Dutch'
	 * Meta informations extracted from the WSDL
	 * - documentation : Belgium (Dutch)
	 * @return string 'Belgium_Dutch'
	 */
	const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
	/**
	 * Constant for value 'Netherlands'
	 * Meta informations extracted from the WSDL
	 * - documentation : Netherlands
	 * @return string 'Netherlands'
	 */
	const VALUE_NETHERLANDS = 'Netherlands';
	/**
	 * Constant for value 'Spain'
	 * Meta informations extracted from the WSDL
	 * - documentation : Spain
	 * @return string 'Spain'
	 */
	const VALUE_SPAIN = 'Spain';
	/**
	 * Constant for value 'Switzerland'
	 * Meta informations extracted from the WSDL
	 * - documentation : Switzerland
	 * @return string 'Switzerland'
	 */
	const VALUE_SWITZERLAND = 'Switzerland';
	/**
	 * Constant for value 'Taiwan'
	 * Meta informations extracted from the WSDL
	 * - documentation : Taiwan
	 * @return string 'Taiwan'
	 */
	const VALUE_TAIWAN = 'Taiwan';
	/**
	 * Constant for value 'eBayMotors'
	 * Meta informations extracted from the WSDL
	 * - documentation : eBay Motors
	 * @return string 'eBayMotors'
	 */
	const VALUE_EBAYMOTORS = 'eBayMotors';
	/**
	 * Constant for value 'HongKong'
	 * Meta informations extracted from the WSDL
	 * - documentation : Hong Kong
	 * @return string 'HongKong'
	 */
	const VALUE_HONGKONG = 'HongKong';
	/**
	 * Constant for value 'Singapore'
	 * Meta informations extracted from the WSDL
	 * - documentation : Singapore
	 * @return string 'Singapore'
	 */
	const VALUE_SINGAPORE = 'Singapore';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSiteCodeType::VALUE_US
	 * @uses PayPalEnumSiteCodeType::VALUE_CANADA
	 * @uses PayPalEnumSiteCodeType::VALUE_UK
	 * @uses PayPalEnumSiteCodeType::VALUE_AUSTRALIA
	 * @uses PayPalEnumSiteCodeType::VALUE_AUSTRIA
	 * @uses PayPalEnumSiteCodeType::VALUE_BELGIUM_FRENCH
	 * @uses PayPalEnumSiteCodeType::VALUE_FRANCE
	 * @uses PayPalEnumSiteCodeType::VALUE_GERMANY
	 * @uses PayPalEnumSiteCodeType::VALUE_ITALY
	 * @uses PayPalEnumSiteCodeType::VALUE_BELGIUM_DUTCH
	 * @uses PayPalEnumSiteCodeType::VALUE_NETHERLANDS
	 * @uses PayPalEnumSiteCodeType::VALUE_SPAIN
	 * @uses PayPalEnumSiteCodeType::VALUE_SWITZERLAND
	 * @uses PayPalEnumSiteCodeType::VALUE_TAIWAN
	 * @uses PayPalEnumSiteCodeType::VALUE_EBAYMOTORS
	 * @uses PayPalEnumSiteCodeType::VALUE_HONGKONG
	 * @uses PayPalEnumSiteCodeType::VALUE_SINGAPORE
	 * @uses PayPalEnumSiteCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSiteCodeType::VALUE_US,PayPalEnumSiteCodeType::VALUE_CANADA,PayPalEnumSiteCodeType::VALUE_UK,PayPalEnumSiteCodeType::VALUE_AUSTRALIA,PayPalEnumSiteCodeType::VALUE_AUSTRIA,PayPalEnumSiteCodeType::VALUE_BELGIUM_FRENCH,PayPalEnumSiteCodeType::VALUE_FRANCE,PayPalEnumSiteCodeType::VALUE_GERMANY,PayPalEnumSiteCodeType::VALUE_ITALY,PayPalEnumSiteCodeType::VALUE_BELGIUM_DUTCH,PayPalEnumSiteCodeType::VALUE_NETHERLANDS,PayPalEnumSiteCodeType::VALUE_SPAIN,PayPalEnumSiteCodeType::VALUE_SWITZERLAND,PayPalEnumSiteCodeType::VALUE_TAIWAN,PayPalEnumSiteCodeType::VALUE_EBAYMOTORS,PayPalEnumSiteCodeType::VALUE_HONGKONG,PayPalEnumSiteCodeType::VALUE_SINGAPORE,PayPalEnumSiteCodeType::VALUE_CUSTOMCODE));
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