<?php
/**
 * File for class PayPalEnumChannelType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumChannelType originally named ChannelType
 * Documentation : ChannelType - Type declaration to be used by other schemas. This is the PayPal Channel type (used by Express Checkout)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumChannelType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Merchant'
	 * @return string 'Merchant'
	 */
	const VALUE_MERCHANT = 'Merchant';
	/**
	 * Constant for value 'eBayItem'
	 * @return string 'eBayItem'
	 */
	const VALUE_EBAYITEM = 'eBayItem';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumChannelType::VALUE_MERCHANT
	 * @uses PayPalEnumChannelType::VALUE_EBAYITEM
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumChannelType::VALUE_MERCHANT,PayPalEnumChannelType::VALUE_EBAYITEM));
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