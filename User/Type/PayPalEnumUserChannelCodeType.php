<?php
/**
 * File for class PayPalEnumUserChannelCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumUserChannelCodeType originally named UserChannelCodeType
 * Documentation : It defines the enumerated types of the user channels defined in biz/User/value_object/Channel.oml
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumUserChannelCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'WEB'
	 * @return string 'WEB'
	 */
	const VALUE_WEB = 'WEB';
	/**
	 * Constant for value 'MOBILE'
	 * @return string 'MOBILE'
	 */
	const VALUE_MOBILE = 'MOBILE';
	/**
	 * Constant for value 'POS'
	 * @return string 'POS'
	 */
	const VALUE_POS = 'POS';
	/**
	 * Constant for value 'KIOSK'
	 * @return string 'KIOSK'
	 */
	const VALUE_KIOSK = 'KIOSK';
	/**
	 * Constant for value 'IHSTB'
	 * @return string 'IHSTB'
	 */
	const VALUE_IHSTB = 'IHSTB';
	/**
	 * Constant for value 'IVR'
	 * @return string 'IVR'
	 */
	const VALUE_IVR = 'IVR';
	/**
	 * Constant for value 'ADMIN'
	 * @return string 'ADMIN'
	 */
	const VALUE_ADMIN = 'ADMIN';
	/**
	 * Constant for value 'CSOPS'
	 * @return string 'CSOPS'
	 */
	const VALUE_CSOPS = 'CSOPS';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumUserChannelCodeType::VALUE_WEB
	 * @uses PayPalEnumUserChannelCodeType::VALUE_MOBILE
	 * @uses PayPalEnumUserChannelCodeType::VALUE_POS
	 * @uses PayPalEnumUserChannelCodeType::VALUE_KIOSK
	 * @uses PayPalEnumUserChannelCodeType::VALUE_IHSTB
	 * @uses PayPalEnumUserChannelCodeType::VALUE_IVR
	 * @uses PayPalEnumUserChannelCodeType::VALUE_ADMIN
	 * @uses PayPalEnumUserChannelCodeType::VALUE_CSOPS
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumUserChannelCodeType::VALUE_WEB,PayPalEnumUserChannelCodeType::VALUE_MOBILE,PayPalEnumUserChannelCodeType::VALUE_POS,PayPalEnumUserChannelCodeType::VALUE_KIOSK,PayPalEnumUserChannelCodeType::VALUE_IHSTB,PayPalEnumUserChannelCodeType::VALUE_IVR,PayPalEnumUserChannelCodeType::VALUE_ADMIN,PayPalEnumUserChannelCodeType::VALUE_CSOPS));
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