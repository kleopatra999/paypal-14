<?php
/**
 * File for class PayPalStructDoCaptureResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCaptureResponseDetailsType originally named DoCaptureResponseDetailsType
 * Documentation : The authorization identification number you specified in the request. Character length and limits: 19 single-byte characters maximum
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCaptureResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The AuthorizationID
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The PaymentInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the transaction
	 * @var PayPalStructPaymentInfoType
	 */
	public $PaymentInfo;
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
	 * Constructor method for DoCaptureResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_authorizationID
	 * @param PayPalStructPaymentInfoType $_paymentInfo
	 * @param string $_msgSubID
	 * @return PayPalStructDoCaptureResponseDetailsType
	 */
	public function __construct($_authorizationID = NULL,$_paymentInfo = NULL,$_msgSubID = NULL)
	{
		parent::__construct(array('AuthorizationID'=>$_authorizationID,'PaymentInfo'=>$_paymentInfo,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get AuthorizationID value
	 * @return string|null
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
	 * Get PaymentInfo value
	 * @return PayPalStructPaymentInfoType|null
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}
	/**
	 * Set PaymentInfo value
	 * @param PayPalStructPaymentInfoType $_paymentInfo the PaymentInfo
	 * @return PayPalStructPaymentInfoType
	 */
	public function setPaymentInfo($_paymentInfo)
	{
		return ($this->PaymentInfo = $_paymentInfo);
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
	 * @return PayPalStructDoCaptureResponseDetailsType
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