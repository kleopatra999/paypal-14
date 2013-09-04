<?php
/**
 * File for class PayPalStructDoNonReferencedCreditResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoNonReferencedCreditResponseType originally named DoNonReferencedCreditResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoNonReferencedCreditResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The DoNonReferencedCreditResponseDetails
	 * @var PayPalStructDoNonReferencedCreditResponseDetailsType
	 */
	public $DoNonReferencedCreditResponseDetails;
	/**
	 * Constructor method for DoNonReferencedCreditResponseType
	 * @see parent::__construct()
	 * @param PayPalStructDoNonReferencedCreditResponseDetailsType $_doNonReferencedCreditResponseDetails
	 * @return PayPalStructDoNonReferencedCreditResponseType
	 */
	public function __construct($_doNonReferencedCreditResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoNonReferencedCreditResponseDetails'=>$_doNonReferencedCreditResponseDetails));
	}
	/**
	 * Get DoNonReferencedCreditResponseDetails value
	 * @return PayPalStructDoNonReferencedCreditResponseDetailsType|null
	 */
	public function getDoNonReferencedCreditResponseDetails()
	{
		return $this->DoNonReferencedCreditResponseDetails;
	}
	/**
	 * Set DoNonReferencedCreditResponseDetails value
	 * @param PayPalStructDoNonReferencedCreditResponseDetailsType $_doNonReferencedCreditResponseDetails the DoNonReferencedCreditResponseDetails
	 * @return PayPalStructDoNonReferencedCreditResponseDetailsType
	 */
	public function setDoNonReferencedCreditResponseDetails($_doNonReferencedCreditResponseDetails)
	{
		return ($this->DoNonReferencedCreditResponseDetails = $_doNonReferencedCreditResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoNonReferencedCreditResponseType
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