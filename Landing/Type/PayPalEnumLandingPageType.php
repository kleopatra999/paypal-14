<?php
/**
 * File for class PayPalEnumLandingPageType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumLandingPageType originally named LandingPageType
 * Documentation : LandingPageType This is the PayPal payment Landing Page details type (used by Express Checkout)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumLandingPageType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Login'
	 * @return string 'Login'
	 */
	const VALUE_LOGIN = 'Login';
	/**
	 * Constant for value 'Billing'
	 * @return string 'Billing'
	 */
	const VALUE_BILLING = 'Billing';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumLandingPageType::VALUE_NONE
	 * @uses PayPalEnumLandingPageType::VALUE_LOGIN
	 * @uses PayPalEnumLandingPageType::VALUE_BILLING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumLandingPageType::VALUE_NONE,PayPalEnumLandingPageType::VALUE_LOGIN,PayPalEnumLandingPageType::VALUE_BILLING));
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