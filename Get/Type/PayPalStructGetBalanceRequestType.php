<?php
/**
 * File for class PayPalStructGetBalanceRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBalanceRequestType originally named GetBalanceRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBalanceRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ReturnAllCurrencies
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReturnAllCurrencies;
	/**
	 * Constructor method for GetBalanceRequestType
	 * @see parent::__construct()
	 * @param string $_returnAllCurrencies
	 * @return PayPalStructGetBalanceRequestType
	 */
	public function __construct($_returnAllCurrencies = NULL)
	{
		PayPalWsdlClass::__construct(array('ReturnAllCurrencies'=>$_returnAllCurrencies));
	}
	/**
	 * Get ReturnAllCurrencies value
	 * @return string|null
	 */
	public function getReturnAllCurrencies()
	{
		return $this->ReturnAllCurrencies;
	}
	/**
	 * Set ReturnAllCurrencies value
	 * @param string $_returnAllCurrencies the ReturnAllCurrencies
	 * @return string
	 */
	public function setReturnAllCurrencies($_returnAllCurrencies)
	{
		return ($this->ReturnAllCurrencies = $_returnAllCurrencies);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBalanceRequestType
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