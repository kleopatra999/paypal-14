<?php
/**
 * File for class PayPalStructFeeType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFeeType originally named FeeType
 * Documentation : Definition of an eBay Fee type.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFeeType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Fee
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $Fee;
	/**
	 * Constructor method for FeeType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param PayPalStructAmountType $_fee
	 * @return PayPalStructFeeType
	 */
	public function __construct($_name = NULL,$_fee = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Fee'=>$_fee));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Fee value
	 * @return PayPalStructAmountType|null
	 */
	public function getFee()
	{
		return $this->Fee;
	}
	/**
	 * Set Fee value
	 * @param PayPalStructAmountType $_fee the Fee
	 * @return PayPalStructAmountType
	 */
	public function setFee($_fee)
	{
		return ($this->Fee = $_fee);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFeeType
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