<?php
/**
 * File for class PayPalStructSetMobileCheckoutReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetMobileCheckoutReq originally named SetMobileCheckoutReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetMobileCheckoutReq extends PayPalWsdlClass
{
	/**
	 * The SetMobileCheckoutRequest
	 * @var PayPalStructSetMobileCheckoutRequestType
	 */
	public $SetMobileCheckoutRequest;
	/**
	 * Constructor method for SetMobileCheckoutReq
	 * @see parent::__construct()
	 * @param PayPalStructSetMobileCheckoutRequestType $_setMobileCheckoutRequest
	 * @return PayPalStructSetMobileCheckoutReq
	 */
	public function __construct($_setMobileCheckoutRequest = NULL)
	{
		parent::__construct(array('SetMobileCheckoutRequest'=>$_setMobileCheckoutRequest));
	}
	/**
	 * Get SetMobileCheckoutRequest value
	 * @return PayPalStructSetMobileCheckoutRequestType|null
	 */
	public function getSetMobileCheckoutRequest()
	{
		return $this->SetMobileCheckoutRequest;
	}
	/**
	 * Set SetMobileCheckoutRequest value
	 * @param PayPalStructSetMobileCheckoutRequestType $_setMobileCheckoutRequest the SetMobileCheckoutRequest
	 * @return PayPalStructSetMobileCheckoutRequestType
	 */
	public function setSetMobileCheckoutRequest($_setMobileCheckoutRequest)
	{
		return ($this->SetMobileCheckoutRequest = $_setMobileCheckoutRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetMobileCheckoutReq
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