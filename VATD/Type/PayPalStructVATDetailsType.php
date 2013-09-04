<?php
/**
 * File for class PayPalStructVATDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructVATDetailsType originally named VATDetailsType
 * Documentation : Contains information required To list a business item. BusinessSeller - only for add item, the RestrictedToBusiness and VATPercent for both get and add, for revise all must be optional
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructVATDetailsType extends PayPalWsdlClass
{
	/**
	 * The BusinessSeller
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BusinessSeller;
	/**
	 * The RestrictedToBusiness
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $RestrictedToBusiness;
	/**
	 * The VATPercent
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $VATPercent;
	/**
	 * Constructor method for VATDetailsType
	 * @see parent::__construct()
	 * @param boolean $_businessSeller
	 * @param boolean $_restrictedToBusiness
	 * @param float $_vATPercent
	 * @return PayPalStructVATDetailsType
	 */
	public function __construct($_businessSeller = NULL,$_restrictedToBusiness = NULL,$_vATPercent = NULL)
	{
		parent::__construct(array('BusinessSeller'=>$_businessSeller,'RestrictedToBusiness'=>$_restrictedToBusiness,'VATPercent'=>$_vATPercent));
	}
	/**
	 * Get BusinessSeller value
	 * @return boolean|null
	 */
	public function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}
	/**
	 * Set BusinessSeller value
	 * @param boolean $_businessSeller the BusinessSeller
	 * @return boolean
	 */
	public function setBusinessSeller($_businessSeller)
	{
		return ($this->BusinessSeller = $_businessSeller);
	}
	/**
	 * Get RestrictedToBusiness value
	 * @return boolean|null
	 */
	public function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}
	/**
	 * Set RestrictedToBusiness value
	 * @param boolean $_restrictedToBusiness the RestrictedToBusiness
	 * @return boolean
	 */
	public function setRestrictedToBusiness($_restrictedToBusiness)
	{
		return ($this->RestrictedToBusiness = $_restrictedToBusiness);
	}
	/**
	 * Get VATPercent value
	 * @return float|null
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * Set VATPercent value
	 * @param float $_vATPercent the VATPercent
	 * @return float
	 */
	public function setVATPercent($_vATPercent)
	{
		return ($this->VATPercent = $_vATPercent);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructVATDetailsType
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