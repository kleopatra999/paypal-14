<?php
/**
 * File for class PayPalStructPaymentMeansType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentMeansType originally named PaymentMeansType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentMeansType extends PayPalWsdlClass
{
	/**
	 * The TypeCodeID
	 * @var PayPalEnumSellerPaymentMethodCodeType
	 */
	public $TypeCodeID;
	/**
	 * Constructor method for PaymentMeansType
	 * @see parent::__construct()
	 * @param PayPalEnumSellerPaymentMethodCodeType $_typeCodeID
	 * @return PayPalStructPaymentMeansType
	 */
	public function __construct($_typeCodeID = NULL)
	{
		parent::__construct(array('TypeCodeID'=>$_typeCodeID));
	}
	/**
	 * Get TypeCodeID value
	 * @return PayPalEnumSellerPaymentMethodCodeType|null
	 */
	public function getTypeCodeID()
	{
		return $this->TypeCodeID;
	}
	/**
	 * Set TypeCodeID value
	 * @uses PayPalEnumSellerPaymentMethodCodeType::valueIsValid()
	 * @param PayPalEnumSellerPaymentMethodCodeType $_typeCodeID the TypeCodeID
	 * @return PayPalEnumSellerPaymentMethodCodeType
	 */
	public function setTypeCodeID($_typeCodeID)
	{
		if(!PayPalEnumSellerPaymentMethodCodeType::valueIsValid($_typeCodeID))
		{
			return false;
		}
		return ($this->TypeCodeID = $_typeCodeID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentMeansType
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