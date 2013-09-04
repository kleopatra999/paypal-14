<?php
/**
 * File for class PayPalStructSiteHostedPictureType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSiteHostedPictureType originally named SiteHostedPictureType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSiteHostedPictureType extends PayPalWsdlClass
{
	/**
	 * The PictureURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URLs for item picture that are stored/hosted at eBay site.
	 * - maxOccurs : 6
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The PhotoDisplay
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of display for photos used for PhotoHosting slide show. Here are display options: None = No special Picture Services features. SlideShow = Slideshow of multiple pictures. SuperSize = Super-size format picture. PicturePack = Picture Pack. Default is 'None'.
	 * - minOccurs : 0
	 * @var PayPalEnumPhotoDisplayCodeType
	 */
	public $PhotoDisplay;
	/**
	 * The GalleryType
	 * Meta informations extracted from the WSDL
	 * - documentation : This will be either "Featured" or "Gallery".
	 * - minOccurs : 0
	 * @var PayPalEnumGalleryTypeCodeType
	 */
	public $GalleryType;
	/**
	 * Constructor method for SiteHostedPictureType
	 * @see parent::__construct()
	 * @param anyURI $_pictureURL
	 * @param PayPalEnumPhotoDisplayCodeType $_photoDisplay
	 * @param PayPalEnumGalleryTypeCodeType $_galleryType
	 * @return PayPalStructSiteHostedPictureType
	 */
	public function __construct($_pictureURL = NULL,$_photoDisplay = NULL,$_galleryType = NULL)
	{
		parent::__construct(array('PictureURL'=>$_pictureURL,'PhotoDisplay'=>$_photoDisplay,'GalleryType'=>$_galleryType));
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
	 * Get PhotoDisplay value
	 * @return PayPalEnumPhotoDisplayCodeType|null
	 */
	public function getPhotoDisplay()
	{
		return $this->PhotoDisplay;
	}
	/**
	 * Set PhotoDisplay value
	 * @uses PayPalEnumPhotoDisplayCodeType::valueIsValid()
	 * @param PayPalEnumPhotoDisplayCodeType $_photoDisplay the PhotoDisplay
	 * @return PayPalEnumPhotoDisplayCodeType
	 */
	public function setPhotoDisplay($_photoDisplay)
	{
		if(!PayPalEnumPhotoDisplayCodeType::valueIsValid($_photoDisplay))
		{
			return false;
		}
		return ($this->PhotoDisplay = $_photoDisplay);
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
	 * @return PayPalStructSiteHostedPictureType
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