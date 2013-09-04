<?php
/**
 * File for class PayPalStructRefundTransactionReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRefundTransactionReq originally named RefundTransactionReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRefundTransactionReq extends PayPalWsdlClass
{
	/**
	 * The RefundTransactionRequest
	 * @var PayPalStructRefundTransactionRequestType
	 */
	public $RefundTransactionRequest;
	/**
	 * Constructor method for RefundTransactionReq
	 * @see parent::__construct()
	 * @param PayPalStructRefundTransactionRequestType $_refundTransactionRequest
	 * @return PayPalStructRefundTransactionReq
	 */
	public function __construct($_refundTransactionRequest = NULL)
	{
		parent::__construct(array('RefundTransactionRequest'=>$_refundTransactionRequest));
	}
	/**
	 * Get RefundTransactionRequest value
	 * @return PayPalStructRefundTransactionRequestType|null
	 */
	public function getRefundTransactionRequest()
	{
		return $this->RefundTransactionRequest;
	}
	/**
	 * Set RefundTransactionRequest value
	 * @param PayPalStructRefundTransactionRequestType $_refundTransactionRequest the RefundTransactionRequest
	 * @return PayPalStructRefundTransactionRequestType
	 */
	public function setRefundTransactionRequest($_refundTransactionRequest)
	{
		return ($this->RefundTransactionRequest = $_refundTransactionRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRefundTransactionReq
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