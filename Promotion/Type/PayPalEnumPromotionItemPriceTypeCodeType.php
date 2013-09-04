<?php
/**
 * File for class PayPalEnumPromotionItemPriceTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPromotionItemPriceTypeCodeType originally named PromotionItemPriceTypeCodeType
 * Documentation : Cross Promotion Method.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPromotionItemPriceTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'AuctionPrice'
	 * Meta informations extracted from the WSDL
	 * - documentation : Auction Item
	 * @return string 'AuctionPrice'
	 */
	const VALUE_AUCTIONPRICE = 'AuctionPrice';
	/**
	 * Constant for value 'BuyItNowPrice'
	 * Meta informations extracted from the WSDL
	 * - documentation : Buy It Now
	 * @return string 'BuyItNowPrice'
	 */
	const VALUE_BUYITNOWPRICE = 'BuyItNowPrice';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPromotionItemPriceTypeCodeType::VALUE_AUCTIONPRICE
	 * @uses PayPalEnumPromotionItemPriceTypeCodeType::VALUE_BUYITNOWPRICE
	 * @uses PayPalEnumPromotionItemPriceTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPromotionItemPriceTypeCodeType::VALUE_AUCTIONPRICE,PayPalEnumPromotionItemPriceTypeCodeType::VALUE_BUYITNOWPRICE,PayPalEnumPromotionItemPriceTypeCodeType::VALUE_CUSTOMCODE));
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