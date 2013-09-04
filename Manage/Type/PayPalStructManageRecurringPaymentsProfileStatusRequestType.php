<?php
/**
 * File for class PayPalStructManageRecurringPaymentsProfileStatusRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructManageRecurringPaymentsProfileStatusRequestType originally named ManageRecurringPaymentsProfileStatusRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructManageRecurringPaymentsProfileStatusRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ManageRecurringPaymentsProfileStatusRequestDetails
	 * @var PayPalStructManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public $ManageRecurringPaymentsProfileStatusRequestDetails;
	/**
	 * Constructor method for ManageRecurringPaymentsProfileStatusRequestType
	 * @see parent::__construct()
	 * @param PayPalStructManageRecurringPaymentsProfileStatusRequestDetailsType $_manageRecurringPaymentsProfileStatusRequestDetails
	 * @return PayPalStructManageRecurringPaymentsProfileStatusRequestType
	 */
	public function __construct($_manageRecurringPaymentsProfileStatusRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ManageRecurringPaymentsProfileStatusRequestDetails'=>$_manageRecurringPaymentsProfileStatusRequestDetails));
	}
	/**
	 * Get ManageRecurringPaymentsProfileStatusRequestDetails value
	 * @return PayPalStructManageRecurringPaymentsProfileStatusRequestDetailsType|null
	 */
	public function getManageRecurringPaymentsProfileStatusRequestDetails()
	{
		return $this->ManageRecurringPaymentsProfileStatusRequestDetails;
	}
	/**
	 * Set ManageRecurringPaymentsProfileStatusRequestDetails value
	 * @param PayPalStructManageRecurringPaymentsProfileStatusRequestDetailsType $_manageRecurringPaymentsProfileStatusRequestDetails the ManageRecurringPaymentsProfileStatusRequestDetails
	 * @return PayPalStructManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public function setManageRecurringPaymentsProfileStatusRequestDetails($_manageRecurringPaymentsProfileStatusRequestDetails)
	{
		return ($this->ManageRecurringPaymentsProfileStatusRequestDetails = $_manageRecurringPaymentsProfileStatusRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructManageRecurringPaymentsProfileStatusRequestType
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