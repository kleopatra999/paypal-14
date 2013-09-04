<?php
/**
 * File for class PayPalStructGetIncentiveEvaluationResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetIncentiveEvaluationResponseType originally named GetIncentiveEvaluationResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetIncentiveEvaluationResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetIncentiveEvaluationResponseDetails
	 * @var PayPalStructGetIncentiveEvaluationResponseDetailsType
	 */
	public $GetIncentiveEvaluationResponseDetails;
	/**
	 * Constructor method for GetIncentiveEvaluationResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetIncentiveEvaluationResponseDetailsType $_getIncentiveEvaluationResponseDetails
	 * @return PayPalStructGetIncentiveEvaluationResponseType
	 */
	public function __construct($_getIncentiveEvaluationResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetIncentiveEvaluationResponseDetails'=>$_getIncentiveEvaluationResponseDetails));
	}
	/**
	 * Get GetIncentiveEvaluationResponseDetails value
	 * @return PayPalStructGetIncentiveEvaluationResponseDetailsType|null
	 */
	public function getGetIncentiveEvaluationResponseDetails()
	{
		return $this->GetIncentiveEvaluationResponseDetails;
	}
	/**
	 * Set GetIncentiveEvaluationResponseDetails value
	 * @param PayPalStructGetIncentiveEvaluationResponseDetailsType $_getIncentiveEvaluationResponseDetails the GetIncentiveEvaluationResponseDetails
	 * @return PayPalStructGetIncentiveEvaluationResponseDetailsType
	 */
	public function setGetIncentiveEvaluationResponseDetails($_getIncentiveEvaluationResponseDetails)
	{
		return ($this->GetIncentiveEvaluationResponseDetails = $_getIncentiveEvaluationResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetIncentiveEvaluationResponseType
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