<?php
/**
 * File for class PayPalEnumItemCategoryType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumItemCategoryType originally named ItemCategoryType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumItemCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Physical'
	 * Meta informations extracted from the WSDL
	 * - documentation : Physical
	 * @return string 'Physical'
	 */
	const VALUE_PHYSICAL = 'Physical';
	/**
	 * Constant for value 'Digital'
	 * Meta informations extracted from the WSDL
	 * - documentation : Digital
	 * @return string 'Digital'
	 */
	const VALUE_DIGITAL = 'Digital';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumItemCategoryType::VALUE_PHYSICAL
	 * @uses PayPalEnumItemCategoryType::VALUE_DIGITAL
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumItemCategoryType::VALUE_PHYSICAL,PayPalEnumItemCategoryType::VALUE_DIGITAL));
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