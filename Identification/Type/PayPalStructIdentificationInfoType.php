<?php
/**
 * File for class PayPalStructIdentificationInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIdentificationInfoType originally named IdentificationInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIdentificationInfoType extends PayPalWsdlClass
{
	/**
	 * The MobileIDInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Mobile specific buyer identification.
	 * - minOccurs : 0
	 * @var PayPalStructMobileIDInfoType
	 */
	public $MobileIDInfo;
	/**
	 * The RememberMeIDInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains login bypass information.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructRememberMeIDInfoType
	 */
	public $RememberMeIDInfo;
	/**
	 * The IdentityTokenInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Identity Access Token.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructIdentityTokenInfoType
	 */
	public $IdentityTokenInfo;
	/**
	 * Constructor method for IdentificationInfoType
	 * @see parent::__construct()
	 * @param PayPalStructMobileIDInfoType $_mobileIDInfo
	 * @param PayPalStructRememberMeIDInfoType $_rememberMeIDInfo
	 * @param PayPalStructIdentityTokenInfoType $_identityTokenInfo
	 * @return PayPalStructIdentificationInfoType
	 */
	public function __construct($_mobileIDInfo = NULL,$_rememberMeIDInfo = NULL,$_identityTokenInfo = NULL)
	{
		parent::__construct(array('MobileIDInfo'=>$_mobileIDInfo,'RememberMeIDInfo'=>$_rememberMeIDInfo,'IdentityTokenInfo'=>$_identityTokenInfo));
	}
	/**
	 * Get MobileIDInfo value
	 * @return PayPalStructMobileIDInfoType|null
	 */
	public function getMobileIDInfo()
	{
		return $this->MobileIDInfo;
	}
	/**
	 * Set MobileIDInfo value
	 * @param PayPalStructMobileIDInfoType $_mobileIDInfo the MobileIDInfo
	 * @return PayPalStructMobileIDInfoType
	 */
	public function setMobileIDInfo($_mobileIDInfo)
	{
		return ($this->MobileIDInfo = $_mobileIDInfo);
	}
	/**
	 * Get RememberMeIDInfo value
	 * @return PayPalStructRememberMeIDInfoType|null
	 */
	public function getRememberMeIDInfo()
	{
		return $this->RememberMeIDInfo;
	}
	/**
	 * Set RememberMeIDInfo value
	 * @param PayPalStructRememberMeIDInfoType $_rememberMeIDInfo the RememberMeIDInfo
	 * @return PayPalStructRememberMeIDInfoType
	 */
	public function setRememberMeIDInfo($_rememberMeIDInfo)
	{
		return ($this->RememberMeIDInfo = $_rememberMeIDInfo);
	}
	/**
	 * Get IdentityTokenInfo value
	 * @return PayPalStructIdentityTokenInfoType|null
	 */
	public function getIdentityTokenInfo()
	{
		return $this->IdentityTokenInfo;
	}
	/**
	 * Set IdentityTokenInfo value
	 * @param PayPalStructIdentityTokenInfoType $_identityTokenInfo the IdentityTokenInfo
	 * @return PayPalStructIdentityTokenInfoType
	 */
	public function setIdentityTokenInfo($_identityTokenInfo)
	{
		return ($this->IdentityTokenInfo = $_identityTokenInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIdentificationInfoType
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