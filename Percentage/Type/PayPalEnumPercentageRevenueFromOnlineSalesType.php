<?php
/**
 * File for class PayPalEnumPercentageRevenueFromOnlineSalesType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPercentageRevenueFromOnlineSalesType originally named PercentageRevenueFromOnlineSalesType
 * Documentation : PercentageRevenueFromOnlineSalesType Enumeration Meaning PercentageRevenueFromOnlineSales-Not-Applicable PercentageRevenueFromOnlineSales-Range1 Less than 25% PercentageRevenueFromOnlineSales-Range2 25% to 50% PercentageRevenueFromOnlineSales-Range3 50% to 75% PercentageRevenueFromOnlineSales-Range4 75% to 100%
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPercentageRevenueFromOnlineSalesType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Not-Applicable'
	 * @return string 'PercentageRevenueFromOnlineSales-Not-Applicable'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_NOT_APPLICABLE = 'PercentageRevenueFromOnlineSales-Not-Applicable';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range1'
	 * @return string 'PercentageRevenueFromOnlineSales-Range1'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE1 = 'PercentageRevenueFromOnlineSales-Range1';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range2'
	 * @return string 'PercentageRevenueFromOnlineSales-Range2'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE2 = 'PercentageRevenueFromOnlineSales-Range2';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range3'
	 * @return string 'PercentageRevenueFromOnlineSales-Range3'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE3 = 'PercentageRevenueFromOnlineSales-Range3';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range4'
	 * @return string 'PercentageRevenueFromOnlineSales-Range4'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE4 = 'PercentageRevenueFromOnlineSales-Range4';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_NOT_APPLICABLE
	 * @uses PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE1
	 * @uses PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE2
	 * @uses PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE3
	 * @uses PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE4
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_NOT_APPLICABLE,PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE1,PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE2,PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE3,PayPalEnumPercentageRevenueFromOnlineSalesType::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE4));
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