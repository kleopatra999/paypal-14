<?php
/**
 * File for class PayPalEnumReversalReasonCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumReversalReasonCodeType originally named ReversalReasonCodeType
 * Documentation : ReversalReasonCodeType Reason for a reversal on a PayPal transaction which matches the output from IPN
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumReversalReasonCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'chargeback'
	 * @return string 'chargeback'
	 */
	const VALUE_CHARGEBACK = 'chargeback';
	/**
	 * Constant for value 'guarantee'
	 * @return string 'guarantee'
	 */
	const VALUE_GUARANTEE = 'guarantee';
	/**
	 * Constant for value 'buyer-complaint'
	 * @return string 'buyer-complaint'
	 */
	const VALUE_BUYER_COMPLAINT = 'buyer-complaint';
	/**
	 * Constant for value 'refund'
	 * @return string 'refund'
	 */
	const VALUE_REFUND = 'refund';
	/**
	 * Constant for value 'other'
	 * @return string 'other'
	 */
	const VALUE_OTHER = 'other';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumReversalReasonCodeType::VALUE_NONE
	 * @uses PayPalEnumReversalReasonCodeType::VALUE_CHARGEBACK
	 * @uses PayPalEnumReversalReasonCodeType::VALUE_GUARANTEE
	 * @uses PayPalEnumReversalReasonCodeType::VALUE_BUYER_COMPLAINT
	 * @uses PayPalEnumReversalReasonCodeType::VALUE_REFUND
	 * @uses PayPalEnumReversalReasonCodeType::VALUE_OTHER
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumReversalReasonCodeType::VALUE_NONE,PayPalEnumReversalReasonCodeType::VALUE_CHARGEBACK,PayPalEnumReversalReasonCodeType::VALUE_GUARANTEE,PayPalEnumReversalReasonCodeType::VALUE_BUYER_COMPLAINT,PayPalEnumReversalReasonCodeType::VALUE_REFUND,PayPalEnumReversalReasonCodeType::VALUE_OTHER));
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