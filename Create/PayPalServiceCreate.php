<?php
/**
 * File for class PayPalServiceCreate
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceCreate originally named Create
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceCreate extends PayPalWsdlClass
{
	/**
	 * Sets the RequesterCredentials SoapHeader param
	 * @uses PayPalWsdlClass::setSoapHeader()
	 * @param PayPalStructCustomSecurityHeaderType $_payPalStructCustomSecurityHeaderType
	 * @param string $_nameSpace urn:ebay:api:PayPalAPI
	 * @param bool $_mustUnderstand
	 * @param string $_actor
	 * @return bool true|false
	 */
	public function setSoapHeaderRequesterCredentials(PayPalStructCustomSecurityHeaderType $_payPalStructCustomSecurityHeaderType,$_nameSpace = 'urn:ebay:api:PayPalAPI',$_mustUnderstand = false,$_actor = null)
	{
		return $this->setSoapHeader($_nameSpace,'RequesterCredentials',$_payPalStructCustomSecurityHeaderType,$_mustUnderstand,$_actor);
	}
	/**
	 * Method to call the operation originally named CreateMobilePayment
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructCreateMobilePaymentReq::getCreateMobilePaymentRequest()
	 * @param PayPalStructCreateMobilePaymentReq $_payPalStructCreateMobilePaymentReq
	 * @return PayPalStructCreateMobilePaymentResponseType
	 */
	public function CreateMobilePayment(PayPalStructCreateMobilePaymentReq $_payPalStructCreateMobilePaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateMobilePayment(array('CreateMobilePaymentRequest'=>$_payPalStructCreateMobilePaymentReq->getCreateMobilePaymentRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named CreateBillingAgreement
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructCreateBillingAgreementReq::getCreateBillingAgreementRequest()
	 * @param PayPalStructCreateBillingAgreementReq $_payPalStructCreateBillingAgreementReq
	 * @return PayPalStructCreateBillingAgreementResponseType
	 */
	public function CreateBillingAgreement(PayPalStructCreateBillingAgreementReq $_payPalStructCreateBillingAgreementReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateBillingAgreement(array('CreateBillingAgreementRequest'=>$_payPalStructCreateBillingAgreementReq->getCreateBillingAgreementRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named CreateRecurringPaymentsProfile
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructCreateRecurringPaymentsProfileReq::getCreateRecurringPaymentsProfileRequest()
	 * @param PayPalStructCreateRecurringPaymentsProfileReq $_payPalStructCreateRecurringPaymentsProfileReq
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseType
	 */
	public function CreateRecurringPaymentsProfile(PayPalStructCreateRecurringPaymentsProfileReq $_payPalStructCreateRecurringPaymentsProfileReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateRecurringPaymentsProfile(array('CreateRecurringPaymentsProfileRequest'=>$_payPalStructCreateRecurringPaymentsProfileReq->getCreateRecurringPaymentsProfileRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see PayPalWsdlClass::getResult()
	 * @return PayPalStructCreateBillingAgreementResponseType|PayPalStructCreateMobilePaymentResponseType|PayPalStructCreateRecurringPaymentsProfileResponseType
	 */
	public function getResult()
	{
		return parent::getResult();
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