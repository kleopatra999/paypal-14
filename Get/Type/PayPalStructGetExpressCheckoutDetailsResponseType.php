<?php
/**
 * File for class PayPalStructGetExpressCheckoutDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetExpressCheckoutDetailsResponseType originally named GetExpressCheckoutDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetExpressCheckoutDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetExpressCheckoutDetailsResponseDetails
	 * @var PayPalStructGetExpressCheckoutDetailsResponseDetailsType
	 */
	public $GetExpressCheckoutDetailsResponseDetails;
	/**
	 * Constructor method for GetExpressCheckoutDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetExpressCheckoutDetailsResponseDetailsType $_getExpressCheckoutDetailsResponseDetails
	 * @return PayPalStructGetExpressCheckoutDetailsResponseType
	 */
	public function __construct($_getExpressCheckoutDetailsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetExpressCheckoutDetailsResponseDetails'=>$_getExpressCheckoutDetailsResponseDetails));
	}
	/**
	 * Get GetExpressCheckoutDetailsResponseDetails value
	 * @return PayPalStructGetExpressCheckoutDetailsResponseDetailsType|null
	 */
	public function getGetExpressCheckoutDetailsResponseDetails()
	{
		return $this->GetExpressCheckoutDetailsResponseDetails;
	}
	/**
	 * Set GetExpressCheckoutDetailsResponseDetails value
	 * @param PayPalStructGetExpressCheckoutDetailsResponseDetailsType $_getExpressCheckoutDetailsResponseDetails the GetExpressCheckoutDetailsResponseDetails
	 * @return PayPalStructGetExpressCheckoutDetailsResponseDetailsType
	 */
	public function setGetExpressCheckoutDetailsResponseDetails($_getExpressCheckoutDetailsResponseDetails)
	{
		return ($this->GetExpressCheckoutDetailsResponseDetails = $_getExpressCheckoutDetailsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetExpressCheckoutDetailsResponseType
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