<?php
/**
 * File for class PayPalEnumDetailLevelCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumDetailLevelCodeType originally named DetailLevelCodeType
 * Documentation : DetailLevelCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumDetailLevelCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ReturnAll'
	 * Meta informations extracted from the WSDL
	 * - documentation : Return in response message all detail levels.
	 * @return string 'ReturnAll'
	 */
	const VALUE_RETURNALL = 'ReturnAll';
	/**
	 * Constant for value 'ItemReturnDescription'
	 * Meta informations extracted from the WSDL
	 * - documentation : Return item description.
	 * @return string 'ItemReturnDescription'
	 */
	const VALUE_ITEMRETURNDESCRIPTION = 'ItemReturnDescription';
	/**
	 * Constant for value 'ItemReturnAttributes'
	 * Meta informations extracted from the WSDL
	 * - documentation : Return attributes as part of the item.
	 * @return string 'ItemReturnAttributes'
	 */
	const VALUE_ITEMRETURNATTRIBUTES = 'ItemReturnAttributes';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumDetailLevelCodeType::VALUE_RETURNALL
	 * @uses PayPalEnumDetailLevelCodeType::VALUE_ITEMRETURNDESCRIPTION
	 * @uses PayPalEnumDetailLevelCodeType::VALUE_ITEMRETURNATTRIBUTES
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumDetailLevelCodeType::VALUE_RETURNALL,PayPalEnumDetailLevelCodeType::VALUE_ITEMRETURNDESCRIPTION,PayPalEnumDetailLevelCodeType::VALUE_ITEMRETURNATTRIBUTES));
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