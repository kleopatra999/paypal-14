<?php
/**
 * File for class PayPalStructSetAccessPermissionsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetAccessPermissionsReq originally named SetAccessPermissionsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetAccessPermissionsReq extends PayPalWsdlClass
{
	/**
	 * The SetAccessPermissionsRequest
	 * @var PayPalStructSetAccessPermissionsRequestType
	 */
	public $SetAccessPermissionsRequest;
	/**
	 * Constructor method for SetAccessPermissionsReq
	 * @see parent::__construct()
	 * @param PayPalStructSetAccessPermissionsRequestType $_setAccessPermissionsRequest
	 * @return PayPalStructSetAccessPermissionsReq
	 */
	public function __construct($_setAccessPermissionsRequest = NULL)
	{
		parent::__construct(array('SetAccessPermissionsRequest'=>$_setAccessPermissionsRequest));
	}
	/**
	 * Get SetAccessPermissionsRequest value
	 * @return PayPalStructSetAccessPermissionsRequestType|null
	 */
	public function getSetAccessPermissionsRequest()
	{
		return $this->SetAccessPermissionsRequest;
	}
	/**
	 * Set SetAccessPermissionsRequest value
	 * @param PayPalStructSetAccessPermissionsRequestType $_setAccessPermissionsRequest the SetAccessPermissionsRequest
	 * @return PayPalStructSetAccessPermissionsRequestType
	 */
	public function setSetAccessPermissionsRequest($_setAccessPermissionsRequest)
	{
		return ($this->SetAccessPermissionsRequest = $_setAccessPermissionsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetAccessPermissionsReq
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