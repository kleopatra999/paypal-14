<?php
/**
 * File for class PayPalEnumShippingRegionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumShippingRegionCodeType originally named ShippingRegionCodeType
 * Documentation : ShippingRegion CodeType This code list module defines the enumerated types of regions for shipping items (i.e., a seller may support shipment of an item).
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumShippingRegionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Africa'
	 * Meta informations extracted from the WSDL
	 * - documentation : Africa
	 * @return string 'Africa'
	 */
	const VALUE_AFRICA = 'Africa';
	/**
	 * Constant for value 'Asia'
	 * Meta informations extracted from the WSDL
	 * - documentation : Asia
	 * @return string 'Asia'
	 */
	const VALUE_ASIA = 'Asia';
	/**
	 * Constant for value 'Caribbean'
	 * Meta informations extracted from the WSDL
	 * - documentation : Carribbean
	 * @return string 'Caribbean'
	 */
	const VALUE_CARIBBEAN = 'Caribbean';
	/**
	 * Constant for value 'Europe'
	 * Meta informations extracted from the WSDL
	 * - documentation : Europe
	 * @return string 'Europe'
	 */
	const VALUE_EUROPE = 'Europe';
	/**
	 * Constant for value 'LatinAmerica'
	 * Meta informations extracted from the WSDL
	 * - documentation : LatinAmerica
	 * @return string 'LatinAmerica'
	 */
	const VALUE_LATINAMERICA = 'LatinAmerica';
	/**
	 * Constant for value 'MiddleEast'
	 * Meta informations extracted from the WSDL
	 * - documentation : MiddleEast
	 * @return string 'MiddleEast'
	 */
	const VALUE_MIDDLEEAST = 'MiddleEast';
	/**
	 * Constant for value 'NorthAmerica'
	 * Meta informations extracted from the WSDL
	 * - documentation : NorthAmerica
	 * @return string 'NorthAmerica'
	 */
	const VALUE_NORTHAMERICA = 'NorthAmerica';
	/**
	 * Constant for value 'Oceania'
	 * Meta informations extracted from the WSDL
	 * - documentation : Oceania (i.e., Pacific region other than Asia)
	 * @return string 'Oceania'
	 */
	const VALUE_OCEANIA = 'Oceania';
	/**
	 * Constant for value 'SouthAmerica'
	 * Meta informations extracted from the WSDL
	 * - documentation : SouthAmerica
	 * @return string 'SouthAmerica'
	 */
	const VALUE_SOUTHAMERICA = 'SouthAmerica';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_AFRICA
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_ASIA
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_CARIBBEAN
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_EUROPE
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_LATINAMERICA
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_MIDDLEEAST
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_NORTHAMERICA
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_OCEANIA
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_SOUTHAMERICA
	 * @uses PayPalEnumShippingRegionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumShippingRegionCodeType::VALUE_AFRICA,PayPalEnumShippingRegionCodeType::VALUE_ASIA,PayPalEnumShippingRegionCodeType::VALUE_CARIBBEAN,PayPalEnumShippingRegionCodeType::VALUE_EUROPE,PayPalEnumShippingRegionCodeType::VALUE_LATINAMERICA,PayPalEnumShippingRegionCodeType::VALUE_MIDDLEEAST,PayPalEnumShippingRegionCodeType::VALUE_NORTHAMERICA,PayPalEnumShippingRegionCodeType::VALUE_OCEANIA,PayPalEnumShippingRegionCodeType::VALUE_SOUTHAMERICA,PayPalEnumShippingRegionCodeType::VALUE_CUSTOMCODE));
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