<?php
/**
 * File for class PayPalEnumApprovalTypeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumApprovalTypeType originally named ApprovalTypeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumApprovalTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BillingAgreement'
	 * @return string 'BillingAgreement'
	 */
	const VALUE_BILLINGAGREEMENT = 'BillingAgreement';
	/**
	 * Constant for value 'Profile'
	 * @return string 'Profile'
	 */
	const VALUE_PROFILE = 'Profile';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumApprovalTypeType::VALUE_BILLINGAGREEMENT
	 * @uses PayPalEnumApprovalTypeType::VALUE_PROFILE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumApprovalTypeType::VALUE_BILLINGAGREEMENT,PayPalEnumApprovalTypeType::VALUE_PROFILE));
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