<?php
/**
 * File for class PayPalStructManageRecurringPaymentsProfileStatusResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructManageRecurringPaymentsProfileStatusResponseType originally named ManageRecurringPaymentsProfileStatusResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructManageRecurringPaymentsProfileStatusResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The ManageRecurringPaymentsProfileStatusResponseDetails
	 * @var PayPalStructManageRecurringPaymentsProfileStatusResponseDetailsType
	 */
	public $ManageRecurringPaymentsProfileStatusResponseDetails;
	/**
	 * Constructor method for ManageRecurringPaymentsProfileStatusResponseType
	 * @see parent::__construct()
	 * @param PayPalStructManageRecurringPaymentsProfileStatusResponseDetailsType $_manageRecurringPaymentsProfileStatusResponseDetails
	 * @return PayPalStructManageRecurringPaymentsProfileStatusResponseType
	 */
	public function __construct($_manageRecurringPaymentsProfileStatusResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ManageRecurringPaymentsProfileStatusResponseDetails'=>$_manageRecurringPaymentsProfileStatusResponseDetails));
	}
	/**
	 * Get ManageRecurringPaymentsProfileStatusResponseDetails value
	 * @return PayPalStructManageRecurringPaymentsProfileStatusResponseDetailsType|null
	 */
	public function getManageRecurringPaymentsProfileStatusResponseDetails()
	{
		return $this->ManageRecurringPaymentsProfileStatusResponseDetails;
	}
	/**
	 * Set ManageRecurringPaymentsProfileStatusResponseDetails value
	 * @param PayPalStructManageRecurringPaymentsProfileStatusResponseDetailsType $_manageRecurringPaymentsProfileStatusResponseDetails the ManageRecurringPaymentsProfileStatusResponseDetails
	 * @return PayPalStructManageRecurringPaymentsProfileStatusResponseDetailsType
	 */
	public function setManageRecurringPaymentsProfileStatusResponseDetails($_manageRecurringPaymentsProfileStatusResponseDetails)
	{
		return ($this->ManageRecurringPaymentsProfileStatusResponseDetails = $_manageRecurringPaymentsProfileStatusResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructManageRecurringPaymentsProfileStatusResponseType
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