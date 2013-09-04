<?php
/**
 * File for class PayPalStructBMManageButtonStatusRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMManageButtonStatusRequestType originally named BMManageButtonStatusRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMManageButtonStatusRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - documentation : Button ID of Hosted button. Required Character length and limitations: 10 single-byte numeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Requested Status change for hosted button. Required Character length and limitations: 1 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumButtonStatusType
	 */
	public $ButtonStatus;
	/**
	 * Constructor method for BMManageButtonStatusRequestType
	 * @see parent::__construct()
	 * @param string $_hostedButtonID
	 * @param PayPalEnumButtonStatusType $_buttonStatus
	 * @return PayPalStructBMManageButtonStatusRequestType
	 */
	public function __construct($_hostedButtonID = NULL,$_buttonStatus = NULL)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_hostedButtonID,'ButtonStatus'=>$_buttonStatus));
	}
	/**
	 * Get HostedButtonID value
	 * @return string|null
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
	 * Get ButtonStatus value
	 * @return PayPalEnumButtonStatusType|null
	 */
	public function getButtonStatus()
	{
		return $this->ButtonStatus;
	}
	/**
	 * Set ButtonStatus value
	 * @uses PayPalEnumButtonStatusType::valueIsValid()
	 * @param PayPalEnumButtonStatusType $_buttonStatus the ButtonStatus
	 * @return PayPalEnumButtonStatusType
	 */
	public function setButtonStatus($_buttonStatus)
	{
		if(!PayPalEnumButtonStatusType::valueIsValid($_buttonStatus))
		{
			return false;
		}
		return ($this->ButtonStatus = $_buttonStatus);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMManageButtonStatusRequestType
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