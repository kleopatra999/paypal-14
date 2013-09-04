<?php
/**
 * File for class PayPalEnumIncentiveRequestCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumIncentiveRequestCodeType originally named IncentiveRequestCodeType
 * Documentation : IncentiveRequestType This identifies the type of request for the API call. The type of request may be used to determine whether the request is for evaluating incentives in pre-checkout or in-checkout phase.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumIncentiveRequestCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'InCheckout'
	 * @return string 'InCheckout'
	 */
	const VALUE_INCHECKOUT = 'InCheckout';
	/**
	 * Constant for value 'PreCheckout'
	 * @return string 'PreCheckout'
	 */
	const VALUE_PRECHECKOUT = 'PreCheckout';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumIncentiveRequestCodeType::VALUE_INCHECKOUT
	 * @uses PayPalEnumIncentiveRequestCodeType::VALUE_PRECHECKOUT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumIncentiveRequestCodeType::VALUE_INCHECKOUT,PayPalEnumIncentiveRequestCodeType::VALUE_PRECHECKOUT));
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