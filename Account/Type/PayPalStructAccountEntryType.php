<?php
/**
 * File for class PayPalStructAccountEntryType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAccountEntryType originally named AccountEntryType
 * Documentation : Balance as of a given entry, can be 0.00. Item number if transaction is associated with an auction or 0 if no item is associated with an account entry.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAccountEntryType extends PayPalWsdlClass
{
	/**
	 * The Balance
	 * @var PayPalStructAmountType
	 */
	public $Balance;
	/**
	 * The Credit
	 * Meta informations extracted from the WSDL
	 * - documentation : Credit Amount for a detail entry, can be 0.00.
	 * @var PayPalStructAmountType
	 */
	public $Credit;
	/**
	 * The Date
	 * Meta informations extracted from the WSDL
	 * - documentation : Date entry was posted, in GMT.
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The Debit
	 * Meta informations extracted from the WSDL
	 * - documentation : Debit Amount for this detail entry, can be 0.00.
	 * @var PayPalStructAmountType
	 */
	public $Debit;
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The Memo
	 * Meta informations extracted from the WSDL
	 * - documentation : Memo line for an account entry, can be empty string.
	 * @var string
	 */
	public $Memo;
	/**
	 * The RefNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : eBay reference number for an account entry.
	 * @var int
	 */
	public $RefNumber;
	/**
	 * The AccountEntryDetailsType
	 * Meta informations extracted from the WSDL
	 * - documentation : Integer code for account details entry type. This element element specifies an index to a table of explanations for accounting charges.
	 * @var int
	 */
	public $AccountEntryDetailsType;
	/**
	 * Constructor method for AccountEntryType
	 * @see parent::__construct()
	 * @param PayPalStructAmountType $_balance
	 * @param PayPalStructAmountType $_credit
	 * @param dateTime $_date
	 * @param PayPalStructAmountType $_debit
	 * @param string $_itemID
	 * @param string $_memo
	 * @param int $_refNumber
	 * @param int $_accountEntryDetailsType
	 * @return PayPalStructAccountEntryType
	 */
	public function __construct($_balance = NULL,$_credit = NULL,$_date = NULL,$_debit = NULL,$_itemID = NULL,$_memo = NULL,$_refNumber = NULL,$_accountEntryDetailsType = NULL)
	{
		parent::__construct(array('Balance'=>$_balance,'Credit'=>$_credit,'Date'=>$_date,'Debit'=>$_debit,'ItemID'=>$_itemID,'Memo'=>$_memo,'RefNumber'=>$_refNumber,'AccountEntryDetailsType'=>$_accountEntryDetailsType));
	}
	/**
	 * Get Balance value
	 * @return PayPalStructAmountType|null
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set Balance value
	 * @param PayPalStructAmountType $_balance the Balance
	 * @return PayPalStructAmountType
	 */
	public function setBalance($_balance)
	{
		return ($this->Balance = $_balance);
	}
	/**
	 * Get Credit value
	 * @return PayPalStructAmountType|null
	 */
	public function getCredit()
	{
		return $this->Credit;
	}
	/**
	 * Set Credit value
	 * @param PayPalStructAmountType $_credit the Credit
	 * @return PayPalStructAmountType
	 */
	public function setCredit($_credit)
	{
		return ($this->Credit = $_credit);
	}
	/**
	 * Get Date value
	 * @return dateTime|null
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Date value
	 * @param dateTime $_date the Date
	 * @return dateTime
	 */
	public function setDate($_date)
	{
		return ($this->Date = $_date);
	}
	/**
	 * Get Debit value
	 * @return PayPalStructAmountType|null
	 */
	public function getDebit()
	{
		return $this->Debit;
	}
	/**
	 * Set Debit value
	 * @param PayPalStructAmountType $_debit the Debit
	 * @return PayPalStructAmountType
	 */
	public function setDebit($_debit)
	{
		return ($this->Debit = $_debit);
	}
	/**
	 * Get ItemID value
	 * @return string|null
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ItemID value
	 * @param string $_itemID the ItemID
	 * @return string
	 */
	public function setItemID($_itemID)
	{
		return ($this->ItemID = $_itemID);
	}
	/**
	 * Get Memo value
	 * @return string|null
	 */
	public function getMemo()
	{
		return $this->Memo;
	}
	/**
	 * Set Memo value
	 * @param string $_memo the Memo
	 * @return string
	 */
	public function setMemo($_memo)
	{
		return ($this->Memo = $_memo);
	}
	/**
	 * Get RefNumber value
	 * @return int|null
	 */
	public function getRefNumber()
	{
		return $this->RefNumber;
	}
	/**
	 * Set RefNumber value
	 * @param int $_refNumber the RefNumber
	 * @return int
	 */
	public function setRefNumber($_refNumber)
	{
		return ($this->RefNumber = $_refNumber);
	}
	/**
	 * Get AccountEntryDetailsType value
	 * @return int|null
	 */
	public function getAccountEntryDetailsType()
	{
		return $this->AccountEntryDetailsType;
	}
	/**
	 * Set AccountEntryDetailsType value
	 * @param int $_accountEntryDetailsType the AccountEntryDetailsType
	 * @return int
	 */
	public function setAccountEntryDetailsType($_accountEntryDetailsType)
	{
		return ($this->AccountEntryDetailsType = $_accountEntryDetailsType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAccountEntryType
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