<?php
/**
 * File for class PayPalStructCreateRecurringPaymentsProfileRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateRecurringPaymentsProfileRequestDetailsType originally named CreateRecurringPaymentsProfileRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateRecurringPaymentsProfileRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The RecurringPaymentsProfileDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer Information for this Recurring Payments
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructRecurringPaymentsProfileDetailsType
	 */
	public $RecurringPaymentsProfileDetails;
	/**
	 * The ScheduleDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Schedule Information for this Recurring Payments
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructScheduleDetailsType
	 */
	public $ScheduleDetails;
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : Billing Agreement token (required if Express Checkout)
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Token;
	/**
	 * The CreditCard
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the credit card to be charged (required if Direct Payment)
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The PaymentDetailsItem
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Item Details.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDetailsItemType
	 */
	public $PaymentDetailsItem;
	/**
	 * Constructor method for CreateRecurringPaymentsProfileRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructRecurringPaymentsProfileDetailsType $_recurringPaymentsProfileDetails
	 * @param PayPalStructScheduleDetailsType $_scheduleDetails
	 * @param string $_token
	 * @param PayPalStructCreditCardDetailsType $_creditCard
	 * @param PayPalStructPaymentDetailsItemType $_paymentDetailsItem
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public function __construct($_recurringPaymentsProfileDetails,$_scheduleDetails,$_token = NULL,$_creditCard = NULL,$_paymentDetailsItem = NULL)
	{
		parent::__construct(array('RecurringPaymentsProfileDetails'=>$_recurringPaymentsProfileDetails,'ScheduleDetails'=>$_scheduleDetails,'Token'=>$_token,'CreditCard'=>$_creditCard,'PaymentDetailsItem'=>$_paymentDetailsItem));
	}
	/**
	 * Get RecurringPaymentsProfileDetails value
	 * @return PayPalStructRecurringPaymentsProfileDetailsType
	 */
	public function getRecurringPaymentsProfileDetails()
	{
		return $this->RecurringPaymentsProfileDetails;
	}
	/**
	 * Set RecurringPaymentsProfileDetails value
	 * @param PayPalStructRecurringPaymentsProfileDetailsType $_recurringPaymentsProfileDetails the RecurringPaymentsProfileDetails
	 * @return PayPalStructRecurringPaymentsProfileDetailsType
	 */
	public function setRecurringPaymentsProfileDetails($_recurringPaymentsProfileDetails)
	{
		return ($this->RecurringPaymentsProfileDetails = $_recurringPaymentsProfileDetails);
	}
	/**
	 * Get ScheduleDetails value
	 * @return PayPalStructScheduleDetailsType
	 */
	public function getScheduleDetails()
	{
		return $this->ScheduleDetails;
	}
	/**
	 * Set ScheduleDetails value
	 * @param PayPalStructScheduleDetailsType $_scheduleDetails the ScheduleDetails
	 * @return PayPalStructScheduleDetailsType
	 */
	public function setScheduleDetails($_scheduleDetails)
	{
		return ($this->ScheduleDetails = $_scheduleDetails);
	}
	/**
	 * Get Token value
	 * @return string|null
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set Token value
	 * @param string $_token the Token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->Token = $_token);
	}
	/**
	 * Get CreditCard value
	 * @return PayPalStructCreditCardDetailsType|null
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set CreditCard value
	 * @param PayPalStructCreditCardDetailsType $_creditCard the CreditCard
	 * @return PayPalStructCreditCardDetailsType
	 */
	public function setCreditCard($_creditCard)
	{
		return ($this->CreditCard = $_creditCard);
	}
	/**
	 * Get PaymentDetailsItem value
	 * @return PayPalStructPaymentDetailsItemType|null
	 */
	public function getPaymentDetailsItem()
	{
		return $this->PaymentDetailsItem;
	}
	/**
	 * Set PaymentDetailsItem value
	 * @param PayPalStructPaymentDetailsItemType $_paymentDetailsItem the PaymentDetailsItem
	 * @return PayPalStructPaymentDetailsItemType
	 */
	public function setPaymentDetailsItem($_paymentDetailsItem)
	{
		return ($this->PaymentDetailsItem = $_paymentDetailsItem);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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