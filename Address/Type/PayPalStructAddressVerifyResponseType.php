<?php
/**
 * File for class PayPalStructAddressVerifyResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAddressVerifyResponseType originally named AddressVerifyResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAddressVerifyResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The ConfirmationCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Confirmation of a match, with one of the following tokens: None: The input value of the Email object does not match any email address on file at PayPal. Confirmed: If the value of the StreetMatch object is Matched, PayPal responds that the entire postal address is confirmed. Unconfirmed: PayPal responds that the postal address is unconfirmed
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumAddressStatusCodeType
	 */
	public $ConfirmationCode;
	/**
	 * The StreetMatch
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal has compared the postal address you want to verify with the postal address on file at PayPal. None: The input value of the Email object does not match any email address on file at PayPal. In addition, an error response is returned. No further comparison of other input values has been made. Matched: The street address matches the street address on file at PayPal. Unmatched: The street address does not match the street address on file at PayPal.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumMatchStatusCodeType
	 */
	public $StreetMatch;
	/**
	 * The ZipMatch
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal has compared the zip code you want to verify with the zip code on file for the email address. None: The street address was unmatched. No further comparison of other input values has been made. Matched: The zip code matches the zip code on file at PayPal. Unmatched: The zip code does not match the zip code on file at PayPal.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumMatchStatusCodeType
	 */
	public $ZipMatch;
	/**
	 * The CountryCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Two-character country code (ISO 3166) on file for the PayPal email address.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumCountryCodeType
	 */
	public $CountryCode;
	/**
	 * The PayPalToken
	 * Meta informations extracted from the WSDL
	 * - documentation : The token prevents a buyer from using any street address other than the address on file at PayPal during additional purchases he might make from the merchant. It contains encrypted information about the user’s street address and email address. You can pass the value of the token with the Buy Now button HTML address_api_token variable so that PayPal prevents the buyer from using any street address or email address other than those verified by PayPal. The token is valid for 24 hours. Character length and limitations: 94 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PayPalToken;
	/**
	 * Constructor method for AddressVerifyResponseType
	 * @see parent::__construct()
	 * @param PayPalEnumAddressStatusCodeType $_confirmationCode
	 * @param PayPalEnumMatchStatusCodeType $_streetMatch
	 * @param PayPalEnumMatchStatusCodeType $_zipMatch
	 * @param PayPalEnumCountryCodeType $_countryCode
	 * @param string $_payPalToken
	 * @return PayPalStructAddressVerifyResponseType
	 */
	public function __construct($_confirmationCode,$_streetMatch,$_zipMatch = NULL,$_countryCode = NULL,$_payPalToken = NULL)
	{
		PayPalWsdlClass::__construct(array('ConfirmationCode'=>$_confirmationCode,'StreetMatch'=>$_streetMatch,'ZipMatch'=>$_zipMatch,'CountryCode'=>$_countryCode,'PayPalToken'=>$_payPalToken));
	}
	/**
	 * Get ConfirmationCode value
	 * @return PayPalEnumAddressStatusCodeType
	 */
	public function getConfirmationCode()
	{
		return $this->ConfirmationCode;
	}
	/**
	 * Set ConfirmationCode value
	 * @uses PayPalEnumAddressStatusCodeType::valueIsValid()
	 * @param PayPalEnumAddressStatusCodeType $_confirmationCode the ConfirmationCode
	 * @return PayPalEnumAddressStatusCodeType
	 */
	public function setConfirmationCode($_confirmationCode)
	{
		if(!PayPalEnumAddressStatusCodeType::valueIsValid($_confirmationCode))
		{
			return false;
		}
		return ($this->ConfirmationCode = $_confirmationCode);
	}
	/**
	 * Get StreetMatch value
	 * @return PayPalEnumMatchStatusCodeType
	 */
	public function getStreetMatch()
	{
		return $this->StreetMatch;
	}
	/**
	 * Set StreetMatch value
	 * @uses PayPalEnumMatchStatusCodeType::valueIsValid()
	 * @param PayPalEnumMatchStatusCodeType $_streetMatch the StreetMatch
	 * @return PayPalEnumMatchStatusCodeType
	 */
	public function setStreetMatch($_streetMatch)
	{
		if(!PayPalEnumMatchStatusCodeType::valueIsValid($_streetMatch))
		{
			return false;
		}
		return ($this->StreetMatch = $_streetMatch);
	}
	/**
	 * Get ZipMatch value
	 * @return PayPalEnumMatchStatusCodeType|null
	 */
	public function getZipMatch()
	{
		return $this->ZipMatch;
	}
	/**
	 * Set ZipMatch value
	 * @uses PayPalEnumMatchStatusCodeType::valueIsValid()
	 * @param PayPalEnumMatchStatusCodeType $_zipMatch the ZipMatch
	 * @return PayPalEnumMatchStatusCodeType
	 */
	public function setZipMatch($_zipMatch)
	{
		if(!PayPalEnumMatchStatusCodeType::valueIsValid($_zipMatch))
		{
			return false;
		}
		return ($this->ZipMatch = $_zipMatch);
	}
	/**
	 * Get CountryCode value
	 * @return PayPalEnumCountryCodeType|null
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set CountryCode value
	 * @uses PayPalEnumCountryCodeType::valueIsValid()
	 * @param PayPalEnumCountryCodeType $_countryCode the CountryCode
	 * @return PayPalEnumCountryCodeType
	 */
	public function setCountryCode($_countryCode)
	{
		if(!PayPalEnumCountryCodeType::valueIsValid($_countryCode))
		{
			return false;
		}
		return ($this->CountryCode = $_countryCode);
	}
	/**
	 * Get PayPalToken value
	 * @return string|null
	 */
	public function getPayPalToken()
	{
		return $this->PayPalToken;
	}
	/**
	 * Set PayPalToken value
	 * @param string $_payPalToken the PayPalToken
	 * @return string
	 */
	public function setPayPalToken($_payPalToken)
	{
		return ($this->PayPalToken = $_payPalToken);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAddressVerifyResponseType
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