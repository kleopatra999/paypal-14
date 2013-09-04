<?php
/**
 * File for class PayPalStructCreateMobilePaymentRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateMobilePaymentRequestType originally named CreateMobilePaymentRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateMobilePaymentRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The CreateMobilePaymentRequestDetails
	 * @var PayPalStructCreateMobilePaymentRequestDetailsType
	 */
	public $CreateMobilePaymentRequestDetails;
	/**
	 * Constructor method for CreateMobilePaymentRequestType
	 * @see parent::__construct()
	 * @param PayPalStructCreateMobilePaymentRequestDetailsType $_createMobilePaymentRequestDetails
	 * @return PayPalStructCreateMobilePaymentRequestType
	 */
	public function __construct($_createMobilePaymentRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('CreateMobilePaymentRequestDetails'=>$_createMobilePaymentRequestDetails));
	}
	/**
	 * Get CreateMobilePaymentRequestDetails value
	 * @return PayPalStructCreateMobilePaymentRequestDetailsType|null
	 */
	public function getCreateMobilePaymentRequestDetails()
	{
		return $this->CreateMobilePaymentRequestDetails;
	}
	/**
	 * Set CreateMobilePaymentRequestDetails value
	 * @param PayPalStructCreateMobilePaymentRequestDetailsType $_createMobilePaymentRequestDetails the CreateMobilePaymentRequestDetails
	 * @return PayPalStructCreateMobilePaymentRequestDetailsType
	 */
	public function setCreateMobilePaymentRequestDetails($_createMobilePaymentRequestDetails)
	{
		return ($this->CreateMobilePaymentRequestDetails = $_createMobilePaymentRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateMobilePaymentRequestType
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