<?php
/**
 * File for class PayPalStructDoVoidRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoVoidRequestType originally named DoVoidRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoVoidRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The AuthorizationID
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of the original authorization identification number returned by a PayPal product. If you are voiding a transaction that has been reauthorized, use the ID from the original authorization, and not the reauthorization. Required Character length and limits: 19 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - documentation : An informational note about this settlement that is displayed to the payer in email and in transaction history. Optional Character length and limits: 255 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
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
	 * Constructor method for DoVoidRequestType
	 * @see parent::__construct()
	 * @param string $_authorizationID
	 * @param string $_note
	 * @param string $_msgSubID
	 * @return PayPalStructDoVoidRequestType
	 */
	public function __construct($_authorizationID,$_note = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_authorizationID,'Note'=>$_note,'MsgSubID'=>$_msgSubID));
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
	 * Get Note value
	 * @return string|null
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Note value
	 * @param string $_note the Note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->Note = $_note);
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
	 * @return PayPalStructDoVoidRequestType
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