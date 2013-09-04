<?php
/**
 * File for class PayPalStructSetExpressCheckoutReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetExpressCheckoutReq originally named SetExpressCheckoutReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetExpressCheckoutReq extends PayPalWsdlClass
{
	/**
	 * The SetExpressCheckoutRequest
	 * @var PayPalStructSetExpressCheckoutRequestType
	 */
	public $SetExpressCheckoutRequest;
	/**
	 * Constructor method for SetExpressCheckoutReq
	 * @see parent::__construct()
	 * @param PayPalStructSetExpressCheckoutRequestType $_setExpressCheckoutRequest
	 * @return PayPalStructSetExpressCheckoutReq
	 */
	public function __construct($_setExpressCheckoutRequest = NULL)
	{
		parent::__construct(array('SetExpressCheckoutRequest'=>$_setExpressCheckoutRequest));
	}
	/**
	 * Get SetExpressCheckoutRequest value
	 * @return PayPalStructSetExpressCheckoutRequestType|null
	 */
	public function getSetExpressCheckoutRequest()
	{
		return $this->SetExpressCheckoutRequest;
	}
	/**
	 * Set SetExpressCheckoutRequest value
	 * @param PayPalStructSetExpressCheckoutRequestType $_setExpressCheckoutRequest the SetExpressCheckoutRequest
	 * @return PayPalStructSetExpressCheckoutRequestType
	 */
	public function setSetExpressCheckoutRequest($_setExpressCheckoutRequest)
	{
		return ($this->SetExpressCheckoutRequest = $_setExpressCheckoutRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetExpressCheckoutReq
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