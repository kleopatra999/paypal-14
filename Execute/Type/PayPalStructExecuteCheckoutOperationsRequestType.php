<?php
/**
 * File for class PayPalStructExecuteCheckoutOperationsRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExecuteCheckoutOperationsRequestType originally named ExecuteCheckoutOperationsRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExecuteCheckoutOperationsRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The ExecuteCheckoutOperationsRequestDetails
	 * @var PayPalStructExecuteCheckoutOperationsRequestDetailsType
	 */
	public $ExecuteCheckoutOperationsRequestDetails;
	/**
	 * Constructor method for ExecuteCheckoutOperationsRequestType
	 * @see parent::__construct()
	 * @param PayPalStructExecuteCheckoutOperationsRequestDetailsType $_executeCheckoutOperationsRequestDetails
	 * @return PayPalStructExecuteCheckoutOperationsRequestType
	 */
	public function __construct($_executeCheckoutOperationsRequestDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('ExecuteCheckoutOperationsRequestDetails'=>$_executeCheckoutOperationsRequestDetails));
	}
	/**
	 * Get ExecuteCheckoutOperationsRequestDetails value
	 * @return PayPalStructExecuteCheckoutOperationsRequestDetailsType|null
	 */
	public function getExecuteCheckoutOperationsRequestDetails()
	{
		return $this->ExecuteCheckoutOperationsRequestDetails;
	}
	/**
	 * Set ExecuteCheckoutOperationsRequestDetails value
	 * @param PayPalStructExecuteCheckoutOperationsRequestDetailsType $_executeCheckoutOperationsRequestDetails the ExecuteCheckoutOperationsRequestDetails
	 * @return PayPalStructExecuteCheckoutOperationsRequestDetailsType
	 */
	public function setExecuteCheckoutOperationsRequestDetails($_executeCheckoutOperationsRequestDetails)
	{
		return ($this->ExecuteCheckoutOperationsRequestDetails = $_executeCheckoutOperationsRequestDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExecuteCheckoutOperationsRequestType
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