<?php
/**
 * File for class PayPalStructDoMobileCheckoutPaymentResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoMobileCheckoutPaymentResponseDetailsType originally named DoMobileCheckoutPaymentResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoMobileCheckoutPaymentResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The PayerInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payer
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
	 * Constructor method for DoMobileCheckoutPaymentResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_custom
	 * @param string $_invoiceID
	 * @param PayPalStructPayerInfoType $_payerInfo
	 * @param PayPalStructPaymentInfoType $_paymentInfo
	 * @return PayPalStructDoMobileCheckoutPaymentResponseDetailsType
	 */
	public function __construct($_custom = NULL,$_invoiceID = NULL,$_payerInfo = NULL,$_paymentInfo = NULL)
	{
		parent::__construct(array('Custom'=>$_custom,'InvoiceID'=>$_invoiceID,'PayerInfo'=>$_payerInfo,'PaymentInfo'=>$_paymentInfo));
	}
	/**
	 * Get Custom value
	 * @return string|null
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set Custom value
	 * @param string $_custom the Custom
	 * @return string
	 */
	public function setCustom($_custom)
	{
		return ($this->Custom = $_custom);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoMobileCheckoutPaymentResponseDetailsType
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