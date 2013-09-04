<?php
/**
 * File for class PayPalStructActivationDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructActivationDetailsType originally named ActivationDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructActivationDetailsType extends PayPalWsdlClass
{
	/**
	 * The InitialAmount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $InitialAmount;
	/**
	 * The FailedInitialAmountAction
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumFailedPaymentActionType
	 */
	public $FailedInitialAmountAction;
	/**
	 * Constructor method for ActivationDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_initialAmount
	 * @param PayPalEnumFailedPaymentActionType $_failedInitialAmountAction
	 * @return PayPalStructActivationDetailsType
	 */
	public function __construct($_initialAmount,$_failedInitialAmountAction = NULL)
	{
		parent::__construct(array('InitialAmount'=>$_initialAmount,'FailedInitialAmountAction'=>$_failedInitialAmountAction));
	}
	/**
	 * Get InitialAmount value
	 * @return PayPalStructBasicAmountType
	 */
	public function getInitialAmount()
	{
		return $this->InitialAmount;
	}
	/**
	 * Set InitialAmount value
	 * @param PayPalStructBasicAmountType $_initialAmount the InitialAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setInitialAmount($_initialAmount)
	{
		return ($this->InitialAmount = $_initialAmount);
	}
	/**
	 * Get FailedInitialAmountAction value
	 * @return PayPalEnumFailedPaymentActionType|null
	 */
	public function getFailedInitialAmountAction()
	{
		return $this->FailedInitialAmountAction;
	}
	/**
	 * Set FailedInitialAmountAction value
	 * @uses PayPalEnumFailedPaymentActionType::valueIsValid()
	 * @param PayPalEnumFailedPaymentActionType $_failedInitialAmountAction the FailedInitialAmountAction
	 * @return PayPalEnumFailedPaymentActionType
	 */
	public function setFailedInitialAmountAction($_failedInitialAmountAction)
	{
		if(!PayPalEnumFailedPaymentActionType::valueIsValid($_failedInitialAmountAction))
		{
			return false;
		}
		return ($this->FailedInitialAmountAction = $_failedInitialAmountAction);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructActivationDetailsType
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