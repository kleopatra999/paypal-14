<?php
/**
 * File for class PayPalStructCreateRecurringPaymentsProfileResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateRecurringPaymentsProfileResponseType originally named CreateRecurringPaymentsProfileResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateRecurringPaymentsProfileResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The CreateRecurringPaymentsProfileResponseDetails
	 * @var PayPalStructCreateRecurringPaymentsProfileResponseDetailsType
	 */
	public $CreateRecurringPaymentsProfileResponseDetails;
	/**
	 * Constructor method for CreateRecurringPaymentsProfileResponseType
	 * @see parent::__construct()
	 * @param PayPalStructCreateRecurringPaymentsProfileResponseDetailsType $_createRecurringPaymentsProfileResponseDetails
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseType
	 */
	public function __construct($_createRecurringPaymentsProfileResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('CreateRecurringPaymentsProfileResponseDetails'=>$_createRecurringPaymentsProfileResponseDetails));
	}
	/**
	 * Get CreateRecurringPaymentsProfileResponseDetails value
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseDetailsType|null
	 */
	public function getCreateRecurringPaymentsProfileResponseDetails()
	{
		return $this->CreateRecurringPaymentsProfileResponseDetails;
	}
	/**
	 * Set CreateRecurringPaymentsProfileResponseDetails value
	 * @param PayPalStructCreateRecurringPaymentsProfileResponseDetailsType $_createRecurringPaymentsProfileResponseDetails the CreateRecurringPaymentsProfileResponseDetails
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseDetailsType
	 */
	public function setCreateRecurringPaymentsProfileResponseDetails($_createRecurringPaymentsProfileResponseDetails)
	{
		return ($this->CreateRecurringPaymentsProfileResponseDetails = $_createRecurringPaymentsProfileResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseType
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