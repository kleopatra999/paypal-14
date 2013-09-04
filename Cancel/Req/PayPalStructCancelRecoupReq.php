<?php
/**
 * File for class PayPalStructCancelRecoupReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCancelRecoupReq originally named CancelRecoupReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCancelRecoupReq extends PayPalWsdlClass
{
	/**
	 * The CancelRecoupRequest
	 * @var PayPalStructCancelRecoupRequestType
	 */
	public $CancelRecoupRequest;
	/**
	 * Constructor method for CancelRecoupReq
	 * @see parent::__construct()
	 * @param PayPalStructCancelRecoupRequestType $_cancelRecoupRequest
	 * @return PayPalStructCancelRecoupReq
	 */
	public function __construct($_cancelRecoupRequest = NULL)
	{
		parent::__construct(array('CancelRecoupRequest'=>$_cancelRecoupRequest));
	}
	/**
	 * Get CancelRecoupRequest value
	 * @return PayPalStructCancelRecoupRequestType|null
	 */
	public function getCancelRecoupRequest()
	{
		return $this->CancelRecoupRequest;
	}
	/**
	 * Set CancelRecoupRequest value
	 * @param PayPalStructCancelRecoupRequestType $_cancelRecoupRequest the CancelRecoupRequest
	 * @return PayPalStructCancelRecoupRequestType
	 */
	public function setCancelRecoupRequest($_cancelRecoupRequest)
	{
		return ($this->CancelRecoupRequest = $_cancelRecoupRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCancelRecoupReq
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