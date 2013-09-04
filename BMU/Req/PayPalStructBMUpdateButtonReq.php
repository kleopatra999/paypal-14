<?php
/**
 * File for class PayPalStructBMUpdateButtonReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMUpdateButtonReq originally named BMUpdateButtonReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMUpdateButtonReq extends PayPalWsdlClass
{
	/**
	 * The BMUpdateButtonRequest
	 * @var PayPalStructBMUpdateButtonRequestType
	 */
	public $BMUpdateButtonRequest;
	/**
	 * Constructor method for BMUpdateButtonReq
	 * @see parent::__construct()
	 * @param PayPalStructBMUpdateButtonRequestType $_bMUpdateButtonRequest
	 * @return PayPalStructBMUpdateButtonReq
	 */
	public function __construct($_bMUpdateButtonRequest = NULL)
	{
		parent::__construct(array('BMUpdateButtonRequest'=>$_bMUpdateButtonRequest));
	}
	/**
	 * Get BMUpdateButtonRequest value
	 * @return PayPalStructBMUpdateButtonRequestType|null
	 */
	public function getBMUpdateButtonRequest()
	{
		return $this->BMUpdateButtonRequest;
	}
	/**
	 * Set BMUpdateButtonRequest value
	 * @param PayPalStructBMUpdateButtonRequestType $_bMUpdateButtonRequest the BMUpdateButtonRequest
	 * @return PayPalStructBMUpdateButtonRequestType
	 */
	public function setBMUpdateButtonRequest($_bMUpdateButtonRequest)
	{
		return ($this->BMUpdateButtonRequest = $_bMUpdateButtonRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMUpdateButtonReq
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