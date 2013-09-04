<?php
/**
 * File for class PayPalStructMerchantDataType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMerchantDataType originally named MerchantDataType
 * Documentation : This holds all key-value pairs which merchants wants to pass it to the open wallet(PLCC) processor.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMerchantDataType extends PayPalWsdlClass
{
	/**
	 * The MerchantDataTuple
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 16
	 * - minOccurs : 0
	 * @var PayPalStructTupleType
	 */
	public $MerchantDataTuple;
	/**
	 * Constructor method for MerchantDataType
	 * @see parent::__construct()
	 * @param PayPalStructTupleType $_merchantDataTuple
	 * @return PayPalStructMerchantDataType
	 */
	public function __construct($_merchantDataTuple = NULL)
	{
		parent::__construct(array('MerchantDataTuple'=>$_merchantDataTuple));
	}
	/**
	 * Get MerchantDataTuple value
	 * @return PayPalStructTupleType|null
	 */
	public function getMerchantDataTuple()
	{
		return $this->MerchantDataTuple;
	}
	/**
	 * Set MerchantDataTuple value
	 * @param PayPalStructTupleType $_merchantDataTuple the MerchantDataTuple
	 * @return PayPalStructTupleType
	 */
	public function setMerchantDataTuple($_merchantDataTuple)
	{
		return ($this->MerchantDataTuple = $_merchantDataTuple);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMerchantDataType
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