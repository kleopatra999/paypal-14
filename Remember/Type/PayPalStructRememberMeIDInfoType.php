<?php
/**
 * File for class PayPalStructRememberMeIDInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRememberMeIDInfoType originally named RememberMeIDInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRememberMeIDInfoType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeID
	 * Meta informations extracted from the WSDL
	 * - documentation : External remember-me ID returned by GetExpressCheckoutDetails on successful opt-in. The ExternalRememberMeID is a 17-character alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has meaning only to the merchant. If present, requests that the web flow attempt bypass of login.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalRememberMeID;
	/**
	 * Constructor method for RememberMeIDInfoType
	 * @see parent::__construct()
	 * @param string $_externalRememberMeID
	 * @return PayPalStructRememberMeIDInfoType
	 */
	public function __construct($_externalRememberMeID = NULL)
	{
		parent::__construct(array('ExternalRememberMeID'=>$_externalRememberMeID));
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
	 * @return PayPalStructRememberMeIDInfoType
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