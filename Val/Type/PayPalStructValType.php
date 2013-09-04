<?php
/**
 * File for class PayPalStructValType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructValType originally named ValType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructValType extends PayPalWsdlClass
{
	/**
	 * The ValueLiteral
	 * @var string
	 */
	public $ValueLiteral;
	/**
	 * The ValueID
	 * Meta informations extracted from the WSDL
	 * - use : optional
	 * @var string
	 */
	public $ValueID;
	/**
	 * Constructor method for ValType
	 * @see parent::__construct()
	 * @param string $_valueLiteral
	 * @param string $_valueID
	 * @return PayPalStructValType
	 */
	public function __construct($_valueLiteral = NULL,$_valueID = NULL)
	{
		parent::__construct(array('ValueLiteral'=>$_valueLiteral,'ValueID'=>$_valueID));
	}
	/**
	 * Get ValueLiteral value
	 * @return string|null
	 */
	public function getValueLiteral()
	{
		return $this->ValueLiteral;
	}
	/**
	 * Set ValueLiteral value
	 * @param string $_valueLiteral the ValueLiteral
	 * @return string
	 */
	public function setValueLiteral($_valueLiteral)
	{
		return ($this->ValueLiteral = $_valueLiteral);
	}
	/**
	 * Get ValueID value
	 * @return string|null
	 */
	public function getValueID()
	{
		return $this->ValueID;
	}
	/**
	 * Set ValueID value
	 * @param string $_valueID the ValueID
	 * @return string
	 */
	public function setValueID($_valueID)
	{
		return ($this->ValueID = $_valueID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructValType
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