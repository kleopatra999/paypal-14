<?php
/**
 * File for class PayPalServiceUpdate
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceUpdate originally named Update
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceUpdate extends PayPalWsdlClass
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
	 * Method to call the operation originally named UpdateAccessPermissions
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructUpdateAccessPermissionsReq::getUpdateAccessPermissionsRequest()
	 * @param PayPalStructUpdateAccessPermissionsReq $_payPalStructUpdateAccessPermissionsReq
	 * @return PayPalStructUpdateAccessPermissionsResponseType
	 */
	public function UpdateAccessPermissions(PayPalStructUpdateAccessPermissionsReq $_payPalStructUpdateAccessPermissionsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateAccessPermissions(array('UpdateAccessPermissionsRequest'=>$_payPalStructUpdateAccessPermissionsReq->getUpdateAccessPermissionsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named UpdateAuthorization
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructUpdateAuthorizationReq::getUpdateAuthorizationRequest()
	 * @param PayPalStructUpdateAuthorizationReq $_payPalStructUpdateAuthorizationReq
	 * @return PayPalStructUpdateAuthorizationResponseType
	 */
	public function UpdateAuthorization(PayPalStructUpdateAuthorizationReq $_payPalStructUpdateAuthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateAuthorization(array('UpdateAuthorizationRequest'=>$_payPalStructUpdateAuthorizationReq->getUpdateAuthorizationRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named UpdateRecurringPaymentsProfile
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructUpdateRecurringPaymentsProfileReq::getUpdateRecurringPaymentsProfileRequest()
	 * @param PayPalStructUpdateRecurringPaymentsProfileReq $_payPalStructUpdateRecurringPaymentsProfileReq
	 * @return PayPalStructUpdateRecurringPaymentsProfileResponseType
	 */
	public function UpdateRecurringPaymentsProfile(PayPalStructUpdateRecurringPaymentsProfileReq $_payPalStructUpdateRecurringPaymentsProfileReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateRecurringPaymentsProfile(array('UpdateRecurringPaymentsProfileRequest'=>$_payPalStructUpdateRecurringPaymentsProfileReq->getUpdateRecurringPaymentsProfileRequest())));
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
	 * @return PayPalStructUpdateAccessPermissionsResponseType|PayPalStructUpdateAuthorizationResponseType|PayPalStructUpdateRecurringPaymentsProfileResponseType
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