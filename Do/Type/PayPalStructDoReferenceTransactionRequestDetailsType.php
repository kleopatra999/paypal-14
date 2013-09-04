<?php
/**
 * File for class PayPalStructDoReferenceTransactionRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoReferenceTransactionRequestDetailsType originally named DoReferenceTransactionRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoReferenceTransactionRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ReferenceID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ReferenceID;
	/**
	 * The PaymentAction
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumPaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The PaymentDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructPaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The PaymentType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The CreditCard
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructReferenceCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The IPAddress
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The MerchantSessionId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MerchantSessionId;
	/**
	 * The ReqConfirmShipping
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReqConfirmShipping;
	/**
	 * The SoftDescriptor
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * The SenderDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructSenderDetailsType
	 */
	public $SenderDetails;
	/**
	 * The MsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor method for DoReferenceTransactionRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_referenceID
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction
	 * @param PayPalStructPaymentDetailsType $_paymentDetails
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType
	 * @param PayPalStructReferenceCreditCardDetailsType $_creditCard
	 * @param string $_iPAddress
	 * @param string $_merchantSessionId
	 * @param string $_reqConfirmShipping
	 * @param string $_softDescriptor
	 * @param PayPalStructSenderDetailsType $_senderDetails
	 * @param string $_msgSubID
	 * @return PayPalStructDoReferenceTransactionRequestDetailsType
	 */
	public function __construct($_referenceID,$_paymentAction,$_paymentDetails,$_paymentType = NULL,$_creditCard = NULL,$_iPAddress = NULL,$_merchantSessionId = NULL,$_reqConfirmShipping = NULL,$_softDescriptor = NULL,$_senderDetails = NULL,$_msgSubID = NULL)
	{
		parent::__construct(array('ReferenceID'=>$_referenceID,'PaymentAction'=>$_paymentAction,'PaymentDetails'=>$_paymentDetails,'PaymentType'=>$_paymentType,'CreditCard'=>$_creditCard,'IPAddress'=>$_iPAddress,'MerchantSessionId'=>$_merchantSessionId,'ReqConfirmShipping'=>$_reqConfirmShipping,'SoftDescriptor'=>$_softDescriptor,'SenderDetails'=>$_senderDetails,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get ReferenceID value
	 * @return string
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * Set ReferenceID value
	 * @param string $_referenceID the ReferenceID
	 * @return string
	 */
	public function setReferenceID($_referenceID)
	{
		return ($this->ReferenceID = $_referenceID);
	}
	/**
	 * Get PaymentAction value
	 * @return PayPalEnumPaymentActionCodeType
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set PaymentAction value
	 * @uses PayPalEnumPaymentActionCodeType::valueIsValid()
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction the PaymentAction
	 * @return PayPalEnumPaymentActionCodeType
	 */
	public function setPaymentAction($_paymentAction)
	{
		if(!PayPalEnumPaymentActionCodeType::valueIsValid($_paymentAction))
		{
			return false;
		}
		return ($this->PaymentAction = $_paymentAction);
	}
	/**
	 * Get PaymentDetails value
	 * @return PayPalStructPaymentDetailsType
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set PaymentDetails value
	 * @param PayPalStructPaymentDetailsType $_paymentDetails the PaymentDetails
	 * @return PayPalStructPaymentDetailsType
	 */
	public function setPaymentDetails($_paymentDetails)
	{
		return ($this->PaymentDetails = $_paymentDetails);
	}
	/**
	 * Get PaymentType value
	 * @return PayPalEnumMerchantPullPaymentCodeType|null
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set PaymentType value
	 * @uses PayPalEnumMerchantPullPaymentCodeType::valueIsValid()
	 * @param PayPalEnumMerchantPullPaymentCodeType $_paymentType the PaymentType
	 * @return PayPalEnumMerchantPullPaymentCodeType
	 */
	public function setPaymentType($_paymentType)
	{
		if(!PayPalEnumMerchantPullPaymentCodeType::valueIsValid($_paymentType))
		{
			return false;
		}
		return ($this->PaymentType = $_paymentType);
	}
	/**
	 * Get CreditCard value
	 * @return PayPalStructReferenceCreditCardDetailsType|null
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set CreditCard value
	 * @param PayPalStructReferenceCreditCardDetailsType $_creditCard the CreditCard
	 * @return PayPalStructReferenceCreditCardDetailsType
	 */
	public function setCreditCard($_creditCard)
	{
		return ($this->CreditCard = $_creditCard);
	}
	/**
	 * Get IPAddress value
	 * @return string|null
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set IPAddress value
	 * @param string $_iPAddress the IPAddress
	 * @return string
	 */
	public function setIPAddress($_iPAddress)
	{
		return ($this->IPAddress = $_iPAddress);
	}
	/**
	 * Get MerchantSessionId value
	 * @return string|null
	 */
	public function getMerchantSessionId()
	{
		return $this->MerchantSessionId;
	}
	/**
	 * Set MerchantSessionId value
	 * @param string $_merchantSessionId the MerchantSessionId
	 * @return string
	 */
	public function setMerchantSessionId($_merchantSessionId)
	{
		return ($this->MerchantSessionId = $_merchantSessionId);
	}
	/**
	 * Get ReqConfirmShipping value
	 * @return string|null
	 */
	public function getReqConfirmShipping()
	{
		return $this->ReqConfirmShipping;
	}
	/**
	 * Set ReqConfirmShipping value
	 * @param string $_reqConfirmShipping the ReqConfirmShipping
	 * @return string
	 */
	public function setReqConfirmShipping($_reqConfirmShipping)
	{
		return ($this->ReqConfirmShipping = $_reqConfirmShipping);
	}
	/**
	 * Get SoftDescriptor value
	 * @return string|null
	 */
	public function getSoftDescriptor()
	{
		return $this->SoftDescriptor;
	}
	/**
	 * Set SoftDescriptor value
	 * @param string $_softDescriptor the SoftDescriptor
	 * @return string
	 */
	public function setSoftDescriptor($_softDescriptor)
	{
		return ($this->SoftDescriptor = $_softDescriptor);
	}
	/**
	 * Get SenderDetails value
	 * @return PayPalStructSenderDetailsType|null
	 */
	public function getSenderDetails()
	{
		return $this->SenderDetails;
	}
	/**
	 * Set SenderDetails value
	 * @param PayPalStructSenderDetailsType $_senderDetails the SenderDetails
	 * @return PayPalStructSenderDetailsType
	 */
	public function setSenderDetails($_senderDetails)
	{
		return ($this->SenderDetails = $_senderDetails);
	}
	/**
	 * Get MsgSubID value
	 * @return string|null
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
	}
	/**
	 * Set MsgSubID value
	 * @param string $_msgSubID the MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_msgSubID)
	{
		return ($this->MsgSubID = $_msgSubID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoReferenceTransactionRequestDetailsType
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