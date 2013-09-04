<?php
/**
 * File for class PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType originally named GetBillingAgreementCustomerDetailsResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The PayerInfo
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructPayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The BillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer's billing address. Optional If you have a credit card mapped in your PayPal account, PayPal returns the billing address of the credit billing address otherwise your primary address as billing address in GetBillingAgreementCustomerDetails.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $BillingAddress;
	/**
	 * Constructor method for GetBillingAgreementCustomerDetailsResponseDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructPayerInfoType $_payerInfo
	 * @param PayPalStructAddressType $_billingAddress
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public function __construct($_payerInfo,$_billingAddress = NULL)
	{
		parent::__construct(array('PayerInfo'=>$_payerInfo,'BillingAddress'=>$_billingAddress));
	}
	/**
	 * Get PayerInfo value
	 * @return PayPalStructPayerInfoType
	 */
	public function getPayerInfo()
	{
		return $this->PayerInfo;
	}
	/**
	 * Set PayerInfo value
	 * @param PayPalStructPayerInfoType $_payerInfo the PayerInfo
	 * @return PayPalStructPayerInfoType
	 */
	public function setPayerInfo($_payerInfo)
	{
		return ($this->PayerInfo = $_payerInfo);
	}
	/**
	 * Get BillingAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
	}
	/**
	 * Set BillingAddress value
	 * @param PayPalStructAddressType $_billingAddress the BillingAddress
	 * @return PayPalStructAddressType
	 */
	public function setBillingAddress($_billingAddress)
	{
		return ($this->BillingAddress = $_billingAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType
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