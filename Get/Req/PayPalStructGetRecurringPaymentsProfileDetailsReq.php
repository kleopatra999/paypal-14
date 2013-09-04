<?php
/**
 * File for class PayPalStructGetRecurringPaymentsProfileDetailsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetRecurringPaymentsProfileDetailsReq originally named GetRecurringPaymentsProfileDetailsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetRecurringPaymentsProfileDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetRecurringPaymentsProfileDetailsRequest
	 * @var PayPalStructGetRecurringPaymentsProfileDetailsRequestType
	 */
	public $GetRecurringPaymentsProfileDetailsRequest;
	/**
	 * Constructor method for GetRecurringPaymentsProfileDetailsReq
	 * @see parent::__construct()
	 * @param PayPalStructGetRecurringPaymentsProfileDetailsRequestType $_getRecurringPaymentsProfileDetailsRequest
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsReq
	 */
	public function __construct($_getRecurringPaymentsProfileDetailsRequest = NULL)
	{
		parent::__construct(array('GetRecurringPaymentsProfileDetailsRequest'=>$_getRecurringPaymentsProfileDetailsRequest));
	}
	/**
	 * Get GetRecurringPaymentsProfileDetailsRequest value
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsRequestType|null
	 */
	public function getGetRecurringPaymentsProfileDetailsRequest()
	{
		return $this->GetRecurringPaymentsProfileDetailsRequest;
	}
	/**
	 * Set GetRecurringPaymentsProfileDetailsRequest value
	 * @param PayPalStructGetRecurringPaymentsProfileDetailsRequestType $_getRecurringPaymentsProfileDetailsRequest the GetRecurringPaymentsProfileDetailsRequest
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsRequestType
	 */
	public function setGetRecurringPaymentsProfileDetailsRequest($_getRecurringPaymentsProfileDetailsRequest)
	{
		return ($this->GetRecurringPaymentsProfileDetailsRequest = $_getRecurringPaymentsProfileDetailsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsReq
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