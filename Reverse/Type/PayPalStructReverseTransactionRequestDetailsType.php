<?php
/**
 * File for class PayPalStructReverseTransactionRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReverseTransactionRequestDetailsType originally named ReverseTransactionRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReverseTransactionRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifier of the transaction to reverse. Required Character length and limitations: 17 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * Constructor method for ReverseTransactionRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_transactionID
	 * @return PayPalStructReverseTransactionRequestDetailsType
	 */
	public function __construct($_transactionID = NULL)
	{
		parent::__construct(array('TransactionID'=>$_transactionID));
	}
	/**
	 * Get TransactionID value
	 * @return string|null
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReverseTransactionRequestDetailsType
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