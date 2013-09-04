<?php
/**
 * File for class PayPalStructGetBillingAgreementCustomerDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBillingAgreementCustomerDetailsReq originally named GetBillingAgreementCustomerDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBillingAgreementCustomerDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetBillingAgreementCustomerDetailsRequest
	 * @var PayPalStructGetBillingAgreementCustomerDetailsRequestType
	 */
	public $GetBillingAgreementCustomerDetailsRequest;
	/**
	 * Constructor method for GetBillingAgreementCustomerDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetBillingAgreementCustomerDetailsRequestType $_getBillingAgreementCustomerDetailsRequest
	 * @return PayPalStructGetBillingAgreementCustomerDetailsReq
	 */
	public function __construct($_getBillingAgreementCustomerDetailsRequest = NULL)
	{
		parent::__construct(array('GetBillingAgreementCustomerDetailsRequest'=>$_getBillingAgreementCustomerDetailsRequest));
	}
	/**
	 * Get GetBillingAgreementCustomerDetailsRequest value
	 * @return PayPalStructGetBillingAgreementCustomerDetailsRequestType|null
	 */
	public function getGetBillingAgreementCustomerDetailsRequest()
	{
		return $this->GetBillingAgreementCustomerDetailsRequest;
	}
	/**
	 * Set GetBillingAgreementCustomerDetailsRequest value
	 * @param PayPalStructGetBillingAgreementCustomerDetailsRequestType $_getBillingAgreementCustomerDetailsRequest the GetBillingAgreementCustomerDetailsRequest
	 * @return PayPalStructGetBillingAgreementCustomerDetailsRequestType
	 */
	public function setGetBillingAgreementCustomerDetailsRequest($_getBillingAgreementCustomerDetailsRequest)
	{
		return ($this->GetBillingAgreementCustomerDetailsRequest = $_getBillingAgreementCustomerDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBillingAgreementCustomerDetailsReq
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