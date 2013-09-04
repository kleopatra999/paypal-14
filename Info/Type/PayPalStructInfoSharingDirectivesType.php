<?php
/**
 * File for class PayPalStructInfoSharingDirectivesType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructInfoSharingDirectivesType originally named InfoSharingDirectivesType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructInfoSharingDirectivesType extends PayPalWsdlClass
{
	/**
	 * The ReqBillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : If Billing Address should be returned in GetExpressCheckoutDetails response, this parameter should be set to yes here
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReqBillingAddress;
	/**
	 * Constructor method for InfoSharingDirectivesType
	 * @see parent::__construct()
	 * @param string $_reqBillingAddress
	 * @return PayPalStructInfoSharingDirectivesType
	 */
	public function __construct($_reqBillingAddress = NULL)
	{
		parent::__construct(array('ReqBillingAddress'=>$_reqBillingAddress));
	}
	/**
	 * Get ReqBillingAddress value
	 * @return string|null
	 */
	public function getReqBillingAddress()
	{
		return $this->ReqBillingAddress;
	}
	/**
	 * Set ReqBillingAddress value
	 * @param string $_reqBillingAddress the ReqBillingAddress
	 * @return string
	 */
	public function setReqBillingAddress($_reqBillingAddress)
	{
		return ($this->ReqBillingAddress = $_reqBillingAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructInfoSharingDirectivesType
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