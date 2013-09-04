<?php
/**
 * File for class PayPalStructInitiateRecoupRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructInitiateRecoupRequestType originally named InitiateRecoupRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructInitiateRecoupRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The EnhancedInitiateRecoupRequestDetails
	 * @var PayPalStructEnhancedInitiateRecoupRequestDetailsType
	 */
	public $EnhancedInitiateRecoupRequestDetails;
	/**
	 * Constructor method for InitiateRecoupRequestType
	 * @see parent::__construct()
	 * @param PayPalStructEnhancedInitiateRecoupRequestDetailsType $_enhancedInitiateRecoupRequestDetails
	 * @return PayPalStructInitiateRecoupRequestType
	 */
	public function __construct($_enhancedInitiateRecoupRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('EnhancedInitiateRecoupRequestDetails'=>$_enhancedInitiateRecoupRequestDetails));
	}
	/**
	 * Get EnhancedInitiateRecoupRequestDetails value
	 * @return PayPalStructEnhancedInitiateRecoupRequestDetailsType|null
	 */
	public function getEnhancedInitiateRecoupRequestDetails()
	{
		return $this->EnhancedInitiateRecoupRequestDetails;
	}
	/**
	 * Set EnhancedInitiateRecoupRequestDetails value
	 * @param PayPalStructEnhancedInitiateRecoupRequestDetailsType $_enhancedInitiateRecoupRequestDetails the EnhancedInitiateRecoupRequestDetails
	 * @return PayPalStructEnhancedInitiateRecoupRequestDetailsType
	 */
	public function setEnhancedInitiateRecoupRequestDetails($_enhancedInitiateRecoupRequestDetails)
	{
		return ($this->EnhancedInitiateRecoupRequestDetails = $_enhancedInitiateRecoupRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructInitiateRecoupRequestType
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