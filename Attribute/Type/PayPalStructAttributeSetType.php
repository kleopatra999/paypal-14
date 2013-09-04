<?php
/**
 * File for class PayPalStructAttributeSetType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAttributeSetType originally named AttributeSetType
 * Documentation : AttributeSet.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAttributeSetType extends PayPalWsdlClass
{
	/**
	 * The Attribute
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var PayPalStructAttributeType
	 */
	public $Attribute;
	/**
	 * The AttributeSetID
	 * @var string
	 */
	public $AttributeSetID;
	/**
	 * Constructor method for AttributeSetType
	 * @see parent::__construct()
	 * @param PayPalStructAttributeType $_attribute
	 * @param string $_attributeSetID
	 * @return PayPalStructAttributeSetType
	 */
	public function __construct($_attribute = NULL,$_attributeSetID = NULL)
	{
		parent::__construct(array('Attribute'=>$_attribute,'AttributeSetID'=>$_attributeSetID));
	}
	/**
	 * Get Attribute value
	 * @return PayPalStructAttributeType|null
	 */
	public function getAttribute()
	{
		return $this->Attribute;
	}
	/**
	 * Set Attribute value
	 * @param PayPalStructAttributeType $_attribute the Attribute
	 * @return PayPalStructAttributeType
	 */
	public function setAttribute($_attribute)
	{
		return ($this->Attribute = $_attribute);
	}
	/**
	 * Get AttributeSetID value
	 * @return string|null
	 */
	public function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
	/**
	 * Set AttributeSetID value
	 * @param string $_attributeSetID the AttributeSetID
	 * @return string
	 */
	public function setAttributeSetID($_attributeSetID)
	{
		return ($this->AttributeSetID = $_attributeSetID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAttributeSetType
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