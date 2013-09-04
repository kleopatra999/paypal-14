<?php
/**
 * File for class PayPalEnumListingEnhancementsCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumListingEnhancementsCodeType originally named ListingEnhancementsCodeType
 * Documentation : ListingEnhancementsCodeType Specifies the codes for various properties of an item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumListingEnhancementsCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Border'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether an item will be displayed with a border that will go around the item (e.g., for category-based search result page or store search that brings up multiple items) to differentiate it from the rest of list.
	 * @return string 'Border'
	 */
	const VALUE_BORDER = 'Border';
	/**
	 * Constant for value 'BoldTitle'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the bolding option was used.
	 * @return string 'BoldTitle'
	 */
	const VALUE_BOLDTITLE = 'BoldTitle';
	/**
	 * Constant for value 'Featured'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether it is a featured item.
	 * @return string 'Featured'
	 */
	const VALUE_FEATURED = 'Featured';
	/**
	 * Constant for value 'Highlight'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates item's listing is highlighted.
	 * @return string 'Highlight'
	 */
	const VALUE_HIGHLIGHT = 'Highlight';
	/**
	 * Constant for value 'HomePageFeatured'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates item's listing is home page featured.
	 * @return string 'HomePageFeatured'
	 */
	const VALUE_HOMEPAGEFEATURED = 'HomePageFeatured';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumListingEnhancementsCodeType::VALUE_BORDER
	 * @uses PayPalEnumListingEnhancementsCodeType::VALUE_BOLDTITLE
	 * @uses PayPalEnumListingEnhancementsCodeType::VALUE_FEATURED
	 * @uses PayPalEnumListingEnhancementsCodeType::VALUE_HIGHLIGHT
	 * @uses PayPalEnumListingEnhancementsCodeType::VALUE_HOMEPAGEFEATURED
	 * @uses PayPalEnumListingEnhancementsCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumListingEnhancementsCodeType::VALUE_BORDER,PayPalEnumListingEnhancementsCodeType::VALUE_BOLDTITLE,PayPalEnumListingEnhancementsCodeType::VALUE_FEATURED,PayPalEnumListingEnhancementsCodeType::VALUE_HIGHLIGHT,PayPalEnumListingEnhancementsCodeType::VALUE_HOMEPAGEFEATURED,PayPalEnumListingEnhancementsCodeType::VALUE_CUSTOMCODE));
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