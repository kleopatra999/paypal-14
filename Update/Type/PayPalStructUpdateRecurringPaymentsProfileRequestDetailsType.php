<?php
/**
 * File for class PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType originally named UpdateRecurringPaymentsProfileRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The SubscriberName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SubscriberName;
	/**
	 * The SubscriberShippingAddress
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $SubscriberShippingAddress;
	/**
	 * The ProfileReference
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProfileReference;
	/**
	 * The AdditionalBillingCycles
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $AdditionalBillingCycles;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The ShippingAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The TaxAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The OutstandingBalance
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $OutstandingBalance;
	/**
	 * The AutoBillOutstandingAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumAutoBillType
	 */
	public $AutoBillOutstandingAmount;
	/**
	 * The MaxFailedPayments
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxFailedPayments;
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
	 * The BillingStartDate
	 * Meta informations extracted from the WSDL
	 * - documentation : When does this Profile begin billing?
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $BillingStartDate;
	/**
	 * The TrialPeriod
	 * Meta informations extracted from the WSDL
	 * - documentation : Trial period of this schedule
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBillingPeriodDetailsType_Update
	 */
	public $TrialPeriod;
	/**
	 * The PaymentPeriod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBillingPeriodDetailsType_Update
	 */
	public $PaymentPeriod;
	/**
	 * Constructor method for UpdateRecurringPaymentsProfileRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_profileID
	 * @param string $_note
	 * @param string $_description
	 * @param string $_subscriberName
	 * @param PayPalStructAddressType $_subscriberShippingAddress
	 * @param string $_profileReference
	 * @param int $_additionalBillingCycles
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalStructBasicAmountType $_shippingAmount
	 * @param PayPalStructBasicAmountType $_taxAmount
	 * @param PayPalStructBasicAmountType $_outstandingBalance
	 * @param PayPalEnumAutoBillType $_autoBillOutstandingAmount
	 * @param int $_maxFailedPayments
	 * @param PayPalStructCreditCardDetailsType $_creditCard
	 * @param dateTime $_billingStartDate
	 * @param PayPalStructBillingPeriodDetailsType_Update $_trialPeriod
	 * @param PayPalStructBillingPeriodDetailsType_Update $_paymentPeriod
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public function __construct($_profileID,$_note = NULL,$_description = NULL,$_subscriberName = NULL,$_subscriberShippingAddress = NULL,$_profileReference = NULL,$_additionalBillingCycles = NULL,$_amount = NULL,$_shippingAmount = NULL,$_taxAmount = NULL,$_outstandingBalance = NULL,$_autoBillOutstandingAmount = NULL,$_maxFailedPayments = NULL,$_creditCard = NULL,$_billingStartDate = NULL,$_trialPeriod = NULL,$_paymentPeriod = NULL)
	{
		parent::__construct(array('ProfileID'=>$_profileID,'Note'=>$_note,'Description'=>$_description,'SubscriberName'=>$_subscriberName,'SubscriberShippingAddress'=>$_subscriberShippingAddress,'ProfileReference'=>$_profileReference,'AdditionalBillingCycles'=>$_additionalBillingCycles,'Amount'=>$_amount,'ShippingAmount'=>$_shippingAmount,'TaxAmount'=>$_taxAmount,'OutstandingBalance'=>$_outstandingBalance,'AutoBillOutstandingAmount'=>$_autoBillOutstandingAmount,'MaxFailedPayments'=>$_maxFailedPayments,'CreditCard'=>$_creditCard,'BillingStartDate'=>$_billingStartDate,'TrialPeriod'=>$_trialPeriod,'PaymentPeriod'=>$_paymentPeriod));
	}
	/**
	 * Get ProfileID value
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileID value
	 * @param string $_profileID the ProfileID
	 * @return string
	 */
	public function setProfileID($_profileID)
	{
		return ($this->ProfileID = $_profileID);
	}
	/**
	 * Get Note value
	 * @return string|null
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Note value
	 * @param string $_note the Note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->Note = $_note);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get SubscriberName value
	 * @return string|null
	 */
	public function getSubscriberName()
	{
		return $this->SubscriberName;
	}
	/**
	 * Set SubscriberName value
	 * @param string $_subscriberName the SubscriberName
	 * @return string
	 */
	public function setSubscriberName($_subscriberName)
	{
		return ($this->SubscriberName = $_subscriberName);
	}
	/**
	 * Get SubscriberShippingAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getSubscriberShippingAddress()
	{
		return $this->SubscriberShippingAddress;
	}
	/**
	 * Set SubscriberShippingAddress value
	 * @param PayPalStructAddressType $_subscriberShippingAddress the SubscriberShippingAddress
	 * @return PayPalStructAddressType
	 */
	public function setSubscriberShippingAddress($_subscriberShippingAddress)
	{
		return ($this->SubscriberShippingAddress = $_subscriberShippingAddress);
	}
	/**
	 * Get ProfileReference value
	 * @return string|null
	 */
	public function getProfileReference()
	{
		return $this->ProfileReference;
	}
	/**
	 * Set ProfileReference value
	 * @param string $_profileReference the ProfileReference
	 * @return string
	 */
	public function setProfileReference($_profileReference)
	{
		return ($this->ProfileReference = $_profileReference);
	}
	/**
	 * Get AdditionalBillingCycles value
	 * @return int|null
	 */
	public function getAdditionalBillingCycles()
	{
		return $this->AdditionalBillingCycles;
	}
	/**
	 * Set AdditionalBillingCycles value
	 * @param int $_additionalBillingCycles the AdditionalBillingCycles
	 * @return int
	 */
	public function setAdditionalBillingCycles($_additionalBillingCycles)
	{
		return ($this->AdditionalBillingCycles = $_additionalBillingCycles);
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Get ShippingAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set ShippingAmount value
	 * @param PayPalStructBasicAmountType $_shippingAmount the ShippingAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingAmount($_shippingAmount)
	{
		return ($this->ShippingAmount = $_shippingAmount);
	}
	/**
	 * Get TaxAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set TaxAmount value
	 * @param PayPalStructBasicAmountType $_taxAmount the TaxAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxAmount($_taxAmount)
	{
		return ($this->TaxAmount = $_taxAmount);
	}
	/**
	 * Get OutstandingBalance value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getOutstandingBalance()
	{
		return $this->OutstandingBalance;
	}
	/**
	 * Set OutstandingBalance value
	 * @param PayPalStructBasicAmountType $_outstandingBalance the OutstandingBalance
	 * @return PayPalStructBasicAmountType
	 */
	public function setOutstandingBalance($_outstandingBalance)
	{
		return ($this->OutstandingBalance = $_outstandingBalance);
	}
	/**
	 * Get AutoBillOutstandingAmount value
	 * @return PayPalEnumAutoBillType|null
	 */
	public function getAutoBillOutstandingAmount()
	{
		return $this->AutoBillOutstandingAmount;
	}
	/**
	 * Set AutoBillOutstandingAmount value
	 * @uses PayPalEnumAutoBillType::valueIsValid()
	 * @param PayPalEnumAutoBillType $_autoBillOutstandingAmount the AutoBillOutstandingAmount
	 * @return PayPalEnumAutoBillType
	 */
	public function setAutoBillOutstandingAmount($_autoBillOutstandingAmount)
	{
		if(!PayPalEnumAutoBillType::valueIsValid($_autoBillOutstandingAmount))
		{
			return false;
		}
		return ($this->AutoBillOutstandingAmount = $_autoBillOutstandingAmount);
	}
	/**
	 * Get MaxFailedPayments value
	 * @return int|null
	 */
	public function getMaxFailedPayments()
	{
		return $this->MaxFailedPayments;
	}
	/**
	 * Set MaxFailedPayments value
	 * @param int $_maxFailedPayments the MaxFailedPayments
	 * @return int
	 */
	public function setMaxFailedPayments($_maxFailedPayments)
	{
		return ($this->MaxFailedPayments = $_maxFailedPayments);
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
	 * Get BillingStartDate value
	 * @return dateTime|null
	 */
	public function getBillingStartDate()
	{
		return $this->BillingStartDate;
	}
	/**
	 * Set BillingStartDate value
	 * @param dateTime $_billingStartDate the BillingStartDate
	 * @return dateTime
	 */
	public function setBillingStartDate($_billingStartDate)
	{
		return ($this->BillingStartDate = $_billingStartDate);
	}
	/**
	 * Get TrialPeriod value
	 * @return PayPalStructBillingPeriodDetailsType_Update|null
	 */
	public function getTrialPeriod()
	{
		return $this->TrialPeriod;
	}
	/**
	 * Set TrialPeriod value
	 * @param PayPalStructBillingPeriodDetailsType_Update $_trialPeriod the TrialPeriod
	 * @return PayPalStructBillingPeriodDetailsType_Update
	 */
	public function setTrialPeriod($_trialPeriod)
	{
		return ($this->TrialPeriod = $_trialPeriod);
	}
	/**
	 * Get PaymentPeriod value
	 * @return PayPalStructBillingPeriodDetailsType_Update|null
	 */
	public function getPaymentPeriod()
	{
		return $this->PaymentPeriod;
	}
	/**
	 * Set PaymentPeriod value
	 * @param PayPalStructBillingPeriodDetailsType_Update $_paymentPeriod the PaymentPeriod
	 * @return PayPalStructBillingPeriodDetailsType_Update
	 */
	public function setPaymentPeriod($_paymentPeriod)
	{
		return ($this->PaymentPeriod = $_paymentPeriod);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateRecurringPaymentsProfileRequestDetailsType
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