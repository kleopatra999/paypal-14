<?php
/**
 * File for class PayPalStructBAUpdateRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBAUpdateRequestType originally named BAUpdateRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBAUpdateRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ReferenceID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ReferenceID;
	/**
	 * The BillingAgreementDescription
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementDescription;
	/**
	 * The BillingAgreementStatus
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumMerchantPullStatusCodeType
	 */
	public $BillingAgreementStatus;
	/**
	 * The BillingAgreementCustom
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementCustom;
	/**
	 * Constructor method for BAUpdateRequestType
	 * @see parent::__construct()
	 * @param string $_referenceID
	 * @param string $_billingAgreementDescription
	 * @param PayPalEnumMerchantPullStatusCodeType $_billingAgreementStatus
	 * @param string $_billingAgreementCustom
	 * @return PayPalStructBAUpdateRequestType
	 */
	public function __construct($_referenceID,$_billingAgreementDescription = NULL,$_billingAgreementStatus = NULL,$_billingAgreementCustom = NULL)
	{
		PayPalWsdlClass::__construct(array('ReferenceID'=>$_referenceID,'BillingAgreementDescription'=>$_billingAgreementDescription,'BillingAgreementStatus'=>$_billingAgreementStatus,'BillingAgreementCustom'=>$_billingAgreementCustom));
	}
	/**
	 * Get ReferenceID value
	 * @return string
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * Set ReferenceID value
	 * @param string $_referenceID the ReferenceID
	 * @return string
	 */
	public function setReferenceID($_referenceID)
	{
		return ($this->ReferenceID = $_referenceID);
	}
	/**
	 * Get BillingAgreementDescription value
	 * @return string|null
	 */
	public function getBillingAgreementDescription()
	{
		return $this->BillingAgreementDescription;
	}
	/**
	 * Set BillingAgreementDescription value
	 * @param string $_billingAgreementDescription the BillingAgreementDescription
	 * @return string
	 */
	public function setBillingAgreementDescription($_billingAgreementDescription)
	{
		return ($this->BillingAgreementDescription = $_billingAgreementDescription);
	}
	/**
	 * Get BillingAgreementStatus value
	 * @return PayPalEnumMerchantPullStatusCodeType|null
	 */
	public function getBillingAgreementStatus()
	{
		return $this->BillingAgreementStatus;
	}
	/**
	 * Set BillingAgreementStatus value
	 * @uses PayPalEnumMerchantPullStatusCodeType::valueIsValid()
	 * @param PayPalEnumMerchantPullStatusCodeType $_billingAgreementStatus the BillingAgreementStatus
	 * @return PayPalEnumMerchantPullStatusCodeType
	 */
	public function setBillingAgreementStatus($_billingAgreementStatus)
	{
		if(!PayPalEnumMerchantPullStatusCodeType::valueIsValid($_billingAgreementStatus))
		{
			return false;
		}
		return ($this->BillingAgreementStatus = $_billingAgreementStatus);
	}
	/**
	 * Get BillingAgreementCustom value
	 * @return string|null
	 */
	public function getBillingAgreementCustom()
	{
		return $this->BillingAgreementCustom;
	}
	/**
	 * Set BillingAgreementCustom value
	 * @param string $_billingAgreementCustom the BillingAgreementCustom
	 * @return string
	 */
	public function setBillingAgreementCustom($_billingAgreementCustom)
	{
		return ($this->BillingAgreementCustom = $_billingAgreementCustom);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBAUpdateRequestType
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