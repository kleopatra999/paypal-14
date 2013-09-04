<?php
/**
 * File for class PayPalStructAddressVerifyReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAddressVerifyReq originally named AddressVerifyReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAddressVerifyReq extends PayPalWsdlClass
{
	/**
	 * The AddressVerifyRequest
	 * @var PayPalStructAddressVerifyRequestType
	 */
	public $AddressVerifyRequest;
	/**
	 * Constructor method for AddressVerifyReq
	 * @see parent::__construct()
	 * @param PayPalStructAddressVerifyRequestType $_addressVerifyRequest
	 * @return PayPalStructAddressVerifyReq
	 */
	public function __construct($_addressVerifyRequest = NULL)
	{
		parent::__construct(array('AddressVerifyRequest'=>$_addressVerifyRequest));
	}
	/**
	 * Get AddressVerifyRequest value
	 * @return PayPalStructAddressVerifyRequestType|null
	 */
	public function getAddressVerifyRequest()
	{
		return $this->AddressVerifyRequest;
	}
	/**
	 * Set AddressVerifyRequest value
	 * @param PayPalStructAddressVerifyRequestType $_addressVerifyRequest the AddressVerifyRequest
	 * @return PayPalStructAddressVerifyRequestType
	 */
	public function setAddressVerifyRequest($_addressVerifyRequest)
	{
		return ($this->AddressVerifyRequest = $_addressVerifyRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAddressVerifyReq
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