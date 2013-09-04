<?php
/**
 * File for class PayPalStructDoCancelReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCancelReq originally named DoCancelReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCancelReq extends PayPalWsdlClass
{
	/**
	 * The DoCancelRequest
	 * @var PayPalStructDoCancelRequestType
	 */
	public $DoCancelRequest;
	/**
	 * Constructor method for DoCancelReq
	 * @see parent::__construct()
	 * @param PayPalStructDoCancelRequestType $_doCancelRequest
	 * @return PayPalStructDoCancelReq
	 */
	public function __construct($_doCancelRequest = NULL)
	{
		parent::__construct(array('DoCancelRequest'=>$_doCancelRequest));
	}
	/**
	 * Get DoCancelRequest value
	 * @return PayPalStructDoCancelRequestType|null
	 */
	public function getDoCancelRequest()
	{
		return $this->DoCancelRequest;
	}
	/**
	 * Set DoCancelRequest value
	 * @param PayPalStructDoCancelRequestType $_doCancelRequest the DoCancelRequest
	 * @return PayPalStructDoCancelRequestType
	 */
	public function setDoCancelRequest($_doCancelRequest)
	{
		return ($this->DoCancelRequest = $_doCancelRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoCancelReq
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