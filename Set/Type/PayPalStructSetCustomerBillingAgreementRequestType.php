<?php
/**
 * File for class PayPalStructSetCustomerBillingAgreementRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetCustomerBillingAgreementRequestType originally named SetCustomerBillingAgreementRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetCustomerBillingAgreementRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The SetCustomerBillingAgreementRequestDetails
	 * @var PayPalStructSetCustomerBillingAgreementRequestDetailsType
	 */
	public $SetCustomerBillingAgreementRequestDetails;
	/**
	 * Constructor method for SetCustomerBillingAgreementRequestType
	 * @see parent::__construct()
	 * @param PayPalStructSetCustomerBillingAgreementRequestDetailsType $_setCustomerBillingAgreementRequestDetails
	 * @return PayPalStructSetCustomerBillingAgreementRequestType
	 */
	public function __construct($_setCustomerBillingAgreementRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('SetCustomerBillingAgreementRequestDetails'=>$_setCustomerBillingAgreementRequestDetails));
	}
	/**
	 * Get SetCustomerBillingAgreementRequestDetails value
	 * @return PayPalStructSetCustomerBillingAgreementRequestDetailsType|null
	 */
	public function getSetCustomerBillingAgreementRequestDetails()
	{
		return $this->SetCustomerBillingAgreementRequestDetails;
	}
	/**
	 * Set SetCustomerBillingAgreementRequestDetails value
	 * @param PayPalStructSetCustomerBillingAgreementRequestDetailsType $_setCustomerBillingAgreementRequestDetails the SetCustomerBillingAgreementRequestDetails
	 * @return PayPalStructSetCustomerBillingAgreementRequestDetailsType
	 */
	public function setSetCustomerBillingAgreementRequestDetails($_setCustomerBillingAgreementRequestDetails)
	{
		return ($this->SetCustomerBillingAgreementRequestDetails = $_setCustomerBillingAgreementRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetCustomerBillingAgreementRequestType
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