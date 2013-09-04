<?php
/**
 * File for class PayPalStructSetDataResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetDataResponseType originally named SetDataResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetDataResponseType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : If Checkout session was initialized successfully, the corresponding token is returned in this element.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Token;
	/**
	 * The ShippingAddresses
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $ShippingAddresses;
	/**
	 * The SetDataError
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructErrorType
	 */
	public $SetDataError;
	/**
	 * Constructor method for SetDataResponseType
	 * @see parent::__construct()
	 * @param string $_token
	 * @param PayPalStructAddressType $_shippingAddresses
	 * @param PayPalStructErrorType $_setDataError
	 * @return PayPalStructSetDataResponseType
	 */
	public function __construct($_token = NULL,$_shippingAddresses = NULL,$_setDataError = NULL)
	{
		parent::__construct(array('Token'=>$_token,'ShippingAddresses'=>$_shippingAddresses,'SetDataError'=>$_setDataError));
	}
	/**
	 * Get Token value
	 * @return string|null
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set Token value
	 * @param string $_token the Token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->Token = $_token);
	}
	/**
	 * Get ShippingAddresses value
	 * @return PayPalStructAddressType|null
	 */
	public function getShippingAddresses()
	{
		return $this->ShippingAddresses;
	}
	/**
	 * Set ShippingAddresses value
	 * @param PayPalStructAddressType $_shippingAddresses the ShippingAddresses
	 * @return PayPalStructAddressType
	 */
	public function setShippingAddresses($_shippingAddresses)
	{
		return ($this->ShippingAddresses = $_shippingAddresses);
	}
	/**
	 * Get SetDataError value
	 * @return PayPalStructErrorType|null
	 */
	public function getSetDataError()
	{
		return $this->SetDataError;
	}
	/**
	 * Set SetDataError value
	 * @param PayPalStructErrorType $_setDataError the SetDataError
	 * @return PayPalStructErrorType
	 */
	public function setSetDataError($_setDataError)
	{
		return ($this->SetDataError = $_setDataError);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetDataResponseType
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