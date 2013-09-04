<?php
/**
 * File for class PayPalStructGetTransactionDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetTransactionDetailsReq originally named GetTransactionDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetTransactionDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetTransactionDetailsRequest
	 * @var PayPalStructGetTransactionDetailsRequestType
	 */
	public $GetTransactionDetailsRequest;
	/**
	 * Constructor method for GetTransactionDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetTransactionDetailsRequestType $_getTransactionDetailsRequest
	 * @return PayPalStructGetTransactionDetailsReq
	 */
	public function __construct($_getTransactionDetailsRequest = NULL)
	{
		parent::__construct(array('GetTransactionDetailsRequest'=>$_getTransactionDetailsRequest));
	}
	/**
	 * Get GetTransactionDetailsRequest value
	 * @return PayPalStructGetTransactionDetailsRequestType|null
	 */
	public function getGetTransactionDetailsRequest()
	{
		return $this->GetTransactionDetailsRequest;
	}
	/**
	 * Set GetTransactionDetailsRequest value
	 * @param PayPalStructGetTransactionDetailsRequestType $_getTransactionDetailsRequest the GetTransactionDetailsRequest
	 * @return PayPalStructGetTransactionDetailsRequestType
	 */
	public function setGetTransactionDetailsRequest($_getTransactionDetailsRequest)
	{
		return ($this->GetTransactionDetailsRequest = $_getTransactionDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetTransactionDetailsReq
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