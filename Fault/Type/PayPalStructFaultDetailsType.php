<?php
/**
 * File for class PayPalStructFaultDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFaultDetailsType originally named FaultDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFaultDetailsType extends PayPalWsdlClass
{
	/**
	 * The ErrorCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Error code can be used by a receiving application to debugging a SOAP response message that contain one or more SOAP Fault detail objects, i.e., fault detail sub-elements. These codes will need to be uniquely defined for each fault scenario.
	 * @var string
	 */
	public $ErrorCode;
	/**
	 * The Severity
	 * Meta informations extracted from the WSDL
	 * - documentation : Severity indicates whether the error is a serious fault or if it is informational error, i.e., warning.
	 * @var string
	 */
	public $Severity;
	/**
	 * The DetailedMessage
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DetailedMessage;
	/**
	 * Constructor method for FaultDetailsType
	 * @see parent::__construct()
	 * @param string $_errorCode
	 * @param string $_severity
	 * @param string $_detailedMessage
	 * @return PayPalStructFaultDetailsType
	 */
	public function __construct($_errorCode = NULL,$_severity = NULL,$_detailedMessage = NULL)
	{
		parent::__construct(array('ErrorCode'=>$_errorCode,'Severity'=>$_severity,'DetailedMessage'=>$_detailedMessage));
	}
	/**
	 * Get ErrorCode value
	 * @return string|null
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ErrorCode value
	 * @param string $_errorCode the ErrorCode
	 * @return string
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->ErrorCode = $_errorCode);
	}
	/**
	 * Get Severity value
	 * @return string|null
	 */
	public function getSeverity()
	{
		return $this->Severity;
	}
	/**
	 * Set Severity value
	 * @param string $_severity the Severity
	 * @return string
	 */
	public function setSeverity($_severity)
	{
		return ($this->Severity = $_severity);
	}
	/**
	 * Get DetailedMessage value
	 * @return string|null
	 */
	public function getDetailedMessage()
	{
		return $this->DetailedMessage;
	}
	/**
	 * Set DetailedMessage value
	 * @param string $_detailedMessage the DetailedMessage
	 * @return string
	 */
	public function setDetailedMessage($_detailedMessage)
	{
		return ($this->DetailedMessage = $_detailedMessage);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFaultDetailsType
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