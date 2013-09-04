<?php
/**
 * File for class PayPalStructBusinessInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBusinessInfoType originally named BusinessInfoType
 * Documentation : BusinessInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBusinessInfoType extends PayPalWsdlClass
{
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of business, such as corporation or sole proprietorship
	 * - minOccurs : 0
	 * @var PayPalEnumBusinessTypeType
	 */
	public $Type;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Official name of business Character length and limitations: 75 alphanumeric characters
	 * - minOccurs : 0
	 * - maxLength : 25
	 * @var string
	 */
	public $Name;
	/**
	 * The Address
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs business postal address
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $Address;
	/**
	 * The WorkPhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Businessâs primary telephone number Character length and limitations: 20 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $WorkPhone;
	/**
	 * The Category
	 * Meta informations extracted from the WSDL
	 * - documentation : Line of business, as defined in the enumerations
	 * - minOccurs : 0
	 * @var PayPalEnumBusinessCategoryType
	 */
	public $Category;
	/**
	 * The SubCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : Business sub-category, as defined in the enumerations
	 * - minOccurs : 0
	 * @var PayPalEnumBusinessSubCategoryType
	 */
	public $SubCategory;
	/**
	 * The AveragePrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Average transaction price, as defined by the enumerations. Enumeration Meaning AverageTransactionPrice-Not-Applicable AverageTransactionPrice-Range1 Less than $25 USD AverageTransactionPrice-Range2 $25 USD to $50 USD AverageTransactionPrice-Range3 $50 USD to $100 USD AverageTransactionPrice-Range4 $100 USD to $250 USD AverageTransactionPrice-Range5 $250 USD to $500 USD AverageTransactionPrice-Range6 $500 USD to $1,000 USD AverageTransactionPrice-Range7 $1,000 USD to $2,000 USD AverageTransactionPrice-Range8 $2,000 USD to $5,000 USD AverageTransactionPrice-Range9 $5,000 USD to $10,000 USD AverageTransactionPrice-Range10 More than $10,000 USD
	 * - minOccurs : 0
	 * @var PayPalEnumAverageTransactionPriceType
	 */
	public $AveragePrice;
	/**
	 * The AverageMonthlyVolume
	 * Meta informations extracted from the WSDL
	 * - documentation : Average monthly sales volume, as defined by the enumerations. Enumeration Meaning AverageMonthlyVolume-Not-Applicable AverageMonthlyVolume-Range1 Less than $1,000 USD AverageMonthlyVolume-Range2 $1,000 USD to $5,000 USD AverageMonthlyVolume-Range3 $5,000 USD to $25,000 USD AverageMonthlyVolume-Range4 $25,000 USD to $100,000 USD AverageMonthlyVolume-Range5 $100,000 USD to $1,000,000 USD AverageMonthlyVolume-Range6 More than $1,000,000 USD
	 * - minOccurs : 0
	 * @var PayPalEnumAverageMonthlyVolumeType
	 */
	public $AverageMonthlyVolume;
	/**
	 * The SalesVenue
	 * Meta informations extracted from the WSDL
	 * - documentation : Main sales venue, such as eBay
	 * - minOccurs : 0
	 * @var PayPalEnumSalesVenueType
	 */
	public $SalesVenue;
	/**
	 * The Website
	 * Meta informations extracted from the WSDL
	 * - documentation : Primary URL of business Character length and limitations: 2,048 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Website;
	/**
	 * The RevenueFromOnlineSales
	 * Meta informations extracted from the WSDL
	 * - documentation : Percentage of revenue attributable to online sales, as defined by the enumerations Enumeration Meaning PercentageRevenueFromOnlineSales-Not-Applicable PercentageRevenueFromOnlineSales-Range1 Less than 25% PercentageRevenueFromOnlineSales-Range2 25% to 50% PercentageRevenueFromOnlineSales-Range3 50% to 75% PercentageRevenueFromOnlineSales-Range4 75% to 100%
	 * - minOccurs : 0
	 * @var PayPalEnumPercentageRevenueFromOnlineSalesType
	 */
	public $RevenueFromOnlineSales;
	/**
	 * The BusinessEstablished
	 * Meta informations extracted from the WSDL
	 * - documentation : Date the merchantâs business was established
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $BusinessEstablished;
	/**
	 * The CustomerServiceEmail
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address to contact businessâs customer service Character length and limitations: 127 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $CustomerServiceEmail;
	/**
	 * The CustomerServicePhone
	 * Meta informations extracted from the WSDL
	 * - documentation : Telephone number to contact businessâs customer service Character length and limitations: 32 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $CustomerServicePhone;
	/**
	 * Constructor method for BusinessInfoType
	 * @see parent::__construct()
	 * @param PayPalEnumBusinessTypeType $_type
	 * @param string $_name
	 * @param PayPalStructAddressType $_address
	 * @param string $_workPhone
	 * @param PayPalEnumBusinessCategoryType $_category
	 * @param PayPalEnumBusinessSubCategoryType $_subCategory
	 * @param PayPalEnumAverageTransactionPriceType $_averagePrice
	 * @param PayPalEnumAverageMonthlyVolumeType $_averageMonthlyVolume
	 * @param PayPalEnumSalesVenueType $_salesVenue
	 * @param string $_website
	 * @param PayPalEnumPercentageRevenueFromOnlineSalesType $_revenueFromOnlineSales
	 * @param dateTime $_businessEstablished
	 * @param string $_customerServiceEmail
	 * @param string $_customerServicePhone
	 * @return PayPalStructBusinessInfoType
	 */
	public function __construct($_type = NULL,$_name = NULL,$_address = NULL,$_workPhone = NULL,$_category = NULL,$_subCategory = NULL,$_averagePrice = NULL,$_averageMonthlyVolume = NULL,$_salesVenue = NULL,$_website = NULL,$_revenueFromOnlineSales = NULL,$_businessEstablished = NULL,$_customerServiceEmail = NULL,$_customerServicePhone = NULL)
	{
		parent::__construct(array('Type'=>$_type,'Name'=>$_name,'Address'=>$_address,'WorkPhone'=>$_workPhone,'Category'=>$_category,'SubCategory'=>$_subCategory,'AveragePrice'=>$_averagePrice,'AverageMonthlyVolume'=>$_averageMonthlyVolume,'SalesVenue'=>$_salesVenue,'Website'=>$_website,'RevenueFromOnlineSales'=>$_revenueFromOnlineSales,'BusinessEstablished'=>$_businessEstablished,'CustomerServiceEmail'=>$_customerServiceEmail,'CustomerServicePhone'=>$_customerServicePhone));
	}
	/**
	 * Get Type value
	 * @return PayPalEnumBusinessTypeType|null
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @uses PayPalEnumBusinessTypeType::valueIsValid()
	 * @param PayPalEnumBusinessTypeType $_type the Type
	 * @return PayPalEnumBusinessTypeType
	 */
	public function setType($_type)
	{
		if(!PayPalEnumBusinessTypeType::valueIsValid($_type))
		{
			return false;
		}
		return ($this->Type = $_type);
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Address value
	 * @return PayPalStructAddressType|null
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Address value
	 * @param PayPalStructAddressType $_address the Address
	 * @return PayPalStructAddressType
	 */
	public function setAddress($_address)
	{
		return ($this->Address = $_address);
	}
	/**
	 * Get WorkPhone value
	 * @return string|null
	 */
	public function getWorkPhone()
	{
		return $this->WorkPhone;
	}
	/**
	 * Set WorkPhone value
	 * @param string $_workPhone the WorkPhone
	 * @return string
	 */
	public function setWorkPhone($_workPhone)
	{
		return ($this->WorkPhone = $_workPhone);
	}
	/**
	 * Get Category value
	 * @return PayPalEnumBusinessCategoryType|null
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set Category value
	 * @uses PayPalEnumBusinessCategoryType::valueIsValid()
	 * @param PayPalEnumBusinessCategoryType $_category the Category
	 * @return PayPalEnumBusinessCategoryType
	 */
	public function setCategory($_category)
	{
		if(!PayPalEnumBusinessCategoryType::valueIsValid($_category))
		{
			return false;
		}
		return ($this->Category = $_category);
	}
	/**
	 * Get SubCategory value
	 * @return PayPalEnumBusinessSubCategoryType|null
	 */
	public function getSubCategory()
	{
		return $this->SubCategory;
	}
	/**
	 * Set SubCategory value
	 * @uses PayPalEnumBusinessSubCategoryType::valueIsValid()
	 * @param PayPalEnumBusinessSubCategoryType $_subCategory the SubCategory
	 * @return PayPalEnumBusinessSubCategoryType
	 */
	public function setSubCategory($_subCategory)
	{
		if(!PayPalEnumBusinessSubCategoryType::valueIsValid($_subCategory))
		{
			return false;
		}
		return ($this->SubCategory = $_subCategory);
	}
	/**
	 * Get AveragePrice value
	 * @return PayPalEnumAverageTransactionPriceType|null
	 */
	public function getAveragePrice()
	{
		return $this->AveragePrice;
	}
	/**
	 * Set AveragePrice value
	 * @uses PayPalEnumAverageTransactionPriceType::valueIsValid()
	 * @param PayPalEnumAverageTransactionPriceType $_averagePrice the AveragePrice
	 * @return PayPalEnumAverageTransactionPriceType
	 */
	public function setAveragePrice($_averagePrice)
	{
		if(!PayPalEnumAverageTransactionPriceType::valueIsValid($_averagePrice))
		{
			return false;
		}
		return ($this->AveragePrice = $_averagePrice);
	}
	/**
	 * Get AverageMonthlyVolume value
	 * @return PayPalEnumAverageMonthlyVolumeType|null
	 */
	public function getAverageMonthlyVolume()
	{
		return $this->AverageMonthlyVolume;
	}
	/**
	 * Set AverageMonthlyVolume value
	 * @uses PayPalEnumAverageMonthlyVolumeType::valueIsValid()
	 * @param PayPalEnumAverageMonthlyVolumeType $_averageMonthlyVolume the AverageMonthlyVolume
	 * @return PayPalEnumAverageMonthlyVolumeType
	 */
	public function setAverageMonthlyVolume($_averageMonthlyVolume)
	{
		if(!PayPalEnumAverageMonthlyVolumeType::valueIsValid($_averageMonthlyVolume))
		{
			return false;
		}
		return ($this->AverageMonthlyVolume = $_averageMonthlyVolume);
	}
	/**
	 * Get SalesVenue value
	 * @return PayPalEnumSalesVenueType|null
	 */
	public function getSalesVenue()
	{
		return $this->SalesVenue;
	}
	/**
	 * Set SalesVenue value
	 * @uses PayPalEnumSalesVenueType::valueIsValid()
	 * @param PayPalEnumSalesVenueType $_salesVenue the SalesVenue
	 * @return PayPalEnumSalesVenueType
	 */
	public function setSalesVenue($_salesVenue)
	{
		if(!PayPalEnumSalesVenueType::valueIsValid($_salesVenue))
		{
			return false;
		}
		return ($this->SalesVenue = $_salesVenue);
	}
	/**
	 * Get Website value
	 * @return string|null
	 */
	public function getWebsite()
	{
		return $this->Website;
	}
	/**
	 * Set Website value
	 * @param string $_website the Website
	 * @return string
	 */
	public function setWebsite($_website)
	{
		return ($this->Website = $_website);
	}
	/**
	 * Get RevenueFromOnlineSales value
	 * @return PayPalEnumPercentageRevenueFromOnlineSalesType|null
	 */
	public function getRevenueFromOnlineSales()
	{
		return $this->RevenueFromOnlineSales;
	}
	/**
	 * Set RevenueFromOnlineSales value
	 * @uses PayPalEnumPercentageRevenueFromOnlineSalesType::valueIsValid()
	 * @param PayPalEnumPercentageRevenueFromOnlineSalesType $_revenueFromOnlineSales the RevenueFromOnlineSales
	 * @return PayPalEnumPercentageRevenueFromOnlineSalesType
	 */
	public function setRevenueFromOnlineSales($_revenueFromOnlineSales)
	{
		if(!PayPalEnumPercentageRevenueFromOnlineSalesType::valueIsValid($_revenueFromOnlineSales))
		{
			return false;
		}
		return ($this->RevenueFromOnlineSales = $_revenueFromOnlineSales);
	}
	/**
	 * Get BusinessEstablished value
	 * @return dateTime|null
	 */
	public function getBusinessEstablished()
	{
		return $this->BusinessEstablished;
	}
	/**
	 * Set BusinessEstablished value
	 * @param dateTime $_businessEstablished the BusinessEstablished
	 * @return dateTime
	 */
	public function setBusinessEstablished($_businessEstablished)
	{
		return ($this->BusinessEstablished = $_businessEstablished);
	}
	/**
	 * Get CustomerServiceEmail value
	 * @return string|null
	 */
	public function getCustomerServiceEmail()
	{
		return $this->CustomerServiceEmail;
	}
	/**
	 * Set CustomerServiceEmail value
	 * @param string $_customerServiceEmail the CustomerServiceEmail
	 * @return string
	 */
	public function setCustomerServiceEmail($_customerServiceEmail)
	{
		return ($this->CustomerServiceEmail = $_customerServiceEmail);
	}
	/**
	 * Get CustomerServicePhone value
	 * @return string|null
	 */
	public function getCustomerServicePhone()
	{
		return $this->CustomerServicePhone;
	}
	/**
	 * Set CustomerServicePhone value
	 * @param string $_customerServicePhone the CustomerServicePhone
	 * @return string
	 */
	public function setCustomerServicePhone($_customerServicePhone)
	{
		return ($this->CustomerServicePhone = $_customerServicePhone);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBusinessInfoType
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