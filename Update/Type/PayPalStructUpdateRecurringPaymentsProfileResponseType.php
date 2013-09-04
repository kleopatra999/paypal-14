<?php
/**
 * File for class PayPalStructUpdateRecurringPaymentsProfileResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateRecurringPaymentsProfileResponseType originally named UpdateRecurringPaymentsProfileResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateRecurringPaymentsProfileResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The UpdateRecurringPaymentsProfileResponseDetails
	 * @var PayPalStructUpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public $UpdateRecurringPaymentsProfileResponseDetails;
	/**
	 * Constructor method for UpdateRecurringPaymentsProfileResponseType
	 * @see parent::__construct()
	 * @param PayPalStructUpdateRecurringPaymentsProfileResponseDetailsType $_updateRecurringPaymentsProfileResponseDetails
	 * @return PayPalStructUpdateRecurringPaymentsProfileResponseType
	 */
	public function __construct($_updateRecurringPaymentsProfileResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('UpdateRecurringPaymentsProfileResponseDetails'=>$_updateRecurringPaymentsProfileResponseDetails));
	}
	/**
	 * Get UpdateRecurringPaymentsProfileResponseDetails value
	 * @return PayPalStructUpdateRecurringPaymentsProfileResponseDetailsType|null
	 */
	public function getUpdateRecurringPaymentsProfileResponseDetails()
	{
		return $this->UpdateRecurringPaymentsProfileResponseDetails;
	}
	/**
	 * Set UpdateRecurringPaymentsProfileResponseDetails value
	 * @param PayPalStructUpdateRecurringPaymentsProfileResponseDetailsType $_updateRecurringPaymentsProfileResponseDetails the UpdateRecurringPaymentsProfileResponseDetails
	 * @return PayPalStructUpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public function setUpdateRecurringPaymentsProfileResponseDetails($_updateRecurringPaymentsProfileResponseDetails)
	{
		return ($this->UpdateRecurringPaymentsProfileResponseDetails = $_updateRecurringPaymentsProfileResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateRecurringPaymentsProfileResponseType
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