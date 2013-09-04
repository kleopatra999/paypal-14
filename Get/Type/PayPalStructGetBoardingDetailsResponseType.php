<?php
/**
 * File for class PayPalStructGetBoardingDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBoardingDetailsResponseType originally named GetBoardingDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBoardingDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetBoardingDetailsResponseDetails
	 * @var PayPalStructGetBoardingDetailsResponseDetailsType
	 */
	public $GetBoardingDetailsResponseDetails;
	/**
	 * Constructor method for GetBoardingDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetBoardingDetailsResponseDetailsType $_getBoardingDetailsResponseDetails
	 * @return PayPalStructGetBoardingDetailsResponseType
	 */
	public function __construct($_getBoardingDetailsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetBoardingDetailsResponseDetails'=>$_getBoardingDetailsResponseDetails));
	}
	/**
	 * Get GetBoardingDetailsResponseDetails value
	 * @return PayPalStructGetBoardingDetailsResponseDetailsType|null
	 */
	public function getGetBoardingDetailsResponseDetails()
	{
		return $this->GetBoardingDetailsResponseDetails;
	}
	/**
	 * Set GetBoardingDetailsResponseDetails value
	 * @param PayPalStructGetBoardingDetailsResponseDetailsType $_getBoardingDetailsResponseDetails the GetBoardingDetailsResponseDetails
	 * @return PayPalStructGetBoardingDetailsResponseDetailsType
	 */
	public function setGetBoardingDetailsResponseDetails($_getBoardingDetailsResponseDetails)
	{
		return ($this->GetBoardingDetailsResponseDetails = $_getBoardingDetailsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBoardingDetailsResponseType
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