<?php
/**
 * File for class PayPalStructGetTransactionDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetTransactionDetailsResponseType originally named GetTransactionDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetTransactionDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The PaymentTransactionDetails
	 * @var PayPalStructPaymentTransactionType
	 */
	public $PaymentTransactionDetails;
	/**
	 * The ThreeDSecureDetails
	 * @var PayPalStructThreeDSecureInfoType
	 */
	public $ThreeDSecureDetails;
	/**
	 * Constructor method for GetTransactionDetailsResponseType
	 * @see parent::__construct()
	 * @param PayPalStructPaymentTransactionType $_paymentTransactionDetails
	 * @param PayPalStructThreeDSecureInfoType $_threeDSecureDetails
	 * @return PayPalStructGetTransactionDetailsResponseType
	 */
	public function __construct($_paymentTransactionDetails = NULL,$_threeDSecureDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('PaymentTransactionDetails'=>$_paymentTransactionDetails,'ThreeDSecureDetails'=>$_threeDSecureDetails));
	}
	/**
	 * Get PaymentTransactionDetails value
	 * @return PayPalStructPaymentTransactionType|null
	 */
	public function getPaymentTransactionDetails()
	{
		return $this->PaymentTransactionDetails;
	}
	/**
	 * Set PaymentTransactionDetails value
	 * @param PayPalStructPaymentTransactionType $_paymentTransactionDetails the PaymentTransactionDetails
	 * @return PayPalStructPaymentTransactionType
	 */
	public function setPaymentTransactionDetails($_paymentTransactionDetails)
	{
		return ($this->PaymentTransactionDetails = $_paymentTransactionDetails);
	}
	/**
	 * Get ThreeDSecureDetails value
	 * @return PayPalStructThreeDSecureInfoType|null
	 */
	public function getThreeDSecureDetails()
	{
		return $this->ThreeDSecureDetails;
	}
	/**
	 * Set ThreeDSecureDetails value
	 * @param PayPalStructThreeDSecureInfoType $_threeDSecureDetails the ThreeDSecureDetails
	 * @return PayPalStructThreeDSecureInfoType
	 */
	public function setThreeDSecureDetails($_threeDSecureDetails)
	{
		return ($this->ThreeDSecureDetails = $_threeDSecureDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetTransactionDetailsResponseType
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