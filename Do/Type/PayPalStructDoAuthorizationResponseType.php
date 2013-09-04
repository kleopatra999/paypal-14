<?php
/**
 * File for class PayPalStructDoAuthorizationResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoAuthorizationResponseType originally named DoAuthorizationResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoAuthorizationResponseType extends PayPalStructAbstractResponseType
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
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : The amount and currency you specified in the request.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
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
	 * Constructor method for DoAuthorizationResponseType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalStructAuthorizationInfoType $_authorizationInfo
	 * @param string $_msgSubID
	 * @return PayPalStructDoAuthorizationResponseType
	 */
	public function __construct($_transactionID,$_amount,$_authorizationInfo = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'Amount'=>$_amount,'AuthorizationInfo'=>$_authorizationInfo,'MsgSubID'=>$_msgSubID));
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
	 * Get Amount value
	 * @return PayPalStructBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
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
	 * @return PayPalStructDoAuthorizationResponseType
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