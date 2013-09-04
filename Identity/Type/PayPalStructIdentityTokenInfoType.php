<?php
/**
 * File for class PayPalStructIdentityTokenInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIdentityTokenInfoType originally named IdentityTokenInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIdentityTokenInfoType extends PayPalWsdlClass
{
	/**
	 * The AccessToken
	 * Meta informations extracted from the WSDL
	 * - documentation : Identity Access token from merchant
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $AccessToken;
	/**
	 * Constructor method for IdentityTokenInfoType
	 * @see parent::__construct()
	 * @param string $_accessToken
	 * @return PayPalStructIdentityTokenInfoType
	 */
	public function __construct($_accessToken)
	{
		parent::__construct(array('AccessToken'=>$_accessToken));
	}
	/**
	 * Get AccessToken value
	 * @return string
	 */
	public function getAccessToken()
	{
		return $this->AccessToken;
	}
	/**
	 * Set AccessToken value
	 * @param string $_accessToken the AccessToken
	 * @return string
	 */
	public function setAccessToken($_accessToken)
	{
		return ($this->AccessToken = $_accessToken);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIdentityTokenInfoType
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