<?php
/**
 * File for class PayPalStructDoExpressCheckoutPaymentResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoExpressCheckoutPaymentResponseType originally named DoExpressCheckoutPaymentResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoExpressCheckoutPaymentResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The DoExpressCheckoutPaymentResponseDetails
	 * @var PayPalStructDoExpressCheckoutPaymentResponseDetailsType
	 */
	public $DoExpressCheckoutPaymentResponseDetails;
	/**
	 * The FMFDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * Constructor method for DoExpressCheckoutPaymentResponseType
	 * @see parent::__construct()
	 * @param PayPalStructDoExpressCheckoutPaymentResponseDetailsType $_doExpressCheckoutPaymentResponseDetails
	 * @param PayPalStructFMFDetailsType $_fMFDetails
	 * @return PayPalStructDoExpressCheckoutPaymentResponseType
	 */
	public function __construct($_doExpressCheckoutPaymentResponseDetails = NULL,$_fMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoExpressCheckoutPaymentResponseDetails'=>$_doExpressCheckoutPaymentResponseDetails,'FMFDetails'=>$_fMFDetails));
	}
	/**
	 * Get DoExpressCheckoutPaymentResponseDetails value
	 * @return PayPalStructDoExpressCheckoutPaymentResponseDetailsType|null
	 */
	public function getDoExpressCheckoutPaymentResponseDetails()
	{
		return $this->DoExpressCheckoutPaymentResponseDetails;
	}
	/**
	 * Set DoExpressCheckoutPaymentResponseDetails value
	 * @param PayPalStructDoExpressCheckoutPaymentResponseDetailsType $_doExpressCheckoutPaymentResponseDetails the DoExpressCheckoutPaymentResponseDetails
	 * @return PayPalStructDoExpressCheckoutPaymentResponseDetailsType
	 */
	public function setDoExpressCheckoutPaymentResponseDetails($_doExpressCheckoutPaymentResponseDetails)
	{
		return ($this->DoExpressCheckoutPaymentResponseDetails = $_doExpressCheckoutPaymentResponseDetails);
	}
	/**
	 * Get FMFDetails value
	 * @return PayPalStructFMFDetailsType|null
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
	}
	/**
	 * Set FMFDetails value
	 * @param PayPalStructFMFDetailsType $_fMFDetails the FMFDetails
	 * @return PayPalStructFMFDetailsType
	 */
	public function setFMFDetails($_fMFDetails)
	{
		return ($this->FMFDetails = $_fMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoExpressCheckoutPaymentResponseType
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