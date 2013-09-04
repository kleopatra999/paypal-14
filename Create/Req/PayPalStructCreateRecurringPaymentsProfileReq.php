<?php
/**
 * File for class PayPalStructCreateRecurringPaymentsProfileReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateRecurringPaymentsProfileReq originally named CreateRecurringPaymentsProfileReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateRecurringPaymentsProfileReq extends PayPalWsdlClass
{
	/**
	 * The CreateRecurringPaymentsProfileRequest
	 * @var PayPalStructCreateRecurringPaymentsProfileRequestType
	 */
	public $CreateRecurringPaymentsProfileRequest;
	/**
	 * Constructor method for CreateRecurringPaymentsProfileReq
	 * @see parent::__construct()
	 * @param PayPalStructCreateRecurringPaymentsProfileRequestType $_createRecurringPaymentsProfileRequest
	 * @return PayPalStructCreateRecurringPaymentsProfileReq
	 */
	public function __construct($_createRecurringPaymentsProfileRequest = NULL)
	{
		parent::__construct(array('CreateRecurringPaymentsProfileRequest'=>$_createRecurringPaymentsProfileRequest));
	}
	/**
	 * Get CreateRecurringPaymentsProfileRequest value
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestType|null
	 */
	public function getCreateRecurringPaymentsProfileRequest()
	{
		return $this->CreateRecurringPaymentsProfileRequest;
	}
	/**
	 * Set CreateRecurringPaymentsProfileRequest value
	 * @param PayPalStructCreateRecurringPaymentsProfileRequestType $_createRecurringPaymentsProfileRequest the CreateRecurringPaymentsProfileRequest
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestType
	 */
	public function setCreateRecurringPaymentsProfileRequest($_createRecurringPaymentsProfileRequest)
	{
		return ($this->CreateRecurringPaymentsProfileRequest = $_createRecurringPaymentsProfileRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateRecurringPaymentsProfileReq
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