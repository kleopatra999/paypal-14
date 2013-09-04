<?php
/**
 * File for class PayPalStructRefundTransactionResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRefundTransactionResponseType originally named RefundTransactionResponseType
 * Documentation : Contains Refund Payment status information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRefundTransactionResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The RefundTransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique transaction ID of the refund. Character length and limitations:17 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - nillable : true
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $RefundTransactionID;
	/**
	 * The NetRefundAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount subtracted from PayPal balance of original recipient of payment to make this refund
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $NetRefundAmount;
	/**
	 * The FeeRefundAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Transaction fee refunded to original recipient of payment
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $FeeRefundAmount;
	/**
	 * The GrossRefundAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of money refunded to original payer
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $GrossRefundAmount;
	/**
	 * The TotalRefundedAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Total of all previous refunds
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TotalRefundedAmount;
	/**
	 * The RefundInfo
	 * @var PayPalStructRefundInfoType
	 */
	public $RefundInfo;
	/**
	 * The ReceiptData
	 * Meta informations extracted from the WSDL
	 * - documentation : Any general information like offer details that is reinstated or any other marketing data
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReceiptData;
	/**
	 * The MsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Return msgsubid back to merchant
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor method for RefundTransactionResponseType
	 * @see parent::__construct()
	 * @param string $_refundTransactionID
	 * @param PayPalStructBasicAmountType $_netRefundAmount
	 * @param PayPalStructBasicAmountType $_feeRefundAmount
	 * @param PayPalStructBasicAmountType $_grossRefundAmount
	 * @param PayPalStructBasicAmountType $_totalRefundedAmount
	 * @param PayPalStructRefundInfoType $_refundInfo
	 * @param string $_receiptData
	 * @param string $_msgSubID
	 * @return PayPalStructRefundTransactionResponseType
	 */
	public function __construct($_refundTransactionID = NULL,$_netRefundAmount = NULL,$_feeRefundAmount = NULL,$_grossRefundAmount = NULL,$_totalRefundedAmount = NULL,$_refundInfo = NULL,$_receiptData = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('RefundTransactionID'=>$_refundTransactionID,'NetRefundAmount'=>$_netRefundAmount,'FeeRefundAmount'=>$_feeRefundAmount,'GrossRefundAmount'=>$_grossRefundAmount,'TotalRefundedAmount'=>$_totalRefundedAmount,'RefundInfo'=>$_refundInfo,'ReceiptData'=>$_receiptData,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get RefundTransactionID value
	 * @return string|null
	 */
	public function getRefundTransactionID()
	{
		return $this->RefundTransactionID;
	}
	/**
	 * Set RefundTransactionID value
	 * @param string $_refundTransactionID the RefundTransactionID
	 * @return string
	 */
	public function setRefundTransactionID($_refundTransactionID)
	{
		return ($this->RefundTransactionID = $_refundTransactionID);
	}
	/**
	 * Get NetRefundAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getNetRefundAmount()
	{
		return $this->NetRefundAmount;
	}
	/**
	 * Set NetRefundAmount value
	 * @param PayPalStructBasicAmountType $_netRefundAmount the NetRefundAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setNetRefundAmount($_netRefundAmount)
	{
		return ($this->NetRefundAmount = $_netRefundAmount);
	}
	/**
	 * Get FeeRefundAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getFeeRefundAmount()
	{
		return $this->FeeRefundAmount;
	}
	/**
	 * Set FeeRefundAmount value
	 * @param PayPalStructBasicAmountType $_feeRefundAmount the FeeRefundAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setFeeRefundAmount($_feeRefundAmount)
	{
		return ($this->FeeRefundAmount = $_feeRefundAmount);
	}
	/**
	 * Get GrossRefundAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getGrossRefundAmount()
	{
		return $this->GrossRefundAmount;
	}
	/**
	 * Set GrossRefundAmount value
	 * @param PayPalStructBasicAmountType $_grossRefundAmount the GrossRefundAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setGrossRefundAmount($_grossRefundAmount)
	{
		return ($this->GrossRefundAmount = $_grossRefundAmount);
	}
	/**
	 * Get TotalRefundedAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTotalRefundedAmount()
	{
		return $this->TotalRefundedAmount;
	}
	/**
	 * Set TotalRefundedAmount value
	 * @param PayPalStructBasicAmountType $_totalRefundedAmount the TotalRefundedAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setTotalRefundedAmount($_totalRefundedAmount)
	{
		return ($this->TotalRefundedAmount = $_totalRefundedAmount);
	}
	/**
	 * Get RefundInfo value
	 * @return PayPalStructRefundInfoType|null
	 */
	public function getRefundInfo()
	{
		return $this->RefundInfo;
	}
	/**
	 * Set RefundInfo value
	 * @param PayPalStructRefundInfoType $_refundInfo the RefundInfo
	 * @return PayPalStructRefundInfoType
	 */
	public function setRefundInfo($_refundInfo)
	{
		return ($this->RefundInfo = $_refundInfo);
	}
	/**
	 * Get ReceiptData value
	 * @return string|null
	 */
	public function getReceiptData()
	{
		return $this->ReceiptData;
	}
	/**
	 * Set ReceiptData value
	 * @param string $_receiptData the ReceiptData
	 * @return string
	 */
	public function setReceiptData($_receiptData)
	{
		return ($this->ReceiptData = $_receiptData);
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
	 * @return PayPalStructRefundTransactionResponseType
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