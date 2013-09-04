<?php
/**
 * File for class PayPalEnumPaymentCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentCodeType originally named PaymentCodeType
 * Documentation : PaymentCodeType This is the type of PayPal payment which matches the output from IPN.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'echeck'
	 * @return string 'echeck'
	 */
	const VALUE_ECHECK = 'echeck';
	/**
	 * Constant for value 'instant'
	 * @return string 'instant'
	 */
	const VALUE_INSTANT = 'instant';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentCodeType::VALUE_NONE
	 * @uses PayPalEnumPaymentCodeType::VALUE_ECHECK
	 * @uses PayPalEnumPaymentCodeType::VALUE_INSTANT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentCodeType::VALUE_NONE,PayPalEnumPaymentCodeType::VALUE_ECHECK,PayPalEnumPaymentCodeType::VALUE_INSTANT));
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