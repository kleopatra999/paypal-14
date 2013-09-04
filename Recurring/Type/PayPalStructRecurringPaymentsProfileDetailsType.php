<?php
/**
 * File for class PayPalStructRecurringPaymentsProfileDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructRecurringPaymentsProfileDetailsType originally named RecurringPaymentsProfileDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructRecurringPaymentsProfileDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingStartDate
	 * Meta informations extracted from the WSDL
	 * - documentation : When does this Profile begin billing?
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $BillingStartDate;
	/**
	 * The SubscriberName
	 * Meta informations extracted from the WSDL
	 * - documentation : Subscriber name - if missing, will use name in buyer's account
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SubscriberName;
	/**
	 * The SubscriberShippingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Subscriber address - if missing, will use address in buyer's account
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $SubscriberShippingAddress;
	/**
	 * The ProfileReference
	 * Meta informations extracted from the WSDL
	 * - documentation : Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProfileReference;
	/**
	 * Constructor method for RecurringPaymentsProfileDetailsType
	 * @see parent::__construct()
	 * @param dateTime $_billingStartDate
	 * @param string $_subscriberName
	 * @param PayPalStructAddressType $_subscriberShippingAddress
	 * @param string $_profileReference
	 * @return PayPalStructRecurringPaymentsProfileDetailsType
	 */
	public function __construct($_billingStartDate,$_subscriberName = NULL,$_subscriberShippingAddress = NULL,$_profileReference = NULL)
	{
		parent::__construct(array('BillingStartDate'=>$_billingStartDate,'SubscriberName'=>$_subscriberName,'SubscriberShippingAddress'=>$_subscriberShippingAddress,'ProfileReference'=>$_profileReference));
	}
	/**
	 * Get BillingStartDate value
	 * @return dateTime
	 */
	public function getBillingStartDate()
	{
		return $this->BillingStartDate;
	}
	/**
	 * Set BillingStartDate value
	 * @param dateTime $_billingStartDate the BillingStartDate
	 * @return dateTime
	 */
	public function setBillingStartDate($_billingStartDate)
	{
		return ($this->BillingStartDate = $_billingStartDate);
	}
	/**
	 * Get SubscriberName value
	 * @return string|null
	 */
	public function getSubscriberName()
	{
		return $this->SubscriberName;
	}
	/**
	 * Set SubscriberName value
	 * @param string $_subscriberName the SubscriberName
	 * @return string
	 */
	public function setSubscriberName($_subscriberName)
	{
		return ($this->SubscriberName = $_subscriberName);
	}
	/**
	 * Get SubscriberShippingAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getSubscriberShippingAddress()
	{
		return $this->SubscriberShippingAddress;
	}
	/**
	 * Set SubscriberShippingAddress value
	 * @param PayPalStructAddressType $_subscriberShippingAddress the SubscriberShippingAddress
	 * @return PayPalStructAddressType
	 */
	public function setSubscriberShippingAddress($_subscriberShippingAddress)
	{
		return ($this->SubscriberShippingAddress = $_subscriberShippingAddress);
	}
	/**
	 * Get ProfileReference value
	 * @return string|null
	 */
	public function getProfileReference()
	{
		return $this->ProfileReference;
	}
	/**
	 * Set ProfileReference value
	 * @param string $_profileReference the ProfileReference
	 * @return string
	 */
	public function setProfileReference($_profileReference)
	{
		return ($this->ProfileReference = $_profileReference);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructRecurringPaymentsProfileDetailsType
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