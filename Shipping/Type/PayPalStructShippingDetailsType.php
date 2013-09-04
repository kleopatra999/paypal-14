<?php
/**
 * File for class PayPalStructShippingDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructShippingDetailsType originally named ShippingDetailsType
 * Documentation : Specifies the shipping payment details.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructShippingDetailsType extends PayPalWsdlClass
{
	/**
	 * The AllowPaymentEdit
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the buyer edited the payment amount.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $AllowPaymentEdit;
	/**
	 * The CalculatedShippingRate
	 * Meta informations extracted from the WSDL
	 * - documentation : Calculated shipping rate details. If present, then the calculated shipping rate option was used.
	 * - minOccurs : 0
	 * @var PayPalStructCalculatedShippingRateType
	 */
	public $CalculatedShippingRate;
	/**
	 * The ChangePaymentInstructions
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the payment instructions are included (e.g., for updating the details of a transaction).
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ChangePaymentInstructions;
	/**
	 * The FlatShippingRate
	 * Meta informations extracted from the WSDL
	 * - documentation : Flat shipping rate details. If present, then the flat shipping rate option was used.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructFlatShippingRateType
	 */
	public $FlatShippingRate;
	/**
	 * The InsuranceTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : Total cost of insurance for the transaction.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $InsuranceTotal;
	/**
	 * The InsuranceWanted
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether buyer selected to have insurance.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $InsuranceWanted;
	/**
	 * The PaymentInstructions
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment instuctions.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentInstructions;
	/**
	 * The SalesTax
	 * Meta informations extracted from the WSDL
	 * - documentation : Sales tax details. Sales tax applicable for only US sites. For non-US sites this sub-element should not be used.
	 * - minOccurs : 0
	 * @var PayPalStructSalesTaxType
	 */
	public $SalesTax;
	/**
	 * The SellerPostalCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Postal/Zip code from where the seller will ship the item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SellerPostalCode;
	/**
	 * Constructor method for ShippingDetailsType
	 * @see parent::__construct()
	 * @param boolean $_allowPaymentEdit
	 * @param PayPalStructCalculatedShippingRateType $_calculatedShippingRate
	 * @param boolean $_changePaymentInstructions
	 * @param PayPalStructFlatShippingRateType $_flatShippingRate
	 * @param PayPalStructAmountType $_insuranceTotal
	 * @param boolean $_insuranceWanted
	 * @param string $_paymentInstructions
	 * @param PayPalStructSalesTaxType $_salesTax
	 * @param string $_sellerPostalCode
	 * @return PayPalStructShippingDetailsType
	 */
	public function __construct($_allowPaymentEdit = NULL,$_calculatedShippingRate = NULL,$_changePaymentInstructions = NULL,$_flatShippingRate = NULL,$_insuranceTotal = NULL,$_insuranceWanted = NULL,$_paymentInstructions = NULL,$_salesTax = NULL,$_sellerPostalCode = NULL)
	{
		parent::__construct(array('AllowPaymentEdit'=>$_allowPaymentEdit,'CalculatedShippingRate'=>$_calculatedShippingRate,'ChangePaymentInstructions'=>$_changePaymentInstructions,'FlatShippingRate'=>$_flatShippingRate,'InsuranceTotal'=>$_insuranceTotal,'InsuranceWanted'=>$_insuranceWanted,'PaymentInstructions'=>$_paymentInstructions,'SalesTax'=>$_salesTax,'SellerPostalCode'=>$_sellerPostalCode));
	}
	/**
	 * Get AllowPaymentEdit value
	 * @return boolean|null
	 */
	public function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * Set AllowPaymentEdit value
	 * @param boolean $_allowPaymentEdit the AllowPaymentEdit
	 * @return boolean
	 */
	public function setAllowPaymentEdit($_allowPaymentEdit)
	{
		return ($this->AllowPaymentEdit = $_allowPaymentEdit);
	}
	/**
	 * Get CalculatedShippingRate value
	 * @return PayPalStructCalculatedShippingRateType|null
	 */
	public function getCalculatedShippingRate()
	{
		return $this->CalculatedShippingRate;
	}
	/**
	 * Set CalculatedShippingRate value
	 * @param PayPalStructCalculatedShippingRateType $_calculatedShippingRate the CalculatedShippingRate
	 * @return PayPalStructCalculatedShippingRateType
	 */
	public function setCalculatedShippingRate($_calculatedShippingRate)
	{
		return ($this->CalculatedShippingRate = $_calculatedShippingRate);
	}
	/**
	 * Get ChangePaymentInstructions value
	 * @return boolean|null
	 */
	public function getChangePaymentInstructions()
	{
		return $this->ChangePaymentInstructions;
	}
	/**
	 * Set ChangePaymentInstructions value
	 * @param boolean $_changePaymentInstructions the ChangePaymentInstructions
	 * @return boolean
	 */
	public function setChangePaymentInstructions($_changePaymentInstructions)
	{
		return ($this->ChangePaymentInstructions = $_changePaymentInstructions);
	}
	/**
	 * Get FlatShippingRate value
	 * @return PayPalStructFlatShippingRateType|null
	 */
	public function getFlatShippingRate()
	{
		return $this->FlatShippingRate;
	}
	/**
	 * Set FlatShippingRate value
	 * @param PayPalStructFlatShippingRateType $_flatShippingRate the FlatShippingRate
	 * @return PayPalStructFlatShippingRateType
	 */
	public function setFlatShippingRate($_flatShippingRate)
	{
		return ($this->FlatShippingRate = $_flatShippingRate);
	}
	/**
	 * Get InsuranceTotal value
	 * @return PayPalStructAmountType|null
	 */
	public function getInsuranceTotal()
	{
		return $this->InsuranceTotal;
	}
	/**
	 * Set InsuranceTotal value
	 * @param PayPalStructAmountType $_insuranceTotal the InsuranceTotal
	 * @return PayPalStructAmountType
	 */
	public function setInsuranceTotal($_insuranceTotal)
	{
		return ($this->InsuranceTotal = $_insuranceTotal);
	}
	/**
	 * Get InsuranceWanted value
	 * @return boolean|null
	 */
	public function getInsuranceWanted()
	{
		return $this->InsuranceWanted;
	}
	/**
	 * Set InsuranceWanted value
	 * @param boolean $_insuranceWanted the InsuranceWanted
	 * @return boolean
	 */
	public function setInsuranceWanted($_insuranceWanted)
	{
		return ($this->InsuranceWanted = $_insuranceWanted);
	}
	/**
	 * Get PaymentInstructions value
	 * @return string|null
	 */
	public function getPaymentInstructions()
	{
		return $this->PaymentInstructions;
	}
	/**
	 * Set PaymentInstructions value
	 * @param string $_paymentInstructions the PaymentInstructions
	 * @return string
	 */
	public function setPaymentInstructions($_paymentInstructions)
	{
		return ($this->PaymentInstructions = $_paymentInstructions);
	}
	/**
	 * Get SalesTax value
	 * @return PayPalStructSalesTaxType|null
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set SalesTax value
	 * @param PayPalStructSalesTaxType $_salesTax the SalesTax
	 * @return PayPalStructSalesTaxType
	 */
	public function setSalesTax($_salesTax)
	{
		return ($this->SalesTax = $_salesTax);
	}
	/**
	 * Get SellerPostalCode value
	 * @return string|null
	 */
	public function getSellerPostalCode()
	{
		return $this->SellerPostalCode;
	}
	/**
	 * Set SellerPostalCode value
	 * @param string $_sellerPostalCode the SellerPostalCode
	 * @return string
	 */
	public function setSellerPostalCode($_sellerPostalCode)
	{
		return ($this->SellerPostalCode = $_sellerPostalCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructShippingDetailsType
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