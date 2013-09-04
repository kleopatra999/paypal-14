<?php
/**
 * File for class PayPalEnumAddressNormalizationStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAddressNormalizationStatusCodeType originally named AddressNormalizationStatusCodeType
 * Documentation : Normalization Status of the Address
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAddressNormalizationStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Normalized'
	 * @return string 'Normalized'
	 */
	const VALUE_NORMALIZED = 'Normalized';
	/**
	 * Constant for value 'Unnormalized'
	 * @return string 'Unnormalized'
	 */
	const VALUE_UNNORMALIZED = 'Unnormalized';
	/**
	 * Constant for value 'UserPreferred'
	 * @return string 'UserPreferred'
	 */
	const VALUE_USERPREFERRED = 'UserPreferred';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAddressNormalizationStatusCodeType::VALUE_NONE
	 * @uses PayPalEnumAddressNormalizationStatusCodeType::VALUE_NORMALIZED
	 * @uses PayPalEnumAddressNormalizationStatusCodeType::VALUE_UNNORMALIZED
	 * @uses PayPalEnumAddressNormalizationStatusCodeType::VALUE_USERPREFERRED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAddressNormalizationStatusCodeType::VALUE_NONE,PayPalEnumAddressNormalizationStatusCodeType::VALUE_NORMALIZED,PayPalEnumAddressNormalizationStatusCodeType::VALUE_UNNORMALIZED,PayPalEnumAddressNormalizationStatusCodeType::VALUE_USERPREFERRED));
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