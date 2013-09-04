<?php
/**
 * File for class PayPalStructAddressVerifyRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAddressVerifyRequestType originally named AddressVerifyRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAddressVerifyRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address of buyer to be verified. Required Maximum string length: 255 single-byte characters Input mask: ?@?.??
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The Street
	 * Meta informations extracted from the WSDL
	 * - documentation : First line of buyer’s billing or shipping street address to be verified. Required For verification, input value of street address must match the first three single-byte characters of the street address on file for the PayPal account. Maximum string length: 35 single-byte characters Alphanumeric plus - , . ‘ # \ Whitespace and case of input value are ignored.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Street;
	/**
	 * The Zip
	 * Meta informations extracted from the WSDL
	 * - documentation : Postal code to be verified. Required For verification, input value of postal code must match the first five single-byte characters of the postal code on file for the PayPal account. Maximum string length: 16 single-byte characters Whitespace and case of input value are ignored.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * Constructor method for AddressVerifyRequestType
	 * @see parent::__construct()
	 * @param string $_email
	 * @param string $_street
	 * @param string $_zip
	 * @return PayPalStructAddressVerifyRequestType
	 */
	public function __construct($_email,$_street,$_zip)
	{
		PayPalWsdlClass::__construct(array('Email'=>$_email,'Street'=>$_street,'Zip'=>$_zip));
	}
	/**
	 * Get Email value
	 * @return string
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
	 * Get Street value
	 * @return string
	 */
	public function getStreet()
	{
		return $this->Street;
	}
	/**
	 * Set Street value
	 * @param string $_street the Street
	 * @return string
	 */
	public function setStreet($_street)
	{
		return ($this->Street = $_street);
	}
	/**
	 * Get Zip value
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set Zip value
	 * @param string $_zip the Zip
	 * @return string
	 */
	public function setZip($_zip)
	{
		return ($this->Zip = $_zip);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAddressVerifyRequestType
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