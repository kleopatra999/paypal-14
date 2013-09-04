<?php
/**
 * File for class PayPalStructVendorHostedPictureType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructVendorHostedPictureType originally named VendorHostedPictureType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructVendorHostedPictureType extends PayPalWsdlClass
{
	/**
	 * The PictureURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URLs for item picture that are stored/hosted at eBay site.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The GalleryURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for a picture for the gallery. If the GalleryFeatured argument is true, a value must be supplied for either the GalleryURL or the PictureURL argument. In either case: (a) If a URL is provided for only PictureURL, it is used as the Gallery thumbnail. (b) If a URL is provided for both GalleryURL and PictureURL, then the picture indicated in GalleryURL is used as the thumbnail. The image used for the Gallery thumbnail (specified in the GalleryURL or PictureURL argument) must be in one of the graphics formats JPEG, BMP, TIF, or GIF.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The GalleryType
	 * Meta informations extracted from the WSDL
	 * - documentation : This will be either "Featured" or "Gallery".
	 * - minOccurs : 0
	 * @var PayPalEnumGalleryTypeCodeType
	 */
	public $GalleryType;
	/**
	 * Constructor method for VendorHostedPictureType
	 * @see parent::__construct()
	 * @param anyURI $_pictureURL
	 * @param anyURI $_galleryURL
	 * @param PayPalEnumGalleryTypeCodeType $_galleryType
	 * @return PayPalStructVendorHostedPictureType
	 */
	public function __construct($_pictureURL = NULL,$_galleryURL = NULL,$_galleryType = NULL)
	{
		parent::__construct(array('PictureURL'=>$_pictureURL,'GalleryURL'=>$_galleryURL,'GalleryType'=>$_galleryType));
	}
	/**
	 * Get PictureURL value
	 * @return anyURI|null
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set PictureURL value
	 * @param anyURI $_pictureURL the PictureURL
	 * @return anyURI
	 */
	public function setPictureURL($_pictureURL)
	{
		return ($this->PictureURL = $_pictureURL);
	}
	/**
	 * Get GalleryURL value
	 * @return anyURI|null
	 */
	public function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * Set GalleryURL value
	 * @param anyURI $_galleryURL the GalleryURL
	 * @return anyURI
	 */
	public function setGalleryURL($_galleryURL)
	{
		return ($this->GalleryURL = $_galleryURL);
	}
	/**
	 * Get GalleryType value
	 * @return PayPalEnumGalleryTypeCodeType|null
	 */
	public function getGalleryType()
	{
		return $this->GalleryType;
	}
	/**
	 * Set GalleryType value
	 * @uses PayPalEnumGalleryTypeCodeType::valueIsValid()
	 * @param PayPalEnumGalleryTypeCodeType $_galleryType the GalleryType
	 * @return PayPalEnumGalleryTypeCodeType
	 */
	public function setGalleryType($_galleryType)
	{
		if(!PayPalEnumGalleryTypeCodeType::valueIsValid($_galleryType))
		{
			return false;
		}
		return ($this->GalleryType = $_galleryType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructVendorHostedPictureType
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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