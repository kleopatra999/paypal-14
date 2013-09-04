<?php
/**
 * File for class PayPalServiceGet
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceGet originally named Get
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceGet extends PayPalWsdlClass
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
	 * Method to call the operation originally named GetTransactionDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetTransactionDetailsReq::getGetTransactionDetailsRequest()
	 * @param PayPalStructGetTransactionDetailsReq $_payPalStructGetTransactionDetailsReq
	 * @return PayPalStructGetTransactionDetailsResponseType
	 */
	public function GetTransactionDetails(PayPalStructGetTransactionDetailsReq $_payPalStructGetTransactionDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTransactionDetails(array('GetTransactionDetailsRequest'=>$_payPalStructGetTransactionDetailsReq->getGetTransactionDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBoardingDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetBoardingDetailsReq::getGetBoardingDetailsRequest()
	 * @param PayPalStructGetBoardingDetailsReq $_payPalStructGetBoardingDetailsReq
	 * @return PayPalStructGetBoardingDetailsResponseType
	 */
	public function GetBoardingDetails(PayPalStructGetBoardingDetailsReq $_payPalStructGetBoardingDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBoardingDetails(array('GetBoardingDetailsRequest'=>$_payPalStructGetBoardingDetailsReq->getGetBoardingDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetMobileStatus
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetMobileStatusReq::getGetMobileStatusRequest()
	 * @param PayPalStructGetMobileStatusReq $_payPalStructGetMobileStatusReq
	 * @return PayPalStructGetMobileStatusResponseType
	 */
	public function GetMobileStatus(PayPalStructGetMobileStatusReq $_payPalStructGetMobileStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMobileStatus(array('GetMobileStatusRequest'=>$_payPalStructGetMobileStatusReq->getGetMobileStatusRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBalance
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetBalanceReq::getGetBalanceRequest()
	 * @param PayPalStructGetBalanceReq $_payPalStructGetBalanceReq
	 * @return PayPalStructGetBalanceResponseType
	 */
	public function GetBalance(PayPalStructGetBalanceReq $_payPalStructGetBalanceReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBalance(array('GetBalanceRequest'=>$_payPalStructGetBalanceReq->getGetBalanceRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetPalDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetPalDetailsReq::getGetPalDetailsRequest()
	 * @param PayPalStructGetPalDetailsReq $_payPalStructGetPalDetailsReq
	 * @return PayPalStructGetPalDetailsResponseType
	 */
	public function GetPalDetails(PayPalStructGetPalDetailsReq $_payPalStructGetPalDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPalDetails(array('GetPalDetailsRequest'=>$_payPalStructGetPalDetailsReq->getGetPalDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetAuthDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetAuthDetailsReq::getGetAuthDetailsRequest()
	 * @param PayPalStructGetAuthDetailsReq $_payPalStructGetAuthDetailsReq
	 * @return PayPalStructGetAuthDetailsResponseType
	 */
	public function GetAuthDetails(PayPalStructGetAuthDetailsReq $_payPalStructGetAuthDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAuthDetails(array('GetAuthDetailsRequest'=>$_payPalStructGetAuthDetailsReq->getGetAuthDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetAccessPermissionDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetAccessPermissionDetailsReq::getGetAccessPermissionDetailsRequest()
	 * @param PayPalStructGetAccessPermissionDetailsReq $_payPalStructGetAccessPermissionDetailsReq
	 * @return PayPalStructGetAccessPermissionDetailsResponseType
	 */
	public function GetAccessPermissionDetails(PayPalStructGetAccessPermissionDetailsReq $_payPalStructGetAccessPermissionDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccessPermissionDetails(array('GetAccessPermissionDetailsRequest'=>$_payPalStructGetAccessPermissionDetailsReq->getGetAccessPermissionDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetIncentiveEvaluation
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetIncentiveEvaluationReq::getGetIncentiveEvaluationRequest()
	 * @param PayPalStructGetIncentiveEvaluationReq $_payPalStructGetIncentiveEvaluationReq
	 * @return PayPalStructGetIncentiveEvaluationResponseType
	 */
	public function GetIncentiveEvaluation(PayPalStructGetIncentiveEvaluationReq $_payPalStructGetIncentiveEvaluationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncentiveEvaluation(array('GetIncentiveEvaluationRequest'=>$_payPalStructGetIncentiveEvaluationReq->getGetIncentiveEvaluationRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetExpressCheckoutDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetExpressCheckoutDetailsReq::getGetExpressCheckoutDetailsRequest()
	 * @param PayPalStructGetExpressCheckoutDetailsReq $_payPalStructGetExpressCheckoutDetailsReq
	 * @return PayPalStructGetExpressCheckoutDetailsResponseType
	 */
	public function GetExpressCheckoutDetails(PayPalStructGetExpressCheckoutDetailsReq $_payPalStructGetExpressCheckoutDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExpressCheckoutDetails(array('GetExpressCheckoutDetailsRequest'=>$_payPalStructGetExpressCheckoutDetailsReq->getGetExpressCheckoutDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetBillingAgreementCustomerDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetBillingAgreementCustomerDetailsReq::getGetBillingAgreementCustomerDetailsRequest()
	 * @param PayPalStructGetBillingAgreementCustomerDetailsReq $_payPalStructGetBillingAgreementCustomerDetailsReq
	 * @return PayPalStructGetBillingAgreementCustomerDetailsResponseType
	 */
	public function GetBillingAgreementCustomerDetails(PayPalStructGetBillingAgreementCustomerDetailsReq $_payPalStructGetBillingAgreementCustomerDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBillingAgreementCustomerDetails(array('GetBillingAgreementCustomerDetailsRequest'=>$_payPalStructGetBillingAgreementCustomerDetailsReq->getGetBillingAgreementCustomerDetailsRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetRecurringPaymentsProfileDetails
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructGetRecurringPaymentsProfileDetailsReq::getGetRecurringPaymentsProfileDetailsRequest()
	 * @param PayPalStructGetRecurringPaymentsProfileDetailsReq $_payPalStructGetRecurringPaymentsProfileDetailsReq
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseType
	 */
	public function GetRecurringPaymentsProfileDetails(PayPalStructGetRecurringPaymentsProfileDetailsReq $_payPalStructGetRecurringPaymentsProfileDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRecurringPaymentsProfileDetails(array('GetRecurringPaymentsProfileDetailsRequest'=>$_payPalStructGetRecurringPaymentsProfileDetailsReq->getGetRecurringPaymentsProfileDetailsRequest())));
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
	 * @return PayPalStructGetAccessPermissionDetailsResponseType|PayPalStructGetAuthDetailsResponseType|PayPalStructGetBalanceResponseType|PayPalStructGetBillingAgreementCustomerDetailsResponseType|PayPalStructGetBoardingDetailsResponseType|PayPalStructGetExpressCheckoutDetailsResponseType|PayPalStructGetIncentiveEvaluationResponseType|PayPalStructGetMobileStatusResponseType|PayPalStructGetPalDetailsResponseType|PayPalStructGetRecurringPaymentsProfileDetailsResponseType|PayPalStructGetTransactionDetailsResponseType
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