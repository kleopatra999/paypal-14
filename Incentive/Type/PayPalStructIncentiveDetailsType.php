<?php
/**
 * File for class PayPalStructIncentiveDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveDetailsType originally named IncentiveDetailsType
 * Documentation : Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveDetailsType extends PayPalWsdlClass
{
	/**
	 * The UniqueIdentifier
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique Identifier consisting of redemption code, user friendly descripotion, incentive type, campaign code, incenitve application order and site redeemed on.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $UniqueIdentifier;
	/**
	 * The SiteAppliedOn
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines if the incentive has been applied on Ebay or PayPal.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumIncentiveSiteAppliedOnType
	 */
	public $SiteAppliedOn;
	/**
	 * The TotalDiscountAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : The total discount amount for the incentive, summation of discounts up across all the buckets/items.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TotalDiscountAmount;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : Status of incentive processing. Sussess or Error.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumIncentiveAppliedStatusType
	 */
	public $Status;
	/**
	 * The ErrorCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Error code if there are any errors. Zero otherwise.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var integer
	 */
	public $ErrorCode;
	/**
	 * The IncentiveAppliedDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details of incentive application on individual bucket/item.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveAppliedDetailsType
	 */
	public $IncentiveAppliedDetails;
	/**
	 * Constructor method for IncentiveDetailsType
	 * @see parent::__construct()
	 * @param string $_uniqueIdentifier
	 * @param PayPalEnumIncentiveSiteAppliedOnType $_siteAppliedOn
	 * @param PayPalStructBasicAmountType $_totalDiscountAmount
	 * @param PayPalEnumIncentiveAppliedStatusType $_status
	 * @param integer $_errorCode
	 * @param PayPalStructIncentiveAppliedDetailsType $_incentiveAppliedDetails
	 * @return PayPalStructIncentiveDetailsType
	 */
	public function __construct($_uniqueIdentifier = NULL,$_siteAppliedOn = NULL,$_totalDiscountAmount = NULL,$_status = NULL,$_errorCode = NULL,$_incentiveAppliedDetails = NULL)
	{
		parent::__construct(array('UniqueIdentifier'=>$_uniqueIdentifier,'SiteAppliedOn'=>$_siteAppliedOn,'TotalDiscountAmount'=>$_totalDiscountAmount,'Status'=>$_status,'ErrorCode'=>$_errorCode,'IncentiveAppliedDetails'=>$_incentiveAppliedDetails));
	}
	/**
	 * Get UniqueIdentifier value
	 * @return string|null
	 */
	public function getUniqueIdentifier()
	{
		return $this->UniqueIdentifier;
	}
	/**
	 * Set UniqueIdentifier value
	 * @param string $_uniqueIdentifier the UniqueIdentifier
	 * @return string
	 */
	public function setUniqueIdentifier($_uniqueIdentifier)
	{
		return ($this->UniqueIdentifier = $_uniqueIdentifier);
	}
	/**
	 * Get SiteAppliedOn value
	 * @return PayPalEnumIncentiveSiteAppliedOnType|null
	 */
	public function getSiteAppliedOn()
	{
		return $this->SiteAppliedOn;
	}
	/**
	 * Set SiteAppliedOn value
	 * @uses PayPalEnumIncentiveSiteAppliedOnType::valueIsValid()
	 * @param PayPalEnumIncentiveSiteAppliedOnType $_siteAppliedOn the SiteAppliedOn
	 * @return PayPalEnumIncentiveSiteAppliedOnType
	 */
	public function setSiteAppliedOn($_siteAppliedOn)
	{
		if(!PayPalEnumIncentiveSiteAppliedOnType::valueIsValid($_siteAppliedOn))
		{
			return false;
		}
		return ($this->SiteAppliedOn = $_siteAppliedOn);
	}
	/**
	 * Get TotalDiscountAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTotalDiscountAmount()
	{
		return $this->TotalDiscountAmount;
	}
	/**
	 * Set TotalDiscountAmount value
	 * @param PayPalStructBasicAmountType $_totalDiscountAmount the TotalDiscountAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setTotalDiscountAmount($_totalDiscountAmount)
	{
		return ($this->TotalDiscountAmount = $_totalDiscountAmount);
	}
	/**
	 * Get Status value
	 * @return PayPalEnumIncentiveAppliedStatusType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses PayPalEnumIncentiveAppliedStatusType::valueIsValid()
	 * @param PayPalEnumIncentiveAppliedStatusType $_status the Status
	 * @return PayPalEnumIncentiveAppliedStatusType
	 */
	public function setStatus($_status)
	{
		if(!PayPalEnumIncentiveAppliedStatusType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get ErrorCode value
	 * @return integer|null
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ErrorCode value
	 * @param integer $_errorCode the ErrorCode
	 * @return integer
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->ErrorCode = $_errorCode);
	}
	/**
	 * Get IncentiveAppliedDetails value
	 * @return PayPalStructIncentiveAppliedDetailsType|null
	 */
	public function getIncentiveAppliedDetails()
	{
		return $this->IncentiveAppliedDetails;
	}
	/**
	 * Set IncentiveAppliedDetails value
	 * @param PayPalStructIncentiveAppliedDetailsType $_incentiveAppliedDetails the IncentiveAppliedDetails
	 * @return PayPalStructIncentiveAppliedDetailsType
	 */
	public function setIncentiveAppliedDetails($_incentiveAppliedDetails)
	{
		return ($this->IncentiveAppliedDetails = $_incentiveAppliedDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveDetailsType
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