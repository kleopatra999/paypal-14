<?php
/**
 * File for class PayPalStructDoMobileCheckoutPaymentReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoMobileCheckoutPaymentReq originally named DoMobileCheckoutPaymentReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoMobileCheckoutPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoMobileCheckoutPaymentRequest
	 * @var PayPalStructDoMobileCheckoutPaymentRequestType
	 */
	public $DoMobileCheckoutPaymentRequest;
	/**
	 * Constructor method for DoMobileCheckoutPaymentReq
	 * @see parent::__construct()
	 * @param PayPalStructDoMobileCheckoutPaymentRequestType $_doMobileCheckoutPaymentRequest
	 * @return PayPalStructDoMobileCheckoutPaymentReq
	 */
	public function __construct($_doMobileCheckoutPaymentRequest = NULL)
	{
		parent::__construct(array('DoMobileCheckoutPaymentRequest'=>$_doMobileCheckoutPaymentRequest));
	}
	/**
	 * Get DoMobileCheckoutPaymentRequest value
	 * @return PayPalStructDoMobileCheckoutPaymentRequestType|null
	 */
	public function getDoMobileCheckoutPaymentRequest()
	{
		return $this->DoMobileCheckoutPaymentRequest;
	}
	/**
	 * Set DoMobileCheckoutPaymentRequest value
	 * @param PayPalStructDoMobileCheckoutPaymentRequestType $_doMobileCheckoutPaymentRequest the DoMobileCheckoutPaymentRequest
	 * @return PayPalStructDoMobileCheckoutPaymentRequestType
	 */
	public function setDoMobileCheckoutPaymentRequest($_doMobileCheckoutPaymentRequest)
	{
		return ($this->DoMobileCheckoutPaymentRequest = $_doMobileCheckoutPaymentRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoMobileCheckoutPaymentReq
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