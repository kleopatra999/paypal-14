<?php
/**
 * File for class PayPalStructBMGetButtonDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMGetButtonDetailsResponseType originally named BMGetButtonDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMGetButtonDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The Website
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Website;
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Email;
	/**
	 * The Mobile
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Mobile;
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of button. One of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonTypeType
	 */
	public $ButtonType;
	/**
	 * The ButtonCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of button code. One of the following: hosted, encrypted or cleartext
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonCodeType
	 */
	public $ButtonCode;
	/**
	 * The ButtonSubType
	 * Meta informations extracted from the WSDL
	 * - documentation : Button sub type. optional for button types buynow and cart only Either PRODUCTS or SERVICES
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonSubTypeType
	 */
	public $ButtonSubType;
	/**
	 * The ButtonVar
	 * Meta informations extracted from the WSDL
	 * - documentation : Button Variable information Character length and limitations: 63 single-byte alphanumeric characters
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
	 * - documentation : Text field
	 * - maxOccurs : 2
	 * - minOccurs : 0
	 * @var string
	 */
	public $TextBox;
	/**
	 * The ButtonImage
	 * Meta informations extracted from the WSDL
	 * - documentation : Button image to use. One of: REG, SML, or CC
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonImageType
	 */
	public $ButtonImage;
	/**
	 * The ButtonImageURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Button URL for custom button image.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonImageURL;
	/**
	 * The BuyNowText
	 * Meta informations extracted from the WSDL
	 * - documentation : Text to use on Buy Now Button. Either BUYNOW or PAYNOW
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumBuyNowTextType
	 */
	public $BuyNowText;
	/**
	 * The SubscribeText
	 * Meta informations extracted from the WSDL
	 * - documentation : Text to use on Subscribe button. Must be either BUYNOW or SUBSCRIBE
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumSubscribeTextType
	 */
	public $SubscribeText;
	/**
	 * The ButtonCountry
	 * Meta informations extracted from the WSDL
	 * - documentation : Button Country. Valid ISO country code or 'International'
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumCountryCodeType
	 */
	public $ButtonCountry;
	/**
	 * The ButtonLanguage
	 * Meta informations extracted from the WSDL
	 * - documentation : Button language code. Character length and limitations: 3 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonLanguage;
	/**
	 * Constructor method for BMGetButtonDetailsResponseType
	 * @see parent::__construct()
	 * @param string $_website
	 * @param string $_email
	 * @param string $_mobile
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
	 * @return PayPalStructBMGetButtonDetailsResponseType
	 */
	public function __construct($_website = NULL,$_email = NULL,$_mobile = NULL,$_hostedButtonID = NULL,$_buttonType = NULL,$_buttonCode = NULL,$_buttonSubType = NULL,$_buttonVar = NULL,$_optionDetails = NULL,$_textBox = NULL,$_buttonImage = NULL,$_buttonImageURL = NULL,$_buyNowText = NULL,$_subscribeText = NULL,$_buttonCountry = NULL,$_buttonLanguage = NULL)
	{
		PayPalWsdlClass::__construct(array('Website'=>$_website,'Email'=>$_email,'Mobile'=>$_mobile,'HostedButtonID'=>$_hostedButtonID,'ButtonType'=>$_buttonType,'ButtonCode'=>$_buttonCode,'ButtonSubType'=>$_buttonSubType,'ButtonVar'=>$_buttonVar,'OptionDetails'=>$_optionDetails,'TextBox'=>$_textBox,'ButtonImage'=>$_buttonImage,'ButtonImageURL'=>$_buttonImageURL,'BuyNowText'=>$_buyNowText,'SubscribeText'=>$_subscribeText,'ButtonCountry'=>$_buttonCountry,'ButtonLanguage'=>$_buttonLanguage));
	}
	/**
	 * Get Website value
	 * @return string|null
	 */
	public function getWebsite()
	{
		return $this->Website;
	}
	/**
	 * Set Website value
	 * @param string $_website the Website
	 * @return string
	 */
	public function setWebsite($_website)
	{
		return ($this->Website = $_website);
	}
	/**
	 * Get Email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Email value
	 * @param string $_email the Email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->Email = $_email);
	}
	/**
	 * Get Mobile value
	 * @return string|null
	 */
	public function getMobile()
	{
		return $this->Mobile;
	}
	/**
	 * Set Mobile value
	 * @param string $_mobile the Mobile
	 * @return string
	 */
	public function setMobile($_mobile)
	{
		return ($this->Mobile = $_mobile);
	}
	/**
	 * Get HostedButtonID value
	 * @return string|null
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
	 * @return PayPalStructBMGetButtonDetailsResponseType
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