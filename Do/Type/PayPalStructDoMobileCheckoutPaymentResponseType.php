<?php
/**
 * File for class PayPalStructDoMobileCheckoutPaymentResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoMobileCheckoutPaymentResponseType originally named DoMobileCheckoutPaymentResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoMobileCheckoutPaymentResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The DoMobileCheckoutPaymentResponseDetails
	 * @var PayPalStructDoMobileCheckoutPaymentResponseDetailsType
	 */
	public $DoMobileCheckoutPaymentResponseDetails;
	/**
	 * Constructor method for DoMobileCheckoutPaymentResponseType
	 * @see parent::__construct()
	 * @param PayPalStructDoMobileCheckoutPaymentResponseDetailsType $_doMobileCheckoutPaymentResponseDetails
	 * @return PayPalStructDoMobileCheckoutPaymentResponseType
	 */
	public function __construct($_doMobileCheckoutPaymentResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoMobileCheckoutPaymentResponseDetails'=>$_doMobileCheckoutPaymentResponseDetails));
	}
	/**
	 * Get DoMobileCheckoutPaymentResponseDetails value
	 * @return PayPalStructDoMobileCheckoutPaymentResponseDetailsType|null
	 */
	public function getDoMobileCheckoutPaymentResponseDetails()
	{
		return $this->DoMobileCheckoutPaymentResponseDetails;
	}
	/**
	 * Set DoMobileCheckoutPaymentResponseDetails value
	 * @param PayPalStructDoMobileCheckoutPaymentResponseDetailsType $_doMobileCheckoutPaymentResponseDetails the DoMobileCheckoutPaymentResponseDetails
	 * @return PayPalStructDoMobileCheckoutPaymentResponseDetailsType
	 */
	public function setDoMobileCheckoutPaymentResponseDetails($_doMobileCheckoutPaymentResponseDetails)
	{
		return ($this->DoMobileCheckoutPaymentResponseDetails = $_doMobileCheckoutPaymentResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoMobileCheckoutPaymentResponseType
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