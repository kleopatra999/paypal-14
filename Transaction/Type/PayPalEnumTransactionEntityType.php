<?php
/**
 * File for class PayPalEnumTransactionEntityType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumTransactionEntityType originally named TransactionEntityType
 * Documentation : TransactionEntityType This is the PayPal DoAuthorization TransactionEntityType code
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumTransactionEntityType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Auth'
	 * @return string 'Auth'
	 */
	const VALUE_AUTH = 'Auth';
	/**
	 * Constant for value 'Reauth'
	 * @return string 'Reauth'
	 */
	const VALUE_REAUTH = 'Reauth';
	/**
	 * Constant for value 'Order'
	 * @return string 'Order'
	 */
	const VALUE_ORDER = 'Order';
	/**
	 * Constant for value 'Payment'
	 * @return string 'Payment'
	 */
	const VALUE_PAYMENT = 'Payment';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumTransactionEntityType::VALUE_NONE
	 * @uses PayPalEnumTransactionEntityType::VALUE_AUTH
	 * @uses PayPalEnumTransactionEntityType::VALUE_REAUTH
	 * @uses PayPalEnumTransactionEntityType::VALUE_ORDER
	 * @uses PayPalEnumTransactionEntityType::VALUE_PAYMENT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumTransactionEntityType::VALUE_NONE,PayPalEnumTransactionEntityType::VALUE_AUTH,PayPalEnumTransactionEntityType::VALUE_REAUTH,PayPalEnumTransactionEntityType::VALUE_ORDER,PayPalEnumTransactionEntityType::VALUE_PAYMENT));
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