<?php
/**
 * File for class PayPalStructCreateBillingAgreementReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateBillingAgreementReq originally named CreateBillingAgreementReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateBillingAgreementReq extends PayPalWsdlClass
{
	/**
	 * The CreateBillingAgreementRequest
	 * @var PayPalStructCreateBillingAgreementRequestType
	 */
	public $CreateBillingAgreementRequest;
	/**
	 * Constructor method for CreateBillingAgreementReq
	 * @see parent::__construct()
	 * @param PayPalStructCreateBillingAgreementRequestType $_createBillingAgreementRequest
	 * @return PayPalStructCreateBillingAgreementReq
	 */
	public function __construct($_createBillingAgreementRequest = NULL)
	{
		parent::__construct(array('CreateBillingAgreementRequest'=>$_createBillingAgreementRequest));
	}
	/**
	 * Get CreateBillingAgreementRequest value
	 * @return PayPalStructCreateBillingAgreementRequestType|null
	 */
	public function getCreateBillingAgreementRequest()
	{
		return $this->CreateBillingAgreementRequest;
	}
	/**
	 * Set CreateBillingAgreementRequest value
	 * @param PayPalStructCreateBillingAgreementRequestType $_createBillingAgreementRequest the CreateBillingAgreementRequest
	 * @return PayPalStructCreateBillingAgreementRequestType
	 */
	public function setCreateBillingAgreementRequest($_createBillingAgreementRequest)
	{
		return ($this->CreateBillingAgreementRequest = $_createBillingAgreementRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateBillingAgreementReq
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