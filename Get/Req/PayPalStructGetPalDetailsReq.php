<?php
/**
 * File for class PayPalStructGetPalDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetPalDetailsReq originally named GetPalDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetPalDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetPalDetailsRequest
	 * @var PayPalStructGetPalDetailsRequestType
	 */
	public $GetPalDetailsRequest;
	/**
	 * Constructor method for GetPalDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetPalDetailsRequestType $_getPalDetailsRequest
	 * @return PayPalStructGetPalDetailsReq
	 */
	public function __construct($_getPalDetailsRequest = NULL)
	{
		parent::__construct(array('GetPalDetailsRequest'=>$_getPalDetailsRequest));
	}
	/**
	 * Get GetPalDetailsRequest value
	 * @return PayPalStructGetPalDetailsRequestType|null
	 */
	public function getGetPalDetailsRequest()
	{
		return $this->GetPalDetailsRequest;
	}
	/**
	 * Set GetPalDetailsRequest value
	 * @param PayPalStructGetPalDetailsRequestType $_getPalDetailsRequest the GetPalDetailsRequest
	 * @return PayPalStructGetPalDetailsRequestType
	 */
	public function setGetPalDetailsRequest($_getPalDetailsRequest)
	{
		return ($this->GetPalDetailsRequest = $_getPalDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetPalDetailsReq
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