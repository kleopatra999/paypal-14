<?php
/**
 * File for class PayPalStructExecuteCheckoutOperationsRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExecuteCheckoutOperationsRequestDetailsType originally named ExecuteCheckoutOperationsRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExecuteCheckoutOperationsRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The SetDataRequest
	 * Meta informations extracted from the WSDL
	 * - documentation : All the Data required to initiate the checkout session is passed in this element.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructSetDataRequestType
	 */
	public $SetDataRequest;
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : On your first invocation of ExecuteCheckoutOperationsRequest, the value of this token is returned by ExecuteCheckoutOperationsResponse. Optional Include this element and its value only if you want to modify an existing checkout session with another invocation of ExecuteCheckoutOperationsRequest; for example, if you want the customer to edit his shipping address on PayPal. Character length and limitations: 20 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Token;
	/**
	 * The AuthorizationRequest
	 * Meta informations extracted from the WSDL
	 * - documentation : If auto authorization is required, this should be passed in with IsRequested set to yes.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructAuthorizationRequestType
	 */
	public $AuthorizationRequest;
	/**
	 * Constructor method for ExecuteCheckoutOperationsRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructSetDataRequestType $_setDataRequest
	 * @param string $_token
	 * @param PayPalStructAuthorizationRequestType $_authorizationRequest
	 * @return PayPalStructExecuteCheckoutOperationsRequestDetailsType
	 */
	public function __construct($_setDataRequest,$_token = NULL,$_authorizationRequest = NULL)
	{
		parent::__construct(array('SetDataRequest'=>$_setDataRequest,'Token'=>$_token,'AuthorizationRequest'=>$_authorizationRequest));
	}
	/**
	 * Get SetDataRequest value
	 * @return PayPalStructSetDataRequestType
	 */
	public function getSetDataRequest()
	{
		return $this->SetDataRequest;
	}
	/**
	 * Set SetDataRequest value
	 * @param PayPalStructSetDataRequestType $_setDataRequest the SetDataRequest
	 * @return PayPalStructSetDataRequestType
	 */
	public function setSetDataRequest($_setDataRequest)
	{
		return ($this->SetDataRequest = $_setDataRequest);
	}
	/**
	 * Get Token value
	 * @return string|null
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set Token value
	 * @param string $_token the Token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->Token = $_token);
	}
	/**
	 * Get AuthorizationRequest value
	 * @return PayPalStructAuthorizationRequestType|null
	 */
	public function getAuthorizationRequest()
	{
		return $this->AuthorizationRequest;
	}
	/**
	 * Set AuthorizationRequest value
	 * @param PayPalStructAuthorizationRequestType $_authorizationRequest the AuthorizationRequest
	 * @return PayPalStructAuthorizationRequestType
	 */
	public function setAuthorizationRequest($_authorizationRequest)
	{
		return ($this->AuthorizationRequest = $_authorizationRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExecuteCheckoutOperationsRequestDetailsType
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