<?php
/**
 * File for class PayPalStructManagePendingTransactionStatusReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructManagePendingTransactionStatusReq originally named ManagePendingTransactionStatusReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructManagePendingTransactionStatusReq extends PayPalWsdlClass
{
	/**
	 * The ManagePendingTransactionStatusRequest
	 * @var PayPalStructManagePendingTransactionStatusRequestType
	 */
	public $ManagePendingTransactionStatusRequest;
	/**
	 * Constructor method for ManagePendingTransactionStatusReq
	 * @see parent::__construct()
	 * @param PayPalStructManagePendingTransactionStatusRequestType $_managePendingTransactionStatusRequest
	 * @return PayPalStructManagePendingTransactionStatusReq
	 */
	public function __construct($_managePendingTransactionStatusRequest = NULL)
	{
		parent::__construct(array('ManagePendingTransactionStatusRequest'=>$_managePendingTransactionStatusRequest));
	}
	/**
	 * Get ManagePendingTransactionStatusRequest value
	 * @return PayPalStructManagePendingTransactionStatusRequestType|null
	 */
	public function getManagePendingTransactionStatusRequest()
	{
		return $this->ManagePendingTransactionStatusRequest;
	}
	/**
	 * Set ManagePendingTransactionStatusRequest value
	 * @param PayPalStructManagePendingTransactionStatusRequestType $_managePendingTransactionStatusRequest the ManagePendingTransactionStatusRequest
	 * @return PayPalStructManagePendingTransactionStatusRequestType
	 */
	public function setManagePendingTransactionStatusRequest($_managePendingTransactionStatusRequest)
	{
		return ($this->ManagePendingTransactionStatusRequest = $_managePendingTransactionStatusRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructManagePendingTransactionStatusReq
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