<?php
/**
 * File for class PayPalEnumPaymentStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentStatusCodeType originally named PaymentStatusCodeType
 * Documentation : PaymentStatusCodeType This is the status of a PayPal Payment which matches the output from IPN
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Completed'
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'Failed'
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'Pending'
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Denied'
	 * @return string 'Denied'
	 */
	const VALUE_DENIED = 'Denied';
	/**
	 * Constant for value 'Refunded'
	 * @return string 'Refunded'
	 */
	const VALUE_REFUNDED = 'Refunded';
	/**
	 * Constant for value 'Reversed'
	 * @return string 'Reversed'
	 */
	const VALUE_REVERSED = 'Reversed';
	/**
	 * Constant for value 'Canceled-Reversal'
	 * @return string 'Canceled-Reversal'
	 */
	const VALUE_CANCELED_REVERSAL = 'Canceled-Reversal';
	/**
	 * Constant for value 'Processed'
	 * @return string 'Processed'
	 */
	const VALUE_PROCESSED = 'Processed';
	/**
	 * Constant for value 'Partially-Refunded'
	 * @return string 'Partially-Refunded'
	 */
	const VALUE_PARTIALLY_REFUNDED = 'Partially-Refunded';
	/**
	 * Constant for value 'Voided'
	 * @return string 'Voided'
	 */
	const VALUE_VOIDED = 'Voided';
	/**
	 * Constant for value 'Expired'
	 * @return string 'Expired'
	 */
	const VALUE_EXPIRED = 'Expired';
	/**
	 * Constant for value 'In-Progress'
	 * @return string 'In-Progress'
	 */
	const VALUE_IN_PROGRESS = 'In-Progress';
	/**
	 * Constant for value 'Created'
	 * @return string 'Created'
	 */
	const VALUE_CREATED = 'Created';
	/**
	 * Constant for value 'Completed-Funds-Held'
	 * @return string 'Completed-Funds-Held'
	 */
	const VALUE_COMPLETED_FUNDS_HELD = 'Completed-Funds-Held';
	/**
	 * Constant for value 'Instant'
	 * @return string 'Instant'
	 */
	const VALUE_INSTANT = 'Instant';
	/**
	 * Constant for value 'Delayed'
	 * @return string 'Delayed'
	 */
	const VALUE_DELAYED = 'Delayed';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_NONE
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_COMPLETED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_FAILED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_PENDING
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_DENIED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_REFUNDED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_REVERSED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_CANCELED_REVERSAL
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_PROCESSED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_PARTIALLY_REFUNDED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_VOIDED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_EXPIRED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_IN_PROGRESS
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_CREATED
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_COMPLETED_FUNDS_HELD
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_INSTANT
	 * @uses PayPalEnumPaymentStatusCodeType::VALUE_DELAYED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentStatusCodeType::VALUE_NONE,PayPalEnumPaymentStatusCodeType::VALUE_COMPLETED,PayPalEnumPaymentStatusCodeType::VALUE_FAILED,PayPalEnumPaymentStatusCodeType::VALUE_PENDING,PayPalEnumPaymentStatusCodeType::VALUE_DENIED,PayPalEnumPaymentStatusCodeType::VALUE_REFUNDED,PayPalEnumPaymentStatusCodeType::VALUE_REVERSED,PayPalEnumPaymentStatusCodeType::VALUE_CANCELED_REVERSAL,PayPalEnumPaymentStatusCodeType::VALUE_PROCESSED,PayPalEnumPaymentStatusCodeType::VALUE_PARTIALLY_REFUNDED,PayPalEnumPaymentStatusCodeType::VALUE_VOIDED,PayPalEnumPaymentStatusCodeType::VALUE_EXPIRED,PayPalEnumPaymentStatusCodeType::VALUE_IN_PROGRESS,PayPalEnumPaymentStatusCodeType::VALUE_CREATED,PayPalEnumPaymentStatusCodeType::VALUE_COMPLETED_FUNDS_HELD,PayPalEnumPaymentStatusCodeType::VALUE_INSTANT,PayPalEnumPaymentStatusCodeType::VALUE_DELAYED));
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