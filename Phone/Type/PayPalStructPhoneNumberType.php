<?php
/**
 * File for class PayPalStructPhoneNumberType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPhoneNumberType originally named PhoneNumberType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPhoneNumberType extends PayPalWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Country code associated with this phone number.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The PhoneNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Phone number associated with this phone.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The Extension
	 * Meta informations extracted from the WSDL
	 * - documentation : Extension associated with this phone number.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Extension;
	/**
	 * Constructor method for PhoneNumberType
	 * @see parent::__construct()
	 * @param string $_countryCode
	 * @param string $_phoneNumber
	 * @param string $_extension
	 * @return PayPalStructPhoneNumberType
	 */
	public function __construct($_countryCode = NULL,$_phoneNumber = NULL,$_extension = NULL)
	{
		parent::__construct(array('CountryCode'=>$_countryCode,'PhoneNumber'=>$_phoneNumber,'Extension'=>$_extension));
	}
	/**
	 * Get CountryCode value
	 * @return string|null
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set CountryCode value
	 * @param string $_countryCode the CountryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->CountryCode = $_countryCode);
	}
	/**
	 * Get PhoneNumber value
	 * @return string|null
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}
	/**
	 * Set PhoneNumber value
	 * @param string $_phoneNumber the PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_phoneNumber)
	{
		return ($this->PhoneNumber = $_phoneNumber);
	}
	/**
	 * Get Extension value
	 * @return string|null
	 */
	public function getExtension()
	{
		return $this->Extension;
	}
	/**
	 * Set Extension value
	 * @param string $_extension the Extension
	 * @return string
	 */
	public function setExtension($_extension)
	{
		return ($this->Extension = $_extension);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPhoneNumberType
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