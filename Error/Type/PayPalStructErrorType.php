<?php
/**
 * File for class PayPalStructErrorType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructErrorType originally named ErrorType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructErrorType extends PayPalWsdlClass
{
	/**
	 * The ShortMessage
	 * @var string
	 */
	public $ShortMessage;
	/**
	 * The LongMessage
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $LongMessage;
	/**
	 * The ErrorCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Error code can be used by a receiving application to debugging a response message. These codes will need to be uniquely defined for each application.
	 * @var token
	 */
	public $ErrorCode;
	/**
	 * The SeverityCode
	 * Meta informations extracted from the WSDL
	 * - documentation : SeverityCode indicates whether the error is an application level error or if it is informational error, i.e., warning.
	 * @var PayPalEnumSeverityCodeType
	 */
	public $SeverityCode;
	/**
	 * The ErrorParameters
	 * Meta informations extracted from the WSDL
	 * - documentation : This optional element may carry additional application-specific error variables that indicate specific information about the error condition particularly in the cases where there are multiple instances of the ErrorType which require additional context.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructErrorParameterType
	 */
	public $ErrorParameters;
	/**
	 * Constructor method for ErrorType
	 * @see parent::__construct()
	 * @param string $_shortMessage
	 * @param string $_longMessage
	 * @param token $_errorCode
	 * @param PayPalEnumSeverityCodeType $_severityCode
	 * @param PayPalStructErrorParameterType $_errorParameters
	 * @return PayPalStructErrorType
	 */
	public function __construct($_shortMessage = NULL,$_longMessage = NULL,$_errorCode = NULL,$_severityCode = NULL,$_errorParameters = NULL)
	{
		parent::__construct(array('ShortMessage'=>$_shortMessage,'LongMessage'=>$_longMessage,'ErrorCode'=>$_errorCode,'SeverityCode'=>$_severityCode,'ErrorParameters'=>$_errorParameters));
	}
	/**
	 * Get ShortMessage value
	 * @return string|null
	 */
	public function getShortMessage()
	{
		return $this->ShortMessage;
	}
	/**
	 * Set ShortMessage value
	 * @param string $_shortMessage the ShortMessage
	 * @return string
	 */
	public function setShortMessage($_shortMessage)
	{
		return ($this->ShortMessage = $_shortMessage);
	}
	/**
	 * Get LongMessage value
	 * @return string|null
	 */
	public function getLongMessage()
	{
		return $this->LongMessage;
	}
	/**
	 * Set LongMessage value
	 * @param string $_longMessage the LongMessage
	 * @return string
	 */
	public function setLongMessage($_longMessage)
	{
		return ($this->LongMessage = $_longMessage);
	}
	/**
	 * Get ErrorCode value
	 * @return token|null
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ErrorCode value
	 * @param token $_errorCode the ErrorCode
	 * @return token
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->ErrorCode = $_errorCode);
	}
	/**
	 * Get SeverityCode value
	 * @return PayPalEnumSeverityCodeType|null
	 */
	public function getSeverityCode()
	{
		return $this->SeverityCode;
	}
	/**
	 * Set SeverityCode value
	 * @uses PayPalEnumSeverityCodeType::valueIsValid()
	 * @param PayPalEnumSeverityCodeType $_severityCode the SeverityCode
	 * @return PayPalEnumSeverityCodeType
	 */
	public function setSeverityCode($_severityCode)
	{
		if(!PayPalEnumSeverityCodeType::valueIsValid($_severityCode))
		{
			return false;
		}
		return ($this->SeverityCode = $_severityCode);
	}
	/**
	 * Get ErrorParameters value
	 * @return PayPalStructErrorParameterType|null
	 */
	public function getErrorParameters()
	{
		return $this->ErrorParameters;
	}
	/**
	 * Set ErrorParameters value
	 * @param PayPalStructErrorParameterType $_errorParameters the ErrorParameters
	 * @return PayPalStructErrorParameterType
	 */
	public function setErrorParameters($_errorParameters)
	{
		return ($this->ErrorParameters = $_errorParameters);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructErrorType
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