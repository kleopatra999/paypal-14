<?php
/**
 * File for class PayPalStructInitiateRecoupReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructInitiateRecoupReq originally named InitiateRecoupReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructInitiateRecoupReq extends PayPalWsdlClass
{
	/**
	 * The InitiateRecoupRequest
	 * @var PayPalStructInitiateRecoupRequestType
	 */
	public $InitiateRecoupRequest;
	/**
	 * Constructor method for InitiateRecoupReq
	 * @see parent::__construct()
	 * @param PayPalStructInitiateRecoupRequestType $_initiateRecoupRequest
	 * @return PayPalStructInitiateRecoupReq
	 */
	public function __construct($_initiateRecoupRequest = NULL)
	{
		parent::__construct(array('InitiateRecoupRequest'=>$_initiateRecoupRequest));
	}
	/**
	 * Get InitiateRecoupRequest value
	 * @return PayPalStructInitiateRecoupRequestType|null
	 */
	public function getInitiateRecoupRequest()
	{
		return $this->InitiateRecoupRequest;
	}
	/**
	 * Set InitiateRecoupRequest value
	 * @param PayPalStructInitiateRecoupRequestType $_initiateRecoupRequest the InitiateRecoupRequest
	 * @return PayPalStructInitiateRecoupRequestType
	 */
	public function setInitiateRecoupRequest($_initiateRecoupRequest)
	{
		return ($this->InitiateRecoupRequest = $_initiateRecoupRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructInitiateRecoupReq
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