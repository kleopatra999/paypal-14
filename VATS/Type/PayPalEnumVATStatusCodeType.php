<?php
/**
 * File for class PayPalEnumVATStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumVATStatusCodeType originally named VATStatusCodeType
 * Documentation : VATStatusCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumVATStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoVATTax'
	 * Meta informations extracted from the WSDL
	 * - documentation : No VAT Tax
	 * @return string 'NoVATTax'
	 */
	const VALUE_NOVATTAX = 'NoVATTax';
	/**
	 * Constant for value 'VATTax'
	 * Meta informations extracted from the WSDL
	 * - documentation : VAT Tax
	 * @return string 'VATTax'
	 */
	const VALUE_VATTAX = 'VATTax';
	/**
	 * Constant for value 'VATExempt'
	 * Meta informations extracted from the WSDL
	 * - documentation : VAT Exempt
	 * @return string 'VATExempt'
	 */
	const VALUE_VATEXEMPT = 'VATExempt';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumVATStatusCodeType::VALUE_NOVATTAX
	 * @uses PayPalEnumVATStatusCodeType::VALUE_VATTAX
	 * @uses PayPalEnumVATStatusCodeType::VALUE_VATEXEMPT
	 * @uses PayPalEnumVATStatusCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumVATStatusCodeType::VALUE_NOVATTAX,PayPalEnumVATStatusCodeType::VALUE_VATTAX,PayPalEnumVATStatusCodeType::VALUE_VATEXEMPT,PayPalEnumVATStatusCodeType::VALUE_CUSTOMCODE));
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