<?php
/**
 * File for class PayPalStructDisplayControlDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDisplayControlDetailsType originally named DisplayControlDetailsType
 * Documentation : Contains elements that allows customization of display (user interface) elements.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDisplayControlDetailsType extends PayPalWsdlClass
{
	/**
	 * The InContextPaymentButtonImage
	 * Meta informations extracted from the WSDL
	 * - documentation : Optional URL to pay button image for the inline checkout flow. Currently applicable only to the inline checkout flow when the FlowControlDetails/InlineReturnURL is present.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InContextPaymentButtonImage;
	/**
	 * Constructor method for DisplayControlDetailsType
	 * @see parent::__construct()
	 * @param string $_inContextPaymentButtonImage
	 * @return PayPalStructDisplayControlDetailsType
	 */
	public function __construct($_inContextPaymentButtonImage = NULL)
	{
		parent::__construct(array('InContextPaymentButtonImage'=>$_inContextPaymentButtonImage));
	}
	/**
	 * Get InContextPaymentButtonImage value
	 * @return string|null
	 */
	public function getInContextPaymentButtonImage()
	{
		return $this->InContextPaymentButtonImage;
	}
	/**
	 * Set InContextPaymentButtonImage value
	 * @param string $_inContextPaymentButtonImage the InContextPaymentButtonImage
	 * @return string
	 */
	public function setInContextPaymentButtonImage($_inContextPaymentButtonImage)
	{
		return ($this->InContextPaymentButtonImage = $_inContextPaymentButtonImage);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDisplayControlDetailsType
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