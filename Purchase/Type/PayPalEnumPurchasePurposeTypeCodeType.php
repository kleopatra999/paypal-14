<?php
/**
 * File for class PayPalEnumPurchasePurposeTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPurchasePurposeTypeCodeType originally named PurchasePurposeTypeCodeType
 * Documentation : PurchasePurposeTypeCodeType - Type declaration to be used by other schema. This code identifies the purpose of purchases, e.g., by a PayPal application.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPurchasePurposeTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom Code
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'BuyNowItem'
	 * @return string 'BuyNowItem'
	 */
	const VALUE_BUYNOWITEM = 'BuyNowItem';
	/**
	 * Constant for value 'ShoppingCart'
	 * @return string 'ShoppingCart'
	 */
	const VALUE_SHOPPINGCART = 'ShoppingCart';
	/**
	 * Constant for value 'AuctionItem'
	 * @return string 'AuctionItem'
	 */
	const VALUE_AUCTIONITEM = 'AuctionItem';
	/**
	 * Constant for value 'GiftCertificates'
	 * @return string 'GiftCertificates'
	 */
	const VALUE_GIFTCERTIFICATES = 'GiftCertificates';
	/**
	 * Constant for value 'Subscription'
	 * @return string 'Subscription'
	 */
	const VALUE_SUBSCRIPTION = 'Subscription';
	/**
	 * Constant for value 'Donation'
	 * @return string 'Donation'
	 */
	const VALUE_DONATION = 'Donation';
	/**
	 * Constant for value 'eBayBilling'
	 * @return string 'eBayBilling'
	 */
	const VALUE_EBAYBILLING = 'eBayBilling';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_OTHER
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_BUYNOWITEM
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_SHOPPINGCART
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_AUCTIONITEM
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_GIFTCERTIFICATES
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_SUBSCRIPTION
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_DONATION
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_EBAYBILLING
	 * @uses PayPalEnumPurchasePurposeTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPurchasePurposeTypeCodeType::VALUE_OTHER,PayPalEnumPurchasePurposeTypeCodeType::VALUE_BUYNOWITEM,PayPalEnumPurchasePurposeTypeCodeType::VALUE_SHOPPINGCART,PayPalEnumPurchasePurposeTypeCodeType::VALUE_AUCTIONITEM,PayPalEnumPurchasePurposeTypeCodeType::VALUE_GIFTCERTIFICATES,PayPalEnumPurchasePurposeTypeCodeType::VALUE_SUBSCRIPTION,PayPalEnumPurchasePurposeTypeCodeType::VALUE_DONATION,PayPalEnumPurchasePurposeTypeCodeType::VALUE_EBAYBILLING,PayPalEnumPurchasePurposeTypeCodeType::VALUE_CUSTOMCODE));
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