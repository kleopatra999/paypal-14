<?php
/**
 * File for class PayPalEnumButtonCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumButtonCodeType originally named ButtonCodeType
 * Documentation : Types of button coding
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumButtonCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'HOSTED'
	 * Meta informations extracted from the WSDL
	 * - documentation : Creates Hosted Button
	 * @return string 'HOSTED'
	 */
	const VALUE_HOSTED = 'HOSTED';
	/**
	 * Constant for value 'ENCRYPTED'
	 * Meta informations extracted from the WSDL
	 * - documentation : Creates Encrypted Button
	 * @return string 'ENCRYPTED'
	 */
	const VALUE_ENCRYPTED = 'ENCRYPTED';
	/**
	 * Constant for value 'CLEARTEXT'
	 * Meta informations extracted from the WSDL
	 * - documentation : Creates Cleartext Button
	 * @return string 'CLEARTEXT'
	 */
	const VALUE_CLEARTEXT = 'CLEARTEXT';
	/**
	 * Constant for value 'TOKEN'
	 * Meta informations extracted from the WSDL
	 * - documentation : Creates Token or temporary Button
	 * @return string 'TOKEN'
	 */
	const VALUE_TOKEN = 'TOKEN';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumButtonCodeType::VALUE_HOSTED
	 * @uses PayPalEnumButtonCodeType::VALUE_ENCRYPTED
	 * @uses PayPalEnumButtonCodeType::VALUE_CLEARTEXT
	 * @uses PayPalEnumButtonCodeType::VALUE_TOKEN
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumButtonCodeType::VALUE_HOSTED,PayPalEnumButtonCodeType::VALUE_ENCRYPTED,PayPalEnumButtonCodeType::VALUE_CLEARTEXT,PayPalEnumButtonCodeType::VALUE_TOKEN));
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