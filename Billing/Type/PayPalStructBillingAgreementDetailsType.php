<?php
/**
 * File for class PayPalStructBillingAgreementDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillingAgreementDetailsType originally named BillingAgreementDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillingAgreementDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumBillingCodeType
	 */
	public $BillingType;
	/**
	 * The BillingAgreementDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : Only needed for AutoBill billinng type.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementDescription;
	/**
	 * The PaymentType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The BillingAgreementCustom
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom annotation field for your exclusive use.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementCustom;
	/**
	 * Constructor method for BillingAgreementDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumBillingCodeType $_billingType
	 * @param string $_billingAgreementDescription
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType
	 * @param string $_billingAgreementCustom
	 * @return PayPalStructBillingAgreementDetailsType
	 */
	public function __construct($_billingType,$_billingAgreementDescription = NULL,$_paymentType = NULL,$_billingAgreementCustom = NULL)
	{
		parent::__construct(array('BillingType'=>$_billingType,'BillingAgreementDescription'=>$_billingAgreementDescription,'PaymentType'=>$_paymentType,'BillingAgreementCustom'=>$_billingAgreementCustom));
	}
	/**
	 * Get BillingType value
	 * @return PayPalEnumBillingCodeType
	 */
	public function getBillingType()
	{
		return $this->BillingType;
	}
	/**
	 * Set BillingType value
	 * @uses PayPalEnumBillingCodeType::valueIsValid()
	 * @param PayPalEnumBillingCodeType $_billingType the BillingType
	 * @return PayPalEnumBillingCodeType
	 */
	public function setBillingType($_billingType)
	{
		if(!PayPalEnumBillingCodeType::valueIsValid($_billingType))
		{
			return false;
		}
		return ($this->BillingType = $_billingType);
	}
	/**
	 * Get BillingAgreementDescription value
	 * @return string|null
	 */
	public function getBillingAgreementDescription()
	{
		return $this->BillingAgreementDescription;
	}
	/**
	 * Set BillingAgreementDescription value
	 * @param string $_billingAgreementDescription the BillingAgreementDescription
	 * @return string
	 */
	public function setBillingAgreementDescription($_billingAgreementDescription)
	{
		return ($this->BillingAgreementDescription = $_billingAgreementDescription);
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
	 * Get BillingAgreementCustom value
	 * @return string|null
	 */
	public function getBillingAgreementCustom()
	{
		return $this->BillingAgreementCustom;
	}
	/**
	 * Set BillingAgreementCustom value
	 * @param string $_billingAgreementCustom the BillingAgreementCustom
	 * @return string
	 */
	public function setBillingAgreementCustom($_billingAgreementCustom)
	{
		return ($this->BillingAgreementCustom = $_billingAgreementCustom);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillingAgreementDetailsType
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