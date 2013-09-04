<?php
/**
 * File for class PayPalEnumIncentiveAppliedStatusType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumIncentiveAppliedStatusType originally named IncentiveAppliedStatusType
 * Documentation : This defines if the incentive is applied successfully or not.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumIncentiveAppliedStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'INCENTIVE-APPLIED-STATUS-SUCCESS'
	 * @return string 'INCENTIVE-APPLIED-STATUS-SUCCESS'
	 */
	const VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS = 'INCENTIVE-APPLIED-STATUS-SUCCESS';
	/**
	 * Constant for value 'INCENTIVE-APPLIED-STATUS-ERROR'
	 * @return string 'INCENTIVE-APPLIED-STATUS-ERROR'
	 */
	const VALUE_INCENTIVE_APPLIED_STATUS_ERROR = 'INCENTIVE-APPLIED-STATUS-ERROR';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumIncentiveAppliedStatusType::VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS
	 * @uses PayPalEnumIncentiveAppliedStatusType::VALUE_INCENTIVE_APPLIED_STATUS_ERROR
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumIncentiveAppliedStatusType::VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS,PayPalEnumIncentiveAppliedStatusType::VALUE_INCENTIVE_APPLIED_STATUS_ERROR));
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