<?php
/**
 * File for class PayPalStructCancelRecoupRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCancelRecoupRequestType originally named CancelRecoupRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCancelRecoupRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The EnhancedCancelRecoupRequestDetails
	 * @var PayPalStructEnhancedCancelRecoupRequestDetailsType
	 */
	public $EnhancedCancelRecoupRequestDetails;
	/**
	 * Constructor method for CancelRecoupRequestType
	 * @see parent::__construct()
	 * @param PayPalStructEnhancedCancelRecoupRequestDetailsType $_enhancedCancelRecoupRequestDetails
	 * @return PayPalStructCancelRecoupRequestType
	 */
	public function __construct($_enhancedCancelRecoupRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('EnhancedCancelRecoupRequestDetails'=>$_enhancedCancelRecoupRequestDetails));
	}
	/**
	 * Get EnhancedCancelRecoupRequestDetails value
	 * @return PayPalStructEnhancedCancelRecoupRequestDetailsType|null
	 */
	public function getEnhancedCancelRecoupRequestDetails()
	{
		return $this->EnhancedCancelRecoupRequestDetails;
	}
	/**
	 * Set EnhancedCancelRecoupRequestDetails value
	 * @param PayPalStructEnhancedCancelRecoupRequestDetailsType $_enhancedCancelRecoupRequestDetails the EnhancedCancelRecoupRequestDetails
	 * @return PayPalStructEnhancedCancelRecoupRequestDetailsType
	 */
	public function setEnhancedCancelRecoupRequestDetails($_enhancedCancelRecoupRequestDetails)
	{
		return ($this->EnhancedCancelRecoupRequestDetails = $_enhancedCancelRecoupRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCancelRecoupRequestType
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