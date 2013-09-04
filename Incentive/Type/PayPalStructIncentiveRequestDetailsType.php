<?php
/**
 * File for class PayPalStructIncentiveRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveRequestDetailsType originally named IncentiveRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The RequestId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $RequestId;
	/**
	 * The RequestType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumIncentiveRequestCodeType
	 */
	public $RequestType;
	/**
	 * The RequestDetailLevel
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumIncentiveRequestDetailLevelCodeType
	 */
	public $RequestDetailLevel;
	/**
	 * Constructor method for IncentiveRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_requestId
	 * @param PayPalEnumIncentiveRequestCodeType $_requestType
	 * @param PayPalEnumIncentiveRequestDetailLevelCodeType $_requestDetailLevel
	 * @return PayPalStructIncentiveRequestDetailsType
	 */
	public function __construct($_requestId = NULL,$_requestType = NULL,$_requestDetailLevel = NULL)
	{
		parent::__construct(array('RequestId'=>$_requestId,'RequestType'=>$_requestType,'RequestDetailLevel'=>$_requestDetailLevel));
	}
	/**
	 * Get RequestId value
	 * @return string|null
	 */
	public function getRequestId()
	{
		return $this->RequestId;
	}
	/**
	 * Set RequestId value
	 * @param string $_requestId the RequestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->RequestId = $_requestId);
	}
	/**
	 * Get RequestType value
	 * @return PayPalEnumIncentiveRequestCodeType|null
	 */
	public function getRequestType()
	{
		return $this->RequestType;
	}
	/**
	 * Set RequestType value
	 * @uses PayPalEnumIncentiveRequestCodeType::valueIsValid()
	 * @param PayPalEnumIncentiveRequestCodeType $_requestType the RequestType
	 * @return PayPalEnumIncentiveRequestCodeType
	 */
	public function setRequestType($_requestType)
	{
		if(!PayPalEnumIncentiveRequestCodeType::valueIsValid($_requestType))
		{
			return false;
		}
		return ($this->RequestType = $_requestType);
	}
	/**
	 * Get RequestDetailLevel value
	 * @return PayPalEnumIncentiveRequestDetailLevelCodeType|null
	 */
	public function getRequestDetailLevel()
	{
		return $this->RequestDetailLevel;
	}
	/**
	 * Set RequestDetailLevel value
	 * @uses PayPalEnumIncentiveRequestDetailLevelCodeType::valueIsValid()
	 * @param PayPalEnumIncentiveRequestDetailLevelCodeType $_requestDetailLevel the RequestDetailLevel
	 * @return PayPalEnumIncentiveRequestDetailLevelCodeType
	 */
	public function setRequestDetailLevel($_requestDetailLevel)
	{
		if(!PayPalEnumIncentiveRequestDetailLevelCodeType::valueIsValid($_requestDetailLevel))
		{
			return false;
		}
		return ($this->RequestDetailLevel = $_requestDetailLevel);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveRequestDetailsType
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