<?php
/**
 * File for class PayPalStructMassPayReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMassPayReq originally named MassPayReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMassPayReq extends PayPalWsdlClass
{
	/**
	 * The MassPayRequest
	 * @var PayPalStructMassPayRequestType
	 */
	public $MassPayRequest;
	/**
	 * Constructor method for MassPayReq
	 * @see parent::__construct()
	 * @param PayPalStructMassPayRequestType $_massPayRequest
	 * @return PayPalStructMassPayReq
	 */
	public function __construct($_massPayRequest = NULL)
	{
		parent::__construct(array('MassPayRequest'=>$_massPayRequest));
	}
	/**
	 * Get MassPayRequest value
	 * @return PayPalStructMassPayRequestType|null
	 */
	public function getMassPayRequest()
	{
		return $this->MassPayRequest;
	}
	/**
	 * Set MassPayRequest value
	 * @param PayPalStructMassPayRequestType $_massPayRequest the MassPayRequest
	 * @return PayPalStructMassPayRequestType
	 */
	public function setMassPayRequest($_massPayRequest)
	{
		return ($this->MassPayRequest = $_massPayRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMassPayReq
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