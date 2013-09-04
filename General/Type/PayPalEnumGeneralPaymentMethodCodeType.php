<?php
/**
 * File for class PayPalEnumGeneralPaymentMethodCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumGeneralPaymentMethodCodeType originally named GeneralPaymentMethodCodeType
 * Documentation : GeneralPaymentMethodCodeType - Type declaration to be used by other schema. This code identifies the general types of payment means, e.g., used by payment service provider applications.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumGeneralPaymentMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom Code
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Echeck'
	 * Meta informations extracted from the WSDL
	 * - documentation : Electronic check.
	 * @return string 'Echeck'
	 */
	const VALUE_ECHECK = 'Echeck';
	/**
	 * Constant for value 'ACH'
	 * Meta informations extracted from the WSDL
	 * - documentation : ACH.
	 * @return string 'ACH'
	 */
	const VALUE_ACH = 'ACH';
	/**
	 * Constant for value 'Creditcard'
	 * Meta informations extracted from the WSDL
	 * - documentation : Credit-card.
	 * @return string 'Creditcard'
	 */
	const VALUE_CREDITCARD = 'Creditcard';
	/**
	 * Constant for value 'PayPalBalance'
	 * Meta informations extracted from the WSDL
	 * - documentation : Pay balance.
	 * @return string 'PayPalBalance'
	 */
	const VALUE_PAYPALBALANCE = 'PayPalBalance';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumGeneralPaymentMethodCodeType::VALUE_OTHER
	 * @uses PayPalEnumGeneralPaymentMethodCodeType::VALUE_ECHECK
	 * @uses PayPalEnumGeneralPaymentMethodCodeType::VALUE_ACH
	 * @uses PayPalEnumGeneralPaymentMethodCodeType::VALUE_CREDITCARD
	 * @uses PayPalEnumGeneralPaymentMethodCodeType::VALUE_PAYPALBALANCE
	 * @uses PayPalEnumGeneralPaymentMethodCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumGeneralPaymentMethodCodeType::VALUE_OTHER,PayPalEnumGeneralPaymentMethodCodeType::VALUE_ECHECK,PayPalEnumGeneralPaymentMethodCodeType::VALUE_ACH,PayPalEnumGeneralPaymentMethodCodeType::VALUE_CREDITCARD,PayPalEnumGeneralPaymentMethodCodeType::VALUE_PAYPALBALANCE,PayPalEnumGeneralPaymentMethodCodeType::VALUE_CUSTOMCODE));
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