<?php
/**
 * File for class PayPalStructSetCustomerBillingAgreementReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetCustomerBillingAgreementReq originally named SetCustomerBillingAgreementReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetCustomerBillingAgreementReq extends PayPalWsdlClass
{
	/**
	 * The SetCustomerBillingAgreementRequest
	 * @var PayPalStructSetCustomerBillingAgreementRequestType
	 */
	public $SetCustomerBillingAgreementRequest;
	/**
	 * Constructor method for SetCustomerBillingAgreementReq
	 * @see parent::__construct()
	 * @param PayPalStructSetCustomerBillingAgreementRequestType $_setCustomerBillingAgreementRequest
	 * @return PayPalStructSetCustomerBillingAgreementReq
	 */
	public function __construct($_setCustomerBillingAgreementRequest = NULL)
	{
		parent::__construct(array('SetCustomerBillingAgreementRequest'=>$_setCustomerBillingAgreementRequest));
	}
	/**
	 * Get SetCustomerBillingAgreementRequest value
	 * @return PayPalStructSetCustomerBillingAgreementRequestType|null
	 */
	public function getSetCustomerBillingAgreementRequest()
	{
		return $this->SetCustomerBillingAgreementRequest;
	}
	/**
	 * Set SetCustomerBillingAgreementRequest value
	 * @param PayPalStructSetCustomerBillingAgreementRequestType $_setCustomerBillingAgreementRequest the SetCustomerBillingAgreementRequest
	 * @return PayPalStructSetCustomerBillingAgreementRequestType
	 */
	public function setSetCustomerBillingAgreementRequest($_setCustomerBillingAgreementRequest)
	{
		return ($this->SetCustomerBillingAgreementRequest = $_setCustomerBillingAgreementRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetCustomerBillingAgreementReq
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