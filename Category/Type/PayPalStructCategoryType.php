<?php
/**
 * File for class PayPalStructCategoryType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCategoryType originally named CategoryType
 * Documentation : Container for data on the primary category of listing.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCategoryType extends PayPalWsdlClass
{
	/**
	 * The AutoPayEnabled
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $AutoPayEnabled;
	/**
	 * The B2BVATEnabled
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $B2BVATEnabled;
	/**
	 * The CatalogEnabled
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $CatalogEnabled;
	/**
	 * The CategoryID
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryLevel
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $CategoryLevel;
	/**
	 * The CategoryName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The CategoryParentName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The CSIDList
	 * Meta informations extracted from the WSDL
	 * - documentation : CSIDList is not present if Attributes enabled.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $CSIDList;
	/**
	 * The Expired
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Expired;
	/**
	 * The IntlAutosFixedCat
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $IntlAutosFixedCat;
	/**
	 * The LeafCategory
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $LeafCategory;
	/**
	 * The Virtual
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Virtual;
	/**
	 * Constructor method for CategoryType
	 * @see parent::__construct()
	 * @param boolean $_autoPayEnabled
	 * @param boolean $_b2BVATEnabled
	 * @param boolean $_catalogEnabled
	 * @param string $_categoryID
	 * @param int $_categoryLevel
	 * @param string $_categoryName
	 * @param string $_categoryParentID
	 * @param string $_categoryParentName
	 * @param string $_cSIDList
	 * @param boolean $_expired
	 * @param boolean $_intlAutosFixedCat
	 * @param boolean $_leafCategory
	 * @param boolean $_virtual
	 * @return PayPalStructCategoryType
	 */
	public function __construct($_autoPayEnabled = NULL,$_b2BVATEnabled = NULL,$_catalogEnabled = NULL,$_categoryID = NULL,$_categoryLevel = NULL,$_categoryName = NULL,$_categoryParentID = NULL,$_categoryParentName = NULL,$_cSIDList = NULL,$_expired = NULL,$_intlAutosFixedCat = NULL,$_leafCategory = NULL,$_virtual = NULL)
	{
		parent::__construct(array('AutoPayEnabled'=>$_autoPayEnabled,'B2BVATEnabled'=>$_b2BVATEnabled,'CatalogEnabled'=>$_catalogEnabled,'CategoryID'=>$_categoryID,'CategoryLevel'=>$_categoryLevel,'CategoryName'=>$_categoryName,'CategoryParentID'=>$_categoryParentID,'CategoryParentName'=>$_categoryParentName,'CSIDList'=>$_cSIDList,'Expired'=>$_expired,'IntlAutosFixedCat'=>$_intlAutosFixedCat,'LeafCategory'=>$_leafCategory,'Virtual'=>$_virtual));
	}
	/**
	 * Get AutoPayEnabled value
	 * @return boolean|null
	 */
	public function getAutoPayEnabled()
	{
		return $this->AutoPayEnabled;
	}
	/**
	 * Set AutoPayEnabled value
	 * @param boolean $_autoPayEnabled the AutoPayEnabled
	 * @return boolean
	 */
	public function setAutoPayEnabled($_autoPayEnabled)
	{
		return ($this->AutoPayEnabled = $_autoPayEnabled);
	}
	/**
	 * Get B2BVATEnabled value
	 * @return boolean|null
	 */
	public function getB2BVATEnabled()
	{
		return $this->B2BVATEnabled;
	}
	/**
	 * Set B2BVATEnabled value
	 * @param boolean $_b2BVATEnabled the B2BVATEnabled
	 * @return boolean
	 */
	public function setB2BVATEnabled($_b2BVATEnabled)
	{
		return ($this->B2BVATEnabled = $_b2BVATEnabled);
	}
	/**
	 * Get CatalogEnabled value
	 * @return boolean|null
	 */
	public function getCatalogEnabled()
	{
		return $this->CatalogEnabled;
	}
	/**
	 * Set CatalogEnabled value
	 * @param boolean $_catalogEnabled the CatalogEnabled
	 * @return boolean
	 */
	public function setCatalogEnabled($_catalogEnabled)
	{
		return ($this->CatalogEnabled = $_catalogEnabled);
	}
	/**
	 * Get CategoryID value
	 * @return string|null
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set CategoryID value
	 * @param string $_categoryID the CategoryID
	 * @return string
	 */
	public function setCategoryID($_categoryID)
	{
		return ($this->CategoryID = $_categoryID);
	}
	/**
	 * Get CategoryLevel value
	 * @return int|null
	 */
	public function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}
	/**
	 * Set CategoryLevel value
	 * @param int $_categoryLevel the CategoryLevel
	 * @return int
	 */
	public function setCategoryLevel($_categoryLevel)
	{
		return ($this->CategoryLevel = $_categoryLevel);
	}
	/**
	 * Get CategoryName value
	 * @return string|null
	 */
	public function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * Set CategoryName value
	 * @param string $_categoryName the CategoryName
	 * @return string
	 */
	public function setCategoryName($_categoryName)
	{
		return ($this->CategoryName = $_categoryName);
	}
	/**
	 * Get CategoryParentID value
	 * @return string|null
	 */
	public function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * Set CategoryParentID value
	 * @param string $_categoryParentID the CategoryParentID
	 * @return string
	 */
	public function setCategoryParentID($_categoryParentID)
	{
		return ($this->CategoryParentID = $_categoryParentID);
	}
	/**
	 * Get CategoryParentName value
	 * @return string|null
	 */
	public function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * Set CategoryParentName value
	 * @param string $_categoryParentName the CategoryParentName
	 * @return string
	 */
	public function setCategoryParentName($_categoryParentName)
	{
		return ($this->CategoryParentName = $_categoryParentName);
	}
	/**
	 * Get CSIDList value
	 * @return string|null
	 */
	public function getCSIDList()
	{
		return $this->CSIDList;
	}
	/**
	 * Set CSIDList value
	 * @param string $_cSIDList the CSIDList
	 * @return string
	 */
	public function setCSIDList($_cSIDList)
	{
		return ($this->CSIDList = $_cSIDList);
	}
	/**
	 * Get Expired value
	 * @return boolean|null
	 */
	public function getExpired()
	{
		return $this->Expired;
	}
	/**
	 * Set Expired value
	 * @param boolean $_expired the Expired
	 * @return boolean
	 */
	public function setExpired($_expired)
	{
		return ($this->Expired = $_expired);
	}
	/**
	 * Get IntlAutosFixedCat value
	 * @return boolean|null
	 */
	public function getIntlAutosFixedCat()
	{
		return $this->IntlAutosFixedCat;
	}
	/**
	 * Set IntlAutosFixedCat value
	 * @param boolean $_intlAutosFixedCat the IntlAutosFixedCat
	 * @return boolean
	 */
	public function setIntlAutosFixedCat($_intlAutosFixedCat)
	{
		return ($this->IntlAutosFixedCat = $_intlAutosFixedCat);
	}
	/**
	 * Get LeafCategory value
	 * @return boolean|null
	 */
	public function getLeafCategory()
	{
		return $this->LeafCategory;
	}
	/**
	 * Set LeafCategory value
	 * @param boolean $_leafCategory the LeafCategory
	 * @return boolean
	 */
	public function setLeafCategory($_leafCategory)
	{
		return ($this->LeafCategory = $_leafCategory);
	}
	/**
	 * Get Virtual value
	 * @return boolean|null
	 */
	public function getVirtual()
	{
		return $this->Virtual;
	}
	/**
	 * Set Virtual value
	 * @param boolean $_virtual the Virtual
	 * @return boolean
	 */
	public function setVirtual($_virtual)
	{
		return ($this->Virtual = $_virtual);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCategoryType
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