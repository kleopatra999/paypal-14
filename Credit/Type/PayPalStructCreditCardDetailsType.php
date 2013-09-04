<?php
/**
 * File for class PayPalStructCreditCardDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreditCardDetailsType originally named CreditCardDetailsType
 * Documentation : CreditCardDetailsType Information about a Credit Card.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreditCardDetailsType extends PayPalWsdlClass
{
	/**
	 * The CreditCardType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumCreditCardTypeType
	 */
	public $CreditCardType;
	/**
	 * The CreditCardNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CreditCardNumber;
	/**
	 * The ExpMonth
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $ExpMonth;
	/**
	 * The ExpYear
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $ExpYear;
	/**
	 * The CardOwner
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructPayerInfoType
	 */
	public $CardOwner;
	/**
	 * The CVV2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CVV2;
	/**
	 * The StartMonth
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $StartMonth;
	/**
	 * The StartYear
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $StartYear;
	/**
	 * The IssueNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $IssueNumber;
	/**
	 * The ThreeDSecureRequest
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructThreeDSecureRequestType
	 */
	public $ThreeDSecureRequest;
	/**
	 * Constructor method for CreditCardDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumCreditCardTypeType $_creditCardType
	 * @param string $_creditCardNumber
	 * @param int $_expMonth
	 * @param int $_expYear
	 * @param PayPalStructPayerInfoType $_cardOwner
	 * @param string $_cVV2
	 * @param int $_startMonth
	 * @param int $_startYear
	 * @param string $_issueNumber
	 * @param PayPalStructThreeDSecureRequestType $_threeDSecureRequest
	 * @return PayPalStructCreditCardDetailsType
	 */
	public function __construct($_creditCardType = NULL,$_creditCardNumber = NULL,$_expMonth = NULL,$_expYear = NULL,$_cardOwner = NULL,$_cVV2 = NULL,$_startMonth = NULL,$_startYear = NULL,$_issueNumber = NULL,$_threeDSecureRequest = NULL)
	{
		parent::__construct(array('CreditCardType'=>$_creditCardType,'CreditCardNumber'=>$_creditCardNumber,'ExpMonth'=>$_expMonth,'ExpYear'=>$_expYear,'CardOwner'=>$_cardOwner,'CVV2'=>$_cVV2,'StartMonth'=>$_startMonth,'StartYear'=>$_startYear,'IssueNumber'=>$_issueNumber,'ThreeDSecureRequest'=>$_threeDSecureRequest));
	}
	/**
	 * Get CreditCardType value
	 * @return PayPalEnumCreditCardTypeType|null
	 */
	public function getCreditCardType()
	{
		return $this->CreditCardType;
	}
	/**
	 * Set CreditCardType value
	 * @uses PayPalEnumCreditCardTypeType::valueIsValid()
	 * @param PayPalEnumCreditCardTypeType $_creditCardType the CreditCardType
	 * @return PayPalEnumCreditCardTypeType
	 */
	public function setCreditCardType($_creditCardType)
	{
		if(!PayPalEnumCreditCardTypeType::valueIsValid($_creditCardType))
		{
			return false;
		}
		return ($this->CreditCardType = $_creditCardType);
	}
	/**
	 * Get CreditCardNumber value
	 * @return string|null
	 */
	public function getCreditCardNumber()
	{
		return $this->CreditCardNumber;
	}
	/**
	 * Set CreditCardNumber value
	 * @param string $_creditCardNumber the CreditCardNumber
	 * @return string
	 */
	public function setCreditCardNumber($_creditCardNumber)
	{
		return ($this->CreditCardNumber = $_creditCardNumber);
	}
	/**
	 * Get ExpMonth value
	 * @return int|null
	 */
	public function getExpMonth()
	{
		return $this->ExpMonth;
	}
	/**
	 * Set ExpMonth value
	 * @param int $_expMonth the ExpMonth
	 * @return int
	 */
	public function setExpMonth($_expMonth)
	{
		return ($this->ExpMonth = $_expMonth);
	}
	/**
	 * Get ExpYear value
	 * @return int|null
	 */
	public function getExpYear()
	{
		return $this->ExpYear;
	}
	/**
	 * Set ExpYear value
	 * @param int $_expYear the ExpYear
	 * @return int
	 */
	public function setExpYear($_expYear)
	{
		return ($this->ExpYear = $_expYear);
	}
	/**
	 * Get CardOwner value
	 * @return PayPalStructPayerInfoType|null
	 */
	public function getCardOwner()
	{
		return $this->CardOwner;
	}
	/**
	 * Set CardOwner value
	 * @param PayPalStructPayerInfoType $_cardOwner the CardOwner
	 * @return PayPalStructPayerInfoType
	 */
	public function setCardOwner($_cardOwner)
	{
		return ($this->CardOwner = $_cardOwner);
	}
	/**
	 * Get CVV2 value
	 * @return string|null
	 */
	public function getCVV2()
	{
		return $this->CVV2;
	}
	/**
	 * Set CVV2 value
	 * @param string $_cVV2 the CVV2
	 * @return string
	 */
	public function setCVV2($_cVV2)
	{
		return ($this->CVV2 = $_cVV2);
	}
	/**
	 * Get StartMonth value
	 * @return int|null
	 */
	public function getStartMonth()
	{
		return $this->StartMonth;
	}
	/**
	 * Set StartMonth value
	 * @param int $_startMonth the StartMonth
	 * @return int
	 */
	public function setStartMonth($_startMonth)
	{
		return ($this->StartMonth = $_startMonth);
	}
	/**
	 * Get StartYear value
	 * @return int|null
	 */
	public function getStartYear()
	{
		return $this->StartYear;
	}
	/**
	 * Set StartYear value
	 * @param int $_startYear the StartYear
	 * @return int
	 */
	public function setStartYear($_startYear)
	{
		return ($this->StartYear = $_startYear);
	}
	/**
	 * Get IssueNumber value
	 * @return string|null
	 */
	public function getIssueNumber()
	{
		return $this->IssueNumber;
	}
	/**
	 * Set IssueNumber value
	 * @param string $_issueNumber the IssueNumber
	 * @return string
	 */
	public function setIssueNumber($_issueNumber)
	{
		return ($this->IssueNumber = $_issueNumber);
	}
	/**
	 * Get ThreeDSecureRequest value
	 * @return PayPalStructThreeDSecureRequestType|null
	 */
	public function getThreeDSecureRequest()
	{
		return $this->ThreeDSecureRequest;
	}
	/**
	 * Set ThreeDSecureRequest value
	 * @param PayPalStructThreeDSecureRequestType $_threeDSecureRequest the ThreeDSecureRequest
	 * @return PayPalStructThreeDSecureRequestType
	 */
	public function setThreeDSecureRequest($_threeDSecureRequest)
	{
		return ($this->ThreeDSecureRequest = $_threeDSecureRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreditCardDetailsType
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