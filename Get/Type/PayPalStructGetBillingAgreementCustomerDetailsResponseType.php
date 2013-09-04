<?php
/**
 * File for class PayPalStructGetBillingAgreementCustomerDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBillingAgreementCustomerDetailsResponseType originally named GetBillingAgreementCustomerDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBillingAgreementCustomerDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetBillingAgreementCustomerDetailsResponseDetails
	 * @var PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public $GetBillingAgreementCustomerDetailsResponseDetails;
	/**
	 * Constructor method for GetBillingAgreementCustomerDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType $_getBillingAgreementCustomerDetailsResponseDetails
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseType
	 */
	public function __construct($_getBillingAgreementCustomerDetailsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetBillingAgreementCustomerDetailsResponseDetails'=>$_getBillingAgreementCustomerDetailsResponseDetails));
	}
	/**
	 * Get GetBillingAgreementCustomerDetailsResponseDetails value
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType|null
	 */
	public function getGetBillingAgreementCustomerDetailsResponseDetails()
	{
		return $this->GetBillingAgreementCustomerDetailsResponseDetails;
	}
	/**
	 * Set GetBillingAgreementCustomerDetailsResponseDetails value
	 * @param PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType $_getBillingAgreementCustomerDetailsResponseDetails the GetBillingAgreementCustomerDetailsResponseDetails
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public function setGetBillingAgreementCustomerDetailsResponseDetails($_getBillingAgreementCustomerDetailsResponseDetails)
	{
		return ($this->GetBillingAgreementCustomerDetailsResponseDetails = $_getBillingAgreementCustomerDetailsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseType
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