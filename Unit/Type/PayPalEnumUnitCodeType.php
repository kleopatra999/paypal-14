<?php
/**
 * File for class PayPalEnumUnitCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumUnitCodeType originally named UnitCodeType
 * Documentation : UnitCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumUnitCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'kg'
	 * Meta informations extracted from the WSDL
	 * - documentation : Kilogram.
	 * @return string 'kg'
	 */
	const VALUE_KG = 'kg';
	/**
	 * Constant for value 'lbs'
	 * Meta informations extracted from the WSDL
	 * - documentation : Pounds.
	 * @return string 'lbs'
	 */
	const VALUE_LBS = 'lbs';
	/**
	 * Constant for value 'oz'
	 * Meta informations extracted from the WSDL
	 * - documentation : Ounces
	 * @return string 'oz'
	 */
	const VALUE_OZ = 'oz';
	/**
	 * Constant for value 'cm'
	 * Meta informations extracted from the WSDL
	 * - documentation : Centimeter.
	 * @return string 'cm'
	 */
	const VALUE_CM = 'cm';
	/**
	 * Constant for value 'inches'
	 * Meta informations extracted from the WSDL
	 * - documentation : Inches.
	 * @return string 'inches'
	 */
	const VALUE_INCHES = 'inches';
	/**
	 * Constant for value 'ft'
	 * Meta informations extracted from the WSDL
	 * - documentation : Feet.
	 * @return string 'ft'
	 */
	const VALUE_FT = 'ft';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumUnitCodeType::VALUE_KG
	 * @uses PayPalEnumUnitCodeType::VALUE_LBS
	 * @uses PayPalEnumUnitCodeType::VALUE_OZ
	 * @uses PayPalEnumUnitCodeType::VALUE_CM
	 * @uses PayPalEnumUnitCodeType::VALUE_INCHES
	 * @uses PayPalEnumUnitCodeType::VALUE_FT
	 * @uses PayPalEnumUnitCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumUnitCodeType::VALUE_KG,PayPalEnumUnitCodeType::VALUE_LBS,PayPalEnumUnitCodeType::VALUE_OZ,PayPalEnumUnitCodeType::VALUE_CM,PayPalEnumUnitCodeType::VALUE_INCHES,PayPalEnumUnitCodeType::VALUE_FT,PayPalEnumUnitCodeType::VALUE_CUSTOMCODE));
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