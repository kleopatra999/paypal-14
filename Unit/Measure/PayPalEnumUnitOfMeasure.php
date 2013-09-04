<?php
/**
 * File for class PayPalEnumUnitOfMeasure
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumUnitOfMeasure originally named UnitOfMeasure
 * Documentation : Based on NRF-ARTS Specification for Units of Measure
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumUnitOfMeasure extends PayPalWsdlClass
{
	/**
	 * Constant for value 'EA'
	 * Meta informations extracted from the WSDL
	 * - documentation : Each
	 * @return string 'EA'
	 */
	const VALUE_EA = 'EA';
	/**
	 * Constant for value 'Hours'
	 * Meta informations extracted from the WSDL
	 * - documentation : Hours
	 * @return string 'Hours'
	 */
	const VALUE_HOURS = 'Hours';
	/**
	 * Constant for value 'Days'
	 * Meta informations extracted from the WSDL
	 * - documentation : Days
	 * @return string 'Days'
	 */
	const VALUE_DAYS = 'Days';
	/**
	 * Constant for value 'Seconds'
	 * Meta informations extracted from the WSDL
	 * - documentation : Seconds
	 * @return string 'Seconds'
	 */
	const VALUE_SECONDS = 'Seconds';
	/**
	 * Constant for value 'CrateOf12'
	 * Meta informations extracted from the WSDL
	 * - documentation : Crate of 12 bottles of beer
	 * @return string 'CrateOf12'
	 */
	const VALUE_CRATEOF12 = 'CrateOf12';
	/**
	 * Constant for value '6Pack'
	 * Meta informations extracted from the WSDL
	 * - documentation : 6Pack
	 * @return string '6Pack'
	 */
	const VALUE_6PACK = '6Pack';
	/**
	 * Constant for value 'GLI'
	 * Meta informations extracted from the WSDL
	 * - documentation : Gallon (UK)
	 * @return string 'GLI'
	 */
	const VALUE_GLI = 'GLI';
	/**
	 * Constant for value 'GLL'
	 * Meta informations extracted from the WSDL
	 * - documentation : Gallon (US)
	 * @return string 'GLL'
	 */
	const VALUE_GLL = 'GLL';
	/**
	 * Constant for value 'LTR'
	 * Meta informations extracted from the WSDL
	 * - documentation : Litre
	 * @return string 'LTR'
	 */
	const VALUE_LTR = 'LTR';
	/**
	 * Constant for value 'INH'
	 * Meta informations extracted from the WSDL
	 * - documentation : Inch
	 * @return string 'INH'
	 */
	const VALUE_INH = 'INH';
	/**
	 * Constant for value 'FOT'
	 * Meta informations extracted from the WSDL
	 * - documentation : Foot
	 * @return string 'FOT'
	 */
	const VALUE_FOT = 'FOT';
	/**
	 * Constant for value 'MMT'
	 * Meta informations extracted from the WSDL
	 * - documentation : Millimeter
	 * @return string 'MMT'
	 */
	const VALUE_MMT = 'MMT';
	/**
	 * Constant for value 'CMQ'
	 * Meta informations extracted from the WSDL
	 * - documentation : Centimeter
	 * @return string 'CMQ'
	 */
	const VALUE_CMQ = 'CMQ';
	/**
	 * Constant for value 'MTR'
	 * Meta informations extracted from the WSDL
	 * - documentation : Meter
	 * @return string 'MTR'
	 */
	const VALUE_MTR = 'MTR';
	/**
	 * Constant for value 'MTK'
	 * Meta informations extracted from the WSDL
	 * - documentation : Square Meter
	 * @return string 'MTK'
	 */
	const VALUE_MTK = 'MTK';
	/**
	 * Constant for value 'MTQ'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cubic Meter
	 * @return string 'MTQ'
	 */
	const VALUE_MTQ = 'MTQ';
	/**
	 * Constant for value 'GRM'
	 * Meta informations extracted from the WSDL
	 * - documentation : Gram
	 * @return string 'GRM'
	 */
	const VALUE_GRM = 'GRM';
	/**
	 * Constant for value 'KGM'
	 * Meta informations extracted from the WSDL
	 * - documentation : Kilogram
	 * @return string 'KGM'
	 */
	const VALUE_KGM = 'KGM';
	/**
	 * Constant for value 'KG'
	 * Meta informations extracted from the WSDL
	 * - documentation : Kilogram
	 * @return string 'KG'
	 */
	const VALUE_KG = 'KG';
	/**
	 * Constant for value 'LBR'
	 * Meta informations extracted from the WSDL
	 * - documentation : Pound
	 * @return string 'LBR'
	 */
	const VALUE_LBR = 'LBR';
	/**
	 * Constant for value 'ANN'
	 * Meta informations extracted from the WSDL
	 * - documentation : Annual
	 * @return string 'ANN'
	 */
	const VALUE_ANN = 'ANN';
	/**
	 * Constant for value 'CEL'
	 * Meta informations extracted from the WSDL
	 * - documentation : Degree Celcius
	 * @return string 'CEL'
	 */
	const VALUE_CEL = 'CEL';
	/**
	 * Constant for value 'FAH'
	 * Meta informations extracted from the WSDL
	 * - documentation : Degree Fahrenheit
	 * @return string 'FAH'
	 */
	const VALUE_FAH = 'FAH';
	/**
	 * Constant for value 'RESERVED'
	 * Meta informations extracted from the WSDL
	 * - documentation : RESERVED
	 * @return string 'RESERVED'
	 */
	const VALUE_RESERVED = 'RESERVED';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumUnitOfMeasure::VALUE_EA
	 * @uses PayPalEnumUnitOfMeasure::VALUE_HOURS
	 * @uses PayPalEnumUnitOfMeasure::VALUE_DAYS
	 * @uses PayPalEnumUnitOfMeasure::VALUE_SECONDS
	 * @uses PayPalEnumUnitOfMeasure::VALUE_CRATEOF12
	 * @uses PayPalEnumUnitOfMeasure::VALUE_6PACK
	 * @uses PayPalEnumUnitOfMeasure::VALUE_GLI
	 * @uses PayPalEnumUnitOfMeasure::VALUE_GLL
	 * @uses PayPalEnumUnitOfMeasure::VALUE_LTR
	 * @uses PayPalEnumUnitOfMeasure::VALUE_INH
	 * @uses PayPalEnumUnitOfMeasure::VALUE_FOT
	 * @uses PayPalEnumUnitOfMeasure::VALUE_MMT
	 * @uses PayPalEnumUnitOfMeasure::VALUE_CMQ
	 * @uses PayPalEnumUnitOfMeasure::VALUE_MTR
	 * @uses PayPalEnumUnitOfMeasure::VALUE_MTK
	 * @uses PayPalEnumUnitOfMeasure::VALUE_MTQ
	 * @uses PayPalEnumUnitOfMeasure::VALUE_GRM
	 * @uses PayPalEnumUnitOfMeasure::VALUE_KGM
	 * @uses PayPalEnumUnitOfMeasure::VALUE_KG
	 * @uses PayPalEnumUnitOfMeasure::VALUE_LBR
	 * @uses PayPalEnumUnitOfMeasure::VALUE_ANN
	 * @uses PayPalEnumUnitOfMeasure::VALUE_CEL
	 * @uses PayPalEnumUnitOfMeasure::VALUE_FAH
	 * @uses PayPalEnumUnitOfMeasure::VALUE_RESERVED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumUnitOfMeasure::VALUE_EA,PayPalEnumUnitOfMeasure::VALUE_HOURS,PayPalEnumUnitOfMeasure::VALUE_DAYS,PayPalEnumUnitOfMeasure::VALUE_SECONDS,PayPalEnumUnitOfMeasure::VALUE_CRATEOF12,PayPalEnumUnitOfMeasure::VALUE_6PACK,PayPalEnumUnitOfMeasure::VALUE_GLI,PayPalEnumUnitOfMeasure::VALUE_GLL,PayPalEnumUnitOfMeasure::VALUE_LTR,PayPalEnumUnitOfMeasure::VALUE_INH,PayPalEnumUnitOfMeasure::VALUE_FOT,PayPalEnumUnitOfMeasure::VALUE_MMT,PayPalEnumUnitOfMeasure::VALUE_CMQ,PayPalEnumUnitOfMeasure::VALUE_MTR,PayPalEnumUnitOfMeasure::VALUE_MTK,PayPalEnumUnitOfMeasure::VALUE_MTQ,PayPalEnumUnitOfMeasure::VALUE_GRM,PayPalEnumUnitOfMeasure::VALUE_KGM,PayPalEnumUnitOfMeasure::VALUE_KG,PayPalEnumUnitOfMeasure::VALUE_LBR,PayPalEnumUnitOfMeasure::VALUE_ANN,PayPalEnumUnitOfMeasure::VALUE_CEL,PayPalEnumUnitOfMeasure::VALUE_FAH,PayPalEnumUnitOfMeasure::VALUE_RESERVED));
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