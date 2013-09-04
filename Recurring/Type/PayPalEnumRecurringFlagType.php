<?php
/**
 * File for class PayPalEnumRecurringFlagType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumRecurringFlagType originally named RecurringFlagType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumRecurringFlagType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Y'
	 * @return string 'Y'
	 */
	const VALUE_Y = 'Y';
	/**
	 * Constant for value 'y'
	 * @return string 'y'
	 */
	const VALUE_Y_1 = 'y';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumRecurringFlagType::VALUE_Y
	 * @uses PayPalEnumRecurringFlagType::VALUE_Y_1
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumRecurringFlagType::VALUE_Y,PayPalEnumRecurringFlagType::VALUE_Y_1));
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