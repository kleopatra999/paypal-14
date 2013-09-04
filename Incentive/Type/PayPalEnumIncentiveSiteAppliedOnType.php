<?php
/**
 * File for class PayPalEnumIncentiveSiteAppliedOnType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumIncentiveSiteAppliedOnType originally named IncentiveSiteAppliedOnType
 * Documentation : This defines if the incentive is applied on Ebay or PayPal.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumIncentiveSiteAppliedOnType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN'
	 * @return string 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN'
	 */
	const VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN = 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN';
	/**
	 * Constant for value 'INCENTIVE-SITE-APPLIED-ON-MERCHANT'
	 * @return string 'INCENTIVE-SITE-APPLIED-ON-MERCHANT'
	 */
	const VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT = 'INCENTIVE-SITE-APPLIED-ON-MERCHANT';
	/**
	 * Constant for value 'INCENTIVE-SITE-APPLIED-ON-PAYPAL'
	 * @return string 'INCENTIVE-SITE-APPLIED-ON-PAYPAL'
	 */
	const VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL = 'INCENTIVE-SITE-APPLIED-ON-PAYPAL';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumIncentiveSiteAppliedOnType::VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN
	 * @uses PayPalEnumIncentiveSiteAppliedOnType::VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT
	 * @uses PayPalEnumIncentiveSiteAppliedOnType::VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumIncentiveSiteAppliedOnType::VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN,PayPalEnumIncentiveSiteAppliedOnType::VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT,PayPalEnumIncentiveSiteAppliedOnType::VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL));
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