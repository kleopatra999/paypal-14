<?php
/**
 * File for class PayPalEnumMerchandizingPrefCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMerchandizingPrefCodeType originally named MerchandizingPrefCodeType
 * Documentation : MerchandizingPrefCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMerchandizingPrefCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'OptIn'
	 * Meta informations extracted from the WSDL
	 * - documentation : OptIn
	 * @return string 'OptIn'
	 */
	const VALUE_OPTIN = 'OptIn';
	/**
	 * Constant for value 'OptOut'
	 * Meta informations extracted from the WSDL
	 * - documentation : OptOut
	 * @return string 'OptOut'
	 */
	const VALUE_OPTOUT = 'OptOut';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMerchandizingPrefCodeType::VALUE_OPTIN
	 * @uses PayPalEnumMerchandizingPrefCodeType::VALUE_OPTOUT
	 * @uses PayPalEnumMerchandizingPrefCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMerchandizingPrefCodeType::VALUE_OPTIN,PayPalEnumMerchandizingPrefCodeType::VALUE_OPTOUT,PayPalEnumMerchandizingPrefCodeType::VALUE_CUSTOMCODE));
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