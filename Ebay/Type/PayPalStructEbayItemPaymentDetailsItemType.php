<?php
/**
 * File for class PayPalStructEbayItemPaymentDetailsItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructEbayItemPaymentDetailsItemType originally named EbayItemPaymentDetailsItemType
 * Documentation : EbayItemPaymentDetailsItemType - Type declaration to be used by other schemas. Information about an Ebay Payment Item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructEbayItemPaymentDetailsItemType extends PayPalWsdlClass
{
	/**
	 * The ItemNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Auction ItemNumber. Optional Character length and limitations: 765 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The AuctionTransactionId
	 * Meta informations extracted from the WSDL
	 * - documentation : Auction Transaction ID. Optional Character length and limitations: 255 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $AuctionTransactionId;
	/**
	 * The OrderId
	 * Meta informations extracted from the WSDL
	 * - documentation : Ebay Order ID. Optional Character length and limitations: 64 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $OrderId;
	/**
	 * The CartID
	 * Meta informations extracted from the WSDL
	 * - documentation : Ebay Cart ID. Optional Character length and limitations: 64 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $CartID;
	/**
	 * Constructor method for EbayItemPaymentDetailsItemType
	 * @see parent::__construct()
	 * @param string $_itemNumber
	 * @param string $_auctionTransactionId
	 * @param string $_orderId
	 * @param string $_cartID
	 * @return PayPalStructEbayItemPaymentDetailsItemType
	 */
	public function __construct($_itemNumber = NULL,$_auctionTransactionId = NULL,$_orderId = NULL,$_cartID = NULL)
	{
		parent::__construct(array('ItemNumber'=>$_itemNumber,'AuctionTransactionId'=>$_auctionTransactionId,'OrderId'=>$_orderId,'CartID'=>$_cartID));
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
	 * Get AuctionTransactionId value
	 * @return string|null
	 */
	public function getAuctionTransactionId()
	{
		return $this->AuctionTransactionId;
	}
	/**
	 * Set AuctionTransactionId value
	 * @param string $_auctionTransactionId the AuctionTransactionId
	 * @return string
	 */
	public function setAuctionTransactionId($_auctionTransactionId)
	{
		return ($this->AuctionTransactionId = $_auctionTransactionId);
	}
	/**
	 * Get OrderId value
	 * @return string|null
	 */
	public function getOrderId()
	{
		return $this->OrderId;
	}
	/**
	 * Set OrderId value
	 * @param string $_orderId the OrderId
	 * @return string
	 */
	public function setOrderId($_orderId)
	{
		return ($this->OrderId = $_orderId);
	}
	/**
	 * Get CartID value
	 * @return string|null
	 */
	public function getCartID()
	{
		return $this->CartID;
	}
	/**
	 * Set CartID value
	 * @param string $_cartID the CartID
	 * @return string
	 */
	public function setCartID($_cartID)
	{
		return ($this->CartID = $_cartID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructEbayItemPaymentDetailsItemType
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