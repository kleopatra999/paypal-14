<?php
/**
 * File for class PayPalStructUpdateRecurringPaymentsProfileReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateRecurringPaymentsProfileReq originally named UpdateRecurringPaymentsProfileReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateRecurringPaymentsProfileReq extends PayPalWsdlClass
{
	/**
	 * The UpdateRecurringPaymentsProfileRequest
	 * @var PayPalStructUpdateRecurringPaymentsProfileRequestType
	 */
	public $UpdateRecurringPaymentsProfileRequest;
	/**
	 * Constructor method for UpdateRecurringPaymentsProfileReq
	 * @see parent::__construct()
	 * @param PayPalStructUpdateRecurringPaymentsProfileRequestType $_updateRecurringPaymentsProfileRequest
	 * @return PayPalStructUpdateRecurringPaymentsProfileReq
	 */
	public function __construct($_updateRecurringPaymentsProfileRequest = NULL)
	{
		parent::__construct(array('UpdateRecurringPaymentsProfileRequest'=>$_updateRecurringPaymentsProfileRequest));
	}
	/**
	 * Get UpdateRecurringPaymentsProfileRequest value
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestType|null
	 */
	public function getUpdateRecurringPaymentsProfileRequest()
	{
		return $this->UpdateRecurringPaymentsProfileRequest;
	}
	/**
	 * Set UpdateRecurringPaymentsProfileRequest value
	 * @param PayPalStructUpdateRecurringPaymentsProfileRequestType $_updateRecurringPaymentsProfileRequest the UpdateRecurringPaymentsProfileRequest
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestType
	 */
	public function setUpdateRecurringPaymentsProfileRequest($_updateRecurringPaymentsProfileRequest)
	{
		return ($this->UpdateRecurringPaymentsProfileRequest = $_updateRecurringPaymentsProfileRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateRecurringPaymentsProfileReq
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