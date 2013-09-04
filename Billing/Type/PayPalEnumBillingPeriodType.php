<?php
/**
 * File for class PayPalEnumBillingPeriodType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBillingPeriodType originally named BillingPeriodType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBillingPeriodType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoBillingPeriodType'
	 * @return string 'NoBillingPeriodType'
	 */
	const VALUE_NOBILLINGPERIODTYPE = 'NoBillingPeriodType';
	/**
	 * Constant for value 'Day'
	 * @return string 'Day'
	 */
	const VALUE_DAY = 'Day';
	/**
	 * Constant for value 'Week'
	 * @return string 'Week'
	 */
	const VALUE_WEEK = 'Week';
	/**
	 * Constant for value 'SemiMonth'
	 * @return string 'SemiMonth'
	 */
	const VALUE_SEMIMONTH = 'SemiMonth';
	/**
	 * Constant for value 'Month'
	 * @return string 'Month'
	 */
	const VALUE_MONTH = 'Month';
	/**
	 * Constant for value 'Year'
	 * @return string 'Year'
	 */
	const VALUE_YEAR = 'Year';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBillingPeriodType::VALUE_NOBILLINGPERIODTYPE
	 * @uses PayPalEnumBillingPeriodType::VALUE_DAY
	 * @uses PayPalEnumBillingPeriodType::VALUE_WEEK
	 * @uses PayPalEnumBillingPeriodType::VALUE_SEMIMONTH
	 * @uses PayPalEnumBillingPeriodType::VALUE_MONTH
	 * @uses PayPalEnumBillingPeriodType::VALUE_YEAR
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBillingPeriodType::VALUE_NOBILLINGPERIODTYPE,PayPalEnumBillingPeriodType::VALUE_DAY,PayPalEnumBillingPeriodType::VALUE_WEEK,PayPalEnumBillingPeriodType::VALUE_SEMIMONTH,PayPalEnumBillingPeriodType::VALUE_MONTH,PayPalEnumBillingPeriodType::VALUE_YEAR));
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