<?php
/**
 * File for class PayPalStructBMButtonSearchReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMButtonSearchReq originally named BMButtonSearchReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMButtonSearchReq extends PayPalWsdlClass
{
	/**
	 * The BMButtonSearchRequest
	 * @var PayPalStructBMButtonSearchRequestType
	 */
	public $BMButtonSearchRequest;
	/**
	 * Constructor method for BMButtonSearchReq
	 * @see parent::__construct()
	 * @param PayPalStructBMButtonSearchRequestType $_bMButtonSearchRequest
	 * @return PayPalStructBMButtonSearchReq
	 */
	public function __construct($_bMButtonSearchRequest = NULL)
	{
		parent::__construct(array('BMButtonSearchRequest'=>$_bMButtonSearchRequest));
	}
	/**
	 * Get BMButtonSearchRequest value
	 * @return PayPalStructBMButtonSearchRequestType|null
	 */
	public function getBMButtonSearchRequest()
	{
		return $this->BMButtonSearchRequest;
	}
	/**
	 * Set BMButtonSearchRequest value
	 * @param PayPalStructBMButtonSearchRequestType $_bMButtonSearchRequest the BMButtonSearchRequest
	 * @return PayPalStructBMButtonSearchRequestType
	 */
	public function setBMButtonSearchRequest($_bMButtonSearchRequest)
	{
		return ($this->BMButtonSearchRequest = $_bMButtonSearchRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMButtonSearchReq
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