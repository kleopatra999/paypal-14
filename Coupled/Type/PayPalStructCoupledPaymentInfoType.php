<?php
/**
 * File for class PayPalStructCoupledPaymentInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCoupledPaymentInfoType originally named CoupledPaymentInfoType
 * Documentation : Information about Coupled Payment transactions.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCoupledPaymentInfoType extends PayPalWsdlClass
{
	/**
	 * The CoupledPaymentID
	 * Meta informations extracted from the WSDL
	 * - documentation : ID that uniquely identifies this CoupledPayment. Generated by PP in Response
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $CoupledPaymentID;
	/**
	 * The CoupledPaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : ID received in the Coupled Payment Request
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CoupledPaymentRequestID;
	/**
	 * Constructor method for CoupledPaymentInfoType
	 * @see parent::__construct()
	 * @param string $_coupledPaymentID
	 * @param string $_coupledPaymentRequestID
	 * @return PayPalStructCoupledPaymentInfoType
	 */
	public function __construct($_coupledPaymentID,$_coupledPaymentRequestID = NULL)
	{
		parent::__construct(array('CoupledPaymentID'=>$_coupledPaymentID,'CoupledPaymentRequestID'=>$_coupledPaymentRequestID));
	}
	/**
	 * Get CoupledPaymentID value
	 * @return string
	 */
	public function getCoupledPaymentID()
	{
		return $this->CoupledPaymentID;
	}
	/**
	 * Set CoupledPaymentID value
	 * @param string $_coupledPaymentID the CoupledPaymentID
	 * @return string
	 */
	public function setCoupledPaymentID($_coupledPaymentID)
	{
		return ($this->CoupledPaymentID = $_coupledPaymentID);
	}
	/**
	 * Get CoupledPaymentRequestID value
	 * @return string|null
	 */
	public function getCoupledPaymentRequestID()
	{
		return $this->CoupledPaymentRequestID;
	}
	/**
	 * Set CoupledPaymentRequestID value
	 * @param string $_coupledPaymentRequestID the CoupledPaymentRequestID
	 * @return string
	 */
	public function setCoupledPaymentRequestID($_coupledPaymentRequestID)
	{
		return ($this->CoupledPaymentRequestID = $_coupledPaymentRequestID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCoupledPaymentInfoType
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