<?php
/**
 * File for class PayPalEnumDyneticClientType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumDyneticClientType originally named DyneticClientType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumDyneticClientType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'WAP'
	 * @return string 'WAP'
	 */
	const VALUE_WAP = 'WAP';
	/**
	 * Constant for value 'J2MEClient'
	 * @return string 'J2MEClient'
	 */
	const VALUE_J2MECLIENT = 'J2MEClient';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumDyneticClientType::VALUE_NONE
	 * @uses PayPalEnumDyneticClientType::VALUE_WAP
	 * @uses PayPalEnumDyneticClientType::VALUE_J2MECLIENT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumDyneticClientType::VALUE_NONE,PayPalEnumDyneticClientType::VALUE_WAP,PayPalEnumDyneticClientType::VALUE_J2MECLIENT));
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