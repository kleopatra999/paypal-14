<?php
/**
 * File for class PayPalStructGetMobileStatusRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetMobileStatusRequestType originally named GetMobileStatusRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetMobileStatusRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The GetMobileStatusRequestDetails
	 * @var PayPalStructGetMobileStatusRequestDetailsType
	 */
	public $GetMobileStatusRequestDetails;
	/**
	 * Constructor method for GetMobileStatusRequestType
	 * @see parent::__construct()
	 * @param PayPalStructGetMobileStatusRequestDetailsType $_getMobileStatusRequestDetails
	 * @return PayPalStructGetMobileStatusRequestType
	 */
	public function __construct($_getMobileStatusRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetMobileStatusRequestDetails'=>$_getMobileStatusRequestDetails));
	}
	/**
	 * Get GetMobileStatusRequestDetails value
	 * @return PayPalStructGetMobileStatusRequestDetailsType|null
	 */
	public function getGetMobileStatusRequestDetails()
	{
		return $this->GetMobileStatusRequestDetails;
	}
	/**
	 * Set GetMobileStatusRequestDetails value
	 * @param PayPalStructGetMobileStatusRequestDetailsType $_getMobileStatusRequestDetails the GetMobileStatusRequestDetails
	 * @return PayPalStructGetMobileStatusRequestDetailsType
	 */
	public function setGetMobileStatusRequestDetails($_getMobileStatusRequestDetails)
	{
		return ($this->GetMobileStatusRequestDetails = $_getMobileStatusRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetMobileStatusRequestType
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