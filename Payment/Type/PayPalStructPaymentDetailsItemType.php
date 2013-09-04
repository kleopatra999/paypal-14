<?php
/**
 * File for class PayPalStructPaymentDetailsItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentDetailsItemType originally named PaymentDetailsItemType
 * Documentation : PaymentDetailsItemType Information about a Payment Item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentDetailsItemType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Item name. Optional Character length and limitations: 127 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Number
	 * Meta informations extracted from the WSDL
	 * - documentation : Item number. Optional Character length and limitations: 127 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Number;
	/**
	 * The Quantity
	 * Meta informations extracted from the WSDL
	 * - documentation : Item quantity. Optional Character length and limitations: Any positive integer
	 * - minOccurs : 0
	 * @var integer
	 */
	public $Quantity;
	/**
	 * The Tax
	 * Meta informations extracted from the WSDL
	 * - documentation : Item sales tax. Optional Character length and limitations: any valid currency amount; currency code is set the same as for OrderTotal.
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Tax;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Cost of item You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The EbayItemPaymentDetailsItem
	 * Meta informations extracted from the WSDL
	 * - documentation : Ebay specific details. Optional
	 * - minOccurs : 0
	 * @var PayPalStructEbayItemPaymentDetailsItemType
	 */
	public $EbayItemPaymentDetailsItem;
	/**
	 * The PromoCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Promotional financing code for item. Part of the Merchant Services Promotion Financing feature.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PromoCode;
	/**
	 * The ProductCategory
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumProductCategoryType
	 */
	public $ProductCategory;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : Item description. Optional Character length and limitations: 127 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The ItemWeight
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Item weight.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructMeasureType
	 */
	public $ItemWeight;
	/**
	 * The ItemLength
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Item length.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructMeasureType
	 */
	public $ItemLength;
	/**
	 * The ItemWidth
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Item width.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructMeasureType
	 */
	public $ItemWidth;
	/**
	 * The ItemHeight
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Item height.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructMeasureType
	 */
	public $ItemHeight;
	/**
	 * The ItemURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for the item. Optional Character length and limitations: no limit.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemURL;
	/**
	 * The EnhancedItemData
	 * Meta informations extracted from the WSDL
	 * - documentation : Enhanced data for each item in the cart. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructEnhancedItemDataType
	 */
	public $EnhancedItemData;
	/**
	 * The ItemCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : Item category - physical or digital. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumItemCategoryType
	 */
	public $ItemCategory;
	/**
	 * Constructor method for PaymentDetailsItemType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_number
	 * @param integer $_quantity
	 * @param PayPalStructBasicAmountType $_tax
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalStructEbayItemPaymentDetailsItemType $_ebayItemPaymentDetailsItem
	 * @param string $_promoCode
	 * @param PayPalEnumProductCategoryType $_productCategory
	 * @param string $_description
	 * @param PayPalStructMeasureType $_itemWeight
	 * @param PayPalStructMeasureType $_itemLength
	 * @param PayPalStructMeasureType $_itemWidth
	 * @param PayPalStructMeasureType $_itemHeight
	 * @param string $_itemURL
	 * @param PayPalStructEnhancedItemDataType $_enhancedItemData
	 * @param PayPalEnumItemCategoryType $_itemCategory
	 * @return PayPalStructPaymentDetailsItemType
	 */
	public function __construct($_name = NULL,$_number = NULL,$_quantity = NULL,$_tax = NULL,$_amount = NULL,$_ebayItemPaymentDetailsItem = NULL,$_promoCode = NULL,$_productCategory = NULL,$_description = NULL,$_itemWeight = NULL,$_itemLength = NULL,$_itemWidth = NULL,$_itemHeight = NULL,$_itemURL = NULL,$_enhancedItemData = NULL,$_itemCategory = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Number'=>$_number,'Quantity'=>$_quantity,'Tax'=>$_tax,'Amount'=>$_amount,'EbayItemPaymentDetailsItem'=>$_ebayItemPaymentDetailsItem,'PromoCode'=>$_promoCode,'ProductCategory'=>$_productCategory,'Description'=>$_description,'ItemWeight'=>$_itemWeight,'ItemLength'=>$_itemLength,'ItemWidth'=>$_itemWidth,'ItemHeight'=>$_itemHeight,'ItemURL'=>$_itemURL,'EnhancedItemData'=>$_enhancedItemData,'ItemCategory'=>$_itemCategory));
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
	 * @return integer|null
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Quantity value
	 * @param integer $_quantity the Quantity
	 * @return integer
	 */
	public function setQuantity($_quantity)
	{
		return ($this->Quantity = $_quantity);
	}
	/**
	 * Get Tax value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTax()
	{
		return $this->Tax;
	}
	/**
	 * Set Tax value
	 * @param PayPalStructBasicAmountType $_tax the Tax
	 * @return PayPalStructBasicAmountType
	 */
	public function setTax($_tax)
	{
		return ($this->Tax = $_tax);
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
	 * Get EbayItemPaymentDetailsItem value
	 * @return PayPalStructEbayItemPaymentDetailsItemType|null
	 */
	public function getEbayItemPaymentDetailsItem()
	{
		return $this->EbayItemPaymentDetailsItem;
	}
	/**
	 * Set EbayItemPaymentDetailsItem value
	 * @param PayPalStructEbayItemPaymentDetailsItemType $_ebayItemPaymentDetailsItem the EbayItemPaymentDetailsItem
	 * @return PayPalStructEbayItemPaymentDetailsItemType
	 */
	public function setEbayItemPaymentDetailsItem($_ebayItemPaymentDetailsItem)
	{
		return ($this->EbayItemPaymentDetailsItem = $_ebayItemPaymentDetailsItem);
	}
	/**
	 * Get PromoCode value
	 * @return string|null
	 */
	public function getPromoCode()
	{
		return $this->PromoCode;
	}
	/**
	 * Set PromoCode value
	 * @param string $_promoCode the PromoCode
	 * @return string
	 */
	public function setPromoCode($_promoCode)
	{
		return ($this->PromoCode = $_promoCode);
	}
	/**
	 * Get ProductCategory value
	 * @return PayPalEnumProductCategoryType|null
	 */
	public function getProductCategory()
	{
		return $this->ProductCategory;
	}
	/**
	 * Set ProductCategory value
	 * @uses PayPalEnumProductCategoryType::valueIsValid()
	 * @param PayPalEnumProductCategoryType $_productCategory the ProductCategory
	 * @return PayPalEnumProductCategoryType
	 */
	public function setProductCategory($_productCategory)
	{
		if(!PayPalEnumProductCategoryType::valueIsValid($_productCategory))
		{
			return false;
		}
		return ($this->ProductCategory = $_productCategory);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get ItemWeight value
	 * @return PayPalStructMeasureType|null
	 */
	public function getItemWeight()
	{
		return $this->ItemWeight;
	}
	/**
	 * Set ItemWeight value
	 * @param PayPalStructMeasureType $_itemWeight the ItemWeight
	 * @return PayPalStructMeasureType
	 */
	public function setItemWeight($_itemWeight)
	{
		return ($this->ItemWeight = $_itemWeight);
	}
	/**
	 * Get ItemLength value
	 * @return PayPalStructMeasureType|null
	 */
	public function getItemLength()
	{
		return $this->ItemLength;
	}
	/**
	 * Set ItemLength value
	 * @param PayPalStructMeasureType $_itemLength the ItemLength
	 * @return PayPalStructMeasureType
	 */
	public function setItemLength($_itemLength)
	{
		return ($this->ItemLength = $_itemLength);
	}
	/**
	 * Get ItemWidth value
	 * @return PayPalStructMeasureType|null
	 */
	public function getItemWidth()
	{
		return $this->ItemWidth;
	}
	/**
	 * Set ItemWidth value
	 * @param PayPalStructMeasureType $_itemWidth the ItemWidth
	 * @return PayPalStructMeasureType
	 */
	public function setItemWidth($_itemWidth)
	{
		return ($this->ItemWidth = $_itemWidth);
	}
	/**
	 * Get ItemHeight value
	 * @return PayPalStructMeasureType|null
	 */
	public function getItemHeight()
	{
		return $this->ItemHeight;
	}
	/**
	 * Set ItemHeight value
	 * @param PayPalStructMeasureType $_itemHeight the ItemHeight
	 * @return PayPalStructMeasureType
	 */
	public function setItemHeight($_itemHeight)
	{
		return ($this->ItemHeight = $_itemHeight);
	}
	/**
	 * Get ItemURL value
	 * @return string|null
	 */
	public function getItemURL()
	{
		return $this->ItemURL;
	}
	/**
	 * Set ItemURL value
	 * @param string $_itemURL the ItemURL
	 * @return string
	 */
	public function setItemURL($_itemURL)
	{
		return ($this->ItemURL = $_itemURL);
	}
	/**
	 * Get EnhancedItemData value
	 * @return PayPalStructEnhancedItemDataType|null
	 */
	public function getEnhancedItemData()
	{
		return $this->EnhancedItemData;
	}
	/**
	 * Set EnhancedItemData value
	 * @param PayPalStructEnhancedItemDataType $_enhancedItemData the EnhancedItemData
	 * @return PayPalStructEnhancedItemDataType
	 */
	public function setEnhancedItemData($_enhancedItemData)
	{
		return ($this->EnhancedItemData = $_enhancedItemData);
	}
	/**
	 * Get ItemCategory value
	 * @return PayPalEnumItemCategoryType|null
	 */
	public function getItemCategory()
	{
		return $this->ItemCategory;
	}
	/**
	 * Set ItemCategory value
	 * @uses PayPalEnumItemCategoryType::valueIsValid()
	 * @param PayPalEnumItemCategoryType $_itemCategory the ItemCategory
	 * @return PayPalEnumItemCategoryType
	 */
	public function setItemCategory($_itemCategory)
	{
		if(!PayPalEnumItemCategoryType::valueIsValid($_itemCategory))
		{
			return false;
		}
		return ($this->ItemCategory = $_itemCategory);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentDetailsItemType
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