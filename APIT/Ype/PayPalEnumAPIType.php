<?php
/**
 * File for class PayPalEnumAPIType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAPIType originally named APIType
 * Documentation : Supported API Types for DoCancel operation
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAPIType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CHECKOUT_AUTHORIZATION'
	 * Meta informations extracted from the WSDL
	 * - documentation : POS CHECKOUT AUTHORIZATION
	 * @return string 'CHECKOUT_AUTHORIZATION'
	 */
	const VALUE_CHECKOUT_AUTHORIZATION = 'CHECKOUT_AUTHORIZATION';
	/**
	 * Constant for value 'CHECKOUT_SALE'
	 * Meta informations extracted from the WSDL
	 * - documentation : POS CHECKOUT SALE
	 * @return string 'CHECKOUT_SALE'
	 */
	const VALUE_CHECKOUT_SALE = 'CHECKOUT_SALE';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAPIType::VALUE_CHECKOUT_AUTHORIZATION
	 * @uses PayPalEnumAPIType::VALUE_CHECKOUT_SALE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAPIType::VALUE_CHECKOUT_AUTHORIZATION,PayPalEnumAPIType::VALUE_CHECKOUT_SALE));
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