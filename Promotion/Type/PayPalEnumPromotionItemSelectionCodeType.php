<?php
/**
 * File for class PayPalEnumPromotionItemSelectionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPromotionItemSelectionCodeType originally named PromotionItemSelectionCodeType
 * Documentation : Cross Promotion Method.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPromotionItemSelectionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Manual'
	 * Meta informations extracted from the WSDL
	 * - documentation : Manual Selection
	 * @return string 'Manual'
	 */
	const VALUE_MANUAL = 'Manual';
	/**
	 * Constant for value 'Automatic'
	 * Meta informations extracted from the WSDL
	 * - documentation : Automatic Selection
	 * @return string 'Automatic'
	 */
	const VALUE_AUTOMATIC = 'Automatic';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPromotionItemSelectionCodeType::VALUE_MANUAL
	 * @uses PayPalEnumPromotionItemSelectionCodeType::VALUE_AUTOMATIC
	 * @uses PayPalEnumPromotionItemSelectionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPromotionItemSelectionCodeType::VALUE_MANUAL,PayPalEnumPromotionItemSelectionCodeType::VALUE_AUTOMATIC,PayPalEnumPromotionItemSelectionCodeType::VALUE_CUSTOMCODE));
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