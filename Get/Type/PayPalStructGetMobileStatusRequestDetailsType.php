<?php
/**
 * File for class PayPalStructGetMobileStatusRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetMobileStatusRequestDetailsType originally named GetMobileStatusRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetMobileStatusRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The Phone
	 * Meta informations extracted from the WSDL
	 * - documentation : Phone number for status inquiry
	 * @var PayPalStructPhoneNumberType
	 */
	public $Phone;
	/**
	 * Constructor method for GetMobileStatusRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructPhoneNumberType $_phone
	 * @return PayPalStructGetMobileStatusRequestDetailsType
	 */
	public function __construct($_phone = NULL)
	{
		parent::__construct(array('Phone'=>$_phone));
	}
	/**
	 * Get Phone value
	 * @return PayPalStructPhoneNumberType|null
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set Phone value
	 * @param PayPalStructPhoneNumberType $_phone the Phone
	 * @return PayPalStructPhoneNumberType
	 */
	public function setPhone($_phone)
	{
		return ($this->Phone = $_phone);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetMobileStatusRequestDetailsType
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