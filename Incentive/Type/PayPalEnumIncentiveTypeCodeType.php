<?php
/**
 * File for class PayPalEnumIncentiveTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumIncentiveTypeCodeType originally named IncentiveTypeCodeType
 * Documentation : IncentiveType This identifies the type of INCENTIVE for the redemption code.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumIncentiveTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Coupon'
	 * @return string 'Coupon'
	 */
	const VALUE_COUPON = 'Coupon';
	/**
	 * Constant for value 'eBayGiftCertificate'
	 * @return string 'eBayGiftCertificate'
	 */
	const VALUE_EBAYGIFTCERTIFICATE = 'eBayGiftCertificate';
	/**
	 * Constant for value 'eBayGiftCard'
	 * @return string 'eBayGiftCard'
	 */
	const VALUE_EBAYGIFTCARD = 'eBayGiftCard';
	/**
	 * Constant for value 'PayPalRewardVoucher'
	 * @return string 'PayPalRewardVoucher'
	 */
	const VALUE_PAYPALREWARDVOUCHER = 'PayPalRewardVoucher';
	/**
	 * Constant for value 'MerchantGiftCertificate'
	 * @return string 'MerchantGiftCertificate'
	 */
	const VALUE_MERCHANTGIFTCERTIFICATE = 'MerchantGiftCertificate';
	/**
	 * Constant for value 'eBayRewardVoucher'
	 * @return string 'eBayRewardVoucher'
	 */
	const VALUE_EBAYREWARDVOUCHER = 'eBayRewardVoucher';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumIncentiveTypeCodeType::VALUE_COUPON
	 * @uses PayPalEnumIncentiveTypeCodeType::VALUE_EBAYGIFTCERTIFICATE
	 * @uses PayPalEnumIncentiveTypeCodeType::VALUE_EBAYGIFTCARD
	 * @uses PayPalEnumIncentiveTypeCodeType::VALUE_PAYPALREWARDVOUCHER
	 * @uses PayPalEnumIncentiveTypeCodeType::VALUE_MERCHANTGIFTCERTIFICATE
	 * @uses PayPalEnumIncentiveTypeCodeType::VALUE_EBAYREWARDVOUCHER
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumIncentiveTypeCodeType::VALUE_COUPON,PayPalEnumIncentiveTypeCodeType::VALUE_EBAYGIFTCERTIFICATE,PayPalEnumIncentiveTypeCodeType::VALUE_EBAYGIFTCARD,PayPalEnumIncentiveTypeCodeType::VALUE_PAYPALREWARDVOUCHER,PayPalEnumIncentiveTypeCodeType::VALUE_MERCHANTGIFTCERTIFICATE,PayPalEnumIncentiveTypeCodeType::VALUE_EBAYREWARDVOUCHER));
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