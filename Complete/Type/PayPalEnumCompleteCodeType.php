<?php
/**
 * File for class PayPalEnumCompleteCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumCompleteCodeType originally named CompleteCodeType
 * Documentation : CompleteCodeType This is the PayPal DoCapture CompleteType code
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumCompleteCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NotComplete'
	 * @return string 'NotComplete'
	 */
	const VALUE_NOTCOMPLETE = 'NotComplete';
	/**
	 * Constant for value 'Complete'
	 * @return string 'Complete'
	 */
	const VALUE_COMPLETE = 'Complete';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumCompleteCodeType::VALUE_NOTCOMPLETE
	 * @uses PayPalEnumCompleteCodeType::VALUE_COMPLETE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumCompleteCodeType::VALUE_NOTCOMPLETE,PayPalEnumCompleteCodeType::VALUE_COMPLETE));
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