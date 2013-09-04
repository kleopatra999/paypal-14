<?php
/**
 * File for class PayPalStructDoUATPAuthorizationReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoUATPAuthorizationReq originally named DoUATPAuthorizationReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoUATPAuthorizationReq extends PayPalWsdlClass
{
	/**
	 * The DoUATPAuthorizationRequest
	 * @var PayPalStructDoUATPAuthorizationRequestType
	 */
	public $DoUATPAuthorizationRequest;
	/**
	 * Constructor method for DoUATPAuthorizationReq
	 * @see parent::__construct()
	 * @param PayPalStructDoUATPAuthorizationRequestType $_doUATPAuthorizationRequest
	 * @return PayPalStructDoUATPAuthorizationReq
	 */
	public function __construct($_doUATPAuthorizationRequest = NULL)
	{
		parent::__construct(array('DoUATPAuthorizationRequest'=>$_doUATPAuthorizationRequest));
	}
	/**
	 * Get DoUATPAuthorizationRequest value
	 * @return PayPalStructDoUATPAuthorizationRequestType|null
	 */
	public function getDoUATPAuthorizationRequest()
	{
		return $this->DoUATPAuthorizationRequest;
	}
	/**
	 * Set DoUATPAuthorizationRequest value
	 * @param PayPalStructDoUATPAuthorizationRequestType $_doUATPAuthorizationRequest the DoUATPAuthorizationRequest
	 * @return PayPalStructDoUATPAuthorizationRequestType
	 */
	public function setDoUATPAuthorizationRequest($_doUATPAuthorizationRequest)
	{
		return ($this->DoUATPAuthorizationRequest = $_doUATPAuthorizationRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoUATPAuthorizationReq
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