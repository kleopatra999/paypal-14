<?php
/**
 * File for class PayPalStructBMGetInventoryReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMGetInventoryReq originally named BMGetInventoryReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMGetInventoryReq extends PayPalWsdlClass
{
	/**
	 * The BMGetInventoryRequest
	 * @var PayPalStructBMGetInventoryRequestType
	 */
	public $BMGetInventoryRequest;
	/**
	 * Constructor method for BMGetInventoryReq
	 * @see parent::__construct()
	 * @param PayPalStructBMGetInventoryRequestType $_bMGetInventoryRequest
	 * @return PayPalStructBMGetInventoryReq
	 */
	public function __construct($_bMGetInventoryRequest = NULL)
	{
		parent::__construct(array('BMGetInventoryRequest'=>$_bMGetInventoryRequest));
	}
	/**
	 * Get BMGetInventoryRequest value
	 * @return PayPalStructBMGetInventoryRequestType|null
	 */
	public function getBMGetInventoryRequest()
	{
		return $this->BMGetInventoryRequest;
	}
	/**
	 * Set BMGetInventoryRequest value
	 * @param PayPalStructBMGetInventoryRequestType $_bMGetInventoryRequest the BMGetInventoryRequest
	 * @return PayPalStructBMGetInventoryRequestType
	 */
	public function setBMGetInventoryRequest($_bMGetInventoryRequest)
	{
		return ($this->BMGetInventoryRequest = $_bMGetInventoryRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMGetInventoryReq
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