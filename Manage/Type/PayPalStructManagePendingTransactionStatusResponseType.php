<?php
/**
 * File for class PayPalStructManagePendingTransactionStatusResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructManagePendingTransactionStatusResponseType originally named ManagePendingTransactionStatusResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructManagePendingTransactionStatusResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Status;
	/**
	 * Constructor method for ManagePendingTransactionStatusResponseType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param string $_status
	 * @return PayPalStructManagePendingTransactionStatusResponseType
	 */
	public function __construct($_transactionID,$_status = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'Status'=>$_status));
	}
	/**
	 * Get TransactionID value
	 * @return string
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
	 * Get Status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @param string $_status the Status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->Status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructManagePendingTransactionStatusResponseType
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