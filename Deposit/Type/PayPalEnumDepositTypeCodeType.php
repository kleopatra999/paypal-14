<?php
/**
 * File for class PayPalEnumDepositTypeCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumDepositTypeCodeType originally named DepositTypeCodeType
 * Documentation : DepositTypeCodeType - Type declaration to be used by other schema's. This code identifies the DepositType codes used to specify deposit types for Motors items. If the ietm listed is not a Motors item, then always return DepositType value to be "None".
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumDepositTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : None
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'OtherMethod'
	 * Meta informations extracted from the WSDL
	 * - documentation : Other Method
	 * @return string 'OtherMethod'
	 */
	const VALUE_OTHERMETHOD = 'OtherMethod';
	/**
	 * Constant for value 'FastDeposit'
	 * Meta informations extracted from the WSDL
	 * - documentation : Fast Deposit.
	 * @return string 'FastDeposit'
	 */
	const VALUE_FASTDEPOSIT = 'FastDeposit';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumDepositTypeCodeType::VALUE_NONE
	 * @uses PayPalEnumDepositTypeCodeType::VALUE_OTHERMETHOD
	 * @uses PayPalEnumDepositTypeCodeType::VALUE_FASTDEPOSIT
	 * @uses PayPalEnumDepositTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumDepositTypeCodeType::VALUE_NONE,PayPalEnumDepositTypeCodeType::VALUE_OTHERMETHOD,PayPalEnumDepositTypeCodeType::VALUE_FASTDEPOSIT,PayPalEnumDepositTypeCodeType::VALUE_CUSTOMCODE));
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