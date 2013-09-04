<?php
/**
 * File for class PayPalStructDoExpressCheckoutPaymentRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoExpressCheckoutPaymentRequestDetailsType originally named DoExpressCheckoutPaymentRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoExpressCheckoutPaymentRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentAction
	 * Meta informations extracted from the WSDL
	 * - documentation : How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Required Character length and limitations: 20 single-byte characters
	 * @var string
	 */
	public $Token;
	/**
	 * The PayerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Encrypted PayPal customer account identification number as returned by GetExpressCheckoutDetailsResponse. Required Character length and limitations: 127 single-byte characters.
	 * - maxLength : 127
	 * @var string
	 */
	public $PayerID;
	/**
	 * The OrderURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL on Merchant site pertaining to this invoice. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OrderURL;
	/**
	 * The PaymentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payment Required
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The PromoOverrideFlag
	 * Meta informations extracted from the WSDL
	 * - documentation : Flag to indicate if previously set promoCode shall be overriden. Value 1 indicates overriding.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PromoOverrideFlag;
	/**
	 * The PromoCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Promotional financing code for item. Overrides any previous PromoCode setting.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PromoCode;
	/**
	 * The EnhancedData
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains data for enhanced data like Airline Itinerary Data.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructEnhancedDataType
	 */
	public $EnhancedData;
	/**
	 * The SoftDescriptor
	 * Meta informations extracted from the WSDL
	 * - documentation : Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SoftDescriptor;
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
	 * The ButtonSource
	 * Meta informations extracted from the WSDL
	 * - documentation : An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The SkipBACreation
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchant specified flag which indicates whether to create billing agreement as part of DoEC or not. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $SkipBACreation;
	/**
	 * The CoupledBuckets
	 * Meta informations extracted from the WSDL
	 * - documentation : Optional element that defines relationship between buckets
	 * - maxOccurs : 5
	 * - minOccurs : 0
	 * @var PayPalStructCoupledBucketsType
	 */
	public $CoupledBuckets;
	/**
	 * Constructor method for DoExpressCheckoutPaymentRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction
	 * @param string $_token
	 * @param string $_payerID
	 * @param string $_orderURL
	 * @param PayPalStructPaymentDetailsType $_paymentDetails
	 * @param string $_promoOverrideFlag
	 * @param string $_promoCode
	 * @param PayPalStructEnhancedDataType $_enhancedData
	 * @param string $_softDescriptor
	 * @param PayPalStructUserSelectedOptionType $_userSelectedOptions
	 * @param string $_giftMessage
	 * @param string $_giftReceiptEnable
	 * @param string $_giftWrapName
	 * @param PayPalStructBasicAmountType $_giftWrapAmount
	 * @param string $_buyerMarketingEmail
	 * @param string $_surveyQuestion
	 * @param string $_surveyChoiceSelected
	 * @param string $_buttonSource
	 * @param boolean $_skipBACreation
	 * @param PayPalStructCoupledBucketsType $_coupledBuckets
	 * @return PayPalStructDoExpressCheckoutPaymentRequestDetailsType
	 */
	public function __construct($_paymentAction = NULL,$_token = NULL,$_payerID = NULL,$_orderURL = NULL,$_paymentDetails = NULL,$_promoOverrideFlag = NULL,$_promoCode = NULL,$_enhancedData = NULL,$_softDescriptor = NULL,$_userSelectedOptions = NULL,$_giftMessage = NULL,$_giftReceiptEnable = NULL,$_giftWrapName = NULL,$_giftWrapAmount = NULL,$_buyerMarketingEmail = NULL,$_surveyQuestion = NULL,$_surveyChoiceSelected = NULL,$_buttonSource = NULL,$_skipBACreation = NULL,$_coupledBuckets = NULL)
	{
		parent::__construct(array('PaymentAction'=>$_paymentAction,'Token'=>$_token,'PayerID'=>$_payerID,'OrderURL'=>$_orderURL,'PaymentDetails'=>$_paymentDetails,'PromoOverrideFlag'=>$_promoOverrideFlag,'PromoCode'=>$_promoCode,'EnhancedData'=>$_enhancedData,'SoftDescriptor'=>$_softDescriptor,'UserSelectedOptions'=>$_userSelectedOptions,'GiftMessage'=>$_giftMessage,'GiftReceiptEnable'=>$_giftReceiptEnable,'GiftWrapName'=>$_giftWrapName,'GiftWrapAmount'=>$_giftWrapAmount,'BuyerMarketingEmail'=>$_buyerMarketingEmail,'SurveyQuestion'=>$_surveyQuestion,'SurveyChoiceSelected'=>$_surveyChoiceSelected,'ButtonSource'=>$_buttonSource,'SkipBACreation'=>$_skipBACreation,'CoupledBuckets'=>$_coupledBuckets));
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
	 * Get PayerID value
	 * @return string|null
	 */
	public function getPayerID()
	{
		return $this->PayerID;
	}
	/**
	 * Set PayerID value
	 * @param string $_payerID the PayerID
	 * @return string
	 */
	public function setPayerID($_payerID)
	{
		return ($this->PayerID = $_payerID);
	}
	/**
	 * Get OrderURL value
	 * @return string|null
	 */
	public function getOrderURL()
	{
		return $this->OrderURL;
	}
	/**
	 * Set OrderURL value
	 * @param string $_orderURL the OrderURL
	 * @return string
	 */
	public function setOrderURL($_orderURL)
	{
		return ($this->OrderURL = $_orderURL);
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
	 * Get PromoOverrideFlag value
	 * @return string|null
	 */
	public function getPromoOverrideFlag()
	{
		return $this->PromoOverrideFlag;
	}
	/**
	 * Set PromoOverrideFlag value
	 * @param string $_promoOverrideFlag the PromoOverrideFlag
	 * @return string
	 */
	public function setPromoOverrideFlag($_promoOverrideFlag)
	{
		return ($this->PromoOverrideFlag = $_promoOverrideFlag);
	}
	/**
	 * Get PromoCode value
	 * @return string|null
	 */
	public function getPromoCode()
	{
		return $this->PromoCode;
	}
	/**
	 * Set PromoCode value
	 * @param string $_promoCode the PromoCode
	 * @return string
	 */
	public function setPromoCode($_promoCode)
	{
		return ($this->PromoCode = $_promoCode);
	}
	/**
	 * Get EnhancedData value
	 * @return PayPalStructEnhancedDataType|null
	 */
	public function getEnhancedData()
	{
		return $this->EnhancedData;
	}
	/**
	 * Set EnhancedData value
	 * @param PayPalStructEnhancedDataType $_enhancedData the EnhancedData
	 * @return PayPalStructEnhancedDataType
	 */
	public function setEnhancedData($_enhancedData)
	{
		return ($this->EnhancedData = $_enhancedData);
	}
	/**
	 * Get SoftDescriptor value
	 * @return string|null
	 */
	public function getSoftDescriptor()
	{
		return $this->SoftDescriptor;
	}
	/**
	 * Set SoftDescriptor value
	 * @param string $_softDescriptor the SoftDescriptor
	 * @return string
	 */
	public function setSoftDescriptor($_softDescriptor)
	{
		return ($this->SoftDescriptor = $_softDescriptor);
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
	 * Get ButtonSource value
	 * @return string|null
	 */
	public function getButtonSource()
	{
		return $this->ButtonSource;
	}
	/**
	 * Set ButtonSource value
	 * @param string $_buttonSource the ButtonSource
	 * @return string
	 */
	public function setButtonSource($_buttonSource)
	{
		return ($this->ButtonSource = $_buttonSource);
	}
	/**
	 * Get SkipBACreation value
	 * @return boolean|null
	 */
	public function getSkipBACreation()
	{
		return $this->SkipBACreation;
	}
	/**
	 * Set SkipBACreation value
	 * @param boolean $_skipBACreation the SkipBACreation
	 * @return boolean
	 */
	public function setSkipBACreation($_skipBACreation)
	{
		return ($this->SkipBACreation = $_skipBACreation);
	}
	/**
	 * Get CoupledBuckets value
	 * @return PayPalStructCoupledBucketsType|null
	 */
	public function getCoupledBuckets()
	{
		return $this->CoupledBuckets;
	}
	/**
	 * Set CoupledBuckets value
	 * @param PayPalStructCoupledBucketsType $_coupledBuckets the CoupledBuckets
	 * @return PayPalStructCoupledBucketsType
	 */
	public function setCoupledBuckets($_coupledBuckets)
	{
		return ($this->CoupledBuckets = $_coupledBuckets);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoExpressCheckoutPaymentRequestDetailsType
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