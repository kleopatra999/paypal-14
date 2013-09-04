<?php
/**
 * File for class PayPalStructDoReferenceTransactionResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReferenceTransactionResponseDetailsType originally named DoReferenceTransactionResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReferenceTransactionResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingAgreementID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementID;
	/**
	 * The PaymentInfo
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructPaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The AVSCode
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $AVSCode;
	/**
	 * The CVV2Code
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CVV2Code;
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The PaymentAdviceCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Response code from the processor when a recurring transaction is declined
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentAdviceCode;
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
	 * Constructor method for DoReferenceTransactionResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_billingAgreementID
	 * @param PayPalStructPaymentInfoType $_paymentInfo
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_aVSCode
	 * @param string $_cVV2Code
	 * @param string $_transactionID
	 * @param string $_paymentAdviceCode
	 * @param string $_msgSubID
	 * @return PayPalStructDoReferenceTransactionResponseDetailsType
	 */
	public function __construct($_billingAgreementID = NULL,$_paymentInfo = NULL,$_amount = NULL,$_aVSCode = NULL,$_cVV2Code = NULL,$_transactionID = NULL,$_paymentAdviceCode = NULL,$_msgSubID = NULL)
	{
		parent::__construct(array('BillingAgreementID'=>$_billingAgreementID,'PaymentInfo'=>$_paymentInfo,'Amount'=>$_amount,'AVSCode'=>$_aVSCode,'CVV2Code'=>$_cVV2Code,'TransactionID'=>$_transactionID,'PaymentAdviceCode'=>$_paymentAdviceCode,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get BillingAgreementID value
	 * @return string|null
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
	}
	/**
	 * Set BillingAgreementID value
	 * @param string $_billingAgreementID the BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_billingAgreementID)
	{
		return ($this->BillingAgreementID = $_billingAgreementID);
	}
	/**
	 * Get PaymentInfo value
	 * @return PayPalStructPaymentInfoType|null
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}
	/**
	 * Set PaymentInfo value
	 * @param PayPalStructPaymentInfoType $_paymentInfo the PaymentInfo
	 * @return PayPalStructPaymentInfoType
	 */
	public function setPaymentInfo($_paymentInfo)
	{
		return ($this->PaymentInfo = $_paymentInfo);
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
	 * Get AVSCode value
	 * @return string|null
	 */
	public function getAVSCode()
	{
		return $this->AVSCode;
	}
	/**
	 * Set AVSCode value
	 * @param string $_aVSCode the AVSCode
	 * @return string
	 */
	public function setAVSCode($_aVSCode)
	{
		return ($this->AVSCode = $_aVSCode);
	}
	/**
	 * Get CVV2Code value
	 * @return string|null
	 */
	public function getCVV2Code()
	{
		return $this->CVV2Code;
	}
	/**
	 * Set CVV2Code value
	 * @param string $_cVV2Code the CVV2Code
	 * @return string
	 */
	public function setCVV2Code($_cVV2Code)
	{
		return ($this->CVV2Code = $_cVV2Code);
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
	 * Get PaymentAdviceCode value
	 * @return string|null
	 */
	public function getPaymentAdviceCode()
	{
		return $this->PaymentAdviceCode;
	}
	/**
	 * Set PaymentAdviceCode value
	 * @param string $_paymentAdviceCode the PaymentAdviceCode
	 * @return string
	 */
	public function setPaymentAdviceCode($_paymentAdviceCode)
	{
		return ($this->PaymentAdviceCode = $_paymentAdviceCode);
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
	 * @return PayPalStructDoReferenceTransactionResponseDetailsType
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