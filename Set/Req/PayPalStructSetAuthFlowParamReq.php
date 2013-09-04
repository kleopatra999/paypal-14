<?php
/**
 * File for class PayPalStructSetAuthFlowParamReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetAuthFlowParamReq originally named SetAuthFlowParamReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetAuthFlowParamReq extends PayPalWsdlClass
{
	/**
	 * The SetAuthFlowParamRequest
	 * @var PayPalStructSetAuthFlowParamRequestType
	 */
	public $SetAuthFlowParamRequest;
	/**
	 * Constructor method for SetAuthFlowParamReq
	 * @see parent::__construct()
	 * @param PayPalStructSetAuthFlowParamRequestType $_setAuthFlowParamRequest
	 * @return PayPalStructSetAuthFlowParamReq
	 */
	public function __construct($_setAuthFlowParamRequest = NULL)
	{
		parent::__construct(array('SetAuthFlowParamRequest'=>$_setAuthFlowParamRequest));
	}
	/**
	 * Get SetAuthFlowParamRequest value
	 * @return PayPalStructSetAuthFlowParamRequestType|null
	 */
	public function getSetAuthFlowParamRequest()
	{
		return $this->SetAuthFlowParamRequest;
	}
	/**
	 * Set SetAuthFlowParamRequest value
	 * @param PayPalStructSetAuthFlowParamRequestType $_setAuthFlowParamRequest the SetAuthFlowParamRequest
	 * @return PayPalStructSetAuthFlowParamRequestType
	 */
	public function setSetAuthFlowParamRequest($_setAuthFlowParamRequest)
	{
		return ($this->SetAuthFlowParamRequest = $_setAuthFlowParamRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetAuthFlowParamReq
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