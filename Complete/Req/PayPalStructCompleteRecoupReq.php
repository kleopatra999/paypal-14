<?php
/**
 * File for class PayPalStructCompleteRecoupReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCompleteRecoupReq originally named CompleteRecoupReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCompleteRecoupReq extends PayPalWsdlClass
{
	/**
	 * The CompleteRecoupRequest
	 * @var PayPalStructCompleteRecoupRequestType
	 */
	public $CompleteRecoupRequest;
	/**
	 * Constructor method for CompleteRecoupReq
	 * @see parent::__construct()
	 * @param PayPalStructCompleteRecoupRequestType $_completeRecoupRequest
	 * @return PayPalStructCompleteRecoupReq
	 */
	public function __construct($_completeRecoupRequest = NULL)
	{
		parent::__construct(array('CompleteRecoupRequest'=>$_completeRecoupRequest));
	}
	/**
	 * Get CompleteRecoupRequest value
	 * @return PayPalStructCompleteRecoupRequestType|null
	 */
	public function getCompleteRecoupRequest()
	{
		return $this->CompleteRecoupRequest;
	}
	/**
	 * Set CompleteRecoupRequest value
	 * @param PayPalStructCompleteRecoupRequestType $_completeRecoupRequest the CompleteRecoupRequest
	 * @return PayPalStructCompleteRecoupRequestType
	 */
	public function setCompleteRecoupRequest($_completeRecoupRequest)
	{
		return ($this->CompleteRecoupRequest = $_completeRecoupRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCompleteRecoupReq
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