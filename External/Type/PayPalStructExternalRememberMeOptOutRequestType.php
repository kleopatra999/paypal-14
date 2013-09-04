<?php
/**
 * File for class PayPalStructExternalRememberMeOptOutRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExternalRememberMeOptOutRequestType originally named ExternalRememberMeOptOutRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExternalRememberMeOptOutRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ExternalRememberMeID
	 * Meta informations extracted from the WSDL
	 * - documentation : The merchant passes in the ExternalRememberMeID to identify the user to opt out. This is a 17-character alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has meaning only to the merchant. Required
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ExternalRememberMeID;
	/**
	 * The ExternalRememberMeOwnerDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : E-mail address or secure merchant account ID of merchant to associate with external remember-me.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructExternalRememberMeOwnerDetailsType
	 */
	public $ExternalRememberMeOwnerDetails;
	/**
	 * Constructor method for ExternalRememberMeOptOutRequestType
	 * @see parent::__construct()
	 * @param string $_externalRememberMeID
	 * @param PayPalStructExternalRememberMeOwnerDetailsType $_externalRememberMeOwnerDetails
	 * @return PayPalStructExternalRememberMeOptOutRequestType
	 */
	public function __construct($_externalRememberMeID,$_externalRememberMeOwnerDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ExternalRememberMeID'=>$_externalRememberMeID,'ExternalRememberMeOwnerDetails'=>$_externalRememberMeOwnerDetails));
	}
	/**
	 * Get ExternalRememberMeID value
	 * @return string
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
	 * Get ExternalRememberMeOwnerDetails value
	 * @return PayPalStructExternalRememberMeOwnerDetailsType|null
	 */
	public function getExternalRememberMeOwnerDetails()
	{
		return $this->ExternalRememberMeOwnerDetails;
	}
	/**
	 * Set ExternalRememberMeOwnerDetails value
	 * @param PayPalStructExternalRememberMeOwnerDetailsType $_externalRememberMeOwnerDetails the ExternalRememberMeOwnerDetails
	 * @return PayPalStructExternalRememberMeOwnerDetailsType
	 */
	public function setExternalRememberMeOwnerDetails($_externalRememberMeOwnerDetails)
	{
		return ($this->ExternalRememberMeOwnerDetails = $_externalRememberMeOwnerDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExternalRememberMeOptOutRequestType
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