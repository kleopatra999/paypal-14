<?php
/**
 * File for class PayPalEnumCreditCardTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumCreditCardTypeType originally named CreditCardTypeType
 * Documentation : Type declaration to be used by other schemas. This is the credit card type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumCreditCardTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Visa'
	 * @return string 'Visa'
	 */
	const VALUE_VISA = 'Visa';
	/**
	 * Constant for value 'MasterCard'
	 * @return string 'MasterCard'
	 */
	const VALUE_MASTERCARD = 'MasterCard';
	/**
	 * Constant for value 'Discover'
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'Amex'
	 * @return string 'Amex'
	 */
	const VALUE_AMEX = 'Amex';
	/**
	 * Constant for value 'Switch'
	 * @return string 'Switch'
	 */
	const VALUE_SWITCH = 'Switch';
	/**
	 * Constant for value 'Solo'
	 * @return string 'Solo'
	 */
	const VALUE_SOLO = 'Solo';
	/**
	 * Constant for value 'Maestro'
	 * @return string 'Maestro'
	 */
	const VALUE_MAESTRO = 'Maestro';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumCreditCardTypeType::VALUE_VISA
	 * @uses PayPalEnumCreditCardTypeType::VALUE_MASTERCARD
	 * @uses PayPalEnumCreditCardTypeType::VALUE_DISCOVER
	 * @uses PayPalEnumCreditCardTypeType::VALUE_AMEX
	 * @uses PayPalEnumCreditCardTypeType::VALUE_SWITCH
	 * @uses PayPalEnumCreditCardTypeType::VALUE_SOLO
	 * @uses PayPalEnumCreditCardTypeType::VALUE_MAESTRO
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumCreditCardTypeType::VALUE_VISA,PayPalEnumCreditCardTypeType::VALUE_MASTERCARD,PayPalEnumCreditCardTypeType::VALUE_DISCOVER,PayPalEnumCreditCardTypeType::VALUE_AMEX,PayPalEnumCreditCardTypeType::VALUE_SWITCH,PayPalEnumCreditCardTypeType::VALUE_SOLO,PayPalEnumCreditCardTypeType::VALUE_MAESTRO));
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