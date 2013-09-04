<?php
/**
 * File for class PayPalEnumPaymentTransactionStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentTransactionStatusCodeType originally named PaymentTransactionStatusCodeType
 * Documentation : PaymentTransactionStatusCodeType The status of the PayPal payment.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentTransactionStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Pending'
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Processing'
	 * @return string 'Processing'
	 */
	const VALUE_PROCESSING = 'Processing';
	/**
	 * Constant for value 'Success'
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Denied'
	 * @return string 'Denied'
	 */
	const VALUE_DENIED = 'Denied';
	/**
	 * Constant for value 'Reversed'
	 * @return string 'Reversed'
	 */
	const VALUE_REVERSED = 'Reversed';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentTransactionStatusCodeType::VALUE_PENDING
	 * @uses PayPalEnumPaymentTransactionStatusCodeType::VALUE_PROCESSING
	 * @uses PayPalEnumPaymentTransactionStatusCodeType::VALUE_SUCCESS
	 * @uses PayPalEnumPaymentTransactionStatusCodeType::VALUE_DENIED
	 * @uses PayPalEnumPaymentTransactionStatusCodeType::VALUE_REVERSED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentTransactionStatusCodeType::VALUE_PENDING,PayPalEnumPaymentTransactionStatusCodeType::VALUE_PROCESSING,PayPalEnumPaymentTransactionStatusCodeType::VALUE_SUCCESS,PayPalEnumPaymentTransactionStatusCodeType::VALUE_DENIED,PayPalEnumPaymentTransactionStatusCodeType::VALUE_REVERSED));
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