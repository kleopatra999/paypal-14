<?php
/**
 * File for class PayPalStructPaymentInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentInfoType originally named PaymentInfoType
 * Documentation : PaymentInfoType Payment information. A transaction identification number. Character length and limits: 19 single-byte characters maximum Its Ebay transaction id. EbayTransactionID will returned for immediate pay item transaction in ECA Receipt ID Character length and limitations: 16 digits in xxxx-xxxx-xxxx-xxxx format
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentInfoType extends PayPalWsdlClass
{
	/**
	 * The TransactionID
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The EbayTransactionID
	 * @var string
	 */
	public $EbayTransactionID;
	/**
	 * The ParentTransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Parent or related transaction identification number. This field is populated for the following transaction types: ReversalCapture of an authorized transaction.Reauthorization of a transaction.Capture of an order. The value of ParentTransactionID is the original OrderID.Authorization of an order. The value of ParentTransactionID is the original OrderID.Capture of an order authorization.Void of an order. The value of ParentTransactionID is the original OrderID. Character length and limits: 19 single-byte characters maximum
	 * - minOccurs : 0
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $ParentTransactionID;
	/**
	 * The ReceiptID
	 * @var string
	 */
	public $ReceiptID;
	/**
	 * The TransactionType
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of transaction cart: Transaction created via the PayPal Shopping Cart feature or by Express Checkout with multiple purchased item express-checkout: Transaction created by Express Checkout with a single purchased items send-money: Transaction created by customer from the Send Money tab on the PayPal website. web-accept: Transaction created by customer via Buy Now, Donation, or Auction Smart Logos. subscr-*: Transaction created by customer via Subscription. eot means "end of subscription term." merch-pmt: preapproved payment. mass-pay: Transaction created via MassPay. virtual-terminal: Transaction created via merchant virtual terminal. credit: Transaction created via merchant virtual terminal or API to credit a customer.
	 * @var PayPalEnumPaymentTransactionCodeType
	 */
	public $TransactionType;
	/**
	 * The PaymentType
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of payment
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The RefundSourceCodeType
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of funding source
	 * - minOccurs : 0
	 * @var PayPalEnumRefundSourceCodeType
	 */
	public $RefundSourceCodeType;
	/**
	 * The ExpectedeCheckClearDate
	 * Meta informations extracted from the WSDL
	 * - documentation : eCheck latest expected clear date
	 * @var dateTime
	 */
	public $ExpectedeCheckClearDate;
	/**
	 * The PaymentDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date and time of payment
	 * @var dateTime
	 */
	public $PaymentDate;
	/**
	 * The GrossAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Full amount of the customer's payment, before transaction fee is subtracted
	 * @var PayPalStructBasicAmountType
	 */
	public $GrossAmount;
	/**
	 * The FeeAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Transaction fee associated with the payment
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $FeeAmount;
	/**
	 * The SettleAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount deposited into the account's primary balance after a currency conversion from automatic conversion through your Payment Receiving Preferences or manual conversion through manually accepting a payment. This amount is calculated after fees and taxes have been assessed.
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $SettleAmount;
	/**
	 * The TaxAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of tax for transaction
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The ExchangeRate
	 * Meta informations extracted from the WSDL
	 * - documentation : Exchange rate for transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExchangeRate;
	/**
	 * The PaymentStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : The status of the payment: None: No status Created: A giropay payment has been initiated. Canceled-Reversal: A reversal has been canceled. For example, you won a dispute with the customer, and the funds for the transaction that was reversed have been returned to you. Completed: The payment has been completed, and the funds have been added successfully to your account balance. Denied: You denied the payment. This happens only if the payment was previously pending because of possible reasons described for the PendingReason element. Expired: This authorization has expired and cannot be captured. Failed: The payment has failed. This happens only if the payment was made from your customer's bank account. In-Progress: The transaction is in process of authorization and capture. Partially-Refunded: The transaction has been partially refunded. Pending: The payment is pending. See "PendingReason" for more information. Refunded: You refunded the payment. Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer. The reason for the reversal is specified in the ReasonCode element. Processed: A payment has been accepted. Voided: This authorization has been voided. Completed-Funds-Held: The payment has been completed, and the funds have been added successfully to your pending balance. See the "HoldDecision" field for more information.
	 * @var PayPalEnumPaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The PendingReason
	 * Meta informations extracted from the WSDL
	 * - documentation : The reason the payment is pending: none: No pending reason address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. authorization: You set PaymentAction to Authorization on SetExpressCheckoutRequest and have not yet captured funds. echeck: The payment is pending because it was made by an eCheck that has not yet cleared. intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview. multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. unilateral: The payment is pending because it was made to an email address that is not yet registered or confirmed. upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account. verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment. regulatory-review: This payment is pending while we make sure it meets regulatory requirements. We'll contact you again in 24-72 hours with the outcome of our review. other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
	 * - minOccurs : 0
	 * @var PayPalEnumPendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * The ReasonCode
	 * Meta informations extracted from the WSDL
	 * - documentation : The reason for a reversal if TransactionType is reversal: none: No reason code chargeback: A reversal has occurred on this transaction due to a chargeback by your customer. guarantee: A reversal has occurred on this transaction due to your customer triggering a money-back guarantee. buyer-complaint: A reversal has occurred on this transaction due to a complaint about the transaction from your customer. refund: A reversal has occurred on this transaction because you have given the customer a refund. other: A reversal has occurred on this transaction due to a reason not listed above.
	 * - minOccurs : 0
	 * @var PayPalEnumReversalReasonCodeType
	 */
	public $ReasonCode;
	/**
	 * The HoldDecision
	 * Meta informations extracted from the WSDL
	 * - documentation : HoldDecision is returned in the response only if PaymentStatus is Completed-Funds-Held. The reason the funds are kept in pending balance: newsellerpaymenthold: The seller is new. paymenthold: A hold is placed on your transaction due to a reason not listed above.
	 * - minOccurs : 0
	 * @var string
	 */
	public $HoldDecision;
	/**
	 * The ShippingMethod
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping method selected by the user during check-out.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingMethod;
	/**
	 * The ProtectionEligibility
	 * Meta informations extracted from the WSDL
	 * - documentation : Protection Eligibility for this Transaction - None, SPP or ESPP
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProtectionEligibility;
	/**
	 * The ProtectionEligibilityType
	 * Meta informations extracted from the WSDL
	 * - documentation : Protection Eligibility details for this Transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProtectionEligibilityType;
	/**
	 * The ReceiptReferenceNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Receipt Reference Number for this Transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReceiptReferenceNumber;
	/**
	 * The POSTransactionType
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of POS transaction F: Forced post transaction. POS merchant can send transactions at a later point if connectivity is lost. S: Single call checkout, and this is to identify PayPal Lite API usage.
	 * @var PayPalEnumPOSTransactionCodeType
	 */
	public $POSTransactionType;
	/**
	 * The ShipAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of shipping charged on transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShipAmount;
	/**
	 * The ShipHandleAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of ship handling charged on transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShipHandleAmount;
	/**
	 * The ShipDiscount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of shipping discount on transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShipDiscount;
	/**
	 * The InsuranceAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of Insurance amount on transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $InsuranceAmount;
	/**
	 * The Subject
	 * Meta informations extracted from the WSDL
	 * - documentation : Subject as entered in the transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $Subject;
	/**
	 * The StoreID
	 * Meta informations extracted from the WSDL
	 * - documentation : StoreID as entered in the transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $StoreID;
	/**
	 * The TerminalID
	 * Meta informations extracted from the WSDL
	 * - documentation : TerminalID as entered in the transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $TerminalID;
	/**
	 * The SellerDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about the seller. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructSellerDetailsType
	 */
	public $SellerDetails;
	/**
	 * The PaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier and mandatory for each bucket in case of split payement
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The FMFDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Thes are filters that could result in accept/deny/pending action.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * The EnhancedPaymentInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : This will be enhanced info for the payment: Example: UATP details
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructEnhancedPaymentInfoType
	 */
	public $EnhancedPaymentInfo;
	/**
	 * The PaymentError
	 * Meta informations extracted from the WSDL
	 * - documentation : This will indicate the payment status for individual payment request in case of split payment
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructErrorType
	 */
	public $PaymentError;
	/**
	 * The InstrumentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of the payment instrument.
	 * - minOccurs : 0
	 * @var PayPalStructInstrumentDetailsType
	 */
	public $InstrumentDetails;
	/**
	 * The OfferDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Offer Details.
	 * - minOccurs : 0
	 * @var PayPalStructOfferDetailsType
	 */
	public $OfferDetails;
	/**
	 * The BinEligibility
	 * Meta informations extracted from the WSDL
	 * - documentation : This field indicates whether the credit card number used for this transaction is in a particular bin range registered with PayPal by the merchant. This filed is optional and will be present if merchant has a registered bin range. The value of this field will be "true" if merchant has a registered bin range and the credit card used in the transaction is within the registered bin range. The value of this field will be false if merchant has a registered bin range and credit card used in the transaction outside registered bin range or the transaction is not done using a credit card.
	 * - minOccurs : 0
	 * @var string
	 */
	public $BinEligibility;
	/**
	 * Constructor method for PaymentInfoType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param string $_ebayTransactionID
	 * @param string $_parentTransactionID
	 * @param string $_receiptID
	 * @param PayPalEnumPaymentTransactionCodeType $_transactionType
	 * @param PayPalEnumPaymentCodeType $_paymentType
	 * @param PayPalEnumRefundSourceCodeType $_refundSourceCodeType
	 * @param dateTime $_expectedeCheckClearDate
	 * @param dateTime $_paymentDate
	 * @param PayPalStructBasicAmountType $_grossAmount
	 * @param PayPalStructBasicAmountType $_feeAmount
	 * @param PayPalStructBasicAmountType $_settleAmount
	 * @param PayPalStructBasicAmountType $_taxAmount
	 * @param string $_exchangeRate
	 * @param PayPalEnumPaymentStatusCodeType $_paymentStatus
	 * @param PayPalEnumPendingStatusCodeType $_pendingReason
	 * @param PayPalEnumReversalReasonCodeType $_reasonCode
	 * @param string $_holdDecision
	 * @param string $_shippingMethod
	 * @param string $_protectionEligibility
	 * @param string $_protectionEligibilityType
	 * @param string $_receiptReferenceNumber
	 * @param PayPalEnumPOSTransactionCodeType $_pOSTransactionType
	 * @param string $_shipAmount
	 * @param string $_shipHandleAmount
	 * @param string $_shipDiscount
	 * @param string $_insuranceAmount
	 * @param string $_subject
	 * @param string $_storeID
	 * @param string $_terminalID
	 * @param PayPalStructSellerDetailsType $_sellerDetails
	 * @param string $_paymentRequestID
	 * @param PayPalStructFMFDetailsType $_fMFDetails
	 * @param PayPalStructEnhancedPaymentInfoType $_enhancedPaymentInfo
	 * @param PayPalStructErrorType $_paymentError
	 * @param PayPalStructInstrumentDetailsType $_instrumentDetails
	 * @param PayPalStructOfferDetailsType $_offerDetails
	 * @param string $_binEligibility
	 * @return PayPalStructPaymentInfoType
	 */
	public function __construct($_transactionID = NULL,$_ebayTransactionID = NULL,$_parentTransactionID = NULL,$_receiptID = NULL,$_transactionType = NULL,$_paymentType = NULL,$_refundSourceCodeType = NULL,$_expectedeCheckClearDate = NULL,$_paymentDate = NULL,$_grossAmount = NULL,$_feeAmount = NULL,$_settleAmount = NULL,$_taxAmount = NULL,$_exchangeRate = NULL,$_paymentStatus = NULL,$_pendingReason = NULL,$_reasonCode = NULL,$_holdDecision = NULL,$_shippingMethod = NULL,$_protectionEligibility = NULL,$_protectionEligibilityType = NULL,$_receiptReferenceNumber = NULL,$_pOSTransactionType = NULL,$_shipAmount = NULL,$_shipHandleAmount = NULL,$_shipDiscount = NULL,$_insuranceAmount = NULL,$_subject = NULL,$_storeID = NULL,$_terminalID = NULL,$_sellerDetails = NULL,$_paymentRequestID = NULL,$_fMFDetails = NULL,$_enhancedPaymentInfo = NULL,$_paymentError = NULL,$_instrumentDetails = NULL,$_offerDetails = NULL,$_binEligibility = NULL)
	{
		parent::__construct(array('TransactionID'=>$_transactionID,'EbayTransactionID'=>$_ebayTransactionID,'ParentTransactionID'=>$_parentTransactionID,'ReceiptID'=>$_receiptID,'TransactionType'=>$_transactionType,'PaymentType'=>$_paymentType,'RefundSourceCodeType'=>$_refundSourceCodeType,'ExpectedeCheckClearDate'=>$_expectedeCheckClearDate,'PaymentDate'=>$_paymentDate,'GrossAmount'=>$_grossAmount,'FeeAmount'=>$_feeAmount,'SettleAmount'=>$_settleAmount,'TaxAmount'=>$_taxAmount,'ExchangeRate'=>$_exchangeRate,'PaymentStatus'=>$_paymentStatus,'PendingReason'=>$_pendingReason,'ReasonCode'=>$_reasonCode,'HoldDecision'=>$_holdDecision,'ShippingMethod'=>$_shippingMethod,'ProtectionEligibility'=>$_protectionEligibility,'ProtectionEligibilityType'=>$_protectionEligibilityType,'ReceiptReferenceNumber'=>$_receiptReferenceNumber,'POSTransactionType'=>$_pOSTransactionType,'ShipAmount'=>$_shipAmount,'ShipHandleAmount'=>$_shipHandleAmount,'ShipDiscount'=>$_shipDiscount,'InsuranceAmount'=>$_insuranceAmount,'Subject'=>$_subject,'StoreID'=>$_storeID,'TerminalID'=>$_terminalID,'SellerDetails'=>$_sellerDetails,'PaymentRequestID'=>$_paymentRequestID,'FMFDetails'=>$_fMFDetails,'EnhancedPaymentInfo'=>$_enhancedPaymentInfo,'PaymentError'=>$_paymentError,'InstrumentDetails'=>$_instrumentDetails,'OfferDetails'=>$_offerDetails,'BinEligibility'=>$_binEligibility));
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
	 * Get EbayTransactionID value
	 * @return string|null
	 */
	public function getEbayTransactionID()
	{
		return $this->EbayTransactionID;
	}
	/**
	 * Set EbayTransactionID value
	 * @param string $_ebayTransactionID the EbayTransactionID
	 * @return string
	 */
	public function setEbayTransactionID($_ebayTransactionID)
	{
		return ($this->EbayTransactionID = $_ebayTransactionID);
	}
	/**
	 * Get ParentTransactionID value
	 * @return string|null
	 */
	public function getParentTransactionID()
	{
		return $this->ParentTransactionID;
	}
	/**
	 * Set ParentTransactionID value
	 * @param string $_parentTransactionID the ParentTransactionID
	 * @return string
	 */
	public function setParentTransactionID($_parentTransactionID)
	{
		return ($this->ParentTransactionID = $_parentTransactionID);
	}
	/**
	 * Get ReceiptID value
	 * @return string|null
	 */
	public function getReceiptID()
	{
		return $this->ReceiptID;
	}
	/**
	 * Set ReceiptID value
	 * @param string $_receiptID the ReceiptID
	 * @return string
	 */
	public function setReceiptID($_receiptID)
	{
		return ($this->ReceiptID = $_receiptID);
	}
	/**
	 * Get TransactionType value
	 * @return PayPalEnumPaymentTransactionCodeType|null
	 */
	public function getTransactionType()
	{
		return $this->TransactionType;
	}
	/**
	 * Set TransactionType value
	 * @uses PayPalEnumPaymentTransactionCodeType::valueIsValid()
	 * @param PayPalEnumPaymentTransactionCodeType $_transactionType the TransactionType
	 * @return PayPalEnumPaymentTransactionCodeType
	 */
	public function setTransactionType($_transactionType)
	{
		if(!PayPalEnumPaymentTransactionCodeType::valueIsValid($_transactionType))
		{
			return false;
		}
		return ($this->TransactionType = $_transactionType);
	}
	/**
	 * Get PaymentType value
	 * @return PayPalEnumPaymentCodeType|null
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set PaymentType value
	 * @uses PayPalEnumPaymentCodeType::valueIsValid()
	 * @param PayPalEnumPaymentCodeType $_paymentType the PaymentType
	 * @return PayPalEnumPaymentCodeType
	 */
	public function setPaymentType($_paymentType)
	{
		if(!PayPalEnumPaymentCodeType::valueIsValid($_paymentType))
		{
			return false;
		}
		return ($this->PaymentType = $_paymentType);
	}
	/**
	 * Get RefundSourceCodeType value
	 * @return PayPalEnumRefundSourceCodeType|null
	 */
	public function getRefundSourceCodeType()
	{
		return $this->RefundSourceCodeType;
	}
	/**
	 * Set RefundSourceCodeType value
	 * @uses PayPalEnumRefundSourceCodeType::valueIsValid()
	 * @param PayPalEnumRefundSourceCodeType $_refundSourceCodeType the RefundSourceCodeType
	 * @return PayPalEnumRefundSourceCodeType
	 */
	public function setRefundSourceCodeType($_refundSourceCodeType)
	{
		if(!PayPalEnumRefundSourceCodeType::valueIsValid($_refundSourceCodeType))
		{
			return false;
		}
		return ($this->RefundSourceCodeType = $_refundSourceCodeType);
	}
	/**
	 * Get ExpectedeCheckClearDate value
	 * @return dateTime|null
	 */
	public function getExpectedeCheckClearDate()
	{
		return $this->ExpectedeCheckClearDate;
	}
	/**
	 * Set ExpectedeCheckClearDate value
	 * @param dateTime $_expectedeCheckClearDate the ExpectedeCheckClearDate
	 * @return dateTime
	 */
	public function setExpectedeCheckClearDate($_expectedeCheckClearDate)
	{
		return ($this->ExpectedeCheckClearDate = $_expectedeCheckClearDate);
	}
	/**
	 * Get PaymentDate value
	 * @return dateTime|null
	 */
	public function getPaymentDate()
	{
		return $this->PaymentDate;
	}
	/**
	 * Set PaymentDate value
	 * @param dateTime $_paymentDate the PaymentDate
	 * @return dateTime
	 */
	public function setPaymentDate($_paymentDate)
	{
		return ($this->PaymentDate = $_paymentDate);
	}
	/**
	 * Get GrossAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getGrossAmount()
	{
		return $this->GrossAmount;
	}
	/**
	 * Set GrossAmount value
	 * @param PayPalStructBasicAmountType $_grossAmount the GrossAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setGrossAmount($_grossAmount)
	{
		return ($this->GrossAmount = $_grossAmount);
	}
	/**
	 * Get FeeAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getFeeAmount()
	{
		return $this->FeeAmount;
	}
	/**
	 * Set FeeAmount value
	 * @param PayPalStructBasicAmountType $_feeAmount the FeeAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setFeeAmount($_feeAmount)
	{
		return ($this->FeeAmount = $_feeAmount);
	}
	/**
	 * Get SettleAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getSettleAmount()
	{
		return $this->SettleAmount;
	}
	/**
	 * Set SettleAmount value
	 * @param PayPalStructBasicAmountType $_settleAmount the SettleAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setSettleAmount($_settleAmount)
	{
		return ($this->SettleAmount = $_settleAmount);
	}
	/**
	 * Get TaxAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set TaxAmount value
	 * @param PayPalStructBasicAmountType $_taxAmount the TaxAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxAmount($_taxAmount)
	{
		return ($this->TaxAmount = $_taxAmount);
	}
	/**
	 * Get ExchangeRate value
	 * @return string|null
	 */
	public function getExchangeRate()
	{
		return $this->ExchangeRate;
	}
	/**
	 * Set ExchangeRate value
	 * @param string $_exchangeRate the ExchangeRate
	 * @return string
	 */
	public function setExchangeRate($_exchangeRate)
	{
		return ($this->ExchangeRate = $_exchangeRate);
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
	 * Get ReasonCode value
	 * @return PayPalEnumReversalReasonCodeType|null
	 */
	public function getReasonCode()
	{
		return $this->ReasonCode;
	}
	/**
	 * Set ReasonCode value
	 * @uses PayPalEnumReversalReasonCodeType::valueIsValid()
	 * @param PayPalEnumReversalReasonCodeType $_reasonCode the ReasonCode
	 * @return PayPalEnumReversalReasonCodeType
	 */
	public function setReasonCode($_reasonCode)
	{
		if(!PayPalEnumReversalReasonCodeType::valueIsValid($_reasonCode))
		{
			return false;
		}
		return ($this->ReasonCode = $_reasonCode);
	}
	/**
	 * Get HoldDecision value
	 * @return string|null
	 */
	public function getHoldDecision()
	{
		return $this->HoldDecision;
	}
	/**
	 * Set HoldDecision value
	 * @param string $_holdDecision the HoldDecision
	 * @return string
	 */
	public function setHoldDecision($_holdDecision)
	{
		return ($this->HoldDecision = $_holdDecision);
	}
	/**
	 * Get ShippingMethod value
	 * @return string|null
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ShippingMethod value
	 * @param string $_shippingMethod the ShippingMethod
	 * @return string
	 */
	public function setShippingMethod($_shippingMethod)
	{
		return ($this->ShippingMethod = $_shippingMethod);
	}
	/**
	 * Get ProtectionEligibility value
	 * @return string|null
	 */
	public function getProtectionEligibility()
	{
		return $this->ProtectionEligibility;
	}
	/**
	 * Set ProtectionEligibility value
	 * @param string $_protectionEligibility the ProtectionEligibility
	 * @return string
	 */
	public function setProtectionEligibility($_protectionEligibility)
	{
		return ($this->ProtectionEligibility = $_protectionEligibility);
	}
	/**
	 * Get ProtectionEligibilityType value
	 * @return string|null
	 */
	public function getProtectionEligibilityType()
	{
		return $this->ProtectionEligibilityType;
	}
	/**
	 * Set ProtectionEligibilityType value
	 * @param string $_protectionEligibilityType the ProtectionEligibilityType
	 * @return string
	 */
	public function setProtectionEligibilityType($_protectionEligibilityType)
	{
		return ($this->ProtectionEligibilityType = $_protectionEligibilityType);
	}
	/**
	 * Get ReceiptReferenceNumber value
	 * @return string|null
	 */
	public function getReceiptReferenceNumber()
	{
		return $this->ReceiptReferenceNumber;
	}
	/**
	 * Set ReceiptReferenceNumber value
	 * @param string $_receiptReferenceNumber the ReceiptReferenceNumber
	 * @return string
	 */
	public function setReceiptReferenceNumber($_receiptReferenceNumber)
	{
		return ($this->ReceiptReferenceNumber = $_receiptReferenceNumber);
	}
	/**
	 * Get POSTransactionType value
	 * @return PayPalEnumPOSTransactionCodeType|null
	 */
	public function getPOSTransactionType()
	{
		return $this->POSTransactionType;
	}
	/**
	 * Set POSTransactionType value
	 * @uses PayPalEnumPOSTransactionCodeType::valueIsValid()
	 * @param PayPalEnumPOSTransactionCodeType $_pOSTransactionType the POSTransactionType
	 * @return PayPalEnumPOSTransactionCodeType
	 */
	public function setPOSTransactionType($_pOSTransactionType)
	{
		if(!PayPalEnumPOSTransactionCodeType::valueIsValid($_pOSTransactionType))
		{
			return false;
		}
		return ($this->POSTransactionType = $_pOSTransactionType);
	}
	/**
	 * Get ShipAmount value
	 * @return string|null
	 */
	public function getShipAmount()
	{
		return $this->ShipAmount;
	}
	/**
	 * Set ShipAmount value
	 * @param string $_shipAmount the ShipAmount
	 * @return string
	 */
	public function setShipAmount($_shipAmount)
	{
		return ($this->ShipAmount = $_shipAmount);
	}
	/**
	 * Get ShipHandleAmount value
	 * @return string|null
	 */
	public function getShipHandleAmount()
	{
		return $this->ShipHandleAmount;
	}
	/**
	 * Set ShipHandleAmount value
	 * @param string $_shipHandleAmount the ShipHandleAmount
	 * @return string
	 */
	public function setShipHandleAmount($_shipHandleAmount)
	{
		return ($this->ShipHandleAmount = $_shipHandleAmount);
	}
	/**
	 * Get ShipDiscount value
	 * @return string|null
	 */
	public function getShipDiscount()
	{
		return $this->ShipDiscount;
	}
	/**
	 * Set ShipDiscount value
	 * @param string $_shipDiscount the ShipDiscount
	 * @return string
	 */
	public function setShipDiscount($_shipDiscount)
	{
		return ($this->ShipDiscount = $_shipDiscount);
	}
	/**
	 * Get InsuranceAmount value
	 * @return string|null
	 */
	public function getInsuranceAmount()
	{
		return $this->InsuranceAmount;
	}
	/**
	 * Set InsuranceAmount value
	 * @param string $_insuranceAmount the InsuranceAmount
	 * @return string
	 */
	public function setInsuranceAmount($_insuranceAmount)
	{
		return ($this->InsuranceAmount = $_insuranceAmount);
	}
	/**
	 * Get Subject value
	 * @return string|null
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set Subject value
	 * @param string $_subject the Subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->Subject = $_subject);
	}
	/**
	 * Get StoreID value
	 * @return string|null
	 */
	public function getStoreID()
	{
		return $this->StoreID;
	}
	/**
	 * Set StoreID value
	 * @param string $_storeID the StoreID
	 * @return string
	 */
	public function setStoreID($_storeID)
	{
		return ($this->StoreID = $_storeID);
	}
	/**
	 * Get TerminalID value
	 * @return string|null
	 */
	public function getTerminalID()
	{
		return $this->TerminalID;
	}
	/**
	 * Set TerminalID value
	 * @param string $_terminalID the TerminalID
	 * @return string
	 */
	public function setTerminalID($_terminalID)
	{
		return ($this->TerminalID = $_terminalID);
	}
	/**
	 * Get SellerDetails value
	 * @return PayPalStructSellerDetailsType|null
	 */
	public function getSellerDetails()
	{
		return $this->SellerDetails;
	}
	/**
	 * Set SellerDetails value
	 * @param PayPalStructSellerDetailsType $_sellerDetails the SellerDetails
	 * @return PayPalStructSellerDetailsType
	 */
	public function setSellerDetails($_sellerDetails)
	{
		return ($this->SellerDetails = $_sellerDetails);
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
	 * Get EnhancedPaymentInfo value
	 * @return PayPalStructEnhancedPaymentInfoType|null
	 */
	public function getEnhancedPaymentInfo()
	{
		return $this->EnhancedPaymentInfo;
	}
	/**
	 * Set EnhancedPaymentInfo value
	 * @param PayPalStructEnhancedPaymentInfoType $_enhancedPaymentInfo the EnhancedPaymentInfo
	 * @return PayPalStructEnhancedPaymentInfoType
	 */
	public function setEnhancedPaymentInfo($_enhancedPaymentInfo)
	{
		return ($this->EnhancedPaymentInfo = $_enhancedPaymentInfo);
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
	 * Get InstrumentDetails value
	 * @return PayPalStructInstrumentDetailsType|null
	 */
	public function getInstrumentDetails()
	{
		return $this->InstrumentDetails;
	}
	/**
	 * Set InstrumentDetails value
	 * @param PayPalStructInstrumentDetailsType $_instrumentDetails the InstrumentDetails
	 * @return PayPalStructInstrumentDetailsType
	 */
	public function setInstrumentDetails($_instrumentDetails)
	{
		return ($this->InstrumentDetails = $_instrumentDetails);
	}
	/**
	 * Get OfferDetails value
	 * @return PayPalStructOfferDetailsType|null
	 */
	public function getOfferDetails()
	{
		return $this->OfferDetails;
	}
	/**
	 * Set OfferDetails value
	 * @param PayPalStructOfferDetailsType $_offerDetails the OfferDetails
	 * @return PayPalStructOfferDetailsType
	 */
	public function setOfferDetails($_offerDetails)
	{
		return ($this->OfferDetails = $_offerDetails);
	}
	/**
	 * Get BinEligibility value
	 * @return string|null
	 */
	public function getBinEligibility()
	{
		return $this->BinEligibility;
	}
	/**
	 * Set BinEligibility value
	 * @param string $_binEligibility the BinEligibility
	 * @return string
	 */
	public function setBinEligibility($_binEligibility)
	{
		return ($this->BinEligibility = $_binEligibility);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentInfoType
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