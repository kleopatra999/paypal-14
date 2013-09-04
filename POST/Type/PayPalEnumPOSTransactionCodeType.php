<?php
/**
 * File for class PayPalEnumPOSTransactionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPOSTransactionCodeType originally named POSTransactionCodeType
 * Documentation : POSTransactionCodeType POS Transaction Code Type. F for Forced Post Transaction and S for Single Call Checkout
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPOSTransactionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'F'
	 * @return string 'F'
	 */
	const VALUE_F = 'F';
	/**
	 * Constant for value 'S'
	 * @return string 'S'
	 */
	const VALUE_S = 'S';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPOSTransactionCodeType::VALUE_F
	 * @uses PayPalEnumPOSTransactionCodeType::VALUE_S
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPOSTransactionCodeType::VALUE_F,PayPalEnumPOSTransactionCodeType::VALUE_S));
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