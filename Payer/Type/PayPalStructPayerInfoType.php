<?php
/**
 * File for class PayPalStructPayerInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPayerInfoType originally named PayerInfoType
 * Documentation : PayerInfoType Payer information
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPayerInfoType extends PayPalWsdlClass
{
	/**
	 * The Payer
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address of payer Character length and limitations: 127 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Payer;
	/**
	 * The PayerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique customer ID Character length and limitations: 17 single-byte characters
	 * - minOccurs : 0
	 * - maxLength : 127
	 * @var string
	 */
	public $PayerID;
	/**
	 * The PayerStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Status of payer's email address
	 * - minOccurs : 0
	 * @var PayPalEnumPayPalUserStatusCodeType
	 */
	public $PayerStatus;
	/**
	 * The PayerName
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of payer
	 * @var PayPalStructPersonNameType
	 */
	public $PayerName;
	/**
	 * The PayerCountry
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment sender's country of residence using standard two-character ISO 3166 country codes. Character length and limitations: Two single-byte characters
	 * - minOccurs : 0
	 * @var PayPalEnumCountryCodeType
	 */
	public $PayerCountry;
	/**
	 * The PayerBusiness
	 * Meta informations extracted from the WSDL
	 * - documentation : Payer's business name. Character length and limitations: 127 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $PayerBusiness;
	/**
	 * The Address
	 * Meta informations extracted from the WSDL
	 * - documentation : Payer's business address
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $Address;
	/**
	 * The ContactPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Business contact telephone number
	 * - minOccurs : 0
	 * @var string
	 */
	public $ContactPhone;
	/**
	 * The TaxIdDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about payer's tax info. Refer to the TaxIdDetailsType for more details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructTaxIdDetailsType
	 */
	public $TaxIdDetails;
	/**
	 * The EnhancedPayerInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Holds any enhanced information about the payer
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructEnhancedPayerInfoType
	 */
	public $EnhancedPayerInfo;
	/**
	 * Constructor method for PayerInfoType
	 * @see parent::__construct()
	 * @param string $_payer
	 * @param string $_payerID
	 * @param PayPalEnumPayPalUserStatusCodeType $_payerStatus
	 * @param PayPalStructPersonNameType $_payerName
	 * @param PayPalEnumCountryCodeType $_payerCountry
	 * @param string $_payerBusiness
	 * @param PayPalStructAddressType $_address
	 * @param string $_contactPhone
	 * @param PayPalStructTaxIdDetailsType $_taxIdDetails
	 * @param PayPalStructEnhancedPayerInfoType $_enhancedPayerInfo
	 * @return PayPalStructPayerInfoType
	 */
	public function __construct($_payer = NULL,$_payerID = NULL,$_payerStatus = NULL,$_payerName = NULL,$_payerCountry = NULL,$_payerBusiness = NULL,$_address = NULL,$_contactPhone = NULL,$_taxIdDetails = NULL,$_enhancedPayerInfo = NULL)
	{
		parent::__construct(array('Payer'=>$_payer,'PayerID'=>$_payerID,'PayerStatus'=>$_payerStatus,'PayerName'=>$_payerName,'PayerCountry'=>$_payerCountry,'PayerBusiness'=>$_payerBusiness,'Address'=>$_address,'ContactPhone'=>$_contactPhone,'TaxIdDetails'=>$_taxIdDetails,'EnhancedPayerInfo'=>$_enhancedPayerInfo));
	}
	/**
	 * Get Payer value
	 * @return string|null
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set Payer value
	 * @param string $_payer the Payer
	 * @return string
	 */
	public function setPayer($_payer)
	{
		return ($this->Payer = $_payer);
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
	 * Get PayerStatus value
	 * @return PayPalEnumPayPalUserStatusCodeType|null
	 */
	public function getPayerStatus()
	{
		return $this->PayerStatus;
	}
	/**
	 * Set PayerStatus value
	 * @uses PayPalEnumPayPalUserStatusCodeType::valueIsValid()
	 * @param PayPalEnumPayPalUserStatusCodeType $_payerStatus the PayerStatus
	 * @return PayPalEnumPayPalUserStatusCodeType
	 */
	public function setPayerStatus($_payerStatus)
	{
		if(!PayPalEnumPayPalUserStatusCodeType::valueIsValid($_payerStatus))
		{
			return false;
		}
		return ($this->PayerStatus = $_payerStatus);
	}
	/**
	 * Get PayerName value
	 * @return PayPalStructPersonNameType|null
	 */
	public function getPayerName()
	{
		return $this->PayerName;
	}
	/**
	 * Set PayerName value
	 * @param PayPalStructPersonNameType $_payerName the PayerName
	 * @return PayPalStructPersonNameType
	 */
	public function setPayerName($_payerName)
	{
		return ($this->PayerName = $_payerName);
	}
	/**
	 * Get PayerCountry value
	 * @return PayPalEnumCountryCodeType|null
	 */
	public function getPayerCountry()
	{
		return $this->PayerCountry;
	}
	/**
	 * Set PayerCountry value
	 * @uses PayPalEnumCountryCodeType::valueIsValid()
	 * @param PayPalEnumCountryCodeType $_payerCountry the PayerCountry
	 * @return PayPalEnumCountryCodeType
	 */
	public function setPayerCountry($_payerCountry)
	{
		if(!PayPalEnumCountryCodeType::valueIsValid($_payerCountry))
		{
			return false;
		}
		return ($this->PayerCountry = $_payerCountry);
	}
	/**
	 * Get PayerBusiness value
	 * @return string|null
	 */
	public function getPayerBusiness()
	{
		return $this->PayerBusiness;
	}
	/**
	 * Set PayerBusiness value
	 * @param string $_payerBusiness the PayerBusiness
	 * @return string
	 */
	public function setPayerBusiness($_payerBusiness)
	{
		return ($this->PayerBusiness = $_payerBusiness);
	}
	/**
	 * Get Address value
	 * @return PayPalStructAddressType|null
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Address value
	 * @param PayPalStructAddressType $_address the Address
	 * @return PayPalStructAddressType
	 */
	public function setAddress($_address)
	{
		return ($this->Address = $_address);
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
	 * Get TaxIdDetails value
	 * @return PayPalStructTaxIdDetailsType|null
	 */
	public function getTaxIdDetails()
	{
		return $this->TaxIdDetails;
	}
	/**
	 * Set TaxIdDetails value
	 * @param PayPalStructTaxIdDetailsType $_taxIdDetails the TaxIdDetails
	 * @return PayPalStructTaxIdDetailsType
	 */
	public function setTaxIdDetails($_taxIdDetails)
	{
		return ($this->TaxIdDetails = $_taxIdDetails);
	}
	/**
	 * Get EnhancedPayerInfo value
	 * @return PayPalStructEnhancedPayerInfoType|null
	 */
	public function getEnhancedPayerInfo()
	{
		return $this->EnhancedPayerInfo;
	}
	/**
	 * Set EnhancedPayerInfo value
	 * @param PayPalStructEnhancedPayerInfoType $_enhancedPayerInfo the EnhancedPayerInfo
	 * @return PayPalStructEnhancedPayerInfoType
	 */
	public function setEnhancedPayerInfo($_enhancedPayerInfo)
	{
		return ($this->EnhancedPayerInfo = $_enhancedPayerInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPayerInfoType
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