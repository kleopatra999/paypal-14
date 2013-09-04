<?php
/**
 * File for class PayPalStructCoupledBucketsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCoupledBucketsType originally named CoupledBucketsType
 * Documentation : Defines relationship between buckets
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCoupledBucketsType extends PayPalWsdlClass
{
	/**
	 * The PaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 10
	 * - minOccurs : 2
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The CoupleType
	 * Meta informations extracted from the WSDL
	 * - documentation : Relationship Type - LifeTime (default)
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumCoupleType
	 */
	public $CoupleType;
	/**
	 * The CoupledPaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifier for this relation
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CoupledPaymentRequestID;
	/**
	 * Constructor method for CoupledBucketsType
	 * @see parent::__construct()
	 * @param string $_paymentRequestID
	 * @param PayPalEnumCoupleType $_coupleType
	 * @param string $_coupledPaymentRequestID
	 * @return PayPalStructCoupledBucketsType
	 */
	public function __construct($_paymentRequestID,$_coupleType = NULL,$_coupledPaymentRequestID = NULL)
	{
		parent::__construct(array('PaymentRequestID'=>$_paymentRequestID,'CoupleType'=>$_coupleType,'CoupledPaymentRequestID'=>$_coupledPaymentRequestID));
	}
	/**
	 * Get PaymentRequestID value
	 * @return string
	 */
	public function getPaymentRequestID()
	{
		return $this->PaymentRequestID;
	}
	/**
	 * Set PaymentRequestID value
	 * @param string $_paymentRequestID the PaymentRequestID
	 * @return string
	 */
	public function setPaymentRequestID($_paymentRequestID)
	{
		return ($this->PaymentRequestID = $_paymentRequestID);
	}
	/**
	 * Get CoupleType value
	 * @return PayPalEnumCoupleType|null
	 */
	public function getCoupleType()
	{
		return $this->CoupleType;
	}
	/**
	 * Set CoupleType value
	 * @uses PayPalEnumCoupleType::valueIsValid()
	 * @param PayPalEnumCoupleType $_coupleType the CoupleType
	 * @return PayPalEnumCoupleType
	 */
	public function setCoupleType($_coupleType)
	{
		if(!PayPalEnumCoupleType::valueIsValid($_coupleType))
		{
			return false;
		}
		return ($this->CoupleType = $_coupleType);
	}
	/**
	 * Get CoupledPaymentRequestID value
	 * @return string|null
	 */
	public function getCoupledPaymentRequestID()
	{
		return $this->CoupledPaymentRequestID;
	}
	/**
	 * Set CoupledPaymentRequestID value
	 * @param string $_coupledPaymentRequestID the CoupledPaymentRequestID
	 * @return string
	 */
	public function setCoupledPaymentRequestID($_coupledPaymentRequestID)
	{
		return ($this->CoupledPaymentRequestID = $_coupledPaymentRequestID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCoupledBucketsType
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