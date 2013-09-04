<?php
/**
 * File for class PayPalStructPromotedItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPromotedItemType originally named PromotedItemType
 * Documentation : Merchandizing info for an Item. This contains a list of crosssell or upsell items.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPromotedItemType extends PayPalWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : Item ID for the base item. Based on this item other items are promoted. it is teh only tag that would show up in all calls that use promoted item type. some are not in soap yet, such as get and ser promotion rules
	 * - documentation : Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The PictureURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for the picture of the promoted item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PictureURL;
	/**
	 * The position
	 * Meta informations extracted from the WSDL
	 * - documentation : Where to display in the list of items.currentl y even forget and set does not have to be minoccur =0 but if we ever were to do revise promotion tems, it can be omitted
	 * - minOccurs : 0
	 * @var int
	 */
	public $position;
	/**
	 * The PromotionPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Promotion Price. Price at which the buyer can buy the item now.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $PromotionPrice;
	/**
	 * The PromotionPriceType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumPromotionItemPriceTypeCodeType
	 */
	public $PromotionPriceType;
	/**
	 * The SelectionType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumPromotionItemSelectionCodeType
	 */
	public $SelectionType;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : Item Title for the promoted item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The ListingType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * Constructor method for PromotedItemType
	 * @see parent::__construct()
	 * @param string $_itemID
	 * @param string $_pictureURL
	 * @param int $_position
	 * @param PayPalStructAmountType $_promotionPrice
	 * @param PayPalEnumPromotionItemPriceTypeCodeType $_promotionPriceType
	 * @param PayPalEnumPromotionItemSelectionCodeType $_selectionType
	 * @param string $_title
	 * @param PayPalEnumListingTypeCodeType $_listingType
	 * @return PayPalStructPromotedItemType
	 */
	public function __construct($_itemID = NULL,$_pictureURL = NULL,$_position = NULL,$_promotionPrice = NULL,$_promotionPriceType = NULL,$_selectionType = NULL,$_title = NULL,$_listingType = NULL)
	{
		parent::__construct(array('ItemID'=>$_itemID,'PictureURL'=>$_pictureURL,'position'=>$_position,'PromotionPrice'=>$_promotionPrice,'PromotionPriceType'=>$_promotionPriceType,'SelectionType'=>$_selectionType,'Title'=>$_title,'ListingType'=>$_listingType));
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
	 * Get PictureURL value
	 * @return string|null
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set PictureURL value
	 * @param string $_pictureURL the PictureURL
	 * @return string
	 */
	public function setPictureURL($_pictureURL)
	{
		return ($this->PictureURL = $_pictureURL);
	}
	/**
	 * Get position value
	 * @return int|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param int $_position the position
	 * @return int
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Get PromotionPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getPromotionPrice()
	{
		return $this->PromotionPrice;
	}
	/**
	 * Set PromotionPrice value
	 * @param PayPalStructAmountType $_promotionPrice the PromotionPrice
	 * @return PayPalStructAmountType
	 */
	public function setPromotionPrice($_promotionPrice)
	{
		return ($this->PromotionPrice = $_promotionPrice);
	}
	/**
	 * Get PromotionPriceType value
	 * @return PayPalEnumPromotionItemPriceTypeCodeType|null
	 */
	public function getPromotionPriceType()
	{
		return $this->PromotionPriceType;
	}
	/**
	 * Set PromotionPriceType value
	 * @uses PayPalEnumPromotionItemPriceTypeCodeType::valueIsValid()
	 * @param PayPalEnumPromotionItemPriceTypeCodeType $_promotionPriceType the PromotionPriceType
	 * @return PayPalEnumPromotionItemPriceTypeCodeType
	 */
	public function setPromotionPriceType($_promotionPriceType)
	{
		if(!PayPalEnumPromotionItemPriceTypeCodeType::valueIsValid($_promotionPriceType))
		{
			return false;
		}
		return ($this->PromotionPriceType = $_promotionPriceType);
	}
	/**
	 * Get SelectionType value
	 * @return PayPalEnumPromotionItemSelectionCodeType|null
	 */
	public function getSelectionType()
	{
		return $this->SelectionType;
	}
	/**
	 * Set SelectionType value
	 * @uses PayPalEnumPromotionItemSelectionCodeType::valueIsValid()
	 * @param PayPalEnumPromotionItemSelectionCodeType $_selectionType the SelectionType
	 * @return PayPalEnumPromotionItemSelectionCodeType
	 */
	public function setSelectionType($_selectionType)
	{
		if(!PayPalEnumPromotionItemSelectionCodeType::valueIsValid($_selectionType))
		{
			return false;
		}
		return ($this->SelectionType = $_selectionType);
	}
	/**
	 * Get Title value
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Title value
	 * @param string $_title the Title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->Title = $_title);
	}
	/**
	 * Get ListingType value
	 * @return PayPalEnumListingTypeCodeType|null
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set ListingType value
	 * @uses PayPalEnumListingTypeCodeType::valueIsValid()
	 * @param PayPalEnumListingTypeCodeType $_listingType the ListingType
	 * @return PayPalEnumListingTypeCodeType
	 */
	public function setListingType($_listingType)
	{
		if(!PayPalEnumListingTypeCodeType::valueIsValid($_listingType))
		{
			return false;
		}
		return ($this->ListingType = $_listingType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPromotedItemType
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