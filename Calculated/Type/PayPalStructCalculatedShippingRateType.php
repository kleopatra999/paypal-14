<?php
/**
 * File for class PayPalStructCalculatedShippingRateType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCalculatedShippingRateType originally named CalculatedShippingRateType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCalculatedShippingRateType extends PayPalWsdlClass
{
	/**
	 * The OriginatingPostalCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Potal/zip code from where package will be shipped.
	 * - minOccurs : 0
	 * @var string
	 */
	public $OriginatingPostalCode;
	/**
	 * The ShippingIrregular
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates an item that cannot go through the stamping machine at the shipping service office (a value of True) and requires special or fragile handling. Only returned if ShippingType = 2.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ShippingIrregular;
	/**
	 * The CarrierDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : contains information about shipping fees per each shipping service chosen by the seller
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructShippingCarrierDetailsType
	 */
	public $CarrierDetails;
	/**
	 * The ShippingPackage
	 * Meta informations extracted from the WSDL
	 * - documentation : May need to be moved into details - wait for George! The size of the package to be shipped. Possible values are: None Letter Large envelope USPS flat rate envelope Package/thick envelope USPS large package/oversize 1 Very large package/oversize 2 UPS Letter
	 * - minOccurs : 0
	 * @var PayPalEnumShippingPackageCodeType
	 */
	public $ShippingPackage;
	/**
	 * The WeightMajor
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping weight unit of measure (major). If unit of weight is kilogram (i.e., metric system) this would be the exact weight value in kilogram (i.e., complete decimal number, e.g., 2.23 kg). Only returned if ShippingType is 2.
	 * - minOccurs : 0
	 * @var PayPalStructMeasureType
	 */
	public $WeightMajor;
	/**
	 * The WeightMinor
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping weight unit of measure (minor). If unit of weight is in pounds and/or ounces, this would be the exact weight value in ounces (i.e., complete decimal number, e.g., 8.2 or 8.0 ounces). Only returned if ShippingType is 2.
	 * - minOccurs : 0
	 * @var PayPalStructMeasureType
	 */
	public $WeightMinor;
	/**
	 * Constructor method for CalculatedShippingRateType
	 * @see parent::__construct()
	 * @param string $_originatingPostalCode
	 * @param boolean $_shippingIrregular
	 * @param PayPalStructShippingCarrierDetailsType $_carrierDetails
	 * @param PayPalEnumShippingPackageCodeType $_shippingPackage
	 * @param PayPalStructMeasureType $_weightMajor
	 * @param PayPalStructMeasureType $_weightMinor
	 * @return PayPalStructCalculatedShippingRateType
	 */
	public function __construct($_originatingPostalCode = NULL,$_shippingIrregular = NULL,$_carrierDetails = NULL,$_shippingPackage = NULL,$_weightMajor = NULL,$_weightMinor = NULL)
	{
		parent::__construct(array('OriginatingPostalCode'=>$_originatingPostalCode,'ShippingIrregular'=>$_shippingIrregular,'CarrierDetails'=>$_carrierDetails,'ShippingPackage'=>$_shippingPackage,'WeightMajor'=>$_weightMajor,'WeightMinor'=>$_weightMinor));
	}
	/**
	 * Get OriginatingPostalCode value
	 * @return string|null
	 */
	public function getOriginatingPostalCode()
	{
		return $this->OriginatingPostalCode;
	}
	/**
	 * Set OriginatingPostalCode value
	 * @param string $_originatingPostalCode the OriginatingPostalCode
	 * @return string
	 */
	public function setOriginatingPostalCode($_originatingPostalCode)
	{
		return ($this->OriginatingPostalCode = $_originatingPostalCode);
	}
	/**
	 * Get ShippingIrregular value
	 * @return boolean|null
	 */
	public function getShippingIrregular()
	{
		return $this->ShippingIrregular;
	}
	/**
	 * Set ShippingIrregular value
	 * @param boolean $_shippingIrregular the ShippingIrregular
	 * @return boolean
	 */
	public function setShippingIrregular($_shippingIrregular)
	{
		return ($this->ShippingIrregular = $_shippingIrregular);
	}
	/**
	 * Get CarrierDetails value
	 * @return PayPalStructShippingCarrierDetailsType|null
	 */
	public function getCarrierDetails()
	{
		return $this->CarrierDetails;
	}
	/**
	 * Set CarrierDetails value
	 * @param PayPalStructShippingCarrierDetailsType $_carrierDetails the CarrierDetails
	 * @return PayPalStructShippingCarrierDetailsType
	 */
	public function setCarrierDetails($_carrierDetails)
	{
		return ($this->CarrierDetails = $_carrierDetails);
	}
	/**
	 * Get ShippingPackage value
	 * @return PayPalEnumShippingPackageCodeType|null
	 */
	public function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * Set ShippingPackage value
	 * @uses PayPalEnumShippingPackageCodeType::valueIsValid()
	 * @param PayPalEnumShippingPackageCodeType $_shippingPackage the ShippingPackage
	 * @return PayPalEnumShippingPackageCodeType
	 */
	public function setShippingPackage($_shippingPackage)
	{
		if(!PayPalEnumShippingPackageCodeType::valueIsValid($_shippingPackage))
		{
			return false;
		}
		return ($this->ShippingPackage = $_shippingPackage);
	}
	/**
	 * Get WeightMajor value
	 * @return PayPalStructMeasureType|null
	 */
	public function getWeightMajor()
	{
		return $this->WeightMajor;
	}
	/**
	 * Set WeightMajor value
	 * @param PayPalStructMeasureType $_weightMajor the WeightMajor
	 * @return PayPalStructMeasureType
	 */
	public function setWeightMajor($_weightMajor)
	{
		return ($this->WeightMajor = $_weightMajor);
	}
	/**
	 * Get WeightMinor value
	 * @return PayPalStructMeasureType|null
	 */
	public function getWeightMinor()
	{
		return $this->WeightMinor;
	}
	/**
	 * Set WeightMinor value
	 * @param PayPalStructMeasureType $_weightMinor the WeightMinor
	 * @return PayPalStructMeasureType
	 */
	public function setWeightMinor($_weightMinor)
	{
		return ($this->WeightMinor = $_weightMinor);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCalculatedShippingRateType
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