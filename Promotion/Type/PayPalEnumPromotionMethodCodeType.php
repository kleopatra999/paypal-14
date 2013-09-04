<?php
/**
 * File for class PayPalEnumPromotionMethodCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPromotionMethodCodeType originally named PromotionMethodCodeType
 * Documentation : Cross Promotion Method.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPromotionMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CrossSell'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cross Sell
	 * @return string 'CrossSell'
	 */
	const VALUE_CROSSSELL = 'CrossSell';
	/**
	 * Constant for value 'UpSell'
	 * Meta informations extracted from the WSDL
	 * - documentation : Up Sell
	 * @return string 'UpSell'
	 */
	const VALUE_UPSELL = 'UpSell';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPromotionMethodCodeType::VALUE_CROSSSELL
	 * @uses PayPalEnumPromotionMethodCodeType::VALUE_UPSELL
	 * @uses PayPalEnumPromotionMethodCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPromotionMethodCodeType::VALUE_CROSSSELL,PayPalEnumPromotionMethodCodeType::VALUE_UPSELL,PayPalEnumPromotionMethodCodeType::VALUE_CUSTOMCODE));
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