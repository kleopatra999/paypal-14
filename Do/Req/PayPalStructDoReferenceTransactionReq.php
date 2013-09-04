<?php
/**
 * File for class PayPalStructDoReferenceTransactionReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReferenceTransactionReq originally named DoReferenceTransactionReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReferenceTransactionReq extends PayPalWsdlClass
{
	/**
	 * The DoReferenceTransactionRequest
	 * @var PayPalStructDoReferenceTransactionRequestType
	 */
	public $DoReferenceTransactionRequest;
	/**
	 * Constructor method for DoReferenceTransactionReq
	 * @see parent::__construct()
	 * @param PayPalStructDoReferenceTransactionRequestType $_doReferenceTransactionRequest
	 * @return PayPalStructDoReferenceTransactionReq
	 */
	public function __construct($_doReferenceTransactionRequest = NULL)
	{
		parent::__construct(array('DoReferenceTransactionRequest'=>$_doReferenceTransactionRequest));
	}
	/**
	 * Get DoReferenceTransactionRequest value
	 * @return PayPalStructDoReferenceTransactionRequestType|null
	 */
	public function getDoReferenceTransactionRequest()
	{
		return $this->DoReferenceTransactionRequest;
	}
	/**
	 * Set DoReferenceTransactionRequest value
	 * @param PayPalStructDoReferenceTransactionRequestType $_doReferenceTransactionRequest the DoReferenceTransactionRequest
	 * @return PayPalStructDoReferenceTransactionRequestType
	 */
	public function setDoReferenceTransactionRequest($_doReferenceTransactionRequest)
	{
		return ($this->DoReferenceTransactionRequest = $_doReferenceTransactionRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoReferenceTransactionReq
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