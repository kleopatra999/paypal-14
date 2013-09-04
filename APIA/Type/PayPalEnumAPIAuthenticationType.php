<?php
/**
 * File for class PayPalEnumAPIAuthenticationType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAPIAuthenticationType originally named APIAuthenticationType
 * Documentation : API Authentication Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAPIAuthenticationType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Auth-None'
	 * @return string 'Auth-None'
	 */
	const VALUE_AUTH_NONE = 'Auth-None';
	/**
	 * Constant for value 'Cert'
	 * @return string 'Cert'
	 */
	const VALUE_CERT = 'Cert';
	/**
	 * Constant for value 'Sign'
	 * @return string 'Sign'
	 */
	const VALUE_SIGN = 'Sign';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAPIAuthenticationType::VALUE_AUTH_NONE
	 * @uses PayPalEnumAPIAuthenticationType::VALUE_CERT
	 * @uses PayPalEnumAPIAuthenticationType::VALUE_SIGN
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAPIAuthenticationType::VALUE_AUTH_NONE,PayPalEnumAPIAuthenticationType::VALUE_CERT,PayPalEnumAPIAuthenticationType::VALUE_SIGN));
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