<?php
/**
 * File for class PayPalEnumMarketingCategoryType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMarketingCategoryType originally named MarketingCategoryType
 * Documentation : MarketingCategoryType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMarketingCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Marketing-Category-Default'
	 * @return string 'Marketing-Category-Default'
	 */
	const VALUE_MARKETING_CATEGORY_DEFAULT = 'Marketing-Category-Default';
	/**
	 * Constant for value 'Marketing-Category1'
	 * @return string 'Marketing-Category1'
	 */
	const VALUE_MARKETING_CATEGORY1 = 'Marketing-Category1';
	/**
	 * Constant for value 'Marketing-Category2'
	 * @return string 'Marketing-Category2'
	 */
	const VALUE_MARKETING_CATEGORY2 = 'Marketing-Category2';
	/**
	 * Constant for value 'Marketing-Category3'
	 * @return string 'Marketing-Category3'
	 */
	const VALUE_MARKETING_CATEGORY3 = 'Marketing-Category3';
	/**
	 * Constant for value 'Marketing-Category4'
	 * @return string 'Marketing-Category4'
	 */
	const VALUE_MARKETING_CATEGORY4 = 'Marketing-Category4';
	/**
	 * Constant for value 'Marketing-Category5'
	 * @return string 'Marketing-Category5'
	 */
	const VALUE_MARKETING_CATEGORY5 = 'Marketing-Category5';
	/**
	 * Constant for value 'Marketing-Category6'
	 * @return string 'Marketing-Category6'
	 */
	const VALUE_MARKETING_CATEGORY6 = 'Marketing-Category6';
	/**
	 * Constant for value 'Marketing-Category7'
	 * @return string 'Marketing-Category7'
	 */
	const VALUE_MARKETING_CATEGORY7 = 'Marketing-Category7';
	/**
	 * Constant for value 'Marketing-Category8'
	 * @return string 'Marketing-Category8'
	 */
	const VALUE_MARKETING_CATEGORY8 = 'Marketing-Category8';
	/**
	 * Constant for value 'Marketing-Category9'
	 * @return string 'Marketing-Category9'
	 */
	const VALUE_MARKETING_CATEGORY9 = 'Marketing-Category9';
	/**
	 * Constant for value 'Marketing-Category10'
	 * @return string 'Marketing-Category10'
	 */
	const VALUE_MARKETING_CATEGORY10 = 'Marketing-Category10';
	/**
	 * Constant for value 'Marketing-Category11'
	 * @return string 'Marketing-Category11'
	 */
	const VALUE_MARKETING_CATEGORY11 = 'Marketing-Category11';
	/**
	 * Constant for value 'Marketing-Category12'
	 * @return string 'Marketing-Category12'
	 */
	const VALUE_MARKETING_CATEGORY12 = 'Marketing-Category12';
	/**
	 * Constant for value 'Marketing-Category13'
	 * @return string 'Marketing-Category13'
	 */
	const VALUE_MARKETING_CATEGORY13 = 'Marketing-Category13';
	/**
	 * Constant for value 'Marketing-Category14'
	 * @return string 'Marketing-Category14'
	 */
	const VALUE_MARKETING_CATEGORY14 = 'Marketing-Category14';
	/**
	 * Constant for value 'Marketing-Category15'
	 * @return string 'Marketing-Category15'
	 */
	const VALUE_MARKETING_CATEGORY15 = 'Marketing-Category15';
	/**
	 * Constant for value 'Marketing-Category16'
	 * @return string 'Marketing-Category16'
	 */
	const VALUE_MARKETING_CATEGORY16 = 'Marketing-Category16';
	/**
	 * Constant for value 'Marketing-Category17'
	 * @return string 'Marketing-Category17'
	 */
	const VALUE_MARKETING_CATEGORY17 = 'Marketing-Category17';
	/**
	 * Constant for value 'Marketing-Category18'
	 * @return string 'Marketing-Category18'
	 */
	const VALUE_MARKETING_CATEGORY18 = 'Marketing-Category18';
	/**
	 * Constant for value 'Marketing-Category19'
	 * @return string 'Marketing-Category19'
	 */
	const VALUE_MARKETING_CATEGORY19 = 'Marketing-Category19';
	/**
	 * Constant for value 'Marketing-Category20'
	 * @return string 'Marketing-Category20'
	 */
	const VALUE_MARKETING_CATEGORY20 = 'Marketing-Category20';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY_DEFAULT
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY1
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY2
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY3
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY4
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY5
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY6
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY7
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY8
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY9
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY10
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY11
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY12
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY13
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY14
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY15
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY16
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY17
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY18
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY19
	 * @uses PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY20
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY_DEFAULT,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY1,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY2,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY3,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY4,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY5,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY6,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY7,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY8,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY9,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY10,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY11,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY12,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY13,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY14,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY15,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY16,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY17,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY18,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY19,PayPalEnumMarketingCategoryType::VALUE_MARKETING_CATEGORY20));
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