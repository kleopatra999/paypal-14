<?php
/**
 * File for class PayPalStructFlightDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFlightDetailsType originally named FlightDetailsType
 * Documentation : Details of leg information
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFlightDetailsType extends PayPalWsdlClass
{
	/**
	 * The ConjuctionTicket
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ConjuctionTicket;
	/**
	 * The ExchangeTicket
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExchangeTicket;
	/**
	 * The CouponNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CouponNumber;
	/**
	 * The ServiceClass
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ServiceClass;
	/**
	 * The TravelDate
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $TravelDate;
	/**
	 * The CarrierCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CarrierCode;
	/**
	 * The StopOverPermitted
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $StopOverPermitted;
	/**
	 * The DepartureAirport
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DepartureAirport;
	/**
	 * The ArrivalAirport
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ArrivalAirport;
	/**
	 * The FlightNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $FlightNumber;
	/**
	 * The DepartureTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DepartureTime;
	/**
	 * The ArrivalTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ArrivalTime;
	/**
	 * The FareBasisCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $FareBasisCode;
	/**
	 * The Fare
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Fare;
	/**
	 * The Taxes
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Taxes;
	/**
	 * The Fee
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Fee;
	/**
	 * The EndorsementOrRestrictions
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $EndorsementOrRestrictions;
	/**
	 * Constructor method for FlightDetailsType
	 * @see parent::__construct()
	 * @param string $_conjuctionTicket
	 * @param string $_exchangeTicket
	 * @param string $_couponNumber
	 * @param string $_serviceClass
	 * @param string $_travelDate
	 * @param string $_carrierCode
	 * @param string $_stopOverPermitted
	 * @param string $_departureAirport
	 * @param string $_arrivalAirport
	 * @param string $_flightNumber
	 * @param string $_departureTime
	 * @param string $_arrivalTime
	 * @param string $_fareBasisCode
	 * @param PayPalStructBasicAmountType $_fare
	 * @param PayPalStructBasicAmountType $_taxes
	 * @param PayPalStructBasicAmountType $_fee
	 * @param string $_endorsementOrRestrictions
	 * @return PayPalStructFlightDetailsType
	 */
	public function __construct($_conjuctionTicket = NULL,$_exchangeTicket = NULL,$_couponNumber = NULL,$_serviceClass = NULL,$_travelDate = NULL,$_carrierCode = NULL,$_stopOverPermitted = NULL,$_departureAirport = NULL,$_arrivalAirport = NULL,$_flightNumber = NULL,$_departureTime = NULL,$_arrivalTime = NULL,$_fareBasisCode = NULL,$_fare = NULL,$_taxes = NULL,$_fee = NULL,$_endorsementOrRestrictions = NULL)
	{
		parent::__construct(array('ConjuctionTicket'=>$_conjuctionTicket,'ExchangeTicket'=>$_exchangeTicket,'CouponNumber'=>$_couponNumber,'ServiceClass'=>$_serviceClass,'TravelDate'=>$_travelDate,'CarrierCode'=>$_carrierCode,'StopOverPermitted'=>$_stopOverPermitted,'DepartureAirport'=>$_departureAirport,'ArrivalAirport'=>$_arrivalAirport,'FlightNumber'=>$_flightNumber,'DepartureTime'=>$_departureTime,'ArrivalTime'=>$_arrivalTime,'FareBasisCode'=>$_fareBasisCode,'Fare'=>$_fare,'Taxes'=>$_taxes,'Fee'=>$_fee,'EndorsementOrRestrictions'=>$_endorsementOrRestrictions));
	}
	/**
	 * Get ConjuctionTicket value
	 * @return string|null
	 */
	public function getConjuctionTicket()
	{
		return $this->ConjuctionTicket;
	}
	/**
	 * Set ConjuctionTicket value
	 * @param string $_conjuctionTicket the ConjuctionTicket
	 * @return string
	 */
	public function setConjuctionTicket($_conjuctionTicket)
	{
		return ($this->ConjuctionTicket = $_conjuctionTicket);
	}
	/**
	 * Get ExchangeTicket value
	 * @return string|null
	 */
	public function getExchangeTicket()
	{
		return $this->ExchangeTicket;
	}
	/**
	 * Set ExchangeTicket value
	 * @param string $_exchangeTicket the ExchangeTicket
	 * @return string
	 */
	public function setExchangeTicket($_exchangeTicket)
	{
		return ($this->ExchangeTicket = $_exchangeTicket);
	}
	/**
	 * Get CouponNumber value
	 * @return string|null
	 */
	public function getCouponNumber()
	{
		return $this->CouponNumber;
	}
	/**
	 * Set CouponNumber value
	 * @param string $_couponNumber the CouponNumber
	 * @return string
	 */
	public function setCouponNumber($_couponNumber)
	{
		return ($this->CouponNumber = $_couponNumber);
	}
	/**
	 * Get ServiceClass value
	 * @return string|null
	 */
	public function getServiceClass()
	{
		return $this->ServiceClass;
	}
	/**
	 * Set ServiceClass value
	 * @param string $_serviceClass the ServiceClass
	 * @return string
	 */
	public function setServiceClass($_serviceClass)
	{
		return ($this->ServiceClass = $_serviceClass);
	}
	/**
	 * Get TravelDate value
	 * @return string|null
	 */
	public function getTravelDate()
	{
		return $this->TravelDate;
	}
	/**
	 * Set TravelDate value
	 * @param string $_travelDate the TravelDate
	 * @return string
	 */
	public function setTravelDate($_travelDate)
	{
		return ($this->TravelDate = $_travelDate);
	}
	/**
	 * Get CarrierCode value
	 * @return string|null
	 */
	public function getCarrierCode()
	{
		return $this->CarrierCode;
	}
	/**
	 * Set CarrierCode value
	 * @param string $_carrierCode the CarrierCode
	 * @return string
	 */
	public function setCarrierCode($_carrierCode)
	{
		return ($this->CarrierCode = $_carrierCode);
	}
	/**
	 * Get StopOverPermitted value
	 * @return string|null
	 */
	public function getStopOverPermitted()
	{
		return $this->StopOverPermitted;
	}
	/**
	 * Set StopOverPermitted value
	 * @param string $_stopOverPermitted the StopOverPermitted
	 * @return string
	 */
	public function setStopOverPermitted($_stopOverPermitted)
	{
		return ($this->StopOverPermitted = $_stopOverPermitted);
	}
	/**
	 * Get DepartureAirport value
	 * @return string|null
	 */
	public function getDepartureAirport()
	{
		return $this->DepartureAirport;
	}
	/**
	 * Set DepartureAirport value
	 * @param string $_departureAirport the DepartureAirport
	 * @return string
	 */
	public function setDepartureAirport($_departureAirport)
	{
		return ($this->DepartureAirport = $_departureAirport);
	}
	/**
	 * Get ArrivalAirport value
	 * @return string|null
	 */
	public function getArrivalAirport()
	{
		return $this->ArrivalAirport;
	}
	/**
	 * Set ArrivalAirport value
	 * @param string $_arrivalAirport the ArrivalAirport
	 * @return string
	 */
	public function setArrivalAirport($_arrivalAirport)
	{
		return ($this->ArrivalAirport = $_arrivalAirport);
	}
	/**
	 * Get FlightNumber value
	 * @return string|null
	 */
	public function getFlightNumber()
	{
		return $this->FlightNumber;
	}
	/**
	 * Set FlightNumber value
	 * @param string $_flightNumber the FlightNumber
	 * @return string
	 */
	public function setFlightNumber($_flightNumber)
	{
		return ($this->FlightNumber = $_flightNumber);
	}
	/**
	 * Get DepartureTime value
	 * @return string|null
	 */
	public function getDepartureTime()
	{
		return $this->DepartureTime;
	}
	/**
	 * Set DepartureTime value
	 * @param string $_departureTime the DepartureTime
	 * @return string
	 */
	public function setDepartureTime($_departureTime)
	{
		return ($this->DepartureTime = $_departureTime);
	}
	/**
	 * Get ArrivalTime value
	 * @return string|null
	 */
	public function getArrivalTime()
	{
		return $this->ArrivalTime;
	}
	/**
	 * Set ArrivalTime value
	 * @param string $_arrivalTime the ArrivalTime
	 * @return string
	 */
	public function setArrivalTime($_arrivalTime)
	{
		return ($this->ArrivalTime = $_arrivalTime);
	}
	/**
	 * Get FareBasisCode value
	 * @return string|null
	 */
	public function getFareBasisCode()
	{
		return $this->FareBasisCode;
	}
	/**
	 * Set FareBasisCode value
	 * @param string $_fareBasisCode the FareBasisCode
	 * @return string
	 */
	public function setFareBasisCode($_fareBasisCode)
	{
		return ($this->FareBasisCode = $_fareBasisCode);
	}
	/**
	 * Get Fare value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getFare()
	{
		return $this->Fare;
	}
	/**
	 * Set Fare value
	 * @param PayPalStructBasicAmountType $_fare the Fare
	 * @return PayPalStructBasicAmountType
	 */
	public function setFare($_fare)
	{
		return ($this->Fare = $_fare);
	}
	/**
	 * Get Taxes value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxes()
	{
		return $this->Taxes;
	}
	/**
	 * Set Taxes value
	 * @param PayPalStructBasicAmountType $_taxes the Taxes
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxes($_taxes)
	{
		return ($this->Taxes = $_taxes);
	}
	/**
	 * Get Fee value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getFee()
	{
		return $this->Fee;
	}
	/**
	 * Set Fee value
	 * @param PayPalStructBasicAmountType $_fee the Fee
	 * @return PayPalStructBasicAmountType
	 */
	public function setFee($_fee)
	{
		return ($this->Fee = $_fee);
	}
	/**
	 * Get EndorsementOrRestrictions value
	 * @return string|null
	 */
	public function getEndorsementOrRestrictions()
	{
		return $this->EndorsementOrRestrictions;
	}
	/**
	 * Set EndorsementOrRestrictions value
	 * @param string $_endorsementOrRestrictions the EndorsementOrRestrictions
	 * @return string
	 */
	public function setEndorsementOrRestrictions($_endorsementOrRestrictions)
	{
		return ($this->EndorsementOrRestrictions = $_endorsementOrRestrictions);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFlightDetailsType
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