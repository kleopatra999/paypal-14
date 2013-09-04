<?php
/**
 * File for class PayPalStructAdditionalAccountType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAdditionalAccountType originally named AdditionalAccountType
 * Documentation : The AdditionalAccount component represents historical data related to accounts that the user held with a country of residency other than the current one. eBay users can have one active account at a time. For users who change their country of residency and modify their eBay registration to reflect this change, the new country of residence becomes the currently active account. Any account associated with a previous country is treated as an additional account. Because the currency for these additional accounts are different than the active account, each additional account includes an indicator of the currency for that account. Users who never change their country of residence will not have any additional accounts.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAdditionalAccountType extends PayPalWsdlClass
{
	/**
	 * The Balance
	 * @var PayPalStructAmountType
	 */
	public $Balance;
	/**
	 * The Currency
	 * @var PayPalEnumCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The AccountCode
	 * @var string
	 */
	public $AccountCode;
	/**
	 * Constructor method for AdditionalAccountType
	 * @see parent::__construct()
	 * @param PayPalStructAmountType $_balance
	 * @param PayPalEnumCurrencyCodeType $_currency
	 * @param string $_accountCode
	 * @return PayPalStructAdditionalAccountType
	 */
	public function __construct($_balance = NULL,$_currency = NULL,$_accountCode = NULL)
	{
		parent::__construct(array('Balance'=>$_balance,'Currency'=>$_currency,'AccountCode'=>$_accountCode));
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
	 * Get Currency value
	 * @return PayPalEnumCurrencyCodeType|null
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Currency value
	 * @uses PayPalEnumCurrencyCodeType::valueIsValid()
	 * @param PayPalEnumCurrencyCodeType $_currency the Currency
	 * @return PayPalEnumCurrencyCodeType
	 */
	public function setCurrency($_currency)
	{
		if(!PayPalEnumCurrencyCodeType::valueIsValid($_currency))
		{
			return false;
		}
		return ($this->Currency = $_currency);
	}
	/**
	 * Get AccountCode value
	 * @return string|null
	 */
	public function getAccountCode()
	{
		return $this->AccountCode;
	}
	/**
	 * Set AccountCode value
	 * @param string $_accountCode the AccountCode
	 * @return string
	 */
	public function setAccountCode($_accountCode)
	{
		return ($this->AccountCode = $_accountCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAdditionalAccountType
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