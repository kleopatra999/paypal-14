<?php
/**
 * File for class PayPalEnumBankAccountTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBankAccountTypeType originally named BankAccountTypeType
 * Documentation : BankAccountTypeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBankAccountTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Checking'
	 * @return string 'Checking'
	 */
	const VALUE_CHECKING = 'Checking';
	/**
	 * Constant for value 'Savings'
	 * @return string 'Savings'
	 */
	const VALUE_SAVINGS = 'Savings';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBankAccountTypeType::VALUE_CHECKING
	 * @uses PayPalEnumBankAccountTypeType::VALUE_SAVINGS
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBankAccountTypeType::VALUE_CHECKING,PayPalEnumBankAccountTypeType::VALUE_SAVINGS));
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