<?php
/**
 * File for class PayPalEnumGiftServicesCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumGiftServicesCodeType originally named GiftServicesCodeType
 * Documentation : GiftServicesCodeType - Type declaration to be used by other schema's. Specifies the codes for the various Gift Services offered by sellers. If any of the Gift Services are offered by the seller, the generic gift icon should be used to display the item: http://pics.ebay.com/aw/pics/gift/gift.gif
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumGiftServicesCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'GiftExpressShipping'
	 * Meta informations extracted from the WSDL
	 * - documentation : indicates that the seller is offering to ship the item via an express shipping method as described in the item description.
	 * @return string 'GiftExpressShipping'
	 */
	const VALUE_GIFTEXPRESSSHIPPING = 'GiftExpressShipping';
	/**
	 * Constant for value 'GiftShipToRecipient'
	 * Meta informations extracted from the WSDL
	 * - documentation : indicates that the seller is offering to ship to the gift recipient, not the buyer, when payment clears.
	 * @return string 'GiftShipToRecipient'
	 */
	const VALUE_GIFTSHIPTORECIPIENT = 'GiftShipToRecipient';
	/**
	 * Constant for value 'GiftWrap'
	 * Meta informations extracted from the WSDL
	 * - documentation : indicates that the seller is offering to wrap the item (and optionally include a card) as described in the item description.
	 * @return string 'GiftWrap'
	 */
	const VALUE_GIFTWRAP = 'GiftWrap';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumGiftServicesCodeType::VALUE_GIFTEXPRESSSHIPPING
	 * @uses PayPalEnumGiftServicesCodeType::VALUE_GIFTSHIPTORECIPIENT
	 * @uses PayPalEnumGiftServicesCodeType::VALUE_GIFTWRAP
	 * @uses PayPalEnumGiftServicesCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumGiftServicesCodeType::VALUE_GIFTEXPRESSSHIPPING,PayPalEnumGiftServicesCodeType::VALUE_GIFTSHIPTORECIPIENT,PayPalEnumGiftServicesCodeType::VALUE_GIFTWRAP,PayPalEnumGiftServicesCodeType::VALUE_CUSTOMCODE));
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