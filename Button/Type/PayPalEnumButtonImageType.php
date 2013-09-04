<?php
/**
 * File for class PayPalEnumButtonImageType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumButtonImageType originally named ButtonImageType
 * Documentation : Types of button images
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumButtonImageType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'REG'
	 * Meta informations extracted from the WSDL
	 * - documentation : button image type is REG
	 * @return string 'REG'
	 */
	const VALUE_REG = 'REG';
	/**
	 * Constant for value 'SML'
	 * Meta informations extracted from the WSDL
	 * - documentation : button image type is SML
	 * @return string 'SML'
	 */
	const VALUE_SML = 'SML';
	/**
	 * Constant for value 'CC'
	 * Meta informations extracted from the WSDL
	 * - documentation : button image type is CC
	 * @return string 'CC'
	 */
	const VALUE_CC = 'CC';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumButtonImageType::VALUE_REG
	 * @uses PayPalEnumButtonImageType::VALUE_SML
	 * @uses PayPalEnumButtonImageType::VALUE_CC
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumButtonImageType::VALUE_REG,PayPalEnumButtonImageType::VALUE_SML,PayPalEnumButtonImageType::VALUE_CC));
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