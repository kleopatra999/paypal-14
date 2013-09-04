<?php
/**
 * File for class PayPalStructMassPayRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMassPayRequestType originally named MassPayRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMassPayRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The MassPayItem
	 * Meta informations extracted from the WSDL
	 * - documentation : Details of each payment. A single MassPayRequest can include up to 250 MassPayItems. Required
	 * - maxOccurs : 250
	 * - minOccurs : 1
	 * @var PayPalStructMassPayRequestItemType
	 */
	public $MassPayItem;
	/**
	 * The EmailSubject
	 * Meta informations extracted from the WSDL
	 * - documentation : Subject line of the email sent to all recipients. This subject is not contained in the input file; you must create it with your application. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $EmailSubject;
	/**
	 * The ReceiverType
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates how you identify the recipients of payments in all MassPayItems: either by EmailAddress (ReceiverEmail in MassPayItem), PhoneNumber (ReceiverPhone in MassPayItem), or by UserID (ReceiverID in MassPayItem). Required. You must specify one or the other of EmailAddress or UserID.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumReceiverInfoCodeType
	 */
	public $ReceiverType;
	/**
	 * The ButtonSource
	 * Meta informations extracted from the WSDL
	 * - documentation : Known as BN code, to track the partner referred merchant transactions. OptionalCharacter length and limitations: 32 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * Constructor method for MassPayRequestType
	 * @see parent::__construct()
	 * @param PayPalStructMassPayRequestItemType $_massPayItem
	 * @param string $_emailSubject
	 * @param PayPalEnumReceiverInfoCodeType $_receiverType
	 * @param string $_buttonSource
	 * @return PayPalStructMassPayRequestType
	 */
	public function __construct($_massPayItem,$_emailSubject = NULL,$_receiverType = NULL,$_buttonSource = NULL)
	{
		PayPalWsdlClass::__construct(array('MassPayItem'=>$_massPayItem,'EmailSubject'=>$_emailSubject,'ReceiverType'=>$_receiverType,'ButtonSource'=>$_buttonSource));
	}
	/**
	 * Get MassPayItem value
	 * @return PayPalStructMassPayRequestItemType
	 */
	public function getMassPayItem()
	{
		return $this->MassPayItem;
	}
	/**
	 * Set MassPayItem value
	 * @param PayPalStructMassPayRequestItemType $_massPayItem the MassPayItem
	 * @return PayPalStructMassPayRequestItemType
	 */
	public function setMassPayItem($_massPayItem)
	{
		return ($this->MassPayItem = $_massPayItem);
	}
	/**
	 * Get EmailSubject value
	 * @return string|null
	 */
	public function getEmailSubject()
	{
		return $this->EmailSubject;
	}
	/**
	 * Set EmailSubject value
	 * @param string $_emailSubject the EmailSubject
	 * @return string
	 */
	public function setEmailSubject($_emailSubject)
	{
		return ($this->EmailSubject = $_emailSubject);
	}
	/**
	 * Get ReceiverType value
	 * @return PayPalEnumReceiverInfoCodeType|null
	 */
	public function getReceiverType()
	{
		return $this->ReceiverType;
	}
	/**
	 * Set ReceiverType value
	 * @uses PayPalEnumReceiverInfoCodeType::valueIsValid()
	 * @param PayPalEnumReceiverInfoCodeType $_receiverType the ReceiverType
	 * @return PayPalEnumReceiverInfoCodeType
	 */
	public function setReceiverType($_receiverType)
	{
		if(!PayPalEnumReceiverInfoCodeType::valueIsValid($_receiverType))
		{
			return false;
		}
		return ($this->ReceiverType = $_receiverType);
	}
	/**
	 * Get ButtonSource value
	 * @return string|null
	 */
	public function getButtonSource()
	{
		return $this->ButtonSource;
	}
	/**
	 * Set ButtonSource value
	 * @param string $_buttonSource the ButtonSource
	 * @return string
	 */
	public function setButtonSource($_buttonSource)
	{
		return ($this->ButtonSource = $_buttonSource);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMassPayRequestType
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