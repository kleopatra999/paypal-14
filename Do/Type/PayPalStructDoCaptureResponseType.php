<?php
/**
 * File for class PayPalStructDoCaptureResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCaptureResponseType originally named DoCaptureResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCaptureResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The DoCaptureResponseDetails
	 * @var PayPalStructDoCaptureResponseDetailsType
	 */
	public $DoCaptureResponseDetails;
	/**
	 * Constructor method for DoCaptureResponseType
	 * @see parent::__construct()
	 * @param PayPalStructDoCaptureResponseDetailsType $_doCaptureResponseDetails
	 * @return PayPalStructDoCaptureResponseType
	 */
	public function __construct($_doCaptureResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoCaptureResponseDetails'=>$_doCaptureResponseDetails));
	}
	/**
	 * Get DoCaptureResponseDetails value
	 * @return PayPalStructDoCaptureResponseDetailsType|null
	 */
	public function getDoCaptureResponseDetails()
	{
		return $this->DoCaptureResponseDetails;
	}
	/**
	 * Set DoCaptureResponseDetails value
	 * @param PayPalStructDoCaptureResponseDetailsType $_doCaptureResponseDetails the DoCaptureResponseDetails
	 * @return PayPalStructDoCaptureResponseDetailsType
	 */
	public function setDoCaptureResponseDetails($_doCaptureResponseDetails)
	{
		return ($this->DoCaptureResponseDetails = $_doCaptureResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoCaptureResponseType
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