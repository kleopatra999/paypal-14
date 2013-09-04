<?php
/**
 * File for class PayPalStructScheduleDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructScheduleDetailsType originally named ScheduleDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructScheduleDetailsType extends PayPalWsdlClass
{
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : Schedule details for the Recurring Payment
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The PaymentPeriod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBillingPeriodDetailsType
	 */
	public $PaymentPeriod;
	/**
	 * The TrialPeriod
	 * Meta informations extracted from the WSDL
	 * - documentation : Trial period of this schedule
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBillingPeriodDetailsType
	 */
	public $TrialPeriod;
	/**
	 * The MaxFailedPayments
	 * Meta informations extracted from the WSDL
	 * - documentation : The max number of payments the buyer can fail before this Recurring Payments profile is cancelled
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxFailedPayments;
	/**
	 * The ActivationDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructActivationDetailsType
	 */
	public $ActivationDetails;
	/**
	 * The AutoBillOutstandingAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumAutoBillType
	 */
	public $AutoBillOutstandingAmount;
	/**
	 * Constructor method for ScheduleDetailsType
	 * @see parent::__construct()
	 * @param string $_description
	 * @param PayPalStructBillingPeriodDetailsType $_paymentPeriod
	 * @param PayPalStructBillingPeriodDetailsType $_trialPeriod
	 * @param int $_maxFailedPayments
	 * @param PayPalStructActivationDetailsType $_activationDetails
	 * @param PayPalEnumAutoBillType $_autoBillOutstandingAmount
	 * @return PayPalStructScheduleDetailsType
	 */
	public function __construct($_description,$_paymentPeriod,$_trialPeriod = NULL,$_maxFailedPayments = NULL,$_activationDetails = NULL,$_autoBillOutstandingAmount = NULL)
	{
		parent::__construct(array('Description'=>$_description,'PaymentPeriod'=>$_paymentPeriod,'TrialPeriod'=>$_trialPeriod,'MaxFailedPayments'=>$_maxFailedPayments,'ActivationDetails'=>$_activationDetails,'AutoBillOutstandingAmount'=>$_autoBillOutstandingAmount));
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
	 * Get PaymentPeriod value
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function getPaymentPeriod()
	{
		return $this->PaymentPeriod;
	}
	/**
	 * Set PaymentPeriod value
	 * @param PayPalStructBillingPeriodDetailsType $_paymentPeriod the PaymentPeriod
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function setPaymentPeriod($_paymentPeriod)
	{
		return ($this->PaymentPeriod = $_paymentPeriod);
	}
	/**
	 * Get TrialPeriod value
	 * @return PayPalStructBillingPeriodDetailsType|null
	 */
	public function getTrialPeriod()
	{
		return $this->TrialPeriod;
	}
	/**
	 * Set TrialPeriod value
	 * @param PayPalStructBillingPeriodDetailsType $_trialPeriod the TrialPeriod
	 * @return PayPalStructBillingPeriodDetailsType
	 */
	public function setTrialPeriod($_trialPeriod)
	{
		return ($this->TrialPeriod = $_trialPeriod);
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
	 * Get ActivationDetails value
	 * @return PayPalStructActivationDetailsType|null
	 */
	public function getActivationDetails()
	{
		return $this->ActivationDetails;
	}
	/**
	 * Set ActivationDetails value
	 * @param PayPalStructActivationDetailsType $_activationDetails the ActivationDetails
	 * @return PayPalStructActivationDetailsType
	 */
	public function setActivationDetails($_activationDetails)
	{
		return ($this->ActivationDetails = $_activationDetails);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructScheduleDetailsType
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