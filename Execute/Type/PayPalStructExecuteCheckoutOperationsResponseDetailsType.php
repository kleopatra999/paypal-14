<?php
/**
 * File for class PayPalStructExecuteCheckoutOperationsResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExecuteCheckoutOperationsResponseDetailsType originally named ExecuteCheckoutOperationsResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExecuteCheckoutOperationsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The SetDataResponse
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 1
	 * @var PayPalStructSetDataResponseType
	 */
	public $SetDataResponse;
	/**
	 * The AuthorizationResponse
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructAuthorizationResponseType
	 */
	public $AuthorizationResponse;
	/**
	 * Constructor method for ExecuteCheckoutOperationsResponseDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructSetDataResponseType $_setDataResponse
	 * @param PayPalStructAuthorizationResponseType $_authorizationResponse
	 * @return PayPalStructExecuteCheckoutOperationsResponseDetailsType
	 */
	public function __construct($_setDataResponse,$_authorizationResponse = NULL)
	{
		parent::__construct(array('SetDataResponse'=>$_setDataResponse,'AuthorizationResponse'=>$_authorizationResponse));
	}
	/**
	 * Get SetDataResponse value
	 * @return PayPalStructSetDataResponseType
	 */
	public function getSetDataResponse()
	{
		return $this->SetDataResponse;
	}
	/**
	 * Set SetDataResponse value
	 * @param PayPalStructSetDataResponseType $_setDataResponse the SetDataResponse
	 * @return PayPalStructSetDataResponseType
	 */
	public function setSetDataResponse($_setDataResponse)
	{
		return ($this->SetDataResponse = $_setDataResponse);
	}
	/**
	 * Get AuthorizationResponse value
	 * @return PayPalStructAuthorizationResponseType|null
	 */
	public function getAuthorizationResponse()
	{
		return $this->AuthorizationResponse;
	}
	/**
	 * Set AuthorizationResponse value
	 * @param PayPalStructAuthorizationResponseType $_authorizationResponse the AuthorizationResponse
	 * @return PayPalStructAuthorizationResponseType
	 */
	public function setAuthorizationResponse($_authorizationResponse)
	{
		return ($this->AuthorizationResponse = $_authorizationResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExecuteCheckoutOperationsResponseDetailsType
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