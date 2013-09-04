<?php
/**
 * File for class PayPalStructEnterBoardingRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructEnterBoardingRequestType originally named EnterBoardingRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructEnterBoardingRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The EnterBoardingRequestDetails
	 * @var PayPalStructEnterBoardingRequestDetailsType
	 */
	public $EnterBoardingRequestDetails;
	/**
	 * Constructor method for EnterBoardingRequestType
	 * @see parent::__construct()
	 * @param PayPalStructEnterBoardingRequestDetailsType $_enterBoardingRequestDetails
	 * @return PayPalStructEnterBoardingRequestType
	 */
	public function __construct($_enterBoardingRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('EnterBoardingRequestDetails'=>$_enterBoardingRequestDetails));
	}
	/**
	 * Get EnterBoardingRequestDetails value
	 * @return PayPalStructEnterBoardingRequestDetailsType|null
	 */
	public function getEnterBoardingRequestDetails()
	{
		return $this->EnterBoardingRequestDetails;
	}
	/**
	 * Set EnterBoardingRequestDetails value
	 * @param PayPalStructEnterBoardingRequestDetailsType $_enterBoardingRequestDetails the EnterBoardingRequestDetails
	 * @return PayPalStructEnterBoardingRequestDetailsType
	 */
	public function setEnterBoardingRequestDetails($_enterBoardingRequestDetails)
	{
		return ($this->EnterBoardingRequestDetails = $_enterBoardingRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructEnterBoardingRequestType
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