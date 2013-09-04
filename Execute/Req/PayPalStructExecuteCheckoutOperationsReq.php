<?php
/**
 * File for class PayPalStructExecuteCheckoutOperationsReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExecuteCheckoutOperationsReq originally named ExecuteCheckoutOperationsReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExecuteCheckoutOperationsReq extends PayPalWsdlClass
{
	/**
	 * The ExecuteCheckoutOperationsRequest
	 * @var PayPalStructExecuteCheckoutOperationsRequestType
	 */
	public $ExecuteCheckoutOperationsRequest;
	/**
	 * Constructor method for ExecuteCheckoutOperationsReq
	 * @see parent::__construct()
	 * @param PayPalStructExecuteCheckoutOperationsRequestType $_executeCheckoutOperationsRequest
	 * @return PayPalStructExecuteCheckoutOperationsReq
	 */
	public function __construct($_executeCheckoutOperationsRequest = NULL)
	{
		parent::__construct(array('ExecuteCheckoutOperationsRequest'=>$_executeCheckoutOperationsRequest));
	}
	/**
	 * Get ExecuteCheckoutOperationsRequest value
	 * @return PayPalStructExecuteCheckoutOperationsRequestType|null
	 */
	public function getExecuteCheckoutOperationsRequest()
	{
		return $this->ExecuteCheckoutOperationsRequest;
	}
	/**
	 * Set ExecuteCheckoutOperationsRequest value
	 * @param PayPalStructExecuteCheckoutOperationsRequestType $_executeCheckoutOperationsRequest the ExecuteCheckoutOperationsRequest
	 * @return PayPalStructExecuteCheckoutOperationsRequestType
	 */
	public function setExecuteCheckoutOperationsRequest($_executeCheckoutOperationsRequest)
	{
		return ($this->ExecuteCheckoutOperationsRequest = $_executeCheckoutOperationsRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExecuteCheckoutOperationsReq
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