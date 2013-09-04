<?php
/**
 * File for class PayPalStructCompleteRecoupRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCompleteRecoupRequestType originally named CompleteRecoupRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCompleteRecoupRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The EnhancedCompleteRecoupRequestDetails
	 * @var PayPalStructEnhancedCompleteRecoupRequestDetailsType
	 */
	public $EnhancedCompleteRecoupRequestDetails;
	/**
	 * Constructor method for CompleteRecoupRequestType
	 * @see parent::__construct()
	 * @param PayPalStructEnhancedCompleteRecoupRequestDetailsType $_enhancedCompleteRecoupRequestDetails
	 * @return PayPalStructCompleteRecoupRequestType
	 */
	public function __construct($_enhancedCompleteRecoupRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('EnhancedCompleteRecoupRequestDetails'=>$_enhancedCompleteRecoupRequestDetails));
	}
	/**
	 * Get EnhancedCompleteRecoupRequestDetails value
	 * @return PayPalStructEnhancedCompleteRecoupRequestDetailsType|null
	 */
	public function getEnhancedCompleteRecoupRequestDetails()
	{
		return $this->EnhancedCompleteRecoupRequestDetails;
	}
	/**
	 * Set EnhancedCompleteRecoupRequestDetails value
	 * @param PayPalStructEnhancedCompleteRecoupRequestDetailsType $_enhancedCompleteRecoupRequestDetails the EnhancedCompleteRecoupRequestDetails
	 * @return PayPalStructEnhancedCompleteRecoupRequestDetailsType
	 */
	public function setEnhancedCompleteRecoupRequestDetails($_enhancedCompleteRecoupRequestDetails)
	{
		return ($this->EnhancedCompleteRecoupRequestDetails = $_enhancedCompleteRecoupRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCompleteRecoupRequestType
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