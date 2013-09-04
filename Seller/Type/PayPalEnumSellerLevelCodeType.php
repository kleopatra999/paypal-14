<?php
/**
 * File for class PayPalEnumSellerLevelCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumSellerLevelCodeType originally named SellerLevelCodeType
 * Documentation : SellerLevelCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumSellerLevelCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Bronze'
	 * Meta informations extracted from the WSDL
	 * - documentation : Bronze
	 * @return string 'Bronze'
	 */
	const VALUE_BRONZE = 'Bronze';
	/**
	 * Constant for value 'Silver'
	 * Meta informations extracted from the WSDL
	 * - documentation : Silver
	 * @return string 'Silver'
	 */
	const VALUE_SILVER = 'Silver';
	/**
	 * Constant for value 'Gold'
	 * Meta informations extracted from the WSDL
	 * - documentation : Gold
	 * @return string 'Gold'
	 */
	const VALUE_GOLD = 'Gold';
	/**
	 * Constant for value 'Platinum'
	 * Meta informations extracted from the WSDL
	 * - documentation : Platinum
	 * @return string 'Platinum'
	 */
	const VALUE_PLATINUM = 'Platinum';
	/**
	 * Constant for value 'Titanium'
	 * Meta informations extracted from the WSDL
	 * - documentation : Titanium
	 * @return string 'Titanium'
	 */
	const VALUE_TITANIUM = 'Titanium';
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : None
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_BRONZE
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_SILVER
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_GOLD
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_PLATINUM
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_TITANIUM
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_NONE
	 * @uses PayPalEnumSellerLevelCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumSellerLevelCodeType::VALUE_BRONZE,PayPalEnumSellerLevelCodeType::VALUE_SILVER,PayPalEnumSellerLevelCodeType::VALUE_GOLD,PayPalEnumSellerLevelCodeType::VALUE_PLATINUM,PayPalEnumSellerLevelCodeType::VALUE_TITANIUM,PayPalEnumSellerLevelCodeType::VALUE_NONE,PayPalEnumSellerLevelCodeType::VALUE_CUSTOMCODE));
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