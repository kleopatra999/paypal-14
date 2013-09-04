<?php
/**
 * File for class PayPalStructPaymentType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentType originally named PaymentType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentType extends PayPalWsdlClass
{
	/**
	 * The PaymentMeans
	 * @var PayPalStructPaymentMeansType
	 */
	public $PaymentMeans;
	/**
	 * Constructor method for PaymentType
	 * @see parent::__construct()
	 * @param PayPalStructPaymentMeansType $_paymentMeans
	 * @return PayPalStructPaymentType
	 */
	public function __construct($_paymentMeans = NULL)
	{
		parent::__construct(array('PaymentMeans'=>$_paymentMeans));
	}
	/**
	 * Get PaymentMeans value
	 * @return PayPalStructPaymentMeansType|null
	 */
	public function getPaymentMeans()
	{
		return $this->PaymentMeans;
	}
	/**
	 * Set PaymentMeans value
	 * @param PayPalStructPaymentMeansType $_paymentMeans the PaymentMeans
	 * @return PayPalStructPaymentMeansType
	 */
	public function setPaymentMeans($_paymentMeans)
	{
		return ($this->PaymentMeans = $_paymentMeans);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentType
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