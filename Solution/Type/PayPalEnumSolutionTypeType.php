<?php
/**
 * File for class PayPalEnumSolutionTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSolutionTypeType originally named SolutionTypeType
 * Documentation : SolutionTypeType This is the PayPal payment Solution details type (used by Express Checkout)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSolutionTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Mark'
	 * @return string 'Mark'
	 */
	const VALUE_MARK = 'Mark';
	/**
	 * Constant for value 'Sole'
	 * @return string 'Sole'
	 */
	const VALUE_SOLE = 'Sole';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSolutionTypeType::VALUE_MARK
	 * @uses PayPalEnumSolutionTypeType::VALUE_SOLE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSolutionTypeType::VALUE_MARK,PayPalEnumSolutionTypeType::VALUE_SOLE));
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