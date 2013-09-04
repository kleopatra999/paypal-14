<?php
/**
 * File for class PayPalEnumBusinessTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBusinessTypeType originally named BusinessTypeType
 * Documentation : BusinessTypeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBusinessTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Individual'
	 * @return string 'Individual'
	 */
	const VALUE_INDIVIDUAL = 'Individual';
	/**
	 * Constant for value 'Proprietorship'
	 * @return string 'Proprietorship'
	 */
	const VALUE_PROPRIETORSHIP = 'Proprietorship';
	/**
	 * Constant for value 'Partnership'
	 * @return string 'Partnership'
	 */
	const VALUE_PARTNERSHIP = 'Partnership';
	/**
	 * Constant for value 'Corporation'
	 * @return string 'Corporation'
	 */
	const VALUE_CORPORATION = 'Corporation';
	/**
	 * Constant for value 'Nonprofit'
	 * @return string 'Nonprofit'
	 */
	const VALUE_NONPROFIT = 'Nonprofit';
	/**
	 * Constant for value 'Government'
	 * @return string 'Government'
	 */
	const VALUE_GOVERNMENT = 'Government';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBusinessTypeType::VALUE_UNKNOWN
	 * @uses PayPalEnumBusinessTypeType::VALUE_INDIVIDUAL
	 * @uses PayPalEnumBusinessTypeType::VALUE_PROPRIETORSHIP
	 * @uses PayPalEnumBusinessTypeType::VALUE_PARTNERSHIP
	 * @uses PayPalEnumBusinessTypeType::VALUE_CORPORATION
	 * @uses PayPalEnumBusinessTypeType::VALUE_NONPROFIT
	 * @uses PayPalEnumBusinessTypeType::VALUE_GOVERNMENT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBusinessTypeType::VALUE_UNKNOWN,PayPalEnumBusinessTypeType::VALUE_INDIVIDUAL,PayPalEnumBusinessTypeType::VALUE_PROPRIETORSHIP,PayPalEnumBusinessTypeType::VALUE_PARTNERSHIP,PayPalEnumBusinessTypeType::VALUE_CORPORATION,PayPalEnumBusinessTypeType::VALUE_NONPROFIT,PayPalEnumBusinessTypeType::VALUE_GOVERNMENT));
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