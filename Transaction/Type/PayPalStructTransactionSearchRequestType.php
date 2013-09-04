<?php
/**
 * File for class PayPalStructTransactionSearchRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTransactionSearchRequestType originally named TransactionSearchRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTransactionSearchRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The StartDate
	 * Meta informations extracted from the WSDL
	 * - documentation : The earliest transaction date at which to start the search. No wildcards are allowed. Required
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations extracted from the WSDL
	 * - documentation : The latest transaction date to be included in the search Optional
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The Payer
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by the buyer's email address OptionalCharacter length and limitations: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Payer;
	/**
	 * The Receiver
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by the receiver's email address. If the merchant account has only one email, this is the primary email. Can also be a non-primary email.Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Receiver;
	/**
	 * The ReceiptID
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by the PayPal Account Optional receipt IDOptional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReceiptID;
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by the transaction ID. OptionalThe returned results are from the merchant's transaction records. Character length and limitations: 19 single-byte characters maximum
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The ProfileID
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by Recurring Payment Profile id. The ProfileID is returned as part of the CreateRecurringPaymentsProfile API response. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The PayerName
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by the buyer's name OptionalSalutation: 20 single-byte character limit.FirstName: 25 single-byte character limit.MiddleName: 25 single-byte character limit.LastName: 25 single-byte character limit.Suffix: 12 single-byte character limit.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructPersonNameType
	 */
	public $PayerName;
	/**
	 * The AuctionItemNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by item number of the purchased goods.OptionalTo search for purchased items not related to auctions, set the AuctionItemNumber element to the value of the HTML item_number variable set in the shopping cart for the original transaction.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $AuctionItemNumber;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by invoice identification key, as set by you for the original transaction. InvoiceID searches the invoice records for items sold by the merchant, not the items purchased. OptionalThe value for InvoiceID must exactly match an invoice identification number. No wildcards are allowed. Character length and limitations: 127 single-byte characters maximum
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The CardNumber
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CardNumber;
	/**
	 * The TransactionClass
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by classification of transaction. Some kinds of possible classes of transactions are not searchable with TransactionSearchRequest. You cannot search for bank transfer withdrawals, for example. OptionalAll: all transaction classifications.Sent: only payments sent.Received: only payments received.MassPay: only mass payments.MoneyRequest: only money requests.FundsAdded: only funds added to balance.FundsWithdrawn: only funds withdrawn from balance.Referral: only transactions involving referrals.Fee: only transactions involving fees.Subscription: only transactions involving subscriptions.Dividend: only transactions involving dividends.Billpay: only transactions involving BillPay Transactions.Refund: only transactions involving funds.CurrencyConversions: only transactions involving currency conversions.BalanceTransfer: only transactions involving balance transfers.Reversal: only transactions involving BillPay reversals.Shipping: only transactions involving UPS shipping fees.BalanceAffecting: only transactions that affect the account balance.ECheck: only transactions involving eCheckForcedPostTransaction: forced post transaction.NonReferencedRefunds: non-referenced refunds.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentTransactionClassCodeType
	 */
	public $TransactionClass;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by transaction amount OptionalYou must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The CurrencyCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by currency codeOptional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumCurrencyCodeType
	 */
	public $CurrencyCode;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : Search by transaction status OptionalPending: The payment is pending. The specific reason the payment is pending is returned by the GetTransactionDetails APIPendingReason element. For more information, see PendingReason.Processing: The payment is being processed.Success: The payment has been completed and the funds have been added successfully to your account balance.Denied: You denied the payment. This happens only if the payment was previously pending.Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentTransactionStatusCodeType
	 */
	public $Status;
	/**
	 * Constructor method for TransactionSearchRequestType
	 * @see parent::__construct()
	 * @param dateTime $_startDate
	 * @param dateTime $_endDate
	 * @param string $_payer
	 * @param string $_receiver
	 * @param string $_receiptID
	 * @param string $_transactionID
	 * @param string $_profileID
	 * @param PayPalStructPersonNameType $_payerName
	 * @param string $_auctionItemNumber
	 * @param string $_invoiceID
	 * @param string $_cardNumber
	 * @param PayPalEnumPaymentTransactionClassCodeType $_transactionClass
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalEnumCurrencyCodeType $_currencyCode
	 * @param PayPalEnumPaymentTransactionStatusCodeType $_status
	 * @return PayPalStructTransactionSearchRequestType
	 */
	public function __construct($_startDate,$_endDate = NULL,$_payer = NULL,$_receiver = NULL,$_receiptID = NULL,$_transactionID = NULL,$_profileID = NULL,$_payerName = NULL,$_auctionItemNumber = NULL,$_invoiceID = NULL,$_cardNumber = NULL,$_transactionClass = NULL,$_amount = NULL,$_currencyCode = NULL,$_status = NULL)
	{
		PayPalWsdlClass::__construct(array('StartDate'=>$_startDate,'EndDate'=>$_endDate,'Payer'=>$_payer,'Receiver'=>$_receiver,'ReceiptID'=>$_receiptID,'TransactionID'=>$_transactionID,'ProfileID'=>$_profileID,'PayerName'=>$_payerName,'AuctionItemNumber'=>$_auctionItemNumber,'InvoiceID'=>$_invoiceID,'CardNumber'=>$_cardNumber,'TransactionClass'=>$_transactionClass,'Amount'=>$_amount,'CurrencyCode'=>$_currencyCode,'Status'=>$_status));
	}
	/**
	 * Get StartDate value
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set StartDate value
	 * @param dateTime $_startDate the StartDate
	 * @return dateTime
	 */
	public function setStartDate($_startDate)
	{
		return ($this->StartDate = $_startDate);
	}
	/**
	 * Get EndDate value
	 * @return dateTime|null
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set EndDate value
	 * @param dateTime $_endDate the EndDate
	 * @return dateTime
	 */
	public function setEndDate($_endDate)
	{
		return ($this->EndDate = $_endDate);
	}
	/**
	 * Get Payer value
	 * @return string|null
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set Payer value
	 * @param string $_payer the Payer
	 * @return string
	 */
	public function setPayer($_payer)
	{
		return ($this->Payer = $_payer);
	}
	/**
	 * Get Receiver value
	 * @return string|null
	 */
	public function getReceiver()
	{
		return $this->Receiver;
	}
	/**
	 * Set Receiver value
	 * @param string $_receiver the Receiver
	 * @return string
	 */
	public function setReceiver($_receiver)
	{
		return ($this->Receiver = $_receiver);
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
	 * Get ProfileID value
	 * @return string|null
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileID value
	 * @param string $_profileID the ProfileID
	 * @return string
	 */
	public function setProfileID($_profileID)
	{
		return ($this->ProfileID = $_profileID);
	}
	/**
	 * Get PayerName value
	 * @return PayPalStructPersonNameType|null
	 */
	public function getPayerName()
	{
		return $this->PayerName;
	}
	/**
	 * Set PayerName value
	 * @param PayPalStructPersonNameType $_payerName the PayerName
	 * @return PayPalStructPersonNameType
	 */
	public function setPayerName($_payerName)
	{
		return ($this->PayerName = $_payerName);
	}
	/**
	 * Get AuctionItemNumber value
	 * @return string|null
	 */
	public function getAuctionItemNumber()
	{
		return $this->AuctionItemNumber;
	}
	/**
	 * Set AuctionItemNumber value
	 * @param string $_auctionItemNumber the AuctionItemNumber
	 * @return string
	 */
	public function setAuctionItemNumber($_auctionItemNumber)
	{
		return ($this->AuctionItemNumber = $_auctionItemNumber);
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
	 * Get CardNumber value
	 * @return string|null
	 */
	public function getCardNumber()
	{
		return $this->CardNumber;
	}
	/**
	 * Set CardNumber value
	 * @param string $_cardNumber the CardNumber
	 * @return string
	 */
	public function setCardNumber($_cardNumber)
	{
		return ($this->CardNumber = $_cardNumber);
	}
	/**
	 * Get TransactionClass value
	 * @return PayPalEnumPaymentTransactionClassCodeType|null
	 */
	public function getTransactionClass()
	{
		return $this->TransactionClass;
	}
	/**
	 * Set TransactionClass value
	 * @uses PayPalEnumPaymentTransactionClassCodeType::valueIsValid()
	 * @param PayPalEnumPaymentTransactionClassCodeType $_transactionClass the TransactionClass
	 * @return PayPalEnumPaymentTransactionClassCodeType
	 */
	public function setTransactionClass($_transactionClass)
	{
		if(!PayPalEnumPaymentTransactionClassCodeType::valueIsValid($_transactionClass))
		{
			return false;
		}
		return ($this->TransactionClass = $_transactionClass);
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
	 * Get CurrencyCode value
	 * @return PayPalEnumCurrencyCodeType|null
	 */
	public function getCurrencyCode()
	{
		return $this->CurrencyCode;
	}
	/**
	 * Set CurrencyCode value
	 * @uses PayPalEnumCurrencyCodeType::valueIsValid()
	 * @param PayPalEnumCurrencyCodeType $_currencyCode the CurrencyCode
	 * @return PayPalEnumCurrencyCodeType
	 */
	public function setCurrencyCode($_currencyCode)
	{
		if(!PayPalEnumCurrencyCodeType::valueIsValid($_currencyCode))
		{
			return false;
		}
		return ($this->CurrencyCode = $_currencyCode);
	}
	/**
	 * Get Status value
	 * @return PayPalEnumPaymentTransactionStatusCodeType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses PayPalEnumPaymentTransactionStatusCodeType::valueIsValid()
	 * @param PayPalEnumPaymentTransactionStatusCodeType $_status the Status
	 * @return PayPalEnumPaymentTransactionStatusCodeType
	 */
	public function setStatus($_status)
	{
		if(!PayPalEnumPaymentTransactionStatusCodeType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTransactionSearchRequestType
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