<?php
/**
 * File for class PayPalStructCreateMobilePaymentReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateMobilePaymentReq originally named CreateMobilePaymentReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateMobilePaymentReq extends PayPalWsdlClass
{
	/**
	 * The CreateMobilePaymentRequest
	 * @var PayPalStructCreateMobilePaymentRequestType
	 */
	public $CreateMobilePaymentRequest;
	/**
	 * Constructor method for CreateMobilePaymentReq
	 * @see parent::__construct()
	 * @param PayPalStructCreateMobilePaymentRequestType $_createMobilePaymentRequest
	 * @return PayPalStructCreateMobilePaymentReq
	 */
	public function __construct($_createMobilePaymentRequest = NULL)
	{
		parent::__construct(array('CreateMobilePaymentRequest'=>$_createMobilePaymentRequest));
	}
	/**
	 * Get CreateMobilePaymentRequest value
	 * @return PayPalStructCreateMobilePaymentRequestType|null
	 */
	public function getCreateMobilePaymentRequest()
	{
		return $this->CreateMobilePaymentRequest;
	}
	/**
	 * Set CreateMobilePaymentRequest value
	 * @param PayPalStructCreateMobilePaymentRequestType $_createMobilePaymentRequest the CreateMobilePaymentRequest
	 * @return PayPalStructCreateMobilePaymentRequestType
	 */
	public function setCreateMobilePaymentRequest($_createMobilePaymentRequest)
	{
		return ($this->CreateMobilePaymentRequest = $_createMobilePaymentRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateMobilePaymentReq
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