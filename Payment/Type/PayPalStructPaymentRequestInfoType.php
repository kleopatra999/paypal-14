<?php
/**
 * File for class PayPalStructPaymentRequestInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentRequestInfoType originally named PaymentRequestInfoType
 * Documentation : Contains payment request information for each bucket in the cart.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentRequestInfoType extends PayPalWsdlClass
{
	/**
	 * The TransactionId
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the transaction id of the bucket.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The PaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the bucket id.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The PaymentError
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the error details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructErrorType
	 */
	public $PaymentError;
	/**
	 * Constructor method for PaymentRequestInfoType
	 * @see parent::__construct()
	 * @param string $_transactionId
	 * @param string $_paymentRequestID
	 * @param PayPalStructErrorType $_paymentError
	 * @return PayPalStructPaymentRequestInfoType
	 */
	public function __construct($_transactionId = NULL,$_paymentRequestID = NULL,$_paymentError = NULL)
	{
		parent::__construct(array('TransactionId'=>$_transactionId,'PaymentRequestID'=>$_paymentRequestID,'PaymentError'=>$_paymentError));
	}
	/**
	 * Get TransactionId value
	 * @return string|null
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set TransactionId value
	 * @param string $_transactionId the TransactionId
	 * @return string
	 */
	public function setTransactionId($_transactionId)
	{
		return ($this->TransactionId = $_transactionId);
	}
	/**
	 * Get PaymentRequestID value
	 * @return string|null
	 */
	public function getPaymentRequestID()
	{
		return $this->PaymentRequestID;
	}
	/**
	 * Set PaymentRequestID value
	 * @param string $_paymentRequestID the PaymentRequestID
	 * @return string
	 */
	public function setPaymentRequestID($_paymentRequestID)
	{
		return ($this->PaymentRequestID = $_paymentRequestID);
	}
	/**
	 * Get PaymentError value
	 * @return PayPalStructErrorType|null
	 */
	public function getPaymentError()
	{
		return $this->PaymentError;
	}
	/**
	 * Set PaymentError value
	 * @param PayPalStructErrorType $_paymentError the PaymentError
	 * @return PayPalStructErrorType
	 */
	public function setPaymentError($_paymentError)
	{
		return ($this->PaymentError = $_paymentError);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentRequestInfoType
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