<?php
/**
 * File for class PayPalStructAbstractResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAbstractResponseType originally named AbstractResponseType
 * Documentation : Base type definition of a response payload that can carry any type of payload content with following optional elements: - timestamp of response message, - application level acknowledgement, and - application-level errors and warnings.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAbstractResponseType extends PayPalWsdlClass
{
	/**
	 * The Timestamp
	 * Meta informations extracted from the WSDL
	 * - documentation : This value represents the date and time (GMT) when the response was generated by a service provider (as a result of processing of a request).
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Ack
	 * Meta informations extracted from the WSDL
	 * - documentation : Application level acknowledgement code.
	 * @var PayPalEnumAckCodeType
	 */
	public $Ack;
	/**
	 * The CorrelationID
	 * Meta informations extracted from the WSDL
	 * - documentation : CorrelationID may be used optionally with an application level acknowledgement.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The Errors
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructErrorType
	 */
	public $Errors;
	/**
	 * The Version
	 * Meta informations extracted from the WSDL
	 * - documentation : This refers to the version of the response payload schema.
	 * @var string
	 */
	public $Version;
	/**
	 * The Build
	 * Meta informations extracted from the WSDL
	 * - documentation : This refers to the specific software build that was used in the deployment for processing the request and generating the response.
	 * @var string
	 */
	public $Build;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for AbstractResponseType
	 * @see parent::__construct()
	 * @param dateTime $_timestamp
	 * @param PayPalEnumAckCodeType $_ack
	 * @param string $_correlationID
	 * @param PayPalStructErrorType $_errors
	 * @param string $_version
	 * @param string $_build
	 * @param DOMDocument $_any
	 * @return PayPalStructAbstractResponseType
	 */
	public function __construct($_timestamp = NULL,$_ack = NULL,$_correlationID = NULL,$_errors = NULL,$_version = NULL,$_build = NULL,$_any = NULL)
	{
		parent::__construct(array('Timestamp'=>$_timestamp,'Ack'=>$_ack,'CorrelationID'=>$_correlationID,'Errors'=>$_errors,'Version'=>$_version,'Build'=>$_build,'any'=>$_any));
	}
	/**
	 * Get Timestamp value
	 * @return dateTime|null
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Timestamp value
	 * @param dateTime $_timestamp the Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->Timestamp = $_timestamp);
	}
	/**
	 * Get Ack value
	 * @return PayPalEnumAckCodeType|null
	 */
	public function getAck()
	{
		return $this->Ack;
	}
	/**
	 * Set Ack value
	 * @uses PayPalEnumAckCodeType::valueIsValid()
	 * @param PayPalEnumAckCodeType $_ack the Ack
	 * @return PayPalEnumAckCodeType
	 */
	public function setAck($_ack)
	{
		if(!PayPalEnumAckCodeType::valueIsValid($_ack))
		{
			return false;
		}
		return ($this->Ack = $_ack);
	}
	/**
	 * Get CorrelationID value
	 * @return string|null
	 */
	public function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * Set CorrelationID value
	 * @param string $_correlationID the CorrelationID
	 * @return string
	 */
	public function setCorrelationID($_correlationID)
	{
		return ($this->CorrelationID = $_correlationID);
	}
	/**
	 * Get Errors value
	 * @return PayPalStructErrorType|null
	 */
	public function getErrors()
	{
		return $this->Errors;
	}
	/**
	 * Set Errors value
	 * @param PayPalStructErrorType $_errors the Errors
	 * @return PayPalStructErrorType
	 */
	public function setErrors($_errors)
	{
		return ($this->Errors = $_errors);
	}
	/**
	 * Get Version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Version value
	 * @param string $_version the Version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->Version = $_version);
	}
	/**
	 * Get Build value
	 * @return string|null
	 */
	public function getBuild()
	{
		return $this->Build;
	}
	/**
	 * Set Build value
	 * @param string $_build the Build
	 * @return string
	 */
	public function setBuild($_build)
	{
		return ($this->Build = $_build);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses PayPalStructAbstractResponseType::setAny()
	 * @param bool true or false whether to return XML value as string or as DOMDocument
	 * @return DOMDocument|null
	 */
	public function getAny($_asString = true)
	{
		if(!empty($this->any) && !($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			if($dom->loadXML($this->any))
			{
				$this->setAny($dom);
			}
			unset($dom);
		}
		return ($_asString && ($this->any instanceof DOMDocument) && $this->any->hasChildNodes())?$this->any->saveXML($this->any->childNodes->item(0)):$this->any;
	}
	/**
	 * Set any value
	 * @param DOMDocument $_any the any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAbstractResponseType
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