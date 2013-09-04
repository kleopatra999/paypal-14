<?php
/**
 * File for class PayPalEnumPaymentActionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentActionCodeType originally named PaymentActionCodeType
 * Documentation : PaymentDetailsCodeType This is the PayPal payment details type (used by DCC and Express Checkout)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentActionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Authorization'
	 * @return string 'Authorization'
	 */
	const VALUE_AUTHORIZATION = 'Authorization';
	/**
	 * Constant for value 'Sale'
	 * @return string 'Sale'
	 */
	const VALUE_SALE = 'Sale';
	/**
	 * Constant for value 'Order'
	 * @return string 'Order'
	 */
	const VALUE_ORDER = 'Order';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentActionCodeType::VALUE_NONE
	 * @uses PayPalEnumPaymentActionCodeType::VALUE_AUTHORIZATION
	 * @uses PayPalEnumPaymentActionCodeType::VALUE_SALE
	 * @uses PayPalEnumPaymentActionCodeType::VALUE_ORDER
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentActionCodeType::VALUE_NONE,PayPalEnumPaymentActionCodeType::VALUE_AUTHORIZATION,PayPalEnumPaymentActionCodeType::VALUE_SALE,PayPalEnumPaymentActionCodeType::VALUE_ORDER));
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