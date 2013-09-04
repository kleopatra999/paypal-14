<?php
/**
 * File for class PayPalEnumIncentiveRequestDetailLevelCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumIncentiveRequestDetailLevelCodeType originally named IncentiveRequestDetailLevelCodeType
 * Documentation : IncentiveRequestDetailLevelType This identifies the granularity of information requested by the client application. This information will be used to define the contents and details of the response.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumIncentiveRequestDetailLevelCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Aggregated'
	 * @return string 'Aggregated'
	 */
	const VALUE_AGGREGATED = 'Aggregated';
	/**
	 * Constant for value 'Detail'
	 * @return string 'Detail'
	 */
	const VALUE_DETAIL = 'Detail';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumIncentiveRequestDetailLevelCodeType::VALUE_AGGREGATED
	 * @uses PayPalEnumIncentiveRequestDetailLevelCodeType::VALUE_DETAIL
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumIncentiveRequestDetailLevelCodeType::VALUE_AGGREGATED,PayPalEnumIncentiveRequestDetailLevelCodeType::VALUE_DETAIL));
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