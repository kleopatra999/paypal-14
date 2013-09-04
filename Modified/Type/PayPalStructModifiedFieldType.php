<?php
/**
 * File for class PayPalStructModifiedFieldType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructModifiedFieldType originally named ModifiedFieldType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructModifiedFieldType extends PayPalWsdlClass
{
	/**
	 * The Field
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Field;
	/**
	 * The ModifyType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumModifyCodeType
	 */
	public $ModifyType;
	/**
	 * Constructor method for ModifiedFieldType
	 * @see parent::__construct()
	 * @param string $_field
	 * @param PayPalEnumModifyCodeType $_modifyType
	 * @return PayPalStructModifiedFieldType
	 */
	public function __construct($_field = NULL,$_modifyType = NULL)
	{
		parent::__construct(array('Field'=>$_field,'ModifyType'=>$_modifyType));
	}
	/**
	 * Get Field value
	 * @return string|null
	 */
	public function getField()
	{
		return $this->Field;
	}
	/**
	 * Set Field value
	 * @param string $_field the Field
	 * @return string
	 */
	public function setField($_field)
	{
		return ($this->Field = $_field);
	}
	/**
	 * Get ModifyType value
	 * @return PayPalEnumModifyCodeType|null
	 */
	public function getModifyType()
	{
		return $this->ModifyType;
	}
	/**
	 * Set ModifyType value
	 * @uses PayPalEnumModifyCodeType::valueIsValid()
	 * @param PayPalEnumModifyCodeType $_modifyType the ModifyType
	 * @return PayPalEnumModifyCodeType
	 */
	public function setModifyType($_modifyType)
	{
		if(!PayPalEnumModifyCodeType::valueIsValid($_modifyType))
		{
			return false;
		}
		return ($this->ModifyType = $_modifyType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructModifiedFieldType
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