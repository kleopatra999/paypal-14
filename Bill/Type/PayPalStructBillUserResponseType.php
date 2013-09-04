<?php
/**
 * File for class PayPalStructBillUserResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillUserResponseType originally named BillUserResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillUserResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The BillUserResponseDetails
	 * @var PayPalStructMerchantPullPaymentResponseType
	 */
	public $BillUserResponseDetails;
	/**
	 * The FMFDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * Constructor method for BillUserResponseType
	 * @see parent::__construct()
	 * @param PayPalStructMerchantPullPaymentResponseType $_billUserResponseDetails
	 * @param PayPalStructFMFDetailsType $_fMFDetails
	 * @return PayPalStructBillUserResponseType
	 */
	public function __construct($_billUserResponseDetails = NULL,$_fMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('BillUserResponseDetails'=>$_billUserResponseDetails,'FMFDetails'=>$_fMFDetails));
	}
	/**
	 * Get BillUserResponseDetails value
	 * @return PayPalStructMerchantPullPaymentResponseType|null
	 */
	public function getBillUserResponseDetails()
	{
		return $this->BillUserResponseDetails;
	}
	/**
	 * Set BillUserResponseDetails value
	 * @param PayPalStructMerchantPullPaymentResponseType $_billUserResponseDetails the BillUserResponseDetails
	 * @return PayPalStructMerchantPullPaymentResponseType
	 */
	public function setBillUserResponseDetails($_billUserResponseDetails)
	{
		return ($this->BillUserResponseDetails = $_billUserResponseDetails);
	}
	/**
	 * Get FMFDetails value
	 * @return PayPalStructFMFDetailsType|null
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
	}
	/**
	 * Set FMFDetails value
	 * @param PayPalStructFMFDetailsType $_fMFDetails the FMFDetails
	 * @return PayPalStructFMFDetailsType
	 */
	public function setFMFDetails($_fMFDetails)
	{
		return ($this->FMFDetails = $_fMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillUserResponseType
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