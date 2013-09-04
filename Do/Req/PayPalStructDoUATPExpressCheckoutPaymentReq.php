<?php
/**
 * File for class PayPalStructDoUATPExpressCheckoutPaymentReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoUATPExpressCheckoutPaymentReq originally named DoUATPExpressCheckoutPaymentReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoUATPExpressCheckoutPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoUATPExpressCheckoutPaymentRequest
	 * @var PayPalStructDoUATPExpressCheckoutPaymentRequestType
	 */
	public $DoUATPExpressCheckoutPaymentRequest;
	/**
	 * Constructor method for DoUATPExpressCheckoutPaymentReq
	 * @see parent::__construct()
	 * @param PayPalStructDoUATPExpressCheckoutPaymentRequestType $_doUATPExpressCheckoutPaymentRequest
	 * @return PayPalStructDoUATPExpressCheckoutPaymentReq
	 */
	public function __construct($_doUATPExpressCheckoutPaymentRequest = NULL)
	{
		parent::__construct(array('DoUATPExpressCheckoutPaymentRequest'=>$_doUATPExpressCheckoutPaymentRequest));
	}
	/**
	 * Get DoUATPExpressCheckoutPaymentRequest value
	 * @return PayPalStructDoUATPExpressCheckoutPaymentRequestType|null
	 */
	public function getDoUATPExpressCheckoutPaymentRequest()
	{
		return $this->DoUATPExpressCheckoutPaymentRequest;
	}
	/**
	 * Set DoUATPExpressCheckoutPaymentRequest value
	 * @param PayPalStructDoUATPExpressCheckoutPaymentRequestType $_doUATPExpressCheckoutPaymentRequest the DoUATPExpressCheckoutPaymentRequest
	 * @return PayPalStructDoUATPExpressCheckoutPaymentRequestType
	 */
	public function setDoUATPExpressCheckoutPaymentRequest($_doUATPExpressCheckoutPaymentRequest)
	{
		return ($this->DoUATPExpressCheckoutPaymentRequest = $_doUATPExpressCheckoutPaymentRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoUATPExpressCheckoutPaymentReq
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