<?php
/**
 * File for class PayPalEnumSeverityCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSeverityCodeType originally named SeverityCodeType
 * Documentation : SeverityCodeType This code identifies the Severity code types in terms of whether there is an API-level error or warning that needs to be communicated to the client.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSeverityCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Warning'
	 * Meta informations extracted from the WSDL
	 * - documentation : Warning or informational error.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'Error'
	 * Meta informations extracted from the WSDL
	 * - documentation : Application-level error.
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'PartialSuccess'
	 * Meta informations extracted from the WSDL
	 * - documentation : Partial Success.
	 * @return string 'PartialSuccess'
	 */
	const VALUE_PARTIALSUCCESS = 'PartialSuccess';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSeverityCodeType::VALUE_WARNING
	 * @uses PayPalEnumSeverityCodeType::VALUE_ERROR
	 * @uses PayPalEnumSeverityCodeType::VALUE_PARTIALSUCCESS
	 * @uses PayPalEnumSeverityCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSeverityCodeType::VALUE_WARNING,PayPalEnumSeverityCodeType::VALUE_ERROR,PayPalEnumSeverityCodeType::VALUE_PARTIALSUCCESS,PayPalEnumSeverityCodeType::VALUE_CUSTOMCODE));
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