<?php
/**
 * File for class PayPalServiceSet
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceSet originally named Set
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceSet extends PayPalWsdlClass
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
	 * Method to call the operation originally named SetMobileCheckout
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructSetMobileCheckoutReq::getSetMobileCheckoutRequest()
	 * @param PayPalStructSetMobileCheckoutReq $_payPalStructSetMobileCheckoutReq
	 * @return PayPalStructSetMobileCheckoutResponseType
	 */
	public function SetMobileCheckout(PayPalStructSetMobileCheckoutReq $_payPalStructSetMobileCheckoutReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetMobileCheckout(array('SetMobileCheckoutRequest'=>$_payPalStructSetMobileCheckoutReq->getSetMobileCheckoutRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named SetAuthFlowParam
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructSetAuthFlowParamReq::getSetAuthFlowParamRequest()
	 * @param PayPalStructSetAuthFlowParamReq $_payPalStructSetAuthFlowParamReq
	 * @return PayPalStructSetAuthFlowParamResponseType
	 */
	public function SetAuthFlowParam(PayPalStructSetAuthFlowParamReq $_payPalStructSetAuthFlowParamReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetAuthFlowParam(array('SetAuthFlowParamRequest'=>$_payPalStructSetAuthFlowParamReq->getSetAuthFlowParamRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named SetAccessPermissions
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructSetAccessPermissionsReq::getSetAccessPermissionsRequest()
	 * @param PayPalStructSetAccessPermissionsReq $_payPalStructSetAccessPermissionsReq
	 * @return PayPalStructSetAccessPermissionsResponseType
	 */
	public function SetAccessPermissions(PayPalStructSetAccessPermissionsReq $_payPalStructSetAccessPermissionsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetAccessPermissions(array('SetAccessPermissionsRequest'=>$_payPalStructSetAccessPermissionsReq->getSetAccessPermissionsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named SetExpressCheckout
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructSetExpressCheckoutReq::getSetExpressCheckoutRequest()
	 * @param PayPalStructSetExpressCheckoutReq $_payPalStructSetExpressCheckoutReq
	 * @return PayPalStructSetExpressCheckoutResponseType
	 */
	public function SetExpressCheckout(PayPalStructSetExpressCheckoutReq $_payPalStructSetExpressCheckoutReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetExpressCheckout(array('SetExpressCheckoutRequest'=>$_payPalStructSetExpressCheckoutReq->getSetExpressCheckoutRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named SetCustomerBillingAgreement
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructSetCustomerBillingAgreementReq::getSetCustomerBillingAgreementRequest()
	 * @param PayPalStructSetCustomerBillingAgreementReq $_payPalStructSetCustomerBillingAgreementReq
	 * @return PayPalStructSetCustomerBillingAgreementResponseType
	 */
	public function SetCustomerBillingAgreement(PayPalStructSetCustomerBillingAgreementReq $_payPalStructSetCustomerBillingAgreementReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetCustomerBillingAgreement(array('SetCustomerBillingAgreementRequest'=>$_payPalStructSetCustomerBillingAgreementReq->getSetCustomerBillingAgreementRequest())));
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
	 * @return PayPalStructSetAccessPermissionsResponseType|PayPalStructSetAuthFlowParamResponseType|PayPalStructSetCustomerBillingAgreementResponseType|PayPalStructSetExpressCheckoutResponseType|PayPalStructSetMobileCheckoutResponseType
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