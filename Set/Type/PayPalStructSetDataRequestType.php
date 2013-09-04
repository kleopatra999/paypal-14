<?php
/**
 * File for class PayPalStructSetDataRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetDataRequestType originally named SetDataRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetDataRequestType extends PayPalWsdlClass
{
	/**
	 * The BillingApprovalDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about Billing Agreements requested to be created.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructBillingApprovalDetailsType
	 */
	public $BillingApprovalDetails;
	/**
	 * The BuyerDetail
	 * Meta informations extracted from the WSDL
	 * - documentation : Only needed if Auto Authorization is requested. The authentication session token will be passed in here.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBuyerDetailType
	 */
	public $BuyerDetail;
	/**
	 * The InfoSharingDirectives
	 * Meta informations extracted from the WSDL
	 * - documentation : Requests for specific buyer information like Billing Address to be returned through GetExpressCheckoutDetails should be specified under this.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructInfoSharingDirectivesType
	 */
	public $InfoSharingDirectives;
	/**
	 * The RetrieveShippingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require to retrieve the customer's shipping address on file with PayPal. Any value other than 1 indicates that no such requirement.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $RetrieveShippingAddress;
	/**
	 * The UserChannel
	 * Meta informations extracted from the WSDL
	 * - documentation : the value is required by ACS team to specify the channel which the partners are in. the channel will be used for risk assessment the value is defined in biz/User/value_object/Channel.oml Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumUserChannelCodeType
	 */
	public $UserChannel;
	/**
	 * The ReqConfirmShipping
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Any value other than 1 indicates that the customer's shipping address on file with PayPal need NOT be a confirmed address. Setting this element overrides the setting you have specified in the recipient's Merchant Account Profile. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReqConfirmShipping;
	/**
	 * The PaymentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payment.
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The ExternalPartnerTrackingDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : An optional set of values related to tracking for external partner.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructExternalPartnerTrackingDetailsType
	 */
	public $ExternalPartnerTrackingDetails;
	/**
	 * Constructor method for SetDataRequestType
	 * @see parent::__construct()
	 * @param PayPalStructBillingApprovalDetailsType $_billingApprovalDetails
	 * @param PayPalStructBuyerDetailType $_buyerDetail
	 * @param PayPalStructInfoSharingDirectivesType $_infoSharingDirectives
	 * @param boolean $_retrieveShippingAddress
	 * @param PayPalEnumUserChannelCodeType $_userChannel
	 * @param boolean $_reqConfirmShipping
	 * @param PayPalStructPaymentDetailsType $_paymentDetails
	 * @param PayPalStructExternalPartnerTrackingDetailsType $_externalPartnerTrackingDetails
	 * @return PayPalStructSetDataRequestType
	 */
	public function __construct($_billingApprovalDetails = NULL,$_buyerDetail = NULL,$_infoSharingDirectives = NULL,$_retrieveShippingAddress = NULL,$_userChannel = NULL,$_reqConfirmShipping = NULL,$_paymentDetails = NULL,$_externalPartnerTrackingDetails = NULL)
	{
		parent::__construct(array('BillingApprovalDetails'=>$_billingApprovalDetails,'BuyerDetail'=>$_buyerDetail,'InfoSharingDirectives'=>$_infoSharingDirectives,'RetrieveShippingAddress'=>$_retrieveShippingAddress,'UserChannel'=>$_userChannel,'ReqConfirmShipping'=>$_reqConfirmShipping,'PaymentDetails'=>$_paymentDetails,'ExternalPartnerTrackingDetails'=>$_externalPartnerTrackingDetails));
	}
	/**
	 * Get BillingApprovalDetails value
	 * @return PayPalStructBillingApprovalDetailsType|null
	 */
	public function getBillingApprovalDetails()
	{
		return $this->BillingApprovalDetails;
	}
	/**
	 * Set BillingApprovalDetails value
	 * @param PayPalStructBillingApprovalDetailsType $_billingApprovalDetails the BillingApprovalDetails
	 * @return PayPalStructBillingApprovalDetailsType
	 */
	public function setBillingApprovalDetails($_billingApprovalDetails)
	{
		return ($this->BillingApprovalDetails = $_billingApprovalDetails);
	}
	/**
	 * Get BuyerDetail value
	 * @return PayPalStructBuyerDetailType|null
	 */
	public function getBuyerDetail()
	{
		return $this->BuyerDetail;
	}
	/**
	 * Set BuyerDetail value
	 * @param PayPalStructBuyerDetailType $_buyerDetail the BuyerDetail
	 * @return PayPalStructBuyerDetailType
	 */
	public function setBuyerDetail($_buyerDetail)
	{
		return ($this->BuyerDetail = $_buyerDetail);
	}
	/**
	 * Get InfoSharingDirectives value
	 * @return PayPalStructInfoSharingDirectivesType|null
	 */
	public function getInfoSharingDirectives()
	{
		return $this->InfoSharingDirectives;
	}
	/**
	 * Set InfoSharingDirectives value
	 * @param PayPalStructInfoSharingDirectivesType $_infoSharingDirectives the InfoSharingDirectives
	 * @return PayPalStructInfoSharingDirectivesType
	 */
	public function setInfoSharingDirectives($_infoSharingDirectives)
	{
		return ($this->InfoSharingDirectives = $_infoSharingDirectives);
	}
	/**
	 * Get RetrieveShippingAddress value
	 * @return boolean|null
	 */
	public function getRetrieveShippingAddress()
	{
		return $this->RetrieveShippingAddress;
	}
	/**
	 * Set RetrieveShippingAddress value
	 * @param boolean $_retrieveShippingAddress the RetrieveShippingAddress
	 * @return boolean
	 */
	public function setRetrieveShippingAddress($_retrieveShippingAddress)
	{
		return ($this->RetrieveShippingAddress = $_retrieveShippingAddress);
	}
	/**
	 * Get UserChannel value
	 * @return PayPalEnumUserChannelCodeType|null
	 */
	public function getUserChannel()
	{
		return $this->UserChannel;
	}
	/**
	 * Set UserChannel value
	 * @uses PayPalEnumUserChannelCodeType::valueIsValid()
	 * @param PayPalEnumUserChannelCodeType $_userChannel the UserChannel
	 * @return PayPalEnumUserChannelCodeType
	 */
	public function setUserChannel($_userChannel)
	{
		if(!PayPalEnumUserChannelCodeType::valueIsValid($_userChannel))
		{
			return false;
		}
		return ($this->UserChannel = $_userChannel);
	}
	/**
	 * Get ReqConfirmShipping value
	 * @return boolean|null
	 */
	public function getReqConfirmShipping()
	{
		return $this->ReqConfirmShipping;
	}
	/**
	 * Set ReqConfirmShipping value
	 * @param boolean $_reqConfirmShipping the ReqConfirmShipping
	 * @return boolean
	 */
	public function setReqConfirmShipping($_reqConfirmShipping)
	{
		return ($this->ReqConfirmShipping = $_reqConfirmShipping);
	}
	/**
	 * Get PaymentDetails value
	 * @return PayPalStructPaymentDetailsType|null
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
	 * Get ExternalPartnerTrackingDetails value
	 * @return PayPalStructExternalPartnerTrackingDetailsType|null
	 */
	public function getExternalPartnerTrackingDetails()
	{
		return $this->ExternalPartnerTrackingDetails;
	}
	/**
	 * Set ExternalPartnerTrackingDetails value
	 * @param PayPalStructExternalPartnerTrackingDetailsType $_externalPartnerTrackingDetails the ExternalPartnerTrackingDetails
	 * @return PayPalStructExternalPartnerTrackingDetailsType
	 */
	public function setExternalPartnerTrackingDetails($_externalPartnerTrackingDetails)
	{
		return ($this->ExternalPartnerTrackingDetails = $_externalPartnerTrackingDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetDataRequestType
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