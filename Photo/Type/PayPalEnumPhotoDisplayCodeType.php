<?php
/**
 * File for class PayPalEnumPhotoDisplayCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPhotoDisplayCodeType originally named PhotoDisplayCodeType
 * Documentation : PhotoDisplayCodeType These are types of display for photos used for PhotoHosting slide show.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPhotoDisplayCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : No special Picture Services features.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'SlideShow'
	 * Meta informations extracted from the WSDL
	 * - documentation : Slideshow of multiple pictures.
	 * @return string 'SlideShow'
	 */
	const VALUE_SLIDESHOW = 'SlideShow';
	/**
	 * Constant for value 'SuperSize'
	 * Meta informations extracted from the WSDL
	 * - documentation : Super-size format picture.
	 * @return string 'SuperSize'
	 */
	const VALUE_SUPERSIZE = 'SuperSize';
	/**
	 * Constant for value 'PicturePack'
	 * Meta informations extracted from the WSDL
	 * - documentation : Picture Pack.
	 * @return string 'PicturePack'
	 */
	const VALUE_PICTUREPACK = 'PicturePack';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPhotoDisplayCodeType::VALUE_NONE
	 * @uses PayPalEnumPhotoDisplayCodeType::VALUE_SLIDESHOW
	 * @uses PayPalEnumPhotoDisplayCodeType::VALUE_SUPERSIZE
	 * @uses PayPalEnumPhotoDisplayCodeType::VALUE_PICTUREPACK
	 * @uses PayPalEnumPhotoDisplayCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPhotoDisplayCodeType::VALUE_NONE,PayPalEnumPhotoDisplayCodeType::VALUE_SLIDESHOW,PayPalEnumPhotoDisplayCodeType::VALUE_SUPERSIZE,PayPalEnumPhotoDisplayCodeType::VALUE_PICTUREPACK,PayPalEnumPhotoDisplayCodeType::VALUE_CUSTOMCODE));
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