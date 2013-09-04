<?php
/**
 * File for class PayPalEnumRecurringPaymentsProfileStatusType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumRecurringPaymentsProfileStatusType originally named RecurringPaymentsProfileStatusType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumRecurringPaymentsProfileStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ActiveProfile'
	 * @return string 'ActiveProfile'
	 */
	const VALUE_ACTIVEPROFILE = 'ActiveProfile';
	/**
	 * Constant for value 'PendingProfile'
	 * @return string 'PendingProfile'
	 */
	const VALUE_PENDINGPROFILE = 'PendingProfile';
	/**
	 * Constant for value 'CancelledProfile'
	 * @return string 'CancelledProfile'
	 */
	const VALUE_CANCELLEDPROFILE = 'CancelledProfile';
	/**
	 * Constant for value 'ExpiredProfile'
	 * @return string 'ExpiredProfile'
	 */
	const VALUE_EXPIREDPROFILE = 'ExpiredProfile';
	/**
	 * Constant for value 'SuspendedProfile'
	 * @return string 'SuspendedProfile'
	 */
	const VALUE_SUSPENDEDPROFILE = 'SuspendedProfile';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::VALUE_ACTIVEPROFILE
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::VALUE_PENDINGPROFILE
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::VALUE_CANCELLEDPROFILE
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::VALUE_EXPIREDPROFILE
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::VALUE_SUSPENDEDPROFILE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumRecurringPaymentsProfileStatusType::VALUE_ACTIVEPROFILE,PayPalEnumRecurringPaymentsProfileStatusType::VALUE_PENDINGPROFILE,PayPalEnumRecurringPaymentsProfileStatusType::VALUE_CANCELLEDPROFILE,PayPalEnumRecurringPaymentsProfileStatusType::VALUE_EXPIREDPROFILE,PayPalEnumRecurringPaymentsProfileStatusType::VALUE_SUSPENDEDPROFILE));
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