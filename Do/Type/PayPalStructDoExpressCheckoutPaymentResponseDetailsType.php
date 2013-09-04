<?php
/**
 * File for class PayPalStructDoExpressCheckoutPaymentResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoExpressCheckoutPaymentResponseDetailsType originally named DoExpressCheckoutPaymentResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoExpressCheckoutPaymentResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations:20 single-byte characters
	 * @var string
	 */
	public $Token;
	/**
	 * The PaymentInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the transaction
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructPaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The BillingAgreementID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementID;
	/**
	 * The RedirectRequired
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $RedirectRequired;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - documentation : Memo entered by sender in PayPal Review Page note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * The SuccessPageRedirectRequested
	 * Meta informations extracted from the WSDL
	 * - documentation : Redirect back to PayPal, PayPal can host the success page.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SuccessPageRedirectRequested;
	/**
	 * The UserSelectedOptions
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the user selected options.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructUserSelectedOptionType
	 */
	public $UserSelectedOptions;
	/**
	 * The CoupledPaymentInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about Coupled Payment transactions.
	 * - maxOccurs : 5
	 * - minOccurs : 0
	 * @var PayPalStructCoupledPaymentInfoType
	 */
	public $CoupledPaymentInfo;
	/**
	 * Constructor method for DoExpressCheckoutPaymentResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_token
	 * @param PayPalStructPaymentInfoType $_paymentInfo
	 * @param string $_billingAgreementID
	 * @param string $_redirectRequired
	 * @param string $_note
	 * @param string $_successPageRedirectRequested
	 * @param PayPalStructUserSelectedOptionType $_userSelectedOptions
	 * @param PayPalStructCoupledPaymentInfoType $_coupledPaymentInfo
	 * @return PayPalStructDoExpressCheckoutPaymentResponseDetailsType
	 */
	public function __construct($_token = NULL,$_paymentInfo = NULL,$_billingAgreementID = NULL,$_redirectRequired = NULL,$_note = NULL,$_successPageRedirectRequested = NULL,$_userSelectedOptions = NULL,$_coupledPaymentInfo = NULL)
	{
		parent::__construct(array('Token'=>$_token,'PaymentInfo'=>$_paymentInfo,'BillingAgreementID'=>$_billingAgreementID,'RedirectRequired'=>$_redirectRequired,'Note'=>$_note,'SuccessPageRedirectRequested'=>$_successPageRedirectRequested,'UserSelectedOptions'=>$_userSelectedOptions,'CoupledPaymentInfo'=>$_coupledPaymentInfo));
	}
	/**
	 * Get Token value
	 * @return string|null
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set Token value
	 * @param string $_token the Token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->Token = $_token);
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
	 * Get BillingAgreementID value
	 * @return string|null
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
	}
	/**
	 * Set BillingAgreementID value
	 * @param string $_billingAgreementID the BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_billingAgreementID)
	{
		return ($this->BillingAgreementID = $_billingAgreementID);
	}
	/**
	 * Get RedirectRequired value
	 * @return string|null
	 */
	public function getRedirectRequired()
	{
		return $this->RedirectRequired;
	}
	/**
	 * Set RedirectRequired value
	 * @param string $_redirectRequired the RedirectRequired
	 * @return string
	 */
	public function setRedirectRequired($_redirectRequired)
	{
		return ($this->RedirectRequired = $_redirectRequired);
	}
	/**
	 * Get Note value
	 * @return string|null
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Note value
	 * @param string $_note the Note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->Note = $_note);
	}
	/**
	 * Get SuccessPageRedirectRequested value
	 * @return string|null
	 */
	public function getSuccessPageRedirectRequested()
	{
		return $this->SuccessPageRedirectRequested;
	}
	/**
	 * Set SuccessPageRedirectRequested value
	 * @param string $_successPageRedirectRequested the SuccessPageRedirectRequested
	 * @return string
	 */
	public function setSuccessPageRedirectRequested($_successPageRedirectRequested)
	{
		return ($this->SuccessPageRedirectRequested = $_successPageRedirectRequested);
	}
	/**
	 * Get UserSelectedOptions value
	 * @return PayPalStructUserSelectedOptionType|null
	 */
	public function getUserSelectedOptions()
	{
		return $this->UserSelectedOptions;
	}
	/**
	 * Set UserSelectedOptions value
	 * @param PayPalStructUserSelectedOptionType $_userSelectedOptions the UserSelectedOptions
	 * @return PayPalStructUserSelectedOptionType
	 */
	public function setUserSelectedOptions($_userSelectedOptions)
	{
		return ($this->UserSelectedOptions = $_userSelectedOptions);
	}
	/**
	 * Get CoupledPaymentInfo value
	 * @return PayPalStructCoupledPaymentInfoType|null
	 */
	public function getCoupledPaymentInfo()
	{
		return $this->CoupledPaymentInfo;
	}
	/**
	 * Set CoupledPaymentInfo value
	 * @param PayPalStructCoupledPaymentInfoType $_coupledPaymentInfo the CoupledPaymentInfo
	 * @return PayPalStructCoupledPaymentInfoType
	 */
	public function setCoupledPaymentInfo($_coupledPaymentInfo)
	{
		return ($this->CoupledPaymentInfo = $_coupledPaymentInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoExpressCheckoutPaymentResponseDetailsType
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