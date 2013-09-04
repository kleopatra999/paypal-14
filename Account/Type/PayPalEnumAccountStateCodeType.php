<?php
/**
 * File for class PayPalEnumAccountStateCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAccountStateCodeType originally named AccountStateCodeType
 * Documentation : AccountStateCodeType These are the possible codes to describe the state of an account of an eBay user.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAccountStateCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations extracted from the WSDL
	 * - documentation : Amex
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Pending'
	 * Meta informations extracted from the WSDL
	 * - documentation : Visa
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Inactive'
	 * Meta informations extracted from the WSDL
	 * - documentation : Mastercard
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAccountStateCodeType::VALUE_ACTIVE
	 * @uses PayPalEnumAccountStateCodeType::VALUE_PENDING
	 * @uses PayPalEnumAccountStateCodeType::VALUE_INACTIVE
	 * @uses PayPalEnumAccountStateCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAccountStateCodeType::VALUE_ACTIVE,PayPalEnumAccountStateCodeType::VALUE_PENDING,PayPalEnumAccountStateCodeType::VALUE_INACTIVE,PayPalEnumAccountStateCodeType::VALUE_CUSTOMCODE));
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