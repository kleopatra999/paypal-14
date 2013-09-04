<?php
/**
 * File for class PayPalEnumButtonTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumButtonTypeType originally named ButtonTypeType
 * Documentation : Types of buttons
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumButtonTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BUYNOW'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is BUYNOW
	 * @return string 'BUYNOW'
	 */
	const VALUE_BUYNOW = 'BUYNOW';
	/**
	 * Constant for value 'CART'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is CART
	 * @return string 'CART'
	 */
	const VALUE_CART = 'CART';
	/**
	 * Constant for value 'GIFTCERTIFICATE'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is GIFTCERTIFICATE
	 * @return string 'GIFTCERTIFICATE'
	 */
	const VALUE_GIFTCERTIFICATE = 'GIFTCERTIFICATE';
	/**
	 * Constant for value 'SUBSCRIBE'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is SUBSCRIBE
	 * @return string 'SUBSCRIBE'
	 */
	const VALUE_SUBSCRIBE = 'SUBSCRIBE';
	/**
	 * Constant for value 'DONATE'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is DONATE
	 * @return string 'DONATE'
	 */
	const VALUE_DONATE = 'DONATE';
	/**
	 * Constant for value 'UNSUBSCRIBE'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is UNSUBSCRIBE
	 * @return string 'UNSUBSCRIBE'
	 */
	const VALUE_UNSUBSCRIBE = 'UNSUBSCRIBE';
	/**
	 * Constant for value 'VIEWCART'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is VIEWCART
	 * @return string 'VIEWCART'
	 */
	const VALUE_VIEWCART = 'VIEWCART';
	/**
	 * Constant for value 'PAYMENTPLAN'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is PAYMENTPLAN
	 * @return string 'PAYMENTPLAN'
	 */
	const VALUE_PAYMENTPLAN = 'PAYMENTPLAN';
	/**
	 * Constant for value 'AUTOBILLING'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is AUTOBILLING
	 * @return string 'AUTOBILLING'
	 */
	const VALUE_AUTOBILLING = 'AUTOBILLING';
	/**
	 * Constant for value 'PAYMENT'
	 * Meta informations extracted from the WSDL
	 * - documentation : button type is PAYMENT
	 * @return string 'PAYMENT'
	 */
	const VALUE_PAYMENT = 'PAYMENT';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumButtonTypeType::VALUE_BUYNOW
	 * @uses PayPalEnumButtonTypeType::VALUE_CART
	 * @uses PayPalEnumButtonTypeType::VALUE_GIFTCERTIFICATE
	 * @uses PayPalEnumButtonTypeType::VALUE_SUBSCRIBE
	 * @uses PayPalEnumButtonTypeType::VALUE_DONATE
	 * @uses PayPalEnumButtonTypeType::VALUE_UNSUBSCRIBE
	 * @uses PayPalEnumButtonTypeType::VALUE_VIEWCART
	 * @uses PayPalEnumButtonTypeType::VALUE_PAYMENTPLAN
	 * @uses PayPalEnumButtonTypeType::VALUE_AUTOBILLING
	 * @uses PayPalEnumButtonTypeType::VALUE_PAYMENT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumButtonTypeType::VALUE_BUYNOW,PayPalEnumButtonTypeType::VALUE_CART,PayPalEnumButtonTypeType::VALUE_GIFTCERTIFICATE,PayPalEnumButtonTypeType::VALUE_SUBSCRIBE,PayPalEnumButtonTypeType::VALUE_DONATE,PayPalEnumButtonTypeType::VALUE_UNSUBSCRIBE,PayPalEnumButtonTypeType::VALUE_VIEWCART,PayPalEnumButtonTypeType::VALUE_PAYMENTPLAN,PayPalEnumButtonTypeType::VALUE_AUTOBILLING,PayPalEnumButtonTypeType::VALUE_PAYMENT));
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