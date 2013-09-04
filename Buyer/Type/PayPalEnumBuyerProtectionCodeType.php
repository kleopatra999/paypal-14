<?php
/**
 * File for class PayPalEnumBuyerProtectionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBuyerProtectionCodeType originally named BuyerProtectionCodeType
 * Documentation : BuyerProtectionCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBuyerProtectionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ItemIneligible'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item is ineligible (e.g., category not applicable).
	 * @return string 'ItemIneligible'
	 */
	const VALUE_ITEMINELIGIBLE = 'ItemIneligible';
	/**
	 * Constant for value 'ItemEligible'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item is eligible per standard criteria.
	 * @return string 'ItemEligible'
	 */
	const VALUE_ITEMELIGIBLE = 'ItemEligible';
	/**
	 * Constant for value 'ItemMarkedIneligible'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item marked ineligible per special criteria (e.g., seller's account closed).
	 * @return string 'ItemMarkedIneligible'
	 */
	const VALUE_ITEMMARKEDINELIGIBLE = 'ItemMarkedIneligible';
	/**
	 * Constant for value 'ItemMarkedEligible'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item marked eligible per other criteria.
	 * @return string 'ItemMarkedEligible'
	 */
	const VALUE_ITEMMARKEDELIGIBLE = 'ItemMarkedEligible';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBuyerProtectionCodeType::VALUE_ITEMINELIGIBLE
	 * @uses PayPalEnumBuyerProtectionCodeType::VALUE_ITEMELIGIBLE
	 * @uses PayPalEnumBuyerProtectionCodeType::VALUE_ITEMMARKEDINELIGIBLE
	 * @uses PayPalEnumBuyerProtectionCodeType::VALUE_ITEMMARKEDELIGIBLE
	 * @uses PayPalEnumBuyerProtectionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBuyerProtectionCodeType::VALUE_ITEMINELIGIBLE,PayPalEnumBuyerProtectionCodeType::VALUE_ITEMELIGIBLE,PayPalEnumBuyerProtectionCodeType::VALUE_ITEMMARKEDINELIGIBLE,PayPalEnumBuyerProtectionCodeType::VALUE_ITEMMARKEDELIGIBLE,PayPalEnumBuyerProtectionCodeType::VALUE_CUSTOMCODE));
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