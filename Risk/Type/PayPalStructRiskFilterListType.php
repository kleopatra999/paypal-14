<?php
/**
 * File for class PayPalStructRiskFilterListType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRiskFilterListType originally named RiskFilterListType
 * Documentation : Details of Risk Filter.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRiskFilterListType extends PayPalWsdlClass
{
	/**
	 * The Filters
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 1
	 * @var PayPalStructRiskFilterDetailsType
	 */
	public $Filters;
	/**
	 * Constructor method for RiskFilterListType
	 * @see parent::__construct()
	 * @param PayPalStructRiskFilterDetailsType $_filters
	 * @return PayPalStructRiskFilterListType
	 */
	public function __construct($_filters)
	{
		parent::__construct(array('Filters'=>$_filters));
	}
	/**
	 * Get Filters value
	 * @return PayPalStructRiskFilterDetailsType
	 */
	public function getFilters()
	{
		return $this->Filters;
	}
	/**
	 * Set Filters value
	 * @param PayPalStructRiskFilterDetailsType $_filters the Filters
	 * @return PayPalStructRiskFilterDetailsType
	 */
	public function setFilters($_filters)
	{
		return ($this->Filters = $_filters);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRiskFilterListType
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