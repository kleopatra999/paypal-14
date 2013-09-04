<?php
/**
 * File for class PayPalStructDoReauthorizationReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReauthorizationReq originally named DoReauthorizationReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReauthorizationReq extends PayPalWsdlClass
{
	/**
	 * The DoReauthorizationRequest
	 * @var PayPalStructDoReauthorizationRequestType
	 */
	public $DoReauthorizationRequest;
	/**
	 * Constructor method for DoReauthorizationReq
	 * @see parent::__construct()
	 * @param PayPalStructDoReauthorizationRequestType $_doReauthorizationRequest
	 * @return PayPalStructDoReauthorizationReq
	 */
	public function __construct($_doReauthorizationRequest = NULL)
	{
		parent::__construct(array('DoReauthorizationRequest'=>$_doReauthorizationRequest));
	}
	/**
	 * Get DoReauthorizationRequest value
	 * @return PayPalStructDoReauthorizationRequestType|null
	 */
	public function getDoReauthorizationRequest()
	{
		return $this->DoReauthorizationRequest;
	}
	/**
	 * Set DoReauthorizationRequest value
	 * @param PayPalStructDoReauthorizationRequestType $_doReauthorizationRequest the DoReauthorizationRequest
	 * @return PayPalStructDoReauthorizationRequestType
	 */
	public function setDoReauthorizationRequest($_doReauthorizationRequest)
	{
		return ($this->DoReauthorizationRequest = $_doReauthorizationRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoReauthorizationReq
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