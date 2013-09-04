<?php
/**
 * File for class PayPalStructGetMobileStatusReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetMobileStatusReq originally named GetMobileStatusReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetMobileStatusReq extends PayPalWsdlClass
{
	/**
	 * The GetMobileStatusRequest
	 * @var PayPalStructGetMobileStatusRequestType
	 */
	public $GetMobileStatusRequest;
	/**
	 * Constructor method for GetMobileStatusReq
	 * @see parent::__construct()
	 * @param PayPalStructGetMobileStatusRequestType $_getMobileStatusRequest
	 * @return PayPalStructGetMobileStatusReq
	 */
	public function __construct($_getMobileStatusRequest = NULL)
	{
		parent::__construct(array('GetMobileStatusRequest'=>$_getMobileStatusRequest));
	}
	/**
	 * Get GetMobileStatusRequest value
	 * @return PayPalStructGetMobileStatusRequestType|null
	 */
	public function getGetMobileStatusRequest()
	{
		return $this->GetMobileStatusRequest;
	}
	/**
	 * Set GetMobileStatusRequest value
	 * @param PayPalStructGetMobileStatusRequestType $_getMobileStatusRequest the GetMobileStatusRequest
	 * @return PayPalStructGetMobileStatusRequestType
	 */
	public function setGetMobileStatusRequest($_getMobileStatusRequest)
	{
		return ($this->GetMobileStatusRequest = $_getMobileStatusRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetMobileStatusReq
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