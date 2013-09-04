<?php
/**
 * File for class PayPalStructUserType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUserType originally named UserType
 * Documentation : Feedback scores are a quantitative expression of the desirability of dealing with that person as a Buyer or a Seller in auction transactions. Each auction transaction can result in one feedback entry for a given user (the Buyer can leave one feedback about the Seller and the Seller can leave one feedback about the Buyer). That one feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback score (referred to as a "feedback rating" on the eBay site). This rating is commonly expressed as the eBay Feedback score for the user.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUserType extends PayPalWsdlClass
{
	/**
	 * The AboutMePage
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $AboutMePage;
	/**
	 * The EAISToken
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $EAISToken;
	/**
	 * The Email
	 * @var string
	 */
	public $Email;
	/**
	 * The FeedbackScore
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The FeedbackPrivate
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $FeedbackPrivate;
	/**
	 * The FeedbackRatingStar
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumFeedbackRatingStarCodeType
	 */
	public $FeedbackRatingStar;
	/**
	 * The IDVerified
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $IDVerified;
	/**
	 * The NewUser
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $NewUser;
	/**
	 * The RegistrationAddress
	 * @var PayPalStructAddressType
	 */
	public $RegistrationAddress;
	/**
	 * The RegistrationDate
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * The Site
	 * @var PayPalEnumSiteCodeType
	 */
	public $Site;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumUserStatusCodeType
	 */
	public $Status;
	/**
	 * The UserID
	 * Meta informations extracted from the WSDL
	 * - maxLength : 127
	 * @var string
	 */
	public $UserID;
	/**
	 * The UserIDChanged
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $UserIDChanged;
	/**
	 * The UserIDLastChanged
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $UserIDLastChanged;
	/**
	 * The VATStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : If present, indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See Value-Added Tax (VAT). Not returned for users whose country of residence is outside the EU. Possible values for the user's status: 2 = Residence in an EU country but user registered as VAT-exempt 3 = Residence in an EU country and user not registered as VAT-exempt
	 * - minOccurs : 0
	 * @var PayPalEnumVATStatusCodeType
	 */
	public $VATStatus;
	/**
	 * The BuyerInfo
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBuyerType
	 */
	public $BuyerInfo;
	/**
	 * The SellerInfo
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructSellerType
	 */
	public $SellerInfo;
	/**
	 * Constructor method for UserType
	 * @see parent::__construct()
	 * @param boolean $_aboutMePage
	 * @param string $_eAISToken
	 * @param string $_email
	 * @param int $_feedbackScore
	 * @param boolean $_feedbackPrivate
	 * @param PayPalEnumFeedbackRatingStarCodeType $_feedbackRatingStar
	 * @param boolean $_iDVerified
	 * @param boolean $_newUser
	 * @param PayPalStructAddressType $_registrationAddress
	 * @param dateTime $_registrationDate
	 * @param PayPalEnumSiteCodeType $_site
	 * @param PayPalEnumUserStatusCodeType $_status
	 * @param string $_userID
	 * @param boolean $_userIDChanged
	 * @param dateTime $_userIDLastChanged
	 * @param PayPalEnumVATStatusCodeType $_vATStatus
	 * @param PayPalStructBuyerType $_buyerInfo
	 * @param PayPalStructSellerType $_sellerInfo
	 * @return PayPalStructUserType
	 */
	public function __construct($_aboutMePage = NULL,$_eAISToken = NULL,$_email = NULL,$_feedbackScore = NULL,$_feedbackPrivate = NULL,$_feedbackRatingStar = NULL,$_iDVerified = NULL,$_newUser = NULL,$_registrationAddress = NULL,$_registrationDate = NULL,$_site = NULL,$_status = NULL,$_userID = NULL,$_userIDChanged = NULL,$_userIDLastChanged = NULL,$_vATStatus = NULL,$_buyerInfo = NULL,$_sellerInfo = NULL)
	{
		parent::__construct(array('AboutMePage'=>$_aboutMePage,'EAISToken'=>$_eAISToken,'Email'=>$_email,'FeedbackScore'=>$_feedbackScore,'FeedbackPrivate'=>$_feedbackPrivate,'FeedbackRatingStar'=>$_feedbackRatingStar,'IDVerified'=>$_iDVerified,'NewUser'=>$_newUser,'RegistrationAddress'=>$_registrationAddress,'RegistrationDate'=>$_registrationDate,'Site'=>$_site,'Status'=>$_status,'UserID'=>$_userID,'UserIDChanged'=>$_userIDChanged,'UserIDLastChanged'=>$_userIDLastChanged,'VATStatus'=>$_vATStatus,'BuyerInfo'=>$_buyerInfo,'SellerInfo'=>$_sellerInfo));
	}
	/**
	 * Get AboutMePage value
	 * @return boolean|null
	 */
	public function getAboutMePage()
	{
		return $this->AboutMePage;
	}
	/**
	 * Set AboutMePage value
	 * @param boolean $_aboutMePage the AboutMePage
	 * @return boolean
	 */
	public function setAboutMePage($_aboutMePage)
	{
		return ($this->AboutMePage = $_aboutMePage);
	}
	/**
	 * Get EAISToken value
	 * @return string|null
	 */
	public function getEAISToken()
	{
		return $this->EAISToken;
	}
	/**
	 * Set EAISToken value
	 * @param string $_eAISToken the EAISToken
	 * @return string
	 */
	public function setEAISToken($_eAISToken)
	{
		return ($this->EAISToken = $_eAISToken);
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
	 * Get FeedbackScore value
	 * @return int|null
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set FeedbackScore value
	 * @param int $_feedbackScore the FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_feedbackScore)
	{
		return ($this->FeedbackScore = $_feedbackScore);
	}
	/**
	 * Get FeedbackPrivate value
	 * @return boolean|null
	 */
	public function getFeedbackPrivate()
	{
		return $this->FeedbackPrivate;
	}
	/**
	 * Set FeedbackPrivate value
	 * @param boolean $_feedbackPrivate the FeedbackPrivate
	 * @return boolean
	 */
	public function setFeedbackPrivate($_feedbackPrivate)
	{
		return ($this->FeedbackPrivate = $_feedbackPrivate);
	}
	/**
	 * Get FeedbackRatingStar value
	 * @return PayPalEnumFeedbackRatingStarCodeType|null
	 */
	public function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
	}
	/**
	 * Set FeedbackRatingStar value
	 * @uses PayPalEnumFeedbackRatingStarCodeType::valueIsValid()
	 * @param PayPalEnumFeedbackRatingStarCodeType $_feedbackRatingStar the FeedbackRatingStar
	 * @return PayPalEnumFeedbackRatingStarCodeType
	 */
	public function setFeedbackRatingStar($_feedbackRatingStar)
	{
		if(!PayPalEnumFeedbackRatingStarCodeType::valueIsValid($_feedbackRatingStar))
		{
			return false;
		}
		return ($this->FeedbackRatingStar = $_feedbackRatingStar);
	}
	/**
	 * Get IDVerified value
	 * @return boolean|null
	 */
	public function getIDVerified()
	{
		return $this->IDVerified;
	}
	/**
	 * Set IDVerified value
	 * @param boolean $_iDVerified the IDVerified
	 * @return boolean
	 */
	public function setIDVerified($_iDVerified)
	{
		return ($this->IDVerified = $_iDVerified);
	}
	/**
	 * Get NewUser value
	 * @return boolean|null
	 */
	public function getNewUser()
	{
		return $this->NewUser;
	}
	/**
	 * Set NewUser value
	 * @param boolean $_newUser the NewUser
	 * @return boolean
	 */
	public function setNewUser($_newUser)
	{
		return ($this->NewUser = $_newUser);
	}
	/**
	 * Get RegistrationAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getRegistrationAddress()
	{
		return $this->RegistrationAddress;
	}
	/**
	 * Set RegistrationAddress value
	 * @param PayPalStructAddressType $_registrationAddress the RegistrationAddress
	 * @return PayPalStructAddressType
	 */
	public function setRegistrationAddress($_registrationAddress)
	{
		return ($this->RegistrationAddress = $_registrationAddress);
	}
	/**
	 * Get RegistrationDate value
	 * @return dateTime|null
	 */
	public function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * Set RegistrationDate value
	 * @param dateTime $_registrationDate the RegistrationDate
	 * @return dateTime
	 */
	public function setRegistrationDate($_registrationDate)
	{
		return ($this->RegistrationDate = $_registrationDate);
	}
	/**
	 * Get Site value
	 * @return PayPalEnumSiteCodeType|null
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set Site value
	 * @uses PayPalEnumSiteCodeType::valueIsValid()
	 * @param PayPalEnumSiteCodeType $_site the Site
	 * @return PayPalEnumSiteCodeType
	 */
	public function setSite($_site)
	{
		if(!PayPalEnumSiteCodeType::valueIsValid($_site))
		{
			return false;
		}
		return ($this->Site = $_site);
	}
	/**
	 * Get Status value
	 * @return PayPalEnumUserStatusCodeType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses PayPalEnumUserStatusCodeType::valueIsValid()
	 * @param PayPalEnumUserStatusCodeType $_status the Status
	 * @return PayPalEnumUserStatusCodeType
	 */
	public function setStatus($_status)
	{
		if(!PayPalEnumUserStatusCodeType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get UserID value
	 * @return string|null
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set UserID value
	 * @param string $_userID the UserID
	 * @return string
	 */
	public function setUserID($_userID)
	{
		return ($this->UserID = $_userID);
	}
	/**
	 * Get UserIDChanged value
	 * @return boolean|null
	 */
	public function getUserIDChanged()
	{
		return $this->UserIDChanged;
	}
	/**
	 * Set UserIDChanged value
	 * @param boolean $_userIDChanged the UserIDChanged
	 * @return boolean
	 */
	public function setUserIDChanged($_userIDChanged)
	{
		return ($this->UserIDChanged = $_userIDChanged);
	}
	/**
	 * Get UserIDLastChanged value
	 * @return dateTime|null
	 */
	public function getUserIDLastChanged()
	{
		return $this->UserIDLastChanged;
	}
	/**
	 * Set UserIDLastChanged value
	 * @param dateTime $_userIDLastChanged the UserIDLastChanged
	 * @return dateTime
	 */
	public function setUserIDLastChanged($_userIDLastChanged)
	{
		return ($this->UserIDLastChanged = $_userIDLastChanged);
	}
	/**
	 * Get VATStatus value
	 * @return PayPalEnumVATStatusCodeType|null
	 */
	public function getVATStatus()
	{
		return $this->VATStatus;
	}
	/**
	 * Set VATStatus value
	 * @uses PayPalEnumVATStatusCodeType::valueIsValid()
	 * @param PayPalEnumVATStatusCodeType $_vATStatus the VATStatus
	 * @return PayPalEnumVATStatusCodeType
	 */
	public function setVATStatus($_vATStatus)
	{
		if(!PayPalEnumVATStatusCodeType::valueIsValid($_vATStatus))
		{
			return false;
		}
		return ($this->VATStatus = $_vATStatus);
	}
	/**
	 * Get BuyerInfo value
	 * @return PayPalStructBuyerType|null
	 */
	public function getBuyerInfo()
	{
		return $this->BuyerInfo;
	}
	/**
	 * Set BuyerInfo value
	 * @param PayPalStructBuyerType $_buyerInfo the BuyerInfo
	 * @return PayPalStructBuyerType
	 */
	public function setBuyerInfo($_buyerInfo)
	{
		return ($this->BuyerInfo = $_buyerInfo);
	}
	/**
	 * Get SellerInfo value
	 * @return PayPalStructSellerType|null
	 */
	public function getSellerInfo()
	{
		return $this->SellerInfo;
	}
	/**
	 * Set SellerInfo value
	 * @param PayPalStructSellerType $_sellerInfo the SellerInfo
	 * @return PayPalStructSellerType
	 */
	public function setSellerInfo($_sellerInfo)
	{
		return ($this->SellerInfo = $_sellerInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUserType
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