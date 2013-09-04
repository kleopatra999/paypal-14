<?php
/**
 * File for class PayPalStructBuyerType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBuyerType originally named BuyerType
 * Documentation : Information about user used by buying applications
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBuyerType extends PayPalWsdlClass
{
	/**
	 * The ShippingAddress
	 * @var PayPalStructAddressType
	 */
	public $ShippingAddress;
	/**
	 * Constructor method for BuyerType
	 * @see parent::__construct()
	 * @param PayPalStructAddressType $_shippingAddress
	 * @return PayPalStructBuyerType
	 */
	public function __construct($_shippingAddress = NULL)
	{
		parent::__construct(array('ShippingAddress'=>$_shippingAddress));
	}
	/**
	 * Get ShippingAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
	/**
	 * Set ShippingAddress value
	 * @param PayPalStructAddressType $_shippingAddress the ShippingAddress
	 * @return PayPalStructAddressType
	 */
	public function setShippingAddress($_shippingAddress)
	{
		return ($this->ShippingAddress = $_shippingAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBuyerType
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