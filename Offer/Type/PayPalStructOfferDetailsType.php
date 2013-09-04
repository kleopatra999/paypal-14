<?php
/**
 * File for class PayPalStructOfferDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOfferDetailsType originally named OfferDetailsType
 * Documentation : OfferDetailsType Specific information for an offer.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOfferDetailsType extends PayPalWsdlClass
{
	/**
	 * The OfferCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Code used to identify the promotion offer.
	 * - minOccurs : 0
	 * @var string
	 */
	public $OfferCode;
	/**
	 * The BMLOfferInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Specific infromation for BML, Similar structure could be added for sepcific promotion needs like CrossPromotions
	 * - minOccurs : 0
	 * @var PayPalStructBMLOfferInfoType
	 */
	public $BMLOfferInfo;
	/**
	 * Constructor method for OfferDetailsType
	 * @see parent::__construct()
	 * @param string $_offerCode
	 * @param PayPalStructBMLOfferInfoType $_bMLOfferInfo
	 * @return PayPalStructOfferDetailsType
	 */
	public function __construct($_offerCode = NULL,$_bMLOfferInfo = NULL)
	{
		parent::__construct(array('OfferCode'=>$_offerCode,'BMLOfferInfo'=>$_bMLOfferInfo));
	}
	/**
	 * Get OfferCode value
	 * @return string|null
	 */
	public function getOfferCode()
	{
		return $this->OfferCode;
	}
	/**
	 * Set OfferCode value
	 * @param string $_offerCode the OfferCode
	 * @return string
	 */
	public function setOfferCode($_offerCode)
	{
		return ($this->OfferCode = $_offerCode);
	}
	/**
	 * Get BMLOfferInfo value
	 * @return PayPalStructBMLOfferInfoType|null
	 */
	public function getBMLOfferInfo()
	{
		return $this->BMLOfferInfo;
	}
	/**
	 * Set BMLOfferInfo value
	 * @param PayPalStructBMLOfferInfoType $_bMLOfferInfo the BMLOfferInfo
	 * @return PayPalStructBMLOfferInfoType
	 */
	public function setBMLOfferInfo($_bMLOfferInfo)
	{
		return ($this->BMLOfferInfo = $_bMLOfferInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOfferDetailsType
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