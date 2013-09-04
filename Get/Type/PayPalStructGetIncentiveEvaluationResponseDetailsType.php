<?php
/**
 * File for class PayPalStructGetIncentiveEvaluationResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetIncentiveEvaluationResponseDetailsType originally named GetIncentiveEvaluationResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetIncentiveEvaluationResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The IncentiveDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1000
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveDetailType
	 */
	public $IncentiveDetails;
	/**
	 * The RequestId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $RequestId;
	/**
	 * Constructor method for GetIncentiveEvaluationResponseDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructIncentiveDetailType $_incentiveDetails
	 * @param string $_requestId
	 * @return PayPalStructGetIncentiveEvaluationResponseDetailsType
	 */
	public function __construct($_incentiveDetails = NULL,$_requestId = NULL)
	{
		parent::__construct(array('IncentiveDetails'=>$_incentiveDetails,'RequestId'=>$_requestId));
	}
	/**
	 * Get IncentiveDetails value
	 * @return PayPalStructIncentiveDetailType|null
	 */
	public function getIncentiveDetails()
	{
		return $this->IncentiveDetails;
	}
	/**
	 * Set IncentiveDetails value
	 * @param PayPalStructIncentiveDetailType $_incentiveDetails the IncentiveDetails
	 * @return PayPalStructIncentiveDetailType
	 */
	public function setIncentiveDetails($_incentiveDetails)
	{
		return ($this->IncentiveDetails = $_incentiveDetails);
	}
	/**
	 * Get RequestId value
	 * @return string|null
	 */
	public function getRequestId()
	{
		return $this->RequestId;
	}
	/**
	 * Set RequestId value
	 * @param string $_requestId the RequestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->RequestId = $_requestId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetIncentiveEvaluationResponseDetailsType
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