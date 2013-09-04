<?php
/**
 * File for class PayPalStructTransactionStatusType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTransactionStatusType originally named TransactionStatusType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTransactionStatusType extends PayPalWsdlClass
{
	/**
	 * The eBayPaymentStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the success or failure of an eBay Online Payment for the transaction. If the payment failed, the value returned indicates the reason for the failure. Possible values: 0 = No payment failure. 3 = Buyer's eCheck bounced. 4 = Buyer's credit card failed. 5 = Buyer failed payment as reported by seller. 7 = Payment from buyer to seller is in PayPal process, but has not yet been completed.
	 * - minOccurs : 0
	 * @var int
	 */
	public $eBayPaymentStatus;
	/**
	 * The IncompleteState
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the current state of the checkout process for the transaction. Possible values: 0 = Checkout complete. 1 = Checkout incomplete. No details specified. 2 = Buyer requests total. 3 = Seller responded to buyer's request.
	 * - minOccurs : 0
	 * @var int
	 */
	public $IncompleteState;
	/**
	 * The LastTimeModified
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates last date and time checkout status or incomplete state was updated (in GMT).
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $LastTimeModified;
	/**
	 * The PaymentMethodUsed
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment method used by the buyer. (See BuyerPaymentCodeList/Type).
	 * - minOccurs : 0
	 * @var PayPalEnumBuyerPaymentMethodCodeType
	 */
	public $PaymentMethodUsed;
	/**
	 * The StatusIs
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the transaction process complete or incomplete. Possible values: 1 = Incomplete 2 = Complete
	 * - minOccurs : 0
	 * @var int
	 */
	public $StatusIs;
	/**
	 * Constructor method for TransactionStatusType
	 * @see parent::__construct()
	 * @param int $_eBayPaymentStatus
	 * @param int $_incompleteState
	 * @param dateTime $_lastTimeModified
	 * @param PayPalEnumBuyerPaymentMethodCodeType $_paymentMethodUsed
	 * @param int $_statusIs
	 * @return PayPalStructTransactionStatusType
	 */
	public function __construct($_eBayPaymentStatus = NULL,$_incompleteState = NULL,$_lastTimeModified = NULL,$_paymentMethodUsed = NULL,$_statusIs = NULL)
	{
		parent::__construct(array('eBayPaymentStatus'=>$_eBayPaymentStatus,'IncompleteState'=>$_incompleteState,'LastTimeModified'=>$_lastTimeModified,'PaymentMethodUsed'=>$_paymentMethodUsed,'StatusIs'=>$_statusIs));
	}
	/**
	 * Get eBayPaymentStatus value
	 * @return int|null
	 */
	public function getEBayPaymentStatus()
	{
		return $this->eBayPaymentStatus;
	}
	/**
	 * Set eBayPaymentStatus value
	 * @param int $_eBayPaymentStatus the eBayPaymentStatus
	 * @return int
	 */
	public function setEBayPaymentStatus($_eBayPaymentStatus)
	{
		return ($this->eBayPaymentStatus = $_eBayPaymentStatus);
	}
	/**
	 * Get IncompleteState value
	 * @return int|null
	 */
	public function getIncompleteState()
	{
		return $this->IncompleteState;
	}
	/**
	 * Set IncompleteState value
	 * @param int $_incompleteState the IncompleteState
	 * @return int
	 */
	public function setIncompleteState($_incompleteState)
	{
		return ($this->IncompleteState = $_incompleteState);
	}
	/**
	 * Get LastTimeModified value
	 * @return dateTime|null
	 */
	public function getLastTimeModified()
	{
		return $this->LastTimeModified;
	}
	/**
	 * Set LastTimeModified value
	 * @param dateTime $_lastTimeModified the LastTimeModified
	 * @return dateTime
	 */
	public function setLastTimeModified($_lastTimeModified)
	{
		return ($this->LastTimeModified = $_lastTimeModified);
	}
	/**
	 * Get PaymentMethodUsed value
	 * @return PayPalEnumBuyerPaymentMethodCodeType|null
	 */
	public function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}
	/**
	 * Set PaymentMethodUsed value
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::valueIsValid()
	 * @param PayPalEnumBuyerPaymentMethodCodeType $_paymentMethodUsed the PaymentMethodUsed
	 * @return PayPalEnumBuyerPaymentMethodCodeType
	 */
	public function setPaymentMethodUsed($_paymentMethodUsed)
	{
		if(!PayPalEnumBuyerPaymentMethodCodeType::valueIsValid($_paymentMethodUsed))
		{
			return false;
		}
		return ($this->PaymentMethodUsed = $_paymentMethodUsed);
	}
	/**
	 * Get StatusIs value
	 * @return int|null
	 */
	public function getStatusIs()
	{
		return $this->StatusIs;
	}
	/**
	 * Set StatusIs value
	 * @param int $_statusIs the StatusIs
	 * @return int
	 */
	public function setStatusIs($_statusIs)
	{
		return ($this->StatusIs = $_statusIs);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTransactionStatusType
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