<?php
/**
 * File for class PayPalStructRefundTransactionRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRefundTransactionRequestType originally named RefundTransactionRequestType
 * Documentation : To pass the Merchant store informationOptional Information about the individual details of the items to be refunded.Optional
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRefundTransactionRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier of the transaction you are refunding. Optional Character length and limitations: 17 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The PayerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Encrypted PayPal customer account identification number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - maxLength : 127
	 * @var string
	 */
	public $PayerID;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Invoice number corresponding to transaction details for tracking the refund of a payment. This parameter is passed by the merchant or recipient while refunding the transaction. This parameter does not affect the business logic, it is persisted in the DB for transaction reference Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The RefundType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of refund you are making Required
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumRefundType
	 */
	public $RefundType;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Refund amount. Amount is required if RefundType is Partial. NOTE: If RefundType is Full, do not set Amount.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The Memo
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom memo about the refund. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Memo;
	/**
	 * The RetryUntil
	 * Meta informations extracted from the WSDL
	 * - documentation : The maximum time till which refund must be tried. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $RetryUntil;
	/**
	 * The RefundSource
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of funding source for refund. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumRefundSourceCodeType
	 */
	public $RefundSource;
	/**
	 * The RefundAdvice
	 * Meta informations extracted from the WSDL
	 * - documentation : Flag to indicate that the customer was already given store credit for a given transaction. This will allow us to make sure we do not double refund. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $RefundAdvice;
	/**
	 * The MerchantStoreDetails
	 * @var PayPalStructMerchantStoreDetailsType
	 */
	public $MerchantStoreDetails;
	/**
	 * The RefundItemDetails
	 * @var PayPalStructInvoiceItemType
	 */
	public $RefundItemDetails;
	/**
	 * The MsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor method for RefundTransactionRequestType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param string $_payerID
	 * @param string $_invoiceID
	 * @param PayPalEnumRefundType $_refundType
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_memo
	 * @param dateTime $_retryUntil
	 * @param PayPalEnumRefundSourceCodeType $_refundSource
	 * @param boolean $_refundAdvice
	 * @param PayPalStructMerchantStoreDetailsType $_merchantStoreDetails
	 * @param PayPalStructInvoiceItemType $_refundItemDetails
	 * @param string $_msgSubID
	 * @return PayPalStructRefundTransactionRequestType
	 */
	public function __construct($_transactionID = NULL,$_payerID = NULL,$_invoiceID = NULL,$_refundType = NULL,$_amount = NULL,$_memo = NULL,$_retryUntil = NULL,$_refundSource = NULL,$_refundAdvice = NULL,$_merchantStoreDetails = NULL,$_refundItemDetails = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'PayerID'=>$_payerID,'InvoiceID'=>$_invoiceID,'RefundType'=>$_refundType,'Amount'=>$_amount,'Memo'=>$_memo,'RetryUntil'=>$_retryUntil,'RefundSource'=>$_refundSource,'RefundAdvice'=>$_refundAdvice,'MerchantStoreDetails'=>$_merchantStoreDetails,'RefundItemDetails'=>$_refundItemDetails,'MsgSubID'=>$_msgSubID));
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
	 * Get PayerID value
	 * @return string|null
	 */
	public function getPayerID()
	{
		return $this->PayerID;
	}
	/**
	 * Set PayerID value
	 * @param string $_payerID the PayerID
	 * @return string
	 */
	public function setPayerID($_payerID)
	{
		return ($this->PayerID = $_payerID);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
	}
	/**
	 * Get RefundType value
	 * @return PayPalEnumRefundType|null
	 */
	public function getRefundType()
	{
		return $this->RefundType;
	}
	/**
	 * Set RefundType value
	 * @uses PayPalEnumRefundType::valueIsValid()
	 * @param PayPalEnumRefundType $_refundType the RefundType
	 * @return PayPalEnumRefundType
	 */
	public function setRefundType($_refundType)
	{
		if(!PayPalEnumRefundType::valueIsValid($_refundType))
		{
			return false;
		}
		return ($this->RefundType = $_refundType);
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Get Memo value
	 * @return string|null
	 */
	public function getMemo()
	{
		return $this->Memo;
	}
	/**
	 * Set Memo value
	 * @param string $_memo the Memo
	 * @return string
	 */
	public function setMemo($_memo)
	{
		return ($this->Memo = $_memo);
	}
	/**
	 * Get RetryUntil value
	 * @return dateTime|null
	 */
	public function getRetryUntil()
	{
		return $this->RetryUntil;
	}
	/**
	 * Set RetryUntil value
	 * @param dateTime $_retryUntil the RetryUntil
	 * @return dateTime
	 */
	public function setRetryUntil($_retryUntil)
	{
		return ($this->RetryUntil = $_retryUntil);
	}
	/**
	 * Get RefundSource value
	 * @return PayPalEnumRefundSourceCodeType|null
	 */
	public function getRefundSource()
	{
		return $this->RefundSource;
	}
	/**
	 * Set RefundSource value
	 * @uses PayPalEnumRefundSourceCodeType::valueIsValid()
	 * @param PayPalEnumRefundSourceCodeType $_refundSource the RefundSource
	 * @return PayPalEnumRefundSourceCodeType
	 */
	public function setRefundSource($_refundSource)
	{
		if(!PayPalEnumRefundSourceCodeType::valueIsValid($_refundSource))
		{
			return false;
		}
		return ($this->RefundSource = $_refundSource);
	}
	/**
	 * Get RefundAdvice value
	 * @return boolean|null
	 */
	public function getRefundAdvice()
	{
		return $this->RefundAdvice;
	}
	/**
	 * Set RefundAdvice value
	 * @param boolean $_refundAdvice the RefundAdvice
	 * @return boolean
	 */
	public function setRefundAdvice($_refundAdvice)
	{
		return ($this->RefundAdvice = $_refundAdvice);
	}
	/**
	 * Get MerchantStoreDetails value
	 * @return PayPalStructMerchantStoreDetailsType|null
	 */
	public function getMerchantStoreDetails()
	{
		return $this->MerchantStoreDetails;
	}
	/**
	 * Set MerchantStoreDetails value
	 * @param PayPalStructMerchantStoreDetailsType $_merchantStoreDetails the MerchantStoreDetails
	 * @return PayPalStructMerchantStoreDetailsType
	 */
	public function setMerchantStoreDetails($_merchantStoreDetails)
	{
		return ($this->MerchantStoreDetails = $_merchantStoreDetails);
	}
	/**
	 * Get RefundItemDetails value
	 * @return PayPalStructInvoiceItemType|null
	 */
	public function getRefundItemDetails()
	{
		return $this->RefundItemDetails;
	}
	/**
	 * Set RefundItemDetails value
	 * @param PayPalStructInvoiceItemType $_refundItemDetails the RefundItemDetails
	 * @return PayPalStructInvoiceItemType
	 */
	public function setRefundItemDetails($_refundItemDetails)
	{
		return ($this->RefundItemDetails = $_refundItemDetails);
	}
	/**
	 * Get MsgSubID value
	 * @return string|null
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
	}
	/**
	 * Set MsgSubID value
	 * @param string $_msgSubID the MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_msgSubID)
	{
		return ($this->MsgSubID = $_msgSubID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRefundTransactionRequestType
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