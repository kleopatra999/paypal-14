<?php
/**
 * File for class PayPalStructDeviceDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDeviceDetailsType originally named DeviceDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDeviceDetailsType extends PayPalWsdlClass
{
	/**
	 * The DeviceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Device ID Optional Character length and limits: 256 single-byte characters DeviceID length morethan 256 is truncated
	 * - minOccurs : 0
	 * @var string
	 */
	public $DeviceID;
	/**
	 * Constructor method for DeviceDetailsType
	 * @see parent::__construct()
	 * @param string $_deviceID
	 * @return PayPalStructDeviceDetailsType
	 */
	public function __construct($_deviceID = NULL)
	{
		parent::__construct(array('DeviceID'=>$_deviceID));
	}
	/**
	 * Get DeviceID value
	 * @return string|null
	 */
	public function getDeviceID()
	{
		return $this->DeviceID;
	}
	/**
	 * Set DeviceID value
	 * @param string $_deviceID the DeviceID
	 * @return string
	 */
	public function setDeviceID($_deviceID)
	{
		return ($this->DeviceID = $_deviceID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDeviceDetailsType
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