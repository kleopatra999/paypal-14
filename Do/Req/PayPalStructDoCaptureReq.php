<?php
/**
 * File for class PayPalStructDoCaptureReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCaptureReq originally named DoCaptureReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCaptureReq extends PayPalWsdlClass
{
	/**
	 * The DoCaptureRequest
	 * @var PayPalStructDoCaptureRequestType
	 */
	public $DoCaptureRequest;
	/**
	 * Constructor method for DoCaptureReq
	 * @see parent::__construct()
	 * @param PayPalStructDoCaptureRequestType $_doCaptureRequest
	 * @return PayPalStructDoCaptureReq
	 */
	public function __construct($_doCaptureRequest = NULL)
	{
		parent::__construct(array('DoCaptureRequest'=>$_doCaptureRequest));
	}
	/**
	 * Get DoCaptureRequest value
	 * @return PayPalStructDoCaptureRequestType|null
	 */
	public function getDoCaptureRequest()
	{
		return $this->DoCaptureRequest;
	}
	/**
	 * Set DoCaptureRequest value
	 * @param PayPalStructDoCaptureRequestType $_doCaptureRequest the DoCaptureRequest
	 * @return PayPalStructDoCaptureRequestType
	 */
	public function setDoCaptureRequest($_doCaptureRequest)
	{
		return ($this->DoCaptureRequest = $_doCaptureRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoCaptureReq
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