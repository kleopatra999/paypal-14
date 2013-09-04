<?php
/**
 * File for class PayPalStructTaxInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTaxInfoType originally named TaxInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTaxInfoType extends PayPalWsdlClass
{
	/**
	 * The TaxAmount
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The SalesTaxPercentage
	 * @var string
	 */
	public $SalesTaxPercentage;
	/**
	 * The TaxState
	 * @var string
	 */
	public $TaxState;
	/**
	 * Constructor method for TaxInfoType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_taxAmount
	 * @param string $_salesTaxPercentage
	 * @param string $_taxState
	 * @return PayPalStructTaxInfoType
	 */
	public function __construct($_taxAmount = NULL,$_salesTaxPercentage = NULL,$_taxState = NULL)
	{
		parent::__construct(array('TaxAmount'=>$_taxAmount,'SalesTaxPercentage'=>$_salesTaxPercentage,'TaxState'=>$_taxState));
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
	 * Get SalesTaxPercentage value
	 * @return string|null
	 */
	public function getSalesTaxPercentage()
	{
		return $this->SalesTaxPercentage;
	}
	/**
	 * Set SalesTaxPercentage value
	 * @param string $_salesTaxPercentage the SalesTaxPercentage
	 * @return string
	 */
	public function setSalesTaxPercentage($_salesTaxPercentage)
	{
		return ($this->SalesTaxPercentage = $_salesTaxPercentage);
	}
	/**
	 * Get TaxState value
	 * @return string|null
	 */
	public function getTaxState()
	{
		return $this->TaxState;
	}
	/**
	 * Set TaxState value
	 * @param string $_taxState the TaxState
	 * @return string
	 */
	public function setTaxState($_taxState)
	{
		return ($this->TaxState = $_taxState);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTaxInfoType
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