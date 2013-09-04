<?php
/**
 * File for class PayPalStructEnterBoardingReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructEnterBoardingReq originally named EnterBoardingReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructEnterBoardingReq extends PayPalWsdlClass
{
	/**
	 * The EnterBoardingRequest
	 * @var PayPalStructEnterBoardingRequestType
	 */
	public $EnterBoardingRequest;
	/**
	 * Constructor method for EnterBoardingReq
	 * @see parent::__construct()
	 * @param PayPalStructEnterBoardingRequestType $_enterBoardingRequest
	 * @return PayPalStructEnterBoardingReq
	 */
	public function __construct($_enterBoardingRequest = NULL)
	{
		parent::__construct(array('EnterBoardingRequest'=>$_enterBoardingRequest));
	}
	/**
	 * Get EnterBoardingRequest value
	 * @return PayPalStructEnterBoardingRequestType|null
	 */
	public function getEnterBoardingRequest()
	{
		return $this->EnterBoardingRequest;
	}
	/**
	 * Set EnterBoardingRequest value
	 * @param PayPalStructEnterBoardingRequestType $_enterBoardingRequest the EnterBoardingRequest
	 * @return PayPalStructEnterBoardingRequestType
	 */
	public function setEnterBoardingRequest($_enterBoardingRequest)
	{
		return ($this->EnterBoardingRequest = $_enterBoardingRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructEnterBoardingReq
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