<?php
/**
 * File for class PayPalStructBuyerDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBuyerDetailsType originally named BuyerDetailsType
 * Documentation : Details about the buyer's account passed in by the merchant or partner. Optional.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBuyerDetailsType extends PayPalWsdlClass
{
	/**
	 * The BuyerId
	 * Meta informations extracted from the WSDL
	 * - documentation : The client's unique ID for this user.
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerId;
	/**
	 * The BuyerUserName
	 * Meta informations extracted from the WSDL
	 * - documentation : The user name of the user at the marketplaces site.
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerUserName;
	/**
	 * The BuyerRegistrationDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date when the user registered with the marketplace.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $BuyerRegistrationDate;
	/**
	 * The TaxIdDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about payer's tax info. Refer to the TaxIdDetailsType for more details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructTaxIdDetailsType
	 */
	public $TaxIdDetails;
	/**
	 * The IdentificationInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains information that identifies the buyer. e.g. email address or the external remember me id.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructIdentificationInfoType
	 */
	public $IdentificationInfo;
	/**
	 * Constructor method for BuyerDetailsType
	 * @see parent::__construct()
	 * @param string $_buyerId
	 * @param string $_buyerUserName
	 * @param dateTime $_buyerRegistrationDate
	 * @param PayPalStructTaxIdDetailsType $_taxIdDetails
	 * @param PayPalStructIdentificationInfoType $_identificationInfo
	 * @return PayPalStructBuyerDetailsType
	 */
	public function __construct($_buyerId = NULL,$_buyerUserName = NULL,$_buyerRegistrationDate = NULL,$_taxIdDetails = NULL,$_identificationInfo = NULL)
	{
		parent::__construct(array('BuyerId'=>$_buyerId,'BuyerUserName'=>$_buyerUserName,'BuyerRegistrationDate'=>$_buyerRegistrationDate,'TaxIdDetails'=>$_taxIdDetails,'IdentificationInfo'=>$_identificationInfo));
	}
	/**
	 * Get BuyerId value
	 * @return string|null
	 */
	public function getBuyerId()
	{
		return $this->BuyerId;
	}
	/**
	 * Set BuyerId value
	 * @param string $_buyerId the BuyerId
	 * @return string
	 */
	public function setBuyerId($_buyerId)
	{
		return ($this->BuyerId = $_buyerId);
	}
	/**
	 * Get BuyerUserName value
	 * @return string|null
	 */
	public function getBuyerUserName()
	{
		return $this->BuyerUserName;
	}
	/**
	 * Set BuyerUserName value
	 * @param string $_buyerUserName the BuyerUserName
	 * @return string
	 */
	public function setBuyerUserName($_buyerUserName)
	{
		return ($this->BuyerUserName = $_buyerUserName);
	}
	/**
	 * Get BuyerRegistrationDate value
	 * @return dateTime|null
	 */
	public function getBuyerRegistrationDate()
	{
		return $this->BuyerRegistrationDate;
	}
	/**
	 * Set BuyerRegistrationDate value
	 * @param dateTime $_buyerRegistrationDate the BuyerRegistrationDate
	 * @return dateTime
	 */
	public function setBuyerRegistrationDate($_buyerRegistrationDate)
	{
		return ($this->BuyerRegistrationDate = $_buyerRegistrationDate);
	}
	/**
	 * Get TaxIdDetails value
	 * @return PayPalStructTaxIdDetailsType|null
	 */
	public function getTaxIdDetails()
	{
		return $this->TaxIdDetails;
	}
	/**
	 * Set TaxIdDetails value
	 * @param PayPalStructTaxIdDetailsType $_taxIdDetails the TaxIdDetails
	 * @return PayPalStructTaxIdDetailsType
	 */
	public function setTaxIdDetails($_taxIdDetails)
	{
		return ($this->TaxIdDetails = $_taxIdDetails);
	}
	/**
	 * Get IdentificationInfo value
	 * @return PayPalStructIdentificationInfoType|null
	 */
	public function getIdentificationInfo()
	{
		return $this->IdentificationInfo;
	}
	/**
	 * Set IdentificationInfo value
	 * @param PayPalStructIdentificationInfoType $_identificationInfo the IdentificationInfo
	 * @return PayPalStructIdentificationInfoType
	 */
	public function setIdentificationInfo($_identificationInfo)
	{
		return ($this->IdentificationInfo = $_identificationInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBuyerDetailsType
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