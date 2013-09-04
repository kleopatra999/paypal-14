<?php
/**
 * File for class PayPalStructReverseTransactionReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReverseTransactionReq originally named ReverseTransactionReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReverseTransactionReq extends PayPalWsdlClass
{
	/**
	 * The ReverseTransactionRequest
	 * @var PayPalStructReverseTransactionRequestType
	 */
	public $ReverseTransactionRequest;
	/**
	 * Constructor method for ReverseTransactionReq
	 * @see parent::__construct()
	 * @param PayPalStructReverseTransactionRequestType $_reverseTransactionRequest
	 * @return PayPalStructReverseTransactionReq
	 */
	public function __construct($_reverseTransactionRequest = NULL)
	{
		parent::__construct(array('ReverseTransactionRequest'=>$_reverseTransactionRequest));
	}
	/**
	 * Get ReverseTransactionRequest value
	 * @return PayPalStructReverseTransactionRequestType|null
	 */
	public function getReverseTransactionRequest()
	{
		return $this->ReverseTransactionRequest;
	}
	/**
	 * Set ReverseTransactionRequest value
	 * @param PayPalStructReverseTransactionRequestType $_reverseTransactionRequest the ReverseTransactionRequest
	 * @return PayPalStructReverseTransactionRequestType
	 */
	public function setReverseTransactionRequest($_reverseTransactionRequest)
	{
		return ($this->ReverseTransactionRequest = $_reverseTransactionRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReverseTransactionReq
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