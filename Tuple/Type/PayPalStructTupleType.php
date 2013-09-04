<?php
/**
 * File for class PayPalStructTupleType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTupleType originally named TupleType
 * Documentation : This holds single key-value pair.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTupleType extends PayPalWsdlClass
{
	/**
	 * The Key
	 * Meta informations extracted from the WSDL
	 * - documentation : Key Name.Optional
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Key;
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - documentation : Value for the above key.Optional
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor method for TupleType
	 * @see parent::__construct()
	 * @param string $_key
	 * @param string $_value
	 * @return PayPalStructTupleType
	 */
	public function __construct($_key,$_value)
	{
		parent::__construct(array('Key'=>$_key,'Value'=>$_value));
	}
	/**
	 * Get Key value
	 * @return string
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Key value
	 * @param string $_key the Key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->Key = $_key);
	}
	/**
	 * Get Value value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Value value
	 * @param string $_value the Value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->Value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTupleType
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