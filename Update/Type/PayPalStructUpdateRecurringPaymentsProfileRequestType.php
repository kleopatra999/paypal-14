<?php
/**
 * File for class PayPalStructUpdateRecurringPaymentsProfileRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateRecurringPaymentsProfileRequestType originally named UpdateRecurringPaymentsProfileRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateRecurringPaymentsProfileRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The UpdateRecurringPaymentsProfileRequestDetails
	 * @var PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public $UpdateRecurringPaymentsProfileRequestDetails;
	/**
	 * Constructor method for UpdateRecurringPaymentsProfileRequestType
	 * @see parent::__construct()
	 * @param PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType $_updateRecurringPaymentsProfileRequestDetails
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestType
	 */
	public function __construct($_updateRecurringPaymentsProfileRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('UpdateRecurringPaymentsProfileRequestDetails'=>$_updateRecurringPaymentsProfileRequestDetails));
	}
	/**
	 * Get UpdateRecurringPaymentsProfileRequestDetails value
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType|null
	 */
	public function getUpdateRecurringPaymentsProfileRequestDetails()
	{
		return $this->UpdateRecurringPaymentsProfileRequestDetails;
	}
	/**
	 * Set UpdateRecurringPaymentsProfileRequestDetails value
	 * @param PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType $_updateRecurringPaymentsProfileRequestDetails the UpdateRecurringPaymentsProfileRequestDetails
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public function setUpdateRecurringPaymentsProfileRequestDetails($_updateRecurringPaymentsProfileRequestDetails)
	{
		return ($this->UpdateRecurringPaymentsProfileRequestDetails = $_updateRecurringPaymentsProfileRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestType
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