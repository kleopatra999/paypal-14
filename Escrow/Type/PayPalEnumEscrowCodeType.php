<?php
/**
 * File for class PayPalEnumEscrowCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumEscrowCodeType originally named EscrowCodeType
 * Documentation : EscrowCodeType These are the possible codes to describe Escrow options.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumEscrowCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ByBuyer'
	 * Meta informations extracted from the WSDL
	 * - documentation : By Buyer
	 * @return string 'ByBuyer'
	 */
	const VALUE_BYBUYER = 'ByBuyer';
	/**
	 * Constant for value 'BySeller'
	 * Meta informations extracted from the WSDL
	 * - documentation : By Seller.
	 * @return string 'BySeller'
	 */
	const VALUE_BYSELLER = 'BySeller';
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : None.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumEscrowCodeType::VALUE_BYBUYER
	 * @uses PayPalEnumEscrowCodeType::VALUE_BYSELLER
	 * @uses PayPalEnumEscrowCodeType::VALUE_NONE
	 * @uses PayPalEnumEscrowCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumEscrowCodeType::VALUE_BYBUYER,PayPalEnumEscrowCodeType::VALUE_BYSELLER,PayPalEnumEscrowCodeType::VALUE_NONE,PayPalEnumEscrowCodeType::VALUE_CUSTOMCODE));
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