<?php
/**
 * File for class PayPalStructReviseStatusType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReviseStatusType originally named ReviseStatusType
 * Documentation : Contains the revise status information details (e.g., item properties information). ths node contains system set data only - always output and always all data. no minccurs needed, except for motors specific data, since it wil lnot be retruned for non motors items
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReviseStatusType extends PayPalWsdlClass
{
	/**
	 * The ItemRevised
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the item was revised since the auction started.
	 * @var boolean
	 */
	public $ItemRevised;
	/**
	 * The BuyItNowAdded
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, indicates that a Buy It Now Price was added for the item. Only returned for Motors items.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BuyItNowAdded;
	/**
	 * The BuyItNowLowered
	 * Meta informations extracted from the WSDL
	 * - documentation : Replaces BinLowered as of API version 305. If true, indicates that the Buy It Now Price was lowered for the item. Only returned for Motors items.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BuyItNowLowered;
	/**
	 * The ReserveLowered
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, indicates that the Reserve Price was lowered for the item. Only returned for Motors items.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReserveLowered;
	/**
	 * The ReserveRemoved
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, indicates that the Reserve Price was removed from the item. Only returned for eBay Motors items.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReserveRemoved;
	/**
	 * Constructor method for ReviseStatusType
	 * @see parent::__construct()
	 * @param boolean $_itemRevised
	 * @param boolean $_buyItNowAdded
	 * @param boolean $_buyItNowLowered
	 * @param boolean $_reserveLowered
	 * @param boolean $_reserveRemoved
	 * @return PayPalStructReviseStatusType
	 */
	public function __construct($_itemRevised = NULL,$_buyItNowAdded = NULL,$_buyItNowLowered = NULL,$_reserveLowered = NULL,$_reserveRemoved = NULL)
	{
		parent::__construct(array('ItemRevised'=>$_itemRevised,'BuyItNowAdded'=>$_buyItNowAdded,'BuyItNowLowered'=>$_buyItNowLowered,'ReserveLowered'=>$_reserveLowered,'ReserveRemoved'=>$_reserveRemoved));
	}
	/**
	 * Get ItemRevised value
	 * @return boolean|null
	 */
	public function getItemRevised()
	{
		return $this->ItemRevised;
	}
	/**
	 * Set ItemRevised value
	 * @param boolean $_itemRevised the ItemRevised
	 * @return boolean
	 */
	public function setItemRevised($_itemRevised)
	{
		return ($this->ItemRevised = $_itemRevised);
	}
	/**
	 * Get BuyItNowAdded value
	 * @return boolean|null
	 */
	public function getBuyItNowAdded()
	{
		return $this->BuyItNowAdded;
	}
	/**
	 * Set BuyItNowAdded value
	 * @param boolean $_buyItNowAdded the BuyItNowAdded
	 * @return boolean
	 */
	public function setBuyItNowAdded($_buyItNowAdded)
	{
		return ($this->BuyItNowAdded = $_buyItNowAdded);
	}
	/**
	 * Get BuyItNowLowered value
	 * @return boolean|null
	 */
	public function getBuyItNowLowered()
	{
		return $this->BuyItNowLowered;
	}
	/**
	 * Set BuyItNowLowered value
	 * @param boolean $_buyItNowLowered the BuyItNowLowered
	 * @return boolean
	 */
	public function setBuyItNowLowered($_buyItNowLowered)
	{
		return ($this->BuyItNowLowered = $_buyItNowLowered);
	}
	/**
	 * Get ReserveLowered value
	 * @return boolean|null
	 */
	public function getReserveLowered()
	{
		return $this->ReserveLowered;
	}
	/**
	 * Set ReserveLowered value
	 * @param boolean $_reserveLowered the ReserveLowered
	 * @return boolean
	 */
	public function setReserveLowered($_reserveLowered)
	{
		return ($this->ReserveLowered = $_reserveLowered);
	}
	/**
	 * Get ReserveRemoved value
	 * @return boolean|null
	 */
	public function getReserveRemoved()
	{
		return $this->ReserveRemoved;
	}
	/**
	 * Set ReserveRemoved value
	 * @param boolean $_reserveRemoved the ReserveRemoved
	 * @return boolean
	 */
	public function setReserveRemoved($_reserveRemoved)
	{
		return ($this->ReserveRemoved = $_reserveRemoved);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReviseStatusType
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