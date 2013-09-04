<?php
/**
 * File for class PayPalStructPaymentTransactionType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentTransactionType originally named PaymentTransactionType
 * Documentation : PaymentTransactionType Information about a PayPal payment from the seller side
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentTransactionType extends PayPalWsdlClass
{
	/**
	 * The ReceiverInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the recipient of the payment
	 * @var PayPalStructReceiverInfoType
	 */
	public $ReceiverInfo;
	/**
	 * The PayerInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payer
	 * @var PayPalStructPayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The TPLReferenceID
	 * Meta informations extracted from the WSDL
	 * - documentation : This field is for holding ReferenceId for shippment sent from Merchant to the 3rd Party
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $TPLReferenceID;
	/**
	 * The PaymentInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the transaction
	 * @var PayPalStructPaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The PaymentItemInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about an individual item in the transaction
	 * - minOccurs : 0
	 * @var PayPalStructPaymentItemInfoType
	 */
	public $PaymentItemInfo;
	/**
	 * The OfferCouponInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about an individual Offer and Coupon information in the transaction
	 * - minOccurs : 0
	 * @var PayPalStructOfferCouponInfoType
	 */
	public $OfferCouponInfo;
	/**
	 * The SecondaryAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about Secondary Address
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $SecondaryAddress;
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
	 * The GiftReceipt
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift receipt.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftReceipt;
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
	 * The BuyerEmailOptIn
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Buyer email.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerEmailOptIn;
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
	 * Constructor method for PaymentTransactionType
	 * @see parent::__construct()
	 * @param PayPalStructReceiverInfoType $_receiverInfo
	 * @param PayPalStructPayerInfoType $_payerInfo
	 * @param string $_tPLReferenceID
	 * @param PayPalStructPaymentInfoType $_paymentInfo
	 * @param PayPalStructPaymentItemInfoType $_paymentItemInfo
	 * @param PayPalStructOfferCouponInfoType $_offerCouponInfo
	 * @param PayPalStructAddressType $_secondaryAddress
	 * @param PayPalStructUserSelectedOptionType $_userSelectedOptions
	 * @param string $_giftMessage
	 * @param string $_giftReceipt
	 * @param string $_giftWrapName
	 * @param PayPalStructBasicAmountType $_giftWrapAmount
	 * @param string $_buyerEmailOptIn
	 * @param string $_surveyQuestion
	 * @param string $_surveyChoiceSelected
	 * @return PayPalStructPaymentTransactionType
	 */
	public function __construct($_receiverInfo = NULL,$_payerInfo = NULL,$_tPLReferenceID = NULL,$_paymentInfo = NULL,$_paymentItemInfo = NULL,$_offerCouponInfo = NULL,$_secondaryAddress = NULL,$_userSelectedOptions = NULL,$_giftMessage = NULL,$_giftReceipt = NULL,$_giftWrapName = NULL,$_giftWrapAmount = NULL,$_buyerEmailOptIn = NULL,$_surveyQuestion = NULL,$_surveyChoiceSelected = NULL)
	{
		parent::__construct(array('ReceiverInfo'=>$_receiverInfo,'PayerInfo'=>$_payerInfo,'TPLReferenceID'=>$_tPLReferenceID,'PaymentInfo'=>$_paymentInfo,'PaymentItemInfo'=>$_paymentItemInfo,'OfferCouponInfo'=>$_offerCouponInfo,'SecondaryAddress'=>$_secondaryAddress,'UserSelectedOptions'=>$_userSelectedOptions,'GiftMessage'=>$_giftMessage,'GiftReceipt'=>$_giftReceipt,'GiftWrapName'=>$_giftWrapName,'GiftWrapAmount'=>$_giftWrapAmount,'BuyerEmailOptIn'=>$_buyerEmailOptIn,'SurveyQuestion'=>$_surveyQuestion,'SurveyChoiceSelected'=>$_surveyChoiceSelected));
	}
	/**
	 * Get ReceiverInfo value
	 * @return PayPalStructReceiverInfoType|null
	 */
	public function getReceiverInfo()
	{
		return $this->ReceiverInfo;
	}
	/**
	 * Set ReceiverInfo value
	 * @param PayPalStructReceiverInfoType $_receiverInfo the ReceiverInfo
	 * @return PayPalStructReceiverInfoType
	 */
	public function setReceiverInfo($_receiverInfo)
	{
		return ($this->ReceiverInfo = $_receiverInfo);
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
	 * Get TPLReferenceID value
	 * @return string|null
	 */
	public function getTPLReferenceID()
	{
		return $this->TPLReferenceID;
	}
	/**
	 * Set TPLReferenceID value
	 * @param string $_tPLReferenceID the TPLReferenceID
	 * @return string
	 */
	public function setTPLReferenceID($_tPLReferenceID)
	{
		return ($this->TPLReferenceID = $_tPLReferenceID);
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
	 * Get PaymentItemInfo value
	 * @return PayPalStructPaymentItemInfoType|null
	 */
	public function getPaymentItemInfo()
	{
		return $this->PaymentItemInfo;
	}
	/**
	 * Set PaymentItemInfo value
	 * @param PayPalStructPaymentItemInfoType $_paymentItemInfo the PaymentItemInfo
	 * @return PayPalStructPaymentItemInfoType
	 */
	public function setPaymentItemInfo($_paymentItemInfo)
	{
		return ($this->PaymentItemInfo = $_paymentItemInfo);
	}
	/**
	 * Get OfferCouponInfo value
	 * @return PayPalStructOfferCouponInfoType|null
	 */
	public function getOfferCouponInfo()
	{
		return $this->OfferCouponInfo;
	}
	/**
	 * Set OfferCouponInfo value
	 * @param PayPalStructOfferCouponInfoType $_offerCouponInfo the OfferCouponInfo
	 * @return PayPalStructOfferCouponInfoType
	 */
	public function setOfferCouponInfo($_offerCouponInfo)
	{
		return ($this->OfferCouponInfo = $_offerCouponInfo);
	}
	/**
	 * Get SecondaryAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getSecondaryAddress()
	{
		return $this->SecondaryAddress;
	}
	/**
	 * Set SecondaryAddress value
	 * @param PayPalStructAddressType $_secondaryAddress the SecondaryAddress
	 * @return PayPalStructAddressType
	 */
	public function setSecondaryAddress($_secondaryAddress)
	{
		return ($this->SecondaryAddress = $_secondaryAddress);
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
	 * Get GiftReceipt value
	 * @return string|null
	 */
	public function getGiftReceipt()
	{
		return $this->GiftReceipt;
	}
	/**
	 * Set GiftReceipt value
	 * @param string $_giftReceipt the GiftReceipt
	 * @return string
	 */
	public function setGiftReceipt($_giftReceipt)
	{
		return ($this->GiftReceipt = $_giftReceipt);
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
	 * Get BuyerEmailOptIn value
	 * @return string|null
	 */
	public function getBuyerEmailOptIn()
	{
		return $this->BuyerEmailOptIn;
	}
	/**
	 * Set BuyerEmailOptIn value
	 * @param string $_buyerEmailOptIn the BuyerEmailOptIn
	 * @return string
	 */
	public function setBuyerEmailOptIn($_buyerEmailOptIn)
	{
		return ($this->BuyerEmailOptIn = $_buyerEmailOptIn);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentTransactionType
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