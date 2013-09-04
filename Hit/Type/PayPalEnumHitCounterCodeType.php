<?php
/**
 * File for class PayPalEnumHitCounterCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumHitCounterCodeType originally named HitCounterCodeType
 * Documentation : HitCounterCodeType This code identifies the HitCounter codes used to specify whether a hit counter is used for the item's listing page and, if so, what type.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumHitCounterCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoHitCounter'
	 * Meta informations extracted from the WSDL
	 * - documentation : No hit counter
	 * @return string 'NoHitCounter'
	 */
	const VALUE_NOHITCOUNTER = 'NoHitCounter';
	/**
	 * Constant for value 'HonestyStyle'
	 * Meta informations extracted from the WSDL
	 * - documentation : Honesty Style Hit Counter
	 * @return string 'HonestyStyle'
	 */
	const VALUE_HONESTYSTYLE = 'HonestyStyle';
	/**
	 * Constant for value 'GreenLED'
	 * Meta informations extracted from the WSDL
	 * - documentation : Green LED counter.
	 * @return string 'GreenLED'
	 */
	const VALUE_GREENLED = 'GreenLED';
	/**
	 * Constant for value 'Hidden'
	 * Meta informations extracted from the WSDL
	 * - documentation : Hidden counter.
	 * @return string 'Hidden'
	 */
	const VALUE_HIDDEN = 'Hidden';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumHitCounterCodeType::VALUE_NOHITCOUNTER
	 * @uses PayPalEnumHitCounterCodeType::VALUE_HONESTYSTYLE
	 * @uses PayPalEnumHitCounterCodeType::VALUE_GREENLED
	 * @uses PayPalEnumHitCounterCodeType::VALUE_HIDDEN
	 * @uses PayPalEnumHitCounterCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumHitCounterCodeType::VALUE_NOHITCOUNTER,PayPalEnumHitCounterCodeType::VALUE_HONESTYSTYLE,PayPalEnumHitCounterCodeType::VALUE_GREENLED,PayPalEnumHitCounterCodeType::VALUE_HIDDEN,PayPalEnumHitCounterCodeType::VALUE_CUSTOMCODE));
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