<?php
/**
 * File for class PayPalStructErrorParameterType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructErrorParameterType originally named ErrorParameterType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructErrorParameterType extends PayPalWsdlClass
{
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - documentation : Value of the application-specific error parameter.
	 * @var string
	 */
	public $Value;
	/**
	 * The ParamID
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies application-specific error parameter name.
	 * @var string
	 */
	public $ParamID;
	/**
	 * Constructor method for ErrorParameterType
	 * @see parent::__construct()
	 * @param string $_value
	 * @param string $_paramID
	 * @return PayPalStructErrorParameterType
	 */
	public function __construct($_value = NULL,$_paramID = NULL)
	{
		parent::__construct(array('Value'=>$_value,'ParamID'=>$_paramID));
	}
	/**
	 * Get Value value
	 * @return string|null
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
	 * Get ParamID value
	 * @return string|null
	 */
	public function getParamID()
	{
		return $this->ParamID;
	}
	/**
	 * Set ParamID value
	 * @param string $_paramID the ParamID
	 * @return string
	 */
	public function setParamID($_paramID)
	{
		return ($this->ParamID = $_paramID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructErrorParameterType
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