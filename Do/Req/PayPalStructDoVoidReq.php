<?php
/**
 * File for class PayPalStructDoVoidReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoVoidReq originally named DoVoidReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoVoidReq extends PayPalWsdlClass
{
	/**
	 * The DoVoidRequest
	 * @var PayPalStructDoVoidRequestType
	 */
	public $DoVoidRequest;
	/**
	 * Constructor method for DoVoidReq
	 * @see parent::__construct()
	 * @param PayPalStructDoVoidRequestType $_doVoidRequest
	 * @return PayPalStructDoVoidReq
	 */
	public function __construct($_doVoidRequest = NULL)
	{
		parent::__construct(array('DoVoidRequest'=>$_doVoidRequest));
	}
	/**
	 * Get DoVoidRequest value
	 * @return PayPalStructDoVoidRequestType|null
	 */
	public function getDoVoidRequest()
	{
		return $this->DoVoidRequest;
	}
	/**
	 * Set DoVoidRequest value
	 * @param PayPalStructDoVoidRequestType $_doVoidRequest the DoVoidRequest
	 * @return PayPalStructDoVoidRequestType
	 */
	public function setDoVoidRequest($_doVoidRequest)
	{
		return ($this->DoVoidRequest = $_doVoidRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoVoidReq
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