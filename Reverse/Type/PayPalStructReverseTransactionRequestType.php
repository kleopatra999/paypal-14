<?php
/**
 * File for class PayPalStructReverseTransactionRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReverseTransactionRequestType originally named ReverseTransactionRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReverseTransactionRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ReverseTransactionRequestDetails
	 * @var PayPalStructReverseTransactionRequestDetailsType
	 */
	public $ReverseTransactionRequestDetails;
	/**
	 * Constructor method for ReverseTransactionRequestType
	 * @see parent::__construct()
	 * @param PayPalStructReverseTransactionRequestDetailsType $_reverseTransactionRequestDetails
	 * @return PayPalStructReverseTransactionRequestType
	 */
	public function __construct($_reverseTransactionRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ReverseTransactionRequestDetails'=>$_reverseTransactionRequestDetails));
	}
	/**
	 * Get ReverseTransactionRequestDetails value
	 * @return PayPalStructReverseTransactionRequestDetailsType|null
	 */
	public function getReverseTransactionRequestDetails()
	{
		return $this->ReverseTransactionRequestDetails;
	}
	/**
	 * Set ReverseTransactionRequestDetails value
	 * @param PayPalStructReverseTransactionRequestDetailsType $_reverseTransactionRequestDetails the ReverseTransactionRequestDetails
	 * @return PayPalStructReverseTransactionRequestDetailsType
	 */
	public function setReverseTransactionRequestDetails($_reverseTransactionRequestDetails)
	{
		return ($this->ReverseTransactionRequestDetails = $_reverseTransactionRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReverseTransactionRequestType
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