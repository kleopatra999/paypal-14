<?php
/**
 * File for class PayPalStructAuthorizationInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAuthorizationInfoType originally named AuthorizationInfoType
 * Documentation : Authorization details
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAuthorizationInfoType extends PayPalWsdlClass
{
	/**
	 * The PaymentStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : The status of the payment: Pending: The payment is pending. See "PendingReason" for more information.
	 * @var PayPalEnumPaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The PendingReason
	 * Meta informations extracted from the WSDL
	 * - documentation : The reason the payment is pending:none: No pending reason address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. authorization: The authorization is pending at time of creation if payment is not under review echeck: The payment is pending because it was made by an eCheck that has not yet cleared. intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview. multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. unilateral: The payment is pending because it was made to an email address that is not yet registered or confirmed. upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account. verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment. payment_review: The payment is pending because it is under payment review. other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
	 * - minOccurs : 0
	 * @var PayPalEnumPendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * The ProtectionEligibility
	 * Meta informations extracted from the WSDL
	 * - documentation : Protection Eligibility for this Transaction - None, SPP or ESPP
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProtectionEligibility;
	/**
	 * The ProtectionEligibilityType
	 * Meta informations extracted from the WSDL
	 * - documentation : Protection Eligibility Type for this Transaction
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProtectionEligibilityType;
	/**
	 * Constructor method for AuthorizationInfoType
	 * @see parent::__construct()
	 * @param PayPalEnumPaymentStatusCodeType $_paymentStatus
	 * @param PayPalEnumPendingStatusCodeType $_pendingReason
	 * @param string $_protectionEligibility
	 * @param string $_protectionEligibilityType
	 * @return PayPalStructAuthorizationInfoType
	 */
	public function __construct($_paymentStatus = NULL,$_pendingReason = NULL,$_protectionEligibility = NULL,$_protectionEligibilityType = NULL)
	{
		parent::__construct(array('PaymentStatus'=>$_paymentStatus,'PendingReason'=>$_pendingReason,'ProtectionEligibility'=>$_protectionEligibility,'ProtectionEligibilityType'=>$_protectionEligibilityType));
	}
	/**
	 * Get PaymentStatus value
	 * @return PayPalEnumPaymentStatusCodeType|null
	 */
	public function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * Set PaymentStatus value
	 * @uses PayPalEnumPaymentStatusCodeType::valueIsValid()
	 * @param PayPalEnumPaymentStatusCodeType $_paymentStatus the PaymentStatus
	 * @return PayPalEnumPaymentStatusCodeType
	 */
	public function setPaymentStatus($_paymentStatus)
	{
		if(!PayPalEnumPaymentStatusCodeType::valueIsValid($_paymentStatus))
		{
			return false;
		}
		return ($this->PaymentStatus = $_paymentStatus);
	}
	/**
	 * Get PendingReason value
	 * @return PayPalEnumPendingStatusCodeType|null
	 */
	public function getPendingReason()
	{
		return $this->PendingReason;
	}
	/**
	 * Set PendingReason value
	 * @uses PayPalEnumPendingStatusCodeType::valueIsValid()
	 * @param PayPalEnumPendingStatusCodeType $_pendingReason the PendingReason
	 * @return PayPalEnumPendingStatusCodeType
	 */
	public function setPendingReason($_pendingReason)
	{
		if(!PayPalEnumPendingStatusCodeType::valueIsValid($_pendingReason))
		{
			return false;
		}
		return ($this->PendingReason = $_pendingReason);
	}
	/**
	 * Get ProtectionEligibility value
	 * @return string|null
	 */
	public function getProtectionEligibility()
	{
		return $this->ProtectionEligibility;
	}
	/**
	 * Set ProtectionEligibility value
	 * @param string $_protectionEligibility the ProtectionEligibility
	 * @return string
	 */
	public function setProtectionEligibility($_protectionEligibility)
	{
		return ($this->ProtectionEligibility = $_protectionEligibility);
	}
	/**
	 * Get ProtectionEligibilityType value
	 * @return string|null
	 */
	public function getProtectionEligibilityType()
	{
		return $this->ProtectionEligibilityType;
	}
	/**
	 * Set ProtectionEligibilityType value
	 * @param string $_protectionEligibilityType the ProtectionEligibilityType
	 * @return string
	 */
	public function setProtectionEligibilityType($_protectionEligibilityType)
	{
		return ($this->ProtectionEligibilityType = $_protectionEligibilityType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAuthorizationInfoType
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