<?php
/**
 * File for class PayPalStructSellingStatusType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSellingStatusType originally named SellingStatusType
 * Documentation : Contains the listed items price details which consists of following information: BuyItNowPrice, ConvertedBuyItNowPrice, ConvertedPrice, ConvertedStartPrice, CurrentPrice, MinimumToBid, ReservePrice, and StartPrice. need to take in account get seller events when defining minoccurs = 0 Contains one User node representing the current high bidder. GetItem returns a high bidder for auctions that have ended and have a winning bidder. For Fixed Price listings, in-progress auctions, or auction items that received no bids, GetItem returns a HighBidder node with empty tags.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSellingStatusType extends PayPalWsdlClass
{
	/**
	 * The BidCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of bids placed so far against the item. Not returned for International Fixed Price items.
	 * - minOccurs : 0
	 * @var int
	 */
	public $BidCount;
	/**
	 * The BidIncrement
	 * Meta informations extracted from the WSDL
	 * - documentation : Smallest amount a bid must be above the current high bid. Not returned International Fixed Price items.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $BidIncrement;
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Converted current price of listed item.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : For auction-format listings, current minimum asking price or the current highest bid for the item if bids have been placed. Shows minimum bid if no bids have been placed against the item. This field does not reflect the actual current price of the item if it's a Type=7 or Type=9 (Fixed Price) item and the price has been revised. (See StartPrice for revised asking price.)
	 * @var PayPalStructAmountType
	 */
	public $CurrentPrice;
	/**
	 * The HighBidder
	 * @var PayPalStructUserType
	 */
	public $HighBidder;
	/**
	 * The LeadCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Applicable to ad-format items only. Indicates how many leads to potential buyers are associated with this item. For other item types (other than ad-format items), returns a value of 0 (zero).
	 * - minOccurs : 0
	 * @var int
	 */
	public $LeadCount;
	/**
	 * The MinimumToBid
	 * Meta informations extracted from the WSDL
	 * - documentation : Minimum acceptable bid for the item. Not returned for International Fixed Price items.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $MinimumToBid;
	/**
	 * The QuantitySold
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of items purchased so far. (Subtract from the value returned in the Quantity field to calculate the number of items remaining.)
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The ReserveMet
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns true if the reserve price was met or no reserve price was specified.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReserveMet;
	/**
	 * The SecondChanceEligible
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $SecondChanceEligible;
	/**
	 * Constructor method for SellingStatusType
	 * @see parent::__construct()
	 * @param int $_bidCount
	 * @param PayPalStructAmountType $_bidIncrement
	 * @param PayPalStructAmountType $_convertedCurrentPrice
	 * @param PayPalStructAmountType $_currentPrice
	 * @param PayPalStructUserType $_highBidder
	 * @param int $_leadCount
	 * @param PayPalStructAmountType $_minimumToBid
	 * @param int $_quantitySold
	 * @param boolean $_reserveMet
	 * @param boolean $_secondChanceEligible
	 * @return PayPalStructSellingStatusType
	 */
	public function __construct($_bidCount = NULL,$_bidIncrement = NULL,$_convertedCurrentPrice = NULL,$_currentPrice = NULL,$_highBidder = NULL,$_leadCount = NULL,$_minimumToBid = NULL,$_quantitySold = NULL,$_reserveMet = NULL,$_secondChanceEligible = NULL)
	{
		parent::__construct(array('BidCount'=>$_bidCount,'BidIncrement'=>$_bidIncrement,'ConvertedCurrentPrice'=>$_convertedCurrentPrice,'CurrentPrice'=>$_currentPrice,'HighBidder'=>$_highBidder,'LeadCount'=>$_leadCount,'MinimumToBid'=>$_minimumToBid,'QuantitySold'=>$_quantitySold,'ReserveMet'=>$_reserveMet,'SecondChanceEligible'=>$_secondChanceEligible));
	}
	/**
	 * Get BidCount value
	 * @return int|null
	 */
	public function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * Set BidCount value
	 * @param int $_bidCount the BidCount
	 * @return int
	 */
	public function setBidCount($_bidCount)
	{
		return ($this->BidCount = $_bidCount);
	}
	/**
	 * Get BidIncrement value
	 * @return PayPalStructAmountType|null
	 */
	public function getBidIncrement()
	{
		return $this->BidIncrement;
	}
	/**
	 * Set BidIncrement value
	 * @param PayPalStructAmountType $_bidIncrement the BidIncrement
	 * @return PayPalStructAmountType
	 */
	public function setBidIncrement($_bidIncrement)
	{
		return ($this->BidIncrement = $_bidIncrement);
	}
	/**
	 * Get ConvertedCurrentPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set ConvertedCurrentPrice value
	 * @param PayPalStructAmountType $_convertedCurrentPrice the ConvertedCurrentPrice
	 * @return PayPalStructAmountType
	 */
	public function setConvertedCurrentPrice($_convertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_convertedCurrentPrice);
	}
	/**
	 * Get CurrentPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set CurrentPrice value
	 * @param PayPalStructAmountType $_currentPrice the CurrentPrice
	 * @return PayPalStructAmountType
	 */
	public function setCurrentPrice($_currentPrice)
	{
		return ($this->CurrentPrice = $_currentPrice);
	}
	/**
	 * Get HighBidder value
	 * @return PayPalStructUserType|null
	 */
	public function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * Set HighBidder value
	 * @param PayPalStructUserType $_highBidder the HighBidder
	 * @return PayPalStructUserType
	 */
	public function setHighBidder($_highBidder)
	{
		return ($this->HighBidder = $_highBidder);
	}
	/**
	 * Get LeadCount value
	 * @return int|null
	 */
	public function getLeadCount()
	{
		return $this->LeadCount;
	}
	/**
	 * Set LeadCount value
	 * @param int $_leadCount the LeadCount
	 * @return int
	 */
	public function setLeadCount($_leadCount)
	{
		return ($this->LeadCount = $_leadCount);
	}
	/**
	 * Get MinimumToBid value
	 * @return PayPalStructAmountType|null
	 */
	public function getMinimumToBid()
	{
		return $this->MinimumToBid;
	}
	/**
	 * Set MinimumToBid value
	 * @param PayPalStructAmountType $_minimumToBid the MinimumToBid
	 * @return PayPalStructAmountType
	 */
	public function setMinimumToBid($_minimumToBid)
	{
		return ($this->MinimumToBid = $_minimumToBid);
	}
	/**
	 * Get QuantitySold value
	 * @return int|null
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set QuantitySold value
	 * @param int $_quantitySold the QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_quantitySold)
	{
		return ($this->QuantitySold = $_quantitySold);
	}
	/**
	 * Get ReserveMet value
	 * @return boolean|null
	 */
	public function getReserveMet()
	{
		return $this->ReserveMet;
	}
	/**
	 * Set ReserveMet value
	 * @param boolean $_reserveMet the ReserveMet
	 * @return boolean
	 */
	public function setReserveMet($_reserveMet)
	{
		return ($this->ReserveMet = $_reserveMet);
	}
	/**
	 * Get SecondChanceEligible value
	 * @return boolean|null
	 */
	public function getSecondChanceEligible()
	{
		return $this->SecondChanceEligible;
	}
	/**
	 * Set SecondChanceEligible value
	 * @param boolean $_secondChanceEligible the SecondChanceEligible
	 * @return boolean
	 */
	public function setSecondChanceEligible($_secondChanceEligible)
	{
		return ($this->SecondChanceEligible = $_secondChanceEligible);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSellingStatusType
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