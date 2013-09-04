<?php
/**
 * File for class PayPalEnumButtonStatusType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumButtonStatusType originally named ButtonStatusType
 * Documentation : values for subscribe button text
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumButtonStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'DELETE'
	 * Meta informations extracted from the WSDL
	 * - documentation : Changes Button Status to DELETE
	 * @return string 'DELETE'
	 */
	const VALUE_DELETE = 'DELETE';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumButtonStatusType::VALUE_DELETE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumButtonStatusType::VALUE_DELETE));
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