<?php
/**
 * File for class PayPalServiceBill
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceBill originally named Bill
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceBill extends PayPalWsdlClass
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
	 * Method to call the operation originally named BillUser
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructBillUserReq::getBillUserRequest()
	 * @param PayPalStructBillUserReq $_payPalStructBillUserReq
	 * @return PayPalStructBillUserResponseType
	 */
	public function BillUser(PayPalStructBillUserReq $_payPalStructBillUserReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BillUser(array('BillUserRequest'=>$_payPalStructBillUserReq->getBillUserRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named BillAgreementUpdate
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructBillAgreementUpdateReq::getBAUpdateRequest()
	 * @param PayPalStructBillAgreementUpdateReq $_payPalStructBillAgreementUpdateReq
	 * @return PayPalStructBAUpdateResponseType
	 */
	public function BillAgreementUpdate(PayPalStructBillAgreementUpdateReq $_payPalStructBillAgreementUpdateReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BillAgreementUpdate(array('BAUpdateRequest'=>$_payPalStructBillAgreementUpdateReq->getBAUpdateRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named BillOutstandingAmount
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructBillOutstandingAmountReq::getBillOutstandingAmountRequest()
	 * @param PayPalStructBillOutstandingAmountReq $_payPalStructBillOutstandingAmountReq
	 * @return PayPalStructBillOutstandingAmountResponseType
	 */
	public function BillOutstandingAmount(PayPalStructBillOutstandingAmountReq $_payPalStructBillOutstandingAmountReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BillOutstandingAmount(array('BillOutstandingAmountRequest'=>$_payPalStructBillOutstandingAmountReq->getBillOutstandingAmountRequest())));
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
	 * @return PayPalStructBAUpdateResponseType|PayPalStructBillOutstandingAmountResponseType|PayPalStructBillUserResponseType
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