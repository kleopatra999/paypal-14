<?php
/**
 * File for class PayPalServiceDo
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceDo originally named Do
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceDo extends PayPalWsdlClass
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
	 * Method to call the operation originally named DoMobileCheckoutPayment
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoMobileCheckoutPaymentReq::getDoMobileCheckoutPaymentRequest()
	 * @param PayPalStructDoMobileCheckoutPaymentReq $_payPalStructDoMobileCheckoutPaymentReq
	 * @return PayPalStructDoMobileCheckoutPaymentResponseType
	 */
	public function DoMobileCheckoutPayment(PayPalStructDoMobileCheckoutPaymentReq $_payPalStructDoMobileCheckoutPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoMobileCheckoutPayment(array('DoMobileCheckoutPaymentRequest'=>$_payPalStructDoMobileCheckoutPaymentReq->getDoMobileCheckoutPaymentRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoExpressCheckoutPayment
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoExpressCheckoutPaymentReq::getDoExpressCheckoutPaymentRequest()
	 * @param PayPalStructDoExpressCheckoutPaymentReq $_payPalStructDoExpressCheckoutPaymentReq
	 * @return PayPalStructDoExpressCheckoutPaymentResponseType
	 */
	public function DoExpressCheckoutPayment(PayPalStructDoExpressCheckoutPaymentReq $_payPalStructDoExpressCheckoutPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoExpressCheckoutPayment(array('DoExpressCheckoutPaymentRequest'=>$_payPalStructDoExpressCheckoutPaymentReq->getDoExpressCheckoutPaymentRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoUATPExpressCheckoutPayment
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoUATPExpressCheckoutPaymentReq::getDoUATPExpressCheckoutPaymentRequest()
	 * @param PayPalStructDoUATPExpressCheckoutPaymentReq $_payPalStructDoUATPExpressCheckoutPaymentReq
	 * @return PayPalStructDoUATPExpressCheckoutPaymentResponseType
	 */
	public function DoUATPExpressCheckoutPayment(PayPalStructDoUATPExpressCheckoutPaymentReq $_payPalStructDoUATPExpressCheckoutPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoUATPExpressCheckoutPayment(array('DoUATPExpressCheckoutPaymentRequest'=>$_payPalStructDoUATPExpressCheckoutPaymentReq->getDoUATPExpressCheckoutPaymentRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoDirectPayment
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoDirectPaymentReq::getDoDirectPaymentRequest()
	 * @param PayPalStructDoDirectPaymentReq $_payPalStructDoDirectPaymentReq
	 * @return PayPalStructDoDirectPaymentResponseType
	 */
	public function DoDirectPayment(PayPalStructDoDirectPaymentReq $_payPalStructDoDirectPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoDirectPayment(array('DoDirectPaymentRequest'=>$_payPalStructDoDirectPaymentReq->getDoDirectPaymentRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoCancel
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoCancelReq::getDoCancelRequest()
	 * @param PayPalStructDoCancelReq $_payPalStructDoCancelReq
	 * @return PayPalStructDoCancelResponseType
	 */
	public function DoCancel(PayPalStructDoCancelReq $_payPalStructDoCancelReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoCancel(array('DoCancelRequest'=>$_payPalStructDoCancelReq->getDoCancelRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoCapture
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoCaptureReq::getDoCaptureRequest()
	 * @param PayPalStructDoCaptureReq $_payPalStructDoCaptureReq
	 * @return PayPalStructDoCaptureResponseType
	 */
	public function DoCapture(PayPalStructDoCaptureReq $_payPalStructDoCaptureReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoCapture(array('DoCaptureRequest'=>$_payPalStructDoCaptureReq->getDoCaptureRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoReauthorization
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoReauthorizationReq::getDoReauthorizationRequest()
	 * @param PayPalStructDoReauthorizationReq $_payPalStructDoReauthorizationReq
	 * @return PayPalStructDoReauthorizationResponseType
	 */
	public function DoReauthorization(PayPalStructDoReauthorizationReq $_payPalStructDoReauthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoReauthorization(array('DoReauthorizationRequest'=>$_payPalStructDoReauthorizationReq->getDoReauthorizationRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoVoid
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoVoidReq::getDoVoidRequest()
	 * @param PayPalStructDoVoidReq $_payPalStructDoVoidReq
	 * @return PayPalStructDoVoidResponseType
	 */
	public function DoVoid(PayPalStructDoVoidReq $_payPalStructDoVoidReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoVoid(array('DoVoidRequest'=>$_payPalStructDoVoidReq->getDoVoidRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoAuthorization
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoAuthorizationReq::getDoAuthorizationRequest()
	 * @param PayPalStructDoAuthorizationReq $_payPalStructDoAuthorizationReq
	 * @return PayPalStructDoAuthorizationResponseType
	 */
	public function DoAuthorization(PayPalStructDoAuthorizationReq $_payPalStructDoAuthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoAuthorization(array('DoAuthorizationRequest'=>$_payPalStructDoAuthorizationReq->getDoAuthorizationRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoUATPAuthorization
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoUATPAuthorizationReq::getDoUATPAuthorizationRequest()
	 * @param PayPalStructDoUATPAuthorizationReq $_payPalStructDoUATPAuthorizationReq
	 * @return PayPalStructDoUATPAuthorizationResponseType
	 */
	public function DoUATPAuthorization(PayPalStructDoUATPAuthorizationReq $_payPalStructDoUATPAuthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoUATPAuthorization(array('DoUATPAuthorizationRequest'=>$_payPalStructDoUATPAuthorizationReq->getDoUATPAuthorizationRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoReferenceTransaction
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoReferenceTransactionReq::getDoReferenceTransactionRequest()
	 * @param PayPalStructDoReferenceTransactionReq $_payPalStructDoReferenceTransactionReq
	 * @return PayPalStructDoReferenceTransactionResponseType
	 */
	public function DoReferenceTransaction(PayPalStructDoReferenceTransactionReq $_payPalStructDoReferenceTransactionReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoReferenceTransaction(array('DoReferenceTransactionRequest'=>$_payPalStructDoReferenceTransactionReq->getDoReferenceTransactionRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named DoNonReferencedCredit
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructDoNonReferencedCreditReq::getDoNonReferencedCreditRequest()
	 * @param PayPalStructDoNonReferencedCreditReq $_payPalStructDoNonReferencedCreditReq
	 * @return PayPalStructDoNonReferencedCreditResponseType
	 */
	public function DoNonReferencedCredit(PayPalStructDoNonReferencedCreditReq $_payPalStructDoNonReferencedCreditReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoNonReferencedCredit(array('DoNonReferencedCreditRequest'=>$_payPalStructDoNonReferencedCreditReq->getDoNonReferencedCreditRequest())));
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
	 * @return PayPalStructDoAuthorizationResponseType|PayPalStructDoCancelResponseType|PayPalStructDoCaptureResponseType|PayPalStructDoDirectPaymentResponseType|PayPalStructDoExpressCheckoutPaymentResponseType|PayPalStructDoMobileCheckoutPaymentResponseType|PayPalStructDoNonReferencedCreditResponseType|PayPalStructDoReauthorizationResponseType|PayPalStructDoReferenceTransactionResponseType|PayPalStructDoUATPAuthorizationResponseType|PayPalStructDoUATPExpressCheckoutPaymentResponseType|PayPalStructDoVoidResponseType
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