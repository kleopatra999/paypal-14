<?php
/**
 * File for class PayPalStructDoUATPExpressCheckoutPaymentResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoUATPExpressCheckoutPaymentResponseType originally named DoUATPExpressCheckoutPaymentResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoUATPExpressCheckoutPaymentResponseType extends PayPalStructDoExpressCheckoutPaymentResponseType
{
	/**
	 * The UATPDetails
	 * @var PayPalStructUATPDetailsType
	 */
	public $UATPDetails;
	/**
	 * Constructor method for DoUATPExpressCheckoutPaymentResponseType
	 * @see parent::__construct()
	 * @param PayPalStructUATPDetailsType $_uATPDetails
	 * @return PayPalStructDoUATPExpressCheckoutPaymentResponseType
	 */
	public function __construct($_uATPDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('UATPDetails'=>$_uATPDetails));
	}
	/**
	 * Get UATPDetails value
	 * @return PayPalStructUATPDetailsType|null
	 */
	public function getUATPDetails()
	{
		return $this->UATPDetails;
	}
	/**
	 * Set UATPDetails value
	 * @param PayPalStructUATPDetailsType $_uATPDetails the UATPDetails
	 * @return PayPalStructUATPDetailsType
	 */
	public function setUATPDetails($_uATPDetails)
	{
		return ($this->UATPDetails = $_uATPDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoUATPExpressCheckoutPaymentResponseType
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