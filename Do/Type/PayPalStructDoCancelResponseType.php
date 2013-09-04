<?php
/**
 * File for class PayPalStructDoCancelResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCancelResponseType originally named DoCancelResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCancelResponseType extends PayPalStructAbstractResponseType
{
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
	 * Constructor method for DoCancelResponseType
	 * @see parent::__construct()
	 * @param string $_msgSubID
	 * @return PayPalStructDoCancelResponseType
	 */
	public function __construct($_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('MsgSubID'=>$_msgSubID));
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
	 * @return PayPalStructDoCancelResponseType
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