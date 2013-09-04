<?php
/**
 * File for class PayPalStructCharityType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCharityType originally named CharityType
 * Documentation : Contains information about a Charity listing.in case of revision - all data can be min occur = 0
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCharityType extends PayPalWsdlClass
{
	/**
	 * The CharityName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CharityName;
	/**
	 * The CharityNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $CharityNumber;
	/**
	 * The DonationPercent
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $DonationPercent;
	/**
	 * Constructor method for CharityType
	 * @see parent::__construct()
	 * @param string $_charityName
	 * @param int $_charityNumber
	 * @param float $_donationPercent
	 * @return PayPalStructCharityType
	 */
	public function __construct($_charityName = NULL,$_charityNumber = NULL,$_donationPercent = NULL)
	{
		parent::__construct(array('CharityName'=>$_charityName,'CharityNumber'=>$_charityNumber,'DonationPercent'=>$_donationPercent));
	}
	/**
	 * Get CharityName value
	 * @return string|null
	 */
	public function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * Set CharityName value
	 * @param string $_charityName the CharityName
	 * @return string
	 */
	public function setCharityName($_charityName)
	{
		return ($this->CharityName = $_charityName);
	}
	/**
	 * Get CharityNumber value
	 * @return int|null
	 */
	public function getCharityNumber()
	{
		return $this->CharityNumber;
	}
	/**
	 * Set CharityNumber value
	 * @param int $_charityNumber the CharityNumber
	 * @return int
	 */
	public function setCharityNumber($_charityNumber)
	{
		return ($this->CharityNumber = $_charityNumber);
	}
	/**
	 * Get DonationPercent value
	 * @return float|null
	 */
	public function getDonationPercent()
	{
		return $this->DonationPercent;
	}
	/**
	 * Set DonationPercent value
	 * @param float $_donationPercent the DonationPercent
	 * @return float
	 */
	public function setDonationPercent($_donationPercent)
	{
		return ($this->DonationPercent = $_donationPercent);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCharityType
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