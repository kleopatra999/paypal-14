<?php
/**
 * File for class PayPalStructShippingInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructShippingInfoType originally named ShippingInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructShippingInfoType extends PayPalWsdlClass
{
	/**
	 * The ShippingMethod
	 * @var string
	 */
	public $ShippingMethod;
	/**
	 * The ShippingCarrier
	 * @var string
	 */
	public $ShippingCarrier;
	/**
	 * The ShippingAmount
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The HandlingAmount
	 * @var PayPalStructBasicAmountType
	 */
	public $HandlingAmount;
	/**
	 * The InsuranceAmount
	 * @var PayPalStructBasicAmountType
	 */
	public $InsuranceAmount;
	/**
	 * Constructor method for ShippingInfoType
	 * @see parent::__construct()
	 * @param string $_shippingMethod
	 * @param string $_shippingCarrier
	 * @param PayPalStructBasicAmountType $_shippingAmount
	 * @param PayPalStructBasicAmountType $_handlingAmount
	 * @param PayPalStructBasicAmountType $_insuranceAmount
	 * @return PayPalStructShippingInfoType
	 */
	public function __construct($_shippingMethod = NULL,$_shippingCarrier = NULL,$_shippingAmount = NULL,$_handlingAmount = NULL,$_insuranceAmount = NULL)
	{
		parent::__construct(array('ShippingMethod'=>$_shippingMethod,'ShippingCarrier'=>$_shippingCarrier,'ShippingAmount'=>$_shippingAmount,'HandlingAmount'=>$_handlingAmount,'InsuranceAmount'=>$_insuranceAmount));
	}
	/**
	 * Get ShippingMethod value
	 * @return string|null
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ShippingMethod value
	 * @param string $_shippingMethod the ShippingMethod
	 * @return string
	 */
	public function setShippingMethod($_shippingMethod)
	{
		return ($this->ShippingMethod = $_shippingMethod);
	}
	/**
	 * Get ShippingCarrier value
	 * @return string|null
	 */
	public function getShippingCarrier()
	{
		return $this->ShippingCarrier;
	}
	/**
	 * Set ShippingCarrier value
	 * @param string $_shippingCarrier the ShippingCarrier
	 * @return string
	 */
	public function setShippingCarrier($_shippingCarrier)
	{
		return ($this->ShippingCarrier = $_shippingCarrier);
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
	 * Get HandlingAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getHandlingAmount()
	{
		return $this->HandlingAmount;
	}
	/**
	 * Set HandlingAmount value
	 * @param PayPalStructBasicAmountType $_handlingAmount the HandlingAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setHandlingAmount($_handlingAmount)
	{
		return ($this->HandlingAmount = $_handlingAmount);
	}
	/**
	 * Get InsuranceAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getInsuranceAmount()
	{
		return $this->InsuranceAmount;
	}
	/**
	 * Set InsuranceAmount value
	 * @param PayPalStructBasicAmountType $_insuranceAmount the InsuranceAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setInsuranceAmount($_insuranceAmount)
	{
		return ($this->InsuranceAmount = $_insuranceAmount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructShippingInfoType
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