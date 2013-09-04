<?php
/**
 * File for class PayPalEnumAverageMonthlyVolumeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAverageMonthlyVolumeType originally named AverageMonthlyVolumeType
 * Documentation : AverageMonthlyVolumeType Enumeration Meaning AverageMonthlyVolume-Not-Applicable AverageMonthlyVolume-Range1 Less than $1,000 USD AverageMonthlyVolume-Range2 $1,000 USD to $5,000 USD AverageMonthlyVolume-Range3 $5,000 USD to $25,000 USD AverageMonthlyVolume-Range4 $25,000 USD to $100,000 USD AverageMonthlyVolume-Range5 $100,000 USD to $1,000,000 USD AverageMonthlyVolume-Range6 More than $1,000,000 USD
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAverageMonthlyVolumeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'AverageMonthlyVolume-Not-Applicable'
	 * @return string 'AverageMonthlyVolume-Not-Applicable'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_NOT_APPLICABLE = 'AverageMonthlyVolume-Not-Applicable';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range1'
	 * @return string 'AverageMonthlyVolume-Range1'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE1 = 'AverageMonthlyVolume-Range1';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range2'
	 * @return string 'AverageMonthlyVolume-Range2'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE2 = 'AverageMonthlyVolume-Range2';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range3'
	 * @return string 'AverageMonthlyVolume-Range3'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE3 = 'AverageMonthlyVolume-Range3';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range4'
	 * @return string 'AverageMonthlyVolume-Range4'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE4 = 'AverageMonthlyVolume-Range4';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range5'
	 * @return string 'AverageMonthlyVolume-Range5'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE5 = 'AverageMonthlyVolume-Range5';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range6'
	 * @return string 'AverageMonthlyVolume-Range6'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE6 = 'AverageMonthlyVolume-Range6';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_NOT_APPLICABLE
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE1
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE2
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE3
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE4
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE5
	 * @uses PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE6
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_NOT_APPLICABLE,PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE1,PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE2,PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE3,PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE4,PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE5,PayPalEnumAverageMonthlyVolumeType::VALUE_AVERAGEMONTHLYVOLUME_RANGE6));
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