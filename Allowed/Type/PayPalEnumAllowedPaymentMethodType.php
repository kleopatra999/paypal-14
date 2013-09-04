<?php
/**
 * File for class PayPalEnumAllowedPaymentMethodType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAllowedPaymentMethodType originally named AllowedPaymentMethodType
 * Documentation : AllowedPaymentMethodType This is the payment Solution merchant needs to specify for Autopay (used by Express Checkout) Optional Default indicates that its merchant supports all funding source InstantPaymentOnly indicates that its merchant only supports instant payment AnyFundingSource allow all funding methods to be chosen by the buyer irrespective of merchant's profile setting InstantFundingSource allow only instant funding methods, block echeck, meft, elevecheck. This will override any merchant profile setting
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAllowedPaymentMethodType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Default'
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constant for value 'InstantPaymentOnly'
	 * @return string 'InstantPaymentOnly'
	 */
	const VALUE_INSTANTPAYMENTONLY = 'InstantPaymentOnly';
	/**
	 * Constant for value 'AnyFundingSource'
	 * @return string 'AnyFundingSource'
	 */
	const VALUE_ANYFUNDINGSOURCE = 'AnyFundingSource';
	/**
	 * Constant for value 'InstantFundingSource'
	 * @return string 'InstantFundingSource'
	 */
	const VALUE_INSTANTFUNDINGSOURCE = 'InstantFundingSource';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAllowedPaymentMethodType::VALUE_DEFAULT
	 * @uses PayPalEnumAllowedPaymentMethodType::VALUE_INSTANTPAYMENTONLY
	 * @uses PayPalEnumAllowedPaymentMethodType::VALUE_ANYFUNDINGSOURCE
	 * @uses PayPalEnumAllowedPaymentMethodType::VALUE_INSTANTFUNDINGSOURCE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAllowedPaymentMethodType::VALUE_DEFAULT,PayPalEnumAllowedPaymentMethodType::VALUE_INSTANTPAYMENTONLY,PayPalEnumAllowedPaymentMethodType::VALUE_ANYFUNDINGSOURCE,PayPalEnumAllowedPaymentMethodType::VALUE_INSTANTFUNDINGSOURCE));
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