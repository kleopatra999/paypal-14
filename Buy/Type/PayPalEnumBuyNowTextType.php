<?php
/**
 * File for class PayPalEnumBuyNowTextType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBuyNowTextType originally named BuyNowTextType
 * Documentation : values for buynow button text
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBuyNowTextType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BUYNOW'
	 * Meta informations extracted from the WSDL
	 * - documentation : button wording is BUYNOW
	 * @return string 'BUYNOW'
	 */
	const VALUE_BUYNOW = 'BUYNOW';
	/**
	 * Constant for value 'PAYNOW'
	 * Meta informations extracted from the WSDL
	 * - documentation : button wording is PAYNOW
	 * @return string 'PAYNOW'
	 */
	const VALUE_PAYNOW = 'PAYNOW';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBuyNowTextType::VALUE_BUYNOW
	 * @uses PayPalEnumBuyNowTextType::VALUE_PAYNOW
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBuyNowTextType::VALUE_BUYNOW,PayPalEnumBuyNowTextType::VALUE_PAYNOW));
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