<?php
/**
 * File for class PayPalEnumPaymentReasonType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumPaymentReasonType originally named PaymentReasonType
 * Documentation : PaymentReasonType This is the Payment Reason type (used by DoRT and SetEC for Refund of PI transaction, eBay return shipment, external dispute)
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumPaymentReasonType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Refund'
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'ReturnShipment'
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifies a BA flow for return shipment
	 * @return string 'ReturnShipment'
	 */
	const VALUE_RETURNSHIPMENT = 'ReturnShipment';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumPaymentReasonType::VALUE_NONE
	 * @uses PayPalEnumPaymentReasonType::VALUE_REFUND
	 * @uses PayPalEnumPaymentReasonType::VALUE_RETURNSHIPMENT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumPaymentReasonType::VALUE_NONE,PayPalEnumPaymentReasonType::VALUE_REFUND,PayPalEnumPaymentReasonType::VALUE_RETURNSHIPMENT));
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