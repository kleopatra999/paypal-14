<?php
/**
 * File for class PayPalStructTaxIdDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTaxIdDetailsType originally named TaxIdDetailsType
 * Documentation : Details about the payer's tax info passed in by the merchant or partner. Optional.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTaxIdDetailsType extends PayPalWsdlClass
{
	/**
	 * The TaxIdType
	 * Meta informations extracted from the WSDL
	 * - documentation : The payer's Tax ID type; CNPJ/CPF for BR country.
	 * - minOccurs : 0
	 * @var string
	 */
	public $TaxIdType;
	/**
	 * The TaxId
	 * Meta informations extracted from the WSDL
	 * - documentation : The payer's Tax ID
	 * - minOccurs : 0
	 * @var string
	 */
	public $TaxId;
	/**
	 * Constructor method for TaxIdDetailsType
	 * @see parent::__construct()
	 * @param string $_taxIdType
	 * @param string $_taxId
	 * @return PayPalStructTaxIdDetailsType
	 */
	public function __construct($_taxIdType = NULL,$_taxId = NULL)
	{
		parent::__construct(array('TaxIdType'=>$_taxIdType,'TaxId'=>$_taxId));
	}
	/**
	 * Get TaxIdType value
	 * @return string|null
	 */
	public function getTaxIdType()
	{
		return $this->TaxIdType;
	}
	/**
	 * Set TaxIdType value
	 * @param string $_taxIdType the TaxIdType
	 * @return string
	 */
	public function setTaxIdType($_taxIdType)
	{
		return ($this->TaxIdType = $_taxIdType);
	}
	/**
	 * Get TaxId value
	 * @return string|null
	 */
	public function getTaxId()
	{
		return $this->TaxId;
	}
	/**
	 * Set TaxId value
	 * @param string $_taxId the TaxId
	 * @return string
	 */
	public function setTaxId($_taxId)
	{
		return ($this->TaxId = $_taxId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTaxIdDetailsType
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