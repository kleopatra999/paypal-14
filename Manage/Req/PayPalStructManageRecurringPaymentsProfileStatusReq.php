<?php
/**
 * File for class PayPalStructManageRecurringPaymentsProfileStatusReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructManageRecurringPaymentsProfileStatusReq originally named ManageRecurringPaymentsProfileStatusReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructManageRecurringPaymentsProfileStatusReq extends PayPalWsdlClass
{
	/**
	 * The ManageRecurringPaymentsProfileStatusRequest
	 * @var PayPalStructManageRecurringPaymentsProfileStatusRequestType
	 */
	public $ManageRecurringPaymentsProfileStatusRequest;
	/**
	 * Constructor method for ManageRecurringPaymentsProfileStatusReq
	 * @see parent::__construct()
	 * @param PayPalStructManageRecurringPaymentsProfileStatusRequestType $_manageRecurringPaymentsProfileStatusRequest
	 * @return PayPalStructManageRecurringPaymentsProfileStatusReq
	 */
	public function __construct($_manageRecurringPaymentsProfileStatusRequest = NULL)
	{
		parent::__construct(array('ManageRecurringPaymentsProfileStatusRequest'=>$_manageRecurringPaymentsProfileStatusRequest));
	}
	/**
	 * Get ManageRecurringPaymentsProfileStatusRequest value
	 * @return PayPalStructManageRecurringPaymentsProfileStatusRequestType|null
	 */
	public function getManageRecurringPaymentsProfileStatusRequest()
	{
		return $this->ManageRecurringPaymentsProfileStatusRequest;
	}
	/**
	 * Set ManageRecurringPaymentsProfileStatusRequest value
	 * @param PayPalStructManageRecurringPaymentsProfileStatusRequestType $_manageRecurringPaymentsProfileStatusRequest the ManageRecurringPaymentsProfileStatusRequest
	 * @return PayPalStructManageRecurringPaymentsProfileStatusRequestType
	 */
	public function setManageRecurringPaymentsProfileStatusRequest($_manageRecurringPaymentsProfileStatusRequest)
	{
		return ($this->ManageRecurringPaymentsProfileStatusRequest = $_manageRecurringPaymentsProfileStatusRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructManageRecurringPaymentsProfileStatusReq
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