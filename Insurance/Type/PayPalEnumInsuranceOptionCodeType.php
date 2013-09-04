<?php
/**
 * File for class PayPalEnumInsuranceOptionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumInsuranceOptionCodeType originally named InsuranceOptionCodeType
 * Documentation : InsuranceOptionCodeType These are the possible codes to describe insurance option as part of shipping service.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumInsuranceOptionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Optional'
	 * Meta informations extracted from the WSDL
	 * - documentation : Insurance optional.
	 * @return string 'Optional'
	 */
	const VALUE_OPTIONAL = 'Optional';
	/**
	 * Constant for value 'Required'
	 * Meta informations extracted from the WSDL
	 * - documentation : Insurance required.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'NotOffered'
	 * Meta informations extracted from the WSDL
	 * - documentation : Insurance not offered.
	 * @return string 'NotOffered'
	 */
	const VALUE_NOTOFFERED = 'NotOffered';
	/**
	 * Constant for value 'IncludedInShippingHandling'
	 * Meta informations extracted from the WSDL
	 * - documentation : Insurance included in Shipping and Handling costs.
	 * @return string 'IncludedInShippingHandling'
	 */
	const VALUE_INCLUDEDINSHIPPINGHANDLING = 'IncludedInShippingHandling';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumInsuranceOptionCodeType::VALUE_OPTIONAL
	 * @uses PayPalEnumInsuranceOptionCodeType::VALUE_REQUIRED
	 * @uses PayPalEnumInsuranceOptionCodeType::VALUE_NOTOFFERED
	 * @uses PayPalEnumInsuranceOptionCodeType::VALUE_INCLUDEDINSHIPPINGHANDLING
	 * @uses PayPalEnumInsuranceOptionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumInsuranceOptionCodeType::VALUE_OPTIONAL,PayPalEnumInsuranceOptionCodeType::VALUE_REQUIRED,PayPalEnumInsuranceOptionCodeType::VALUE_NOTOFFERED,PayPalEnumInsuranceOptionCodeType::VALUE_INCLUDEDINSHIPPINGHANDLING,PayPalEnumInsuranceOptionCodeType::VALUE_CUSTOMCODE));
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