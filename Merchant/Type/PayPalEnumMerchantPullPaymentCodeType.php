<?php
/**
 * File for class PayPalEnumMerchantPullPaymentCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMerchantPullPaymentCodeType originally named MerchantPullPaymentCodeType
 * Documentation : MerchantPullPaymentCodeType Type of Payment to be initiated by the merchant
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMerchantPullPaymentCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Any'
	 * @return string 'Any'
	 */
	const VALUE_ANY = 'Any';
	/**
	 * Constant for value 'InstantOnly'
	 * @return string 'InstantOnly'
	 */
	const VALUE_INSTANTONLY = 'InstantOnly';
	/**
	 * Constant for value 'EcheckOnly'
	 * @return string 'EcheckOnly'
	 */
	const VALUE_ECHECKONLY = 'EcheckOnly';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMerchantPullPaymentCodeType::VALUE_ANY
	 * @uses PayPalEnumMerchantPullPaymentCodeType::VALUE_INSTANTONLY
	 * @uses PayPalEnumMerchantPullPaymentCodeType::VALUE_ECHECKONLY
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMerchantPullPaymentCodeType::VALUE_ANY,PayPalEnumMerchantPullPaymentCodeType::VALUE_INSTANTONLY,PayPalEnumMerchantPullPaymentCodeType::VALUE_ECHECKONLY));
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