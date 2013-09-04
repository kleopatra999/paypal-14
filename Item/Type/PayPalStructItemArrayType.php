<?php
/**
 * File for class PayPalStructItemArrayType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructItemArrayType originally named ItemArrayType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructItemArrayType extends PayPalWsdlClass
{
	/**
	 * The Item
	 * @var PayPalStructItemType
	 */
	public $Item;
	/**
	 * Constructor method for ItemArrayType
	 * @see parent::__construct()
	 * @param PayPalStructItemType $_item
	 * @return PayPalStructItemArrayType
	 */
	public function __construct($_item = NULL)
	{
		parent::__construct(array('Item'=>$_item));
	}
	/**
	 * Get Item value
	 * @return PayPalStructItemType|null
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set Item value
	 * @param PayPalStructItemType $_item the Item
	 * @return PayPalStructItemType
	 */
	public function setItem($_item)
	{
		return ($this->Item = $_item);
	}
	/**
	 * Returns the current element
	 * @see PayPalWsdlClass::current()
	 * @return PayPalStructItemType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see PayPalWsdlClass::item()
	 * @param int $_index
	 * @return PayPalStructItemType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see PayPalWsdlClass::first()
	 * @return PayPalStructItemType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see PayPalWsdlClass::last()
	 * @return PayPalStructItemType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see PayPalWsdlClass::last()
	 * @param int $_offset
	 * @return PayPalStructItemType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see PayPalWsdlClass::getAttributeName()
	 * @return string Item
	 */
	public function getAttributeName()
	{
		return 'Item';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructItemArrayType
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