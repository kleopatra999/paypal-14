<?php
/**
 * File for class PayPalEnumBoardingStatusType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBoardingStatusType originally named BoardingStatusType
 * Documentation : Boarding Status
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBoardingStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Completed'
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'Cancelled'
	 * @return string 'Cancelled'
	 */
	const VALUE_CANCELLED = 'Cancelled';
	/**
	 * Constant for value 'Pending'
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBoardingStatusType::VALUE_UNKNOWN
	 * @uses PayPalEnumBoardingStatusType::VALUE_COMPLETED
	 * @uses PayPalEnumBoardingStatusType::VALUE_CANCELLED
	 * @uses PayPalEnumBoardingStatusType::VALUE_PENDING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBoardingStatusType::VALUE_UNKNOWN,PayPalEnumBoardingStatusType::VALUE_COMPLETED,PayPalEnumBoardingStatusType::VALUE_CANCELLED,PayPalEnumBoardingStatusType::VALUE_PENDING));
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