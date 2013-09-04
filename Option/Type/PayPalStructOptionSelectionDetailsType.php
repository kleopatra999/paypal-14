<?php
/**
 * File for class PayPalStructOptionSelectionDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOptionSelectionDetailsType originally named OptionSelectionDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOptionSelectionDetailsType extends PayPalWsdlClass
{
	/**
	 * The OptionSelection
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Selection. Required Character length and limitations: 12 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $OptionSelection;
	/**
	 * The Price
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Price. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Price;
	/**
	 * The OptionType
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Type Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumOptionTypeListType
	 */
	public $OptionType;
	/**
	 * The PaymentPeriod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructInstallmentDetailsType
	 */
	public $PaymentPeriod;
	/**
	 * Constructor method for OptionSelectionDetailsType
	 * @see parent::__construct()
	 * @param string $_optionSelection
	 * @param string $_price
	 * @param PayPalEnumOptionTypeListType $_optionType
	 * @param PayPalStructInstallmentDetailsType $_paymentPeriod
	 * @return PayPalStructOptionSelectionDetailsType
	 */
	public function __construct($_optionSelection,$_price = NULL,$_optionType = NULL,$_paymentPeriod = NULL)
	{
		parent::__construct(array('OptionSelection'=>$_optionSelection,'Price'=>$_price,'OptionType'=>$_optionType,'PaymentPeriod'=>$_paymentPeriod));
	}
	/**
	 * Get OptionSelection value
	 * @return string
	 */
	public function getOptionSelection()
	{
		return $this->OptionSelection;
	}
	/**
	 * Set OptionSelection value
	 * @param string $_optionSelection the OptionSelection
	 * @return string
	 */
	public function setOptionSelection($_optionSelection)
	{
		return ($this->OptionSelection = $_optionSelection);
	}
	/**
	 * Get Price value
	 * @return string|null
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Price value
	 * @param string $_price the Price
	 * @return string
	 */
	public function setPrice($_price)
	{
		return ($this->Price = $_price);
	}
	/**
	 * Get OptionType value
	 * @return PayPalEnumOptionTypeListType|null
	 */
	public function getOptionType()
	{
		return $this->OptionType;
	}
	/**
	 * Set OptionType value
	 * @uses PayPalEnumOptionTypeListType::valueIsValid()
	 * @param PayPalEnumOptionTypeListType $_optionType the OptionType
	 * @return PayPalEnumOptionTypeListType
	 */
	public function setOptionType($_optionType)
	{
		if(!PayPalEnumOptionTypeListType::valueIsValid($_optionType))
		{
			return false;
		}
		return ($this->OptionType = $_optionType);
	}
	/**
	 * Get PaymentPeriod value
	 * @return PayPalStructInstallmentDetailsType|null
	 */
	public function getPaymentPeriod()
	{
		return $this->PaymentPeriod;
	}
	/**
	 * Set PaymentPeriod value
	 * @param PayPalStructInstallmentDetailsType $_paymentPeriod the PaymentPeriod
	 * @return PayPalStructInstallmentDetailsType
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
	 * @return PayPalStructOptionSelectionDetailsType
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