<?php
/**
 * File for class PayPalStructGetAccessPermissionDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetAccessPermissionDetailsReq originally named GetAccessPermissionDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetAccessPermissionDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetAccessPermissionDetailsRequest
	 * @var PayPalStructGetAccessPermissionDetailsRequestType
	 */
	public $GetAccessPermissionDetailsRequest;
	/**
	 * Constructor method for GetAccessPermissionDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetAccessPermissionDetailsRequestType $_getAccessPermissionDetailsRequest
	 * @return PayPalStructGetAccessPermissionDetailsReq
	 */
	public function __construct($_getAccessPermissionDetailsRequest = NULL)
	{
		parent::__construct(array('GetAccessPermissionDetailsRequest'=>$_getAccessPermissionDetailsRequest));
	}
	/**
	 * Get GetAccessPermissionDetailsRequest value
	 * @return PayPalStructGetAccessPermissionDetailsRequestType|null
	 */
	public function getGetAccessPermissionDetailsRequest()
	{
		return $this->GetAccessPermissionDetailsRequest;
	}
	/**
	 * Set GetAccessPermissionDetailsRequest value
	 * @param PayPalStructGetAccessPermissionDetailsRequestType $_getAccessPermissionDetailsRequest the GetAccessPermissionDetailsRequest
	 * @return PayPalStructGetAccessPermissionDetailsRequestType
	 */
	public function setGetAccessPermissionDetailsRequest($_getAccessPermissionDetailsRequest)
	{
		return ($this->GetAccessPermissionDetailsRequest = $_getAccessPermissionDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetAccessPermissionDetailsReq
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