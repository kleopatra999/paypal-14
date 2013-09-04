<?php
/**
 * File for class PayPalStructAuthorizationRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAuthorizationRequestType originally named AuthorizationRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAuthorizationRequestType extends PayPalWsdlClass
{
	/**
	 * The IsRequested
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var boolean
	 */
	public $IsRequested;
	/**
	 * Constructor method for AuthorizationRequestType
	 * @see parent::__construct()
	 * @param boolean $_isRequested
	 * @return PayPalStructAuthorizationRequestType
	 */
	public function __construct($_isRequested)
	{
		parent::__construct(array('IsRequested'=>$_isRequested));
	}
	/**
	 * Get IsRequested value
	 * @return boolean
	 */
	public function getIsRequested()
	{
		return $this->IsRequested;
	}
	/**
	 * Set IsRequested value
	 * @param boolean $_isRequested the IsRequested
	 * @return boolean
	 */
	public function setIsRequested($_isRequested)
	{
		return ($this->IsRequested = $_isRequested);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAuthorizationRequestType
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