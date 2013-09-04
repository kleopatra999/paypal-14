<?php
/**
 * File for class PayPalStructExternalPartnerTrackingDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExternalPartnerTrackingDetailsType originally named ExternalPartnerTrackingDetailsType
 * Documentation : Contains elements that allow tracking for an external partner.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExternalPartnerTrackingDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalPartnerSegmentID
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal will just log this string. There will NOT be any business logic around it, nor any decisions made based on the value of the string that is passed in. From a tracking/analytical perspective, PayPal would not infer any meaning to any specific value. We would just segment the traffic based on the value passed (Cart and None as an example) and track different metrics like risk/conversion etc based on these segments. The external partner would control the value of what gets passed and we take that value as is and generate data based on it. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalPartnerSegmentID;
	/**
	 * Constructor method for ExternalPartnerTrackingDetailsType
	 * @see parent::__construct()
	 * @param string $_externalPartnerSegmentID
	 * @return PayPalStructExternalPartnerTrackingDetailsType
	 */
	public function __construct($_externalPartnerSegmentID = NULL)
	{
		parent::__construct(array('ExternalPartnerSegmentID'=>$_externalPartnerSegmentID));
	}
	/**
	 * Get ExternalPartnerSegmentID value
	 * @return string|null
	 */
	public function getExternalPartnerSegmentID()
	{
		return $this->ExternalPartnerSegmentID;
	}
	/**
	 * Set ExternalPartnerSegmentID value
	 * @param string $_externalPartnerSegmentID the ExternalPartnerSegmentID
	 * @return string
	 */
	public function setExternalPartnerSegmentID($_externalPartnerSegmentID)
	{
		return ($this->ExternalPartnerSegmentID = $_externalPartnerSegmentID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExternalPartnerTrackingDetailsType
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