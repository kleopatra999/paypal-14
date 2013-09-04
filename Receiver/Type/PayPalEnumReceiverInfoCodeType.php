<?php
/**
 * File for class PayPalEnumReceiverInfoCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumReceiverInfoCodeType originally named ReceiverInfoCodeType
 * Documentation : ReceiverInfoCodeType Payee identifier type for MassPay API
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumReceiverInfoCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'EmailAddress'
	 * @return string 'EmailAddress'
	 */
	const VALUE_EMAILADDRESS = 'EmailAddress';
	/**
	 * Constant for value 'UserID'
	 * @return string 'UserID'
	 */
	const VALUE_USERID = 'UserID';
	/**
	 * Constant for value 'PhoneNumber'
	 * @return string 'PhoneNumber'
	 */
	const VALUE_PHONENUMBER = 'PhoneNumber';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumReceiverInfoCodeType::VALUE_EMAILADDRESS
	 * @uses PayPalEnumReceiverInfoCodeType::VALUE_USERID
	 * @uses PayPalEnumReceiverInfoCodeType::VALUE_PHONENUMBER
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumReceiverInfoCodeType::VALUE_EMAILADDRESS,PayPalEnumReceiverInfoCodeType::VALUE_USERID,PayPalEnumReceiverInfoCodeType::VALUE_PHONENUMBER));
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