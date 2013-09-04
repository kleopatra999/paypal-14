<?php
/**
 * File for class PayPalEnumGalleryTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumGalleryTypeCodeType originally named GalleryTypeCodeType
 * Documentation : GalleryTypeCodeType Specifies the codes for various properties of an item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumGalleryTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Featured'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether it is a featured item.
	 * @return string 'Featured'
	 */
	const VALUE_FEATURED = 'Featured';
	/**
	 * Constant for value 'Gallery'
	 * Meta informations extracted from the WSDL
	 * - documentation : Include in the gallery.
	 * @return string 'Gallery'
	 */
	const VALUE_GALLERY = 'Gallery';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumGalleryTypeCodeType::VALUE_FEATURED
	 * @uses PayPalEnumGalleryTypeCodeType::VALUE_GALLERY
	 * @uses PayPalEnumGalleryTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumGalleryTypeCodeType::VALUE_FEATURED,PayPalEnumGalleryTypeCodeType::VALUE_GALLERY,PayPalEnumGalleryTypeCodeType::VALUE_CUSTOMCODE));
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