<?php
/**
 * File for class PayPalEnumBillingCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBillingCodeType originally named BillingCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBillingCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MerchantInitiatedBilling'
	 * @return string 'MerchantInitiatedBilling'
	 */
	const VALUE_MERCHANTINITIATEDBILLING = 'MerchantInitiatedBilling';
	/**
	 * Constant for value 'RecurringPayments'
	 * @return string 'RecurringPayments'
	 */
	const VALUE_RECURRINGPAYMENTS = 'RecurringPayments';
	/**
	 * Constant for value 'MerchantInitiatedBillingSingleAgreement'
	 * @return string 'MerchantInitiatedBillingSingleAgreement'
	 */
	const VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT = 'MerchantInitiatedBillingSingleAgreement';
	/**
	 * Constant for value 'ChannelInitiatedBilling'
	 * @return string 'ChannelInitiatedBilling'
	 */
	const VALUE_CHANNELINITIATEDBILLING = 'ChannelInitiatedBilling';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBillingCodeType::VALUE_NONE
	 * @uses PayPalEnumBillingCodeType::VALUE_MERCHANTINITIATEDBILLING
	 * @uses PayPalEnumBillingCodeType::VALUE_RECURRINGPAYMENTS
	 * @uses PayPalEnumBillingCodeType::VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT
	 * @uses PayPalEnumBillingCodeType::VALUE_CHANNELINITIATEDBILLING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBillingCodeType::VALUE_NONE,PayPalEnumBillingCodeType::VALUE_MERCHANTINITIATEDBILLING,PayPalEnumBillingCodeType::VALUE_RECURRINGPAYMENTS,PayPalEnumBillingCodeType::VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT,PayPalEnumBillingCodeType::VALUE_CHANNELINITIATEDBILLING));
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