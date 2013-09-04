<?php
/**
 * File for class PayPalStructBillOutstandingAmountRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillOutstandingAmountRequestType originally named BillOutstandingAmountRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillOutstandingAmountRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The BillOutstandingAmountRequestDetails
	 * @var PayPalStructBillOutstandingAmountRequestDetailsType
	 */
	public $BillOutstandingAmountRequestDetails;
	/**
	 * Constructor method for BillOutstandingAmountRequestType
	 * @see parent::__construct()
	 * @param PayPalStructBillOutstandingAmountRequestDetailsType $_billOutstandingAmountRequestDetails
	 * @return PayPalStructBillOutstandingAmountRequestType
	 */
	public function __construct($_billOutstandingAmountRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('BillOutstandingAmountRequestDetails'=>$_billOutstandingAmountRequestDetails));
	}
	/**
	 * Get BillOutstandingAmountRequestDetails value
	 * @return PayPalStructBillOutstandingAmountRequestDetailsType|null
	 */
	public function getBillOutstandingAmountRequestDetails()
	{
		return $this->BillOutstandingAmountRequestDetails;
	}
	/**
	 * Set BillOutstandingAmountRequestDetails value
	 * @param PayPalStructBillOutstandingAmountRequestDetailsType $_billOutstandingAmountRequestDetails the BillOutstandingAmountRequestDetails
	 * @return PayPalStructBillOutstandingAmountRequestDetailsType
	 */
	public function setBillOutstandingAmountRequestDetails($_billOutstandingAmountRequestDetails)
	{
		return ($this->BillOutstandingAmountRequestDetails = $_billOutstandingAmountRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillOutstandingAmountRequestType
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