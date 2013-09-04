<?php
/**
 * File for class PayPalStructEnterBoardingRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructEnterBoardingRequestDetailsType originally named EnterBoardingRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructEnterBoardingRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProgramCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Onboarding program code given to you by PayPal. Required Character length and limitations: 64 alphanumeric characters
	 * @var string
	 */
	public $ProgramCode;
	/**
	 * The ProductList
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of comma-separated values that indicate the PayPal products you are implementing for this merchant: Direct Payment (dp) allows payments by credit card without requiring the customer to have a PayPal account. Express Checkout (ec) allows customers to fund transactions with their PayPal account. Authorization and Capture (auth_settle) allows merchants to verify availability of funds in a PayPal account, but capture them at a later time. Administrative APIs (admin_api) is a collection of the PayPal APIs for transaction searching, getting transaction details, refunding, and mass payments. Required Character length and limitations: 64 alphanumeric characters
	 * @var string
	 */
	public $ProductList;
	/**
	 * The PartnerCustom
	 * Meta informations extracted from the WSDL
	 * - documentation : Any custom information you want to store for this partner Optional Character length and limitations: 256 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $PartnerCustom;
	/**
	 * The ImageUrl
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL for the logo displayed on the PayPal Partner Welcome Page. Optional Character length and limitations: 2,048 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $ImageUrl;
	/**
	 * The MarketingCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : Marketing category tha configures the graphic displayed n the PayPal Partner Welcome page.
	 * - minOccurs : 0
	 * @var PayPalEnumMarketingCategoryType
	 */
	public $MarketingCategory;
	/**
	 * The BusinessInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the merchantâs business
	 * - minOccurs : 0
	 * @var PayPalStructBusinessInfoType
	 */
	public $BusinessInfo;
	/**
	 * The OwnerInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the merchant (the business owner)
	 * - minOccurs : 0
	 * @var PayPalStructBusinessOwnerInfoType
	 */
	public $OwnerInfo;
	/**
	 * The BankAccount
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the merchant's bank account
	 * - minOccurs : 0
	 * @var PayPalStructBankAccountDetailsType
	 */
	public $BankAccount;
	/**
	 * Constructor method for EnterBoardingRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_programCode
	 * @param string $_productList
	 * @param string $_partnerCustom
	 * @param string $_imageUrl
	 * @param PayPalEnumMarketingCategoryType $_marketingCategory
	 * @param PayPalStructBusinessInfoType $_businessInfo
	 * @param PayPalStructBusinessOwnerInfoType $_ownerInfo
	 * @param PayPalStructBankAccountDetailsType $_bankAccount
	 * @return PayPalStructEnterBoardingRequestDetailsType
	 */
	public function __construct($_programCode = NULL,$_productList = NULL,$_partnerCustom = NULL,$_imageUrl = NULL,$_marketingCategory = NULL,$_businessInfo = NULL,$_ownerInfo = NULL,$_bankAccount = NULL)
	{
		parent::__construct(array('ProgramCode'=>$_programCode,'ProductList'=>$_productList,'PartnerCustom'=>$_partnerCustom,'ImageUrl'=>$_imageUrl,'MarketingCategory'=>$_marketingCategory,'BusinessInfo'=>$_businessInfo,'OwnerInfo'=>$_ownerInfo,'BankAccount'=>$_bankAccount));
	}
	/**
	 * Get ProgramCode value
	 * @return string|null
	 */
	public function getProgramCode()
	{
		return $this->ProgramCode;
	}
	/**
	 * Set ProgramCode value
	 * @param string $_programCode the ProgramCode
	 * @return string
	 */
	public function setProgramCode($_programCode)
	{
		return ($this->ProgramCode = $_programCode);
	}
	/**
	 * Get ProductList value
	 * @return string|null
	 */
	public function getProductList()
	{
		return $this->ProductList;
	}
	/**
	 * Set ProductList value
	 * @param string $_productList the ProductList
	 * @return string
	 */
	public function setProductList($_productList)
	{
		return ($this->ProductList = $_productList);
	}
	/**
	 * Get PartnerCustom value
	 * @return string|null
	 */
	public function getPartnerCustom()
	{
		return $this->PartnerCustom;
	}
	/**
	 * Set PartnerCustom value
	 * @param string $_partnerCustom the PartnerCustom
	 * @return string
	 */
	public function setPartnerCustom($_partnerCustom)
	{
		return ($this->PartnerCustom = $_partnerCustom);
	}
	/**
	 * Get ImageUrl value
	 * @return string|null
	 */
	public function getImageUrl()
	{
		return $this->ImageUrl;
	}
	/**
	 * Set ImageUrl value
	 * @param string $_imageUrl the ImageUrl
	 * @return string
	 */
	public function setImageUrl($_imageUrl)
	{
		return ($this->ImageUrl = $_imageUrl);
	}
	/**
	 * Get MarketingCategory value
	 * @return PayPalEnumMarketingCategoryType|null
	 */
	public function getMarketingCategory()
	{
		return $this->MarketingCategory;
	}
	/**
	 * Set MarketingCategory value
	 * @uses PayPalEnumMarketingCategoryType::valueIsValid()
	 * @param PayPalEnumMarketingCategoryType $_marketingCategory the MarketingCategory
	 * @return PayPalEnumMarketingCategoryType
	 */
	public function setMarketingCategory($_marketingCategory)
	{
		if(!PayPalEnumMarketingCategoryType::valueIsValid($_marketingCategory))
		{
			return false;
		}
		return ($this->MarketingCategory = $_marketingCategory);
	}
	/**
	 * Get BusinessInfo value
	 * @return PayPalStructBusinessInfoType|null
	 */
	public function getBusinessInfo()
	{
		return $this->BusinessInfo;
	}
	/**
	 * Set BusinessInfo value
	 * @param PayPalStructBusinessInfoType $_businessInfo the BusinessInfo
	 * @return PayPalStructBusinessInfoType
	 */
	public function setBusinessInfo($_businessInfo)
	{
		return ($this->BusinessInfo = $_businessInfo);
	}
	/**
	 * Get OwnerInfo value
	 * @return PayPalStructBusinessOwnerInfoType|null
	 */
	public function getOwnerInfo()
	{
		return $this->OwnerInfo;
	}
	/**
	 * Set OwnerInfo value
	 * @param PayPalStructBusinessOwnerInfoType $_ownerInfo the OwnerInfo
	 * @return PayPalStructBusinessOwnerInfoType
	 */
	public function setOwnerInfo($_ownerInfo)
	{
		return ($this->OwnerInfo = $_ownerInfo);
	}
	/**
	 * Get BankAccount value
	 * @return PayPalStructBankAccountDetailsType|null
	 */
	public function getBankAccount()
	{
		return $this->BankAccount;
	}
	/**
	 * Set BankAccount value
	 * @param PayPalStructBankAccountDetailsType $_bankAccount the BankAccount
	 * @return PayPalStructBankAccountDetailsType
	 */
	public function setBankAccount($_bankAccount)
	{
		return ($this->BankAccount = $_bankAccount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructEnterBoardingRequestDetailsType
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