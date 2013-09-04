<?php
/**
 * File for class PayPalStructRefundInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRefundInfoType originally named RefundInfoType
 * Documentation : Holds refunds payment status information
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRefundInfoType extends PayPalWsdlClass
{
	/**
	 * The RefundStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Refund status whether it is Instant or Delayed.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentStatusCodeType
	 */
	public $RefundStatus;
	/**
	 * The PendingReason
	 * Meta informations extracted from the WSDL
	 * - documentation : Tells us the reason when refund payment status is Delayed.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * Constructor method for RefundInfoType
	 * @see parent::__construct()
	 * @param PayPalEnumPaymentStatusCodeType $_refundStatus
	 * @param PayPalEnumPendingStatusCodeType $_pendingReason
	 * @return PayPalStructRefundInfoType
	 */
	public function __construct($_refundStatus = NULL,$_pendingReason = NULL)
	{
		parent::__construct(array('RefundStatus'=>$_refundStatus,'PendingReason'=>$_pendingReason));
	}
	/**
	 * Get RefundStatus value
	 * @return PayPalEnumPaymentStatusCodeType|null
	 */
	public function getRefundStatus()
	{
		return $this->RefundStatus;
	}
	/**
	 * Set RefundStatus value
	 * @uses PayPalEnumPaymentStatusCodeType::valueIsValid()
	 * @param PayPalEnumPaymentStatusCodeType $_refundStatus the RefundStatus
	 * @return PayPalEnumPaymentStatusCodeType
	 */
	public function setRefundStatus($_refundStatus)
	{
		if(!PayPalEnumPaymentStatusCodeType::valueIsValid($_refundStatus))
		{
			return false;
		}
		return ($this->RefundStatus = $_refundStatus);
	}
	/**
	 * Get PendingReason value
	 * @return PayPalEnumPendingStatusCodeType|null
	 */
	public function getPendingReason()
	{
		return $this->PendingReason;
	}
	/**
	 * Set PendingReason value
	 * @uses PayPalEnumPendingStatusCodeType::valueIsValid()
	 * @param PayPalEnumPendingStatusCodeType $_pendingReason the PendingReason
	 * @return PayPalEnumPendingStatusCodeType
	 */
	public function setPendingReason($_pendingReason)
	{
		if(!PayPalEnumPendingStatusCodeType::valueIsValid($_pendingReason))
		{
			return false;
		}
		return ($this->PendingReason = $_pendingReason);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRefundInfoType
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