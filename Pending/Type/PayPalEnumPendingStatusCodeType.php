<?php
/**
 * File for class PayPalEnumPendingStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPendingStatusCodeType originally named PendingStatusCodeType
 * Documentation : PendingStatusCodeType The pending status for a PayPal Payment transaction which matches the output from IPN
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPendingStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'echeck'
	 * @return string 'echeck'
	 */
	const VALUE_ECHECK = 'echeck';
	/**
	 * Constant for value 'intl'
	 * @return string 'intl'
	 */
	const VALUE_INTL = 'intl';
	/**
	 * Constant for value 'verify'
	 * @return string 'verify'
	 */
	const VALUE_VERIFY = 'verify';
	/**
	 * Constant for value 'address'
	 * @return string 'address'
	 */
	const VALUE_ADDRESS = 'address';
	/**
	 * Constant for value 'unilateral'
	 * @return string 'unilateral'
	 */
	const VALUE_UNILATERAL = 'unilateral';
	/**
	 * Constant for value 'other'
	 * @return string 'other'
	 */
	const VALUE_OTHER = 'other';
	/**
	 * Constant for value 'upgrade'
	 * @return string 'upgrade'
	 */
	const VALUE_UPGRADE = 'upgrade';
	/**
	 * Constant for value 'multi-currency'
	 * @return string 'multi-currency'
	 */
	const VALUE_MULTI_CURRENCY = 'multi-currency';
	/**
	 * Constant for value 'authorization'
	 * @return string 'authorization'
	 */
	const VALUE_AUTHORIZATION = 'authorization';
	/**
	 * Constant for value 'order'
	 * @return string 'order'
	 */
	const VALUE_ORDER = 'order';
	/**
	 * Constant for value 'payment-review'
	 * @return string 'payment-review'
	 */
	const VALUE_PAYMENT_REVIEW = 'payment-review';
	/**
	 * Constant for value 'regulatory-review'
	 * @return string 'regulatory-review'
	 */
	const VALUE_REGULATORY_REVIEW = 'regulatory-review';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_NONE
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_ECHECK
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_INTL
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_VERIFY
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_ADDRESS
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_UNILATERAL
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_OTHER
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_UPGRADE
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_MULTI_CURRENCY
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_AUTHORIZATION
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_ORDER
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_PAYMENT_REVIEW
	 * @uses PayPalEnumPendingStatusCodeType::VALUE_REGULATORY_REVIEW
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPendingStatusCodeType::VALUE_NONE,PayPalEnumPendingStatusCodeType::VALUE_ECHECK,PayPalEnumPendingStatusCodeType::VALUE_INTL,PayPalEnumPendingStatusCodeType::VALUE_VERIFY,PayPalEnumPendingStatusCodeType::VALUE_ADDRESS,PayPalEnumPendingStatusCodeType::VALUE_UNILATERAL,PayPalEnumPendingStatusCodeType::VALUE_OTHER,PayPalEnumPendingStatusCodeType::VALUE_UPGRADE,PayPalEnumPendingStatusCodeType::VALUE_MULTI_CURRENCY,PayPalEnumPendingStatusCodeType::VALUE_AUTHORIZATION,PayPalEnumPendingStatusCodeType::VALUE_ORDER,PayPalEnumPendingStatusCodeType::VALUE_PAYMENT_REVIEW,PayPalEnumPendingStatusCodeType::VALUE_REGULATORY_REVIEW));
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