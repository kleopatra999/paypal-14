<?php
/**
 * File for class PayPalEnumAddressStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAddressStatusCodeType originally named AddressStatusCodeType
 * Documentation : AddressStatusCodeType This is the PayPal address status
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAddressStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Confirmed'
	 * @return string 'Confirmed'
	 */
	const VALUE_CONFIRMED = 'Confirmed';
	/**
	 * Constant for value 'Unconfirmed'
	 * @return string 'Unconfirmed'
	 */
	const VALUE_UNCONFIRMED = 'Unconfirmed';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAddressStatusCodeType::VALUE_NONE
	 * @uses PayPalEnumAddressStatusCodeType::VALUE_CONFIRMED
	 * @uses PayPalEnumAddressStatusCodeType::VALUE_UNCONFIRMED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAddressStatusCodeType::VALUE_NONE,PayPalEnumAddressStatusCodeType::VALUE_CONFIRMED,PayPalEnumAddressStatusCodeType::VALUE_UNCONFIRMED));
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