<?php
/**
 * File for class PayPalEnumPaymentCategoryType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentCategoryType originally named PaymentCategoryType
 * Documentation : Category of payment like international shipping
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'InternationalShipping'
	 * Meta informations extracted from the WSDL
	 * - documentation : Internalnation Shipping
	 * @return string 'InternationalShipping'
	 */
	const VALUE_INTERNATIONALSHIPPING = 'InternationalShipping';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentCategoryType::VALUE_INTERNATIONALSHIPPING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentCategoryType::VALUE_INTERNATIONALSHIPPING));
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