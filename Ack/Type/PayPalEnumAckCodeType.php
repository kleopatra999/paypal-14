<?php
/**
 * File for class PayPalEnumAckCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAckCodeType originally named AckCodeType
 * Documentation : AckCodeType This code identifies the acknowledgement code types that could be used to communicate the status of processing a (request) message to an application. This code would be used as part of a response message that contains an application level acknowledgement element.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAckCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * Meta informations extracted from the WSDL
	 * - documentation : Request processing succeeded.
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * Meta informations extracted from the WSDL
	 * - documentation : Request processing failed.
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constant for value 'Warning'
	 * Meta informations extracted from the WSDL
	 * - documentation : Request processing completed with warning information being included in the response message.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'SuccessWithWarning'
	 * Meta informations extracted from the WSDL
	 * - documentation : Request processing completed successful with some with some warning information that could be useful for the requesting application to process and/or record.
	 * @return string 'SuccessWithWarning'
	 */
	const VALUE_SUCCESSWITHWARNING = 'SuccessWithWarning';
	/**
	 * Constant for value 'FailureWithWarning'
	 * Meta informations extracted from the WSDL
	 * - documentation : Request processing failed with some error and warnining information that requesting application should process to determine cause(s) of failure.
	 * @return string 'FailureWithWarning'
	 */
	const VALUE_FAILUREWITHWARNING = 'FailureWithWarning';
	/**
	 * Constant for value 'PartialSuccess'
	 * Meta informations extracted from the WSDL
	 * - documentation : Request processing completed with Partial Success.
	 * @return string 'PartialSuccess'
	 */
	const VALUE_PARTIALSUCCESS = 'PartialSuccess';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAckCodeType::VALUE_SUCCESS
	 * @uses PayPalEnumAckCodeType::VALUE_FAILURE
	 * @uses PayPalEnumAckCodeType::VALUE_WARNING
	 * @uses PayPalEnumAckCodeType::VALUE_SUCCESSWITHWARNING
	 * @uses PayPalEnumAckCodeType::VALUE_FAILUREWITHWARNING
	 * @uses PayPalEnumAckCodeType::VALUE_PARTIALSUCCESS
	 * @uses PayPalEnumAckCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAckCodeType::VALUE_SUCCESS,PayPalEnumAckCodeType::VALUE_FAILURE,PayPalEnumAckCodeType::VALUE_WARNING,PayPalEnumAckCodeType::VALUE_SUCCESSWITHWARNING,PayPalEnumAckCodeType::VALUE_FAILUREWITHWARNING,PayPalEnumAckCodeType::VALUE_PARTIALSUCCESS,PayPalEnumAckCodeType::VALUE_CUSTOMCODE));
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