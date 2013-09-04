<?php
/**
 * File for class PayPalEnumPayPalUserStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPayPalUserStatusCodeType originally named PayPalUserStatusCodeType
 * Documentation : PayPalUserStatusCodeType PayPal status of a user Address
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPayPalUserStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'verified'
	 * @return string 'verified'
	 */
	const VALUE_VERIFIED = 'verified';
	/**
	 * Constant for value 'unverified'
	 * @return string 'unverified'
	 */
	const VALUE_UNVERIFIED = 'unverified';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPayPalUserStatusCodeType::VALUE_VERIFIED
	 * @uses PayPalEnumPayPalUserStatusCodeType::VALUE_UNVERIFIED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPayPalUserStatusCodeType::VALUE_VERIFIED,PayPalEnumPayPalUserStatusCodeType::VALUE_UNVERIFIED));
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