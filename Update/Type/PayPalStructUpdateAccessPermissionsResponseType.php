<?php
/**
 * File for class PayPalStructUpdateAccessPermissionsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateAccessPermissionsResponseType originally named UpdateAccessPermissionsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateAccessPermissionsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : The status of the update call, Success/Failure. Character length and limitations: 20 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * Constructor method for UpdateAccessPermissionsResponseType
	 * @see parent::__construct()
	 * @param string $_status
	 * @return PayPalStructUpdateAccessPermissionsResponseType
	 */
	public function __construct($_status)
	{
		PayPalWsdlClass::__construct(array('Status'=>$_status));
	}
	/**
	 * Get Status value
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @param string $_status the Status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->Status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateAccessPermissionsResponseType
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