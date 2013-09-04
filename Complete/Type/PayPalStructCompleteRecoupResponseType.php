<?php
/**
 * File for class PayPalStructCompleteRecoupResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCompleteRecoupResponseType originally named CompleteRecoupResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCompleteRecoupResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The EnhancedCompleteRecoupResponseDetails
	 * @var PayPalStructEnhancedCompleteRecoupResponseDetailsType
	 */
	public $EnhancedCompleteRecoupResponseDetails;
	/**
	 * Constructor method for CompleteRecoupResponseType
	 * @see parent::__construct()
	 * @param PayPalStructEnhancedCompleteRecoupResponseDetailsType $_enhancedCompleteRecoupResponseDetails
	 * @return PayPalStructCompleteRecoupResponseType
	 */
	public function __construct($_enhancedCompleteRecoupResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('EnhancedCompleteRecoupResponseDetails'=>$_enhancedCompleteRecoupResponseDetails));
	}
	/**
	 * Get EnhancedCompleteRecoupResponseDetails value
	 * @return PayPalStructEnhancedCompleteRecoupResponseDetailsType|null
	 */
	public function getEnhancedCompleteRecoupResponseDetails()
	{
		return $this->EnhancedCompleteRecoupResponseDetails;
	}
	/**
	 * Set EnhancedCompleteRecoupResponseDetails value
	 * @param PayPalStructEnhancedCompleteRecoupResponseDetailsType $_enhancedCompleteRecoupResponseDetails the EnhancedCompleteRecoupResponseDetails
	 * @return PayPalStructEnhancedCompleteRecoupResponseDetailsType
	 */
	public function setEnhancedCompleteRecoupResponseDetails($_enhancedCompleteRecoupResponseDetails)
	{
		return ($this->EnhancedCompleteRecoupResponseDetails = $_enhancedCompleteRecoupResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCompleteRecoupResponseType
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