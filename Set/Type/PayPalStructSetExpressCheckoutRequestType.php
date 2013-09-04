<?php
/**
 * File for class PayPalStructSetExpressCheckoutRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetExpressCheckoutRequestType originally named SetExpressCheckoutRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetExpressCheckoutRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The SetExpressCheckoutRequestDetails
	 * @var PayPalStructSetExpressCheckoutRequestDetailsType
	 */
	public $SetExpressCheckoutRequestDetails;
	/**
	 * Constructor method for SetExpressCheckoutRequestType
	 * @see parent::__construct()
	 * @param PayPalStructSetExpressCheckoutRequestDetailsType $_setExpressCheckoutRequestDetails
	 * @return PayPalStructSetExpressCheckoutRequestType
	 */
	public function __construct($_setExpressCheckoutRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('SetExpressCheckoutRequestDetails'=>$_setExpressCheckoutRequestDetails));
	}
	/**
	 * Get SetExpressCheckoutRequestDetails value
	 * @return PayPalStructSetExpressCheckoutRequestDetailsType|null
	 */
	public function getSetExpressCheckoutRequestDetails()
	{
		return $this->SetExpressCheckoutRequestDetails;
	}
	/**
	 * Set SetExpressCheckoutRequestDetails value
	 * @param PayPalStructSetExpressCheckoutRequestDetailsType $_setExpressCheckoutRequestDetails the SetExpressCheckoutRequestDetails
	 * @return PayPalStructSetExpressCheckoutRequestDetailsType
	 */
	public function setSetExpressCheckoutRequestDetails($_setExpressCheckoutRequestDetails)
	{
		return ($this->SetExpressCheckoutRequestDetails = $_setExpressCheckoutRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetExpressCheckoutRequestType
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