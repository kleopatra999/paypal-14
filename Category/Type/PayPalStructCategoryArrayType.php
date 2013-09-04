<?php
/**
 * File for class PayPalStructCategoryArrayType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCategoryArrayType originally named CategoryArrayType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCategoryArrayType extends PayPalWsdlClass
{
	/**
	 * The Category
	 * @var PayPalStructCategoryType
	 */
	public $Category;
	/**
	 * Constructor method for CategoryArrayType
	 * @see parent::__construct()
	 * @param PayPalStructCategoryType $_category
	 * @return PayPalStructCategoryArrayType
	 */
	public function __construct($_category = NULL)
	{
		parent::__construct(array('Category'=>$_category));
	}
	/**
	 * Get Category value
	 * @return PayPalStructCategoryType|null
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set Category value
	 * @param PayPalStructCategoryType $_category the Category
	 * @return PayPalStructCategoryType
	 */
	public function setCategory($_category)
	{
		return ($this->Category = $_category);
	}
	/**
	 * Returns the current element
	 * @see PayPalWsdlClass::current()
	 * @return PayPalStructCategoryType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see PayPalWsdlClass::item()
	 * @param int $_index
	 * @return PayPalStructCategoryType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see PayPalWsdlClass::first()
	 * @return PayPalStructCategoryType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see PayPalWsdlClass::last()
	 * @return PayPalStructCategoryType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see PayPalWsdlClass::last()
	 * @param int $_offset
	 * @return PayPalStructCategoryType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see PayPalWsdlClass::getAttributeName()
	 * @return string Category
	 */
	public function getAttributeName()
	{
		return 'Category';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCategoryArrayType
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