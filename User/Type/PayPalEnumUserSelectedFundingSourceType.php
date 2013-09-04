<?php
/**
 * File for class PayPalEnumUserSelectedFundingSourceType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumUserSelectedFundingSourceType originally named UserSelectedFundingSourceType
 * Documentation : UserSelectedFundingSourceType User Selected Funding Source (used by Express Checkout)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumUserSelectedFundingSourceType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ELV'
	 * @return string 'ELV'
	 */
	const VALUE_ELV = 'ELV';
	/**
	 * Constant for value 'CreditCard'
	 * @return string 'CreditCard'
	 */
	const VALUE_CREDITCARD = 'CreditCard';
	/**
	 * Constant for value 'ChinaUnionPay'
	 * @return string 'ChinaUnionPay'
	 */
	const VALUE_CHINAUNIONPAY = 'ChinaUnionPay';
	/**
	 * Constant for value 'BML'
	 * @return string 'BML'
	 */
	const VALUE_BML = 'BML';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumUserSelectedFundingSourceType::VALUE_ELV
	 * @uses PayPalEnumUserSelectedFundingSourceType::VALUE_CREDITCARD
	 * @uses PayPalEnumUserSelectedFundingSourceType::VALUE_CHINAUNIONPAY
	 * @uses PayPalEnumUserSelectedFundingSourceType::VALUE_BML
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumUserSelectedFundingSourceType::VALUE_ELV,PayPalEnumUserSelectedFundingSourceType::VALUE_CREDITCARD,PayPalEnumUserSelectedFundingSourceType::VALUE_CHINAUNIONPAY,PayPalEnumUserSelectedFundingSourceType::VALUE_BML));
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