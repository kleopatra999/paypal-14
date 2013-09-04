<?php
/**
 * File for class PayPalStructDoExpressCheckoutPaymentReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoExpressCheckoutPaymentReq originally named DoExpressCheckoutPaymentReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoExpressCheckoutPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoExpressCheckoutPaymentRequest
	 * @var PayPalStructDoExpressCheckoutPaymentRequestType
	 */
	public $DoExpressCheckoutPaymentRequest;
	/**
	 * Constructor method for DoExpressCheckoutPaymentReq
	 * @see parent::__construct()
	 * @param PayPalStructDoExpressCheckoutPaymentRequestType $_doExpressCheckoutPaymentRequest
	 * @return PayPalStructDoExpressCheckoutPaymentReq
	 */
	public function __construct($_doExpressCheckoutPaymentRequest = NULL)
	{
		parent::__construct(array('DoExpressCheckoutPaymentRequest'=>$_doExpressCheckoutPaymentRequest));
	}
	/**
	 * Get DoExpressCheckoutPaymentRequest value
	 * @return PayPalStructDoExpressCheckoutPaymentRequestType|null
	 */
	public function getDoExpressCheckoutPaymentRequest()
	{
		return $this->DoExpressCheckoutPaymentRequest;
	}
	/**
	 * Set DoExpressCheckoutPaymentRequest value
	 * @param PayPalStructDoExpressCheckoutPaymentRequestType $_doExpressCheckoutPaymentRequest the DoExpressCheckoutPaymentRequest
	 * @return PayPalStructDoExpressCheckoutPaymentRequestType
	 */
	public function setDoExpressCheckoutPaymentRequest($_doExpressCheckoutPaymentRequest)
	{
		return ($this->DoExpressCheckoutPaymentRequest = $_doExpressCheckoutPaymentRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoExpressCheckoutPaymentReq
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