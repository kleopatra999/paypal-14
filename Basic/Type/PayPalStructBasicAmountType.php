<?php
/**
 * File for class PayPalStructBasicAmountType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBasicAmountType originally named BasicAmountType
 * Documentation : On requests, you must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/CoreComponentTypes.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBasicAmountType extends PayPalWsdlClass
{
	/**
	 * The currencyID
	 * Meta informations extracted from the WSDL
	 * - use : required
	 * @var PayPalEnumCurrencyCodeType
	 */
	public $currencyID;
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * Constructor method for BasicAmountType
	 * @see parent::__construct()
	 * @param PayPalEnumCurrencyCodeType $_currencyID
	 * @param string $__
	 * @return PayPalStructBasicAmountType
	 */
	public function __construct($_currencyID,$__ = NULL)
	{
		parent::__construct(array('currencyID'=>$_currencyID,'_'=>$__));
	}
	/**
	 * Get currencyID value
	 * @return PayPalEnumCurrencyCodeType
	 */
	public function getCurrencyID()
	{
		return $this->currencyID;
	}
	/**
	 * Set currencyID value
	 * @uses PayPalEnumCurrencyCodeType::valueIsValid()
	 * @param PayPalEnumCurrencyCodeType $_currencyID the currencyID
	 * @return PayPalEnumCurrencyCodeType
	 */
	public function setCurrencyID($_currencyID)
	{
		if(!PayPalEnumCurrencyCodeType::valueIsValid($_currencyID))
		{
			return false;
		}
		return ($this->currencyID = $_currencyID);
	}
	/**
	 * Get _ value
	 * @return string|null
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set _ value
	 * @param string $__ the _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBasicAmountType
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