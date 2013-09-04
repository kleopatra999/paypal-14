<?php
/**
 * File for class PayPalStructExternalRememberMeOptOutReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExternalRememberMeOptOutReq originally named ExternalRememberMeOptOutReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExternalRememberMeOptOutReq extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeOptOutRequest
	 * @var PayPalStructExternalRememberMeOptOutRequestType
	 */
	public $ExternalRememberMeOptOutRequest;
	/**
	 * Constructor method for ExternalRememberMeOptOutReq
	 * @see parent::__construct()
	 * @param PayPalStructExternalRememberMeOptOutRequestType $_externalRememberMeOptOutRequest
	 * @return PayPalStructExternalRememberMeOptOutReq
	 */
	public function __construct($_externalRememberMeOptOutRequest = NULL)
	{
		parent::__construct(array('ExternalRememberMeOptOutRequest'=>$_externalRememberMeOptOutRequest));
	}
	/**
	 * Get ExternalRememberMeOptOutRequest value
	 * @return PayPalStructExternalRememberMeOptOutRequestType|null
	 */
	public function getExternalRememberMeOptOutRequest()
	{
		return $this->ExternalRememberMeOptOutRequest;
	}
	/**
	 * Set ExternalRememberMeOptOutRequest value
	 * @param PayPalStructExternalRememberMeOptOutRequestType $_externalRememberMeOptOutRequest the ExternalRememberMeOptOutRequest
	 * @return PayPalStructExternalRememberMeOptOutRequestType
	 */
	public function setExternalRememberMeOptOutRequest($_externalRememberMeOptOutRequest)
	{
		return ($this->ExternalRememberMeOptOutRequest = $_externalRememberMeOptOutRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExternalRememberMeOptOutReq
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