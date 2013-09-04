<?php
/**
 * File for class PayPalEnumRefundSourceCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumRefundSourceCodeType originally named RefundSourceCodeType
 * Documentation : RefundSourceCodeType This is the type of PayPal funding source that can be used for auto refund. any - Means Merchant doesn't have any preference. PayPal can use any available funding source (Balance or eCheck) default - Means merchant's preferred funding source as configured in his profile. (Balance or eCheck) instant - Only Balance echeck - Merchant prefers echeck. If PayPal balance can cover the refund amount, we will use PayPal balance. (balance or eCheck)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumRefundSourceCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'any'
	 * @return string 'any'
	 */
	const VALUE_ANY = 'any';
	/**
	 * Constant for value 'default'
	 * @return string 'default'
	 */
	const VALUE_DEFAULT = 'default';
	/**
	 * Constant for value 'instant'
	 * @return string 'instant'
	 */
	const VALUE_INSTANT = 'instant';
	/**
	 * Constant for value 'echeck'
	 * @return string 'echeck'
	 */
	const VALUE_ECHECK = 'echeck';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumRefundSourceCodeType::VALUE_ANY
	 * @uses PayPalEnumRefundSourceCodeType::VALUE_DEFAULT
	 * @uses PayPalEnumRefundSourceCodeType::VALUE_INSTANT
	 * @uses PayPalEnumRefundSourceCodeType::VALUE_ECHECK
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumRefundSourceCodeType::VALUE_ANY,PayPalEnumRefundSourceCodeType::VALUE_DEFAULT,PayPalEnumRefundSourceCodeType::VALUE_INSTANT,PayPalEnumRefundSourceCodeType::VALUE_ECHECK));
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