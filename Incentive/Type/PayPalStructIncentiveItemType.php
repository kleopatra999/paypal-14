<?php
/**
 * File for class PayPalStructIncentiveItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveItemType originally named IncentiveItemType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveItemType extends PayPalWsdlClass
{
	/**
	 * The ItemId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemId;
	/**
	 * The PurchaseTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $PurchaseTime;
	/**
	 * The ItemCategoryList
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemCategoryList;
	/**
	 * The ItemPrice
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemPrice;
	/**
	 * The ItemQuantity
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var integer
	 */
	public $ItemQuantity;
	/**
	 * Constructor method for IncentiveItemType
	 * @see parent::__construct()
	 * @param string $_itemId
	 * @param dateTime $_purchaseTime
	 * @param string $_itemCategoryList
	 * @param PayPalStructBasicAmountType $_itemPrice
	 * @param integer $_itemQuantity
	 * @return PayPalStructIncentiveItemType
	 */
	public function __construct($_itemId = NULL,$_purchaseTime = NULL,$_itemCategoryList = NULL,$_itemPrice = NULL,$_itemQuantity = NULL)
	{
		parent::__construct(array('ItemId'=>$_itemId,'PurchaseTime'=>$_purchaseTime,'ItemCategoryList'=>$_itemCategoryList,'ItemPrice'=>$_itemPrice,'ItemQuantity'=>$_itemQuantity));
	}
	/**
	 * Get ItemId value
	 * @return string|null
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set ItemId value
	 * @param string $_itemId the ItemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->ItemId = $_itemId);
	}
	/**
	 * Get PurchaseTime value
	 * @return dateTime|null
	 */
	public function getPurchaseTime()
	{
		return $this->PurchaseTime;
	}
	/**
	 * Set PurchaseTime value
	 * @param dateTime $_purchaseTime the PurchaseTime
	 * @return dateTime
	 */
	public function setPurchaseTime($_purchaseTime)
	{
		return ($this->PurchaseTime = $_purchaseTime);
	}
	/**
	 * Get ItemCategoryList value
	 * @return string|null
	 */
	public function getItemCategoryList()
	{
		return $this->ItemCategoryList;
	}
	/**
	 * Set ItemCategoryList value
	 * @param string $_itemCategoryList the ItemCategoryList
	 * @return string
	 */
	public function setItemCategoryList($_itemCategoryList)
	{
		return ($this->ItemCategoryList = $_itemCategoryList);
	}
	/**
	 * Get ItemPrice value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * Set ItemPrice value
	 * @param PayPalStructBasicAmountType $_itemPrice the ItemPrice
	 * @return PayPalStructBasicAmountType
	 */
	public function setItemPrice($_itemPrice)
	{
		return ($this->ItemPrice = $_itemPrice);
	}
	/**
	 * Get ItemQuantity value
	 * @return integer|null
	 */
	public function getItemQuantity()
	{
		return $this->ItemQuantity;
	}
	/**
	 * Set ItemQuantity value
	 * @param integer $_itemQuantity the ItemQuantity
	 * @return integer
	 */
	public function setItemQuantity($_itemQuantity)
	{
		return ($this->ItemQuantity = $_itemQuantity);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveItemType
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