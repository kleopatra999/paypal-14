<?php
/**
 * File for class PayPalStructDoNonReferencedCreditResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoNonReferencedCreditResponseDetailsType originally named DoNonReferencedCreditResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoNonReferencedCreditResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * Constructor method for DoNonReferencedCreditResponseDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_transactionID
	 * @return PayPalStructDoNonReferencedCreditResponseDetailsType
	 */
	public function __construct($_amount = NULL,$_transactionID = NULL)
	{
		parent::__construct(array('Amount'=>$_amount,'TransactionID'=>$_transactionID));
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
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
	 * @return PayPalStructDoNonReferencedCreditResponseDetailsType
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