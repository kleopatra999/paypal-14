<?php
/**
 * File for class PayPalStructDoCaptureRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoCaptureRequestType originally named DoCaptureRequestType
 * Documentation : Contains enhanced data like airline itinerary information. Not Required To pass the Merchant store informationOptional This holds key-value pair which merchants wants to pass it to the open wallet-PLCC processorOptional
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoCaptureRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The AuthorizationID
	 * Meta informations extracted from the WSDL
	 * - documentation : The authorization identification number of the payment you want to capture. Required Character length and limits: 19 single-byte characters maximum
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * - documentation : AuthorizationId - Type for a PayPal Authorization ID.
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount to authorize. You must set the currencyID attribute to USD. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,)
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The CompleteType
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates if this capture is the last capture you intend to make. The default is Complete. If CompleteType is Complete, any remaining amount of the original reauthorized transaction is automatically voided. Required Character length and limits: 12 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalEnumCompleteCodeType
	 */
	public $CompleteType;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - documentation : An informational note about this settlement that is displayed to the payer in email and in transaction history. Optional Character length and limits: 255 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Your invoice number or other identification number. The InvoiceID value is recorded only if the authorization you are capturing is an order authorization, not a basic authorization. Optional Character length and limits: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The EnhancedData
	 * @var PayPalStructEnhancedDataType
	 */
	public $EnhancedData;
	/**
	 * The Descriptor
	 * Meta informations extracted from the WSDL
	 * - documentation : dynamic descriptor Dynamic descriptor is used for merchant to provide detail of a transaction appears on statement Optional Character length and limits: <18 characters alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Descriptor;
	/**
	 * The MerchantStoreDetails
	 * @var PayPalStructMerchantStoreDetailsType
	 */
	public $MerchantStoreDetails;
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
	 * The MerchantData
	 * @var PayPalStructMerchantDataType
	 */
	public $MerchantData;
	/**
	 * Constructor method for DoCaptureRequestType
	 * @see parent::__construct()
	 * @param string $_authorizationID
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalEnumCompleteCodeType $_completeType
	 * @param string $_note
	 * @param string $_invoiceID
	 * @param PayPalStructEnhancedDataType $_enhancedData
	 * @param string $_descriptor
	 * @param PayPalStructMerchantStoreDetailsType $_merchantStoreDetails
	 * @param string $_msgSubID
	 * @param PayPalStructMerchantDataType $_merchantData
	 * @return PayPalStructDoCaptureRequestType
	 */
	public function __construct($_authorizationID,$_amount,$_completeType,$_note = NULL,$_invoiceID = NULL,$_enhancedData = NULL,$_descriptor = NULL,$_merchantStoreDetails = NULL,$_msgSubID = NULL,$_merchantData = NULL)
	{
		PayPalWsdlClass::__construct(array('AuthorizationID'=>$_authorizationID,'Amount'=>$_amount,'CompleteType'=>$_completeType,'Note'=>$_note,'InvoiceID'=>$_invoiceID,'EnhancedData'=>$_enhancedData,'Descriptor'=>$_descriptor,'MerchantStoreDetails'=>$_merchantStoreDetails,'MsgSubID'=>$_msgSubID,'MerchantData'=>$_merchantData));
	}
	/**
	 * Get AuthorizationID value
	 * @return string
	 */
	public function getAuthorizationID()
	{
		return $this->AuthorizationID;
	}
	/**
	 * Set AuthorizationID value
	 * @param string $_authorizationID the AuthorizationID
	 * @return string
	 */
	public function setAuthorizationID($_authorizationID)
	{
		return ($this->AuthorizationID = $_authorizationID);
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Get CompleteType value
	 * @return PayPalEnumCompleteCodeType
	 */
	public function getCompleteType()
	{
		return $this->CompleteType;
	}
	/**
	 * Set CompleteType value
	 * @uses PayPalEnumCompleteCodeType::valueIsValid()
	 * @param PayPalEnumCompleteCodeType $_completeType the CompleteType
	 * @return PayPalEnumCompleteCodeType
	 */
	public function setCompleteType($_completeType)
	{
		if(!PayPalEnumCompleteCodeType::valueIsValid($_completeType))
		{
			return false;
		}
		return ($this->CompleteType = $_completeType);
	}
	/**
	 * Get Note value
	 * @return string|null
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Note value
	 * @param string $_note the Note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->Note = $_note);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
	}
	/**
	 * Get EnhancedData value
	 * @return PayPalStructEnhancedDataType|null
	 */
	public function getEnhancedData()
	{
		return $this->EnhancedData;
	}
	/**
	 * Set EnhancedData value
	 * @param PayPalStructEnhancedDataType $_enhancedData the EnhancedData
	 * @return PayPalStructEnhancedDataType
	 */
	public function setEnhancedData($_enhancedData)
	{
		return ($this->EnhancedData = $_enhancedData);
	}
	/**
	 * Get Descriptor value
	 * @return string|null
	 */
	public function getDescriptor()
	{
		return $this->Descriptor;
	}
	/**
	 * Set Descriptor value
	 * @param string $_descriptor the Descriptor
	 * @return string
	 */
	public function setDescriptor($_descriptor)
	{
		return ($this->Descriptor = $_descriptor);
	}
	/**
	 * Get MerchantStoreDetails value
	 * @return PayPalStructMerchantStoreDetailsType|null
	 */
	public function getMerchantStoreDetails()
	{
		return $this->MerchantStoreDetails;
	}
	/**
	 * Set MerchantStoreDetails value
	 * @param PayPalStructMerchantStoreDetailsType $_merchantStoreDetails the MerchantStoreDetails
	 * @return PayPalStructMerchantStoreDetailsType
	 */
	public function setMerchantStoreDetails($_merchantStoreDetails)
	{
		return ($this->MerchantStoreDetails = $_merchantStoreDetails);
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
	 * Get MerchantData value
	 * @return PayPalStructMerchantDataType|null
	 */
	public function getMerchantData()
	{
		return $this->MerchantData;
	}
	/**
	 * Set MerchantData value
	 * @param PayPalStructMerchantDataType $_merchantData the MerchantData
	 * @return PayPalStructMerchantDataType
	 */
	public function setMerchantData($_merchantData)
	{
		return ($this->MerchantData = $_merchantData);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoCaptureRequestType
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