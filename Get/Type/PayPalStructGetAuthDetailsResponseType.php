<?php
/**
 * File for class PayPalStructGetAuthDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetAuthDetailsResponseType originally named GetAuthDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetAuthDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetAuthDetailsResponseDetails
	 * @var PayPalStructGetAuthDetailsResponseDetailsType
	 */
	public $GetAuthDetailsResponseDetails;
	/**
	 * Constructor method for GetAuthDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetAuthDetailsResponseDetailsType $_getAuthDetailsResponseDetails
	 * @return PayPalStructGetAuthDetailsResponseType
	 */
	public function __construct($_getAuthDetailsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetAuthDetailsResponseDetails'=>$_getAuthDetailsResponseDetails));
	}
	/**
	 * Get GetAuthDetailsResponseDetails value
	 * @return PayPalStructGetAuthDetailsResponseDetailsType|null
	 */
	public function getGetAuthDetailsResponseDetails()
	{
		return $this->GetAuthDetailsResponseDetails;
	}
	/**
	 * Set GetAuthDetailsResponseDetails value
	 * @param PayPalStructGetAuthDetailsResponseDetailsType $_getAuthDetailsResponseDetails the GetAuthDetailsResponseDetails
	 * @return PayPalStructGetAuthDetailsResponseDetailsType
	 */
	public function setGetAuthDetailsResponseDetails($_getAuthDetailsResponseDetails)
	{
		return ($this->GetAuthDetailsResponseDetails = $_getAuthDetailsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetAuthDetailsResponseType
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