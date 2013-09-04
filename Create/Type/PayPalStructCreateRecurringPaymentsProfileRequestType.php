<?php
/**
 * File for class PayPalStructCreateRecurringPaymentsProfileRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateRecurringPaymentsProfileRequestType originally named CreateRecurringPaymentsProfileRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateRecurringPaymentsProfileRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The CreateRecurringPaymentsProfileRequestDetails
	 * @var PayPalStructCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public $CreateRecurringPaymentsProfileRequestDetails;
	/**
	 * Constructor method for CreateRecurringPaymentsProfileRequestType
	 * @see parent::__construct()
	 * @param PayPalStructCreateRecurringPaymentsProfileRequestDetailsType $_createRecurringPaymentsProfileRequestDetails
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestType
	 */
	public function __construct($_createRecurringPaymentsProfileRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('CreateRecurringPaymentsProfileRequestDetails'=>$_createRecurringPaymentsProfileRequestDetails));
	}
	/**
	 * Get CreateRecurringPaymentsProfileRequestDetails value
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestDetailsType|null
	 */
	public function getCreateRecurringPaymentsProfileRequestDetails()
	{
		return $this->CreateRecurringPaymentsProfileRequestDetails;
	}
	/**
	 * Set CreateRecurringPaymentsProfileRequestDetails value
	 * @param PayPalStructCreateRecurringPaymentsProfileRequestDetailsType $_createRecurringPaymentsProfileRequestDetails the CreateRecurringPaymentsProfileRequestDetails
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public function setCreateRecurringPaymentsProfileRequestDetails($_createRecurringPaymentsProfileRequestDetails)
	{
		return ($this->CreateRecurringPaymentsProfileRequestDetails = $_createRecurringPaymentsProfileRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestType
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