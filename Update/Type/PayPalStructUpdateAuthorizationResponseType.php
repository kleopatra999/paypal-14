<?php
/**
 * File for class PayPalStructUpdateAuthorizationResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateAuthorizationResponseType originally named UpdateAuthorizationResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateAuthorizationResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : An authorization identification number. Character length and limits: 19 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The AuthorizationInfo
	 * @var PayPalStructAuthorizationInfoType
	 */
	public $AuthorizationInfo;
	/**
	 * Constructor method for UpdateAuthorizationResponseType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param PayPalStructAuthorizationInfoType $_authorizationInfo
	 * @return PayPalStructUpdateAuthorizationResponseType
	 */
	public function __construct($_transactionID,$_authorizationInfo = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'AuthorizationInfo'=>$_authorizationInfo));
	}
	/**
	 * Get TransactionID value
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionID value
	 * @param string $_transactionID the TransactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->TransactionID = $_transactionID);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateAuthorizationResponseType
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