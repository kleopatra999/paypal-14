<?php
/**
 * File for class PayPalStructDoReferenceTransactionResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReferenceTransactionResponseType originally named DoReferenceTransactionResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReferenceTransactionResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The DoReferenceTransactionResponseDetails
	 * @var PayPalStructDoReferenceTransactionResponseDetailsType
	 */
	public $DoReferenceTransactionResponseDetails;
	/**
	 * The FMFDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * Constructor method for DoReferenceTransactionResponseType
	 * @see parent::__construct()
	 * @param PayPalStructDoReferenceTransactionResponseDetailsType $_doReferenceTransactionResponseDetails
	 * @param PayPalStructFMFDetailsType $_fMFDetails
	 * @return PayPalStructDoReferenceTransactionResponseType
	 */
	public function __construct($_doReferenceTransactionResponseDetails = NULL,$_fMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoReferenceTransactionResponseDetails'=>$_doReferenceTransactionResponseDetails,'FMFDetails'=>$_fMFDetails));
	}
	/**
	 * Get DoReferenceTransactionResponseDetails value
	 * @return PayPalStructDoReferenceTransactionResponseDetailsType|null
	 */
	public function getDoReferenceTransactionResponseDetails()
	{
		return $this->DoReferenceTransactionResponseDetails;
	}
	/**
	 * Set DoReferenceTransactionResponseDetails value
	 * @param PayPalStructDoReferenceTransactionResponseDetailsType $_doReferenceTransactionResponseDetails the DoReferenceTransactionResponseDetails
	 * @return PayPalStructDoReferenceTransactionResponseDetailsType
	 */
	public function setDoReferenceTransactionResponseDetails($_doReferenceTransactionResponseDetails)
	{
		return ($this->DoReferenceTransactionResponseDetails = $_doReferenceTransactionResponseDetails);
	}
	/**
	 * Get FMFDetails value
	 * @return PayPalStructFMFDetailsType|null
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
	}
	/**
	 * Set FMFDetails value
	 * @param PayPalStructFMFDetailsType $_fMFDetails the FMFDetails
	 * @return PayPalStructFMFDetailsType
	 */
	public function setFMFDetails($_fMFDetails)
	{
		return ($this->FMFDetails = $_fMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoReferenceTransactionResponseType
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