<?php
/**
 * File for class PayPalStructBMUpdateButtonRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMUpdateButtonRequestType originally named BMUpdateButtonRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMUpdateButtonRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - documentation : Hosted Button id of the button to update. Required Character length and limitations: 10 single-byte numeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of Button to create. Required Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonTypeType
	 */
	public $ButtonType;
	/**
	 * The ButtonCode
	 * Meta informations extracted from the WSDL
	 * - documentation : button code. optional Must be one of the following: hosted, encrypted or cleartext
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonCodeType
	 */
	public $ButtonCode;
	/**
	 * The ButtonSubType
	 * Meta informations extracted from the WSDL
	 * - documentation : Button sub type. optional for button types buynow and cart only Must Be either PRODUCTS or SERVICES
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonSubTypeType
	 */
	public $ButtonSubType;
	/**
	 * The ButtonVar
	 * Meta informations extracted from the WSDL
	 * - documentation : Button Variable information At least one required recurring Character length and limitations: 63 single-byte alphanumeric characters
	 * - maxOccurs : 1000
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonVar;
	/**
	 * The OptionDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 5
	 * - minOccurs : 0
	 * @var PayPalStructOptionDetailsType
	 */
	public $OptionDetails;
	/**
	 * The TextBox
	 * Meta informations extracted from the WSDL
	 * - documentation : Details of each option for the button. Optional
	 * - maxOccurs : 2
	 * - minOccurs : 0
	 * @var string
	 */
	public $TextBox;
	/**
	 * The ButtonImage
	 * Meta informations extracted from the WSDL
	 * - documentation : Button image to use. Optional Must be one of: REG, SML, or CC
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonImageType
	 */
	public $ButtonImage;
	/**
	 * The ButtonImageURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Button URL for custom button image. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonImageURL;
	/**
	 * The BuyNowText
	 * Meta informations extracted from the WSDL
	 * - documentation : Text to use on Buy Now Button. Optional Must be either BUYNOW or PAYNOW
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumBuyNowTextType
	 */
	public $BuyNowText;
	/**
	 * The SubscribeText
	 * Meta informations extracted from the WSDL
	 * - documentation : Text to use on Subscribe button. Optional Must be either BUYNOW or SUBSCRIBE
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumSubscribeTextType
	 */
	public $SubscribeText;
	/**
	 * The ButtonCountry
	 * Meta informations extracted from the WSDL
	 * - documentation : Button Country. Optional Must be valid ISO country code
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumCountryCodeType
	 */
	public $ButtonCountry;
	/**
	 * The ButtonLanguage
	 * Meta informations extracted from the WSDL
	 * - documentation : Button language code. Optional Character length and limitations: 2 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonLanguage;
	/**
	 * Constructor method for BMUpdateButtonRequestType
	 * @see parent::__construct()
	 * @param string $_hostedButtonID
	 * @param PayPalEnumButtonTypeType $_buttonType
	 * @param PayPalEnumButtonCodeType $_buttonCode
	 * @param PayPalEnumButtonSubTypeType $_buttonSubType
	 * @param string $_buttonVar
	 * @param PayPalStructOptionDetailsType $_optionDetails
	 * @param string $_textBox
	 * @param PayPalEnumButtonImageType $_buttonImage
	 * @param string $_buttonImageURL
	 * @param PayPalEnumBuyNowTextType $_buyNowText
	 * @param PayPalEnumSubscribeTextType $_subscribeText
	 * @param PayPalEnumCountryCodeType $_buttonCountry
	 * @param string $_buttonLanguage
	 * @return PayPalStructBMUpdateButtonRequestType
	 */
	public function __construct($_hostedButtonID,$_buttonType = NULL,$_buttonCode = NULL,$_buttonSubType = NULL,$_buttonVar = NULL,$_optionDetails = NULL,$_textBox = NULL,$_buttonImage = NULL,$_buttonImageURL = NULL,$_buyNowText = NULL,$_subscribeText = NULL,$_buttonCountry = NULL,$_buttonLanguage = NULL)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_hostedButtonID,'ButtonType'=>$_buttonType,'ButtonCode'=>$_buttonCode,'ButtonSubType'=>$_buttonSubType,'ButtonVar'=>$_buttonVar,'OptionDetails'=>$_optionDetails,'TextBox'=>$_textBox,'ButtonImage'=>$_buttonImage,'ButtonImageURL'=>$_buttonImageURL,'BuyNowText'=>$_buyNowText,'SubscribeText'=>$_subscribeText,'ButtonCountry'=>$_buttonCountry,'ButtonLanguage'=>$_buttonLanguage));
	}
	/**
	 * Get HostedButtonID value
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set HostedButtonID value
	 * @param string $_hostedButtonID the HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_hostedButtonID)
	{
		return ($this->HostedButtonID = $_hostedButtonID);
	}
	/**
	 * Get ButtonType value
	 * @return PayPalEnumButtonTypeType|null
	 */
	public function getButtonType()
	{
		return $this->ButtonType;
	}
	/**
	 * Set ButtonType value
	 * @uses PayPalEnumButtonTypeType::valueIsValid()
	 * @param PayPalEnumButtonTypeType $_buttonType the ButtonType
	 * @return PayPalEnumButtonTypeType
	 */
	public function setButtonType($_buttonType)
	{
		if(!PayPalEnumButtonTypeType::valueIsValid($_buttonType))
		{
			return false;
		}
		return ($this->ButtonType = $_buttonType);
	}
	/**
	 * Get ButtonCode value
	 * @return PayPalEnumButtonCodeType|null
	 */
	public function getButtonCode()
	{
		return $this->ButtonCode;
	}
	/**
	 * Set ButtonCode value
	 * @uses PayPalEnumButtonCodeType::valueIsValid()
	 * @param PayPalEnumButtonCodeType $_buttonCode the ButtonCode
	 * @return PayPalEnumButtonCodeType
	 */
	public function setButtonCode($_buttonCode)
	{
		if(!PayPalEnumButtonCodeType::valueIsValid($_buttonCode))
		{
			return false;
		}
		return ($this->ButtonCode = $_buttonCode);
	}
	/**
	 * Get ButtonSubType value
	 * @return PayPalEnumButtonSubTypeType|null
	 */
	public function getButtonSubType()
	{
		return $this->ButtonSubType;
	}
	/**
	 * Set ButtonSubType value
	 * @uses PayPalEnumButtonSubTypeType::valueIsValid()
	 * @param PayPalEnumButtonSubTypeType $_buttonSubType the ButtonSubType
	 * @return PayPalEnumButtonSubTypeType
	 */
	public function setButtonSubType($_buttonSubType)
	{
		if(!PayPalEnumButtonSubTypeType::valueIsValid($_buttonSubType))
		{
			return false;
		}
		return ($this->ButtonSubType = $_buttonSubType);
	}
	/**
	 * Get ButtonVar value
	 * @return string|null
	 */
	public function getButtonVar()
	{
		return $this->ButtonVar;
	}
	/**
	 * Set ButtonVar value
	 * @param string $_buttonVar the ButtonVar
	 * @return string
	 */
	public function setButtonVar($_buttonVar)
	{
		return ($this->ButtonVar = $_buttonVar);
	}
	/**
	 * Get OptionDetails value
	 * @return PayPalStructOptionDetailsType|null
	 */
	public function getOptionDetails()
	{
		return $this->OptionDetails;
	}
	/**
	 * Set OptionDetails value
	 * @param PayPalStructOptionDetailsType $_optionDetails the OptionDetails
	 * @return PayPalStructOptionDetailsType
	 */
	public function setOptionDetails($_optionDetails)
	{
		return ($this->OptionDetails = $_optionDetails);
	}
	/**
	 * Get TextBox value
	 * @return string|null
	 */
	public function getTextBox()
	{
		return $this->TextBox;
	}
	/**
	 * Set TextBox value
	 * @param string $_textBox the TextBox
	 * @return string
	 */
	public function setTextBox($_textBox)
	{
		return ($this->TextBox = $_textBox);
	}
	/**
	 * Get ButtonImage value
	 * @return PayPalEnumButtonImageType|null
	 */
	public function getButtonImage()
	{
		return $this->ButtonImage;
	}
	/**
	 * Set ButtonImage value
	 * @uses PayPalEnumButtonImageType::valueIsValid()
	 * @param PayPalEnumButtonImageType $_buttonImage the ButtonImage
	 * @return PayPalEnumButtonImageType
	 */
	public function setButtonImage($_buttonImage)
	{
		if(!PayPalEnumButtonImageType::valueIsValid($_buttonImage))
		{
			return false;
		}
		return ($this->ButtonImage = $_buttonImage);
	}
	/**
	 * Get ButtonImageURL value
	 * @return string|null
	 */
	public function getButtonImageURL()
	{
		return $this->ButtonImageURL;
	}
	/**
	 * Set ButtonImageURL value
	 * @param string $_buttonImageURL the ButtonImageURL
	 * @return string
	 */
	public function setButtonImageURL($_buttonImageURL)
	{
		return ($this->ButtonImageURL = $_buttonImageURL);
	}
	/**
	 * Get BuyNowText value
	 * @return PayPalEnumBuyNowTextType|null
	 */
	public function getBuyNowText()
	{
		return $this->BuyNowText;
	}
	/**
	 * Set BuyNowText value
	 * @uses PayPalEnumBuyNowTextType::valueIsValid()
	 * @param PayPalEnumBuyNowTextType $_buyNowText the BuyNowText
	 * @return PayPalEnumBuyNowTextType
	 */
	public function setBuyNowText($_buyNowText)
	{
		if(!PayPalEnumBuyNowTextType::valueIsValid($_buyNowText))
		{
			return false;
		}
		return ($this->BuyNowText = $_buyNowText);
	}
	/**
	 * Get SubscribeText value
	 * @return PayPalEnumSubscribeTextType|null
	 */
	public function getSubscribeText()
	{
		return $this->SubscribeText;
	}
	/**
	 * Set SubscribeText value
	 * @uses PayPalEnumSubscribeTextType::valueIsValid()
	 * @param PayPalEnumSubscribeTextType $_subscribeText the SubscribeText
	 * @return PayPalEnumSubscribeTextType
	 */
	public function setSubscribeText($_subscribeText)
	{
		if(!PayPalEnumSubscribeTextType::valueIsValid($_subscribeText))
		{
			return false;
		}
		return ($this->SubscribeText = $_subscribeText);
	}
	/**
	 * Get ButtonCountry value
	 * @return PayPalEnumCountryCodeType|null
	 */
	public function getButtonCountry()
	{
		return $this->ButtonCountry;
	}
	/**
	 * Set ButtonCountry value
	 * @uses PayPalEnumCountryCodeType::valueIsValid()
	 * @param PayPalEnumCountryCodeType $_buttonCountry the ButtonCountry
	 * @return PayPalEnumCountryCodeType
	 */
	public function setButtonCountry($_buttonCountry)
	{
		if(!PayPalEnumCountryCodeType::valueIsValid($_buttonCountry))
		{
			return false;
		}
		return ($this->ButtonCountry = $_buttonCountry);
	}
	/**
	 * Get ButtonLanguage value
	 * @return string|null
	 */
	public function getButtonLanguage()
	{
		return $this->ButtonLanguage;
	}
	/**
	 * Set ButtonLanguage value
	 * @param string $_buttonLanguage the ButtonLanguage
	 * @return string
	 */
	public function setButtonLanguage($_buttonLanguage)
	{
		return ($this->ButtonLanguage = $_buttonLanguage);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMUpdateButtonRequestType
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