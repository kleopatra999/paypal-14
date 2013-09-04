<?php
/**
 * File for class PayPalEnumBankIDCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBankIDCodeType originally named BankIDCodeType
 * Documentation : BankID The various banks supported for China postbacks.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBankIDCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CMB'
	 * @return string 'CMB'
	 */
	const VALUE_CMB = 'CMB';
	/**
	 * Constant for value 'ICBC'
	 * @return string 'ICBC'
	 */
	const VALUE_ICBC = 'ICBC';
	/**
	 * Constant for value 'CCB'
	 * @return string 'CCB'
	 */
	const VALUE_CCB = 'CCB';
	/**
	 * Constant for value 'ChinaPay'
	 * @return string 'ChinaPay'
	 */
	const VALUE_CHINAPAY = 'ChinaPay';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBankIDCodeType::VALUE_CMB
	 * @uses PayPalEnumBankIDCodeType::VALUE_ICBC
	 * @uses PayPalEnumBankIDCodeType::VALUE_CCB
	 * @uses PayPalEnumBankIDCodeType::VALUE_CHINAPAY
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBankIDCodeType::VALUE_CMB,PayPalEnumBankIDCodeType::VALUE_ICBC,PayPalEnumBankIDCodeType::VALUE_CCB,PayPalEnumBankIDCodeType::VALUE_CHINAPAY));
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