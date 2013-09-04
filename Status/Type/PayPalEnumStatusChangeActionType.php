<?php
/**
 * File for class PayPalEnumStatusChangeActionType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumStatusChangeActionType originally named StatusChangeActionType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumStatusChangeActionType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Cancel'
	 * @return string 'Cancel'
	 */
	const VALUE_CANCEL = 'Cancel';
	/**
	 * Constant for value 'Suspend'
	 * @return string 'Suspend'
	 */
	const VALUE_SUSPEND = 'Suspend';
	/**
	 * Constant for value 'Reactivate'
	 * @return string 'Reactivate'
	 */
	const VALUE_REACTIVATE = 'Reactivate';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumStatusChangeActionType::VALUE_CANCEL
	 * @uses PayPalEnumStatusChangeActionType::VALUE_SUSPEND
	 * @uses PayPalEnumStatusChangeActionType::VALUE_REACTIVATE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumStatusChangeActionType::VALUE_CANCEL,PayPalEnumStatusChangeActionType::VALUE_SUSPEND,PayPalEnumStatusChangeActionType::VALUE_REACTIVATE));
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