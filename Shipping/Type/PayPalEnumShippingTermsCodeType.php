<?php
/**
 * File for class PayPalEnumShippingTermsCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumShippingTermsCodeType originally named ShippingTermsCodeType
 * Documentation : ShippingTermsCodeType - Type declaration to be used by other schema's. Shipping terms code describes who pays for the shipping of an item. These are the standard shipping terms, i.e., terms of delivery of an item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumShippingTermsCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'SellerPays'
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller pays all shipping costs.
	 * @return string 'SellerPays'
	 */
	const VALUE_SELLERPAYS = 'SellerPays';
	/**
	 * Constant for value 'BuyerPays'
	 * Meta informations extracted from the WSDL
	 * - documentation : Buyer pays all shipping costs.
	 * @return string 'BuyerPays'
	 */
	const VALUE_BUYERPAYS = 'BuyerPays';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumShippingTermsCodeType::VALUE_SELLERPAYS
	 * @uses PayPalEnumShippingTermsCodeType::VALUE_BUYERPAYS
	 * @uses PayPalEnumShippingTermsCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumShippingTermsCodeType::VALUE_SELLERPAYS,PayPalEnumShippingTermsCodeType::VALUE_BUYERPAYS,PayPalEnumShippingTermsCodeType::VALUE_CUSTOMCODE));
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