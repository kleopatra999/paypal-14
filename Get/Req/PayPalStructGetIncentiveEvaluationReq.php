<?php
/**
 * File for class PayPalStructGetIncentiveEvaluationReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetIncentiveEvaluationReq originally named GetIncentiveEvaluationReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetIncentiveEvaluationReq extends PayPalWsdlClass
{
	/**
	 * The GetIncentiveEvaluationRequest
	 * @var PayPalStructGetIncentiveEvaluationRequestType
	 */
	public $GetIncentiveEvaluationRequest;
	/**
	 * Constructor method for GetIncentiveEvaluationReq
	 * @see parent::__construct()
	 * @param PayPalStructGetIncentiveEvaluationRequestType $_getIncentiveEvaluationRequest
	 * @return PayPalStructGetIncentiveEvaluationReq
	 */
	public function __construct($_getIncentiveEvaluationRequest = NULL)
	{
		parent::__construct(array('GetIncentiveEvaluationRequest'=>$_getIncentiveEvaluationRequest));
	}
	/**
	 * Get GetIncentiveEvaluationRequest value
	 * @return PayPalStructGetIncentiveEvaluationRequestType|null
	 */
	public function getGetIncentiveEvaluationRequest()
	{
		return $this->GetIncentiveEvaluationRequest;
	}
	/**
	 * Set GetIncentiveEvaluationRequest value
	 * @param PayPalStructGetIncentiveEvaluationRequestType $_getIncentiveEvaluationRequest the GetIncentiveEvaluationRequest
	 * @return PayPalStructGetIncentiveEvaluationRequestType
	 */
	public function setGetIncentiveEvaluationRequest($_getIncentiveEvaluationRequest)
	{
		return ($this->GetIncentiveEvaluationRequest = $_getIncentiveEvaluationRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetIncentiveEvaluationReq
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