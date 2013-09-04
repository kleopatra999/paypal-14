<?php
/**
 * File for class PayPalStructBMSetInventoryReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMSetInventoryReq originally named BMSetInventoryReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMSetInventoryReq extends PayPalWsdlClass
{
	/**
	 * The BMSetInventoryRequest
	 * @var PayPalStructBMSetInventoryRequestType
	 */
	public $BMSetInventoryRequest;
	/**
	 * Constructor method for BMSetInventoryReq
	 * @see parent::__construct()
	 * @param PayPalStructBMSetInventoryRequestType $_bMSetInventoryRequest
	 * @return PayPalStructBMSetInventoryReq
	 */
	public function __construct($_bMSetInventoryRequest = NULL)
	{
		parent::__construct(array('BMSetInventoryRequest'=>$_bMSetInventoryRequest));
	}
	/**
	 * Get BMSetInventoryRequest value
	 * @return PayPalStructBMSetInventoryRequestType|null
	 */
	public function getBMSetInventoryRequest()
	{
		return $this->BMSetInventoryRequest;
	}
	/**
	 * Set BMSetInventoryRequest value
	 * @param PayPalStructBMSetInventoryRequestType $_bMSetInventoryRequest the BMSetInventoryRequest
	 * @return PayPalStructBMSetInventoryRequestType
	 */
	public function setBMSetInventoryRequest($_bMSetInventoryRequest)
	{
		return ($this->BMSetInventoryRequest = $_bMSetInventoryRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMSetInventoryReq
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