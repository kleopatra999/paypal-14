<?php
/**
 * File for class PayPalStructBillOutstandingAmountReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillOutstandingAmountReq originally named BillOutstandingAmountReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillOutstandingAmountReq extends PayPalWsdlClass
{
	/**
	 * The BillOutstandingAmountRequest
	 * @var PayPalStructBillOutstandingAmountRequestType
	 */
	public $BillOutstandingAmountRequest;
	/**
	 * Constructor method for BillOutstandingAmountReq
	 * @see parent::__construct()
	 * @param PayPalStructBillOutstandingAmountRequestType $_billOutstandingAmountRequest
	 * @return PayPalStructBillOutstandingAmountReq
	 */
	public function __construct($_billOutstandingAmountRequest = NULL)
	{
		parent::__construct(array('BillOutstandingAmountRequest'=>$_billOutstandingAmountRequest));
	}
	/**
	 * Get BillOutstandingAmountRequest value
	 * @return PayPalStructBillOutstandingAmountRequestType|null
	 */
	public function getBillOutstandingAmountRequest()
	{
		return $this->BillOutstandingAmountRequest;
	}
	/**
	 * Set BillOutstandingAmountRequest value
	 * @param PayPalStructBillOutstandingAmountRequestType $_billOutstandingAmountRequest the BillOutstandingAmountRequest
	 * @return PayPalStructBillOutstandingAmountRequestType
	 */
	public function setBillOutstandingAmountRequest($_billOutstandingAmountRequest)
	{
		return ($this->BillOutstandingAmountRequest = $_billOutstandingAmountRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillOutstandingAmountReq
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