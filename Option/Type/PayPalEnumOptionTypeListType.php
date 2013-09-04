<?php
/**
 * File for class PayPalEnumOptionTypeListType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumOptionTypeListType originally named OptionTypeListType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumOptionTypeListType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoOptionType'
	 * @return string 'NoOptionType'
	 */
	const VALUE_NOOPTIONTYPE = 'NoOptionType';
	/**
	 * Constant for value 'FULL'
	 * @return string 'FULL'
	 */
	const VALUE_FULL = 'FULL';
	/**
	 * Constant for value 'EMI'
	 * @return string 'EMI'
	 */
	const VALUE_EMI = 'EMI';
	/**
	 * Constant for value 'VARIABLE'
	 * @return string 'VARIABLE'
	 */
	const VALUE_VARIABLE = 'VARIABLE';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumOptionTypeListType::VALUE_NOOPTIONTYPE
	 * @uses PayPalEnumOptionTypeListType::VALUE_FULL
	 * @uses PayPalEnumOptionTypeListType::VALUE_EMI
	 * @uses PayPalEnumOptionTypeListType::VALUE_VARIABLE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumOptionTypeListType::VALUE_NOOPTIONTYPE,PayPalEnumOptionTypeListType::VALUE_FULL,PayPalEnumOptionTypeListType::VALUE_EMI,PayPalEnumOptionTypeListType::VALUE_VARIABLE));
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