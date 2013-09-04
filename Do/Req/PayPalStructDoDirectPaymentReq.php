<?php
/**
 * File for class PayPalStructDoDirectPaymentReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoDirectPaymentReq originally named DoDirectPaymentReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoDirectPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoDirectPaymentRequest
	 * @var PayPalStructDoDirectPaymentRequestType
	 */
	public $DoDirectPaymentRequest;
	/**
	 * Constructor method for DoDirectPaymentReq
	 * @see parent::__construct()
	 * @param PayPalStructDoDirectPaymentRequestType $_doDirectPaymentRequest
	 * @return PayPalStructDoDirectPaymentReq
	 */
	public function __construct($_doDirectPaymentRequest = NULL)
	{
		parent::__construct(array('DoDirectPaymentRequest'=>$_doDirectPaymentRequest));
	}
	/**
	 * Get DoDirectPaymentRequest value
	 * @return PayPalStructDoDirectPaymentRequestType|null
	 */
	public function getDoDirectPaymentRequest()
	{
		return $this->DoDirectPaymentRequest;
	}
	/**
	 * Set DoDirectPaymentRequest value
	 * @param PayPalStructDoDirectPaymentRequestType $_doDirectPaymentRequest the DoDirectPaymentRequest
	 * @return PayPalStructDoDirectPaymentRequestType
	 */
	public function setDoDirectPaymentRequest($_doDirectPaymentRequest)
	{
		return ($this->DoDirectPaymentRequest = $_doDirectPaymentRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoDirectPaymentReq
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