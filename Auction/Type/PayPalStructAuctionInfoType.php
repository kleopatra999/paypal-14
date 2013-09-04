<?php
/**
 * File for class PayPalStructAuctionInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAuctionInfoType originally named AuctionInfoType
 * Documentation : AuctionInfoType Basic information about an auction.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAuctionInfoType extends PayPalWsdlClass
{
	/**
	 * The multiItem
	 * Meta informations extracted from the WSDL
	 * - use : required
	 * @var string
	 */
	public $multiItem;
	/**
	 * The BuyerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer's auction ID
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerID;
	/**
	 * The ClosingDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Auction's close date
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $ClosingDate;
	/**
	 * Constructor method for AuctionInfoType
	 * @see parent::__construct()
	 * @param string $_multiItem
	 * @param string $_buyerID
	 * @param dateTime $_closingDate
	 * @return PayPalStructAuctionInfoType
	 */
	public function __construct($_multiItem,$_buyerID = NULL,$_closingDate = NULL)
	{
		parent::__construct(array('multiItem'=>$_multiItem,'BuyerID'=>$_buyerID,'ClosingDate'=>$_closingDate));
	}
	/**
	 * Get multiItem value
	 * @return string
	 */
	public function getMultiItem()
	{
		return $this->multiItem;
	}
	/**
	 * Set multiItem value
	 * @param string $_multiItem the multiItem
	 * @return string
	 */
	public function setMultiItem($_multiItem)
	{
		return ($this->multiItem = $_multiItem);
	}
	/**
	 * Get BuyerID value
	 * @return string|null
	 */
	public function getBuyerID()
	{
		return $this->BuyerID;
	}
	/**
	 * Set BuyerID value
	 * @param string $_buyerID the BuyerID
	 * @return string
	 */
	public function setBuyerID($_buyerID)
	{
		return ($this->BuyerID = $_buyerID);
	}
	/**
	 * Get ClosingDate value
	 * @return dateTime|null
	 */
	public function getClosingDate()
	{
		return $this->ClosingDate;
	}
	/**
	 * Set ClosingDate value
	 * @param dateTime $_closingDate the ClosingDate
	 * @return dateTime
	 */
	public function setClosingDate($_closingDate)
	{
		return ($this->ClosingDate = $_closingDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAuctionInfoType
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