<?php
/**
 * File for class PayPalStructIncentiveApplyIndicationType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveApplyIndicationType originally named IncentiveApplyIndicationType
 * Documentation : Defines which bucket or item that the incentive should be applied to.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveApplyIndicationType extends PayPalWsdlClass
{
	/**
	 * The PaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : The Bucket ID that the incentive is applied to.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The ItemId
	 * Meta informations extracted from the WSDL
	 * - documentation : The item that the incentive is applied to.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemId;
	/**
	 * Constructor method for IncentiveApplyIndicationType
	 * @see parent::__construct()
	 * @param string $_paymentRequestID
	 * @param string $_itemId
	 * @return PayPalStructIncentiveApplyIndicationType
	 */
	public function __construct($_paymentRequestID = NULL,$_itemId = NULL)
	{
		parent::__construct(array('PaymentRequestID'=>$_paymentRequestID,'ItemId'=>$_itemId));
	}
	/**
	 * Get PaymentRequestID value
	 * @return string|null
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
	 * Get ItemId value
	 * @return string|null
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set ItemId value
	 * @param string $_itemId the ItemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->ItemId = $_itemId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveApplyIndicationType
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