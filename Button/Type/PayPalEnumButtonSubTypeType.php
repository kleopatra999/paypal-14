<?php
/**
 * File for class PayPalEnumButtonSubTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumButtonSubTypeType originally named ButtonSubTypeType
 * Documentation : Types of button sub types
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumButtonSubTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PRODUCTS'
	 * Meta informations extracted from the WSDL
	 * - documentation : button subtype is PRODUCTS
	 * @return string 'PRODUCTS'
	 */
	const VALUE_PRODUCTS = 'PRODUCTS';
	/**
	 * Constant for value 'SERVICES'
	 * Meta informations extracted from the WSDL
	 * - documentation : button subtype is SERVICES
	 * @return string 'SERVICES'
	 */
	const VALUE_SERVICES = 'SERVICES';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumButtonSubTypeType::VALUE_PRODUCTS
	 * @uses PayPalEnumButtonSubTypeType::VALUE_SERVICES
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumButtonSubTypeType::VALUE_PRODUCTS,PayPalEnumButtonSubTypeType::VALUE_SERVICES));
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