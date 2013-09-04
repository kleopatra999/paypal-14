<?php
/**
 * File for class PayPalStructGetBillingAgreementCustomerDetailsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBillingAgreementCustomerDetailsRequestType originally named GetBillingAgreementCustomerDetailsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBillingAgreementCustomerDetailsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Token;
	/**
	 * Constructor method for GetBillingAgreementCustomerDetailsRequestType
	 * @see parent::__construct()
	 * @param string $_token
	 * @return PayPalStructGetBillingAgreementCustomerDetailsRequestType
	 */
	public function __construct($_token)
	{
		PayPalWsdlClass::__construct(array('Token'=>$_token));
	}
	/**
	 * Get Token value
	 * @return string
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set Token value
	 * @param string $_token the Token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->Token = $_token);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBillingAgreementCustomerDetailsRequestType
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