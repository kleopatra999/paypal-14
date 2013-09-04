<?php
/**
 * File for class PayPalEnumMobileRecipientCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMobileRecipientCodeType originally named MobileRecipientCodeType
 * Documentation : MobileRecipientCodeType These are the accepted types of recipients for mobile-originated transactions
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMobileRecipientCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PhoneNumber'
	 * @return string 'PhoneNumber'
	 */
	const VALUE_PHONENUMBER = 'PhoneNumber';
	/**
	 * Constant for value 'EmailAddress'
	 * @return string 'EmailAddress'
	 */
	const VALUE_EMAILADDRESS = 'EmailAddress';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMobileRecipientCodeType::VALUE_PHONENUMBER
	 * @uses PayPalEnumMobileRecipientCodeType::VALUE_EMAILADDRESS
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMobileRecipientCodeType::VALUE_PHONENUMBER,PayPalEnumMobileRecipientCodeType::VALUE_EMAILADDRESS));
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