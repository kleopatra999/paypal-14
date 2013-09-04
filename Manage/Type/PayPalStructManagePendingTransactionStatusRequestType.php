<?php
/**
 * File for class PayPalStructManagePendingTransactionStatusRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructManagePendingTransactionStatusRequestType originally named ManagePendingTransactionStatusRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructManagePendingTransactionStatusRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Action
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumFMFPendingTransactionActionType
	 */
	public $Action;
	/**
	 * Constructor method for ManagePendingTransactionStatusRequestType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param PayPalEnumFMFPendingTransactionActionType $_action
	 * @return PayPalStructManagePendingTransactionStatusRequestType
	 */
	public function __construct($_transactionID,$_action)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'Action'=>$_action));
	}
	/**
	 * Get TransactionID value
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionID value
	 * @param string $_transactionID the TransactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->TransactionID = $_transactionID);
	}
	/**
	 * Get Action value
	 * @return PayPalEnumFMFPendingTransactionActionType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set Action value
	 * @uses PayPalEnumFMFPendingTransactionActionType::valueIsValid()
	 * @param PayPalEnumFMFPendingTransactionActionType $_action the Action
	 * @return PayPalEnumFMFPendingTransactionActionType
	 */
	public function setAction($_action)
	{
		if(!PayPalEnumFMFPendingTransactionActionType::valueIsValid($_action))
		{
			return false;
		}
		return ($this->Action = $_action);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructManagePendingTransactionStatusRequestType
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