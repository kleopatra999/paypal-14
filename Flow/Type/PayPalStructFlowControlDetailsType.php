<?php
/**
 * File for class PayPalStructFlowControlDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFlowControlDetailsType originally named FlowControlDetailsType
 * Documentation : An optional set of values related to flow-specific details.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFlowControlDetailsType extends PayPalWsdlClass
{
	/**
	 * The ErrorURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL to redirect to for an unpayable transaction. This field is currently used only for the inline checkout flow.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ErrorURL;
	/**
	 * The InContextReturnURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL to redirect to after a user clicks the "Pay" or "Continue" button on the merchant's site. This field is currently used only for the inline checkout flow.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InContextReturnURL;
	/**
	 * Constructor method for FlowControlDetailsType
	 * @see parent::__construct()
	 * @param string $_errorURL
	 * @param string $_inContextReturnURL
	 * @return PayPalStructFlowControlDetailsType
	 */
	public function __construct($_errorURL = NULL,$_inContextReturnURL = NULL)
	{
		parent::__construct(array('ErrorURL'=>$_errorURL,'InContextReturnURL'=>$_inContextReturnURL));
	}
	/**
	 * Get ErrorURL value
	 * @return string|null
	 */
	public function getErrorURL()
	{
		return $this->ErrorURL;
	}
	/**
	 * Set ErrorURL value
	 * @param string $_errorURL the ErrorURL
	 * @return string
	 */
	public function setErrorURL($_errorURL)
	{
		return ($this->ErrorURL = $_errorURL);
	}
	/**
	 * Get InContextReturnURL value
	 * @return string|null
	 */
	public function getInContextReturnURL()
	{
		return $this->InContextReturnURL;
	}
	/**
	 * Set InContextReturnURL value
	 * @param string $_inContextReturnURL the InContextReturnURL
	 * @return string
	 */
	public function setInContextReturnURL($_inContextReturnURL)
	{
		return ($this->InContextReturnURL = $_inContextReturnURL);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFlowControlDetailsType
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