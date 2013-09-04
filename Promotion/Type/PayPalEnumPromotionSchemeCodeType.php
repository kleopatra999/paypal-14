<?php
/**
 * File for class PayPalEnumPromotionSchemeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPromotionSchemeCodeType originally named PromotionSchemeCodeType
 * Documentation : Cross Promotion Context Promotion Scheme.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPromotionSchemeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ItemToItem'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item to Item Promotional Scheme
	 * @return string 'ItemToItem'
	 */
	const VALUE_ITEMTOITEM = 'ItemToItem';
	/**
	 * Constant for value 'ItemToStoreCat'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item to Item Store Scheme
	 * @return string 'ItemToStoreCat'
	 */
	const VALUE_ITEMTOSTORECAT = 'ItemToStoreCat';
	/**
	 * Constant for value 'StoreToStoreCat'
	 * Meta informations extracted from the WSDL
	 * - documentation : Store to Store Scheme
	 * @return string 'StoreToStoreCat'
	 */
	const VALUE_STORETOSTORECAT = 'StoreToStoreCat';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPromotionSchemeCodeType::VALUE_ITEMTOITEM
	 * @uses PayPalEnumPromotionSchemeCodeType::VALUE_ITEMTOSTORECAT
	 * @uses PayPalEnumPromotionSchemeCodeType::VALUE_STORETOSTORECAT
	 * @uses PayPalEnumPromotionSchemeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPromotionSchemeCodeType::VALUE_ITEMTOITEM,PayPalEnumPromotionSchemeCodeType::VALUE_ITEMTOSTORECAT,PayPalEnumPromotionSchemeCodeType::VALUE_STORETOSTORECAT,PayPalEnumPromotionSchemeCodeType::VALUE_CUSTOMCODE));
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