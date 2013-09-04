<?php
/**
 * File for class PayPalEnumUserWithdrawalLimitTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumUserWithdrawalLimitTypeType originally named UserWithdrawalLimitTypeType
 * Documentation : User Withdrawal Limit Type Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumUserWithdrawalLimitTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Limited'
	 * @return string 'Limited'
	 */
	const VALUE_LIMITED = 'Limited';
	/**
	 * Constant for value 'Unlimited'
	 * @return string 'Unlimited'
	 */
	const VALUE_UNLIMITED = 'Unlimited';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumUserWithdrawalLimitTypeType::VALUE_UNKNOWN
	 * @uses PayPalEnumUserWithdrawalLimitTypeType::VALUE_LIMITED
	 * @uses PayPalEnumUserWithdrawalLimitTypeType::VALUE_UNLIMITED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumUserWithdrawalLimitTypeType::VALUE_UNKNOWN,PayPalEnumUserWithdrawalLimitTypeType::VALUE_LIMITED,PayPalEnumUserWithdrawalLimitTypeType::VALUE_UNLIMITED));
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