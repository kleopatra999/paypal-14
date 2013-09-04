<?php
/**
 * File for class PayPalStructPaymentItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentItemType originally named PaymentItemType
 * Documentation : PaymentItemType Information about a Payment Item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentItemType extends PayPalWsdlClass
{
	/**
	 * The EbayItemTxnId
	 * Meta informations extracted from the WSDL
	 * - documentation : eBay Auction Transaction ID of the Item Optional Character length and limitations: 255 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $EbayItemTxnId;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Item name set by you or entered by the customer. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Number
	 * Meta informations extracted from the WSDL
	 * - documentation : Item number set by you. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Number;
	/**
	 * The Quantity
	 * Meta informations extracted from the WSDL
	 * - documentation : Quantity set by you or entered by the customer. Character length and limitations: no limit
	 * - minOccurs : 0
	 * @var string
	 */
	public $Quantity;
	/**
	 * The SalesTax
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of tax charged on payment
	 * - minOccurs : 0
	 * @var string
	 */
	public $SalesTax;
	/**
	 * The ShippingAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of shipping charged on payment
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingAmount;
	/**
	 * The HandlingAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of handling charged on payment
	 * - minOccurs : 0
	 * @var string
	 */
	public $HandlingAmount;
	/**
	 * The InvoiceItemDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Invoice item details
	 * - minOccurs : 0
	 * @var PayPalStructInvoiceItemType
	 */
	public $InvoiceItemDetails;
	/**
	 * The CouponID
	 * Meta informations extracted from the WSDL
	 * - documentation : Coupon ID Number
	 * - minOccurs : 0
	 * @var string
	 */
	public $CouponID;
	/**
	 * The CouponAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount Value of The Coupon
	 * - minOccurs : 0
	 * @var string
	 */
	public $CouponAmount;
	/**
	 * The CouponAmountCurrency
	 * Meta informations extracted from the WSDL
	 * - documentation : Currency of the Coupon Amount
	 * - minOccurs : 0
	 * @var string
	 */
	public $CouponAmountCurrency;
	/**
	 * The LoyaltyCardDiscountAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of Discount on this Loyalty Card
	 * - minOccurs : 0
	 * @var string
	 */
	public $LoyaltyCardDiscountAmount;
	/**
	 * The LoyaltyCardDiscountCurrency
	 * Meta informations extracted from the WSDL
	 * - documentation : Currency of the Discount
	 * - minOccurs : 0
	 * @var string
	 */
	public $LoyaltyCardDiscountCurrency;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Cost of item
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The Options
	 * Meta informations extracted from the WSDL
	 * - documentation : Item options selected in PayPal shopping cart
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructOptionType
	 */
	public $Options;
	/**
	 * Constructor method for PaymentItemType
	 * @see parent::__construct()
	 * @param string $_ebayItemTxnId
	 * @param string $_name
	 * @param string $_number
	 * @param string $_quantity
	 * @param string $_salesTax
	 * @param string $_shippingAmount
	 * @param string $_handlingAmount
	 * @param PayPalStructInvoiceItemType $_invoiceItemDetails
	 * @param string $_couponID
	 * @param string $_couponAmount
	 * @param string $_couponAmountCurrency
	 * @param string $_loyaltyCardDiscountAmount
	 * @param string $_loyaltyCardDiscountCurrency
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalStructOptionType $_options
	 * @return PayPalStructPaymentItemType
	 */
	public function __construct($_ebayItemTxnId = NULL,$_name = NULL,$_number = NULL,$_quantity = NULL,$_salesTax = NULL,$_shippingAmount = NULL,$_handlingAmount = NULL,$_invoiceItemDetails = NULL,$_couponID = NULL,$_couponAmount = NULL,$_couponAmountCurrency = NULL,$_loyaltyCardDiscountAmount = NULL,$_loyaltyCardDiscountCurrency = NULL,$_amount = NULL,$_options = NULL)
	{
		parent::__construct(array('EbayItemTxnId'=>$_ebayItemTxnId,'Name'=>$_name,'Number'=>$_number,'Quantity'=>$_quantity,'SalesTax'=>$_salesTax,'ShippingAmount'=>$_shippingAmount,'HandlingAmount'=>$_handlingAmount,'InvoiceItemDetails'=>$_invoiceItemDetails,'CouponID'=>$_couponID,'CouponAmount'=>$_couponAmount,'CouponAmountCurrency'=>$_couponAmountCurrency,'LoyaltyCardDiscountAmount'=>$_loyaltyCardDiscountAmount,'LoyaltyCardDiscountCurrency'=>$_loyaltyCardDiscountCurrency,'Amount'=>$_amount,'Options'=>$_options));
	}
	/**
	 * Get EbayItemTxnId value
	 * @return string|null
	 */
	public function getEbayItemTxnId()
	{
		return $this->EbayItemTxnId;
	}
	/**
	 * Set EbayItemTxnId value
	 * @param string $_ebayItemTxnId the EbayItemTxnId
	 * @return string
	 */
	public function setEbayItemTxnId($_ebayItemTxnId)
	{
		return ($this->EbayItemTxnId = $_ebayItemTxnId);
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->Number;
	}
	/**
	 * Set Number value
	 * @param string $_number the Number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->Number = $_number);
	}
	/**
	 * Get Quantity value
	 * @return string|null
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Quantity value
	 * @param string $_quantity the Quantity
	 * @return string
	 */
	public function setQuantity($_quantity)
	{
		return ($this->Quantity = $_quantity);
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
	 * Get ShippingAmount value
	 * @return string|null
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set ShippingAmount value
	 * @param string $_shippingAmount the ShippingAmount
	 * @return string
	 */
	public function setShippingAmount($_shippingAmount)
	{
		return ($this->ShippingAmount = $_shippingAmount);
	}
	/**
	 * Get HandlingAmount value
	 * @return string|null
	 */
	public function getHandlingAmount()
	{
		return $this->HandlingAmount;
	}
	/**
	 * Set HandlingAmount value
	 * @param string $_handlingAmount the HandlingAmount
	 * @return string
	 */
	public function setHandlingAmount($_handlingAmount)
	{
		return ($this->HandlingAmount = $_handlingAmount);
	}
	/**
	 * Get InvoiceItemDetails value
	 * @return PayPalStructInvoiceItemType|null
	 */
	public function getInvoiceItemDetails()
	{
		return $this->InvoiceItemDetails;
	}
	/**
	 * Set InvoiceItemDetails value
	 * @param PayPalStructInvoiceItemType $_invoiceItemDetails the InvoiceItemDetails
	 * @return PayPalStructInvoiceItemType
	 */
	public function setInvoiceItemDetails($_invoiceItemDetails)
	{
		return ($this->InvoiceItemDetails = $_invoiceItemDetails);
	}
	/**
	 * Get CouponID value
	 * @return string|null
	 */
	public function getCouponID()
	{
		return $this->CouponID;
	}
	/**
	 * Set CouponID value
	 * @param string $_couponID the CouponID
	 * @return string
	 */
	public function setCouponID($_couponID)
	{
		return ($this->CouponID = $_couponID);
	}
	/**
	 * Get CouponAmount value
	 * @return string|null
	 */
	public function getCouponAmount()
	{
		return $this->CouponAmount;
	}
	/**
	 * Set CouponAmount value
	 * @param string $_couponAmount the CouponAmount
	 * @return string
	 */
	public function setCouponAmount($_couponAmount)
	{
		return ($this->CouponAmount = $_couponAmount);
	}
	/**
	 * Get CouponAmountCurrency value
	 * @return string|null
	 */
	public function getCouponAmountCurrency()
	{
		return $this->CouponAmountCurrency;
	}
	/**
	 * Set CouponAmountCurrency value
	 * @param string $_couponAmountCurrency the CouponAmountCurrency
	 * @return string
	 */
	public function setCouponAmountCurrency($_couponAmountCurrency)
	{
		return ($this->CouponAmountCurrency = $_couponAmountCurrency);
	}
	/**
	 * Get LoyaltyCardDiscountAmount value
	 * @return string|null
	 */
	public function getLoyaltyCardDiscountAmount()
	{
		return $this->LoyaltyCardDiscountAmount;
	}
	/**
	 * Set LoyaltyCardDiscountAmount value
	 * @param string $_loyaltyCardDiscountAmount the LoyaltyCardDiscountAmount
	 * @return string
	 */
	public function setLoyaltyCardDiscountAmount($_loyaltyCardDiscountAmount)
	{
		return ($this->LoyaltyCardDiscountAmount = $_loyaltyCardDiscountAmount);
	}
	/**
	 * Get LoyaltyCardDiscountCurrency value
	 * @return string|null
	 */
	public function getLoyaltyCardDiscountCurrency()
	{
		return $this->LoyaltyCardDiscountCurrency;
	}
	/**
	 * Set LoyaltyCardDiscountCurrency value
	 * @param string $_loyaltyCardDiscountCurrency the LoyaltyCardDiscountCurrency
	 * @return string
	 */
	public function setLoyaltyCardDiscountCurrency($_loyaltyCardDiscountCurrency)
	{
		return ($this->LoyaltyCardDiscountCurrency = $_loyaltyCardDiscountCurrency);
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
	 * Get Options value
	 * @return PayPalStructOptionType|null
	 */
	public function getOptions()
	{
		return $this->Options;
	}
	/**
	 * Set Options value
	 * @param PayPalStructOptionType $_options the Options
	 * @return PayPalStructOptionType
	 */
	public function setOptions($_options)
	{
		return ($this->Options = $_options);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentItemType
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