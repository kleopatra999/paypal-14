<?php
/**
 * File for class PayPalServiceManage
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalServiceManage originally named Manage
 * @package PayPal
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalServiceManage extends PayPalWsdlClass
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
	 * Method to call the operation originally named ManagePendingTransactionStatus
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructManagePendingTransactionStatusReq::getManagePendingTransactionStatusRequest()
	 * @param PayPalStructManagePendingTransactionStatusReq $_payPalStructManagePendingTransactionStatusReq
	 * @return PayPalStructManagePendingTransactionStatusResponseType
	 */
	public function ManagePendingTransactionStatus(PayPalStructManagePendingTransactionStatusReq $_payPalStructManagePendingTransactionStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ManagePendingTransactionStatus(array('ManagePendingTransactionStatusRequest'=>$_payPalStructManagePendingTransactionStatusReq->getManagePendingTransactionStatusRequest())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ManageRecurringPaymentsProfileStatus
	 * Meta informations extracted from the WSDL
	 * - SOAPHeaderNames : RequesterCredentials
	 * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
	 * - SOAPHeaderTypes : {@link PayPalStructCustomSecurityHeaderType}
	 * - SOAPHeaders : required
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalStructManageRecurringPaymentsProfileStatusReq::getManageRecurringPaymentsProfileStatusRequest()
	 * @param PayPalStructManageRecurringPaymentsProfileStatusReq $_payPalStructManageRecurringPaymentsProfileStatusReq
	 * @return PayPalStructManageRecurringPaymentsProfileStatusResponseType
	 */
	public function ManageRecurringPaymentsProfileStatus(PayPalStructManageRecurringPaymentsProfileStatusReq $_payPalStructManageRecurringPaymentsProfileStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ManageRecurringPaymentsProfileStatus(array('ManageRecurringPaymentsProfileStatusRequest'=>$_payPalStructManageRecurringPaymentsProfileStatusReq->getManageRecurringPaymentsProfileStatusRequest())));
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
	 * @return PayPalStructManagePendingTransactionStatusResponseType|PayPalStructManageRecurringPaymentsProfileStatusResponseType
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