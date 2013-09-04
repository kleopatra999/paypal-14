<?php
/**
 * File for class PayPalStructReferenceCreditCardDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReferenceCreditCardDetailsType originally named ReferenceCreditCardDetailsType
 * Documentation : CreditCardDetailsType for DCC Reference Transaction Information about a Credit Card.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReferenceCreditCardDetailsType extends PayPalWsdlClass
{
	/**
	 * The CreditCardNumberType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructCreditCardNumberTypeType
	 */
	public $CreditCardNumberType;
	/**
	 * The ExpMonth
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $ExpMonth;
	/**
	 * The ExpYear
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $ExpYear;
	/**
	 * The CardOwnerName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructPersonNameType
	 */
	public $CardOwnerName;
	/**
	 * The BillingAddress
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $BillingAddress;
	/**
	 * The CVV2
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CVV2;
	/**
	 * The StartMonth
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $StartMonth;
	/**
	 * The StartYear
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $StartYear;
	/**
	 * The IssueNumber
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $IssueNumber;
	/**
	 * Constructor method for ReferenceCreditCardDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructCreditCardNumberTypeType $_creditCardNumberType
	 * @param int $_expMonth
	 * @param int $_expYear
	 * @param PayPalStructPersonNameType $_cardOwnerName
	 * @param PayPalStructAddressType $_billingAddress
	 * @param string $_cVV2
	 * @param int $_startMonth
	 * @param int $_startYear
	 * @param string $_issueNumber
	 * @return PayPalStructReferenceCreditCardDetailsType
	 */
	public function __construct($_creditCardNumberType = NULL,$_expMonth = NULL,$_expYear = NULL,$_cardOwnerName = NULL,$_billingAddress = NULL,$_cVV2 = NULL,$_startMonth = NULL,$_startYear = NULL,$_issueNumber = NULL)
	{
		parent::__construct(array('CreditCardNumberType'=>$_creditCardNumberType,'ExpMonth'=>$_expMonth,'ExpYear'=>$_expYear,'CardOwnerName'=>$_cardOwnerName,'BillingAddress'=>$_billingAddress,'CVV2'=>$_cVV2,'StartMonth'=>$_startMonth,'StartYear'=>$_startYear,'IssueNumber'=>$_issueNumber));
	}
	/**
	 * Get CreditCardNumberType value
	 * @return PayPalStructCreditCardNumberTypeType|null
	 */
	public function getCreditCardNumberType()
	{
		return $this->CreditCardNumberType;
	}
	/**
	 * Set CreditCardNumberType value
	 * @param PayPalStructCreditCardNumberTypeType $_creditCardNumberType the CreditCardNumberType
	 * @return PayPalStructCreditCardNumberTypeType
	 */
	public function setCreditCardNumberType($_creditCardNumberType)
	{
		return ($this->CreditCardNumberType = $_creditCardNumberType);
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
	 * Get CardOwnerName value
	 * @return PayPalStructPersonNameType|null
	 */
	public function getCardOwnerName()
	{
		return $this->CardOwnerName;
	}
	/**
	 * Set CardOwnerName value
	 * @param PayPalStructPersonNameType $_cardOwnerName the CardOwnerName
	 * @return PayPalStructPersonNameType
	 */
	public function setCardOwnerName($_cardOwnerName)
	{
		return ($this->CardOwnerName = $_cardOwnerName);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReferenceCreditCardDetailsType
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