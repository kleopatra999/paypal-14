<?php
/**
 * File for class PayPalEnumRefundType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumRefundType originally named RefundType
 * Documentation : RefundType - Type declaration to be used by other schema. This code identifies the types of refund transactions supported.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumRefundType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Full'
	 * Meta informations extracted from the WSDL
	 * - documentation : Full Refund
	 * @return string 'Full'
	 */
	const VALUE_FULL = 'Full';
	/**
	 * Constant for value 'Partial'
	 * Meta informations extracted from the WSDL
	 * - documentation : Partial Refund
	 * @return string 'Partial'
	 */
	const VALUE_PARTIAL = 'Partial';
	/**
	 * Constant for value 'ExternalDispute'
	 * Meta informations extracted from the WSDL
	 * - documentation : External Dispute
	 * @return string 'ExternalDispute'
	 */
	const VALUE_EXTERNALDISPUTE = 'ExternalDispute';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumRefundType::VALUE_OTHER
	 * @uses PayPalEnumRefundType::VALUE_FULL
	 * @uses PayPalEnumRefundType::VALUE_PARTIAL
	 * @uses PayPalEnumRefundType::VALUE_EXTERNALDISPUTE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumRefundType::VALUE_OTHER,PayPalEnumRefundType::VALUE_FULL,PayPalEnumRefundType::VALUE_PARTIAL,PayPalEnumRefundType::VALUE_EXTERNALDISPUTE));
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