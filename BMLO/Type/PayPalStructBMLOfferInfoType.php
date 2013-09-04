<?php
/**
 * File for class PayPalStructBMLOfferInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMLOfferInfoType originally named BMLOfferInfoType
 * Documentation : BMLOfferInfoType Specific information for BML.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMLOfferInfoType extends PayPalWsdlClass
{
	/**
	 * The OfferTrackingID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identification for merchant/buyer/offer combo.
	 * - minOccurs : 0
	 * @var string
	 */
	public $OfferTrackingID;
	/**
	 * Constructor method for BMLOfferInfoType
	 * @see parent::__construct()
	 * @param string $_offerTrackingID
	 * @return PayPalStructBMLOfferInfoType
	 */
	public function __construct($_offerTrackingID = NULL)
	{
		parent::__construct(array('OfferTrackingID'=>$_offerTrackingID));
	}
	/**
	 * Get OfferTrackingID value
	 * @return string|null
	 */
	public function getOfferTrackingID()
	{
		return $this->OfferTrackingID;
	}
	/**
	 * Set OfferTrackingID value
	 * @param string $_offerTrackingID the OfferTrackingID
	 * @return string
	 */
	public function setOfferTrackingID($_offerTrackingID)
	{
		return ($this->OfferTrackingID = $_offerTrackingID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMLOfferInfoType
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