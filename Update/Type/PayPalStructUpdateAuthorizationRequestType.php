<?php
/**
 * File for class PayPalStructUpdateAuthorizationRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUpdateAuthorizationRequestType originally named UpdateAuthorizationRequestType
 * Documentation : Shipping Address for this transaction.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUpdateAuthorizationRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of the authorizationâtransaction identification number returned by a PayPal product. Required Character length and limits: 19 single-byte characters maximum
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The ShipToAddress
	 * @var PayPalStructAddressType
	 */
	public $ShipToAddress;
	/**
	 * The IPAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : IP Address of the buyer
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $IPAddress;
	/**
	 * Constructor method for UpdateAuthorizationRequestType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @param PayPalStructAddressType $_shipToAddress
	 * @param string $_iPAddress
	 * @return PayPalStructUpdateAuthorizationRequestType
	 */
	public function __construct($_transactionID,$_shipToAddress = NULL,$_iPAddress = NULL)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_transactionID,'ShipToAddress'=>$_shipToAddress,'IPAddress'=>$_iPAddress));
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
	 * Get ShipToAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getShipToAddress()
	{
		return $this->ShipToAddress;
	}
	/**
	 * Set ShipToAddress value
	 * @param PayPalStructAddressType $_shipToAddress the ShipToAddress
	 * @return PayPalStructAddressType
	 */
	public function setShipToAddress($_shipToAddress)
	{
		return ($this->ShipToAddress = $_shipToAddress);
	}
	/**
	 * Get IPAddress value
	 * @return string|null
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set IPAddress value
	 * @param string $_iPAddress the IPAddress
	 * @return string
	 */
	public function setIPAddress($_iPAddress)
	{
		return ($this->IPAddress = $_iPAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUpdateAuthorizationRequestType
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