<?php
/**
 * File for class PayPalStructBuyerDetailType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBuyerDetailType originally named BuyerDetailType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBuyerDetailType extends PayPalWsdlClass
{
	/**
	 * The IdentificationInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Information that is used to indentify the Buyer. This is used for auto authorization. Mandatory if Authorization is requested.
	 * - minOccurs : 0
	 * @var PayPalStructIdentificationInfoType
	 */
	public $IdentificationInfo;
	/**
	 * Constructor method for BuyerDetailType
	 * @see parent::__construct()
	 * @param PayPalStructIdentificationInfoType $_identificationInfo
	 * @return PayPalStructBuyerDetailType
	 */
	public function __construct($_identificationInfo = NULL)
	{
		parent::__construct(array('IdentificationInfo'=>$_identificationInfo));
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
	 * @return PayPalStructBuyerDetailType
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