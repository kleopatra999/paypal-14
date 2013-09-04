<?php
/**
 * File for class PayPalStructGetIncentiveEvaluationRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetIncentiveEvaluationRequestType originally named GetIncentiveEvaluationRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetIncentiveEvaluationRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The GetIncentiveEvaluationRequestDetails
	 * @var PayPalStructGetIncentiveEvaluationRequestDetailsType
	 */
	public $GetIncentiveEvaluationRequestDetails;
	/**
	 * Constructor method for GetIncentiveEvaluationRequestType
	 * @see parent::__construct()
	 * @param PayPalStructGetIncentiveEvaluationRequestDetailsType $_getIncentiveEvaluationRequestDetails
	 * @return PayPalStructGetIncentiveEvaluationRequestType
	 */
	public function __construct($_getIncentiveEvaluationRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetIncentiveEvaluationRequestDetails'=>$_getIncentiveEvaluationRequestDetails));
	}
	/**
	 * Get GetIncentiveEvaluationRequestDetails value
	 * @return PayPalStructGetIncentiveEvaluationRequestDetailsType|null
	 */
	public function getGetIncentiveEvaluationRequestDetails()
	{
		return $this->GetIncentiveEvaluationRequestDetails;
	}
	/**
	 * Set GetIncentiveEvaluationRequestDetails value
	 * @param PayPalStructGetIncentiveEvaluationRequestDetailsType $_getIncentiveEvaluationRequestDetails the GetIncentiveEvaluationRequestDetails
	 * @return PayPalStructGetIncentiveEvaluationRequestDetailsType
	 */
	public function setGetIncentiveEvaluationRequestDetails($_getIncentiveEvaluationRequestDetails)
	{
		return ($this->GetIncentiveEvaluationRequestDetails = $_getIncentiveEvaluationRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetIncentiveEvaluationRequestType
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