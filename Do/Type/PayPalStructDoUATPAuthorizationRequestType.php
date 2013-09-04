<?php
/**
 * File for class PayPalStructDoUATPAuthorizationRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoUATPAuthorizationRequestType originally named DoUATPAuthorizationRequestType
 * Documentation : UATP card details Required
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoUATPAuthorizationRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount to authorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The UATPDetails
	 * @var PayPalStructUATPDetailsType
	 */
	public $UATPDetails;
	/**
	 * The TransactionEntity
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumTransactionEntityType
	 */
	public $TransactionEntity;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Invoice ID. A pass through.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
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
	 * Constructor method for DoUATPAuthorizationRequestType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalStructUATPDetailsType $_uATPDetails
	 * @param PayPalEnumTransactionEntityType $_transactionEntity
	 * @param string $_invoiceID
	 * @param string $_msgSubID
	 * @return PayPalStructDoUATPAuthorizationRequestType
	 */
	public function __construct($_amount,$_uATPDetails = NULL,$_transactionEntity = NULL,$_invoiceID = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('Amount'=>$_amount,'UATPDetails'=>$_uATPDetails,'TransactionEntity'=>$_transactionEntity,'InvoiceID'=>$_invoiceID,'MsgSubID'=>$_msgSubID));
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
	 * Get UATPDetails value
	 * @return PayPalStructUATPDetailsType|null
	 */
	public function getUATPDetails()
	{
		return $this->UATPDetails;
	}
	/**
	 * Set UATPDetails value
	 * @param PayPalStructUATPDetailsType $_uATPDetails the UATPDetails
	 * @return PayPalStructUATPDetailsType
	 */
	public function setUATPDetails($_uATPDetails)
	{
		return ($this->UATPDetails = $_uATPDetails);
	}
	/**
	 * Get TransactionEntity value
	 * @return PayPalEnumTransactionEntityType|null
	 */
	public function getTransactionEntity()
	{
		return $this->TransactionEntity;
	}
	/**
	 * Set TransactionEntity value
	 * @uses PayPalEnumTransactionEntityType::valueIsValid()
	 * @param PayPalEnumTransactionEntityType $_transactionEntity the TransactionEntity
	 * @return PayPalEnumTransactionEntityType
	 */
	public function setTransactionEntity($_transactionEntity)
	{
		if(!PayPalEnumTransactionEntityType::valueIsValid($_transactionEntity))
		{
			return false;
		}
		return ($this->TransactionEntity = $_transactionEntity);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
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
	 * @return PayPalStructDoUATPAuthorizationRequestType
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