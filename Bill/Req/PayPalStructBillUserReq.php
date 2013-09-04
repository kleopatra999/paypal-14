<?php
/**
 * File for class PayPalStructBillUserReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillUserReq originally named BillUserReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillUserReq extends PayPalWsdlClass
{
	/**
	 * The BillUserRequest
	 * @var PayPalStructBillUserRequestType
	 */
	public $BillUserRequest;
	/**
	 * Constructor method for BillUserReq
	 * @see parent::__construct()
	 * @param PayPalStructBillUserRequestType $_billUserRequest
	 * @return PayPalStructBillUserReq
	 */
	public function __construct($_billUserRequest = NULL)
	{
		parent::__construct(array('BillUserRequest'=>$_billUserRequest));
	}
	/**
	 * Get BillUserRequest value
	 * @return PayPalStructBillUserRequestType|null
	 */
	public function getBillUserRequest()
	{
		return $this->BillUserRequest;
	}
	/**
	 * Set BillUserRequest value
	 * @param PayPalStructBillUserRequestType $_billUserRequest the BillUserRequest
	 * @return PayPalStructBillUserRequestType
	 */
	public function setBillUserRequest($_billUserRequest)
	{
		return ($this->BillUserRequest = $_billUserRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillUserReq
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