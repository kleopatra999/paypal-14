<?php
/**
 * File for class PayPalStructDoNonReferencedCreditRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoNonReferencedCreditRequestType originally named DoNonReferencedCreditRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoNonReferencedCreditRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The DoNonReferencedCreditRequestDetails
	 * @var PayPalStructDoNonReferencedCreditRequestDetailsType
	 */
	public $DoNonReferencedCreditRequestDetails;
	/**
	 * Constructor method for DoNonReferencedCreditRequestType
	 * @see parent::__construct()
	 * @param PayPalStructDoNonReferencedCreditRequestDetailsType $_doNonReferencedCreditRequestDetails
	 * @return PayPalStructDoNonReferencedCreditRequestType
	 */
	public function __construct($_doNonReferencedCreditRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoNonReferencedCreditRequestDetails'=>$_doNonReferencedCreditRequestDetails));
	}
	/**
	 * Get DoNonReferencedCreditRequestDetails value
	 * @return PayPalStructDoNonReferencedCreditRequestDetailsType|null
	 */
	public function getDoNonReferencedCreditRequestDetails()
	{
		return $this->DoNonReferencedCreditRequestDetails;
	}
	/**
	 * Set DoNonReferencedCreditRequestDetails value
	 * @param PayPalStructDoNonReferencedCreditRequestDetailsType $_doNonReferencedCreditRequestDetails the DoNonReferencedCreditRequestDetails
	 * @return PayPalStructDoNonReferencedCreditRequestDetailsType
	 */
	public function setDoNonReferencedCreditRequestDetails($_doNonReferencedCreditRequestDetails)
	{
		return ($this->DoNonReferencedCreditRequestDetails = $_doNonReferencedCreditRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoNonReferencedCreditRequestType
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