<?php
/**
 * File for class PayPalStructDoReauthorizationRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReauthorizationRequestType originally named DoReauthorizationRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReauthorizationRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The AuthorizationID
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of a previously authorized transaction identification number returned by a PayPal product. You can obtain a buyer's transaction number from the TransactionID element of the PayerInfo structure returned by GetTransactionDetailsResponse. Required Character length and limits: 19 single-byte characters maximum
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount to reauthorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The MsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor method for DoReauthorizationRequestType
	 * @see parent::__construct()
	 * @param string $_authorizationID
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_msgSubID
	 * @return PayPalStructDoReauthorizationRequestType
	 */
	public function __construct($_authorizationID,$_amount,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_authorizationID,'Amount'=>$_amount,'MsgSubID'=>$_msgSubID));
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
	 * @return PayPalStructDoReauthorizationRequestType
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