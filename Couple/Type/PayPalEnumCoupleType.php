<?php
/**
 * File for class PayPalEnumCoupleType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumCoupleType originally named CoupleType
 * Documentation : Defines couple relationship type between buckets
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumCoupleType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'LifeTime'
	 * Meta informations extracted from the WSDL
	 * - documentation : The relation between buckets are for lifetime. Any post-transaction action on one affects other as well.
	 * @return string 'LifeTime'
	 */
	const VALUE_LIFETIME = 'LifeTime';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumCoupleType::VALUE_LIFETIME
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumCoupleType::VALUE_LIFETIME));
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