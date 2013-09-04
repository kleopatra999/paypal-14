<?php
/**
 * File for class PayPalStructShippingCarrierDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructShippingCarrierDetailsType originally named ShippingCarrierDetailsType
 * Documentation : is unique identified of shipping carrier, without this element the whole node makes no sence
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructShippingCarrierDetailsType extends PayPalWsdlClass
{
	/**
	 * The CarrierShippingFee
	 * Meta informations extracted from the WSDL
	 * - documentation : Calculated cost of shipping, based on shipping parameters and selected shipping service. Only returned if ShippingType = 2 (i.e., calculated shipping rate).
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $CarrierShippingFee;
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
	 * The PackagingHandlingCosts
	 * Meta informations extracted from the WSDL
	 * - documentation : Optional fees a seller might assess for the shipping of the item.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $PackagingHandlingCosts;
	/**
	 * The ShippingRateErrorMessage
	 * Meta informations extracted from the WSDL
	 * - documentation : Describes any error message associated with the attempt to calculate shipping rates. If there was no error, returns "No Error" (without the quotation marks).
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingRateErrorMessage;
	/**
	 * The ShippingService
	 * @var PayPalEnumShippingServiceCodeType
	 */
	public $ShippingService;
	/**
	 * Constructor method for ShippingCarrierDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructAmountType $_carrierShippingFee
	 * @param PayPalStructAmountType $_insuranceFee
	 * @param PayPalEnumInsuranceOptionCodeType $_insuranceOption
	 * @param PayPalStructAmountType $_packagingHandlingCosts
	 * @param string $_shippingRateErrorMessage
	 * @param PayPalEnumShippingServiceCodeType $_shippingService
	 * @return PayPalStructShippingCarrierDetailsType
	 */
	public function __construct($_carrierShippingFee = NULL,$_insuranceFee = NULL,$_insuranceOption = NULL,$_packagingHandlingCosts = NULL,$_shippingRateErrorMessage = NULL,$_shippingService = NULL)
	{
		parent::__construct(array('CarrierShippingFee'=>$_carrierShippingFee,'InsuranceFee'=>$_insuranceFee,'InsuranceOption'=>$_insuranceOption,'PackagingHandlingCosts'=>$_packagingHandlingCosts,'ShippingRateErrorMessage'=>$_shippingRateErrorMessage,'ShippingService'=>$_shippingService));
	}
	/**
	 * Get CarrierShippingFee value
	 * @return PayPalStructAmountType|null
	 */
	public function getCarrierShippingFee()
	{
		return $this->CarrierShippingFee;
	}
	/**
	 * Set CarrierShippingFee value
	 * @param PayPalStructAmountType $_carrierShippingFee the CarrierShippingFee
	 * @return PayPalStructAmountType
	 */
	public function setCarrierShippingFee($_carrierShippingFee)
	{
		return ($this->CarrierShippingFee = $_carrierShippingFee);
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
	 * Get PackagingHandlingCosts value
	 * @return PayPalStructAmountType|null
	 */
	public function getPackagingHandlingCosts()
	{
		return $this->PackagingHandlingCosts;
	}
	/**
	 * Set PackagingHandlingCosts value
	 * @param PayPalStructAmountType $_packagingHandlingCosts the PackagingHandlingCosts
	 * @return PayPalStructAmountType
	 */
	public function setPackagingHandlingCosts($_packagingHandlingCosts)
	{
		return ($this->PackagingHandlingCosts = $_packagingHandlingCosts);
	}
	/**
	 * Get ShippingRateErrorMessage value
	 * @return string|null
	 */
	public function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}
	/**
	 * Set ShippingRateErrorMessage value
	 * @param string $_shippingRateErrorMessage the ShippingRateErrorMessage
	 * @return string
	 */
	public function setShippingRateErrorMessage($_shippingRateErrorMessage)
	{
		return ($this->ShippingRateErrorMessage = $_shippingRateErrorMessage);
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
	 * @return PayPalStructShippingCarrierDetailsType
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