<?php
/**
 * File for class PayPalStructDoExpressCheckoutPaymentRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoExpressCheckoutPaymentRequestType originally named DoExpressCheckoutPaymentRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoExpressCheckoutPaymentRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The DoExpressCheckoutPaymentRequestDetails
	 * @var PayPalStructDoExpressCheckoutPaymentRequestDetailsType
	 */
	public $DoExpressCheckoutPaymentRequestDetails;
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
	 * Constructor method for DoExpressCheckoutPaymentRequestType
	 * @see parent::__construct()
	 * @param PayPalStructDoExpressCheckoutPaymentRequestDetailsType $_doExpressCheckoutPaymentRequestDetails
	 * @param int $_returnFMFDetails
	 * @return PayPalStructDoExpressCheckoutPaymentRequestType
	 */
	public function __construct($_doExpressCheckoutPaymentRequestDetails = NULL,$_returnFMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoExpressCheckoutPaymentRequestDetails'=>$_doExpressCheckoutPaymentRequestDetails,'ReturnFMFDetails'=>$_returnFMFDetails));
	}
	/**
	 * Get DoExpressCheckoutPaymentRequestDetails value
	 * @return PayPalStructDoExpressCheckoutPaymentRequestDetailsType|null
	 */
	public function getDoExpressCheckoutPaymentRequestDetails()
	{
		return $this->DoExpressCheckoutPaymentRequestDetails;
	}
	/**
	 * Set DoExpressCheckoutPaymentRequestDetails value
	 * @param PayPalStructDoExpressCheckoutPaymentRequestDetailsType $_doExpressCheckoutPaymentRequestDetails the DoExpressCheckoutPaymentRequestDetails
	 * @return PayPalStructDoExpressCheckoutPaymentRequestDetailsType
	 */
	public function setDoExpressCheckoutPaymentRequestDetails($_doExpressCheckoutPaymentRequestDetails)
	{
		return ($this->DoExpressCheckoutPaymentRequestDetails = $_doExpressCheckoutPaymentRequestDetails);
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
	 * @return PayPalStructDoExpressCheckoutPaymentRequestType
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