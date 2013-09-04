<?php
/**
 * File for class PayPalEnumPaymentNotificationServiceCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentNotificationServiceCodeType originally named PaymentNotificationServiceCodeType
 * Documentation : PaymentNotificationService For SetPaymentStatus API, this value should always be eBayCN.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentNotificationServiceCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'eBayCN'
	 * @return string 'eBayCN'
	 */
	const VALUE_EBAYCN = 'eBayCN';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentNotificationServiceCodeType::VALUE_EBAYCN
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentNotificationServiceCodeType::VALUE_EBAYCN));
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