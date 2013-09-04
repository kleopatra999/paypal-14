<?php
/**
 * File for class PayPalStructDoAuthorizationReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoAuthorizationReq originally named DoAuthorizationReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoAuthorizationReq extends PayPalWsdlClass
{
	/**
	 * The DoAuthorizationRequest
	 * @var PayPalStructDoAuthorizationRequestType
	 */
	public $DoAuthorizationRequest;
	/**
	 * Constructor method for DoAuthorizationReq
	 * @see parent::__construct()
	 * @param PayPalStructDoAuthorizationRequestType $_doAuthorizationRequest
	 * @return PayPalStructDoAuthorizationReq
	 */
	public function __construct($_doAuthorizationRequest = NULL)
	{
		parent::__construct(array('DoAuthorizationRequest'=>$_doAuthorizationRequest));
	}
	/**
	 * Get DoAuthorizationRequest value
	 * @return PayPalStructDoAuthorizationRequestType|null
	 */
	public function getDoAuthorizationRequest()
	{
		return $this->DoAuthorizationRequest;
	}
	/**
	 * Set DoAuthorizationRequest value
	 * @param PayPalStructDoAuthorizationRequestType $_doAuthorizationRequest the DoAuthorizationRequest
	 * @return PayPalStructDoAuthorizationRequestType
	 */
	public function setDoAuthorizationRequest($_doAuthorizationRequest)
	{
		return ($this->DoAuthorizationRequest = $_doAuthorizationRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoAuthorizationReq
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