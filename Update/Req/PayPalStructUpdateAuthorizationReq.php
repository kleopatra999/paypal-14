<?php
/**
 * File for class PayPalStructUpdateAuthorizationReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateAuthorizationReq originally named UpdateAuthorizationReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateAuthorizationReq extends PayPalWsdlClass
{
	/**
	 * The UpdateAuthorizationRequest
	 * @var PayPalStructUpdateAuthorizationRequestType
	 */
	public $UpdateAuthorizationRequest;
	/**
	 * Constructor method for UpdateAuthorizationReq
	 * @see parent::__construct()
	 * @param PayPalStructUpdateAuthorizationRequestType $_updateAuthorizationRequest
	 * @return PayPalStructUpdateAuthorizationReq
	 */
	public function __construct($_updateAuthorizationRequest = NULL)
	{
		parent::__construct(array('UpdateAuthorizationRequest'=>$_updateAuthorizationRequest));
	}
	/**
	 * Get UpdateAuthorizationRequest value
	 * @return PayPalStructUpdateAuthorizationRequestType|null
	 */
	public function getUpdateAuthorizationRequest()
	{
		return $this->UpdateAuthorizationRequest;
	}
	/**
	 * Set UpdateAuthorizationRequest value
	 * @param PayPalStructUpdateAuthorizationRequestType $_updateAuthorizationRequest the UpdateAuthorizationRequest
	 * @return PayPalStructUpdateAuthorizationRequestType
	 */
	public function setUpdateAuthorizationRequest($_updateAuthorizationRequest)
	{
		return ($this->UpdateAuthorizationRequest = $_updateAuthorizationRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateAuthorizationReq
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