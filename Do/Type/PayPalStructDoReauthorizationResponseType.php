<?php
/**
 * File for class PayPalStructDoReauthorizationResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReauthorizationResponseType originally named DoReauthorizationResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReauthorizationResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The AuthorizationID
	 * Meta informations extracted from the WSDL
	 * - documentation : A new authorization identification number. Character length and limits: 19 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The AuthorizationInfo
	 * @var PayPalStructAuthorizationInfoType
	 */
	public $AuthorizationInfo;
	/**
	 * The MsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Return msgsubid back to merchant
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor method for DoReauthorizationResponseType
	 * @see parent::__construct()
	 * @param string $_authorizationID
	 * @param PayPalStructAuthorizationInfoType $_authorizationInfo
	 * @param string $_msgSubID
	 * @return PayPalStructDoReauthorizationResponseType
	 */
	public function __construct($_authorizationID,$_authorizationInfo = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_authorizationID,'AuthorizationInfo'=>$_authorizationInfo,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get AuthorizationID value
	 * @return string
	 */
	public function getAuthorizationID()
	{
		return $this->AuthorizationID;
	}
	/**
	 * Set AuthorizationID value
	 * @param string $_authorizationID the AuthorizationID
	 * @return string
	 */
	public function setAuthorizationID($_authorizationID)
	{
		return ($this->AuthorizationID = $_authorizationID);
	}
	/**
	 * Get AuthorizationInfo value
	 * @return PayPalStructAuthorizationInfoType|null
	 */
	public function getAuthorizationInfo()
	{
		return $this->AuthorizationInfo;
	}
	/**
	 * Set AuthorizationInfo value
	 * @param PayPalStructAuthorizationInfoType $_authorizationInfo the AuthorizationInfo
	 * @return PayPalStructAuthorizationInfoType
	 */
	public function setAuthorizationInfo($_authorizationInfo)
	{
		return ($this->AuthorizationInfo = $_authorizationInfo);
	}
	/**
	 * Get MsgSubID value
	 * @return string|null
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
	}
	/**
	 * Set MsgSubID value
	 * @param string $_msgSubID the MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_msgSubID)
	{
		return ($this->MsgSubID = $_msgSubID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoReauthorizationResponseType
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