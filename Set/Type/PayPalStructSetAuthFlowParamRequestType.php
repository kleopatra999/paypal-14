<?php
/**
 * File for class PayPalStructSetAuthFlowParamRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetAuthFlowParamRequestType originally named SetAuthFlowParamRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetAuthFlowParamRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The SetAuthFlowParamRequestDetails
	 * @var PayPalStructSetAuthFlowParamRequestDetailsType
	 */
	public $SetAuthFlowParamRequestDetails;
	/**
	 * Constructor method for SetAuthFlowParamRequestType
	 * @see parent::__construct()
	 * @param PayPalStructSetAuthFlowParamRequestDetailsType $_setAuthFlowParamRequestDetails
	 * @return PayPalStructSetAuthFlowParamRequestType
	 */
	public function __construct($_setAuthFlowParamRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('SetAuthFlowParamRequestDetails'=>$_setAuthFlowParamRequestDetails));
	}
	/**
	 * Get SetAuthFlowParamRequestDetails value
	 * @return PayPalStructSetAuthFlowParamRequestDetailsType|null
	 */
	public function getSetAuthFlowParamRequestDetails()
	{
		return $this->SetAuthFlowParamRequestDetails;
	}
	/**
	 * Set SetAuthFlowParamRequestDetails value
	 * @param PayPalStructSetAuthFlowParamRequestDetailsType $_setAuthFlowParamRequestDetails the SetAuthFlowParamRequestDetails
	 * @return PayPalStructSetAuthFlowParamRequestDetailsType
	 */
	public function setSetAuthFlowParamRequestDetails($_setAuthFlowParamRequestDetails)
	{
		return ($this->SetAuthFlowParamRequestDetails = $_setAuthFlowParamRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetAuthFlowParamRequestType
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