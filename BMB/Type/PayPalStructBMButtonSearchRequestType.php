<?php
/**
 * File for class PayPalStructBMButtonSearchRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMButtonSearchRequestType originally named BMButtonSearchRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMButtonSearchRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The StartDate
	 * Meta informations extracted from the WSDL
	 * - documentation : The earliest transaction date at which to start the search. No wildcards are allowed. Required
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations extracted from the WSDL
	 * - documentation : The latest transaction date to be included in the search Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * Constructor method for BMButtonSearchRequestType
	 * @see parent::__construct()
	 * @param dateTime $_startDate
	 * @param dateTime $_endDate
	 * @return PayPalStructBMButtonSearchRequestType
	 */
	public function __construct($_startDate = NULL,$_endDate = NULL)
	{
		PayPalWsdlClass::__construct(array('StartDate'=>$_startDate,'EndDate'=>$_endDate));
	}
	/**
	 * Get StartDate value
	 * @return dateTime|null
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set StartDate value
	 * @param dateTime $_startDate the StartDate
	 * @return dateTime
	 */
	public function setStartDate($_startDate)
	{
		return ($this->StartDate = $_startDate);
	}
	/**
	 * Get EndDate value
	 * @return dateTime|null
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set EndDate value
	 * @param dateTime $_endDate the EndDate
	 * @return dateTime
	 */
	public function setEndDate($_endDate)
	{
		return ($this->EndDate = $_endDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMButtonSearchRequestType
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