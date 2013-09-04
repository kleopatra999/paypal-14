<?php
/**
 * File for class PayPalStructExternalRememberMeStatusDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExternalRememberMeStatusDetailsType originally named ExternalRememberMeStatusDetailsType
 * Documentation : Response information resulting from opt-in operation or current login bypass status.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExternalRememberMeStatusDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Required field that reports status of opt-in or login bypass attempt. 0 = Success - successful opt-in or ExternalRememberMeID specified in SetExpressCheckout is valid. 1 = Invalid ID - ExternalRememberMeID specified in SetExpressCheckout is invalid. 2 = Internal Error - System error or outage during opt-in or login bypass. Can retry opt-in or login bypass next time. Flow will force full authentication and allow buyer to complete transaction. -1 = None - the return value does not signify any valid remember me status.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var integer
	 */
	public $ExternalRememberMeStatus;
	/**
	 * The ExternalRememberMeID
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifier returned on external-remember-me-opt-in to allow the merchant to request bypass of PayPal login through external remember me on behalf of the buyer in future transactions. The ExternalRememberMeID is a 17-character alphanumeric (encrypted) string. This field has meaning only to the merchant.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalRememberMeID;
	/**
	 * Constructor method for ExternalRememberMeStatusDetailsType
	 * @see parent::__construct()
	 * @param integer $_externalRememberMeStatus
	 * @param string $_externalRememberMeID
	 * @return PayPalStructExternalRememberMeStatusDetailsType
	 */
	public function __construct($_externalRememberMeStatus,$_externalRememberMeID = NULL)
	{
		parent::__construct(array('ExternalRememberMeStatus'=>$_externalRememberMeStatus,'ExternalRememberMeID'=>$_externalRememberMeID));
	}
	/**
	 * Get ExternalRememberMeStatus value
	 * @return integer
	 */
	public function getExternalRememberMeStatus()
	{
		return $this->ExternalRememberMeStatus;
	}
	/**
	 * Set ExternalRememberMeStatus value
	 * @param integer $_externalRememberMeStatus the ExternalRememberMeStatus
	 * @return integer
	 */
	public function setExternalRememberMeStatus($_externalRememberMeStatus)
	{
		return ($this->ExternalRememberMeStatus = $_externalRememberMeStatus);
	}
	/**
	 * Get ExternalRememberMeID value
	 * @return string|null
	 */
	public function getExternalRememberMeID()
	{
		return $this->ExternalRememberMeID;
	}
	/**
	 * Set ExternalRememberMeID value
	 * @param string $_externalRememberMeID the ExternalRememberMeID
	 * @return string
	 */
	public function setExternalRememberMeID($_externalRememberMeID)
	{
		return ($this->ExternalRememberMeID = $_externalRememberMeID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExternalRememberMeStatusDetailsType
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