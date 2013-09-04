<?php
/**
 * File for class PayPalEnumPaymentTransactionClassCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentTransactionClassCodeType originally named PaymentTransactionClassCodeType
 * Documentation : PaymentTransactionClassCodeType The Type of PayPal payment.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentTransactionClassCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'Sent'
	 * @return string 'Sent'
	 */
	const VALUE_SENT = 'Sent';
	/**
	 * Constant for value 'Received'
	 * @return string 'Received'
	 */
	const VALUE_RECEIVED = 'Received';
	/**
	 * Constant for value 'MassPay'
	 * @return string 'MassPay'
	 */
	const VALUE_MASSPAY = 'MassPay';
	/**
	 * Constant for value 'MoneyRequest'
	 * @return string 'MoneyRequest'
	 */
	const VALUE_MONEYREQUEST = 'MoneyRequest';
	/**
	 * Constant for value 'FundsAdded'
	 * @return string 'FundsAdded'
	 */
	const VALUE_FUNDSADDED = 'FundsAdded';
	/**
	 * Constant for value 'FundsWithdrawn'
	 * @return string 'FundsWithdrawn'
	 */
	const VALUE_FUNDSWITHDRAWN = 'FundsWithdrawn';
	/**
	 * Constant for value 'PayPalDebitCard'
	 * @return string 'PayPalDebitCard'
	 */
	const VALUE_PAYPALDEBITCARD = 'PayPalDebitCard';
	/**
	 * Constant for value 'Referral'
	 * @return string 'Referral'
	 */
	const VALUE_REFERRAL = 'Referral';
	/**
	 * Constant for value 'Fee'
	 * @return string 'Fee'
	 */
	const VALUE_FEE = 'Fee';
	/**
	 * Constant for value 'Subscription'
	 * @return string 'Subscription'
	 */
	const VALUE_SUBSCRIPTION = 'Subscription';
	/**
	 * Constant for value 'Dividend'
	 * @return string 'Dividend'
	 */
	const VALUE_DIVIDEND = 'Dividend';
	/**
	 * Constant for value 'Billpay'
	 * @return string 'Billpay'
	 */
	const VALUE_BILLPAY = 'Billpay';
	/**
	 * Constant for value 'Refund'
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'CurrencyConversions'
	 * @return string 'CurrencyConversions'
	 */
	const VALUE_CURRENCYCONVERSIONS = 'CurrencyConversions';
	/**
	 * Constant for value 'BalanceTransfer'
	 * @return string 'BalanceTransfer'
	 */
	const VALUE_BALANCETRANSFER = 'BalanceTransfer';
	/**
	 * Constant for value 'Reversal'
	 * @return string 'Reversal'
	 */
	const VALUE_REVERSAL = 'Reversal';
	/**
	 * Constant for value 'Shipping'
	 * @return string 'Shipping'
	 */
	const VALUE_SHIPPING = 'Shipping';
	/**
	 * Constant for value 'BalanceAffecting'
	 * @return string 'BalanceAffecting'
	 */
	const VALUE_BALANCEAFFECTING = 'BalanceAffecting';
	/**
	 * Constant for value 'ECheck'
	 * @return string 'ECheck'
	 */
	const VALUE_ECHECK = 'ECheck';
	/**
	 * Constant for value 'ForcedPostTransaction'
	 * @return string 'ForcedPostTransaction'
	 */
	const VALUE_FORCEDPOSTTRANSACTION = 'ForcedPostTransaction';
	/**
	 * Constant for value 'NonReferencedRefunds'
	 * @return string 'NonReferencedRefunds'
	 */
	const VALUE_NONREFERENCEDREFUNDS = 'NonReferencedRefunds';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_ALL
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_SENT
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_RECEIVED
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_MASSPAY
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_MONEYREQUEST
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_FUNDSADDED
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_FUNDSWITHDRAWN
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_PAYPALDEBITCARD
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_REFERRAL
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_FEE
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_SUBSCRIPTION
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_DIVIDEND
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_BILLPAY
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_REFUND
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_CURRENCYCONVERSIONS
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_BALANCETRANSFER
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_REVERSAL
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_SHIPPING
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_BALANCEAFFECTING
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_ECHECK
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_FORCEDPOSTTRANSACTION
	 * @uses PayPalEnumPaymentTransactionClassCodeType::VALUE_NONREFERENCEDREFUNDS
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentTransactionClassCodeType::VALUE_ALL,PayPalEnumPaymentTransactionClassCodeType::VALUE_SENT,PayPalEnumPaymentTransactionClassCodeType::VALUE_RECEIVED,PayPalEnumPaymentTransactionClassCodeType::VALUE_MASSPAY,PayPalEnumPaymentTransactionClassCodeType::VALUE_MONEYREQUEST,PayPalEnumPaymentTransactionClassCodeType::VALUE_FUNDSADDED,PayPalEnumPaymentTransactionClassCodeType::VALUE_FUNDSWITHDRAWN,PayPalEnumPaymentTransactionClassCodeType::VALUE_PAYPALDEBITCARD,PayPalEnumPaymentTransactionClassCodeType::VALUE_REFERRAL,PayPalEnumPaymentTransactionClassCodeType::VALUE_FEE,PayPalEnumPaymentTransactionClassCodeType::VALUE_SUBSCRIPTION,PayPalEnumPaymentTransactionClassCodeType::VALUE_DIVIDEND,PayPalEnumPaymentTransactionClassCodeType::VALUE_BILLPAY,PayPalEnumPaymentTransactionClassCodeType::VALUE_REFUND,PayPalEnumPaymentTransactionClassCodeType::VALUE_CURRENCYCONVERSIONS,PayPalEnumPaymentTransactionClassCodeType::VALUE_BALANCETRANSFER,PayPalEnumPaymentTransactionClassCodeType::VALUE_REVERSAL,PayPalEnumPaymentTransactionClassCodeType::VALUE_SHIPPING,PayPalEnumPaymentTransactionClassCodeType::VALUE_BALANCEAFFECTING,PayPalEnumPaymentTransactionClassCodeType::VALUE_ECHECK,PayPalEnumPaymentTransactionClassCodeType::VALUE_FORCEDPOSTTRANSACTION,PayPalEnumPaymentTransactionClassCodeType::VALUE_NONREFERENCEDREFUNDS));
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