<?php
/**
 * File for class PayPalStructBusinessOwnerInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBusinessOwnerInfoType originally named BusinessOwnerInfoType
 * Documentation : BusinessOwnerInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBusinessOwnerInfoType extends PayPalWsdlClass
{
	/**
	 * The Owner
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about the business owner
	 * - minOccurs : 0
	 * @var PayPalStructPayerInfoType
	 */
	public $Owner;
	/**
	 * The HomePhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Business ownerâs home telephone number Character length and limitations: 32 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $HomePhone;
	/**
	 * The MobilePhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Business ownerâs mobile telephone number Character length and limitations: 32 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $MobilePhone;
	/**
	 * The SSN
	 * Meta informations extracted from the WSDL
	 * - documentation : Business ownerâs social security number Character length and limitations: 9 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $SSN;
	/**
	 * Constructor method for BusinessOwnerInfoType
	 * @see parent::__construct()
	 * @param PayPalStructPayerInfoType $_owner
	 * @param string $_homePhone
	 * @param string $_mobilePhone
	 * @param string $_sSN
	 * @return PayPalStructBusinessOwnerInfoType
	 */
	public function __construct($_owner = NULL,$_homePhone = NULL,$_mobilePhone = NULL,$_sSN = NULL)
	{
		parent::__construct(array('Owner'=>$_owner,'HomePhone'=>$_homePhone,'MobilePhone'=>$_mobilePhone,'SSN'=>$_sSN));
	}
	/**
	 * Get Owner value
	 * @return PayPalStructPayerInfoType|null
	 */
	public function getOwner()
	{
		return $this->Owner;
	}
	/**
	 * Set Owner value
	 * @param PayPalStructPayerInfoType $_owner the Owner
	 * @return PayPalStructPayerInfoType
	 */
	public function setOwner($_owner)
	{
		return ($this->Owner = $_owner);
	}
	/**
	 * Get HomePhone value
	 * @return string|null
	 */
	public function getHomePhone()
	{
		return $this->HomePhone;
	}
	/**
	 * Set HomePhone value
	 * @param string $_homePhone the HomePhone
	 * @return string
	 */
	public function setHomePhone($_homePhone)
	{
		return ($this->HomePhone = $_homePhone);
	}
	/**
	 * Get MobilePhone value
	 * @return string|null
	 */
	public function getMobilePhone()
	{
		return $this->MobilePhone;
	}
	/**
	 * Set MobilePhone value
	 * @param string $_mobilePhone the MobilePhone
	 * @return string
	 */
	public function setMobilePhone($_mobilePhone)
	{
		return ($this->MobilePhone = $_mobilePhone);
	}
	/**
	 * Get SSN value
	 * @return string|null
	 */
	public function getSSN()
	{
		return $this->SSN;
	}
	/**
	 * Set SSN value
	 * @param string $_sSN the SSN
	 * @return string
	 */
	public function setSSN($_sSN)
	{
		return ($this->SSN = $_sSN);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBusinessOwnerInfoType
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