<?php
/**
 * File for class PayPalStructGetIncentiveEvaluationRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetIncentiveEvaluationRequestDetailsType originally named GetIncentiveEvaluationRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetIncentiveEvaluationRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalBuyerId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalBuyerId;
	/**
	 * The IncentiveCodes
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1000
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncentiveCodes;
	/**
	 * The ApplyIndication
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1000
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveApplyIndicationType
	 */
	public $ApplyIndication;
	/**
	 * The Buckets
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 100
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveBucketType
	 */
	public $Buckets;
	/**
	 * The CartTotalAmt
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $CartTotalAmt;
	/**
	 * The RequestDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveRequestDetailsType
	 */
	public $RequestDetails;
	/**
	 * Constructor method for GetIncentiveEvaluationRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_externalBuyerId
	 * @param string $_incentiveCodes
	 * @param PayPalStructIncentiveApplyIndicationType $_applyIndication
	 * @param PayPalStructIncentiveBucketType $_buckets
	 * @param PayPalStructBasicAmountType $_cartTotalAmt
	 * @param PayPalStructIncentiveRequestDetailsType $_requestDetails
	 * @return PayPalStructGetIncentiveEvaluationRequestDetailsType
	 */
	public function __construct($_externalBuyerId = NULL,$_incentiveCodes = NULL,$_applyIndication = NULL,$_buckets = NULL,$_cartTotalAmt = NULL,$_requestDetails = NULL)
	{
		parent::__construct(array('ExternalBuyerId'=>$_externalBuyerId,'IncentiveCodes'=>$_incentiveCodes,'ApplyIndication'=>$_applyIndication,'Buckets'=>$_buckets,'CartTotalAmt'=>$_cartTotalAmt,'RequestDetails'=>$_requestDetails));
	}
	/**
	 * Get ExternalBuyerId value
	 * @return string|null
	 */
	public function getExternalBuyerId()
	{
		return $this->ExternalBuyerId;
	}
	/**
	 * Set ExternalBuyerId value
	 * @param string $_externalBuyerId the ExternalBuyerId
	 * @return string
	 */
	public function setExternalBuyerId($_externalBuyerId)
	{
		return ($this->ExternalBuyerId = $_externalBuyerId);
	}
	/**
	 * Get IncentiveCodes value
	 * @return string|null
	 */
	public function getIncentiveCodes()
	{
		return $this->IncentiveCodes;
	}
	/**
	 * Set IncentiveCodes value
	 * @param string $_incentiveCodes the IncentiveCodes
	 * @return string
	 */
	public function setIncentiveCodes($_incentiveCodes)
	{
		return ($this->IncentiveCodes = $_incentiveCodes);
	}
	/**
	 * Get ApplyIndication value
	 * @return PayPalStructIncentiveApplyIndicationType|null
	 */
	public function getApplyIndication()
	{
		return $this->ApplyIndication;
	}
	/**
	 * Set ApplyIndication value
	 * @param PayPalStructIncentiveApplyIndicationType $_applyIndication the ApplyIndication
	 * @return PayPalStructIncentiveApplyIndicationType
	 */
	public function setApplyIndication($_applyIndication)
	{
		return ($this->ApplyIndication = $_applyIndication);
	}
	/**
	 * Get Buckets value
	 * @return PayPalStructIncentiveBucketType|null
	 */
	public function getBuckets()
	{
		return $this->Buckets;
	}
	/**
	 * Set Buckets value
	 * @param PayPalStructIncentiveBucketType $_buckets the Buckets
	 * @return PayPalStructIncentiveBucketType
	 */
	public function setBuckets($_buckets)
	{
		return ($this->Buckets = $_buckets);
	}
	/**
	 * Get CartTotalAmt value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getCartTotalAmt()
	{
		return $this->CartTotalAmt;
	}
	/**
	 * Set CartTotalAmt value
	 * @param PayPalStructBasicAmountType $_cartTotalAmt the CartTotalAmt
	 * @return PayPalStructBasicAmountType
	 */
	public function setCartTotalAmt($_cartTotalAmt)
	{
		return ($this->CartTotalAmt = $_cartTotalAmt);
	}
	/**
	 * Get RequestDetails value
	 * @return PayPalStructIncentiveRequestDetailsType|null
	 */
	public function getRequestDetails()
	{
		return $this->RequestDetails;
	}
	/**
	 * Set RequestDetails value
	 * @param PayPalStructIncentiveRequestDetailsType $_requestDetails the RequestDetails
	 * @return PayPalStructIncentiveRequestDetailsType
	 */
	public function setRequestDetails($_requestDetails)
	{
		return ($this->RequestDetails = $_requestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetIncentiveEvaluationRequestDetailsType
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