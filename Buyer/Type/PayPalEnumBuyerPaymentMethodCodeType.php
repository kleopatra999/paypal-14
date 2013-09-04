<?php
/**
 * File for class PayPalEnumBuyerPaymentMethodCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumBuyerPaymentMethodCodeType originally named BuyerPaymentMethodCodeType
 * Documentation : BuyerPaymentMethodCodeType - Type declaration to be used by other schema. The includes the codes for payment methods used by buyers to pay sellers.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumBuyerPaymentMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : No payment method specified
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MOCC'
	 * Meta informations extracted from the WSDL
	 * - documentation : Money order/cashiers check
	 * @return string 'MOCC'
	 */
	const VALUE_MOCC = 'MOCC';
	/**
	 * Constant for value 'AmEx'
	 * Meta informations extracted from the WSDL
	 * - documentation : American Express
	 * @return string 'AmEx'
	 */
	const VALUE_AMEX = 'AmEx';
	/**
	 * Constant for value 'PaymentSeeDescription'
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment See Description
	 * @return string 'PaymentSeeDescription'
	 */
	const VALUE_PAYMENTSEEDESCRIPTION = 'PaymentSeeDescription';
	/**
	 * Constant for value 'CCAccepted'
	 * Meta informations extracted from the WSDL
	 * - documentation : American Express
	 * @return string 'CCAccepted'
	 */
	const VALUE_CCACCEPTED = 'CCAccepted';
	/**
	 * Constant for value 'PersonalCheck'
	 * Meta informations extracted from the WSDL
	 * - documentation : Personal check
	 * @return string 'PersonalCheck'
	 */
	const VALUE_PERSONALCHECK = 'PersonalCheck';
	/**
	 * Constant for value 'COD'
	 * Meta informations extracted from the WSDL
	 * - documentation : COD
	 * @return string 'COD'
	 */
	const VALUE_COD = 'COD';
	/**
	 * Constant for value 'VisaMC'
	 * Meta informations extracted from the WSDL
	 * - documentation : Visa/Mastercard
	 * @return string 'VisaMC'
	 */
	const VALUE_VISAMC = 'VisaMC';
	/**
	 * Constant for value 'Other'
	 * Meta informations extracted from the WSDL
	 * - documentation : Other forms of payment. Some custom method is accepted by seller as payment method in the transaction. For Motors vehicle items, this field refers to the Deposit payment method.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'Discover'
	 * Meta informations extracted from the WSDL
	 * - documentation : Discover
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'CashOnPickup'
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment on delivery acceptable payment term.
	 * @return string 'CashOnPickup'
	 */
	const VALUE_CASHONPICKUP = 'CashOnPickup';
	/**
	 * Constant for value 'MoneyXferAccepted'
	 * Meta informations extracted from the WSDL
	 * - documentation : Direct transfer of money acceptable payment term.
	 * @return string 'MoneyXferAccepted'
	 */
	const VALUE_MONEYXFERACCEPTED = 'MoneyXferAccepted';
	/**
	 * Constant for value 'MoneyXferAcceptedinCheckout'
	 * Meta informations extracted from the WSDL
	 * - documentation : If the seller has bank account information on file, and MoneyXferAcceptedinCheckout = true, then the bank account information will be displayed in Checkout. Applicable to German site only.
	 * @return string 'MoneyXferAcceptedinCheckout'
	 */
	const VALUE_MONEYXFERACCEPTEDINCHECKOUT = 'MoneyXferAcceptedinCheckout';
	/**
	 * Constant for value 'OtherOnlinePayments'
	 * Meta informations extracted from the WSDL
	 * - documentation : Online Escrow paid for by seller.
	 * @return string 'OtherOnlinePayments'
	 */
	const VALUE_OTHERONLINEPAYMENTS = 'OtherOnlinePayments';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_NONE
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_MOCC
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_AMEX
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_PAYMENTSEEDESCRIPTION
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_CCACCEPTED
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_PERSONALCHECK
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_COD
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_VISAMC
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_OTHER
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_PAYPAL
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_DISCOVER
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_CASHONPICKUP
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTED
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTEDINCHECKOUT
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_OTHERONLINEPAYMENTS
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumBuyerPaymentMethodCodeType::VALUE_NONE,PayPalEnumBuyerPaymentMethodCodeType::VALUE_MOCC,PayPalEnumBuyerPaymentMethodCodeType::VALUE_AMEX,PayPalEnumBuyerPaymentMethodCodeType::VALUE_PAYMENTSEEDESCRIPTION,PayPalEnumBuyerPaymentMethodCodeType::VALUE_CCACCEPTED,PayPalEnumBuyerPaymentMethodCodeType::VALUE_PERSONALCHECK,PayPalEnumBuyerPaymentMethodCodeType::VALUE_COD,PayPalEnumBuyerPaymentMethodCodeType::VALUE_VISAMC,PayPalEnumBuyerPaymentMethodCodeType::VALUE_OTHER,PayPalEnumBuyerPaymentMethodCodeType::VALUE_PAYPAL,PayPalEnumBuyerPaymentMethodCodeType::VALUE_DISCOVER,PayPalEnumBuyerPaymentMethodCodeType::VALUE_CASHONPICKUP,PayPalEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTED,PayPalEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTEDINCHECKOUT,PayPalEnumBuyerPaymentMethodCodeType::VALUE_OTHERONLINEPAYMENTS,PayPalEnumBuyerPaymentMethodCodeType::VALUE_CUSTOMCODE));
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