<?php
/**
 * File for class PayPalStructAttributeType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAttributeType originally named AttributeType
 * Documentation : Specific physical attribute of an item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAttributeType extends PayPalWsdlClass
{
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - documentation : ValueList of the Attribute being described by the AttributeID.
	 * - maxOccurs : unbounded
	 * @var PayPalStructValType
	 */
	public $Value;
	/**
	 * The AttributeID
	 * Meta informations extracted from the WSDL
	 * - documentation : Constant name of the attribute that identifies a physical attribute within a set of characteristics that describe something in a formalised way.
	 * @var string
	 */
	public $AttributeID;
	/**
	 * Constructor method for AttributeType
	 * @see parent::__construct()
	 * @param PayPalStructValType $_value
	 * @param string $_attributeID
	 * @return PayPalStructAttributeType
	 */
	public function __construct($_value = NULL,$_attributeID = NULL)
	{
		parent::__construct(array('Value'=>$_value,'AttributeID'=>$_attributeID));
	}
	/**
	 * Get Value value
	 * @return PayPalStructValType|null
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Value value
	 * @param PayPalStructValType $_value the Value
	 * @return PayPalStructValType
	 */
	public function setValue($_value)
	{
		return ($this->Value = $_value);
	}
	/**
	 * Get AttributeID value
	 * @return string|null
	 */
	public function getAttributeID()
	{
		return $this->AttributeID;
	}
	/**
	 * Set AttributeID value
	 * @param string $_attributeID the AttributeID
	 * @return string
	 */
	public function setAttributeID($_attributeID)
	{
		return ($this->AttributeID = $_attributeID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAttributeType
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