<?php
/**
 * File for class PayPalStructGetRecurringPaymentsProfileDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetRecurringPaymentsProfileDetailsResponseType originally named GetRecurringPaymentsProfileDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetRecurringPaymentsProfileDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The GetRecurringPaymentsProfileDetailsResponseDetails
	 * @var PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public $GetRecurringPaymentsProfileDetailsResponseDetails;
	/**
	 * Constructor method for GetRecurringPaymentsProfileDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType $_getRecurringPaymentsProfileDetailsResponseDetails
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseType
	 */
	public function __construct($_getRecurringPaymentsProfileDetailsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('GetRecurringPaymentsProfileDetailsResponseDetails'=>$_getRecurringPaymentsProfileDetailsResponseDetails));
	}
	/**
	 * Get GetRecurringPaymentsProfileDetailsResponseDetails value
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType|null
	 */
	public function getGetRecurringPaymentsProfileDetailsResponseDetails()
	{
		return $this->GetRecurringPaymentsProfileDetailsResponseDetails;
	}
	/**
	 * Set GetRecurringPaymentsProfileDetailsResponseDetails value
	 * @param PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType $_getRecurringPaymentsProfileDetailsResponseDetails the GetRecurringPaymentsProfileDetailsResponseDetails
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public function setGetRecurringPaymentsProfileDetailsResponseDetails($_getRecurringPaymentsProfileDetailsResponseDetails)
	{
		return ($this->GetRecurringPaymentsProfileDetailsResponseDetails = $_getRecurringPaymentsProfileDetailsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetRecurringPaymentsProfileDetailsResponseType
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