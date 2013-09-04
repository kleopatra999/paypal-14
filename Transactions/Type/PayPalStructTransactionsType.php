<?php
/**
 * File for class PayPalStructTransactionsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTransactionsType originally named TransactionsType
 * Documentation : Contains information about multiple individual transations.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTransactionsType extends PayPalWsdlClass
{
	/**
	 * The Transaction
	 * @var PayPalStructTransactionType
	 */
	public $Transaction;
	/**
	 * Constructor method for TransactionsType
	 * @see parent::__construct()
	 * @param PayPalStructTransactionType $_transaction
	 * @return PayPalStructTransactionsType
	 */
	public function __construct($_transaction = NULL)
	{
		parent::__construct(array('Transaction'=>$_transaction));
	}
	/**
	 * Get Transaction value
	 * @return PayPalStructTransactionType|null
	 */
	public function getTransaction()
	{
		return $this->Transaction;
	}
	/**
	 * Set Transaction value
	 * @param PayPalStructTransactionType $_transaction the Transaction
	 * @return PayPalStructTransactionType
	 */
	public function setTransaction($_transaction)
	{
		return ($this->Transaction = $_transaction);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTransactionsType
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