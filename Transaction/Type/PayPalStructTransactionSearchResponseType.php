<?php
/**
 * File for class PayPalStructTransactionSearchResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructTransactionSearchResponseType originally named TransactionSearchResponseType
 * Documentation : Results of a Transaction Search.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructTransactionSearchResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The PaymentTransactions
	 * @var PayPalStructPaymentTransactionSearchResultType
	 */
	public $PaymentTransactions;
	/**
	 * Constructor method for TransactionSearchResponseType
	 * @see parent::__construct()
	 * @param PayPalStructPaymentTransactionSearchResultType $_paymentTransactions
	 * @return PayPalStructTransactionSearchResponseType
	 */
	public function __construct($_paymentTransactions = NULL)
	{
		PayPalWsdlClass::__construct(array('PaymentTransactions'=>$_paymentTransactions));
	}
	/**
	 * Get PaymentTransactions value
	 * @return PayPalStructPaymentTransactionSearchResultType|null
	 */
	public function getPaymentTransactions()
	{
		return $this->PaymentTransactions;
	}
	/**
	 * Set PaymentTransactions value
	 * @param PayPalStructPaymentTransactionSearchResultType $_paymentTransactions the PaymentTransactions
	 * @return PayPalStructPaymentTransactionSearchResultType
	 */
	public function setPaymentTransactions($_paymentTransactions)
	{
		return ($this->PaymentTransactions = $_paymentTransactions);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructTransactionSearchResponseType
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