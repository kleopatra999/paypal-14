<?php
/**
 * File for class PayPalStructDoDirectPaymentResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoDirectPaymentResponseType originally named DoDirectPaymentResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoDirectPaymentResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : The amount of the payment as specified by you on DoDirectPaymentRequest.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The AVSCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Address Verification System response code. Character limit: One single-byte alphanumeric character AVS CodeMeaningMatched Details A AddressAddress only (no ZIP) B International “A”Address only (no ZIP) CInternational “N” None DInternational “X” Address and Postal Code E Not allowed for MOTO (Internet/Phone) transactions Not applicable F UK-specific “X”Address and Postal Code G Global Unavailable Not applicable I International UnavailableNot applicable N NoNone PPostal (International “Z”)Postal Code only (no Address) RRetryNot applicable S Service not Supported Not applicable U UnavailableNot applicable W Whole ZIPNine-digit ZIP code (no Address) X Exact match Address and nine-digit ZIP code Y YesAddress and five-digit ZIP Z ZIP Five-digit ZIP code (no Address) All others Error Not applicable
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $AVSCode;
	/**
	 * The CVV2Code
	 * Meta informations extracted from the WSDL
	 * - documentation : Result of the CVV2 check by PayPal. CVV2 CodeMeaningMatched Details M MatchCVV2 N No match None P Not ProcessedNot applicable SService not SupportedNot applicable U UnavailableNot applicable XNo response Not applicable All others ErrorNot applicable
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $CVV2Code;
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Transaction identification number. Character length and limitations: 19 characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The PendingReason
	 * Meta informations extracted from the WSDL
	 * - documentation : The reason why a particular transaction went in pending.
	 * - minOccurs : 0
	 * @var PayPalEnumPendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * The PaymentStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : This will identify the actual transaction status.
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The FMFDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * The ThreeDSecureResponse
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructThreeDSecureResponseType
	 */
	public $ThreeDSecureResponse;
	/**
	 * The PaymentAdviceCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Response code from the processor when a recurring transaction is declined.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentAdviceCode;
	/**
	 * Constructor method for DoDirectPaymentResponseType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_aVSCode
	 * @param string $_cVV2Code
	 * @param string $_transactionID
	 * @param PayPalEnumPendingStatusCodeType $_pendingReason
	 * @param PayPalEnumPaymentStatusCodeType $_paymentStatus
	 * @param PayPalStructFMFDetailsType $_fMFDetails
	 * @param PayPalStructThreeDSecureResponseType $_threeDSecureResponse
	 * @param string $_paymentAdviceCode
	 * @return PayPalStructDoDirectPaymentResponseType
	 */
	public function __construct($_amount,$_aVSCode,$_cVV2Code,$_transactionID,$_pendingReason = NULL,$_paymentStatus = NULL,$_fMFDetails = NULL,$_threeDSecureResponse = NULL,$_paymentAdviceCode = NULL)
	{
		PayPalWsdlClass::__construct(array('Amount'=>$_amount,'AVSCode'=>$_aVSCode,'CVV2Code'=>$_cVV2Code,'TransactionID'=>$_transactionID,'PendingReason'=>$_pendingReason,'PaymentStatus'=>$_paymentStatus,'FMFDetails'=>$_fMFDetails,'ThreeDSecureResponse'=>$_threeDSecureResponse,'PaymentAdviceCode'=>$_paymentAdviceCode));
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType
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
	 * @return string
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
	 * @return string
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
	 * Get PaymentStatus value
	 * @return PayPalEnumPaymentStatusCodeType|null
	 */
	public function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * Set PaymentStatus value
	 * @uses PayPalEnumPaymentStatusCodeType::valueIsValid()
	 * @param PayPalEnumPaymentStatusCodeType $_paymentStatus the PaymentStatus
	 * @return PayPalEnumPaymentStatusCodeType
	 */
	public function setPaymentStatus($_paymentStatus)
	{
		if(!PayPalEnumPaymentStatusCodeType::valueIsValid($_paymentStatus))
		{
			return false;
		}
		return ($this->PaymentStatus = $_paymentStatus);
	}
	/**
	 * Get FMFDetails value
	 * @return PayPalStructFMFDetailsType|null
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
	}
	/**
	 * Set FMFDetails value
	 * @param PayPalStructFMFDetailsType $_fMFDetails the FMFDetails
	 * @return PayPalStructFMFDetailsType
	 */
	public function setFMFDetails($_fMFDetails)
	{
		return ($this->FMFDetails = $_fMFDetails);
	}
	/**
	 * Get ThreeDSecureResponse value
	 * @return PayPalStructThreeDSecureResponseType|null
	 */
	public function getThreeDSecureResponse()
	{
		return $this->ThreeDSecureResponse;
	}
	/**
	 * Set ThreeDSecureResponse value
	 * @param PayPalStructThreeDSecureResponseType $_threeDSecureResponse the ThreeDSecureResponse
	 * @return PayPalStructThreeDSecureResponseType
	 */
	public function setThreeDSecureResponse($_threeDSecureResponse)
	{
		return ($this->ThreeDSecureResponse = $_threeDSecureResponse);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoDirectPaymentResponseType
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