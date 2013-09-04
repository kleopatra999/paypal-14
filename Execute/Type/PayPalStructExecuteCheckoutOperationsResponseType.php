<?php
/**
 * File for class PayPalStructExecuteCheckoutOperationsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExecuteCheckoutOperationsResponseType originally named ExecuteCheckoutOperationsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExecuteCheckoutOperationsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The ExecuteCheckoutOperationsResponseDetails
	 * @var PayPalStructExecuteCheckoutOperationsResponseDetailsType
	 */
	public $ExecuteCheckoutOperationsResponseDetails;
	/**
	 * Constructor method for ExecuteCheckoutOperationsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructExecuteCheckoutOperationsResponseDetailsType $_executeCheckoutOperationsResponseDetails
	 * @return PayPalStructExecuteCheckoutOperationsResponseType
	 */
	public function __construct($_executeCheckoutOperationsResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ExecuteCheckoutOperationsResponseDetails'=>$_executeCheckoutOperationsResponseDetails));
	}
	/**
	 * Get ExecuteCheckoutOperationsResponseDetails value
	 * @return PayPalStructExecuteCheckoutOperationsResponseDetailsType|null
	 */
	public function getExecuteCheckoutOperationsResponseDetails()
	{
		return $this->ExecuteCheckoutOperationsResponseDetails;
	}
	/**
	 * Set ExecuteCheckoutOperationsResponseDetails value
	 * @param PayPalStructExecuteCheckoutOperationsResponseDetailsType $_executeCheckoutOperationsResponseDetails the ExecuteCheckoutOperationsResponseDetails
	 * @return PayPalStructExecuteCheckoutOperationsResponseDetailsType
	 */
	public function setExecuteCheckoutOperationsResponseDetails($_executeCheckoutOperationsResponseDetails)
	{
		return ($this->ExecuteCheckoutOperationsResponseDetails = $_executeCheckoutOperationsResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExecuteCheckoutOperationsResponseType
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