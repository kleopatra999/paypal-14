<?php
/**
 * File for class PayPalStructGetBalanceResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBalanceResponseType originally named GetBalanceResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBalanceResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The Balance
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Balance;
	/**
	 * The BalanceTimeStamp
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $BalanceTimeStamp;
	/**
	 * The BalanceHoldings
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BalanceHoldings;
	/**
	 * Constructor method for GetBalanceResponseType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_balance
	 * @param dateTime $_balanceTimeStamp
	 * @param PayPalStructBasicAmountType $_balanceHoldings
	 * @return PayPalStructGetBalanceResponseType
	 */
	public function __construct($_balance,$_balanceTimeStamp,$_balanceHoldings = NULL)
	{
		PayPalWsdlClass::__construct(array('Balance'=>$_balance,'BalanceTimeStamp'=>$_balanceTimeStamp,'BalanceHoldings'=>$_balanceHoldings));
	}
	/**
	 * Get Balance value
	 * @return PayPalStructBasicAmountType
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set Balance value
	 * @param PayPalStructBasicAmountType $_balance the Balance
	 * @return PayPalStructBasicAmountType
	 */
	public function setBalance($_balance)
	{
		return ($this->Balance = $_balance);
	}
	/**
	 * Get BalanceTimeStamp value
	 * @return dateTime
	 */
	public function getBalanceTimeStamp()
	{
		return $this->BalanceTimeStamp;
	}
	/**
	 * Set BalanceTimeStamp value
	 * @param dateTime $_balanceTimeStamp the BalanceTimeStamp
	 * @return dateTime
	 */
	public function setBalanceTimeStamp($_balanceTimeStamp)
	{
		return ($this->BalanceTimeStamp = $_balanceTimeStamp);
	}
	/**
	 * Get BalanceHoldings value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBalanceHoldings()
	{
		return $this->BalanceHoldings;
	}
	/**
	 * Set BalanceHoldings value
	 * @param PayPalStructBasicAmountType $_balanceHoldings the BalanceHoldings
	 * @return PayPalStructBasicAmountType
	 */
	public function setBalanceHoldings($_balanceHoldings)
	{
		return ($this->BalanceHoldings = $_balanceHoldings);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBalanceResponseType
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