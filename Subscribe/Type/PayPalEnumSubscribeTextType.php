<?php
/**
 * File for class PayPalEnumSubscribeTextType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSubscribeTextType originally named SubscribeTextType
 * Documentation : values for subscribe button text
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSubscribeTextType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BUYNOW'
	 * Meta informations extracted from the WSDL
	 * - documentation : button wording is BUYNOW
	 * @return string 'BUYNOW'
	 */
	const VALUE_BUYNOW = 'BUYNOW';
	/**
	 * Constant for value 'SUBSCRIBE'
	 * Meta informations extracted from the WSDL
	 * - documentation : button wording is SUBSCRIBE
	 * @return string 'SUBSCRIBE'
	 */
	const VALUE_SUBSCRIBE = 'SUBSCRIBE';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSubscribeTextType::VALUE_BUYNOW
	 * @uses PayPalEnumSubscribeTextType::VALUE_SUBSCRIBE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSubscribeTextType::VALUE_BUYNOW,PayPalEnumSubscribeTextType::VALUE_SUBSCRIBE));
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