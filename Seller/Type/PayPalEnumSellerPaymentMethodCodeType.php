<?php
/**
 * File for class PayPalEnumSellerPaymentMethodCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSellerPaymentMethodCodeType originally named SellerPaymentMethodCodeType
 * Documentation : SellerPaymentMethodCodeType These are payment methods that sellers can use to pay eBay.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSellerPaymentMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations extracted from the WSDL
	 * - documentation : No payment method specified - some other payment method.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Amex'
	 * Meta informations extracted from the WSDL
	 * - documentation : Amex
	 * @return string 'Amex'
	 */
	const VALUE_AMEX = 'Amex';
	/**
	 * Constant for value 'Visa'
	 * Meta informations extracted from the WSDL
	 * - documentation : Visa
	 * @return string 'Visa'
	 */
	const VALUE_VISA = 'Visa';
	/**
	 * Constant for value 'Mastercard'
	 * Meta informations extracted from the WSDL
	 * - documentation : Mastercard
	 * @return string 'Mastercard'
	 */
	const VALUE_MASTERCARD = 'Mastercard';
	/**
	 * Constant for value 'Discover'
	 * Meta informations extracted from the WSDL
	 * - documentation : Discover
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'JCB'
	 * Meta informations extracted from the WSDL
	 * - documentation : JCB
	 * @return string 'JCB'
	 */
	const VALUE_JCB = 'JCB';
	/**
	 * Constant for value 'Diners'
	 * Meta informations extracted from the WSDL
	 * - documentation : Diners
	 * @return string 'Diners'
	 */
	const VALUE_DINERS = 'Diners';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_OTHER
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_AMEX
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_VISA
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_MASTERCARD
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_DISCOVER
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_JCB
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_DINERS
	 * @uses PayPalEnumSellerPaymentMethodCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSellerPaymentMethodCodeType::VALUE_OTHER,PayPalEnumSellerPaymentMethodCodeType::VALUE_AMEX,PayPalEnumSellerPaymentMethodCodeType::VALUE_VISA,PayPalEnumSellerPaymentMethodCodeType::VALUE_MASTERCARD,PayPalEnumSellerPaymentMethodCodeType::VALUE_DISCOVER,PayPalEnumSellerPaymentMethodCodeType::VALUE_JCB,PayPalEnumSellerPaymentMethodCodeType::VALUE_DINERS,PayPalEnumSellerPaymentMethodCodeType::VALUE_CUSTOMCODE));
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