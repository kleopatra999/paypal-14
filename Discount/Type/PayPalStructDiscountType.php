<?php
/**
 * File for class PayPalStructDiscountType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDiscountType originally named DiscountType
 * Documentation : Describes discount information
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDiscountType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : amount discountedOptional
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Item nameOptional Character length and limits: 127 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : description of the discountOptional Character length and limits: 127 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The RedeemedOfferType
	 * Meta informations extracted from the WSDL
	 * - documentation : offer typeOptional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumRedeemedOfferType
	 */
	public $RedeemedOfferType;
	/**
	 * The RedeemedOfferID
	 * Meta informations extracted from the WSDL
	 * - documentation : offer IDOptional Character length and limits: 64 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $RedeemedOfferID;
	/**
	 * Constructor method for DiscountType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_name
	 * @param string $_description
	 * @param PayPalEnumRedeemedOfferType $_redeemedOfferType
	 * @param string $_redeemedOfferID
	 * @return PayPalStructDiscountType
	 */
	public function __construct($_amount,$_name = NULL,$_description = NULL,$_redeemedOfferType = NULL,$_redeemedOfferID = NULL)
	{
		parent::__construct(array('Amount'=>$_amount,'Name'=>$_name,'Description'=>$_description,'RedeemedOfferType'=>$_redeemedOfferType,'RedeemedOfferID'=>$_redeemedOfferID));
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
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
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get RedeemedOfferType value
	 * @return PayPalEnumRedeemedOfferType|null
	 */
	public function getRedeemedOfferType()
	{
		return $this->RedeemedOfferType;
	}
	/**
	 * Set RedeemedOfferType value
	 * @uses PayPalEnumRedeemedOfferType::valueIsValid()
	 * @param PayPalEnumRedeemedOfferType $_redeemedOfferType the RedeemedOfferType
	 * @return PayPalEnumRedeemedOfferType
	 */
	public function setRedeemedOfferType($_redeemedOfferType)
	{
		if(!PayPalEnumRedeemedOfferType::valueIsValid($_redeemedOfferType))
		{
			return false;
		}
		return ($this->RedeemedOfferType = $_redeemedOfferType);
	}
	/**
	 * Get RedeemedOfferID value
	 * @return string|null
	 */
	public function getRedeemedOfferID()
	{
		return $this->RedeemedOfferID;
	}
	/**
	 * Set RedeemedOfferID value
	 * @param string $_redeemedOfferID the RedeemedOfferID
	 * @return string
	 */
	public function setRedeemedOfferID($_redeemedOfferID)
	{
		return ($this->RedeemedOfferID = $_redeemedOfferID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDiscountType
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