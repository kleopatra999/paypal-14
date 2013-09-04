<?php
/**
 * File for class PayPalStructEnhancedDataType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructEnhancedDataType originally named EnhancedDataType
 * Documentation : Enhanced Data Information. Example: AID for Airlines
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructEnhancedDataType extends PayPalWsdlClass
{
	/**
	 * The AirlineItinerary
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructAirlineItineraryType
	 */
	public $AirlineItinerary;
	/**
	 * Constructor method for EnhancedDataType
	 * @see parent::__construct()
	 * @param PayPalStructAirlineItineraryType $_airlineItinerary
	 * @return PayPalStructEnhancedDataType
	 */
	public function __construct($_airlineItinerary = NULL)
	{
		parent::__construct(array('AirlineItinerary'=>$_airlineItinerary));
	}
	/**
	 * Get AirlineItinerary value
	 * @return PayPalStructAirlineItineraryType|null
	 */
	public function getAirlineItinerary()
	{
		return $this->AirlineItinerary;
	}
	/**
	 * Set AirlineItinerary value
	 * @param PayPalStructAirlineItineraryType $_airlineItinerary the AirlineItinerary
	 * @return PayPalStructAirlineItineraryType
	 */
	public function setAirlineItinerary($_airlineItinerary)
	{
		return ($this->AirlineItinerary = $_airlineItinerary);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructEnhancedDataType
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