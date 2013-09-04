<?php
/**
 * File for class PayPalStructCreateRecurringPaymentsProfileResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateRecurringPaymentsProfileResponseDetailsType originally named CreateRecurringPaymentsProfileResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateRecurringPaymentsProfileResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations extracted from the WSDL
	 * - documentation : Recurring Billing Profile ID
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The ProfileStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Recurring Billing Profile Status
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumRecurringPaymentsProfileStatusType
	 */
	public $ProfileStatus;
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Transaction id from DCC initial payment
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The DCCProcessorResponse
	 * Meta informations extracted from the WSDL
	 * - documentation : Response from DCC initial payment
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $DCCProcessorResponse;
	/**
	 * The DCCReturnCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Return code if DCC initial payment fails
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $DCCReturnCode;
	/**
	 * Constructor method for CreateRecurringPaymentsProfileResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_profileID
	 * @param PayPalEnumRecurringPaymentsProfileStatusType $_profileStatus
	 * @param string $_transactionID
	 * @param string $_dCCProcessorResponse
	 * @param string $_dCCReturnCode
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseDetailsType
	 */
	public function __construct($_profileID,$_profileStatus = NULL,$_transactionID = NULL,$_dCCProcessorResponse = NULL,$_dCCReturnCode = NULL)
	{
		parent::__construct(array('ProfileID'=>$_profileID,'ProfileStatus'=>$_profileStatus,'TransactionID'=>$_transactionID,'DCCProcessorResponse'=>$_dCCProcessorResponse,'DCCReturnCode'=>$_dCCReturnCode));
	}
	/**
	 * Get ProfileID value
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileID value
	 * @param string $_profileID the ProfileID
	 * @return string
	 */
	public function setProfileID($_profileID)
	{
		return ($this->ProfileID = $_profileID);
	}
	/**
	 * Get ProfileStatus value
	 * @return PayPalEnumRecurringPaymentsProfileStatusType|null
	 */
	public function getProfileStatus()
	{
		return $this->ProfileStatus;
	}
	/**
	 * Set ProfileStatus value
	 * @uses PayPalEnumRecurringPaymentsProfileStatusType::valueIsValid()
	 * @param PayPalEnumRecurringPaymentsProfileStatusType $_profileStatus the ProfileStatus
	 * @return PayPalEnumRecurringPaymentsProfileStatusType
	 */
	public function setProfileStatus($_profileStatus)
	{
		if(!PayPalEnumRecurringPaymentsProfileStatusType::valueIsValid($_profileStatus))
		{
			return false;
		}
		return ($this->ProfileStatus = $_profileStatus);
	}
	/**
	 * Get TransactionID value
	 * @return string|null
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionID value
	 * @param string $_transactionID the TransactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->TransactionID = $_transactionID);
	}
	/**
	 * Get DCCProcessorResponse value
	 * @return string|null
	 */
	public function getDCCProcessorResponse()
	{
		return $this->DCCProcessorResponse;
	}
	/**
	 * Set DCCProcessorResponse value
	 * @param string $_dCCProcessorResponse the DCCProcessorResponse
	 * @return string
	 */
	public function setDCCProcessorResponse($_dCCProcessorResponse)
	{
		return ($this->DCCProcessorResponse = $_dCCProcessorResponse);
	}
	/**
	 * Get DCCReturnCode value
	 * @return string|null
	 */
	public function getDCCReturnCode()
	{
		return $this->DCCReturnCode;
	}
	/**
	 * Set DCCReturnCode value
	 * @param string $_dCCReturnCode the DCCReturnCode
	 * @return string
	 */
	public function setDCCReturnCode($_dCCReturnCode)
	{
		return ($this->DCCReturnCode = $_dCCReturnCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateRecurringPaymentsProfileResponseDetailsType
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