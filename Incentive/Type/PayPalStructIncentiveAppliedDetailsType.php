<?php
/**
 * File for class PayPalStructIncentiveAppliedDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveAppliedDetailsType originally named IncentiveAppliedDetailsType
 * Documentation : Details of incentive application on individual bucket/item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveAppliedDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentRequestID
	 * Meta informations extracted from the WSDL
	 * - documentation : PaymentRequestID uniquely identifies a bucket. It is the "bucket id" in the world of EC API.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The ItemId
	 * Meta informations extracted from the WSDL
	 * - documentation : The item id passed through by the merchant.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemId;
	/**
	 * The ExternalTxnId
	 * Meta informations extracted from the WSDL
	 * - documentation : The item transaction id passed through by the merchant.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalTxnId;
	/**
	 * The DiscountAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Discount offerred for this bucket or item.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $DiscountAmount;
	/**
	 * The SubType
	 * Meta informations extracted from the WSDL
	 * - documentation : SubType for coupon.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SubType;
	/**
	 * Constructor method for IncentiveAppliedDetailsType
	 * @see parent::__construct()
	 * @param string $_paymentRequestID
	 * @param string $_itemId
	 * @param string $_externalTxnId
	 * @param PayPalStructBasicAmountType $_discountAmount
	 * @param string $_subType
	 * @return PayPalStructIncentiveAppliedDetailsType
	 */
	public function __construct($_paymentRequestID = NULL,$_itemId = NULL,$_externalTxnId = NULL,$_discountAmount = NULL,$_subType = NULL)
	{
		parent::__construct(array('PaymentRequestID'=>$_paymentRequestID,'ItemId'=>$_itemId,'ExternalTxnId'=>$_externalTxnId,'DiscountAmount'=>$_discountAmount,'SubType'=>$_subType));
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
	 * Get ExternalTxnId value
	 * @return string|null
	 */
	public function getExternalTxnId()
	{
		return $this->ExternalTxnId;
	}
	/**
	 * Set ExternalTxnId value
	 * @param string $_externalTxnId the ExternalTxnId
	 * @return string
	 */
	public function setExternalTxnId($_externalTxnId)
	{
		return ($this->ExternalTxnId = $_externalTxnId);
	}
	/**
	 * Get DiscountAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getDiscountAmount()
	{
		return $this->DiscountAmount;
	}
	/**
	 * Set DiscountAmount value
	 * @param PayPalStructBasicAmountType $_discountAmount the DiscountAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setDiscountAmount($_discountAmount)
	{
		return ($this->DiscountAmount = $_discountAmount);
	}
	/**
	 * Get SubType value
	 * @return string|null
	 */
	public function getSubType()
	{
		return $this->SubType;
	}
	/**
	 * Set SubType value
	 * @param string $_subType the SubType
	 * @return string
	 */
	public function setSubType($_subType)
	{
		return ($this->SubType = $_subType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveAppliedDetailsType
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