<?php
/**
 * File for class PayPalStructDoCancelRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCancelRequestType originally named DoCancelRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCancelRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The CancelMsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Msg Sub Id that was used for the orginal operation.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $CancelMsgSubID;
	/**
	 * The APIType
	 * Meta informations extracted from the WSDL
	 * - documentation : Original API's type
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumAPIType
	 */
	public $APIType;
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
	 * Constructor method for DoCancelRequestType
	 * @see parent::__construct()
	 * @param string $_cancelMsgSubID
	 * @param PayPalEnumAPIType $_aPIType
	 * @param string $_msgSubID
	 * @return PayPalStructDoCancelRequestType
	 */
	public function __construct($_cancelMsgSubID,$_aPIType,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('CancelMsgSubID'=>$_cancelMsgSubID,'APIType'=>$_aPIType,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get CancelMsgSubID value
	 * @return string
	 */
	public function getCancelMsgSubID()
	{
		return $this->CancelMsgSubID;
	}
	/**
	 * Set CancelMsgSubID value
	 * @param string $_cancelMsgSubID the CancelMsgSubID
	 * @return string
	 */
	public function setCancelMsgSubID($_cancelMsgSubID)
	{
		return ($this->CancelMsgSubID = $_cancelMsgSubID);
	}
	/**
	 * Get APIType value
	 * @return PayPalEnumAPIType
	 */
	public function getAPIType()
	{
		return $this->APIType;
	}
	/**
	 * Set APIType value
	 * @uses PayPalEnumAPIType::valueIsValid()
	 * @param PayPalEnumAPIType $_aPIType the APIType
	 * @return PayPalEnumAPIType
	 */
	public function setAPIType($_aPIType)
	{
		if(!PayPalEnumAPIType::valueIsValid($_aPIType))
		{
			return false;
		}
		return ($this->APIType = $_aPIType);
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
	 * @return PayPalStructDoCancelRequestType
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