<?php
/**
 * File for class PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType originally named GetRecurringPaymentsProfileDetailsResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations extracted from the WSDL
	 * - documentation : Recurring Billing Profile ID
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The ProfileStatus
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumRecurringPaymentsProfileStatusType
	 */
	public $ProfileStatus;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The AutoBillOutstandingAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumAutoBillType
	 */
	public $AutoBillOutstandingAmount;
	/**
	 * The MaxFailedPayments
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $MaxFailedPayments;
	/**
	 * The RecurringPaymentsProfileDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructRecurringPaymentsProfileDetailsType
	 */
	public $RecurringPaymentsProfileDetails;
	/**
	 * The RecurringPaymentsSummary
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructRecurringPaymentsSummaryType
	 */
	public $RecurringPaymentsSummary;
	/**
	 * The CurrentRecurringPaymentsPeriod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBillingPeriodDetailsType
	 */
	public $CurrentRecurringPaymentsPeriod;
	/**
	 * The CreditCard
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The TrialRecurringPaymentsPeriod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBillingPeriodDetailsType
	 */
	public $TrialRecurringPaymentsPeriod;
	/**
	 * The RegularRecurringPaymentsPeriod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBillingPeriodDetailsType
	 */
	public $RegularRecurringPaymentsPeriod;
	/**
	 * The TrialAmountPaid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TrialAmountPaid;
	/**
	 * The RegularAmountPaid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $RegularAmountPaid;
	/**
	 * The AggregateAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $AggregateAmount;
	/**
	 * The AggregateOptionalAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $AggregateOptionalAmount;
	/**
	 * The FinalPaymentDueDate
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $FinalPaymentDueDate;
	/**
	 * Constructor method for GetRecurringPaymentsProfileDetailsResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_profileID
	 * @param PayPalEnumRecurringPaymentsProfileStatusType $_profileStatus
	 * @param string $_description
	 * @param PayPalEnumAutoBillType $_autoBillOutstandingAmount
	 * @param int $_maxFailedPayments
	 * @param PayPalStructRecurringPaymentsProfileDetailsType $_recurringPaymentsProfileDetails
	 * @param PayPalStructRecurringPaymentsSummaryType $_recurringPaymentsSummary
	 * @param PayPalStructBillingPeriodDetailsType $_currentRecurringPaymentsPeriod
	 * @param PayPalStructCreditCardDetailsType $_creditCard
	 * @param PayPalStructBillingPeriodDetailsType $_trialRecurringPaymentsPeriod
	 * @param PayPalStructBillingPeriodDetailsType $_regularRecurringPaymentsPeriod
	 * @param PayPalStructBasicAmountType $_trialAmountPaid
	 * @param PayPalStructBasicAmountType $_regularAmountPaid
	 * @param PayPalStructBasicAmountType $_aggregateAmount
	 * @param PayPalStructBasicAmountType $_aggregateOptionalAmount
	 * @param dateTime $_finalPaymentDueDate
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public function __construct($_profileID,$_profileStatus,$_description,$_autoBillOutstandingAmount,$_maxFailedPayments,$_recurringPaymentsProfileDetails,$_recurringPaymentsSummary,$_currentRecurringPaymentsPeriod = NULL,$_creditCard = NULL,$_trialRecurringPaymentsPeriod = NULL,$_regularRecurringPaymentsPeriod = NULL,$_trialAmountPaid = NULL,$_regularAmountPaid = NULL,$_aggregateAmount = NULL,$_aggregateOptionalAmount = NULL,$_finalPaymentDueDate = NULL)
	{
		parent::__construct(array('ProfileID'=>$_profileID,'ProfileStatus'=>$_profileStatus,'Description'=>$_description,'AutoBillOutstandingAmount'=>$_autoBillOutstandingAmount,'MaxFailedPayments'=>$_maxFailedPayments,'RecurringPaymentsProfileDetails'=>$_recurringPaymentsProfileDetails,'RecurringPaymentsSummary'=>$_recurringPaymentsSummary,'CurrentRecurringPaymentsPeriod'=>$_currentRecurringPaymentsPeriod,'CreditCard'=>$_creditCard,'TrialRecurringPaymentsPeriod'=>$_trialRecurringPaymentsPeriod,'RegularRecurringPaymentsPeriod'=>$_regularRecurringPaymentsPeriod,'TrialAmountPaid'=>$_trialAmountPaid,'RegularAmountPaid'=>$_regularAmountPaid,'AggregateAmount'=>$_aggregateAmount,'AggregateOptionalAmount'=>$_aggregateOptionalAmount,'FinalPaymentDueDate'=>$_finalPaymentDueDate));
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
	 * Get ProfileStatus value
	 * @return PayPalEnumRecurringPaymentsProfileStatusType
	 */
	public function getProfileStatus()
	{
		return $this->ProfileStatus;
	}
	/**
	 * Set ProfileStatus value
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::valueIsValid()
	 * @param PayPalEnumRecurringPaymentsProfileStatusType $_profileStatus the ProfileStatus
	 * @return PayPalEnumRecurringPaymentsProfileStatusType
	 */
	public function setProfileStatus($_profileStatus)
	{
		if(!PayPalEnumRecurringPaymentsProfileStatusType::valueIsValid($_profileStatus))
		{
			return false;
		}
		return ($this->ProfileStatus = $_profileStatus);
	}
	/**
	 * Get Description value
	 * @return string
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
	 * Get AutoBillOutstandingAmount value
	 * @return PayPalEnumAutoBillType
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
	 * @return int
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
	 * Get RecurringPaymentsSummary value
	 * @return PayPalStructRecurringPaymentsSummaryType
	 */
	public function getRecurringPaymentsSummary()
	{
		return $this->RecurringPaymentsSummary;
	}
	/**
	 * Set RecurringPaymentsSummary value
	 * @param PayPalStructRecurringPaymentsSummaryType $_recurringPaymentsSummary the RecurringPaymentsSummary
	 * @return PayPalStructRecurringPaymentsSummaryType
	 */
	public function setRecurringPaymentsSummary($_recurringPaymentsSummary)
	{
		return ($this->RecurringPaymentsSummary = $_recurringPaymentsSummary);
	}
	/**
	 * Get CurrentRecurringPaymentsPeriod value
	 * @return PayPalStructBillingPeriodDetailsType|null
	 */
	public function getCurrentRecurringPaymentsPeriod()
	{
		return $this->CurrentRecurringPaymentsPeriod;
	}
	/**
	 * Set CurrentRecurringPaymentsPeriod value
	 * @param PayPalStructBillingPeriodDetailsType $_currentRecurringPaymentsPeriod the CurrentRecurringPaymentsPeriod
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function setCurrentRecurringPaymentsPeriod($_currentRecurringPaymentsPeriod)
	{
		return ($this->CurrentRecurringPaymentsPeriod = $_currentRecurringPaymentsPeriod);
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
	 * Get TrialRecurringPaymentsPeriod value
	 * @return PayPalStructBillingPeriodDetailsType|null
	 */
	public function getTrialRecurringPaymentsPeriod()
	{
		return $this->TrialRecurringPaymentsPeriod;
	}
	/**
	 * Set TrialRecurringPaymentsPeriod value
	 * @param PayPalStructBillingPeriodDetailsType $_trialRecurringPaymentsPeriod the TrialRecurringPaymentsPeriod
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function setTrialRecurringPaymentsPeriod($_trialRecurringPaymentsPeriod)
	{
		return ($this->TrialRecurringPaymentsPeriod = $_trialRecurringPaymentsPeriod);
	}
	/**
	 * Get RegularRecurringPaymentsPeriod value
	 * @return PayPalStructBillingPeriodDetailsType|null
	 */
	public function getRegularRecurringPaymentsPeriod()
	{
		return $this->RegularRecurringPaymentsPeriod;
	}
	/**
	 * Set RegularRecurringPaymentsPeriod value
	 * @param PayPalStructBillingPeriodDetailsType $_regularRecurringPaymentsPeriod the RegularRecurringPaymentsPeriod
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function setRegularRecurringPaymentsPeriod($_regularRecurringPaymentsPeriod)
	{
		return ($this->RegularRecurringPaymentsPeriod = $_regularRecurringPaymentsPeriod);
	}
	/**
	 * Get TrialAmountPaid value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTrialAmountPaid()
	{
		return $this->TrialAmountPaid;
	}
	/**
	 * Set TrialAmountPaid value
	 * @param PayPalStructBasicAmountType $_trialAmountPaid the TrialAmountPaid
	 * @return PayPalStructBasicAmountType
	 */
	public function setTrialAmountPaid($_trialAmountPaid)
	{
		return ($this->TrialAmountPaid = $_trialAmountPaid);
	}
	/**
	 * Get RegularAmountPaid value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getRegularAmountPaid()
	{
		return $this->RegularAmountPaid;
	}
	/**
	 * Set RegularAmountPaid value
	 * @param PayPalStructBasicAmountType $_regularAmountPaid the RegularAmountPaid
	 * @return PayPalStructBasicAmountType
	 */
	public function setRegularAmountPaid($_regularAmountPaid)
	{
		return ($this->RegularAmountPaid = $_regularAmountPaid);
	}
	/**
	 * Get AggregateAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAggregateAmount()
	{
		return $this->AggregateAmount;
	}
	/**
	 * Set AggregateAmount value
	 * @param PayPalStructBasicAmountType $_aggregateAmount the AggregateAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAggregateAmount($_aggregateAmount)
	{
		return ($this->AggregateAmount = $_aggregateAmount);
	}
	/**
	 * Get AggregateOptionalAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAggregateOptionalAmount()
	{
		return $this->AggregateOptionalAmount;
	}
	/**
	 * Set AggregateOptionalAmount value
	 * @param PayPalStructBasicAmountType $_aggregateOptionalAmount the AggregateOptionalAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAggregateOptionalAmount($_aggregateOptionalAmount)
	{
		return ($this->AggregateOptionalAmount = $_aggregateOptionalAmount);
	}
	/**
	 * Get FinalPaymentDueDate value
	 * @return dateTime|null
	 */
	public function getFinalPaymentDueDate()
	{
		return $this->FinalPaymentDueDate;
	}
	/**
	 * Set FinalPaymentDueDate value
	 * @param dateTime $_finalPaymentDueDate the FinalPaymentDueDate
	 * @return dateTime
	 */
	public function setFinalPaymentDueDate($_finalPaymentDueDate)
	{
		return ($this->FinalPaymentDueDate = $_finalPaymentDueDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType
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