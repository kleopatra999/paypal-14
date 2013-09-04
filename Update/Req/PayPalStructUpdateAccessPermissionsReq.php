<?php
/**
 * File for class PayPalStructUpdateAccessPermissionsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateAccessPermissionsReq originally named UpdateAccessPermissionsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateAccessPermissionsReq extends PayPalWsdlClass
{
	/**
	 * The UpdateAccessPermissionsRequest
	 * @var PayPalStructUpdateAccessPermissionsRequestType
	 */
	public $UpdateAccessPermissionsRequest;
	/**
	 * Constructor method for UpdateAccessPermissionsReq
	 * @see parent::__construct()
	 * @param PayPalStructUpdateAccessPermissionsRequestType $_updateAccessPermissionsRequest
	 * @return PayPalStructUpdateAccessPermissionsReq
	 */
	public function __construct($_updateAccessPermissionsRequest = NULL)
	{
		parent::__construct(array('UpdateAccessPermissionsRequest'=>$_updateAccessPermissionsRequest));
	}
	/**
	 * Get UpdateAccessPermissionsRequest value
	 * @return PayPalStructUpdateAccessPermissionsRequestType|null
	 */
	public function getUpdateAccessPermissionsRequest()
	{
		return $this->UpdateAccessPermissionsRequest;
	}
	/**
	 * Set UpdateAccessPermissionsRequest value
	 * @param PayPalStructUpdateAccessPermissionsRequestType $_updateAccessPermissionsRequest the UpdateAccessPermissionsRequest
	 * @return PayPalStructUpdateAccessPermissionsRequestType
	 */
	public function setUpdateAccessPermissionsRequest($_updateAccessPermissionsRequest)
	{
		return ($this->UpdateAccessPermissionsRequest = $_updateAccessPermissionsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateAccessPermissionsReq
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