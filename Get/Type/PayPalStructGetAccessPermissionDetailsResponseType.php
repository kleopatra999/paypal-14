<?php
/**
 * File for class PayPalStructGetAccessPermissionDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetAccessPermissionDetailsResponseType originally named GetAccessPermissionDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetAccessPermissionDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetAccessPermissionDetailsResponseDetails
	 * @var PayPalStructGetAccessPermissionDetailsResponseDetailsType
	 */
	public $GetAccessPermissionDetailsResponseDetails;
	/**
	 * Constructor method for GetAccessPermissionDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetAccessPermissionDetailsResponseDetailsType $_getAccessPermissionDetailsResponseDetails
	 * @return PayPalStructGetAccessPermissionDetailsResponseType
	 */
	public function __construct($_getAccessPermissionDetailsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetAccessPermissionDetailsResponseDetails'=>$_getAccessPermissionDetailsResponseDetails));
	}
	/**
	 * Get GetAccessPermissionDetailsResponseDetails value
	 * @return PayPalStructGetAccessPermissionDetailsResponseDetailsType|null
	 */
	public function getGetAccessPermissionDetailsResponseDetails()
	{
		return $this->GetAccessPermissionDetailsResponseDetails;
	}
	/**
	 * Set GetAccessPermissionDetailsResponseDetails value
	 * @param PayPalStructGetAccessPermissionDetailsResponseDetailsType $_getAccessPermissionDetailsResponseDetails the GetAccessPermissionDetailsResponseDetails
	 * @return PayPalStructGetAccessPermissionDetailsResponseDetailsType
	 */
	public function setGetAccessPermissionDetailsResponseDetails($_getAccessPermissionDetailsResponseDetails)
	{
		return ($this->GetAccessPermissionDetailsResponseDetails = $_getAccessPermissionDetailsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetAccessPermissionDetailsResponseType
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