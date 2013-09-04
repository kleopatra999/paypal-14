<?php
/**
 * File for class PayPalStructListingDesignerType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructListingDesignerType originally named ListingDesignerType
 * Documentation : Identifies the Layout and the Theme template associated with the item. in case of revision - all data can be min occur = 0
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructListingDesignerType extends PayPalWsdlClass
{
	/**
	 * The LayoutID
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifies the Layout template associated with the item.
	 * - minOccurs : 0
	 * @var int
	 */
	public $LayoutID;
	/**
	 * The OptimalPictureSize
	 * Meta informations extracted from the WSDL
	 * - documentation : A value of true for OptimalPictureSize indicates that the picture URL will be enlarged to fit description of the item.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $OptimalPictureSize;
	/**
	 * The ThemeID
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifies the Theme template associated with the item.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ThemeID;
	/**
	 * Constructor method for ListingDesignerType
	 * @see parent::__construct()
	 * @param int $_layoutID
	 * @param boolean $_optimalPictureSize
	 * @param int $_themeID
	 * @return PayPalStructListingDesignerType
	 */
	public function __construct($_layoutID = NULL,$_optimalPictureSize = NULL,$_themeID = NULL)
	{
		parent::__construct(array('LayoutID'=>$_layoutID,'OptimalPictureSize'=>$_optimalPictureSize,'ThemeID'=>$_themeID));
	}
	/**
	 * Get LayoutID value
	 * @return int|null
	 */
	public function getLayoutID()
	{
		return $this->LayoutID;
	}
	/**
	 * Set LayoutID value
	 * @param int $_layoutID the LayoutID
	 * @return int
	 */
	public function setLayoutID($_layoutID)
	{
		return ($this->LayoutID = $_layoutID);
	}
	/**
	 * Get OptimalPictureSize value
	 * @return boolean|null
	 */
	public function getOptimalPictureSize()
	{
		return $this->OptimalPictureSize;
	}
	/**
	 * Set OptimalPictureSize value
	 * @param boolean $_optimalPictureSize the OptimalPictureSize
	 * @return boolean
	 */
	public function setOptimalPictureSize($_optimalPictureSize)
	{
		return ($this->OptimalPictureSize = $_optimalPictureSize);
	}
	/**
	 * Get ThemeID value
	 * @return int|null
	 */
	public function getThemeID()
	{
		return $this->ThemeID;
	}
	/**
	 * Set ThemeID value
	 * @param int $_themeID the ThemeID
	 * @return int
	 */
	public function setThemeID($_themeID)
	{
		return ($this->ThemeID = $_themeID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructListingDesignerType
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