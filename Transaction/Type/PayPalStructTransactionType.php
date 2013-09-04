<?php
/**
 * File for class PayPalStructTransactionType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTransactionType originally named TransactionType
 * Documentation : Contains information about a single transaction. A transaction contains information about the sale of a particular item. The system creates a transaction when a buyer has made a purchase (Fixed Price items) or is the winning bidder (BIN and auction items). A listing can be associated with one or more transactions in these cases: Multi-Item Fixed Price Listings Dutch Auction Listings A listing is associated with a single transaction in these cases: Single-Item Fixed Price Listings Single-Item Auction Listings The amount the buyer paid for the item or agreed to pay, depending on how far into the checkout process the item is. If the seller allowed the buyer to change the item total, the buyer is able to change the total until the time that the transaction's status moves to Complete. Determine whether the buyer changed the amount by calling GetSellerTransactions or GetSellerTransactions and comparing the AmountPaid value to what the seller expected. For Motors items, AmountPaid is the amount paid by the buyer for the deposit. Includes shipping payment data. Unique identifier for a transaction. Returns 0 when Type=1 (Chinese auction). Typically, an ItemID and a TransactionID uniquely identify a checkout transaction. Unique identifier for an authorization.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTransactionType extends PayPalWsdlClass
{
	/**
	 * The AmountPaid
	 * @var PayPalStructAmountType
	 */
	public $AmountPaid;
	/**
	 * The Buyer
	 * Meta informations extracted from the WSDL
	 * - documentation : Container for buyer data.
	 * - minOccurs : 0
	 * @var PayPalStructUserType
	 */
	public $Buyer;
	/**
	 * The ShippingDetails
	 * @var PayPalStructShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ConvertedAmountPaid
	 * Meta informations extracted from the WSDL
	 * - documentation : Value returned in the Transaction/AmountPaid element, converted to the currency indicated by SiteCurrency.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ConvertedAmountPaid;
	/**
	 * The ConvertedTransactionPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Value returned in the Transaction/TransactionPrice element, converted to the currency indicated by SiteCurrency.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ConvertedTransactionPrice;
	/**
	 * The CreatedDate
	 * Meta informations extracted from the WSDL
	 * - documentation : For fixed-price, Stores, and BIN items indicates when the purchase (or BIN) occurred. For all other item types indicates when the transaction was created (the time when checkout was initiated).
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * The DepositType
	 * Meta informations extracted from the WSDL
	 * - documentation : Deposit type for Motors items. If item is not a Motors item, then returns a DepositType of None. Possible values: None Other Method Fast Deposit
	 * - minOccurs : 0
	 * @var PayPalEnumDepositTypeCodeType
	 */
	public $DepositType;
	/**
	 * The Item
	 * Meta informations extracted from the WSDL
	 * - documentation : Item info associated with the transaction.
	 * - minOccurs : 0
	 * @var PayPalStructItemType
	 */
	public $Item;
	/**
	 * The QuantityPurchased
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the number of individual items the buyer purchased in the transaction.
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantityPurchased;
	/**
	 * The ShippingHandlingTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping cost totals shown to user (for both flat and calculated rates).
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ShippingHandlingTotal;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : Container node for transaction status data.
	 * - minOccurs : 0
	 * @var PayPalStructTransactionStatusType
	 */
	public $Status;
	/**
	 * The TransactionID
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The AuthorizationID
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The TransactionPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Price of the item, before shipping and sales tax. For Motors, TransactionPrice is the deposit amount.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $TransactionPrice;
	/**
	 * The VATPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : VAT rate for the item, if the item price includes the VAT rate. Specify the VATPercent if you want include the net price in addition to the gross price in the listing. VAT rates vary depending on the item and on the user's country of residence; therefore a business seller is responsible for entering the correct VAT rate (it will not be calculated by eBay).
	 * - minOccurs : 0
	 * @var decimal
	 */
	public $VATPercent;
	/**
	 * Constructor method for TransactionType
	 * @see parent::__construct()
	 * @param PayPalStructAmountType $_amountPaid
	 * @param PayPalStructUserType $_buyer
	 * @param PayPalStructShippingDetailsType $_shippingDetails
	 * @param PayPalStructAmountType $_convertedAmountPaid
	 * @param PayPalStructAmountType $_convertedTransactionPrice
	 * @param dateTime $_createdDate
	 * @param PayPalEnumDepositTypeCodeType $_depositType
	 * @param PayPalStructItemType $_item
	 * @param int $_quantityPurchased
	 * @param PayPalStructAmountType $_shippingHandlingTotal
	 * @param PayPalStructTransactionStatusType $_status
	 * @param string $_transactionID
	 * @param string $_authorizationID
	 * @param PayPalStructAmountType $_transactionPrice
	 * @param decimal $_vATPercent
	 * @return PayPalStructTransactionType
	 */
	public function __construct($_amountPaid = NULL,$_buyer = NULL,$_shippingDetails = NULL,$_convertedAmountPaid = NULL,$_convertedTransactionPrice = NULL,$_createdDate = NULL,$_depositType = NULL,$_item = NULL,$_quantityPurchased = NULL,$_shippingHandlingTotal = NULL,$_status = NULL,$_transactionID = NULL,$_authorizationID = NULL,$_transactionPrice = NULL,$_vATPercent = NULL)
	{
		parent::__construct(array('AmountPaid'=>$_amountPaid,'Buyer'=>$_buyer,'ShippingDetails'=>$_shippingDetails,'ConvertedAmountPaid'=>$_convertedAmountPaid,'ConvertedTransactionPrice'=>$_convertedTransactionPrice,'CreatedDate'=>$_createdDate,'DepositType'=>$_depositType,'Item'=>$_item,'QuantityPurchased'=>$_quantityPurchased,'ShippingHandlingTotal'=>$_shippingHandlingTotal,'Status'=>$_status,'TransactionID'=>$_transactionID,'AuthorizationID'=>$_authorizationID,'TransactionPrice'=>$_transactionPrice,'VATPercent'=>$_vATPercent));
	}
	/**
	 * Get AmountPaid value
	 * @return PayPalStructAmountType|null
	 */
	public function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * Set AmountPaid value
	 * @param PayPalStructAmountType $_amountPaid the AmountPaid
	 * @return PayPalStructAmountType
	 */
	public function setAmountPaid($_amountPaid)
	{
		return ($this->AmountPaid = $_amountPaid);
	}
	/**
	 * Get Buyer value
	 * @return PayPalStructUserType|null
	 */
	public function getBuyer()
	{
		return $this->Buyer;
	}
	/**
	 * Set Buyer value
	 * @param PayPalStructUserType $_buyer the Buyer
	 * @return PayPalStructUserType
	 */
	public function setBuyer($_buyer)
	{
		return ($this->Buyer = $_buyer);
	}
	/**
	 * Get ShippingDetails value
	 * @return PayPalStructShippingDetailsType|null
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ShippingDetails value
	 * @param PayPalStructShippingDetailsType $_shippingDetails the ShippingDetails
	 * @return PayPalStructShippingDetailsType
	 */
	public function setShippingDetails($_shippingDetails)
	{
		return ($this->ShippingDetails = $_shippingDetails);
	}
	/**
	 * Get ConvertedAmountPaid value
	 * @return PayPalStructAmountType|null
	 */
	public function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}
	/**
	 * Set ConvertedAmountPaid value
	 * @param PayPalStructAmountType $_convertedAmountPaid the ConvertedAmountPaid
	 * @return PayPalStructAmountType
	 */
	public function setConvertedAmountPaid($_convertedAmountPaid)
	{
		return ($this->ConvertedAmountPaid = $_convertedAmountPaid);
	}
	/**
	 * Get ConvertedTransactionPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}
	/**
	 * Set ConvertedTransactionPrice value
	 * @param PayPalStructAmountType $_convertedTransactionPrice the ConvertedTransactionPrice
	 * @return PayPalStructAmountType
	 */
	public function setConvertedTransactionPrice($_convertedTransactionPrice)
	{
		return ($this->ConvertedTransactionPrice = $_convertedTransactionPrice);
	}
	/**
	 * Get CreatedDate value
	 * @return dateTime|null
	 */
	public function getCreatedDate()
	{
		return $this->CreatedDate;
	}
	/**
	 * Set CreatedDate value
	 * @param dateTime $_createdDate the CreatedDate
	 * @return dateTime
	 */
	public function setCreatedDate($_createdDate)
	{
		return ($this->CreatedDate = $_createdDate);
	}
	/**
	 * Get DepositType value
	 * @return PayPalEnumDepositTypeCodeType|null
	 */
	public function getDepositType()
	{
		return $this->DepositType;
	}
	/**
	 * Set DepositType value
	 * @uses PayPalEnumDepositTypeCodeType::valueIsValid()
	 * @param PayPalEnumDepositTypeCodeType $_depositType the DepositType
	 * @return PayPalEnumDepositTypeCodeType
	 */
	public function setDepositType($_depositType)
	{
		if(!PayPalEnumDepositTypeCodeType::valueIsValid($_depositType))
		{
			return false;
		}
		return ($this->DepositType = $_depositType);
	}
	/**
	 * Get Item value
	 * @return PayPalStructItemType|null
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set Item value
	 * @param PayPalStructItemType $_item the Item
	 * @return PayPalStructItemType
	 */
	public function setItem($_item)
	{
		return ($this->Item = $_item);
	}
	/**
	 * Get QuantityPurchased value
	 * @return int|null
	 */
	public function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}
	/**
	 * Set QuantityPurchased value
	 * @param int $_quantityPurchased the QuantityPurchased
	 * @return int
	 */
	public function setQuantityPurchased($_quantityPurchased)
	{
		return ($this->QuantityPurchased = $_quantityPurchased);
	}
	/**
	 * Get ShippingHandlingTotal value
	 * @return PayPalStructAmountType|null
	 */
	public function getShippingHandlingTotal()
	{
		return $this->ShippingHandlingTotal;
	}
	/**
	 * Set ShippingHandlingTotal value
	 * @param PayPalStructAmountType $_shippingHandlingTotal the ShippingHandlingTotal
	 * @return PayPalStructAmountType
	 */
	public function setShippingHandlingTotal($_shippingHandlingTotal)
	{
		return ($this->ShippingHandlingTotal = $_shippingHandlingTotal);
	}
	/**
	 * Get Status value
	 * @return PayPalStructTransactionStatusType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @param PayPalStructTransactionStatusType $_status the Status
	 * @return PayPalStructTransactionStatusType
	 */
	public function setStatus($_status)
	{
		return ($this->Status = $_status);
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
	 * Get AuthorizationID value
	 * @return string|null
	 */
	public function getAuthorizationID()
	{
		return $this->AuthorizationID;
	}
	/**
	 * Set AuthorizationID value
	 * @param string $_authorizationID the AuthorizationID
	 * @return string
	 */
	public function setAuthorizationID($_authorizationID)
	{
		return ($this->AuthorizationID = $_authorizationID);
	}
	/**
	 * Get TransactionPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}
	/**
	 * Set TransactionPrice value
	 * @param PayPalStructAmountType $_transactionPrice the TransactionPrice
	 * @return PayPalStructAmountType
	 */
	public function setTransactionPrice($_transactionPrice)
	{
		return ($this->TransactionPrice = $_transactionPrice);
	}
	/**
	 * Get VATPercent value
	 * @return decimal|null
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * Set VATPercent value
	 * @param decimal $_vATPercent the VATPercent
	 * @return decimal
	 */
	public function setVATPercent($_vATPercent)
	{
		return ($this->VATPercent = $_vATPercent);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTransactionType
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