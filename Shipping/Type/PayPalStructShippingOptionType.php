<?php
/**
 * File for class PayPalStructShippingOptionType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructShippingOptionType originally named ShippingOptionType
 * Documentation : Fallback shipping options type.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructShippingOptionType extends PayPalWsdlClass
{
	/**
	 * The ShippingOptionIsDefault
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingOptionIsDefault;
	/**
	 * The ShippingOptionAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingOptionAmount;
	/**
	 * The ShippingOptionName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingOptionName;
	/**
	 * Constructor method for ShippingOptionType
	 * @see parent::__construct()
	 * @param string $_shippingOptionIsDefault
	 * @param PayPalStructBasicAmountType $_shippingOptionAmount
	 * @param string $_shippingOptionName
	 * @return PayPalStructShippingOptionType
	 */
	public function __construct($_shippingOptionIsDefault = NULL,$_shippingOptionAmount = NULL,$_shippingOptionName = NULL)
	{
		parent::__construct(array('ShippingOptionIsDefault'=>$_shippingOptionIsDefault,'ShippingOptionAmount'=>$_shippingOptionAmount,'ShippingOptionName'=>$_shippingOptionName));
	}
	/**
	 * Get ShippingOptionIsDefault value
	 * @return string|null
	 */
	public function getShippingOptionIsDefault()
	{
		return $this->ShippingOptionIsDefault;
	}
	/**
	 * Set ShippingOptionIsDefault value
	 * @param string $_shippingOptionIsDefault the ShippingOptionIsDefault
	 * @return string
	 */
	public function setShippingOptionIsDefault($_shippingOptionIsDefault)
	{
		return ($this->ShippingOptionIsDefault = $_shippingOptionIsDefault);
	}
	/**
	 * Get ShippingOptionAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingOptionAmount()
	{
		return $this->ShippingOptionAmount;
	}
	/**
	 * Set ShippingOptionAmount value
	 * @param PayPalStructBasicAmountType $_shippingOptionAmount the ShippingOptionAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingOptionAmount($_shippingOptionAmount)
	{
		return ($this->ShippingOptionAmount = $_shippingOptionAmount);
	}
	/**
	 * Get ShippingOptionName value
	 * @return string|null
	 */
	public function getShippingOptionName()
	{
		return $this->ShippingOptionName;
	}
	/**
	 * Set ShippingOptionName value
	 * @param string $_shippingOptionName the ShippingOptionName
	 * @return string
	 */
	public function setShippingOptionName($_shippingOptionName)
	{
		return ($this->ShippingOptionName = $_shippingOptionName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructShippingOptionType
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