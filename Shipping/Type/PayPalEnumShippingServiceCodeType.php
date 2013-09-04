<?php
/**
 * File for class PayPalEnumShippingServiceCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumShippingServiceCodeType originally named ShippingServiceCodeType
 * Documentation : ShippingServiceCodeType These are the possible codes to describe insurance option as part of shipping service.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumShippingServiceCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'UPSGround'
	 * Meta informations extracted from the WSDL
	 * - documentation : UPS Ground
	 * @return string 'UPSGround'
	 */
	const VALUE_UPSGROUND = 'UPSGround';
	/**
	 * Constant for value 'UPS3rdDay'
	 * Meta informations extracted from the WSDL
	 * - documentation : UPS 3rd Day
	 * @return string 'UPS3rdDay'
	 */
	const VALUE_UPS3RDDAY = 'UPS3rdDay';
	/**
	 * Constant for value 'UPS2ndDay'
	 * Meta informations extracted from the WSDL
	 * - documentation : UPS 2nd Day
	 * @return string 'UPS2ndDay'
	 */
	const VALUE_UPS2NDDAY = 'UPS2ndDay';
	/**
	 * Constant for value 'UPSNextDay'
	 * Meta informations extracted from the WSDL
	 * - documentation : UPS Next Day.
	 * @return string 'UPSNextDay'
	 */
	const VALUE_UPSNEXTDAY = 'UPSNextDay';
	/**
	 * Constant for value 'USPSPriority'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Priority.
	 * @return string 'USPSPriority'
	 */
	const VALUE_USPSPRIORITY = 'USPSPriority';
	/**
	 * Constant for value 'USPSParcel'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Parcel.
	 * @return string 'USPSParcel'
	 */
	const VALUE_USPSPARCEL = 'USPSParcel';
	/**
	 * Constant for value 'USPSMedia'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Media.
	 * @return string 'USPSMedia'
	 */
	const VALUE_USPSMEDIA = 'USPSMedia';
	/**
	 * Constant for value 'USPSFirstClass'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS First Class
	 * @return string 'USPSFirstClass'
	 */
	const VALUE_USPSFIRSTCLASS = 'USPSFirstClass';
	/**
	 * Constant for value 'ShippingMethodStandard'
	 * Meta informations extracted from the WSDL
	 * - documentation : ShippingMethodStandard - used by merchant tool only
	 * @return string 'ShippingMethodStandard'
	 */
	const VALUE_SHIPPINGMETHODSTANDARD = 'ShippingMethodStandard';
	/**
	 * Constant for value 'ShippingMethodExpress'
	 * Meta informations extracted from the WSDL
	 * - documentation : ShippingMethodExpress- used by merchant tool only
	 * @return string 'ShippingMethodExpress'
	 */
	const VALUE_SHIPPINGMETHODEXPRESS = 'ShippingMethodExpress';
	/**
	 * Constant for value 'ShippingMethodNextDay'
	 * Meta informations extracted from the WSDL
	 * - documentation : ShippingMethodNextDay- used by merchant tool only
	 * @return string 'ShippingMethodNextDay'
	 */
	const VALUE_SHIPPINGMETHODNEXTDAY = 'ShippingMethodNextDay';
	/**
	 * Constant for value 'USPSExpressMail'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Express Mail
	 * @return string 'USPSExpressMail'
	 */
	const VALUE_USPSEXPRESSMAIL = 'USPSExpressMail';
	/**
	 * Constant for value 'USPSGround'
	 * Meta informations extracted from the WSDL
	 * - documentation : USPS Ground
	 * @return string 'USPSGround'
	 */
	const VALUE_USPSGROUND = 'USPSGround';
	/**
	 * Constant for value 'Download'
	 * Meta informations extracted from the WSDL
	 * - documentation : Download.
	 * @return string 'Download'
	 */
	const VALUE_DOWNLOAD = 'Download';
	/**
	 * Constant for value 'WillCall_Or_Pickup'
	 * Meta informations extracted from the WSDL
	 * - documentation : Will Call Or Pick Up.
	 * @return string 'WillCall_Or_Pickup'
	 */
	const VALUE_WILLCALL_OR_PICKUP = 'WillCall_Or_Pickup';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_UPSGROUND
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_UPS3RDDAY
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_UPS2NDDAY
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_UPSNEXTDAY
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_USPSPRIORITY
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_USPSPARCEL
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_USPSMEDIA
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_USPSFIRSTCLASS
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_SHIPPINGMETHODSTANDARD
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_SHIPPINGMETHODEXPRESS
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_SHIPPINGMETHODNEXTDAY
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_USPSEXPRESSMAIL
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_USPSGROUND
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_DOWNLOAD
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_WILLCALL_OR_PICKUP
	 * @uses PayPalEnumShippingServiceCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumShippingServiceCodeType::VALUE_UPSGROUND,PayPalEnumShippingServiceCodeType::VALUE_UPS3RDDAY,PayPalEnumShippingServiceCodeType::VALUE_UPS2NDDAY,PayPalEnumShippingServiceCodeType::VALUE_UPSNEXTDAY,PayPalEnumShippingServiceCodeType::VALUE_USPSPRIORITY,PayPalEnumShippingServiceCodeType::VALUE_USPSPARCEL,PayPalEnumShippingServiceCodeType::VALUE_USPSMEDIA,PayPalEnumShippingServiceCodeType::VALUE_USPSFIRSTCLASS,PayPalEnumShippingServiceCodeType::VALUE_SHIPPINGMETHODSTANDARD,PayPalEnumShippingServiceCodeType::VALUE_SHIPPINGMETHODEXPRESS,PayPalEnumShippingServiceCodeType::VALUE_SHIPPINGMETHODNEXTDAY,PayPalEnumShippingServiceCodeType::VALUE_USPSEXPRESSMAIL,PayPalEnumShippingServiceCodeType::VALUE_USPSGROUND,PayPalEnumShippingServiceCodeType::VALUE_DOWNLOAD,PayPalEnumShippingServiceCodeType::VALUE_WILLCALL_OR_PICKUP,PayPalEnumShippingServiceCodeType::VALUE_CUSTOMCODE));
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