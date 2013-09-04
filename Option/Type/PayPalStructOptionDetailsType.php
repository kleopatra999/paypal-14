<?php
/**
 * File for class PayPalStructOptionDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOptionDetailsType originally named OptionDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOptionDetailsType extends PayPalWsdlClass
{
	/**
	 * The OptionName
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Name. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $OptionName;
	/**
	 * The OptionSelectionDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var PayPalStructOptionSelectionDetailsType
	 */
	public $OptionSelectionDetails;
	/**
	 * Constructor method for OptionDetailsType
	 * @see parent::__construct()
	 * @param string $_optionName
	 * @param PayPalStructOptionSelectionDetailsType $_optionSelectionDetails
	 * @return PayPalStructOptionDetailsType
	 */
	public function __construct($_optionName,$_optionSelectionDetails = NULL)
	{
		parent::__construct(array('OptionName'=>$_optionName,'OptionSelectionDetails'=>$_optionSelectionDetails));
	}
	/**
	 * Get OptionName value
	 * @return string
	 */
	public function getOptionName()
	{
		return $this->OptionName;
	}
	/**
	 * Set OptionName value
	 * @param string $_optionName the OptionName
	 * @return string
	 */
	public function setOptionName($_optionName)
	{
		return ($this->OptionName = $_optionName);
	}
	/**
	 * Get OptionSelectionDetails value
	 * @return PayPalStructOptionSelectionDetailsType|null
	 */
	public function getOptionSelectionDetails()
	{
		return $this->OptionSelectionDetails;
	}
	/**
	 * Set OptionSelectionDetails value
	 * @param PayPalStructOptionSelectionDetailsType $_optionSelectionDetails the OptionSelectionDetails
	 * @return PayPalStructOptionSelectionDetailsType
	 */
	public function setOptionSelectionDetails($_optionSelectionDetails)
	{
		return ($this->OptionSelectionDetails = $_optionSelectionDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOptionDetailsType
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