<?php
/**
 * File for class PayPalEnumFailedPaymentActionType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumFailedPaymentActionType originally named FailedPaymentActionType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumFailedPaymentActionType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CancelOnFailure'
	 * @return string 'CancelOnFailure'
	 */
	const VALUE_CANCELONFAILURE = 'CancelOnFailure';
	/**
	 * Constant for value 'ContinueOnFailure'
	 * @return string 'ContinueOnFailure'
	 */
	const VALUE_CONTINUEONFAILURE = 'ContinueOnFailure';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumFailedPaymentActionType::VALUE_CANCELONFAILURE
	 * @uses PayPalEnumFailedPaymentActionType::VALUE_CONTINUEONFAILURE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumFailedPaymentActionType::VALUE_CANCELONFAILURE,PayPalEnumFailedPaymentActionType::VALUE_CONTINUEONFAILURE));
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