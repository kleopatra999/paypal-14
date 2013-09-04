<?php
/**
 * File for class PayPalStructMeasureType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMeasureType originally named MeasureType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/CoreComponentTypes.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMeasureType extends PayPalWsdlClass
{
	/**
	 * The unit
	 * Meta informations extracted from the WSDL
	 * - use : required
	 * @var token
	 */
	public $unit;
	/**
	 * The _
	 * @var double
	 */
	public $_;
	/**
	 * Constructor method for MeasureType
	 * @see parent::__construct()
	 * @param token $_unit
	 * @param double $__
	 * @return PayPalStructMeasureType
	 */
	public function __construct($_unit,$__ = NULL)
	{
		parent::__construct(array('unit'=>$_unit,'_'=>$__));
	}
	/**
	 * Get unit value
	 * @return token
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMeasureType
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