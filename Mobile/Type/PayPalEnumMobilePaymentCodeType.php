<?php
/**
 * File for class PayPalEnumMobilePaymentCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMobilePaymentCodeType originally named MobilePaymentCodeType
 * Documentation : MobilePaymentCodeType These are the accepted types of mobile payments
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMobilePaymentCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'P2P'
	 * @return string 'P2P'
	 */
	const VALUE_P2P = 'P2P';
	/**
	 * Constant for value 'HardGoods'
	 * @return string 'HardGoods'
	 */
	const VALUE_HARDGOODS = 'HardGoods';
	/**
	 * Constant for value 'Donation'
	 * @return string 'Donation'
	 */
	const VALUE_DONATION = 'Donation';
	/**
	 * Constant for value 'TopUp'
	 * @return string 'TopUp'
	 */
	const VALUE_TOPUP = 'TopUp';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMobilePaymentCodeType::VALUE_P2P
	 * @uses PayPalEnumMobilePaymentCodeType::VALUE_HARDGOODS
	 * @uses PayPalEnumMobilePaymentCodeType::VALUE_DONATION
	 * @uses PayPalEnumMobilePaymentCodeType::VALUE_TOPUP
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMobilePaymentCodeType::VALUE_P2P,PayPalEnumMobilePaymentCodeType::VALUE_HARDGOODS,PayPalEnumMobilePaymentCodeType::VALUE_DONATION,PayPalEnumMobilePaymentCodeType::VALUE_TOPUP));
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