<?php
/**
 * File for class PayPalStructMobileIDInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMobileIDInfoType originally named MobileIDInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMobileIDInfoType extends PayPalWsdlClass
{
	/**
	 * The SessionToken
	 * Meta informations extracted from the WSDL
	 * - documentation : The Session token returned during buyer authentication.
	 * @var string
	 */
	public $SessionToken;
	/**
	 * Constructor method for MobileIDInfoType
	 * @see parent::__construct()
	 * @param string $_sessionToken
	 * @return PayPalStructMobileIDInfoType
	 */
	public function __construct($_sessionToken = NULL)
	{
		parent::__construct(array('SessionToken'=>$_sessionToken));
	}
	/**
	 * Get SessionToken value
	 * @return string|null
	 */
	public function getSessionToken()
	{
		return $this->SessionToken;
	}
	/**
	 * Set SessionToken value
	 * @param string $_sessionToken the SessionToken
	 * @return string
	 */
	public function setSessionToken($_sessionToken)
	{
		return ($this->SessionToken = $_sessionToken);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMobileIDInfoType
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