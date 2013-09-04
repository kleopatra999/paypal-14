<?php
/**
 * File for class PayPalStructBMGetButtonDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMGetButtonDetailsReq originally named BMGetButtonDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMGetButtonDetailsReq extends PayPalWsdlClass
{
	/**
	 * The BMGetButtonDetailsRequest
	 * @var PayPalStructBMGetButtonDetailsRequestType
	 */
	public $BMGetButtonDetailsRequest;
	/**
	 * Constructor method for BMGetButtonDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructBMGetButtonDetailsRequestType $_bMGetButtonDetailsRequest
	 * @return PayPalStructBMGetButtonDetailsReq
	 */
	public function __construct($_bMGetButtonDetailsRequest = NULL)
	{
		parent::__construct(array('BMGetButtonDetailsRequest'=>$_bMGetButtonDetailsRequest));
	}
	/**
	 * Get BMGetButtonDetailsRequest value
	 * @return PayPalStructBMGetButtonDetailsRequestType|null
	 */
	public function getBMGetButtonDetailsRequest()
	{
		return $this->BMGetButtonDetailsRequest;
	}
	/**
	 * Set BMGetButtonDetailsRequest value
	 * @param PayPalStructBMGetButtonDetailsRequestType $_bMGetButtonDetailsRequest the BMGetButtonDetailsRequest
	 * @return PayPalStructBMGetButtonDetailsRequestType
	 */
	public function setBMGetButtonDetailsRequest($_bMGetButtonDetailsRequest)
	{
		return ($this->BMGetButtonDetailsRequest = $_bMGetButtonDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMGetButtonDetailsReq
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