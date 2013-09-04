<?php
/**
 * File for class PayPalStructSetMobileCheckoutRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetMobileCheckoutRequestType originally named SetMobileCheckoutRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetMobileCheckoutRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The SetMobileCheckoutRequestDetails
	 * @var PayPalStructSetMobileCheckoutRequestDetailsType
	 */
	public $SetMobileCheckoutRequestDetails;
	/**
	 * Constructor method for SetMobileCheckoutRequestType
	 * @see parent::__construct()
	 * @param PayPalStructSetMobileCheckoutRequestDetailsType $_setMobileCheckoutRequestDetails
	 * @return PayPalStructSetMobileCheckoutRequestType
	 */
	public function __construct($_setMobileCheckoutRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('SetMobileCheckoutRequestDetails'=>$_setMobileCheckoutRequestDetails));
	}
	/**
	 * Get SetMobileCheckoutRequestDetails value
	 * @return PayPalStructSetMobileCheckoutRequestDetailsType|null
	 */
	public function getSetMobileCheckoutRequestDetails()
	{
		return $this->SetMobileCheckoutRequestDetails;
	}
	/**
	 * Set SetMobileCheckoutRequestDetails value
	 * @param PayPalStructSetMobileCheckoutRequestDetailsType $_setMobileCheckoutRequestDetails the SetMobileCheckoutRequestDetails
	 * @return PayPalStructSetMobileCheckoutRequestDetailsType
	 */
	public function setSetMobileCheckoutRequestDetails($_setMobileCheckoutRequestDetails)
	{
		return ($this->SetMobileCheckoutRequestDetails = $_setMobileCheckoutRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetMobileCheckoutRequestType
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