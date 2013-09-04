<?php
/**
 * File for class PayPalEnumCheckoutStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumCheckoutStatusCodeType originally named CheckoutStatusCodeType
 * Documentation : CheckoutStatusCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumCheckoutStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CheckoutComplete'
	 * Meta informations extracted from the WSDL
	 * - documentation : Checkout complete.
	 * @return string 'CheckoutComplete'
	 */
	const VALUE_CHECKOUTCOMPLETE = 'CheckoutComplete';
	/**
	 * Constant for value 'CheckoutIncomplete'
	 * Meta informations extracted from the WSDL
	 * - documentation : Checkout incomplete. No details specified.
	 * @return string 'CheckoutIncomplete'
	 */
	const VALUE_CHECKOUTINCOMPLETE = 'CheckoutIncomplete';
	/**
	 * Constant for value 'BuyerRequestsTotal'
	 * Meta informations extracted from the WSDL
	 * - documentation : Buyer requests total.
	 * @return string 'BuyerRequestsTotal'
	 */
	const VALUE_BUYERREQUESTSTOTAL = 'BuyerRequestsTotal';
	/**
	 * Constant for value 'SellerResponded'
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller responded to buyer's request.
	 * @return string 'SellerResponded'
	 */
	const VALUE_SELLERRESPONDED = 'SellerResponded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumCheckoutStatusCodeType::VALUE_CHECKOUTCOMPLETE
	 * @uses PayPalEnumCheckoutStatusCodeType::VALUE_CHECKOUTINCOMPLETE
	 * @uses PayPalEnumCheckoutStatusCodeType::VALUE_BUYERREQUESTSTOTAL
	 * @uses PayPalEnumCheckoutStatusCodeType::VALUE_SELLERRESPONDED
	 * @uses PayPalEnumCheckoutStatusCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumCheckoutStatusCodeType::VALUE_CHECKOUTCOMPLETE,PayPalEnumCheckoutStatusCodeType::VALUE_CHECKOUTINCOMPLETE,PayPalEnumCheckoutStatusCodeType::VALUE_BUYERREQUESTSTOTAL,PayPalEnumCheckoutStatusCodeType::VALUE_SELLERRESPONDED,PayPalEnumCheckoutStatusCodeType::VALUE_CUSTOMCODE));
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