<?php
/**
 * File for class PayPalEnumMatchStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMatchStatusCodeType originally named MatchStatusCodeType
 * Documentation : MatchStatusCodeType This is the PayPal (street/zip) match code
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMatchStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Matched'
	 * @return string 'Matched'
	 */
	const VALUE_MATCHED = 'Matched';
	/**
	 * Constant for value 'Unmatched'
	 * @return string 'Unmatched'
	 */
	const VALUE_UNMATCHED = 'Unmatched';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMatchStatusCodeType::VALUE_NONE
	 * @uses PayPalEnumMatchStatusCodeType::VALUE_MATCHED
	 * @uses PayPalEnumMatchStatusCodeType::VALUE_UNMATCHED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMatchStatusCodeType::VALUE_NONE,PayPalEnumMatchStatusCodeType::VALUE_MATCHED,PayPalEnumMatchStatusCodeType::VALUE_UNMATCHED));
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