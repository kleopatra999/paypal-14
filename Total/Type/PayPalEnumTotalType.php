<?php
/**
 * File for class PayPalEnumTotalType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumTotalType originally named TotalType
 * Documentation : TotalType - Type declaration for the label to be displayed in MiniCart for UX.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumTotalType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Total'
	 * @return string 'Total'
	 */
	const VALUE_TOTAL = 'Total';
	/**
	 * Constant for value 'EstimatedTotal'
	 * @return string 'EstimatedTotal'
	 */
	const VALUE_ESTIMATEDTOTAL = 'EstimatedTotal';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumTotalType::VALUE_TOTAL
	 * @uses PayPalEnumTotalType::VALUE_ESTIMATEDTOTAL
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumTotalType::VALUE_TOTAL,PayPalEnumTotalType::VALUE_ESTIMATEDTOTAL));
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