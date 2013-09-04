<?php
/**
 * File for class PayPalStructExternalRememberMeOwnerDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExternalRememberMeOwnerDetailsType originally named ExternalRememberMeOwnerDetailsType
 * Documentation : E-mail address or secure merchant account ID of merchant to associate with new external remember-me.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExternalRememberMeOwnerDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeOwnerIDType
	 * Meta informations extracted from the WSDL
	 * - documentation : A discriminant that tells SetEC what kind of data the ExternalRememberMeOwnerID parameter contains. Currently, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant account. Possible values are: None, ignore the ExternalRememberMeOwnerID. An empty value for this field also signifies None. Email, the owner ID is an email address SecureMerchantAccountID, the owner id is a string representing the secure merchant account ID
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalRememberMeOwnerIDType;
	/**
	 * The ExternalRememberMeOwnerID
	 * Meta informations extracted from the WSDL
	 * - documentation : When opting in to bypass login via remember me, this parameter specifies the merchant account associated with the remembered login. Currentl, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant account. If the Owner ID Type field is not present or "None", this parameter is ignored.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalRememberMeOwnerID;
	/**
	 * Constructor method for ExternalRememberMeOwnerDetailsType
	 * @see parent::__construct()
	 * @param string $_externalRememberMeOwnerIDType
	 * @param string $_externalRememberMeOwnerID
	 * @return PayPalStructExternalRememberMeOwnerDetailsType
	 */
	public function __construct($_externalRememberMeOwnerIDType = NULL,$_externalRememberMeOwnerID = NULL)
	{
		parent::__construct(array('ExternalRememberMeOwnerIDType'=>$_externalRememberMeOwnerIDType,'ExternalRememberMeOwnerID'=>$_externalRememberMeOwnerID));
	}
	/**
	 * Get ExternalRememberMeOwnerIDType value
	 * @return string|null
	 */
	public function getExternalRememberMeOwnerIDType()
	{
		return $this->ExternalRememberMeOwnerIDType;
	}
	/**
	 * Set ExternalRememberMeOwnerIDType value
	 * @param string $_externalRememberMeOwnerIDType the ExternalRememberMeOwnerIDType
	 * @return string
	 */
	public function setExternalRememberMeOwnerIDType($_externalRememberMeOwnerIDType)
	{
		return ($this->ExternalRememberMeOwnerIDType = $_externalRememberMeOwnerIDType);
	}
	/**
	 * Get ExternalRememberMeOwnerID value
	 * @return string|null
	 */
	public function getExternalRememberMeOwnerID()
	{
		return $this->ExternalRememberMeOwnerID;
	}
	/**
	 * Set ExternalRememberMeOwnerID value
	 * @param string $_externalRememberMeOwnerID the ExternalRememberMeOwnerID
	 * @return string
	 */
	public function setExternalRememberMeOwnerID($_externalRememberMeOwnerID)
	{
		return ($this->ExternalRememberMeOwnerID = $_externalRememberMeOwnerID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExternalRememberMeOwnerDetailsType
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