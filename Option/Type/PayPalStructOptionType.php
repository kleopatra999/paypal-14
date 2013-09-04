<?php
/**
 * File for class PayPalStructOptionType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOptionType originally named OptionType
 * Documentation : OptionType PayPal item options for shopping cart.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOptionType extends PayPalWsdlClass
{
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - use : required
	 * @var string
	 */
	public $name;
	/**
	 * The value
	 * Meta informations extracted from the WSDL
	 * - use : required
	 * @var string
	 */
	public $value;
	/**
	 * Constructor method for OptionType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_value
	 * @return PayPalStructOptionType
	 */
	public function __construct($_name,$_value)
	{
		parent::__construct(array('name'=>$_name,'value'=>$_value));
	}
	/**
	 * Get name value
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get value value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param string $_value the value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOptionType
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