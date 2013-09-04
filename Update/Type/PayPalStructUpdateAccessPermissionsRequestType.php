<?php
/**
 * File for class PayPalStructUpdateAccessPermissionsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateAccessPermissionsRequestType originally named UpdateAccessPermissionsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateAccessPermissionsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The PayerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique PayPal customer account number, the value of which was returned by GetAuthDetails Response. Required Character length and limitations: 20 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * - maxLength : 127
	 * @var string
	 */
	public $PayerID;
	/**
	 * Constructor method for UpdateAccessPermissionsRequestType
	 * @see parent::__construct()
	 * @param string $_payerID
	 * @return PayPalStructUpdateAccessPermissionsRequestType
	 */
	public function __construct($_payerID)
	{
		PayPalWsdlClass::__construct(array('PayerID'=>$_payerID));
	}
	/**
	 * Get PayerID value
	 * @return string
	 */
	public function getPayerID()
	{
		return $this->PayerID;
	}
	/**
	 * Set PayerID value
	 * @param string $_payerID the PayerID
	 * @return string
	 */
	public function setPayerID($_payerID)
	{
		return ($this->PayerID = $_payerID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateAccessPermissionsRequestType
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