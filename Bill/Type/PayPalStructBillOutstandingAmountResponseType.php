<?php
/**
 * File for class PayPalStructBillOutstandingAmountResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillOutstandingAmountResponseType originally named BillOutstandingAmountResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillOutstandingAmountResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The BillOutstandingAmountResponseDetails
	 * @var PayPalStructBillOutstandingAmountResponseDetailsType
	 */
	public $BillOutstandingAmountResponseDetails;
	/**
	 * Constructor method for BillOutstandingAmountResponseType
	 * @see parent::__construct()
	 * @param PayPalStructBillOutstandingAmountResponseDetailsType $_billOutstandingAmountResponseDetails
	 * @return PayPalStructBillOutstandingAmountResponseType
	 */
	public function __construct($_billOutstandingAmountResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('BillOutstandingAmountResponseDetails'=>$_billOutstandingAmountResponseDetails));
	}
	/**
	 * Get BillOutstandingAmountResponseDetails value
	 * @return PayPalStructBillOutstandingAmountResponseDetailsType|null
	 */
	public function getBillOutstandingAmountResponseDetails()
	{
		return $this->BillOutstandingAmountResponseDetails;
	}
	/**
	 * Set BillOutstandingAmountResponseDetails value
	 * @param PayPalStructBillOutstandingAmountResponseDetailsType $_billOutstandingAmountResponseDetails the BillOutstandingAmountResponseDetails
	 * @return PayPalStructBillOutstandingAmountResponseDetailsType
	 */
	public function setBillOutstandingAmountResponseDetails($_billOutstandingAmountResponseDetails)
	{
		return ($this->BillOutstandingAmountResponseDetails = $_billOutstandingAmountResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillOutstandingAmountResponseType
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