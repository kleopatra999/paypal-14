<?php
/**
 * File for class PayPalStructBMManageButtonStatusReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMManageButtonStatusReq originally named BMManageButtonStatusReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMManageButtonStatusReq extends PayPalWsdlClass
{
	/**
	 * The BMManageButtonStatusRequest
	 * @var PayPalStructBMManageButtonStatusRequestType
	 */
	public $BMManageButtonStatusRequest;
	/**
	 * Constructor method for BMManageButtonStatusReq
	 * @see parent::__construct()
	 * @param PayPalStructBMManageButtonStatusRequestType $_bMManageButtonStatusRequest
	 * @return PayPalStructBMManageButtonStatusReq
	 */
	public function __construct($_bMManageButtonStatusRequest = NULL)
	{
		parent::__construct(array('BMManageButtonStatusRequest'=>$_bMManageButtonStatusRequest));
	}
	/**
	 * Get BMManageButtonStatusRequest value
	 * @return PayPalStructBMManageButtonStatusRequestType|null
	 */
	public function getBMManageButtonStatusRequest()
	{
		return $this->BMManageButtonStatusRequest;
	}
	/**
	 * Set BMManageButtonStatusRequest value
	 * @param PayPalStructBMManageButtonStatusRequestType $_bMManageButtonStatusRequest the BMManageButtonStatusRequest
	 * @return PayPalStructBMManageButtonStatusRequestType
	 */
	public function setBMManageButtonStatusRequest($_bMManageButtonStatusRequest)
	{
		return ($this->BMManageButtonStatusRequest = $_bMManageButtonStatusRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMManageButtonStatusReq
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