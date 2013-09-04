<?php
/**
 * File for class PayPalStructReverseTransactionResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReverseTransactionResponseType originally named ReverseTransactionResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReverseTransactionResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The ReverseTransactionResponseDetails
	 * @var PayPalStructReverseTransactionResponseDetailsType
	 */
	public $ReverseTransactionResponseDetails;
	/**
	 * Constructor method for ReverseTransactionResponseType
	 * @see parent::__construct()
	 * @param PayPalStructReverseTransactionResponseDetailsType $_reverseTransactionResponseDetails
	 * @return PayPalStructReverseTransactionResponseType
	 */
	public function __construct($_reverseTransactionResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ReverseTransactionResponseDetails'=>$_reverseTransactionResponseDetails));
	}
	/**
	 * Get ReverseTransactionResponseDetails value
	 * @return PayPalStructReverseTransactionResponseDetailsType|null
	 */
	public function getReverseTransactionResponseDetails()
	{
		return $this->ReverseTransactionResponseDetails;
	}
	/**
	 * Set ReverseTransactionResponseDetails value
	 * @param PayPalStructReverseTransactionResponseDetailsType $_reverseTransactionResponseDetails the ReverseTransactionResponseDetails
	 * @return PayPalStructReverseTransactionResponseDetailsType
	 */
	public function setReverseTransactionResponseDetails($_reverseTransactionResponseDetails)
	{
		return ($this->ReverseTransactionResponseDetails = $_reverseTransactionResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReverseTransactionResponseType
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