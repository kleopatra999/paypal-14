<?php
/**
 * File for class PayPalStructGetBoardingDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBoardingDetailsReq originally named GetBoardingDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBoardingDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetBoardingDetailsRequest
	 * @var PayPalStructGetBoardingDetailsRequestType
	 */
	public $GetBoardingDetailsRequest;
	/**
	 * Constructor method for GetBoardingDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetBoardingDetailsRequestType $_getBoardingDetailsRequest
	 * @return PayPalStructGetBoardingDetailsReq
	 */
	public function __construct($_getBoardingDetailsRequest = NULL)
	{
		parent::__construct(array('GetBoardingDetailsRequest'=>$_getBoardingDetailsRequest));
	}
	/**
	 * Get GetBoardingDetailsRequest value
	 * @return PayPalStructGetBoardingDetailsRequestType|null
	 */
	public function getGetBoardingDetailsRequest()
	{
		return $this->GetBoardingDetailsRequest;
	}
	/**
	 * Set GetBoardingDetailsRequest value
	 * @param PayPalStructGetBoardingDetailsRequestType $_getBoardingDetailsRequest the GetBoardingDetailsRequest
	 * @return PayPalStructGetBoardingDetailsRequestType
	 */
	public function setGetBoardingDetailsRequest($_getBoardingDetailsRequest)
	{
		return ($this->GetBoardingDetailsRequest = $_getBoardingDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBoardingDetailsReq
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