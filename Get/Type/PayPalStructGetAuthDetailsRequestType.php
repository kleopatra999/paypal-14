<?php
/**
 * File for class PayPalStructGetAuthDetailsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetAuthDetailsRequestType originally named GetAuthDetailsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetAuthDetailsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : A timestamped token, the value of which was returned by SetAuthFlowParam Response. RequiredCharacter length and limitations: 20 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Token;
	/**
	 * Constructor method for GetAuthDetailsRequestType
	 * @see parent::__construct()
	 * @param string $_token
	 * @return PayPalStructGetAuthDetailsRequestType
	 */
	public function __construct($_token)
	{
		PayPalWsdlClass::__construct(array('Token'=>$_token));
	}
	/**
	 * Get Token value
	 * @return string
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetAuthDetailsRequestType
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