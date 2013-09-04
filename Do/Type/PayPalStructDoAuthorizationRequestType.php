<?php
/**
 * File for class PayPalStructDoAuthorizationRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoAuthorizationRequestType originally named DoAuthorizationRequestType
 * Documentation : Address the order will be shipped to. Optional Information about the individual purchased items
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoAuthorizationRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of the order’s transaction identification number returned by a PayPal product. Required Character length and limits: 19 single-byte characters maximum
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount to authorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The TransactionEntity
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumTransactionEntityType
	 */
	public $TransactionEntity;
	/**
	 * The ShipToAddress
	 * @var PayPalStructAddressType
	 */
	public $ShipToAddress;
	/**
	 * The PaymentDetailsItem
	 * @var PayPalStructPaymentDetailsItemType
	 */
	public $PaymentDetailsItem;
	/**
	 * The ItemTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Sum of cost of all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemTotal;
	/**
	 * The ShippingTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total shipping costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingTotal;
	/**
	 * The HandlingTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total handling costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $HandlingTotal;
	/**
	 * The TaxTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Sum of tax for all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxTotal;
	/**
	 * The InsuranceTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total shipping insurance costs for this order. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $InsuranceTotal;
	/**
	 * The ShippingDiscount
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping discount for this order, specified as a negative number. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingDiscount;
	/**
	 * The OrderDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OrderDescription;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : A free-form field for your own use. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
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
	 * The IPAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : IP Address of the buyer
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $IPAddress;
	/**
	 * Constructor method for DoAuthorizationRequestType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalEnumTransactionEntityType $_transactionEntity
	 * @param PayPalStructAddressType $_shipToAddress
	 * @param PayPalStructPaymentDetailsItemType $_paymentDetailsItem
	 * @param PayPalStructBasicAmountType $_itemTotal
	 * @param PayPalStructBasicAmountType $_shippingTotal
	 * @param PayPalStructBasicAmountType $_handlingTotal
	 * @param PayPalStructBasicAmountType $_taxTotal
	 * @param PayPalStructBasicAmountType $_insuranceTotal
	 * @param PayPalStructBasicAmountType $_shippingDiscount
	 * @param string $_orderDescription
	 * @param string $_custom
	 * @param string $_msgSubID
	 * @param string $_iPAddress
	 * @return PayPalStructDoAuthorizationRequestType
	 */
	public function __construct($_transactionID,$_amount,$_transactionEntity = NULL,$_shipToAddress = NULL,$_paymentDetailsItem = NULL,$_itemTotal = NULL,$_shippingTotal = NULL,$_handlingTotal = NULL,$_taxTotal = NULL,$_insuranceTotal = NULL,$_shippingDiscount = NULL,$_orderDescription = NULL,$_custom = NULL,$_msgSubID = NULL,$_iPAddress = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'Amount'=>$_amount,'TransactionEntity'=>$_transactionEntity,'ShipToAddress'=>$_shipToAddress,'PaymentDetailsItem'=>$_paymentDetailsItem,'ItemTotal'=>$_itemTotal,'ShippingTotal'=>$_shippingTotal,'HandlingTotal'=>$_handlingTotal,'TaxTotal'=>$_taxTotal,'InsuranceTotal'=>$_insuranceTotal,'ShippingDiscount'=>$_shippingDiscount,'OrderDescription'=>$_orderDescription,'Custom'=>$_custom,'MsgSubID'=>$_msgSubID,'IPAddress'=>$_iPAddress));
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
	 * Get TransactionEntity value
	 * @return PayPalEnumTransactionEntityType|null
	 */
	public function getTransactionEntity()
	{
		return $this->TransactionEntity;
	}
	/**
	 * Set TransactionEntity value
	 * @uses PayPalEnumTransactionEntityType::valueIsValid()
	 * @param PayPalEnumTransactionEntityType $_transactionEntity the TransactionEntity
	 * @return PayPalEnumTransactionEntityType
	 */
	public function setTransactionEntity($_transactionEntity)
	{
		if(!PayPalEnumTransactionEntityType::valueIsValid($_transactionEntity))
		{
			return false;
		}
		return ($this->TransactionEntity = $_transactionEntity);
	}
	/**
	 * Get ShipToAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getShipToAddress()
	{
		return $this->ShipToAddress;
	}
	/**
	 * Set ShipToAddress value
	 * @param PayPalStructAddressType $_shipToAddress the ShipToAddress
	 * @return PayPalStructAddressType
	 */
	public function setShipToAddress($_shipToAddress)
	{
		return ($this->ShipToAddress = $_shipToAddress);
	}
	/**
	 * Get PaymentDetailsItem value
	 * @return PayPalStructPaymentDetailsItemType|null
	 */
	public function getPaymentDetailsItem()
	{
		return $this->PaymentDetailsItem;
	}
	/**
	 * Set PaymentDetailsItem value
	 * @param PayPalStructPaymentDetailsItemType $_paymentDetailsItem the PaymentDetailsItem
	 * @return PayPalStructPaymentDetailsItemType
	 */
	public function setPaymentDetailsItem($_paymentDetailsItem)
	{
		return ($this->PaymentDetailsItem = $_paymentDetailsItem);
	}
	/**
	 * Get ItemTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getItemTotal()
	{
		return $this->ItemTotal;
	}
	/**
	 * Set ItemTotal value
	 * @param PayPalStructBasicAmountType $_itemTotal the ItemTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setItemTotal($_itemTotal)
	{
		return ($this->ItemTotal = $_itemTotal);
	}
	/**
	 * Get ShippingTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingTotal()
	{
		return $this->ShippingTotal;
	}
	/**
	 * Set ShippingTotal value
	 * @param PayPalStructBasicAmountType $_shippingTotal the ShippingTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingTotal($_shippingTotal)
	{
		return ($this->ShippingTotal = $_shippingTotal);
	}
	/**
	 * Get HandlingTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getHandlingTotal()
	{
		return $this->HandlingTotal;
	}
	/**
	 * Set HandlingTotal value
	 * @param PayPalStructBasicAmountType $_handlingTotal the HandlingTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setHandlingTotal($_handlingTotal)
	{
		return ($this->HandlingTotal = $_handlingTotal);
	}
	/**
	 * Get TaxTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxTotal()
	{
		return $this->TaxTotal;
	}
	/**
	 * Set TaxTotal value
	 * @param PayPalStructBasicAmountType $_taxTotal the TaxTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxTotal($_taxTotal)
	{
		return ($this->TaxTotal = $_taxTotal);
	}
	/**
	 * Get InsuranceTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getInsuranceTotal()
	{
		return $this->InsuranceTotal;
	}
	/**
	 * Set InsuranceTotal value
	 * @param PayPalStructBasicAmountType $_insuranceTotal the InsuranceTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setInsuranceTotal($_insuranceTotal)
	{
		return ($this->InsuranceTotal = $_insuranceTotal);
	}
	/**
	 * Get ShippingDiscount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}
	/**
	 * Set ShippingDiscount value
	 * @param PayPalStructBasicAmountType $_shippingDiscount the ShippingDiscount
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingDiscount($_shippingDiscount)
	{
		return ($this->ShippingDiscount = $_shippingDiscount);
	}
	/**
	 * Get OrderDescription value
	 * @return string|null
	 */
	public function getOrderDescription()
	{
		return $this->OrderDescription;
	}
	/**
	 * Set OrderDescription value
	 * @param string $_orderDescription the OrderDescription
	 * @return string
	 */
	public function setOrderDescription($_orderDescription)
	{
		return ($this->OrderDescription = $_orderDescription);
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
	 * Get IPAddress value
	 * @return string|null
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set IPAddress value
	 * @param string $_iPAddress the IPAddress
	 * @return string
	 */
	public function setIPAddress($_iPAddress)
	{
		return ($this->IPAddress = $_iPAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoAuthorizationRequestType
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