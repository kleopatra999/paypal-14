<?php
/**
 * File for class PayPalStructGetMobileStatusResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetMobileStatusResponseType originally named GetMobileStatusResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetMobileStatusResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The IsActivated
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the phone is activated for mobile payments
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var integer
	 */
	public $IsActivated;
	/**
	 * The IsPasswordSet
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the password is enabled for particular account
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var integer
	 */
	public $IsPasswordSet;
	/**
	 * The PaymentPending
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether there is a payment pending from the phone
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var integer
	 */
	public $PaymentPending;
	/**
	 * Constructor method for GetMobileStatusResponseType
	 * @see parent::__construct()
	 * @param integer $_isActivated
	 * @param integer $_isPasswordSet
	 * @param integer $_paymentPending
	 * @return PayPalStructGetMobileStatusResponseType
	 */
	public function __construct($_isActivated,$_isPasswordSet,$_paymentPending)
	{
		PayPalWsdlClass::__construct(array('IsActivated'=>$_isActivated,'IsPasswordSet'=>$_isPasswordSet,'PaymentPending'=>$_paymentPending));
	}
	/**
	 * Get IsActivated value
	 * @return integer
	 */
	public function getIsActivated()
	{
		return $this->IsActivated;
	}
	/**
	 * Set IsActivated value
	 * @param integer $_isActivated the IsActivated
	 * @return integer
	 */
	public function setIsActivated($_isActivated)
	{
		return ($this->IsActivated = $_isActivated);
	}
	/**
	 * Get IsPasswordSet value
	 * @return integer
	 */
	public function getIsPasswordSet()
	{
		return $this->IsPasswordSet;
	}
	/**
	 * Set IsPasswordSet value
	 * @param integer $_isPasswordSet the IsPasswordSet
	 * @return integer
	 */
	public function setIsPasswordSet($_isPasswordSet)
	{
		return ($this->IsPasswordSet = $_isPasswordSet);
	}
	/**
	 * Get PaymentPending value
	 * @return integer
	 */
	public function getPaymentPending()
	{
		return $this->PaymentPending;
	}
	/**
	 * Set PaymentPending value
	 * @param integer $_paymentPending the PaymentPending
	 * @return integer
	 */
	public function setPaymentPending($_paymentPending)
	{
		return ($this->PaymentPending = $_paymentPending);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetMobileStatusResponseType
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