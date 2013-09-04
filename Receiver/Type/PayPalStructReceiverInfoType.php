<?php
/**
 * File for class PayPalStructReceiverInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReceiverInfoType originally named ReceiverInfoType
 * Documentation : ReceiverInfoType Receiver information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReceiverInfoType extends PayPalWsdlClass
{
	/**
	 * The Business
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address or account ID of the payment recipient (the seller). Equivalent to Receiver if payment is sent to primary account. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $Business;
	/**
	 * The Receiver
	 * Meta informations extracted from the WSDL
	 * - documentation : Primary email address of the payment recipient (the seller). If you are the recipient of the payment and the payment is sent to your non-primary email address, the value of Receiver is still your primary email address. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $Receiver;
	/**
	 * The ReceiverID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique account ID of the payment recipient (the seller). This value is the same as the value of the recipient's referral ID.
	 * - maxLength : 127
	 * @var string
	 */
	public $ReceiverID;
	/**
	 * Constructor method for ReceiverInfoType
	 * @see parent::__construct()
	 * @param string $_business
	 * @param string $_receiver
	 * @param string $_receiverID
	 * @return PayPalStructReceiverInfoType
	 */
	public function __construct($_business = NULL,$_receiver = NULL,$_receiverID = NULL)
	{
		parent::__construct(array('Business'=>$_business,'Receiver'=>$_receiver,'ReceiverID'=>$_receiverID));
	}
	/**
	 * Get Business value
	 * @return string|null
	 */
	public function getBusiness()
	{
		return $this->Business;
	}
	/**
	 * Set Business value
	 * @param string $_business the Business
	 * @return string
	 */
	public function setBusiness($_business)
	{
		return ($this->Business = $_business);
	}
	/**
	 * Get Receiver value
	 * @return string|null
	 */
	public function getReceiver()
	{
		return $this->Receiver;
	}
	/**
	 * Set Receiver value
	 * @param string $_receiver the Receiver
	 * @return string
	 */
	public function setReceiver($_receiver)
	{
		return ($this->Receiver = $_receiver);
	}
	/**
	 * Get ReceiverID value
	 * @return string|null
	 */
	public function getReceiverID()
	{
		return $this->ReceiverID;
	}
	/**
	 * Set ReceiverID value
	 * @param string $_receiverID the ReceiverID
	 * @return string
	 */
	public function setReceiverID($_receiverID)
	{
		return ($this->ReceiverID = $_receiverID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReceiverInfoType
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