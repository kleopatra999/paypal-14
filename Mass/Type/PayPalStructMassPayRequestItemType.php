<?php
/**
 * File for class PayPalStructMassPayRequestItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMassPayRequestItemType originally named MassPayRequestItemType
 * Documentation : MassPayRequestItemType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMassPayRequestItemType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment amount. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Required You cannot mix currencies in a single MassPayRequest. A single request must include items that are of the same currency.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The ReceiverEmail
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address of recipient. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients. Character length and limitations: 127 single-byte characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReceiverEmail;
	/**
	 * The ReceiverPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Phone number of recipient. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReceiverPhone;
	/**
	 * The ReceiverID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique PayPal customer account number. This value corresponds to the value of PayerID returned by GetTransactionDetails. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients. Character length and limitations: 17 single-byte characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - maxLength : 127
	 * @var string
	 */
	public $ReceiverID;
	/**
	 * The UniqueId
	 * Meta informations extracted from the WSDL
	 * - documentation : Transaction-specific identification number for tracking in an accounting system. Optional Character length and limitations: 30 single-byte characters. No whitespace allowed.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $UniqueId;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom note for each recipient. Optional Character length and limitations: 4,000 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * Constructor method for MassPayRequestItemType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_receiverEmail
	 * @param string $_receiverPhone
	 * @param string $_receiverID
	 * @param string $_uniqueId
	 * @param string $_note
	 * @return PayPalStructMassPayRequestItemType
	 */
	public function __construct($_amount,$_receiverEmail = NULL,$_receiverPhone = NULL,$_receiverID = NULL,$_uniqueId = NULL,$_note = NULL)
	{
		parent::__construct(array('Amount'=>$_amount,'ReceiverEmail'=>$_receiverEmail,'ReceiverPhone'=>$_receiverPhone,'ReceiverID'=>$_receiverID,'UniqueId'=>$_uniqueId,'Note'=>$_note));
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
	 * Get ReceiverEmail value
	 * @return string|null
	 */
	public function getReceiverEmail()
	{
		return $this->ReceiverEmail;
	}
	/**
	 * Set ReceiverEmail value
	 * @param string $_receiverEmail the ReceiverEmail
	 * @return string
	 */
	public function setReceiverEmail($_receiverEmail)
	{
		return ($this->ReceiverEmail = $_receiverEmail);
	}
	/**
	 * Get ReceiverPhone value
	 * @return string|null
	 */
	public function getReceiverPhone()
	{
		return $this->ReceiverPhone;
	}
	/**
	 * Set ReceiverPhone value
	 * @param string $_receiverPhone the ReceiverPhone
	 * @return string
	 */
	public function setReceiverPhone($_receiverPhone)
	{
		return ($this->ReceiverPhone = $_receiverPhone);
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
	 * Get UniqueId value
	 * @return string|null
	 */
	public function getUniqueId()
	{
		return $this->UniqueId;
	}
	/**
	 * Set UniqueId value
	 * @param string $_uniqueId the UniqueId
	 * @return string
	 */
	public function setUniqueId($_uniqueId)
	{
		return ($this->UniqueId = $_uniqueId);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMassPayRequestItemType
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