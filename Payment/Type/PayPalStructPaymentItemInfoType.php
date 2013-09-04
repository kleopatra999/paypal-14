<?php
/**
 * File for class PayPalStructPaymentItemInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentItemInfoType originally named PaymentItemInfoType
 * Documentation : PaymentItemInfoType Information about a PayPal item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentItemInfoType extends PayPalWsdlClass
{
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Invoice number you set in the original transaction. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom field you set in the original transaction. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The Memo
	 * Meta informations extracted from the WSDL
	 * - documentation : Memo entered by your customer in PayPal Website Payments note field. Character length and limitations: 255 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Memo;
	/**
	 * The SalesTax
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of tax charged on transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $SalesTax;
	/**
	 * The PaymentItem
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about the indivudal purchased item
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructPaymentItemType
	 */
	public $PaymentItem;
	/**
	 * The Subscription
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the transaction if it was created via PayPal Subcriptions
	 * - minOccurs : 0
	 * @var PayPalStructSubscriptionInfoType
	 */
	public $Subscription;
	/**
	 * The Auction
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the transaction if it was created via an auction
	 * - minOccurs : 0
	 * @var PayPalStructAuctionInfoType
	 */
	public $Auction;
	/**
	 * Constructor method for PaymentItemInfoType
	 * @see parent::__construct()
	 * @param string $_invoiceID
	 * @param string $_custom
	 * @param string $_memo
	 * @param string $_salesTax
	 * @param PayPalStructPaymentItemType $_paymentItem
	 * @param PayPalStructSubscriptionInfoType $_subscription
	 * @param PayPalStructAuctionInfoType $_auction
	 * @return PayPalStructPaymentItemInfoType
	 */
	public function __construct($_invoiceID = NULL,$_custom = NULL,$_memo = NULL,$_salesTax = NULL,$_paymentItem = NULL,$_subscription = NULL,$_auction = NULL)
	{
		parent::__construct(array('InvoiceID'=>$_invoiceID,'Custom'=>$_custom,'Memo'=>$_memo,'SalesTax'=>$_salesTax,'PaymentItem'=>$_paymentItem,'Subscription'=>$_subscription,'Auction'=>$_auction));
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
	 * Get Custom value
	 * @return string|null
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set Custom value
	 * @param string $_custom the Custom
	 * @return string
	 */
	public function setCustom($_custom)
	{
		return ($this->Custom = $_custom);
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
	 * Get SalesTax value
	 * @return string|null
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set SalesTax value
	 * @param string $_salesTax the SalesTax
	 * @return string
	 */
	public function setSalesTax($_salesTax)
	{
		return ($this->SalesTax = $_salesTax);
	}
	/**
	 * Get PaymentItem value
	 * @return PayPalStructPaymentItemType|null
	 */
	public function getPaymentItem()
	{
		return $this->PaymentItem;
	}
	/**
	 * Set PaymentItem value
	 * @param PayPalStructPaymentItemType $_paymentItem the PaymentItem
	 * @return PayPalStructPaymentItemType
	 */
	public function setPaymentItem($_paymentItem)
	{
		return ($this->PaymentItem = $_paymentItem);
	}
	/**
	 * Get Subscription value
	 * @return PayPalStructSubscriptionInfoType|null
	 */
	public function getSubscription()
	{
		return $this->Subscription;
	}
	/**
	 * Set Subscription value
	 * @param PayPalStructSubscriptionInfoType $_subscription the Subscription
	 * @return PayPalStructSubscriptionInfoType
	 */
	public function setSubscription($_subscription)
	{
		return ($this->Subscription = $_subscription);
	}
	/**
	 * Get Auction value
	 * @return PayPalStructAuctionInfoType|null
	 */
	public function getAuction()
	{
		return $this->Auction;
	}
	/**
	 * Set Auction value
	 * @param PayPalStructAuctionInfoType $_auction the Auction
	 * @return PayPalStructAuctionInfoType
	 */
	public function setAuction($_auction)
	{
		return ($this->Auction = $_auction);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentItemInfoType
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