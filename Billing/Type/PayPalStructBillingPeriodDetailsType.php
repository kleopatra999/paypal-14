<?php
/**
 * File for class PayPalStructBillingPeriodDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillingPeriodDetailsType originally named BillingPeriodDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillingPeriodDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingPeriod
	 * Meta informations extracted from the WSDL
	 * - documentation : Unit of meausre for billing cycle
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumBillingPeriodType
	 */
	public $BillingPeriod;
	/**
	 * The BillingFrequency
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of BillingPeriod that make up one billing cycle
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $BillingFrequency;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount to charge
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The TotalBillingCycles
	 * Meta informations extracted from the WSDL
	 * - documentation : Total billing cycles in this portion of the schedule
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalBillingCycles;
	/**
	 * The ShippingAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Additional shipping amount to charge
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The TaxAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Additional tax amount to charge
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * Constructor method for BillingPeriodDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumBillingPeriodType $_billingPeriod
	 * @param int $_billingFrequency
	 * @param PayPalStructBasicAmountType $_amount
	 * @param int $_totalBillingCycles
	 * @param PayPalStructBasicAmountType $_shippingAmount
	 * @param PayPalStructBasicAmountType $_taxAmount
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function __construct($_billingPeriod,$_billingFrequency,$_amount,$_totalBillingCycles = NULL,$_shippingAmount = NULL,$_taxAmount = NULL)
	{
		parent::__construct(array('BillingPeriod'=>$_billingPeriod,'BillingFrequency'=>$_billingFrequency,'Amount'=>$_amount,'TotalBillingCycles'=>$_totalBillingCycles,'ShippingAmount'=>$_shippingAmount,'TaxAmount'=>$_taxAmount));
	}
	/**
	 * Get BillingPeriod value
	 * @return PayPalEnumBillingPeriodType
	 */
	public function getBillingPeriod()
	{
		return $this->BillingPeriod;
	}
	/**
	 * Set BillingPeriod value
	 * @uses PayPalEnumBillingPeriodType::valueIsValid()
	 * @param PayPalEnumBillingPeriodType $_billingPeriod the BillingPeriod
	 * @return PayPalEnumBillingPeriodType
	 */
	public function setBillingPeriod($_billingPeriod)
	{
		if(!PayPalEnumBillingPeriodType::valueIsValid($_billingPeriod))
		{
			return false;
		}
		return ($this->BillingPeriod = $_billingPeriod);
	}
	/**
	 * Get BillingFrequency value
	 * @return int
	 */
	public function getBillingFrequency()
	{
		return $this->BillingFrequency;
	}
	/**
	 * Set BillingFrequency value
	 * @param int $_billingFrequency the BillingFrequency
	 * @return int
	 */
	public function setBillingFrequency($_billingFrequency)
	{
		return ($this->BillingFrequency = $_billingFrequency);
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType
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
	 * Get TotalBillingCycles value
	 * @return int|null
	 */
	public function getTotalBillingCycles()
	{
		return $this->TotalBillingCycles;
	}
	/**
	 * Set TotalBillingCycles value
	 * @param int $_totalBillingCycles the TotalBillingCycles
	 * @return int
	 */
	public function setTotalBillingCycles($_totalBillingCycles)
	{
		return ($this->TotalBillingCycles = $_totalBillingCycles);
	}
	/**
	 * Get ShippingAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set ShippingAmount value
	 * @param PayPalStructBasicAmountType $_shippingAmount the ShippingAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingAmount($_shippingAmount)
	{
		return ($this->ShippingAmount = $_shippingAmount);
	}
	/**
	 * Get TaxAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set TaxAmount value
	 * @param PayPalStructBasicAmountType $_taxAmount the TaxAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxAmount($_taxAmount)
	{
		return ($this->TaxAmount = $_taxAmount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillingPeriodDetailsType
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