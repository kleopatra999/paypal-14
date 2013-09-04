<?php
/**
 * File for class PayPalStructGetAuthDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetAuthDetailsReq originally named GetAuthDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetAuthDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetAuthDetailsRequest
	 * @var PayPalStructGetAuthDetailsRequestType
	 */
	public $GetAuthDetailsRequest;
	/**
	 * Constructor method for GetAuthDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetAuthDetailsRequestType $_getAuthDetailsRequest
	 * @return PayPalStructGetAuthDetailsReq
	 */
	public function __construct($_getAuthDetailsRequest = NULL)
	{
		parent::__construct(array('GetAuthDetailsRequest'=>$_getAuthDetailsRequest));
	}
	/**
	 * Get GetAuthDetailsRequest value
	 * @return PayPalStructGetAuthDetailsRequestType|null
	 */
	public function getGetAuthDetailsRequest()
	{
		return $this->GetAuthDetailsRequest;
	}
	/**
	 * Set GetAuthDetailsRequest value
	 * @param PayPalStructGetAuthDetailsRequestType $_getAuthDetailsRequest the GetAuthDetailsRequest
	 * @return PayPalStructGetAuthDetailsRequestType
	 */
	public function setGetAuthDetailsRequest($_getAuthDetailsRequest)
	{
		return ($this->GetAuthDetailsRequest = $_getAuthDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetAuthDetailsReq
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