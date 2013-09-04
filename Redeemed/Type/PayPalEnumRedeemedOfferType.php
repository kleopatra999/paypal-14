<?php
/**
 * File for class PayPalEnumRedeemedOfferType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumRedeemedOfferType originally named RedeemedOfferType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumRedeemedOfferType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'MERCHANT_COUPON'
	 * @return string 'MERCHANT_COUPON'
	 */
	const VALUE_MERCHANT_COUPON = 'MERCHANT_COUPON';
	/**
	 * Constant for value 'LOYALTY_CARD'
	 * @return string 'LOYALTY_CARD'
	 */
	const VALUE_LOYALTY_CARD = 'LOYALTY_CARD';
	/**
	 * Constant for value 'MANUFACTURER_COUPON'
	 * @return string 'MANUFACTURER_COUPON'
	 */
	const VALUE_MANUFACTURER_COUPON = 'MANUFACTURER_COUPON';
	/**
	 * Constant for value 'RESERVED'
	 * @return string 'RESERVED'
	 */
	const VALUE_RESERVED = 'RESERVED';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumRedeemedOfferType::VALUE_MERCHANT_COUPON
	 * @uses PayPalEnumRedeemedOfferType::VALUE_LOYALTY_CARD
	 * @uses PayPalEnumRedeemedOfferType::VALUE_MANUFACTURER_COUPON
	 * @uses PayPalEnumRedeemedOfferType::VALUE_RESERVED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumRedeemedOfferType::VALUE_MERCHANT_COUPON,PayPalEnumRedeemedOfferType::VALUE_LOYALTY_CARD,PayPalEnumRedeemedOfferType::VALUE_MANUFACTURER_COUPON,PayPalEnumRedeemedOfferType::VALUE_RESERVED));
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