<?php
/**
 * File for class PayPalStructGetRecurringPaymentsProfileDetailsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetRecurringPaymentsProfileDetailsRequestType originally named GetRecurringPaymentsProfileDetailsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetRecurringPaymentsProfileDetailsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ProfileID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ProfileID;
	/**
	 * Constructor method for GetRecurringPaymentsProfileDetailsRequestType
	 * @see parent::__construct()
	 * @param string $_profileID
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsRequestType
	 */
	public function __construct($_profileID)
	{
		PayPalWsdlClass::__construct(array('ProfileID'=>$_profileID));
	}
	/**
	 * Get ProfileID value
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileID value
	 * @param string $_profileID the ProfileID
	 * @return string
	 */
	public function setProfileID($_profileID)
	{
		return ($this->ProfileID = $_profileID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsRequestType
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