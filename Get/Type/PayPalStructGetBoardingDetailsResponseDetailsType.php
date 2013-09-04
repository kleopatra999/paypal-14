<?php
/**
 * File for class PayPalStructGetBoardingDetailsResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBoardingDetailsResponseDetailsType originally named GetBoardingDetailsResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBoardingDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : Status of merchant's onboarding process: CompletedCancelledPending Character length and limitations: Eight alphabetic characters
	 * @var PayPalEnumBoardingStatusType
	 */
	public $Status;
	/**
	 * The StartDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date the boarding process started
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The LastUpdated
	 * Meta informations extracted from the WSDL
	 * - documentation : Date the merchantâs status or progress was last updated
	 * @var dateTime
	 */
	public $LastUpdated;
	/**
	 * The Reason
	 * Meta informations extracted from the WSDL
	 * - documentation : Reason for merchantâs cancellation of sign-up. Character length and limitations: 1,024 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Reason;
	/**
	 * The ProgramName
	 * @var string
	 */
	public $ProgramName;
	/**
	 * The ProgramCode
	 * @var string
	 */
	public $ProgramCode;
	/**
	 * The CampaignID
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CampaignID;
	/**
	 * The UserWithdrawalLimit
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates if there is a limitation on the amount of money the business can withdraw from PayPal
	 * - minOccurs : 0
	 * @var PayPalEnumUserWithdrawalLimitTypeType
	 */
	public $UserWithdrawalLimit;
	/**
	 * The PartnerCustom
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom information you set on the EnterBoarding API call Character length and limitations: 256 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $PartnerCustom;
	/**
	 * The AccountOwner
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about the owner of the account
	 * - minOccurs : 0
	 * @var PayPalStructPayerInfoType
	 */
	public $AccountOwner;
	/**
	 * The Credentials
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs PayPal API credentials
	 * - minOccurs : 0
	 * @var PayPalStructAPICredentialsType
	 */
	public $Credentials;
	/**
	 * The ConfigureAPIs
	 * Meta informations extracted from the WSDL
	 * - documentation : The APIs that this merchant has granted the business partner permission to call on his behalf. For example: SetExpressCheckout,GetExpressCheckoutDetails,DoExpressCheckoutPayment
	 * - minOccurs : 0
	 * @var string
	 */
	public $ConfigureAPIs;
	/**
	 * The EmailVerificationStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Primary email verification status. Confirmed, Unconfirmed
	 * - minOccurs : 0
	 * @var string
	 */
	public $EmailVerificationStatus;
	/**
	 * The VettingStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Gives VettingStatus - Pending, Cancelled, Approved, UnderReview Character length and limitations: 256 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $VettingStatus;
	/**
	 * The BankAccountVerificationStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Gives BankAccountVerificationStatus - Added, Confirmed Character length and limitations: 256 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $BankAccountVerificationStatus;
	/**
	 * Constructor method for GetBoardingDetailsResponseDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumBoardingStatusType $_status
	 * @param dateTime $_startDate
	 * @param dateTime $_lastUpdated
	 * @param string $_reason
	 * @param string $_programName
	 * @param string $_programCode
	 * @param string $_campaignID
	 * @param PayPalEnumUserWithdrawalLimitTypeType $_userWithdrawalLimit
	 * @param string $_partnerCustom
	 * @param PayPalStructPayerInfoType $_accountOwner
	 * @param PayPalStructAPICredentialsType $_credentials
	 * @param string $_configureAPIs
	 * @param string $_emailVerificationStatus
	 * @param string $_vettingStatus
	 * @param string $_bankAccountVerificationStatus
	 * @return PayPalStructGetBoardingDetailsResponseDetailsType
	 */
	public function __construct($_status = NULL,$_startDate = NULL,$_lastUpdated = NULL,$_reason = NULL,$_programName = NULL,$_programCode = NULL,$_campaignID = NULL,$_userWithdrawalLimit = NULL,$_partnerCustom = NULL,$_accountOwner = NULL,$_credentials = NULL,$_configureAPIs = NULL,$_emailVerificationStatus = NULL,$_vettingStatus = NULL,$_bankAccountVerificationStatus = NULL)
	{
		parent::__construct(array('Status'=>$_status,'StartDate'=>$_startDate,'LastUpdated'=>$_lastUpdated,'Reason'=>$_reason,'ProgramName'=>$_programName,'ProgramCode'=>$_programCode,'CampaignID'=>$_campaignID,'UserWithdrawalLimit'=>$_userWithdrawalLimit,'PartnerCustom'=>$_partnerCustom,'AccountOwner'=>$_accountOwner,'Credentials'=>$_credentials,'ConfigureAPIs'=>$_configureAPIs,'EmailVerificationStatus'=>$_emailVerificationStatus,'VettingStatus'=>$_vettingStatus,'BankAccountVerificationStatus'=>$_bankAccountVerificationStatus));
	}
	/**
	 * Get Status value
	 * @return PayPalEnumBoardingStatusType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses PayPalEnumBoardingStatusType::valueIsValid()
	 * @param PayPalEnumBoardingStatusType $_status the Status
	 * @return PayPalEnumBoardingStatusType
	 */
	public function setStatus($_status)
	{
		if(!PayPalEnumBoardingStatusType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get StartDate value
	 * @return dateTime|null
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set StartDate value
	 * @param dateTime $_startDate the StartDate
	 * @return dateTime
	 */
	public function setStartDate($_startDate)
	{
		return ($this->StartDate = $_startDate);
	}
	/**
	 * Get LastUpdated value
	 * @return dateTime|null
	 */
	public function getLastUpdated()
	{
		return $this->LastUpdated;
	}
	/**
	 * Set LastUpdated value
	 * @param dateTime $_lastUpdated the LastUpdated
	 * @return dateTime
	 */
	public function setLastUpdated($_lastUpdated)
	{
		return ($this->LastUpdated = $_lastUpdated);
	}
	/**
	 * Get Reason value
	 * @return string|null
	 */
	public function getReason()
	{
		return $this->Reason;
	}
	/**
	 * Set Reason value
	 * @param string $_reason the Reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->Reason = $_reason);
	}
	/**
	 * Get ProgramName value
	 * @return string|null
	 */
	public function getProgramName()
	{
		return $this->ProgramName;
	}
	/**
	 * Set ProgramName value
	 * @param string $_programName the ProgramName
	 * @return string
	 */
	public function setProgramName($_programName)
	{
		return ($this->ProgramName = $_programName);
	}
	/**
	 * Get ProgramCode value
	 * @return string|null
	 */
	public function getProgramCode()
	{
		return $this->ProgramCode;
	}
	/**
	 * Set ProgramCode value
	 * @param string $_programCode the ProgramCode
	 * @return string
	 */
	public function setProgramCode($_programCode)
	{
		return ($this->ProgramCode = $_programCode);
	}
	/**
	 * Get CampaignID value
	 * @return string|null
	 */
	public function getCampaignID()
	{
		return $this->CampaignID;
	}
	/**
	 * Set CampaignID value
	 * @param string $_campaignID the CampaignID
	 * @return string
	 */
	public function setCampaignID($_campaignID)
	{
		return ($this->CampaignID = $_campaignID);
	}
	/**
	 * Get UserWithdrawalLimit value
	 * @return PayPalEnumUserWithdrawalLimitTypeType|null
	 */
	public function getUserWithdrawalLimit()
	{
		return $this->UserWithdrawalLimit;
	}
	/**
	 * Set UserWithdrawalLimit value
	 * @uses PayPalEnumUserWithdrawalLimitTypeType::valueIsValid()
	 * @param PayPalEnumUserWithdrawalLimitTypeType $_userWithdrawalLimit the UserWithdrawalLimit
	 * @return PayPalEnumUserWithdrawalLimitTypeType
	 */
	public function setUserWithdrawalLimit($_userWithdrawalLimit)
	{
		if(!PayPalEnumUserWithdrawalLimitTypeType::valueIsValid($_userWithdrawalLimit))
		{
			return false;
		}
		return ($this->UserWithdrawalLimit = $_userWithdrawalLimit);
	}
	/**
	 * Get PartnerCustom value
	 * @return string|null
	 */
	public function getPartnerCustom()
	{
		return $this->PartnerCustom;
	}
	/**
	 * Set PartnerCustom value
	 * @param string $_partnerCustom the PartnerCustom
	 * @return string
	 */
	public function setPartnerCustom($_partnerCustom)
	{
		return ($this->PartnerCustom = $_partnerCustom);
	}
	/**
	 * Get AccountOwner value
	 * @return PayPalStructPayerInfoType|null
	 */
	public function getAccountOwner()
	{
		return $this->AccountOwner;
	}
	/**
	 * Set AccountOwner value
	 * @param PayPalStructPayerInfoType $_accountOwner the AccountOwner
	 * @return PayPalStructPayerInfoType
	 */
	public function setAccountOwner($_accountOwner)
	{
		return ($this->AccountOwner = $_accountOwner);
	}
	/**
	 * Get Credentials value
	 * @return PayPalStructAPICredentialsType|null
	 */
	public function getCredentials()
	{
		return $this->Credentials;
	}
	/**
	 * Set Credentials value
	 * @param PayPalStructAPICredentialsType $_credentials the Credentials
	 * @return PayPalStructAPICredentialsType
	 */
	public function setCredentials($_credentials)
	{
		return ($this->Credentials = $_credentials);
	}
	/**
	 * Get ConfigureAPIs value
	 * @return string|null
	 */
	public function getConfigureAPIs()
	{
		return $this->ConfigureAPIs;
	}
	/**
	 * Set ConfigureAPIs value
	 * @param string $_configureAPIs the ConfigureAPIs
	 * @return string
	 */
	public function setConfigureAPIs($_configureAPIs)
	{
		return ($this->ConfigureAPIs = $_configureAPIs);
	}
	/**
	 * Get EmailVerificationStatus value
	 * @return string|null
	 */
	public function getEmailVerificationStatus()
	{
		return $this->EmailVerificationStatus;
	}
	/**
	 * Set EmailVerificationStatus value
	 * @param string $_emailVerificationStatus the EmailVerificationStatus
	 * @return string
	 */
	public function setEmailVerificationStatus($_emailVerificationStatus)
	{
		return ($this->EmailVerificationStatus = $_emailVerificationStatus);
	}
	/**
	 * Get VettingStatus value
	 * @return string|null
	 */
	public function getVettingStatus()
	{
		return $this->VettingStatus;
	}
	/**
	 * Set VettingStatus value
	 * @param string $_vettingStatus the VettingStatus
	 * @return string
	 */
	public function setVettingStatus($_vettingStatus)
	{
		return ($this->VettingStatus = $_vettingStatus);
	}
	/**
	 * Get BankAccountVerificationStatus value
	 * @return string|null
	 */
	public function getBankAccountVerificationStatus()
	{
		return $this->BankAccountVerificationStatus;
	}
	/**
	 * Set BankAccountVerificationStatus value
	 * @param string $_bankAccountVerificationStatus the BankAccountVerificationStatus
	 * @return string
	 */
	public function setBankAccountVerificationStatus($_bankAccountVerificationStatus)
	{
		return ($this->BankAccountVerificationStatus = $_bankAccountVerificationStatus);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBoardingDetailsResponseDetailsType
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