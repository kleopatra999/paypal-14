<?php
/**
 * File for class PayPalStructCrossPromotionsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCrossPromotionsType originally named CrossPromotionsType
 * Documentation : Merchandizing info for an Item. This contains a list of crosssell or upsell items. PrimaryScheme, PromotionMethod,SellerId,ItemId, ShippingDiscount do not have be min occur 0
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCrossPromotionsType extends PayPalWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : Item ID for the base item. Based on this item other items are promoted.
	 * - documentation : Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The PrimaryScheme
	 * @var PayPalEnumPromotionSchemeCodeType
	 */
	public $PrimaryScheme;
	/**
	 * The PromotionMethod
	 * @var PayPalEnumPromotionMethodCodeType
	 */
	public $PromotionMethod;
	/**
	 * The SellerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Id of the Seller who is promoting this item.
	 * @var string
	 */
	public $SellerID;
	/**
	 * The ShippingDiscount
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping Discount offered or not by the seller.
	 * @var boolean
	 */
	public $ShippingDiscount;
	/**
	 * The SellerKey
	 * Meta informations extracted from the WSDL
	 * - documentation : Key of the Seller who is promoting this item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SellerKey;
	/**
	 * The StoreName
	 * Meta informations extracted from the WSDL
	 * - documentation : Store Name for the seller.
	 * - minOccurs : 0
	 * @var string
	 */
	public $StoreName;
	/**
	 * The PromotedItem
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var PayPalStructPromotedItemType
	 */
	public $PromotedItem;
	/**
	 * Constructor method for CrossPromotionsType
	 * @see parent::__construct()
	 * @param string $_itemID
	 * @param PayPalEnumPromotionSchemeCodeType $_primaryScheme
	 * @param PayPalEnumPromotionMethodCodeType $_promotionMethod
	 * @param string $_sellerID
	 * @param boolean $_shippingDiscount
	 * @param string $_sellerKey
	 * @param string $_storeName
	 * @param PayPalStructPromotedItemType $_promotedItem
	 * @return PayPalStructCrossPromotionsType
	 */
	public function __construct($_itemID = NULL,$_primaryScheme = NULL,$_promotionMethod = NULL,$_sellerID = NULL,$_shippingDiscount = NULL,$_sellerKey = NULL,$_storeName = NULL,$_promotedItem = NULL)
	{
		parent::__construct(array('ItemID'=>$_itemID,'PrimaryScheme'=>$_primaryScheme,'PromotionMethod'=>$_promotionMethod,'SellerID'=>$_sellerID,'ShippingDiscount'=>$_shippingDiscount,'SellerKey'=>$_sellerKey,'StoreName'=>$_storeName,'PromotedItem'=>$_promotedItem));
	}
	/**
	 * Get ItemID value
	 * @return string|null
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ItemID value
	 * @param string $_itemID the ItemID
	 * @return string
	 */
	public function setItemID($_itemID)
	{
		return ($this->ItemID = $_itemID);
	}
	/**
	 * Get PrimaryScheme value
	 * @return PayPalEnumPromotionSchemeCodeType|null
	 */
	public function getPrimaryScheme()
	{
		return $this->PrimaryScheme;
	}
	/**
	 * Set PrimaryScheme value
	 * @uses PayPalEnumPromotionSchemeCodeType::valueIsValid()
	 * @param PayPalEnumPromotionSchemeCodeType $_primaryScheme the PrimaryScheme
	 * @return PayPalEnumPromotionSchemeCodeType
	 */
	public function setPrimaryScheme($_primaryScheme)
	{
		if(!PayPalEnumPromotionSchemeCodeType::valueIsValid($_primaryScheme))
		{
			return false;
		}
		return ($this->PrimaryScheme = $_primaryScheme);
	}
	/**
	 * Get PromotionMethod value
	 * @return PayPalEnumPromotionMethodCodeType|null
	 */
	public function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
	/**
	 * Set PromotionMethod value
	 * @uses PayPalEnumPromotionMethodCodeType::valueIsValid()
	 * @param PayPalEnumPromotionMethodCodeType $_promotionMethod the PromotionMethod
	 * @return PayPalEnumPromotionMethodCodeType
	 */
	public function setPromotionMethod($_promotionMethod)
	{
		if(!PayPalEnumPromotionMethodCodeType::valueIsValid($_promotionMethod))
		{
			return false;
		}
		return ($this->PromotionMethod = $_promotionMethod);
	}
	/**
	 * Get SellerID value
	 * @return string|null
	 */
	public function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * Set SellerID value
	 * @param string $_sellerID the SellerID
	 * @return string
	 */
	public function setSellerID($_sellerID)
	{
		return ($this->SellerID = $_sellerID);
	}
	/**
	 * Get ShippingDiscount value
	 * @return boolean|null
	 */
	public function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}
	/**
	 * Set ShippingDiscount value
	 * @param boolean $_shippingDiscount the ShippingDiscount
	 * @return boolean
	 */
	public function setShippingDiscount($_shippingDiscount)
	{
		return ($this->ShippingDiscount = $_shippingDiscount);
	}
	/**
	 * Get SellerKey value
	 * @return string|null
	 */
	public function getSellerKey()
	{
		return $this->SellerKey;
	}
	/**
	 * Set SellerKey value
	 * @param string $_sellerKey the SellerKey
	 * @return string
	 */
	public function setSellerKey($_sellerKey)
	{
		return ($this->SellerKey = $_sellerKey);
	}
	/**
	 * Get StoreName value
	 * @return string|null
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set StoreName value
	 * @param string $_storeName the StoreName
	 * @return string
	 */
	public function setStoreName($_storeName)
	{
		return ($this->StoreName = $_storeName);
	}
	/**
	 * Get PromotedItem value
	 * @return PayPalStructPromotedItemType|null
	 */
	public function getPromotedItem()
	{
		return $this->PromotedItem;
	}
	/**
	 * Set PromotedItem value
	 * @param PayPalStructPromotedItemType $_promotedItem the PromotedItem
	 * @return PayPalStructPromotedItemType
	 */
	public function setPromotedItem($_promotedItem)
	{
		return ($this->PromotedItem = $_promotedItem);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCrossPromotionsType
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