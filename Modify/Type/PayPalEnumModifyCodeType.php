<?php
/**
 * File for class PayPalEnumModifyCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumModifyCodeType originally named ModifyCodeType
 * Documentation : ModifyCodeType This code identifies the types of modification you can make on an object. account.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumModifyCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Dropped'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicate filed is to be dropped.
	 * @return string 'Dropped'
	 */
	const VALUE_DROPPED = 'Dropped';
	/**
	 * Constant for value 'Modify'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicate filed is to be modified.
	 * @return string 'Modify'
	 */
	const VALUE_MODIFY = 'Modify';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumModifyCodeType::VALUE_DROPPED
	 * @uses PayPalEnumModifyCodeType::VALUE_MODIFY
	 * @uses PayPalEnumModifyCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumModifyCodeType::VALUE_DROPPED,PayPalEnumModifyCodeType::VALUE_MODIFY,PayPalEnumModifyCodeType::VALUE_CUSTOMCODE));
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