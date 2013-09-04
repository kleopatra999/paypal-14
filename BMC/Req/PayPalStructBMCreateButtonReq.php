<?php
/**
 * File for class PayPalStructBMCreateButtonReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMCreateButtonReq originally named BMCreateButtonReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMCreateButtonReq extends PayPalWsdlClass
{
	/**
	 * The BMCreateButtonRequest
	 * @var PayPalStructBMCreateButtonRequestType
	 */
	public $BMCreateButtonRequest;
	/**
	 * Constructor method for BMCreateButtonReq
	 * @see parent::__construct()
	 * @param PayPalStructBMCreateButtonRequestType $_bMCreateButtonRequest
	 * @return PayPalStructBMCreateButtonReq
	 */
	public function __construct($_bMCreateButtonRequest = NULL)
	{
		parent::__construct(array('BMCreateButtonRequest'=>$_bMCreateButtonRequest));
	}
	/**
	 * Get BMCreateButtonRequest value
	 * @return PayPalStructBMCreateButtonRequestType|null
	 */
	public function getBMCreateButtonRequest()
	{
		return $this->BMCreateButtonRequest;
	}
	/**
	 * Set BMCreateButtonRequest value
	 * @param PayPalStructBMCreateButtonRequestType $_bMCreateButtonRequest the BMCreateButtonRequest
	 * @return PayPalStructBMCreateButtonRequestType
	 */
	public function setBMCreateButtonRequest($_bMCreateButtonRequest)
	{
		return ($this->BMCreateButtonRequest = $_bMCreateButtonRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMCreateButtonReq
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