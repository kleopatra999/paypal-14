<?php
/**
 * File for class PayPalStructAccountSummaryType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAccountSummaryType originally named AccountSummaryType
 * Documentation : Includes account summary for the user. Amount past due, 0.00 if not past due. User's current balance. Can be 0.00, positive, or negative.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAccountSummaryType extends PayPalWsdlClass
{
	/**
	 * The AccountState
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumAccountStateCodeType
	 */
	public $AccountState;
	/**
	 * The AdditionalAccount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructAdditionalAccountType
	 */
	public $AdditionalAccount;
	/**
	 * The AdditionalAccountsCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of additional accounts.
	 * @var int
	 */
	public $AdditionalAccountsCount;
	/**
	 * The AmountPastDue
	 * @var PayPalStructAmountType
	 */
	public $AmountPastDue;
	/**
	 * The BankAccountInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : First four digits (with remainder Xed-out). This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
	 * @var string
	 */
	public $BankAccountInfo;
	/**
	 * The BankModifyDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Last time/day BankAccountInfo and/or BankRoutingInfo was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
	 * @var dateTime
	 */
	public $BankModifyDate;
	/**
	 * The BillingCycleDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the billing cycle in which eBay sends a billing invoice to the specified user. Possible values: 0 = On the last day of the month. 15 = On the 15th day of the month.
	 * @var dateTime
	 */
	public $BillingCycleDate;
	/**
	 * The CCExp
	 * Meta informations extracted from the WSDL
	 * - documentation : Expiration date for the credit card selected as payment method, in GMT. Empty string if no credit card is on file or if account is inactive -- even if there is a credit card on file.
	 * @var dateTime
	 */
	public $CCExp;
	/**
	 * The CCInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Last four digits of user's credit card selected as payment type. Empty string if no credit is on file. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
	 * @var string
	 */
	public $CCInfo;
	/**
	 * The CCModifyDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Last date credit card or credit card expiration date was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, Empty string if no credit card is on file.
	 * @var dateTime
	 */
	public $CCModifyDate;
	/**
	 * The CurrentBalance
	 * @var PayPalStructAmountType
	 */
	public $CurrentBalance;
	/**
	 * The LastAmountPaid
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of last payment posted, 0.00 if no payments posted.
	 * @var PayPalStructAmountType
	 */
	public $LastAmountPaid;
	/**
	 * The LastInvoiceAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount of last invoice. 0.00 if account not yet invoiced.
	 * @var PayPalStructAmountType
	 */
	public $LastInvoiceAmount;
	/**
	 * The LastInvoiceDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date of last invoice sent by eBay to the user, in GMT. Empty string if this account has not been invoiced yet.
	 * @var dateTime
	 */
	public $LastInvoiceDate;
	/**
	 * The LastPaymentDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date of last payment by specified user to eBay, in GMT. Empty string if no payments posted.
	 * @var dateTime
	 */
	public $LastPaymentDate;
	/**
	 * The PastDue
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the account has past due amounts outstanding. Possible values: true = Account is past due. false = Account is current.
	 * @var boolean
	 */
	public $PastDue;
	/**
	 * The PaymentMethod
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the method the specified user selected for paying eBay. The values for PaymentType vary for each SiteID.
	 * @var PayPalEnumSellerPaymentMethodCodeType
	 */
	public $PaymentMethod;
	/**
	 * Constructor method for AccountSummaryType
	 * @see parent::__construct()
	 * @param PayPalEnumAccountStateCodeType $_accountState
	 * @param PayPalStructAdditionalAccountType $_additionalAccount
	 * @param int $_additionalAccountsCount
	 * @param PayPalStructAmountType $_amountPastDue
	 * @param string $_bankAccountInfo
	 * @param dateTime $_bankModifyDate
	 * @param dateTime $_billingCycleDate
	 * @param dateTime $_cCExp
	 * @param string $_cCInfo
	 * @param dateTime $_cCModifyDate
	 * @param PayPalStructAmountType $_currentBalance
	 * @param PayPalStructAmountType $_lastAmountPaid
	 * @param PayPalStructAmountType $_lastInvoiceAmount
	 * @param dateTime $_lastInvoiceDate
	 * @param dateTime $_lastPaymentDate
	 * @param boolean $_pastDue
	 * @param PayPalEnumSellerPaymentMethodCodeType $_paymentMethod
	 * @return PayPalStructAccountSummaryType
	 */
	public function __construct($_accountState = NULL,$_additionalAccount = NULL,$_additionalAccountsCount = NULL,$_amountPastDue = NULL,$_bankAccountInfo = NULL,$_bankModifyDate = NULL,$_billingCycleDate = NULL,$_cCExp = NULL,$_cCInfo = NULL,$_cCModifyDate = NULL,$_currentBalance = NULL,$_lastAmountPaid = NULL,$_lastInvoiceAmount = NULL,$_lastInvoiceDate = NULL,$_lastPaymentDate = NULL,$_pastDue = NULL,$_paymentMethod = NULL)
	{
		parent::__construct(array('AccountState'=>$_accountState,'AdditionalAccount'=>$_additionalAccount,'AdditionalAccountsCount'=>$_additionalAccountsCount,'AmountPastDue'=>$_amountPastDue,'BankAccountInfo'=>$_bankAccountInfo,'BankModifyDate'=>$_bankModifyDate,'BillingCycleDate'=>$_billingCycleDate,'CCExp'=>$_cCExp,'CCInfo'=>$_cCInfo,'CCModifyDate'=>$_cCModifyDate,'CurrentBalance'=>$_currentBalance,'LastAmountPaid'=>$_lastAmountPaid,'LastInvoiceAmount'=>$_lastInvoiceAmount,'LastInvoiceDate'=>$_lastInvoiceDate,'LastPaymentDate'=>$_lastPaymentDate,'PastDue'=>$_pastDue,'PaymentMethod'=>$_paymentMethod));
	}
	/**
	 * Get AccountState value
	 * @return PayPalEnumAccountStateCodeType|null
	 */
	public function getAccountState()
	{
		return $this->AccountState;
	}
	/**
	 * Set AccountState value
	 * @uses PayPalEnumAccountStateCodeType::valueIsValid()
	 * @param PayPalEnumAccountStateCodeType $_accountState the AccountState
	 * @return PayPalEnumAccountStateCodeType
	 */
	public function setAccountState($_accountState)
	{
		if(!PayPalEnumAccountStateCodeType::valueIsValid($_accountState))
		{
			return false;
		}
		return ($this->AccountState = $_accountState);
	}
	/**
	 * Get AdditionalAccount value
	 * @return PayPalStructAdditionalAccountType|null
	 */
	public function getAdditionalAccount()
	{
		return $this->AdditionalAccount;
	}
	/**
	 * Set AdditionalAccount value
	 * @param PayPalStructAdditionalAccountType $_additionalAccount the AdditionalAccount
	 * @return PayPalStructAdditionalAccountType
	 */
	public function setAdditionalAccount($_additionalAccount)
	{
		return ($this->AdditionalAccount = $_additionalAccount);
	}
	/**
	 * Get AdditionalAccountsCount value
	 * @return int|null
	 */
	public function getAdditionalAccountsCount()
	{
		return $this->AdditionalAccountsCount;
	}
	/**
	 * Set AdditionalAccountsCount value
	 * @param int $_additionalAccountsCount the AdditionalAccountsCount
	 * @return int
	 */
	public function setAdditionalAccountsCount($_additionalAccountsCount)
	{
		return ($this->AdditionalAccountsCount = $_additionalAccountsCount);
	}
	/**
	 * Get AmountPastDue value
	 * @return PayPalStructAmountType|null
	 */
	public function getAmountPastDue()
	{
		return $this->AmountPastDue;
	}
	/**
	 * Set AmountPastDue value
	 * @param PayPalStructAmountType $_amountPastDue the AmountPastDue
	 * @return PayPalStructAmountType
	 */
	public function setAmountPastDue($_amountPastDue)
	{
		return ($this->AmountPastDue = $_amountPastDue);
	}
	/**
	 * Get BankAccountInfo value
	 * @return string|null
	 */
	public function getBankAccountInfo()
	{
		return $this->BankAccountInfo;
	}
	/**
	 * Set BankAccountInfo value
	 * @param string $_bankAccountInfo the BankAccountInfo
	 * @return string
	 */
	public function setBankAccountInfo($_bankAccountInfo)
	{
		return ($this->BankAccountInfo = $_bankAccountInfo);
	}
	/**
	 * Get BankModifyDate value
	 * @return dateTime|null
	 */
	public function getBankModifyDate()
	{
		return $this->BankModifyDate;
	}
	/**
	 * Set BankModifyDate value
	 * @param dateTime $_bankModifyDate the BankModifyDate
	 * @return dateTime
	 */
	public function setBankModifyDate($_bankModifyDate)
	{
		return ($this->BankModifyDate = $_bankModifyDate);
	}
	/**
	 * Get BillingCycleDate value
	 * @return dateTime|null
	 */
	public function getBillingCycleDate()
	{
		return $this->BillingCycleDate;
	}
	/**
	 * Set BillingCycleDate value
	 * @param dateTime $_billingCycleDate the BillingCycleDate
	 * @return dateTime
	 */
	public function setBillingCycleDate($_billingCycleDate)
	{
		return ($this->BillingCycleDate = $_billingCycleDate);
	}
	/**
	 * Get CCExp value
	 * @return dateTime|null
	 */
	public function getCCExp()
	{
		return $this->CCExp;
	}
	/**
	 * Set CCExp value
	 * @param dateTime $_cCExp the CCExp
	 * @return dateTime
	 */
	public function setCCExp($_cCExp)
	{
		return ($this->CCExp = $_cCExp);
	}
	/**
	 * Get CCInfo value
	 * @return string|null
	 */
	public function getCCInfo()
	{
		return $this->CCInfo;
	}
	/**
	 * Set CCInfo value
	 * @param string $_cCInfo the CCInfo
	 * @return string
	 */
	public function setCCInfo($_cCInfo)
	{
		return ($this->CCInfo = $_cCInfo);
	}
	/**
	 * Get CCModifyDate value
	 * @return dateTime|null
	 */
	public function getCCModifyDate()
	{
		return $this->CCModifyDate;
	}
	/**
	 * Set CCModifyDate value
	 * @param dateTime $_cCModifyDate the CCModifyDate
	 * @return dateTime
	 */
	public function setCCModifyDate($_cCModifyDate)
	{
		return ($this->CCModifyDate = $_cCModifyDate);
	}
	/**
	 * Get CurrentBalance value
	 * @return PayPalStructAmountType|null
	 */
	public function getCurrentBalance()
	{
		return $this->CurrentBalance;
	}
	/**
	 * Set CurrentBalance value
	 * @param PayPalStructAmountType $_currentBalance the CurrentBalance
	 * @return PayPalStructAmountType
	 */
	public function setCurrentBalance($_currentBalance)
	{
		return ($this->CurrentBalance = $_currentBalance);
	}
	/**
	 * Get LastAmountPaid value
	 * @return PayPalStructAmountType|null
	 */
	public function getLastAmountPaid()
	{
		return $this->LastAmountPaid;
	}
	/**
	 * Set LastAmountPaid value
	 * @param PayPalStructAmountType $_lastAmountPaid the LastAmountPaid
	 * @return PayPalStructAmountType
	 */
	public function setLastAmountPaid($_lastAmountPaid)
	{
		return ($this->LastAmountPaid = $_lastAmountPaid);
	}
	/**
	 * Get LastInvoiceAmount value
	 * @return PayPalStructAmountType|null
	 */
	public function getLastInvoiceAmount()
	{
		return $this->LastInvoiceAmount;
	}
	/**
	 * Set LastInvoiceAmount value
	 * @param PayPalStructAmountType $_lastInvoiceAmount the LastInvoiceAmount
	 * @return PayPalStructAmountType
	 */
	public function setLastInvoiceAmount($_lastInvoiceAmount)
	{
		return ($this->LastInvoiceAmount = $_lastInvoiceAmount);
	}
	/**
	 * Get LastInvoiceDate value
	 * @return dateTime|null
	 */
	public function getLastInvoiceDate()
	{
		return $this->LastInvoiceDate;
	}
	/**
	 * Set LastInvoiceDate value
	 * @param dateTime $_lastInvoiceDate the LastInvoiceDate
	 * @return dateTime
	 */
	public function setLastInvoiceDate($_lastInvoiceDate)
	{
		return ($this->LastInvoiceDate = $_lastInvoiceDate);
	}
	/**
	 * Get LastPaymentDate value
	 * @return dateTime|null
	 */
	public function getLastPaymentDate()
	{
		return $this->LastPaymentDate;
	}
	/**
	 * Set LastPaymentDate value
	 * @param dateTime $_lastPaymentDate the LastPaymentDate
	 * @return dateTime
	 */
	public function setLastPaymentDate($_lastPaymentDate)
	{
		return ($this->LastPaymentDate = $_lastPaymentDate);
	}
	/**
	 * Get PastDue value
	 * @return boolean|null
	 */
	public function getPastDue()
	{
		return $this->PastDue;
	}
	/**
	 * Set PastDue value
	 * @param boolean $_pastDue the PastDue
	 * @return boolean
	 */
	public function setPastDue($_pastDue)
	{
		return ($this->PastDue = $_pastDue);
	}
	/**
	 * Get PaymentMethod value
	 * @return PayPalEnumSellerPaymentMethodCodeType|null
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set PaymentMethod value
	 * @uses PayPalEnumSellerPaymentMethodCodeType::valueIsValid()
	 * @param PayPalEnumSellerPaymentMethodCodeType $_paymentMethod the PaymentMethod
	 * @return PayPalEnumSellerPaymentMethodCodeType
	 */
	public function setPaymentMethod($_paymentMethod)
	{
		if(!PayPalEnumSellerPaymentMethodCodeType::valueIsValid($_paymentMethod))
		{
			return false;
		}
		return ($this->PaymentMethod = $_paymentMethod);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAccountSummaryType
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