<?php
/**
 * File for class PayPalStructItemTrackingDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructItemTrackingDetailsType originally named ItemTrackingDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructItemTrackingDetailsType extends PayPalWsdlClass
{
	/**
	 * The ItemNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Item Number. Required
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The ItemQty
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Quantity. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemQty;
	/**
	 * The ItemQtyDelta
	 * Meta informations extracted from the WSDL
	 * - documentation : Item Quantity Delta. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemQtyDelta;
	/**
	 * The ItemAlert
	 * Meta informations extracted from the WSDL
	 * - documentation : Item Alert. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemAlert;
	/**
	 * The ItemCost
	 * Meta informations extracted from the WSDL
	 * - documentation : Item Cost. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemCost;
	/**
	 * Constructor method for ItemTrackingDetailsType
	 * @see parent::__construct()
	 * @param string $_itemNumber
	 * @param string $_itemQty
	 * @param string $_itemQtyDelta
	 * @param string $_itemAlert
	 * @param string $_itemCost
	 * @return PayPalStructItemTrackingDetailsType
	 */
	public function __construct($_itemNumber = NULL,$_itemQty = NULL,$_itemQtyDelta = NULL,$_itemAlert = NULL,$_itemCost = NULL)
	{
		parent::__construct(array('ItemNumber'=>$_itemNumber,'ItemQty'=>$_itemQty,'ItemQtyDelta'=>$_itemQtyDelta,'ItemAlert'=>$_itemAlert,'ItemCost'=>$_itemCost));
	}
	/**
	 * Get ItemNumber value
	 * @return string|null
	 */
	public function getItemNumber()
	{
		return $this->ItemNumber;
	}
	/**
	 * Set ItemNumber value
	 * @param string $_itemNumber the ItemNumber
	 * @return string
	 */
	public function setItemNumber($_itemNumber)
	{
		return ($this->ItemNumber = $_itemNumber);
	}
	/**
	 * Get ItemQty value
	 * @return string|null
	 */
	public function getItemQty()
	{
		return $this->ItemQty;
	}
	/**
	 * Set ItemQty value
	 * @param string $_itemQty the ItemQty
	 * @return string
	 */
	public function setItemQty($_itemQty)
	{
		return ($this->ItemQty = $_itemQty);
	}
	/**
	 * Get ItemQtyDelta value
	 * @return string|null
	 */
	public function getItemQtyDelta()
	{
		return $this->ItemQtyDelta;
	}
	/**
	 * Set ItemQtyDelta value
	 * @param string $_itemQtyDelta the ItemQtyDelta
	 * @return string
	 */
	public function setItemQtyDelta($_itemQtyDelta)
	{
		return ($this->ItemQtyDelta = $_itemQtyDelta);
	}
	/**
	 * Get ItemAlert value
	 * @return string|null
	 */
	public function getItemAlert()
	{
		return $this->ItemAlert;
	}
	/**
	 * Set ItemAlert value
	 * @param string $_itemAlert the ItemAlert
	 * @return string
	 */
	public function setItemAlert($_itemAlert)
	{
		return ($this->ItemAlert = $_itemAlert);
	}
	/**
	 * Get ItemCost value
	 * @return string|null
	 */
	public function getItemCost()
	{
		return $this->ItemCost;
	}
	/**
	 * Set ItemCost value
	 * @param string $_itemCost the ItemCost
	 * @return string
	 */
	public function setItemCost($_itemCost)
	{
		return ($this->ItemCost = $_itemCost);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructItemTrackingDetailsType
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