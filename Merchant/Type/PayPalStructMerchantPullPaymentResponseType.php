<?php
/**
 * File for class PayPalStructMerchantPullPaymentResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMerchantPullPaymentResponseType originally named MerchantPullPaymentResponseType
 * Documentation : MerchantPullPaymentResponseType Response data from the merchant pull.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMerchantPullPaymentResponseType extends PayPalWsdlClass
{
	/**
	 * The PayerInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : information about the customer
	 * @var PayPalStructPayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The PaymentInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the transaction
	 * @var PayPalStructPaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The MerchantPullInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Specific information about the preapproved payment
	 * @var PayPalStructMerchantPullInfoType
	 */
	public $MerchantPullInfo;
	/**
	 * Constructor method for MerchantPullPaymentResponseType
	 * @see parent::__construct()
	 * @param PayPalStructPayerInfoType $_payerInfo
	 * @param PayPalStructPaymentInfoType $_paymentInfo
	 * @param PayPalStructMerchantPullInfoType $_merchantPullInfo
	 * @return PayPalStructMerchantPullPaymentResponseType
	 */
	public function __construct($_payerInfo = NULL,$_paymentInfo = NULL,$_merchantPullInfo = NULL)
	{
		parent::__construct(array('PayerInfo'=>$_payerInfo,'PaymentInfo'=>$_paymentInfo,'MerchantPullInfo'=>$_merchantPullInfo));
	}
	/**
	 * Get PayerInfo value
	 * @return PayPalStructPayerInfoType|null
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
	 * Get PaymentInfo value
	 * @return PayPalStructPaymentInfoType|null
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}
	/**
	 * Set PaymentInfo value
	 * @param PayPalStructPaymentInfoType $_paymentInfo the PaymentInfo
	 * @return PayPalStructPaymentInfoType
	 */
	public function setPaymentInfo($_paymentInfo)
	{
		return ($this->PaymentInfo = $_paymentInfo);
	}
	/**
	 * Get MerchantPullInfo value
	 * @return PayPalStructMerchantPullInfoType|null
	 */
	public function getMerchantPullInfo()
	{
		return $this->MerchantPullInfo;
	}
	/**
	 * Set MerchantPullInfo value
	 * @param PayPalStructMerchantPullInfoType $_merchantPullInfo the MerchantPullInfo
	 * @return PayPalStructMerchantPullInfoType
	 */
	public function setMerchantPullInfo($_merchantPullInfo)
	{
		return ($this->MerchantPullInfo = $_merchantPullInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMerchantPullPaymentResponseType
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