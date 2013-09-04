<?php
/**
 * File for class PayPalStructAirlineItineraryType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAirlineItineraryType originally named AirlineItineraryType
 * Documentation : AID for Airlines
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAirlineItineraryType extends PayPalWsdlClass
{
	/**
	 * The PassengerName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $PassengerName;
	/**
	 * The IssueDate
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $IssueDate;
	/**
	 * The TravelAgencyName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $TravelAgencyName;
	/**
	 * The TravelAgencyCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $TravelAgencyCode;
	/**
	 * The TicketNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $TicketNumber;
	/**
	 * The IssuingCarrierCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $IssuingCarrierCode;
	/**
	 * The CustomerCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $CustomerCode;
	/**
	 * The TotalFare
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TotalFare;
	/**
	 * The TotalTaxes
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TotalTaxes;
	/**
	 * The TotalFee
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TotalFee;
	/**
	 * The RestrictedTicket
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $RestrictedTicket;
	/**
	 * The ClearingSequence
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ClearingSequence;
	/**
	 * The ClearingCount
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ClearingCount;
	/**
	 * The FlightDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructFlightDetailsType
	 */
	public $FlightDetails;
	/**
	 * Constructor method for AirlineItineraryType
	 * @see parent::__construct()
	 * @param string $_passengerName
	 * @param string $_issueDate
	 * @param string $_travelAgencyName
	 * @param string $_travelAgencyCode
	 * @param string $_ticketNumber
	 * @param string $_issuingCarrierCode
	 * @param string $_customerCode
	 * @param PayPalStructBasicAmountType $_totalFare
	 * @param PayPalStructBasicAmountType $_totalTaxes
	 * @param PayPalStructBasicAmountType $_totalFee
	 * @param string $_restrictedTicket
	 * @param string $_clearingSequence
	 * @param string $_clearingCount
	 * @param PayPalStructFlightDetailsType $_flightDetails
	 * @return PayPalStructAirlineItineraryType
	 */
	public function __construct($_passengerName = NULL,$_issueDate = NULL,$_travelAgencyName = NULL,$_travelAgencyCode = NULL,$_ticketNumber = NULL,$_issuingCarrierCode = NULL,$_customerCode = NULL,$_totalFare = NULL,$_totalTaxes = NULL,$_totalFee = NULL,$_restrictedTicket = NULL,$_clearingSequence = NULL,$_clearingCount = NULL,$_flightDetails = NULL)
	{
		parent::__construct(array('PassengerName'=>$_passengerName,'IssueDate'=>$_issueDate,'TravelAgencyName'=>$_travelAgencyName,'TravelAgencyCode'=>$_travelAgencyCode,'TicketNumber'=>$_ticketNumber,'IssuingCarrierCode'=>$_issuingCarrierCode,'CustomerCode'=>$_customerCode,'TotalFare'=>$_totalFare,'TotalTaxes'=>$_totalTaxes,'TotalFee'=>$_totalFee,'RestrictedTicket'=>$_restrictedTicket,'ClearingSequence'=>$_clearingSequence,'ClearingCount'=>$_clearingCount,'FlightDetails'=>$_flightDetails));
	}
	/**
	 * Get PassengerName value
	 * @return string|null
	 */
	public function getPassengerName()
	{
		return $this->PassengerName;
	}
	/**
	 * Set PassengerName value
	 * @param string $_passengerName the PassengerName
	 * @return string
	 */
	public function setPassengerName($_passengerName)
	{
		return ($this->PassengerName = $_passengerName);
	}
	/**
	 * Get IssueDate value
	 * @return string|null
	 */
	public function getIssueDate()
	{
		return $this->IssueDate;
	}
	/**
	 * Set IssueDate value
	 * @param string $_issueDate the IssueDate
	 * @return string
	 */
	public function setIssueDate($_issueDate)
	{
		return ($this->IssueDate = $_issueDate);
	}
	/**
	 * Get TravelAgencyName value
	 * @return string|null
	 */
	public function getTravelAgencyName()
	{
		return $this->TravelAgencyName;
	}
	/**
	 * Set TravelAgencyName value
	 * @param string $_travelAgencyName the TravelAgencyName
	 * @return string
	 */
	public function setTravelAgencyName($_travelAgencyName)
	{
		return ($this->TravelAgencyName = $_travelAgencyName);
	}
	/**
	 * Get TravelAgencyCode value
	 * @return string|null
	 */
	public function getTravelAgencyCode()
	{
		return $this->TravelAgencyCode;
	}
	/**
	 * Set TravelAgencyCode value
	 * @param string $_travelAgencyCode the TravelAgencyCode
	 * @return string
	 */
	public function setTravelAgencyCode($_travelAgencyCode)
	{
		return ($this->TravelAgencyCode = $_travelAgencyCode);
	}
	/**
	 * Get TicketNumber value
	 * @return string|null
	 */
	public function getTicketNumber()
	{
		return $this->TicketNumber;
	}
	/**
	 * Set TicketNumber value
	 * @param string $_ticketNumber the TicketNumber
	 * @return string
	 */
	public function setTicketNumber($_ticketNumber)
	{
		return ($this->TicketNumber = $_ticketNumber);
	}
	/**
	 * Get IssuingCarrierCode value
	 * @return string|null
	 */
	public function getIssuingCarrierCode()
	{
		return $this->IssuingCarrierCode;
	}
	/**
	 * Set IssuingCarrierCode value
	 * @param string $_issuingCarrierCode the IssuingCarrierCode
	 * @return string
	 */
	public function setIssuingCarrierCode($_issuingCarrierCode)
	{
		return ($this->IssuingCarrierCode = $_issuingCarrierCode);
	}
	/**
	 * Get CustomerCode value
	 * @return string|null
	 */
	public function getCustomerCode()
	{
		return $this->CustomerCode;
	}
	/**
	 * Set CustomerCode value
	 * @param string $_customerCode the CustomerCode
	 * @return string
	 */
	public function setCustomerCode($_customerCode)
	{
		return ($this->CustomerCode = $_customerCode);
	}
	/**
	 * Get TotalFare value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTotalFare()
	{
		return $this->TotalFare;
	}
	/**
	 * Set TotalFare value
	 * @param PayPalStructBasicAmountType $_totalFare the TotalFare
	 * @return PayPalStructBasicAmountType
	 */
	public function setTotalFare($_totalFare)
	{
		return ($this->TotalFare = $_totalFare);
	}
	/**
	 * Get TotalTaxes value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTotalTaxes()
	{
		return $this->TotalTaxes;
	}
	/**
	 * Set TotalTaxes value
	 * @param PayPalStructBasicAmountType $_totalTaxes the TotalTaxes
	 * @return PayPalStructBasicAmountType
	 */
	public function setTotalTaxes($_totalTaxes)
	{
		return ($this->TotalTaxes = $_totalTaxes);
	}
	/**
	 * Get TotalFee value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTotalFee()
	{
		return $this->TotalFee;
	}
	/**
	 * Set TotalFee value
	 * @param PayPalStructBasicAmountType $_totalFee the TotalFee
	 * @return PayPalStructBasicAmountType
	 */
	public function setTotalFee($_totalFee)
	{
		return ($this->TotalFee = $_totalFee);
	}
	/**
	 * Get RestrictedTicket value
	 * @return string|null
	 */
	public function getRestrictedTicket()
	{
		return $this->RestrictedTicket;
	}
	/**
	 * Set RestrictedTicket value
	 * @param string $_restrictedTicket the RestrictedTicket
	 * @return string
	 */
	public function setRestrictedTicket($_restrictedTicket)
	{
		return ($this->RestrictedTicket = $_restrictedTicket);
	}
	/**
	 * Get ClearingSequence value
	 * @return string|null
	 */
	public function getClearingSequence()
	{
		return $this->ClearingSequence;
	}
	/**
	 * Set ClearingSequence value
	 * @param string $_clearingSequence the ClearingSequence
	 * @return string
	 */
	public function setClearingSequence($_clearingSequence)
	{
		return ($this->ClearingSequence = $_clearingSequence);
	}
	/**
	 * Get ClearingCount value
	 * @return string|null
	 */
	public function getClearingCount()
	{
		return $this->ClearingCount;
	}
	/**
	 * Set ClearingCount value
	 * @param string $_clearingCount the ClearingCount
	 * @return string
	 */
	public function setClearingCount($_clearingCount)
	{
		return ($this->ClearingCount = $_clearingCount);
	}
	/**
	 * Get FlightDetails value
	 * @return PayPalStructFlightDetailsType|null
	 */
	public function getFlightDetails()
	{
		return $this->FlightDetails;
	}
	/**
	 * Set FlightDetails value
	 * @param PayPalStructFlightDetailsType $_flightDetails the FlightDetails
	 * @return PayPalStructFlightDetailsType
	 */
	public function setFlightDetails($_flightDetails)
	{
		return ($this->FlightDetails = $_flightDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAirlineItineraryType
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