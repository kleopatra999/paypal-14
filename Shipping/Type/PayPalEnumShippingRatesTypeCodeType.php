<?php
/**
 * File for class PayPalEnumShippingRatesTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumShippingRatesTypeCodeType originally named ShippingRatesTypeCodeType
 * Documentation : ShippingRatesTypeCodeType - Type declaration to be used by other schema. The includes the codes for shipping types supported by sellers to transport items sold to buyers.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumShippingRatesTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Flat'
	 * Meta informations extracted from the WSDL
	 * - documentation : Flat shipping rate.
	 * @return string 'Flat'
	 */
	const VALUE_FLAT = 'Flat';
	/**
	 * Constant for value 'Calculated'
	 * Meta informations extracted from the WSDL
	 * - documentation : Calculated shipping rate.
	 * @return string 'Calculated'
	 */
	const VALUE_CALCULATED = 'Calculated';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumShippingRatesTypeCodeType::VALUE_FLAT
	 * @uses PayPalEnumShippingRatesTypeCodeType::VALUE_CALCULATED
	 * @uses PayPalEnumShippingRatesTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumShippingRatesTypeCodeType::VALUE_FLAT,PayPalEnumShippingRatesTypeCodeType::VALUE_CALCULATED,PayPalEnumShippingRatesTypeCodeType::VALUE_CUSTOMCODE));
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