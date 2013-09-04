<?php
/**
 * File for class PayPalStructAddressType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAddressType originally named AddressType
 * Documentation : ISO 3166 standard country code Character limit: Two single-byte characters. IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. This element should only be used in response elements and typically should not be used in creating request messages which specify the name of a country using the Country element (which refers to a 2-letter country code).
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAddressType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Person's name associated with this address. Character length and limitations: 32 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Street1
	 * Meta informations extracted from the WSDL
	 * - documentation : First street address. Character length and limitations: 300 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Street1;
	/**
	 * The Street2
	 * Meta informations extracted from the WSDL
	 * - documentation : Second street address. Character length and limitations: 300 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Street2;
	/**
	 * The CityName
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of city. Character length and limitations: 120 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $CityName;
	/**
	 * The StateOrProvince
	 * Meta informations extracted from the WSDL
	 * - documentation : State or province. Character length and limitations: 120 single-byte alphanumeric characters For Canada and the USA, StateOrProvince must be the standard 2-character abbreviation of a state or province. Canadian Provinces Alberta AB British_Columbia BC Manitoba MB New_Brunswick NB Newfoundland NF Northwest_Territories NT Nova_Scotia NS Nunavut NU Ontario ON Prince_Edward_Island PE Quebec QC Saskatchewan SK Yukon YK United States Alabama AL Alaska AK American_Samoa AS Arizona AZ Arkansas AR California CA Colorado CO Connecticut CT Delaware DE District_Of_Columbia DC Federated_States_Of_Micronesia FM Florida FL Georgia GA Guam GU Hawaii HI Idaho ID Illinois IL Indiana IN Iowa IA Kansas KS Kentucky KY Louisiana LA Maine ME Marshall_Islands MH Maryland MD Massachusetts MA Michigan MI Minnesota MN Mississippi MS Missouri MO Montana MT Nebraska NE Nevada NV New_Hampshire NH New_Jersey NJ New_Mexico NM New_York NY North_Carolina NC North_Dakota ND Northern_Mariana_Islands MP Ohio OH Oklahoma OK Oregon OR Palau PW Pennsylvania PA Puerto_Rico PR Rhode_Island RI South_Carolina SC South_Dakota SD Tennessee TN Texas TX Utah UT Vermont VT Virgin_Islands VI Virginia VA Washington WA West_Virginia WV Wisconsin WI Wyoming WY Armed_Forces_Americas AA Armed_Forces AE Armed_Forces_Pacific AP
	 * - minOccurs : 0
	 * @var string
	 */
	public $StateOrProvince;
	/**
	 * The Country
	 * @var PayPalEnumCountryCodeType
	 */
	public $Country;
	/**
	 * The CountryName
	 * @var string
	 */
	public $CountryName;
	/**
	 * The Phone
	 * Meta informations extracted from the WSDL
	 * - documentation : Telephone number associated with this address
	 * - minOccurs : 0
	 * @var string
	 */
	public $Phone;
	/**
	 * The PostalCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The AddressID
	 * Meta informations extracted from the WSDL
	 * - documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile, or UpdateRecurringPaymentsProfile.
	 * - minOccurs : 0
	 * @var string
	 */
	public $AddressID;
	/**
	 * The AddressOwner
	 * Meta informations extracted from the WSDL
	 * - documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * - minOccurs : 0
	 * @var PayPalEnumAddressOwnerCodeType
	 */
	public $AddressOwner;
	/**
	 * The ExternalAddressID
	 * Meta informations extracted from the WSDL
	 * - documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalAddressID;
	/**
	 * The InternationalName
	 * Meta informations extracted from the WSDL
	 * - documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. Seller's international name that is associated with the payment address.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InternationalName;
	/**
	 * The InternationalStateAndCity
	 * Meta informations extracted from the WSDL
	 * - documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. International state and city for the seller's payment address.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InternationalStateAndCity;
	/**
	 * The InternationalStreet
	 * Meta informations extracted from the WSDL
	 * - documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. Seller's international street address that is associated with the payment address.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InternationalStreet;
	/**
	 * The AddressStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Status of the address on file with PayPal. IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * - minOccurs : 0
	 * @var PayPalEnumAddressStatusCodeType
	 */
	public $AddressStatus;
	/**
	 * The AddressNormalizationStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns Normalization Status of the Address. Possible values are Normalized, Unnormalized, and None.
	 * - minOccurs : 0
	 * @var PayPalEnumAddressNormalizationStatusCodeType
	 */
	public $AddressNormalizationStatus;
	/**
	 * Constructor method for AddressType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_street1
	 * @param string $_street2
	 * @param string $_cityName
	 * @param string $_stateOrProvince
	 * @param PayPalEnumCountryCodeType $_country
	 * @param string $_countryName
	 * @param string $_phone
	 * @param string $_postalCode
	 * @param string $_addressID
	 * @param PayPalEnumAddressOwnerCodeType $_addressOwner
	 * @param string $_externalAddressID
	 * @param string $_internationalName
	 * @param string $_internationalStateAndCity
	 * @param string $_internationalStreet
	 * @param PayPalEnumAddressStatusCodeType $_addressStatus
	 * @param PayPalEnumAddressNormalizationStatusCodeType $_addressNormalizationStatus
	 * @return PayPalStructAddressType
	 */
	public function __construct($_name = NULL,$_street1 = NULL,$_street2 = NULL,$_cityName = NULL,$_stateOrProvince = NULL,$_country = NULL,$_countryName = NULL,$_phone = NULL,$_postalCode = NULL,$_addressID = NULL,$_addressOwner = NULL,$_externalAddressID = NULL,$_internationalName = NULL,$_internationalStateAndCity = NULL,$_internationalStreet = NULL,$_addressStatus = NULL,$_addressNormalizationStatus = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Street1'=>$_street1,'Street2'=>$_street2,'CityName'=>$_cityName,'StateOrProvince'=>$_stateOrProvince,'Country'=>$_country,'CountryName'=>$_countryName,'Phone'=>$_phone,'PostalCode'=>$_postalCode,'AddressID'=>$_addressID,'AddressOwner'=>$_addressOwner,'ExternalAddressID'=>$_externalAddressID,'InternationalName'=>$_internationalName,'InternationalStateAndCity'=>$_internationalStateAndCity,'InternationalStreet'=>$_internationalStreet,'AddressStatus'=>$_addressStatus,'AddressNormalizationStatus'=>$_addressNormalizationStatus));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Street1 value
	 * @return string|null
	 */
	public function getStreet1()
	{
		return $this->Street1;
	}
	/**
	 * Set Street1 value
	 * @param string $_street1 the Street1
	 * @return string
	 */
	public function setStreet1($_street1)
	{
		return ($this->Street1 = $_street1);
	}
	/**
	 * Get Street2 value
	 * @return string|null
	 */
	public function getStreet2()
	{
		return $this->Street2;
	}
	/**
	 * Set Street2 value
	 * @param string $_street2 the Street2
	 * @return string
	 */
	public function setStreet2($_street2)
	{
		return ($this->Street2 = $_street2);
	}
	/**
	 * Get CityName value
	 * @return string|null
	 */
	public function getCityName()
	{
		return $this->CityName;
	}
	/**
	 * Set CityName value
	 * @param string $_cityName the CityName
	 * @return string
	 */
	public function setCityName($_cityName)
	{
		return ($this->CityName = $_cityName);
	}
	/**
	 * Get StateOrProvince value
	 * @return string|null
	 */
	public function getStateOrProvince()
	{
		return $this->StateOrProvince;
	}
	/**
	 * Set StateOrProvince value
	 * @param string $_stateOrProvince the StateOrProvince
	 * @return string
	 */
	public function setStateOrProvince($_stateOrProvince)
	{
		return ($this->StateOrProvince = $_stateOrProvince);
	}
	/**
	 * Get Country value
	 * @return PayPalEnumCountryCodeType|null
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Country value
	 * @uses PayPalEnumCountryCodeType::valueIsValid()
	 * @param PayPalEnumCountryCodeType $_country the Country
	 * @return PayPalEnumCountryCodeType
	 */
	public function setCountry($_country)
	{
		if(!PayPalEnumCountryCodeType::valueIsValid($_country))
		{
			return false;
		}
		return ($this->Country = $_country);
	}
	/**
	 * Get CountryName value
	 * @return string|null
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}
	/**
	 * Set CountryName value
	 * @param string $_countryName the CountryName
	 * @return string
	 */
	public function setCountryName($_countryName)
	{
		return ($this->CountryName = $_countryName);
	}
	/**
	 * Get Phone value
	 * @return string|null
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set Phone value
	 * @param string $_phone the Phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->Phone = $_phone);
	}
	/**
	 * Get PostalCode value
	 * @return string|null
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set PostalCode value
	 * @param string $_postalCode the PostalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->PostalCode = $_postalCode);
	}
	/**
	 * Get AddressID value
	 * @return string|null
	 */
	public function getAddressID()
	{
		return $this->AddressID;
	}
	/**
	 * Set AddressID value
	 * @param string $_addressID the AddressID
	 * @return string
	 */
	public function setAddressID($_addressID)
	{
		return ($this->AddressID = $_addressID);
	}
	/**
	 * Get AddressOwner value
	 * @return PayPalEnumAddressOwnerCodeType|null
	 */
	public function getAddressOwner()
	{
		return $this->AddressOwner;
	}
	/**
	 * Set AddressOwner value
	 * @uses PayPalEnumAddressOwnerCodeType::valueIsValid()
	 * @param PayPalEnumAddressOwnerCodeType $_addressOwner the AddressOwner
	 * @return PayPalEnumAddressOwnerCodeType
	 */
	public function setAddressOwner($_addressOwner)
	{
		if(!PayPalEnumAddressOwnerCodeType::valueIsValid($_addressOwner))
		{
			return false;
		}
		return ($this->AddressOwner = $_addressOwner);
	}
	/**
	 * Get ExternalAddressID value
	 * @return string|null
	 */
	public function getExternalAddressID()
	{
		return $this->ExternalAddressID;
	}
	/**
	 * Set ExternalAddressID value
	 * @param string $_externalAddressID the ExternalAddressID
	 * @return string
	 */
	public function setExternalAddressID($_externalAddressID)
	{
		return ($this->ExternalAddressID = $_externalAddressID);
	}
	/**
	 * Get InternationalName value
	 * @return string|null
	 */
	public function getInternationalName()
	{
		return $this->InternationalName;
	}
	/**
	 * Set InternationalName value
	 * @param string $_internationalName the InternationalName
	 * @return string
	 */
	public function setInternationalName($_internationalName)
	{
		return ($this->InternationalName = $_internationalName);
	}
	/**
	 * Get InternationalStateAndCity value
	 * @return string|null
	 */
	public function getInternationalStateAndCity()
	{
		return $this->InternationalStateAndCity;
	}
	/**
	 * Set InternationalStateAndCity value
	 * @param string $_internationalStateAndCity the InternationalStateAndCity
	 * @return string
	 */
	public function setInternationalStateAndCity($_internationalStateAndCity)
	{
		return ($this->InternationalStateAndCity = $_internationalStateAndCity);
	}
	/**
	 * Get InternationalStreet value
	 * @return string|null
	 */
	public function getInternationalStreet()
	{
		return $this->InternationalStreet;
	}
	/**
	 * Set InternationalStreet value
	 * @param string $_internationalStreet the InternationalStreet
	 * @return string
	 */
	public function setInternationalStreet($_internationalStreet)
	{
		return ($this->InternationalStreet = $_internationalStreet);
	}
	/**
	 * Get AddressStatus value
	 * @return PayPalEnumAddressStatusCodeType|null
	 */
	public function getAddressStatus()
	{
		return $this->AddressStatus;
	}
	/**
	 * Set AddressStatus value
	 * @uses PayPalEnumAddressStatusCodeType::valueIsValid()
	 * @param PayPalEnumAddressStatusCodeType $_addressStatus the AddressStatus
	 * @return PayPalEnumAddressStatusCodeType
	 */
	public function setAddressStatus($_addressStatus)
	{
		if(!PayPalEnumAddressStatusCodeType::valueIsValid($_addressStatus))
		{
			return false;
		}
		return ($this->AddressStatus = $_addressStatus);
	}
	/**
	 * Get AddressNormalizationStatus value
	 * @return PayPalEnumAddressNormalizationStatusCodeType|null
	 */
	public function getAddressNormalizationStatus()
	{
		return $this->AddressNormalizationStatus;
	}
	/**
	 * Set AddressNormalizationStatus value
	 * @uses PayPalEnumAddressNormalizationStatusCodeType::valueIsValid()
	 * @param PayPalEnumAddressNormalizationStatusCodeType $_addressNormalizationStatus the AddressNormalizationStatus
	 * @return PayPalEnumAddressNormalizationStatusCodeType
	 */
	public function setAddressNormalizationStatus($_addressNormalizationStatus)
	{
		if(!PayPalEnumAddressNormalizationStatusCodeType::valueIsValid($_addressNormalizationStatus))
		{
			return false;
		}
		return ($this->AddressNormalizationStatus = $_addressNormalizationStatus);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAddressType
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