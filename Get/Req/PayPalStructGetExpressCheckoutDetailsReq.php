<?php
/**
 * File for class PayPalStructGetExpressCheckoutDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetExpressCheckoutDetailsReq originally named GetExpressCheckoutDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetExpressCheckoutDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetExpressCheckoutDetailsRequest
	 * @var PayPalStructGetExpressCheckoutDetailsRequestType
	 */
	public $GetExpressCheckoutDetailsRequest;
	/**
	 * Constructor method for GetExpressCheckoutDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetExpressCheckoutDetailsRequestType $_getExpressCheckoutDetailsRequest
	 * @return PayPalStructGetExpressCheckoutDetailsReq
	 */
	public function __construct($_getExpressCheckoutDetailsRequest = NULL)
	{
		parent::__construct(array('GetExpressCheckoutDetailsRequest'=>$_getExpressCheckoutDetailsRequest));
	}
	/**
	 * Get GetExpressCheckoutDetailsRequest value
	 * @return PayPalStructGetExpressCheckoutDetailsRequestType|null
	 */
	public function getGetExpressCheckoutDetailsRequest()
	{
		return $this->GetExpressCheckoutDetailsRequest;
	}
	/**
	 * Set GetExpressCheckoutDetailsRequest value
	 * @param PayPalStructGetExpressCheckoutDetailsRequestType $_getExpressCheckoutDetailsRequest the GetExpressCheckoutDetailsRequest
	 * @return PayPalStructGetExpressCheckoutDetailsRequestType
	 */
	public function setGetExpressCheckoutDetailsRequest($_getExpressCheckoutDetailsRequest)
	{
		return ($this->GetExpressCheckoutDetailsRequest = $_getExpressCheckoutDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetExpressCheckoutDetailsReq
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