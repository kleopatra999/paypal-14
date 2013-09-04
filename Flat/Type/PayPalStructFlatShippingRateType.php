<?php
/**
 * File for class PayPalStructFlatShippingRateType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFlatShippingRateType originally named FlatShippingRateType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFlatShippingRateType extends PayPalWsdlClass
{
	/**
	 * The AdditionalShippingCosts
	 * Meta informations extracted from the WSDL
	 * - documentation : Any additional shipping costs for the item.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $AdditionalShippingCosts;
	/**
	 * The FlatShippingHandlingCosts
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $FlatShippingHandlingCosts;
	/**
	 * The InsuranceFee
	 * @var PayPalStructAmountType
	 */
	public $InsuranceFee;
	/**
	 * The InsuranceOption
	 * @var PayPalEnumInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The ShippingService
	 * @var PayPalEnumShippingServiceCodeType
	 */
	public $ShippingService;
	/**
	 * Constructor method for FlatShippingRateType
	 * @see parent::__construct()
	 * @param PayPalStructAmountType $_additionalShippingCosts
	 * @param PayPalStructAmountType $_flatShippingHandlingCosts
	 * @param PayPalStructAmountType $_insuranceFee
	 * @param PayPalEnumInsuranceOptionCodeType $_insuranceOption
	 * @param PayPalEnumShippingServiceCodeType $_shippingService
	 * @return PayPalStructFlatShippingRateType
	 */
	public function __construct($_additionalShippingCosts = NULL,$_flatShippingHandlingCosts = NULL,$_insuranceFee = NULL,$_insuranceOption = NULL,$_shippingService = NULL)
	{
		parent::__construct(array('AdditionalShippingCosts'=>$_additionalShippingCosts,'FlatShippingHandlingCosts'=>$_flatShippingHandlingCosts,'InsuranceFee'=>$_insuranceFee,'InsuranceOption'=>$_insuranceOption,'ShippingService'=>$_shippingService));
	}
	/**
	 * Get AdditionalShippingCosts value
	 * @return PayPalStructAmountType|null
	 */
	public function getAdditionalShippingCosts()
	{
		return $this->AdditionalShippingCosts;
	}
	/**
	 * Set AdditionalShippingCosts value
	 * @param PayPalStructAmountType $_additionalShippingCosts the AdditionalShippingCosts
	 * @return PayPalStructAmountType
	 */
	public function setAdditionalShippingCosts($_additionalShippingCosts)
	{
		return ($this->AdditionalShippingCosts = $_additionalShippingCosts);
	}
	/**
	 * Get FlatShippingHandlingCosts value
	 * @return PayPalStructAmountType|null
	 */
	public function getFlatShippingHandlingCosts()
	{
		return $this->FlatShippingHandlingCosts;
	}
	/**
	 * Set FlatShippingHandlingCosts value
	 * @param PayPalStructAmountType $_flatShippingHandlingCosts the FlatShippingHandlingCosts
	 * @return PayPalStructAmountType
	 */
	public function setFlatShippingHandlingCosts($_flatShippingHandlingCosts)
	{
		return ($this->FlatShippingHandlingCosts = $_flatShippingHandlingCosts);
	}
	/**
	 * Get InsuranceFee value
	 * @return PayPalStructAmountType|null
	 */
	public function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}
	/**
	 * Set InsuranceFee value
	 * @param PayPalStructAmountType $_insuranceFee the InsuranceFee
	 * @return PayPalStructAmountType
	 */
	public function setInsuranceFee($_insuranceFee)
	{
		return ($this->InsuranceFee = $_insuranceFee);
	}
	/**
	 * Get InsuranceOption value
	 * @return PayPalEnumInsuranceOptionCodeType|null
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * Set InsuranceOption value
	 * @uses PayPalEnumInsuranceOptionCodeType::valueIsValid()
	 * @param PayPalEnumInsuranceOptionCodeType $_insuranceOption the InsuranceOption
	 * @return PayPalEnumInsuranceOptionCodeType
	 */
	public function setInsuranceOption($_insuranceOption)
	{
		if(!PayPalEnumInsuranceOptionCodeType::valueIsValid($_insuranceOption))
		{
			return false;
		}
		return ($this->InsuranceOption = $_insuranceOption);
	}
	/**
	 * Get ShippingService value
	 * @return PayPalEnumShippingServiceCodeType|null
	 */
	public function getShippingService()
	{
		return $this->ShippingService;
	}
	/**
	 * Set ShippingService value
	 * @uses PayPalEnumShippingServiceCodeType::valueIsValid()
	 * @param PayPalEnumShippingServiceCodeType $_shippingService the ShippingService
	 * @return PayPalEnumShippingServiceCodeType
	 */
	public function setShippingService($_shippingService)
	{
		if(!PayPalEnumShippingServiceCodeType::valueIsValid($_shippingService))
		{
			return false;
		}
		return ($this->ShippingService = $_shippingService);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFlatShippingRateType
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