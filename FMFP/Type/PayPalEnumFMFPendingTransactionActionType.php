<?php
/**
 * File for class PayPalEnumFMFPendingTransactionActionType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumFMFPendingTransactionActionType originally named FMFPendingTransactionActionType
 * Documentation : This is various actions that a merchant can take on a FMF Pending Transaction.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumFMFPendingTransactionActionType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Accept'
	 * @return string 'Accept'
	 */
	const VALUE_ACCEPT = 'Accept';
	/**
	 * Constant for value 'Deny'
	 * @return string 'Deny'
	 */
	const VALUE_DENY = 'Deny';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumFMFPendingTransactionActionType::VALUE_ACCEPT
	 * @uses PayPalEnumFMFPendingTransactionActionType::VALUE_DENY
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumFMFPendingTransactionActionType::VALUE_ACCEPT,PayPalEnumFMFPendingTransactionActionType::VALUE_DENY));
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