<?php
/**
 * File for class PayPalEnumShippingPackageCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumShippingPackageCodeType originally named ShippingPackageCodeType
 * Documentation : ShippingPackageCodeType These are the possible codes to describe shipping package options.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumShippingPackageCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : None.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Letter'
	 * Meta informations extracted from the WSDL
	 * - documentation : Letter.
	 * @return string 'Letter'
	 */
	const VALUE_LETTER = 'Letter';
	/**
	 * Constant for value 'LargeEnvelope'
	 * Meta informations extracted from the WSDL
	 * - documentation : LargeEnvelope
	 * @return string 'LargeEnvelope'
	 */
	const VALUE_LARGEENVELOPE = 'LargeEnvelope';
	/**
	 * Constant for value 'USPSLargePack'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Large Package/Oversize 1
	 * @return string 'USPSLargePack'
	 */
	const VALUE_USPSLARGEPACK = 'USPSLargePack';
	/**
	 * Constant for value 'VeryLargePack'
	 * Meta informations extracted from the WSDL
	 * - documentation : Very Large Package/Oversize 2
	 * @return string 'VeryLargePack'
	 */
	const VALUE_VERYLARGEPACK = 'VeryLargePack';
	/**
	 * Constant for value 'UPSLetter'
	 * Meta informations extracted from the WSDL
	 * - documentation : UPS Letter
	 * @return string 'UPSLetter'
	 */
	const VALUE_UPSLETTER = 'UPSLetter';
	/**
	 * Constant for value 'USPSFlatRateEnvelope'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Flat Rate Envelope
	 * @return string 'USPSFlatRateEnvelope'
	 */
	const VALUE_USPSFLATRATEENVELOPE = 'USPSFlatRateEnvelope';
	/**
	 * Constant for value 'PackageThickEnvelope'
	 * Meta informations extracted from the WSDL
	 * - documentation : Package/thick envelope
	 * @return string 'PackageThickEnvelope'
	 */
	const VALUE_PACKAGETHICKENVELOPE = 'PackageThickEnvelope';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_NONE
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_LETTER
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_LARGEENVELOPE
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_USPSLARGEPACK
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_VERYLARGEPACK
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_UPSLETTER
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_USPSFLATRATEENVELOPE
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_PACKAGETHICKENVELOPE
	 * @uses PayPalEnumShippingPackageCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumShippingPackageCodeType::VALUE_NONE,PayPalEnumShippingPackageCodeType::VALUE_LETTER,PayPalEnumShippingPackageCodeType::VALUE_LARGEENVELOPE,PayPalEnumShippingPackageCodeType::VALUE_USPSLARGEPACK,PayPalEnumShippingPackageCodeType::VALUE_VERYLARGEPACK,PayPalEnumShippingPackageCodeType::VALUE_UPSLETTER,PayPalEnumShippingPackageCodeType::VALUE_USPSFLATRATEENVELOPE,PayPalEnumShippingPackageCodeType::VALUE_PACKAGETHICKENVELOPE,PayPalEnumShippingPackageCodeType::VALUE_CUSTOMCODE));
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