<?php
/**
 * File for class PayPalStructFundingSourceDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFundingSourceDetailsType originally named FundingSourceDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFundingSourceDetailsType extends PayPalWsdlClass
{
	/**
	 * The AllowPushFunding
	 * Meta informations extracted from the WSDL
	 * - documentation : Allowable values: 0,1 The value 1 indicates that the customer can accept push funding, and 0 means they cannot. Optional Character length and limitations: One single-byte numeric character.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $AllowPushFunding;
	/**
	 * The UserSelectedFundingSource
	 * Meta informations extracted from the WSDL
	 * - documentation : Allowable values: ELV, CreditCard, ChinaUnionPay, BML This element could be used to specify the perered funding option for a guest users. It has effect only if LandingPage element is set to Billing. Otherwise it will be ignored.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumUserSelectedFundingSourceType
	 */
	public $UserSelectedFundingSource;
	/**
	 * Constructor method for FundingSourceDetailsType
	 * @see parent::__construct()
	 * @param string $_allowPushFunding
	 * @param PayPalEnumUserSelectedFundingSourceType $_userSelectedFundingSource
	 * @return PayPalStructFundingSourceDetailsType
	 */
	public function __construct($_allowPushFunding = NULL,$_userSelectedFundingSource = NULL)
	{
		parent::__construct(array('AllowPushFunding'=>$_allowPushFunding,'UserSelectedFundingSource'=>$_userSelectedFundingSource));
	}
	/**
	 * Get AllowPushFunding value
	 * @return string|null
	 */
	public function getAllowPushFunding()
	{
		return $this->AllowPushFunding;
	}
	/**
	 * Set AllowPushFunding value
	 * @param string $_allowPushFunding the AllowPushFunding
	 * @return string
	 */
	public function setAllowPushFunding($_allowPushFunding)
	{
		return ($this->AllowPushFunding = $_allowPushFunding);
	}
	/**
	 * Get UserSelectedFundingSource value
	 * @return PayPalEnumUserSelectedFundingSourceType|null
	 */
	public function getUserSelectedFundingSource()
	{
		return $this->UserSelectedFundingSource;
	}
	/**
	 * Set UserSelectedFundingSource value
	 * @uses PayPalEnumUserSelectedFundingSourceType::valueIsValid()
	 * @param PayPalEnumUserSelectedFundingSourceType $_userSelectedFundingSource the UserSelectedFundingSource
	 * @return PayPalEnumUserSelectedFundingSourceType
	 */
	public function setUserSelectedFundingSource($_userSelectedFundingSource)
	{
		if(!PayPalEnumUserSelectedFundingSourceType::valueIsValid($_userSelectedFundingSource))
		{
			return false;
		}
		return ($this->UserSelectedFundingSource = $_userSelectedFundingSource);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFundingSourceDetailsType
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