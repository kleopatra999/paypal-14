<?php
/**
 * File for class PayPalStructStorefrontType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructStorefrontType originally named StorefrontType
 * Documentation : Contains the eBay Stores-specific item attributes department number and store location. StorefrontInfo is shown for any item that belongs to an eBay Store owner, regardless of whether it is fixed price or auction type. Returned as null for international fixed price items. assumed this type is specific to add/get/revise item, then each StorefrontType nust have category id, for store details this node makes no sense to use in case or revise item for example - to change store category (department) you do not need to change store URL, so it will notbe in request
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructStorefrontType extends PayPalWsdlClass
{
	/**
	 * The StoreCategoryID
	 * @var int
	 */
	public $StoreCategoryID;
	/**
	 * The StoreURL
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * Constructor method for StorefrontType
	 * @see parent::__construct()
	 * @param int $_storeCategoryID
	 * @param anyURI $_storeURL
	 * @return PayPalStructStorefrontType
	 */
	public function __construct($_storeCategoryID = NULL,$_storeURL = NULL)
	{
		parent::__construct(array('StoreCategoryID'=>$_storeCategoryID,'StoreURL'=>$_storeURL));
	}
	/**
	 * Get StoreCategoryID value
	 * @return int|null
	 */
	public function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * Set StoreCategoryID value
	 * @param int $_storeCategoryID the StoreCategoryID
	 * @return int
	 */
	public function setStoreCategoryID($_storeCategoryID)
	{
		return ($this->StoreCategoryID = $_storeCategoryID);
	}
	/**
	 * Get StoreURL value
	 * @return anyURI|null
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set StoreURL value
	 * @param anyURI $_storeURL the StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_storeURL)
	{
		return ($this->StoreURL = $_storeURL);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructStorefrontType
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