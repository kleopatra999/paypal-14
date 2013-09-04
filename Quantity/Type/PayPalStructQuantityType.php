<?php
/**
 * File for class PayPalStructQuantityType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructQuantityType originally named QuantityType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/CoreComponentTypes.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructQuantityType extends PayPalWsdlClass
{
	/**
	 * The _
	 * @var double
	 */
	public $_;
	/**
	 * The unit
	 * Meta informations extracted from the WSDL
	 * - use : optional
	 * @var token
	 */
	public $unit;
	/**
	 * Constructor method for QuantityType
	 * @see parent::__construct()
	 * @param double $__
	 * @param token $_unit
	 * @return PayPalStructQuantityType
	 */
	public function __construct($__ = NULL,$_unit = NULL)
	{
		parent::__construct(array('_'=>$__,'unit'=>$_unit));
	}
	/**
	 * Get _ value
	 * @return double|null
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set _ value
	 * @param double $__ the _
	 * @return double
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get unit value
	 * @return token|null
	 */
	public function getUnit()
	{
		return $this->unit;
	}
	/**
	 * Set unit value
	 * @param token $_unit the unit
	 * @return token
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructQuantityType
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