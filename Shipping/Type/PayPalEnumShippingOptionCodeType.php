<?php
/**
 * File for class PayPalEnumShippingOptionCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumShippingOptionCodeType originally named ShippingOptionCodeType
 * Documentation : ShippingOptionCodeType These are the possible codes to describe shipping options in terms of where the seller is willing to ship the item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumShippingOptionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'SiteOnly'
	 * Meta informations extracted from the WSDL
	 * - documentation : Site only.
	 * @return string 'SiteOnly'
	 */
	const VALUE_SITEONLY = 'SiteOnly';
	/**
	 * Constant for value 'WorldWide'
	 * Meta informations extracted from the WSDL
	 * - documentation : WorldWide.
	 * @return string 'WorldWide'
	 */
	const VALUE_WORLDWIDE = 'WorldWide';
	/**
	 * Constant for value 'SitePlusRegions'
	 * Meta informations extracted from the WSDL
	 * - documentation : SitePlusRegions.
	 * @return string 'SitePlusRegions'
	 */
	const VALUE_SITEPLUSREGIONS = 'SitePlusRegions';
	/**
	 * Constant for value 'WillNotShip'
	 * Meta informations extracted from the WSDL
	 * - documentation : WillNotShip.
	 * @return string 'WillNotShip'
	 */
	const VALUE_WILLNOTSHIP = 'WillNotShip';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumShippingOptionCodeType::VALUE_SITEONLY
	 * @uses PayPalEnumShippingOptionCodeType::VALUE_WORLDWIDE
	 * @uses PayPalEnumShippingOptionCodeType::VALUE_SITEPLUSREGIONS
	 * @uses PayPalEnumShippingOptionCodeType::VALUE_WILLNOTSHIP
	 * @uses PayPalEnumShippingOptionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumShippingOptionCodeType::VALUE_SITEONLY,PayPalEnumShippingOptionCodeType::VALUE_WORLDWIDE,PayPalEnumShippingOptionCodeType::VALUE_SITEPLUSREGIONS,PayPalEnumShippingOptionCodeType::VALUE_WILLNOTSHIP,PayPalEnumShippingOptionCodeType::VALUE_CUSTOMCODE));
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