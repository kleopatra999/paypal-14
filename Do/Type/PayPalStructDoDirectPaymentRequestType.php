<?php
/**
 * File for class PayPalStructDoDirectPaymentRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoDirectPaymentRequestType originally named DoDirectPaymentRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoDirectPaymentRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The DoDirectPaymentRequestDetails
	 * @var PayPalStructDoDirectPaymentRequestDetailsType
	 */
	public $DoDirectPaymentRequestDetails;
	/**
	 * The ReturnFMFDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : This flag indicates that the response should include FMFDetails
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor method for DoDirectPaymentRequestType
	 * @see parent::__construct()
	 * @param PayPalStructDoDirectPaymentRequestDetailsType $_doDirectPaymentRequestDetails
	 * @param int $_returnFMFDetails
	 * @return PayPalStructDoDirectPaymentRequestType
	 */
	public function __construct($_doDirectPaymentRequestDetails = NULL,$_returnFMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoDirectPaymentRequestDetails'=>$_doDirectPaymentRequestDetails,'ReturnFMFDetails'=>$_returnFMFDetails));
	}
	/**
	 * Get DoDirectPaymentRequestDetails value
	 * @return PayPalStructDoDirectPaymentRequestDetailsType|null
	 */
	public function getDoDirectPaymentRequestDetails()
	{
		return $this->DoDirectPaymentRequestDetails;
	}
	/**
	 * Set DoDirectPaymentRequestDetails value
	 * @param PayPalStructDoDirectPaymentRequestDetailsType $_doDirectPaymentRequestDetails the DoDirectPaymentRequestDetails
	 * @return PayPalStructDoDirectPaymentRequestDetailsType
	 */
	public function setDoDirectPaymentRequestDetails($_doDirectPaymentRequestDetails)
	{
		return ($this->DoDirectPaymentRequestDetails = $_doDirectPaymentRequestDetails);
	}
	/**
	 * Get ReturnFMFDetails value
	 * @return int|null
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
	}
	/**
	 * Set ReturnFMFDetails value
	 * @param int $_returnFMFDetails the ReturnFMFDetails
	 * @return int
	 */
	public function setReturnFMFDetails($_returnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_returnFMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoDirectPaymentRequestType
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