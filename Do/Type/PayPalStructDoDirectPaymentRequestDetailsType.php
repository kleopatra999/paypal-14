<?php
/**
 * File for class PayPalStructDoDirectPaymentRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoDirectPaymentRequestDetailsType originally named DoDirectPaymentRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoDirectPaymentRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentAction
	 * Meta informations extracted from the WSDL
	 * - documentation : How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. NOTE: Order is not allowed for Direct Payment. Character length and limit: Up to 13 single-byte alphabetic characters
	 * @var PayPalEnumPaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The PaymentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payment Required
	 * @var PayPalStructPaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The CreditCard
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the credit card to be charged. Required
	 * @var PayPalStructCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The IPAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : IP address of the payer's browser as recorded in its HTTP request to your website. PayPal records this IP addresses as a means to detect possible fraud. Required Character length and limitations: 15 single-byte characters, including periods, in dotted-quad format: ???.???.???.???
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The MerchantSessionId
	 * Meta informations extracted from the WSDL
	 * - documentation : Your customer session identification token. PayPal records this optional session identification token as an additional means to detect possible fraud. Optional Character length and limitations: 64 single-byte numeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $MerchantSessionId;
	/**
	 * The ReturnFMFDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor method for DoDirectPaymentRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction
	 * @param PayPalStructPaymentDetailsType $_paymentDetails
	 * @param PayPalStructCreditCardDetailsType $_creditCard
	 * @param string $_iPAddress
	 * @param string $_merchantSessionId
	 * @param boolean $_returnFMFDetails
	 * @return PayPalStructDoDirectPaymentRequestDetailsType
	 */
	public function __construct($_paymentAction = NULL,$_paymentDetails = NULL,$_creditCard = NULL,$_iPAddress = NULL,$_merchantSessionId = NULL,$_returnFMFDetails = NULL)
	{
		parent::__construct(array('PaymentAction'=>$_paymentAction,'PaymentDetails'=>$_paymentDetails,'CreditCard'=>$_creditCard,'IPAddress'=>$_iPAddress,'MerchantSessionId'=>$_merchantSessionId,'ReturnFMFDetails'=>$_returnFMFDetails));
	}
	/**
	 * Get PaymentAction value
	 * @return PayPalEnumPaymentActionCodeType|null
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set PaymentAction value
	 * @uses PayPalEnumPaymentActionCodeType::valueIsValid()
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction the PaymentAction
	 * @return PayPalEnumPaymentActionCodeType
	 */
	public function setPaymentAction($_paymentAction)
	{
		if(!PayPalEnumPaymentActionCodeType::valueIsValid($_paymentAction))
		{
			return false;
		}
		return ($this->PaymentAction = $_paymentAction);
	}
	/**
	 * Get PaymentDetails value
	 * @return PayPalStructPaymentDetailsType|null
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set PaymentDetails value
	 * @param PayPalStructPaymentDetailsType $_paymentDetails the PaymentDetails
	 * @return PayPalStructPaymentDetailsType
	 */
	public function setPaymentDetails($_paymentDetails)
	{
		return ($this->PaymentDetails = $_paymentDetails);
	}
	/**
	 * Get CreditCard value
	 * @return PayPalStructCreditCardDetailsType|null
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set CreditCard value
	 * @param PayPalStructCreditCardDetailsType $_creditCard the CreditCard
	 * @return PayPalStructCreditCardDetailsType
	 */
	public function setCreditCard($_creditCard)
	{
		return ($this->CreditCard = $_creditCard);
	}
	/**
	 * Get IPAddress value
	 * @return string|null
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set IPAddress value
	 * @param string $_iPAddress the IPAddress
	 * @return string
	 */
	public function setIPAddress($_iPAddress)
	{
		return ($this->IPAddress = $_iPAddress);
	}
	/**
	 * Get MerchantSessionId value
	 * @return string|null
	 */
	public function getMerchantSessionId()
	{
		return $this->MerchantSessionId;
	}
	/**
	 * Set MerchantSessionId value
	 * @param string $_merchantSessionId the MerchantSessionId
	 * @return string
	 */
	public function setMerchantSessionId($_merchantSessionId)
	{
		return ($this->MerchantSessionId = $_merchantSessionId);
	}
	/**
	 * Get ReturnFMFDetails value
	 * @return boolean|null
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
	}
	/**
	 * Set ReturnFMFDetails value
	 * @param boolean $_returnFMFDetails the ReturnFMFDetails
	 * @return boolean
	 */
	public function setReturnFMFDetails($_returnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_returnFMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoDirectPaymentRequestDetailsType
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