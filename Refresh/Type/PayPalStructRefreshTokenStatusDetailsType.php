<?php
/**
 * File for class PayPalStructRefreshTokenStatusDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRefreshTokenStatusDetailsType originally named RefreshTokenStatusDetailsType
 * Documentation : Response information resulting from opt-in operation or current login bypass status.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRefreshTokenStatusDetailsType extends PayPalWsdlClass
{
	/**
	 * The RefreshTokenStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Required field that reports status of opt-in or login bypass attempt. 0 = Success, successful opt-in or RefreshToken corresponding to AccessToken specified in SetExpressCheckout is valid (user is still opted in). 1 = New RefreshToken was generated (user is still opted in). 2 = Invalid ID, RefreshToken corresponding to AccessToken specified in SetExpressCheckout is invalid (user is opted out). -2 = Internal Error, system error or outage during opt-in or login bypass. Can retry opt-in or login bypass next time. Flow will force full authentication and allow buyer to complete transaction. -1 = None, the field does not represent any valid value of the status.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var integer
	 */
	public $RefreshTokenStatus;
	/**
	 * The RefreshToken
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifier returned on external-remember-me-opt-in to allow the merchant to request bypass of PayPal login
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $RefreshToken;
	/**
	 * The ImmutableID
	 * Meta informations extracted from the WSDL
	 * - documentation : The immutable_id is the user's unique value per merchant that should never ever change for that account. This would be the key used to uniquely identify the user
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ImmutableID;
	/**
	 * Constructor method for RefreshTokenStatusDetailsType
	 * @see parent::__construct()
	 * @param integer $_refreshTokenStatus
	 * @param string $_refreshToken
	 * @param string $_immutableID
	 * @return PayPalStructRefreshTokenStatusDetailsType
	 */
	public function __construct($_refreshTokenStatus,$_refreshToken = NULL,$_immutableID = NULL)
	{
		parent::__construct(array('RefreshTokenStatus'=>$_refreshTokenStatus,'RefreshToken'=>$_refreshToken,'ImmutableID'=>$_immutableID));
	}
	/**
	 * Get RefreshTokenStatus value
	 * @return integer
	 */
	public function getRefreshTokenStatus()
	{
		return $this->RefreshTokenStatus;
	}
	/**
	 * Set RefreshTokenStatus value
	 * @param integer $_refreshTokenStatus the RefreshTokenStatus
	 * @return integer
	 */
	public function setRefreshTokenStatus($_refreshTokenStatus)
	{
		return ($this->RefreshTokenStatus = $_refreshTokenStatus);
	}
	/**
	 * Get RefreshToken value
	 * @return string|null
	 */
	public function getRefreshToken()
	{
		return $this->RefreshToken;
	}
	/**
	 * Set RefreshToken value
	 * @param string $_refreshToken the RefreshToken
	 * @return string
	 */
	public function setRefreshToken($_refreshToken)
	{
		return ($this->RefreshToken = $_refreshToken);
	}
	/**
	 * Get ImmutableID value
	 * @return string|null
	 */
	public function getImmutableID()
	{
		return $this->ImmutableID;
	}
	/**
	 * Set ImmutableID value
	 * @param string $_immutableID the ImmutableID
	 * @return string
	 */
	public function setImmutableID($_immutableID)
	{
		return ($this->ImmutableID = $_immutableID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRefreshTokenStatusDetailsType
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