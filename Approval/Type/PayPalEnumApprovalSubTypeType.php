<?php
/**
 * File for class PayPalEnumApprovalSubTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumApprovalSubTypeType originally named ApprovalSubTypeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumApprovalSubTypeType extends PayPalWsdlClass
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
	 * @uses PayPalEnumApprovalSubTypeType::VALUE_NONE
	 * @uses PayPalEnumApprovalSubTypeType::VALUE_MERCHANTINITIATEDBILLING
	 * @uses PayPalEnumApprovalSubTypeType::VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT
	 * @uses PayPalEnumApprovalSubTypeType::VALUE_CHANNELINITIATEDBILLING
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumApprovalSubTypeType::VALUE_NONE,PayPalEnumApprovalSubTypeType::VALUE_MERCHANTINITIATEDBILLING,PayPalEnumApprovalSubTypeType::VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT,PayPalEnumApprovalSubTypeType::VALUE_CHANNELINITIATEDBILLING));
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