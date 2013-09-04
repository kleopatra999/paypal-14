<?php
/**
 * File for class PayPalStructDoReferenceTransactionRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReferenceTransactionRequestType originally named DoReferenceTransactionRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReferenceTransactionRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The DoReferenceTransactionRequestDetails
	 * @var PayPalStructDoReferenceTransactionRequestDetailsType
	 */
	public $DoReferenceTransactionRequestDetails;
	/**
	 * The ReturnFMFDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : This flag indicates that the response should include FMFDetails
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor method for DoReferenceTransactionRequestType
	 * @see parent::__construct()
	 * @param PayPalStructDoReferenceTransactionRequestDetailsType $_doReferenceTransactionRequestDetails
	 * @param int $_returnFMFDetails
	 * @return PayPalStructDoReferenceTransactionRequestType
	 */
	public function __construct($_doReferenceTransactionRequestDetails = NULL,$_returnFMFDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('DoReferenceTransactionRequestDetails'=>$_doReferenceTransactionRequestDetails,'ReturnFMFDetails'=>$_returnFMFDetails));
	}
	/**
	 * Get DoReferenceTransactionRequestDetails value
	 * @return PayPalStructDoReferenceTransactionRequestDetailsType|null
	 */
	public function getDoReferenceTransactionRequestDetails()
	{
		return $this->DoReferenceTransactionRequestDetails;
	}
	/**
	 * Set DoReferenceTransactionRequestDetails value
	 * @param PayPalStructDoReferenceTransactionRequestDetailsType $_doReferenceTransactionRequestDetails the DoReferenceTransactionRequestDetails
	 * @return PayPalStructDoReferenceTransactionRequestDetailsType
	 */
	public function setDoReferenceTransactionRequestDetails($_doReferenceTransactionRequestDetails)
	{
		return ($this->DoReferenceTransactionRequestDetails = $_doReferenceTransactionRequestDetails);
	}
	/**
	 * Get ReturnFMFDetails value
	 * @return int|null
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
	}
	/**
	 * Set ReturnFMFDetails value
	 * @param int $_returnFMFDetails the ReturnFMFDetails
	 * @return int
	 */
	public function setReturnFMFDetails($_returnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_returnFMFDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoReferenceTransactionRequestType
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