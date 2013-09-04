<?php
/**
 * File for class PayPalStructDoNonReferencedCreditReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoNonReferencedCreditReq originally named DoNonReferencedCreditReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoNonReferencedCreditReq extends PayPalWsdlClass
{
	/**
	 * The DoNonReferencedCreditRequest
	 * @var PayPalStructDoNonReferencedCreditRequestType
	 */
	public $DoNonReferencedCreditRequest;
	/**
	 * Constructor method for DoNonReferencedCreditReq
	 * @see parent::__construct()
	 * @param PayPalStructDoNonReferencedCreditRequestType $_doNonReferencedCreditRequest
	 * @return PayPalStructDoNonReferencedCreditReq
	 */
	public function __construct($_doNonReferencedCreditRequest = NULL)
	{
		parent::__construct(array('DoNonReferencedCreditRequest'=>$_doNonReferencedCreditRequest));
	}
	/**
	 * Get DoNonReferencedCreditRequest value
	 * @return PayPalStructDoNonReferencedCreditRequestType|null
	 */
	public function getDoNonReferencedCreditRequest()
	{
		return $this->DoNonReferencedCreditRequest;
	}
	/**
	 * Set DoNonReferencedCreditRequest value
	 * @param PayPalStructDoNonReferencedCreditRequestType $_doNonReferencedCreditRequest the DoNonReferencedCreditRequest
	 * @return PayPalStructDoNonReferencedCreditRequestType
	 */
	public function setDoNonReferencedCreditRequest($_doNonReferencedCreditRequest)
	{
		return ($this->DoNonReferencedCreditRequest = $_doNonReferencedCreditRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoNonReferencedCreditReq
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