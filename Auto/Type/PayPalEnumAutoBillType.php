<?php
/**
 * File for class PayPalEnumAutoBillType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAutoBillType originally named AutoBillType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAutoBillType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoAutoBill'
	 * @return string 'NoAutoBill'
	 */
	const VALUE_NOAUTOBILL = 'NoAutoBill';
	/**
	 * Constant for value 'AddToNextBilling'
	 * @return string 'AddToNextBilling'
	 */
	const VALUE_ADDTONEXTBILLING = 'AddToNextBilling';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAutoBillType::VALUE_NOAUTOBILL
	 * @uses PayPalEnumAutoBillType::VALUE_ADDTONEXTBILLING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAutoBillType::VALUE_NOAUTOBILL,PayPalEnumAutoBillType::VALUE_ADDTONEXTBILLING));
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