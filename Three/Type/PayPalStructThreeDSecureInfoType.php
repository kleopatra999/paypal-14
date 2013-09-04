<?php
/**
 * File for class PayPalStructThreeDSecureInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructThreeDSecureInfoType originally named ThreeDSecureInfoType
 * Documentation : 3DSecureInfoType Information about 3D Secure parameters.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructThreeDSecureInfoType extends PayPalWsdlClass
{
	/**
	 * The ThreeDSecureRequest
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructThreeDSecureRequestType
	 */
	public $ThreeDSecureRequest;
	/**
	 * The ThreeDSecureResponse
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructThreeDSecureResponseType
	 */
	public $ThreeDSecureResponse;
	/**
	 * Constructor method for ThreeDSecureInfoType
	 * @see parent::__construct()
	 * @param PayPalStructThreeDSecureRequestType $_threeDSecureRequest
	 * @param PayPalStructThreeDSecureResponseType $_threeDSecureResponse
	 * @return PayPalStructThreeDSecureInfoType
	 */
	public function __construct($_threeDSecureRequest = NULL,$_threeDSecureResponse = NULL)
	{
		parent::__construct(array('ThreeDSecureRequest'=>$_threeDSecureRequest,'ThreeDSecureResponse'=>$_threeDSecureResponse));
	}
	/**
	 * Get ThreeDSecureRequest value
	 * @return PayPalStructThreeDSecureRequestType|null
	 */
	public function getThreeDSecureRequest()
	{
		return $this->ThreeDSecureRequest;
	}
	/**
	 * Set ThreeDSecureRequest value
	 * @param PayPalStructThreeDSecureRequestType $_threeDSecureRequest the ThreeDSecureRequest
	 * @return PayPalStructThreeDSecureRequestType
	 */
	public function setThreeDSecureRequest($_threeDSecureRequest)
	{
		return ($this->ThreeDSecureRequest = $_threeDSecureRequest);
	}
	/**
	 * Get ThreeDSecureResponse value
	 * @return PayPalStructThreeDSecureResponseType|null
	 */
	public function getThreeDSecureResponse()
	{
		return $this->ThreeDSecureResponse;
	}
	/**
	 * Set ThreeDSecureResponse value
	 * @param PayPalStructThreeDSecureResponseType $_threeDSecureResponse the ThreeDSecureResponse
	 * @return PayPalStructThreeDSecureResponseType
	 */
	public function setThreeDSecureResponse($_threeDSecureResponse)
	{
		return ($this->ThreeDSecureResponse = $_threeDSecureResponse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructThreeDSecureInfoType
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