<?php
/**
 * File for class PayPalStructBillUserRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillUserRequestType originally named BillUserRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillUserRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The MerchantPullPaymentDetails
	 * @var PayPalStructMerchantPullPaymentType
	 */
	public $MerchantPullPaymentDetails;
	/**
	 * The ReturnFMFDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : This flag indicates that the response should include FMFDetails
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor method for BillUserRequestType
	 * @see parent::__construct()
	 * @param PayPalStructMerchantPullPaymentType $_merchantPullPaymentDetails
	 * @param int $_returnFMFDetails
	 * @return PayPalStructBillUserRequestType
	 */
	public function __construct($_merchantPullPaymentDetails = NULL,$_returnFMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('MerchantPullPaymentDetails'=>$_merchantPullPaymentDetails,'ReturnFMFDetails'=>$_returnFMFDetails));
	}
	/**
	 * Get MerchantPullPaymentDetails value
	 * @return PayPalStructMerchantPullPaymentType|null
	 */
	public function getMerchantPullPaymentDetails()
	{
		return $this->MerchantPullPaymentDetails;
	}
	/**
	 * Set MerchantPullPaymentDetails value
	 * @param PayPalStructMerchantPullPaymentType $_merchantPullPaymentDetails the MerchantPullPaymentDetails
	 * @return PayPalStructMerchantPullPaymentType
	 */
	public function setMerchantPullPaymentDetails($_merchantPullPaymentDetails)
	{
		return ($this->MerchantPullPaymentDetails = $_merchantPullPaymentDetails);
	}
	/**
	 * Get ReturnFMFDetails value
	 * @return int|null
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
	}
	/**
	 * Set ReturnFMFDetails value
	 * @param int $_returnFMFDetails the ReturnFMFDetails
	 * @return int
	 */
	public function setReturnFMFDetails($_returnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_returnFMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillUserRequestType
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