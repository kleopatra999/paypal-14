<?php
/**
 * File for class PayPalStructIncentiveInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveInfoType originally named IncentiveInfoType
 * Documentation : Details of incentive application on individual bucket.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveInfoType extends PayPalWsdlClass
{
	/**
	 * The IncentiveCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Incentive redemption code.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncentiveCode;
	/**
	 * The ApplyIndication
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines which bucket or item that the incentive should be applied to.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveApplyIndicationType
	 */
	public $ApplyIndication;
	/**
	 * Constructor method for IncentiveInfoType
	 * @see parent::__construct()
	 * @param string $_incentiveCode
	 * @param PayPalStructIncentiveApplyIndicationType $_applyIndication
	 * @return PayPalStructIncentiveInfoType
	 */
	public function __construct($_incentiveCode = NULL,$_applyIndication = NULL)
	{
		parent::__construct(array('IncentiveCode'=>$_incentiveCode,'ApplyIndication'=>$_applyIndication));
	}
	/**
	 * Get IncentiveCode value
	 * @return string|null
	 */
	public function getIncentiveCode()
	{
		return $this->IncentiveCode;
	}
	/**
	 * Set IncentiveCode value
	 * @param string $_incentiveCode the IncentiveCode
	 * @return string
	 */
	public function setIncentiveCode($_incentiveCode)
	{
		return ($this->IncentiveCode = $_incentiveCode);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveInfoType
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