<?php
/**
 * File for class PayPalEnumMerchantPullStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumMerchantPullStatusCodeType originally named MerchantPullStatusCodeType
 * Documentation : MerchantPullStatusCodeType Status of the merchant pull
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumMerchantPullStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Canceled'
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumMerchantPullStatusCodeType::VALUE_ACTIVE
	 * @uses PayPalEnumMerchantPullStatusCodeType::VALUE_CANCELED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumMerchantPullStatusCodeType::VALUE_ACTIVE,PayPalEnumMerchantPullStatusCodeType::VALUE_CANCELED));
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