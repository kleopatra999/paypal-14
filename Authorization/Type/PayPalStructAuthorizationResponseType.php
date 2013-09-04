<?php
/**
 * File for class PayPalStructAuthorizationResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAuthorizationResponseType originally named AuthorizationResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAuthorizationResponseType extends PayPalWsdlClass
{
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : Status will denote whether Auto authorization was successful or not.
	 * - minOccurs : 1
	 * @var PayPalEnumAckCodeType
	 */
	public $Status;
	/**
	 * The AuthorizationError
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructErrorType
	 */
	public $AuthorizationError;
	/**
	 * Constructor method for AuthorizationResponseType
	 * @see parent::__construct()
	 * @param PayPalEnumAckCodeType $_status
	 * @param PayPalStructErrorType $_authorizationError
	 * @return PayPalStructAuthorizationResponseType
	 */
	public function __construct($_status,$_authorizationError = NULL)
	{
		parent::__construct(array('Status'=>$_status,'AuthorizationError'=>$_authorizationError));
	}
	/**
	 * Get Status value
	 * @return PayPalEnumAckCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses PayPalEnumAckCodeType::valueIsValid()
	 * @param PayPalEnumAckCodeType $_status the Status
	 * @return PayPalEnumAckCodeType
	 */
	public function setStatus($_status)
	{
		if(!PayPalEnumAckCodeType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get AuthorizationError value
	 * @return PayPalStructErrorType|null
	 */
	public function getAuthorizationError()
	{
		return $this->AuthorizationError;
	}
	/**
	 * Set AuthorizationError value
	 * @param PayPalStructErrorType $_authorizationError the AuthorizationError
	 * @return PayPalStructErrorType
	 */
	public function setAuthorizationError($_authorizationError)
	{
		return ($this->AuthorizationError = $_authorizationError);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAuthorizationResponseType
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