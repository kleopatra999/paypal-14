<?php
/**
 * File for class PayPalStructSalesTaxType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSalesTaxType originally named SalesTaxType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSalesTaxType extends PayPalWsdlClass
{
	/**
	 * The SalesTaxPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of the sales tax to be collected for the transaction. Sales tax is only for US.
	 * - minOccurs : 0
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The SalesTaxState
	 * Meta informations extracted from the WSDL
	 * - documentation : Sales tax for the transaction, expressed as a percentage. Should be empty for items listed on international sites (hence, this is US-only element).
	 * - minOccurs : 0
	 * @var string
	 */
	public $SalesTaxState;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether shipping is included in the tax. Applicable if ShippingType = 1 or 2. This element is used for US-only.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * Constructor method for SalesTaxType
	 * @see parent::__construct()
	 * @param float $_salesTaxPercent
	 * @param string $_salesTaxState
	 * @param boolean $_shippingIncludedInTax
	 * @return PayPalStructSalesTaxType
	 */
	public function __construct($_salesTaxPercent = NULL,$_salesTaxState = NULL,$_shippingIncludedInTax = NULL)
	{
		parent::__construct(array('SalesTaxPercent'=>$_salesTaxPercent,'SalesTaxState'=>$_salesTaxState,'ShippingIncludedInTax'=>$_shippingIncludedInTax));
	}
	/**
	 * Get SalesTaxPercent value
	 * @return float|null
	 */
	public function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
	/**
	 * Set SalesTaxPercent value
	 * @param float $_salesTaxPercent the SalesTaxPercent
	 * @return float
	 */
	public function setSalesTaxPercent($_salesTaxPercent)
	{
		return ($this->SalesTaxPercent = $_salesTaxPercent);
	}
	/**
	 * Get SalesTaxState value
	 * @return string|null
	 */
	public function getSalesTaxState()
	{
		return $this->SalesTaxState;
	}
	/**
	 * Set SalesTaxState value
	 * @param string $_salesTaxState the SalesTaxState
	 * @return string
	 */
	public function setSalesTaxState($_salesTaxState)
	{
		return ($this->SalesTaxState = $_salesTaxState);
	}
	/**
	 * Get ShippingIncludedInTax value
	 * @return boolean|null
	 */
	public function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
	/**
	 * Set ShippingIncludedInTax value
	 * @param boolean $_shippingIncludedInTax the ShippingIncludedInTax
	 * @return boolean
	 */
	public function setShippingIncludedInTax($_shippingIncludedInTax)
	{
		return ($this->ShippingIncludedInTax = $_shippingIncludedInTax);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSalesTaxType
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