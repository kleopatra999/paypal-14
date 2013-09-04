<?php
/**
 * File for class PayPalStructInstrumentDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructInstrumentDetailsType originally named InstrumentDetailsType
 * Documentation : InstrumentDetailsType Promotional Instrument Information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructInstrumentDetailsType extends PayPalWsdlClass
{
	/**
	 * The InstrumentCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : This field holds the category of the instrument only when it is promotional. Return value 1 represents BML.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InstrumentCategory;
	/**
	 * Constructor method for InstrumentDetailsType
	 * @see parent::__construct()
	 * @param string $_instrumentCategory
	 * @return PayPalStructInstrumentDetailsType
	 */
	public function __construct($_instrumentCategory = NULL)
	{
		parent::__construct(array('InstrumentCategory'=>$_instrumentCategory));
	}
	/**
	 * Get InstrumentCategory value
	 * @return string|null
	 */
	public function getInstrumentCategory()
	{
		return $this->InstrumentCategory;
	}
	/**
	 * Set InstrumentCategory value
	 * @param string $_instrumentCategory the InstrumentCategory
	 * @return string
	 */
	public function setInstrumentCategory($_instrumentCategory)
	{
		return ($this->InstrumentCategory = $_instrumentCategory);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructInstrumentDetailsType
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