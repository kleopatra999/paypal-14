<?php
/**
 * File for class PayPalEnumAddressOwnerCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAddressOwnerCodeType originally named AddressOwnerCodeType
 * Documentation : AddressOwnerCodeType This code identifies the AddressOwner code types which indicates who owns the user'a address.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAddressOwnerCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PayPal'
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal owns address.
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'eBay'
	 * Meta informations extracted from the WSDL
	 * - documentation : eBay owns address.
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAddressOwnerCodeType::VALUE_PAYPAL
	 * @uses PayPalEnumAddressOwnerCodeType::VALUE_EBAY
	 * @uses PayPalEnumAddressOwnerCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAddressOwnerCodeType::VALUE_PAYPAL,PayPalEnumAddressOwnerCodeType::VALUE_EBAY,PayPalEnumAddressOwnerCodeType::VALUE_CUSTOMCODE));
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