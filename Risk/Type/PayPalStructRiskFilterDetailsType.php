<?php
/**
 * File for class PayPalStructRiskFilterDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRiskFilterDetailsType originally named RiskFilterDetailsType
 * Documentation : Details of Risk Filter.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRiskFilterDetailsType extends PayPalWsdlClass
{
	/**
	 * The Id
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $Id;
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor method for RiskFilterDetailsType
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_name
	 * @param string $_description
	 * @return PayPalStructRiskFilterDetailsType
	 */
	public function __construct($_id,$_name,$_description)
	{
		parent::__construct(array('Id'=>$_id,'Name'=>$_name,'Description'=>$_description));
	}
	/**
	 * Get Id value
	 * @return int
	 */
	public function getId()
	{
		return $this->Id;
	}
	/**
	 * Set Id value
	 * @param int $_id the Id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->Id = $_id);
	}
	/**
	 * Get Name value
	 * @return string
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
	 * @return string
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRiskFilterDetailsType
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