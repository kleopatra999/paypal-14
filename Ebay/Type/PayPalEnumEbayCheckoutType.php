<?php
/**
 * File for class PayPalEnumEbayCheckoutType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumEbayCheckoutType originally named EbayCheckoutType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumEbayCheckoutType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'Auction'
	 * @return string 'Auction'
	 */
	const VALUE_AUCTION = 'Auction';
	/**
	 * Constant for value 'BuyItNow'
	 * @return string 'BuyItNow'
	 */
	const VALUE_BUYITNOW = 'BuyItNow';
	/**
	 * Constant for value 'FixedPriceItem'
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'Autopay'
	 * @return string 'Autopay'
	 */
	const VALUE_AUTOPAY = 'Autopay';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumEbayCheckoutType::VALUE_NONE
	 * @uses PayPalEnumEbayCheckoutType::VALUE_AUCTION
	 * @uses PayPalEnumEbayCheckoutType::VALUE_BUYITNOW
	 * @uses PayPalEnumEbayCheckoutType::VALUE_FIXEDPRICEITEM
	 * @uses PayPalEnumEbayCheckoutType::VALUE_AUTOPAY
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumEbayCheckoutType::VALUE_NONE,PayPalEnumEbayCheckoutType::VALUE_AUCTION,PayPalEnumEbayCheckoutType::VALUE_BUYITNOW,PayPalEnumEbayCheckoutType::VALUE_FIXEDPRICEITEM,PayPalEnumEbayCheckoutType::VALUE_AUTOPAY));
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