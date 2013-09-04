<?php
/**
 * File for class PayPalStructGetBalanceReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetBalanceReq originally named GetBalanceReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetBalanceReq extends PayPalWsdlClass
{
	/**
	 * The GetBalanceRequest
	 * @var PayPalStructGetBalanceRequestType
	 */
	public $GetBalanceRequest;
	/**
	 * Constructor method for GetBalanceReq
	 * @see parent::__construct()
	 * @param PayPalStructGetBalanceRequestType $_getBalanceRequest
	 * @return PayPalStructGetBalanceReq
	 */
	public function __construct($_getBalanceRequest = NULL)
	{
		parent::__construct(array('GetBalanceRequest'=>$_getBalanceRequest));
	}
	/**
	 * Get GetBalanceRequest value
	 * @return PayPalStructGetBalanceRequestType|null
	 */
	public function getGetBalanceRequest()
	{
		return $this->GetBalanceRequest;
	}
	/**
	 * Set GetBalanceRequest value
	 * @param PayPalStructGetBalanceRequestType $_getBalanceRequest the GetBalanceRequest
	 * @return PayPalStructGetBalanceRequestType
	 */
	public function setGetBalanceRequest($_getBalanceRequest)
	{
		return ($this->GetBalanceRequest = $_getBalanceRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetBalanceReq
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