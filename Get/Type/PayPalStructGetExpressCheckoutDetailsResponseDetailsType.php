<?php
/**
 * File for class PayPalStructGetExpressCheckoutDetailsResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetExpressCheckoutDetailsResponseDetailsType originally named GetExpressCheckoutDetailsResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetExpressCheckoutDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations: 20 single-byte characters
	 * @var string
	 */
	public $Token;
	/**
	 * The PayerInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payer
	 * @var PayPalStructPayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : A free-form field for your own use, as set by you in the Custom element of SetExpressCheckoutRequest. Character length and limitations: 256 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Your own invoice or tracking number, as set by you in the InvoiceID element of SetExpressCheckoutRequest. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ContactPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Payer's contact telephone number. PayPal returns a contact telephone number only if your Merchant account profile settings require that the buyer enter one.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ContactPhone;
	/**
	 * The BillingAgreementAcceptedStatus
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BillingAgreementAcceptedStatus;
	/**
	 * The RedirectRequired
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $RedirectRequired;
	/**
	 * The BillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in GetExpressCheckoutDetailsResponse.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $BillingAddress;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - documentation : Text note entered by the buyer in PayPal flow.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * The CheckoutStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns the status of the EC checkout session. Values include 'PaymentActionNotInitiated', 'PaymentActionFailed', 'PaymentActionInProgress', 'PaymentCompleted'.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CheckoutStatus;
	/**
	 * The PayPalAdjustment
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal may offer a discount or gift certificate to the buyer, which will be represented by a negativeamount. If the buyer has a negative balance, PayPal will add that amount to the current charges, which will be represented as a positive amount.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $PayPalAdjustment;
	/**
	 * The PaymentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the individual purchased items.
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDetailsType
	 */
	public $PaymentDetails;
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
	 * The IncentiveDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveDetailsType
	 */
	public $IncentiveDetails;
	/**
	 * The GiftMessage
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift message.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftMessage;
	/**
	 * The GiftReceiptEnable
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift receipt enable.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftReceiptEnable;
	/**
	 * The GiftWrapName
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift Wrap name.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftWrapName;
	/**
	 * The GiftWrapAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift Wrap amount.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $GiftWrapAmount;
	/**
	 * The BuyerMarketingEmail
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Buyer marketing email.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerMarketingEmail;
	/**
	 * The SurveyQuestion
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the survey question.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SurveyQuestion;
	/**
	 * The SurveyChoiceSelected
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the survey choice selected by the user.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $SurveyChoiceSelected;
	/**
	 * The PaymentRequestInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains payment request information about each bucket in the cart.
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructPaymentRequestInfoType
	 */
	public $PaymentRequestInfo;
	/**
	 * The ExternalRememberMeStatusDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Response information resulting from opt-in operation or current login bypass status.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructExternalRememberMeStatusDetailsType
	 */
	public $ExternalRememberMeStatusDetails;
	/**
	 * The RefreshTokenStatusDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Response information resulting from opt-in operation or current login bypass status.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructRefreshTokenStatusDetailsType
	 */
	public $RefreshTokenStatusDetails;
	/**
	 * Constructor method for GetExpressCheckoutDetailsResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_token
	 * @param PayPalStructPayerInfoType $_payerInfo
	 * @param string $_custom
	 * @param string $_invoiceID
	 * @param string $_contactPhone
	 * @param boolean $_billingAgreementAcceptedStatus
	 * @param string $_redirectRequired
	 * @param PayPalStructAddressType $_billingAddress
	 * @param string $_note
	 * @param string $_checkoutStatus
	 * @param PayPalStructBasicAmountType $_payPalAdjustment
	 * @param PayPalStructPaymentDetailsType $_paymentDetails
	 * @param PayPalStructUserSelectedOptionType $_userSelectedOptions
	 * @param PayPalStructIncentiveDetailsType $_incentiveDetails
	 * @param string $_giftMessage
	 * @param string $_giftReceiptEnable
	 * @param string $_giftWrapName
	 * @param PayPalStructBasicAmountType $_giftWrapAmount
	 * @param string $_buyerMarketingEmail
	 * @param string $_surveyQuestion
	 * @param string $_surveyChoiceSelected
	 * @param PayPalStructPaymentRequestInfoType $_paymentRequestInfo
	 * @param PayPalStructExternalRememberMeStatusDetailsType $_externalRememberMeStatusDetails
	 * @param PayPalStructRefreshTokenStatusDetailsType $_refreshTokenStatusDetails
	 * @return PayPalStructGetExpressCheckoutDetailsResponseDetailsType
	 */
	public function __construct($_token = NULL,$_payerInfo = NULL,$_custom = NULL,$_invoiceID = NULL,$_contactPhone = NULL,$_billingAgreementAcceptedStatus = NULL,$_redirectRequired = NULL,$_billingAddress = NULL,$_note = NULL,$_checkoutStatus = NULL,$_payPalAdjustment = NULL,$_paymentDetails = NULL,$_userSelectedOptions = NULL,$_incentiveDetails = NULL,$_giftMessage = NULL,$_giftReceiptEnable = NULL,$_giftWrapName = NULL,$_giftWrapAmount = NULL,$_buyerMarketingEmail = NULL,$_surveyQuestion = NULL,$_surveyChoiceSelected = NULL,$_paymentRequestInfo = NULL,$_externalRememberMeStatusDetails = NULL,$_refreshTokenStatusDetails = NULL)
	{
		parent::__construct(array('Token'=>$_token,'PayerInfo'=>$_payerInfo,'Custom'=>$_custom,'InvoiceID'=>$_invoiceID,'ContactPhone'=>$_contactPhone,'BillingAgreementAcceptedStatus'=>$_billingAgreementAcceptedStatus,'RedirectRequired'=>$_redirectRequired,'BillingAddress'=>$_billingAddress,'Note'=>$_note,'CheckoutStatus'=>$_checkoutStatus,'PayPalAdjustment'=>$_payPalAdjustment,'PaymentDetails'=>$_paymentDetails,'UserSelectedOptions'=>$_userSelectedOptions,'IncentiveDetails'=>$_incentiveDetails,'GiftMessage'=>$_giftMessage,'GiftReceiptEnable'=>$_giftReceiptEnable,'GiftWrapName'=>$_giftWrapName,'GiftWrapAmount'=>$_giftWrapAmount,'BuyerMarketingEmail'=>$_buyerMarketingEmail,'SurveyQuestion'=>$_surveyQuestion,'SurveyChoiceSelected'=>$_surveyChoiceSelected,'PaymentRequestInfo'=>$_paymentRequestInfo,'ExternalRememberMeStatusDetails'=>$_externalRememberMeStatusDetails,'RefreshTokenStatusDetails'=>$_refreshTokenStatusDetails));
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
	 * Get ContactPhone value
	 * @return string|null
	 */
	public function getContactPhone()
	{
		return $this->ContactPhone;
	}
	/**
	 * Set ContactPhone value
	 * @param string $_contactPhone the ContactPhone
	 * @return string
	 */
	public function setContactPhone($_contactPhone)
	{
		return ($this->ContactPhone = $_contactPhone);
	}
	/**
	 * Get BillingAgreementAcceptedStatus value
	 * @return boolean|null
	 */
	public function getBillingAgreementAcceptedStatus()
	{
		return $this->BillingAgreementAcceptedStatus;
	}
	/**
	 * Set BillingAgreementAcceptedStatus value
	 * @param boolean $_billingAgreementAcceptedStatus the BillingAgreementAcceptedStatus
	 * @return boolean
	 */
	public function setBillingAgreementAcceptedStatus($_billingAgreementAcceptedStatus)
	{
		return ($this->BillingAgreementAcceptedStatus = $_billingAgreementAcceptedStatus);
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
	 * Get CheckoutStatus value
	 * @return string|null
	 */
	public function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * Set CheckoutStatus value
	 * @param string $_checkoutStatus the CheckoutStatus
	 * @return string
	 */
	public function setCheckoutStatus($_checkoutStatus)
	{
		return ($this->CheckoutStatus = $_checkoutStatus);
	}
	/**
	 * Get PayPalAdjustment value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getPayPalAdjustment()
	{
		return $this->PayPalAdjustment;
	}
	/**
	 * Set PayPalAdjustment value
	 * @param PayPalStructBasicAmountType $_payPalAdjustment the PayPalAdjustment
	 * @return PayPalStructBasicAmountType
	 */
	public function setPayPalAdjustment($_payPalAdjustment)
	{
		return ($this->PayPalAdjustment = $_payPalAdjustment);
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
	 * Get IncentiveDetails value
	 * @return PayPalStructIncentiveDetailsType|null
	 */
	public function getIncentiveDetails()
	{
		return $this->IncentiveDetails;
	}
	/**
	 * Set IncentiveDetails value
	 * @param PayPalStructIncentiveDetailsType $_incentiveDetails the IncentiveDetails
	 * @return PayPalStructIncentiveDetailsType
	 */
	public function setIncentiveDetails($_incentiveDetails)
	{
		return ($this->IncentiveDetails = $_incentiveDetails);
	}
	/**
	 * Get GiftMessage value
	 * @return string|null
	 */
	public function getGiftMessage()
	{
		return $this->GiftMessage;
	}
	/**
	 * Set GiftMessage value
	 * @param string $_giftMessage the GiftMessage
	 * @return string
	 */
	public function setGiftMessage($_giftMessage)
	{
		return ($this->GiftMessage = $_giftMessage);
	}
	/**
	 * Get GiftReceiptEnable value
	 * @return string|null
	 */
	public function getGiftReceiptEnable()
	{
		return $this->GiftReceiptEnable;
	}
	/**
	 * Set GiftReceiptEnable value
	 * @param string $_giftReceiptEnable the GiftReceiptEnable
	 * @return string
	 */
	public function setGiftReceiptEnable($_giftReceiptEnable)
	{
		return ($this->GiftReceiptEnable = $_giftReceiptEnable);
	}
	/**
	 * Get GiftWrapName value
	 * @return string|null
	 */
	public function getGiftWrapName()
	{
		return $this->GiftWrapName;
	}
	/**
	 * Set GiftWrapName value
	 * @param string $_giftWrapName the GiftWrapName
	 * @return string
	 */
	public function setGiftWrapName($_giftWrapName)
	{
		return ($this->GiftWrapName = $_giftWrapName);
	}
	/**
	 * Get GiftWrapAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getGiftWrapAmount()
	{
		return $this->GiftWrapAmount;
	}
	/**
	 * Set GiftWrapAmount value
	 * @param PayPalStructBasicAmountType $_giftWrapAmount the GiftWrapAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setGiftWrapAmount($_giftWrapAmount)
	{
		return ($this->GiftWrapAmount = $_giftWrapAmount);
	}
	/**
	 * Get BuyerMarketingEmail value
	 * @return string|null
	 */
	public function getBuyerMarketingEmail()
	{
		return $this->BuyerMarketingEmail;
	}
	/**
	 * Set BuyerMarketingEmail value
	 * @param string $_buyerMarketingEmail the BuyerMarketingEmail
	 * @return string
	 */
	public function setBuyerMarketingEmail($_buyerMarketingEmail)
	{
		return ($this->BuyerMarketingEmail = $_buyerMarketingEmail);
	}
	/**
	 * Get SurveyQuestion value
	 * @return string|null
	 */
	public function getSurveyQuestion()
	{
		return $this->SurveyQuestion;
	}
	/**
	 * Set SurveyQuestion value
	 * @param string $_surveyQuestion the SurveyQuestion
	 * @return string
	 */
	public function setSurveyQuestion($_surveyQuestion)
	{
		return ($this->SurveyQuestion = $_surveyQuestion);
	}
	/**
	 * Get SurveyChoiceSelected value
	 * @return string|null
	 */
	public function getSurveyChoiceSelected()
	{
		return $this->SurveyChoiceSelected;
	}
	/**
	 * Set SurveyChoiceSelected value
	 * @param string $_surveyChoiceSelected the SurveyChoiceSelected
	 * @return string
	 */
	public function setSurveyChoiceSelected($_surveyChoiceSelected)
	{
		return ($this->SurveyChoiceSelected = $_surveyChoiceSelected);
	}
	/**
	 * Get PaymentRequestInfo value
	 * @return PayPalStructPaymentRequestInfoType|null
	 */
	public function getPaymentRequestInfo()
	{
		return $this->PaymentRequestInfo;
	}
	/**
	 * Set PaymentRequestInfo value
	 * @param PayPalStructPaymentRequestInfoType $_paymentRequestInfo the PaymentRequestInfo
	 * @return PayPalStructPaymentRequestInfoType
	 */
	public function setPaymentRequestInfo($_paymentRequestInfo)
	{
		return ($this->PaymentRequestInfo = $_paymentRequestInfo);
	}
	/**
	 * Get ExternalRememberMeStatusDetails value
	 * @return PayPalStructExternalRememberMeStatusDetailsType|null
	 */
	public function getExternalRememberMeStatusDetails()
	{
		return $this->ExternalRememberMeStatusDetails;
	}
	/**
	 * Set ExternalRememberMeStatusDetails value
	 * @param PayPalStructExternalRememberMeStatusDetailsType $_externalRememberMeStatusDetails the ExternalRememberMeStatusDetails
	 * @return PayPalStructExternalRememberMeStatusDetailsType
	 */
	public function setExternalRememberMeStatusDetails($_externalRememberMeStatusDetails)
	{
		return ($this->ExternalRememberMeStatusDetails = $_externalRememberMeStatusDetails);
	}
	/**
	 * Get RefreshTokenStatusDetails value
	 * @return PayPalStructRefreshTokenStatusDetailsType|null
	 */
	public function getRefreshTokenStatusDetails()
	{
		return $this->RefreshTokenStatusDetails;
	}
	/**
	 * Set RefreshTokenStatusDetails value
	 * @param PayPalStructRefreshTokenStatusDetailsType $_refreshTokenStatusDetails the RefreshTokenStatusDetails
	 * @return PayPalStructRefreshTokenStatusDetailsType
	 */
	public function setRefreshTokenStatusDetails($_refreshTokenStatusDetails)
	{
		return ($this->RefreshTokenStatusDetails = $_refreshTokenStatusDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetExpressCheckoutDetailsResponseDetailsType
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