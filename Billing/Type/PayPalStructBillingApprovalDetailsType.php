<?php
/**
 * File for class PayPalStructBillingApprovalDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillingApprovalDetailsType originally named BillingApprovalDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillingApprovalDetailsType extends PayPalWsdlClass
{
	/**
	 * The ApprovalType
	 * Meta informations extracted from the WSDL
	 * - documentation : The Type of Approval requested - Billing Agreement or Profile
	 * - minOccurs : 1
	 * @var PayPalEnumApprovalTypeType
	 */
	public $ApprovalType;
	/**
	 * The ApprovalSubType
	 * Meta informations extracted from the WSDL
	 * - documentation : The Approval subtype - Must be MerchantInitiatedBilling for BillingAgreement ApprovalType
	 * - minOccurs : 0
	 * @var PayPalEnumApprovalSubTypeType
	 */
	public $ApprovalSubType;
	/**
	 * The OrderDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Description about the Order
	 * - minOccurs : 0
	 * @var PayPalStructOrderDetailsType
	 */
	public $OrderDetails;
	/**
	 * The PaymentDirectives
	 * Meta informations extracted from the WSDL
	 * - documentation : Directives about the type of payment
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDirectivesType
	 */
	public $PaymentDirectives;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : Client may pass in its identification of this Billing Agreement. It used for the client's tracking purposes.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * Constructor method for BillingApprovalDetailsType
	 * @see parent::__construct()
	 * @param PayPalEnumApprovalTypeType $_approvalType
	 * @param PayPalEnumApprovalSubTypeType $_approvalSubType
	 * @param PayPalStructOrderDetailsType $_orderDetails
	 * @param PayPalStructPaymentDirectivesType $_paymentDirectives
	 * @param string $_custom
	 * @return PayPalStructBillingApprovalDetailsType
	 */
	public function __construct($_approvalType,$_approvalSubType = NULL,$_orderDetails = NULL,$_paymentDirectives = NULL,$_custom = NULL)
	{
		parent::__construct(array('ApprovalType'=>$_approvalType,'ApprovalSubType'=>$_approvalSubType,'OrderDetails'=>$_orderDetails,'PaymentDirectives'=>$_paymentDirectives,'Custom'=>$_custom));
	}
	/**
	 * Get ApprovalType value
	 * @return PayPalEnumApprovalTypeType
	 */
	public function getApprovalType()
	{
		return $this->ApprovalType;
	}
	/**
	 * Set ApprovalType value
	 * @uses PayPalEnumApprovalTypeType::valueIsValid()
	 * @param PayPalEnumApprovalTypeType $_approvalType the ApprovalType
	 * @return PayPalEnumApprovalTypeType
	 */
	public function setApprovalType($_approvalType)
	{
		if(!PayPalEnumApprovalTypeType::valueIsValid($_approvalType))
		{
			return false;
		}
		return ($this->ApprovalType = $_approvalType);
	}
	/**
	 * Get ApprovalSubType value
	 * @return PayPalEnumApprovalSubTypeType|null
	 */
	public function getApprovalSubType()
	{
		return $this->ApprovalSubType;
	}
	/**
	 * Set ApprovalSubType value
	 * @uses PayPalEnumApprovalSubTypeType::valueIsValid()
	 * @param PayPalEnumApprovalSubTypeType $_approvalSubType the ApprovalSubType
	 * @return PayPalEnumApprovalSubTypeType
	 */
	public function setApprovalSubType($_approvalSubType)
	{
		if(!PayPalEnumApprovalSubTypeType::valueIsValid($_approvalSubType))
		{
			return false;
		}
		return ($this->ApprovalSubType = $_approvalSubType);
	}
	/**
	 * Get OrderDetails value
	 * @return PayPalStructOrderDetailsType|null
	 */
	public function getOrderDetails()
	{
		return $this->OrderDetails;
	}
	/**
	 * Set OrderDetails value
	 * @param PayPalStructOrderDetailsType $_orderDetails the OrderDetails
	 * @return PayPalStructOrderDetailsType
	 */
	public function setOrderDetails($_orderDetails)
	{
		return ($this->OrderDetails = $_orderDetails);
	}
	/**
	 * Get PaymentDirectives value
	 * @return PayPalStructPaymentDirectivesType|null
	 */
	public function getPaymentDirectives()
	{
		return $this->PaymentDirectives;
	}
	/**
	 * Set PaymentDirectives value
	 * @param PayPalStructPaymentDirectivesType $_paymentDirectives the PaymentDirectives
	 * @return PayPalStructPaymentDirectivesType
	 */
	public function setPaymentDirectives($_paymentDirectives)
	{
		return ($this->PaymentDirectives = $_paymentDirectives);
	}
	/**
	 * Get Custom value
	 * @return string|null
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set Custom value
	 * @param string $_custom the Custom
	 * @return string
	 */
	public function setCustom($_custom)
	{
		return ($this->Custom = $_custom);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillingApprovalDetailsType
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