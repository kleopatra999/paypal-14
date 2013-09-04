<?php
/**
 * File for class PayPalStructTransactionSearchReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTransactionSearchReq originally named TransactionSearchReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTransactionSearchReq extends PayPalWsdlClass
{
	/**
	 * The TransactionSearchRequest
	 * @var PayPalStructTransactionSearchRequestType
	 */
	public $TransactionSearchRequest;
	/**
	 * Constructor method for TransactionSearchReq
	 * @see parent::__construct()
	 * @param PayPalStructTransactionSearchRequestType $_transactionSearchRequest
	 * @return PayPalStructTransactionSearchReq
	 */
	public function __construct($_transactionSearchRequest = NULL)
	{
		parent::__construct(array('TransactionSearchRequest'=>$_transactionSearchRequest));
	}
	/**
	 * Get TransactionSearchRequest value
	 * @return PayPalStructTransactionSearchRequestType|null
	 */
	public function getTransactionSearchRequest()
	{
		return $this->TransactionSearchRequest;
	}
	/**
	 * Set TransactionSearchRequest value
	 * @param PayPalStructTransactionSearchRequestType $_transactionSearchRequest the TransactionSearchRequest
	 * @return PayPalStructTransactionSearchRequestType
	 */
	public function setTransactionSearchRequest($_transactionSearchRequest)
	{
		return ($this->TransactionSearchRequest = $_transactionSearchRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTransactionSearchReq
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