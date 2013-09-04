<?php
/**
 * File for class PayPalStructBMGetInventoryRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMGetInventoryRequestType originally named BMGetInventoryRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMGetInventoryRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - documentation : Hosted Button ID of the button to return inventory for. Required Character length and limitations: 10 single-byte numeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * Constructor method for BMGetInventoryRequestType
	 * @see parent::__construct()
	 * @param string $_hostedButtonID
	 * @return PayPalStructBMGetInventoryRequestType
	 */
	public function __construct($_hostedButtonID)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_hostedButtonID));
	}
	/**
	 * Get HostedButtonID value
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set HostedButtonID value
	 * @param string $_hostedButtonID the HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_hostedButtonID)
	{
		return ($this->HostedButtonID = $_hostedButtonID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMGetInventoryRequestType
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