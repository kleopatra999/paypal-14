<?php
/**
 * File for class PayPalStructPaymentDirectivesType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentDirectivesType originally named PaymentDirectivesType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentDirectivesType extends PayPalWsdlClass
{
	/**
	 * The PaymentType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of the Payment is it Instant or Echeck or Any.
	 * - minOccurs : 0
	 * @var PayPalEnumMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * Constructor method for PaymentDirectivesType
	 * @see parent::__construct()
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType
	 * @return PayPalStructPaymentDirectivesType
	 */
	public function __construct($_paymentType = NULL)
	{
		parent::__construct(array('PaymentType'=>$_paymentType));
	}
	/**
	 * Get PaymentType value
	 * @return PayPalEnumMerchantPullPaymentCodeType|null
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set PaymentType value
	 * @uses PayPalEnumMerchantPullPaymentCodeType::valueIsValid()
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType the PaymentType
	 * @return PayPalEnumMerchantPullPaymentCodeType
	 */
	public function setPaymentType($_paymentType)
	{
		if(!PayPalEnumMerchantPullPaymentCodeType::valueIsValid($_paymentType))
		{
			return false;
		}
		return ($this->PaymentType = $_paymentType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentDirectivesType
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