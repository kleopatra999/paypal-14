<?php
/**
 * File for class PayPalStructSetAccessPermissionsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetAccessPermissionsRequestType originally named SetAccessPermissionsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetAccessPermissionsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The SetAccessPermissionsRequestDetails
	 * @var PayPalStructSetAccessPermissionsRequestDetailsType
	 */
	public $SetAccessPermissionsRequestDetails;
	/**
	 * Constructor method for SetAccessPermissionsRequestType
	 * @see parent::__construct()
	 * @param PayPalStructSetAccessPermissionsRequestDetailsType $_setAccessPermissionsRequestDetails
	 * @return PayPalStructSetAccessPermissionsRequestType
	 */
	public function __construct($_setAccessPermissionsRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('SetAccessPermissionsRequestDetails'=>$_setAccessPermissionsRequestDetails));
	}
	/**
	 * Get SetAccessPermissionsRequestDetails value
	 * @return PayPalStructSetAccessPermissionsRequestDetailsType|null
	 */
	public function getSetAccessPermissionsRequestDetails()
	{
		return $this->SetAccessPermissionsRequestDetails;
	}
	/**
	 * Set SetAccessPermissionsRequestDetails value
	 * @param PayPalStructSetAccessPermissionsRequestDetailsType $_setAccessPermissionsRequestDetails the SetAccessPermissionsRequestDetails
	 * @return PayPalStructSetAccessPermissionsRequestDetailsType
	 */
	public function setSetAccessPermissionsRequestDetails($_setAccessPermissionsRequestDetails)
	{
		return ($this->SetAccessPermissionsRequestDetails = $_setAccessPermissionsRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetAccessPermissionsRequestType
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