<?php
/**
 * File for class PayPalStructRecurringPaymentsSummaryType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRecurringPaymentsSummaryType originally named RecurringPaymentsSummaryType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRecurringPaymentsSummaryType extends PayPalWsdlClass
{
	/**
	 * The NumberCyclesCompleted
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $NumberCyclesCompleted;
	/**
	 * The NumberCyclesRemaining
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $NumberCyclesRemaining;
	/**
	 * The OutstandingBalance
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $OutstandingBalance;
	/**
	 * The FailedPaymentCount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $FailedPaymentCount;
	/**
	 * The NextBillingDate
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $NextBillingDate;
	/**
	 * The LastPaymentDate
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $LastPaymentDate;
	/**
	 * The LastPaymentAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $LastPaymentAmount;
	/**
	 * Constructor method for RecurringPaymentsSummaryType
	 * @see parent::__construct()
	 * @param int $_numberCyclesCompleted
	 * @param int $_numberCyclesRemaining
	 * @param PayPalStructBasicAmountType $_outstandingBalance
	 * @param int $_failedPaymentCount
	 * @param dateTime $_nextBillingDate
	 * @param dateTime $_lastPaymentDate
	 * @param PayPalStructBasicAmountType $_lastPaymentAmount
	 * @return PayPalStructRecurringPaymentsSummaryType
	 */
	public function __construct($_numberCyclesCompleted,$_numberCyclesRemaining,$_outstandingBalance,$_failedPaymentCount,$_nextBillingDate = NULL,$_lastPaymentDate = NULL,$_lastPaymentAmount = NULL)
	{
		parent::__construct(array('NumberCyclesCompleted'=>$_numberCyclesCompleted,'NumberCyclesRemaining'=>$_numberCyclesRemaining,'OutstandingBalance'=>$_outstandingBalance,'FailedPaymentCount'=>$_failedPaymentCount,'NextBillingDate'=>$_nextBillingDate,'LastPaymentDate'=>$_lastPaymentDate,'LastPaymentAmount'=>$_lastPaymentAmount));
	}
	/**
	 * Get NumberCyclesCompleted value
	 * @return int
	 */
	public function getNumberCyclesCompleted()
	{
		return $this->NumberCyclesCompleted;
	}
	/**
	 * Set NumberCyclesCompleted value
	 * @param int $_numberCyclesCompleted the NumberCyclesCompleted
	 * @return int
	 */
	public function setNumberCyclesCompleted($_numberCyclesCompleted)
	{
		return ($this->NumberCyclesCompleted = $_numberCyclesCompleted);
	}
	/**
	 * Get NumberCyclesRemaining value
	 * @return int
	 */
	public function getNumberCyclesRemaining()
	{
		return $this->NumberCyclesRemaining;
	}
	/**
	 * Set NumberCyclesRemaining value
	 * @param int $_numberCyclesRemaining the NumberCyclesRemaining
	 * @return int
	 */
	public function setNumberCyclesRemaining($_numberCyclesRemaining)
	{
		return ($this->NumberCyclesRemaining = $_numberCyclesRemaining);
	}
	/**
	 * Get OutstandingBalance value
	 * @return PayPalStructBasicAmountType
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
	 * Get FailedPaymentCount value
	 * @return int
	 */
	public function getFailedPaymentCount()
	{
		return $this->FailedPaymentCount;
	}
	/**
	 * Set FailedPaymentCount value
	 * @param int $_failedPaymentCount the FailedPaymentCount
	 * @return int
	 */
	public function setFailedPaymentCount($_failedPaymentCount)
	{
		return ($this->FailedPaymentCount = $_failedPaymentCount);
	}
	/**
	 * Get NextBillingDate value
	 * @return dateTime|null
	 */
	public function getNextBillingDate()
	{
		return $this->NextBillingDate;
	}
	/**
	 * Set NextBillingDate value
	 * @param dateTime $_nextBillingDate the NextBillingDate
	 * @return dateTime
	 */
	public function setNextBillingDate($_nextBillingDate)
	{
		return ($this->NextBillingDate = $_nextBillingDate);
	}
	/**
	 * Get LastPaymentDate value
	 * @return dateTime|null
	 */
	public function getLastPaymentDate()
	{
		return $this->LastPaymentDate;
	}
	/**
	 * Set LastPaymentDate value
	 * @param dateTime $_lastPaymentDate the LastPaymentDate
	 * @return dateTime
	 */
	public function setLastPaymentDate($_lastPaymentDate)
	{
		return ($this->LastPaymentDate = $_lastPaymentDate);
	}
	/**
	 * Get LastPaymentAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getLastPaymentAmount()
	{
		return $this->LastPaymentAmount;
	}
	/**
	 * Set LastPaymentAmount value
	 * @param PayPalStructBasicAmountType $_lastPaymentAmount the LastPaymentAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setLastPaymentAmount($_lastPaymentAmount)
	{
		return ($this->LastPaymentAmount = $_lastPaymentAmount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRecurringPaymentsSummaryType
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