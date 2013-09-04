<?php
/**
 * File for class PayPalStructOfferCouponInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOfferCouponInfoType originally named OfferCouponInfoType
 * Documentation : OffersAndCouponsInfoType Information about a Offers and Coupons.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOfferCouponInfoType extends PayPalWsdlClass
{
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of the incentive
	 * - minOccurs : 0
	 * @var string
	 */
	public $Type;
	/**
	 * The ID
	 * Meta informations extracted from the WSDL
	 * - documentation : ID of the Incentive used in transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ID;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount used on transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $Amount;
	/**
	 * The AmountCurrency
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount Currency
	 * - minOccurs : 0
	 * @var string
	 */
	public $AmountCurrency;
	/**
	 * Constructor method for OfferCouponInfoType
	 * @see parent::__construct()
	 * @param string $_type
	 * @param string $_iD
	 * @param string $_amount
	 * @param string $_amountCurrency
	 * @return PayPalStructOfferCouponInfoType
	 */
	public function __construct($_type = NULL,$_iD = NULL,$_amount = NULL,$_amountCurrency = NULL)
	{
		parent::__construct(array('Type'=>$_type,'ID'=>$_iD,'Amount'=>$_amount,'AmountCurrency'=>$_amountCurrency));
	}
	/**
	 * Get Type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @param string $_type the Type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->Type = $_type);
	}
	/**
	 * Get ID value
	 * @return string|null
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set ID value
	 * @param string $_iD the ID
	 * @return string
	 */
	public function setID($_iD)
	{
		return ($this->ID = $_iD);
	}
	/**
	 * Get Amount value
	 * @return string|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param string $_amount the Amount
	 * @return string
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Get AmountCurrency value
	 * @return string|null
	 */
	public function getAmountCurrency()
	{
		return $this->AmountCurrency;
	}
	/**
	 * Set AmountCurrency value
	 * @param string $_amountCurrency the AmountCurrency
	 * @return string
	 */
	public function setAmountCurrency($_amountCurrency)
	{
		return ($this->AmountCurrency = $_amountCurrency);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOfferCouponInfoType
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