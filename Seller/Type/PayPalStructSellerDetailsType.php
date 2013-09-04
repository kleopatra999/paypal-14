<?php
/**
 * File for class PayPalStructSellerDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSellerDetailsType originally named SellerDetailsType
 * Documentation : Details about the seller.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSellerDetailsType extends PayPalWsdlClass
{
	/**
	 * The SellerId
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier for the seller. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SellerId;
	/**
	 * The SellerUserName
	 * Meta informations extracted from the WSDL
	 * - documentation : The user name of the user at the marketplaces site. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SellerUserName;
	/**
	 * The SellerRegistrationDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date when the user registered with the marketplace. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $SellerRegistrationDate;
	/**
	 * The PayPalAccountID
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller Paypal Account Id contains the seller EmailId or PayerId or PhoneNo passed during the Request.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PayPalAccountID;
	/**
	 * The SecureMerchantAccountID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique PayPal customer account identification number (of the seller). This feild is meant for Response. This field is ignored, if passed in the Request.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - maxLength : 127
	 * @var string
	 */
	public $SecureMerchantAccountID;
	/**
	 * Constructor method for SellerDetailsType
	 * @see parent::__construct()
	 * @param string $_sellerId
	 * @param string $_sellerUserName
	 * @param dateTime $_sellerRegistrationDate
	 * @param string $_payPalAccountID
	 * @param string $_secureMerchantAccountID
	 * @return PayPalStructSellerDetailsType
	 */
	public function __construct($_sellerId = NULL,$_sellerUserName = NULL,$_sellerRegistrationDate = NULL,$_payPalAccountID = NULL,$_secureMerchantAccountID = NULL)
	{
		parent::__construct(array('SellerId'=>$_sellerId,'SellerUserName'=>$_sellerUserName,'SellerRegistrationDate'=>$_sellerRegistrationDate,'PayPalAccountID'=>$_payPalAccountID,'SecureMerchantAccountID'=>$_secureMerchantAccountID));
	}
	/**
	 * Get SellerId value
	 * @return string|null
	 */
	public function getSellerId()
	{
		return $this->SellerId;
	}
	/**
	 * Set SellerId value
	 * @param string $_sellerId the SellerId
	 * @return string
	 */
	public function setSellerId($_sellerId)
	{
		return ($this->SellerId = $_sellerId);
	}
	/**
	 * Get SellerUserName value
	 * @return string|null
	 */
	public function getSellerUserName()
	{
		return $this->SellerUserName;
	}
	/**
	 * Set SellerUserName value
	 * @param string $_sellerUserName the SellerUserName
	 * @return string
	 */
	public function setSellerUserName($_sellerUserName)
	{
		return ($this->SellerUserName = $_sellerUserName);
	}
	/**
	 * Get SellerRegistrationDate value
	 * @return dateTime|null
	 */
	public function getSellerRegistrationDate()
	{
		return $this->SellerRegistrationDate;
	}
	/**
	 * Set SellerRegistrationDate value
	 * @param dateTime $_sellerRegistrationDate the SellerRegistrationDate
	 * @return dateTime
	 */
	public function setSellerRegistrationDate($_sellerRegistrationDate)
	{
		return ($this->SellerRegistrationDate = $_sellerRegistrationDate);
	}
	/**
	 * Get PayPalAccountID value
	 * @return string|null
	 */
	public function getPayPalAccountID()
	{
		return $this->PayPalAccountID;
	}
	/**
	 * Set PayPalAccountID value
	 * @param string $_payPalAccountID the PayPalAccountID
	 * @return string
	 */
	public function setPayPalAccountID($_payPalAccountID)
	{
		return ($this->PayPalAccountID = $_payPalAccountID);
	}
	/**
	 * Get SecureMerchantAccountID value
	 * @return string|null
	 */
	public function getSecureMerchantAccountID()
	{
		return $this->SecureMerchantAccountID;
	}
	/**
	 * Set SecureMerchantAccountID value
	 * @param string $_secureMerchantAccountID the SecureMerchantAccountID
	 * @return string
	 */
	public function setSecureMerchantAccountID($_secureMerchantAccountID)
	{
		return ($this->SecureMerchantAccountID = $_secureMerchantAccountID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSellerDetailsType
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