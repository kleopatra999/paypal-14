<?php
/**
 * File for class PayPalStructBAUpdateResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBAUpdateResponseDetailsType originally named BAUpdateResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBAUpdateResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingAgreementID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $BillingAgreementID;
	/**
	 * The BillingAgreementStatus
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumMerchantPullStatusCodeType
	 */
	public $BillingAgreementStatus;
	/**
	 * The PayerInfo
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructPayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The BillingAgreementDescription
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementDescription;
	/**
	 * The BillingAgreementCustom
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BillingAgreementCustom;
	/**
	 * The BillingAgreementMax
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BillingAgreementMax;
	/**
	 * The BillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in BAUpdateResponseDetails.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $BillingAddress;
	/**
	 * Constructor method for BAUpdateResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_billingAgreementID
	 * @param PayPalEnumMerchantPullStatusCodeType $_billingAgreementStatus
	 * @param PayPalStructPayerInfoType $_payerInfo
	 * @param string $_billingAgreementDescription
	 * @param string $_billingAgreementCustom
	 * @param PayPalStructBasicAmountType $_billingAgreementMax
	 * @param PayPalStructAddressType $_billingAddress
	 * @return PayPalStructBAUpdateResponseDetailsType
	 */
	public function __construct($_billingAgreementID,$_billingAgreementStatus,$_payerInfo,$_billingAgreementDescription = NULL,$_billingAgreementCustom = NULL,$_billingAgreementMax = NULL,$_billingAddress = NULL)
	{
		parent::__construct(array('BillingAgreementID'=>$_billingAgreementID,'BillingAgreementStatus'=>$_billingAgreementStatus,'PayerInfo'=>$_payerInfo,'BillingAgreementDescription'=>$_billingAgreementDescription,'BillingAgreementCustom'=>$_billingAgreementCustom,'BillingAgreementMax'=>$_billingAgreementMax,'BillingAddress'=>$_billingAddress));
	}
	/**
	 * Get BillingAgreementID value
	 * @return string
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
	}
	/**
	 * Set BillingAgreementID value
	 * @param string $_billingAgreementID the BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_billingAgreementID)
	{
		return ($this->BillingAgreementID = $_billingAgreementID);
	}
	/**
	 * Get BillingAgreementStatus value
	 * @return PayPalEnumMerchantPullStatusCodeType
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
	 * Get PayerInfo value
	 * @return PayPalStructPayerInfoType
	 */
	public function getPayerInfo()
	{
		return $this->PayerInfo;
	}
	/**
	 * Set PayerInfo value
	 * @param PayPalStructPayerInfoType $_payerInfo the PayerInfo
	 * @return PayPalStructPayerInfoType
	 */
	public function setPayerInfo($_payerInfo)
	{
		return ($this->PayerInfo = $_payerInfo);
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
	 * Get BillingAgreementMax value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBillingAgreementMax()
	{
		return $this->BillingAgreementMax;
	}
	/**
	 * Set BillingAgreementMax value
	 * @param PayPalStructBasicAmountType $_billingAgreementMax the BillingAgreementMax
	 * @return PayPalStructBasicAmountType
	 */
	public function setBillingAgreementMax($_billingAgreementMax)
	{
		return ($this->BillingAgreementMax = $_billingAgreementMax);
	}
	/**
	 * Get BillingAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
	}
	/**
	 * Set BillingAddress value
	 * @param PayPalStructAddressType $_billingAddress the BillingAddress
	 * @return PayPalStructAddressType
	 */
	public function setBillingAddress($_billingAddress)
	{
		return ($this->BillingAddress = $_billingAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBAUpdateResponseDetailsType
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