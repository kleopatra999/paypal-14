<?php
/**
 * File for class PayPalStructGetTransactionDetailsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetTransactionDetailsRequestType originally named GetTransactionDetailsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetTransactionDetailsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier of a transaction. RequiredThe details for some kinds of transactions cannot be retrieved with GetTransactionDetailsRequest. You cannot obtain details of bank transfer withdrawals, for example. Character length and limitations: 17 single-byte alphanumeric characters
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * Constructor method for GetTransactionDetailsRequestType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @return PayPalStructGetTransactionDetailsRequestType
	 */
	public function __construct($_transactionID = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID));
	}
	/**
	 * Get TransactionID value
	 * @return string|null
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionID value
	 * @param string $_transactionID the TransactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->TransactionID = $_transactionID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetTransactionDetailsRequestType
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