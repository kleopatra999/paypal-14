<?php
/**
 * File for class PayPalStructListOfAttributeSetType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructListOfAttributeSetType originally named ListOfAttributeSetType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructListOfAttributeSetType extends PayPalWsdlClass
{
	/**
	 * The AttributeSet
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var PayPalStructAttributeSetType
	 */
	public $AttributeSet;
	/**
	 * Constructor method for ListOfAttributeSetType
	 * @see parent::__construct()
	 * @param PayPalStructAttributeSetType $_attributeSet
	 * @return PayPalStructListOfAttributeSetType
	 */
	public function __construct($_attributeSet = NULL)
	{
		parent::__construct(array('AttributeSet'=>$_attributeSet));
	}
	/**
	 * Get AttributeSet value
	 * @return PayPalStructAttributeSetType|null
	 */
	public function getAttributeSet()
	{
		return $this->AttributeSet;
	}
	/**
	 * Set AttributeSet value
	 * @param PayPalStructAttributeSetType $_attributeSet the AttributeSet
	 * @return PayPalStructAttributeSetType
	 */
	public function setAttributeSet($_attributeSet)
	{
		return ($this->AttributeSet = $_attributeSet);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructListOfAttributeSetType
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