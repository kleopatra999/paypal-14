<?php
/**
 * File for class PayPalStructSenderDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSenderDetailsType originally named SenderDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSenderDetailsType extends PayPalWsdlClass
{
	/**
	 * The DeviceDetails
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructDeviceDetailsType
	 */
	public $DeviceDetails;
	/**
	 * Constructor method for SenderDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructDeviceDetailsType $_deviceDetails
	 * @return PayPalStructSenderDetailsType
	 */
	public function __construct($_deviceDetails = NULL)
	{
		parent::__construct(array('DeviceDetails'=>$_deviceDetails));
	}
	/**
	 * Get DeviceDetails value
	 * @return PayPalStructDeviceDetailsType|null
	 */
	public function getDeviceDetails()
	{
		return $this->DeviceDetails;
	}
	/**
	 * Set DeviceDetails value
	 * @param PayPalStructDeviceDetailsType $_deviceDetails the DeviceDetails
	 * @return PayPalStructDeviceDetailsType
	 */
	public function setDeviceDetails($_deviceDetails)
	{
		return ($this->DeviceDetails = $_deviceDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSenderDetailsType
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