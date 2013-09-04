<?php
/**
 * File for class PayPalEnumPaymentTransactionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentTransactionCodeType originally named PaymentTransactionCodeType
 * Documentation : PaymentTransactionCodeType This is the type of a PayPal of which matches the output from IPN
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentTransactionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'web-accept'
	 * @return string 'web-accept'
	 */
	const VALUE_WEB_ACCEPT = 'web-accept';
	/**
	 * Constant for value 'cart'
	 * @return string 'cart'
	 */
	const VALUE_CART = 'cart';
	/**
	 * Constant for value 'send-money'
	 * @return string 'send-money'
	 */
	const VALUE_SEND_MONEY = 'send-money';
	/**
	 * Constant for value 'subscr-failed'
	 * @return string 'subscr-failed'
	 */
	const VALUE_SUBSCR_FAILED = 'subscr-failed';
	/**
	 * Constant for value 'subscr-cancel'
	 * @return string 'subscr-cancel'
	 */
	const VALUE_SUBSCR_CANCEL = 'subscr-cancel';
	/**
	 * Constant for value 'subscr-payment'
	 * @return string 'subscr-payment'
	 */
	const VALUE_SUBSCR_PAYMENT = 'subscr-payment';
	/**
	 * Constant for value 'subscr-signup'
	 * @return string 'subscr-signup'
	 */
	const VALUE_SUBSCR_SIGNUP = 'subscr-signup';
	/**
	 * Constant for value 'subscr-eot'
	 * @return string 'subscr-eot'
	 */
	const VALUE_SUBSCR_EOT = 'subscr-eot';
	/**
	 * Constant for value 'subscr-modify'
	 * @return string 'subscr-modify'
	 */
	const VALUE_SUBSCR_MODIFY = 'subscr-modify';
	/**
	 * Constant for value 'mercht-pmt'
	 * @return string 'mercht-pmt'
	 */
	const VALUE_MERCHT_PMT = 'mercht-pmt';
	/**
	 * Constant for value 'mass-pay'
	 * @return string 'mass-pay'
	 */
	const VALUE_MASS_PAY = 'mass-pay';
	/**
	 * Constant for value 'virtual-terminal'
	 * @return string 'virtual-terminal'
	 */
	const VALUE_VIRTUAL_TERMINAL = 'virtual-terminal';
	/**
	 * Constant for value 'integral-evolution'
	 * @return string 'integral-evolution'
	 */
	const VALUE_INTEGRAL_EVOLUTION = 'integral-evolution';
	/**
	 * Constant for value 'express-checkout'
	 * @return string 'express-checkout'
	 */
	const VALUE_EXPRESS_CHECKOUT = 'express-checkout';
	/**
	 * Constant for value 'pro-hosted'
	 * @return string 'pro-hosted'
	 */
	const VALUE_PRO_HOSTED = 'pro-hosted';
	/**
	 * Constant for value 'pro-api'
	 * @return string 'pro-api'
	 */
	const VALUE_PRO_API = 'pro-api';
	/**
	 * Constant for value 'credit'
	 * @return string 'credit'
	 */
	const VALUE_CREDIT = 'credit';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_NONE
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_WEB_ACCEPT
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_CART
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SEND_MONEY
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_FAILED
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_CANCEL
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_PAYMENT
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_SIGNUP
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_EOT
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_MODIFY
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_MERCHT_PMT
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_MASS_PAY
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_VIRTUAL_TERMINAL
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_INTEGRAL_EVOLUTION
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_EXPRESS_CHECKOUT
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_PRO_HOSTED
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_PRO_API
	 * @uses PayPalEnumPaymentTransactionCodeType::VALUE_CREDIT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentTransactionCodeType::VALUE_NONE,PayPalEnumPaymentTransactionCodeType::VALUE_WEB_ACCEPT,PayPalEnumPaymentTransactionCodeType::VALUE_CART,PayPalEnumPaymentTransactionCodeType::VALUE_SEND_MONEY,PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_FAILED,PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_CANCEL,PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_PAYMENT,PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_SIGNUP,PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_EOT,PayPalEnumPaymentTransactionCodeType::VALUE_SUBSCR_MODIFY,PayPalEnumPaymentTransactionCodeType::VALUE_MERCHT_PMT,PayPalEnumPaymentTransactionCodeType::VALUE_MASS_PAY,PayPalEnumPaymentTransactionCodeType::VALUE_VIRTUAL_TERMINAL,PayPalEnumPaymentTransactionCodeType::VALUE_INTEGRAL_EVOLUTION,PayPalEnumPaymentTransactionCodeType::VALUE_EXPRESS_CHECKOUT,PayPalEnumPaymentTransactionCodeType::VALUE_PRO_HOSTED,PayPalEnumPaymentTransactionCodeType::VALUE_PRO_API,PayPalEnumPaymentTransactionCodeType::VALUE_CREDIT));
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