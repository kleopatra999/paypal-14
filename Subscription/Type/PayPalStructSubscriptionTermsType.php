<?php
/**
 * File for class PayPalStructSubscriptionTermsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSubscriptionTermsType originally named SubscriptionTermsType
 * Documentation : SubscriptionTermsType Terms of a PayPal subscription.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSubscriptionTermsType extends PayPalWsdlClass
{
	/**
	 * The period
	 * Meta informations extracted from the WSDL
	 * - use : required
	 * @var string
	 */
	public $period;
	/**
	 * The Amount
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * Constructor method for SubscriptionTermsType
	 * @see parent::__construct()
	 * @param string $_period
	 * @param PayPalStructBasicAmountType $_amount
	 * @return PayPalStructSubscriptionTermsType
	 */
	public function __construct($_period,$_amount = NULL)
	{
		parent::__construct(array('period'=>$_period,'Amount'=>$_amount));
	}
	/**
	 * Get period value
	 * @return string
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set period value
	 * @param string $_period the period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSubscriptionTermsType
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