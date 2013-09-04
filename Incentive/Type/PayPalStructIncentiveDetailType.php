<?php
/**
 * File for class PayPalStructIncentiveDetailType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveDetailType originally named IncentiveDetailType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveDetailType extends PayPalWsdlClass
{
	/**
	 * The RedemptionCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $RedemptionCode;
	/**
	 * The DisplayCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DisplayCode;
	/**
	 * The ProgramId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ProgramId;
	/**
	 * The IncentiveType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumIncentiveTypeCodeType
	 */
	public $IncentiveType;
	/**
	 * The IncentiveDescription
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncentiveDescription;
	/**
	 * The AppliedTo
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveAppliedToType
	 */
	public $AppliedTo;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Status;
	/**
	 * The ErrorCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ErrorCode;
	/**
	 * Constructor method for IncentiveDetailType
	 * @see parent::__construct()
	 * @param string $_redemptionCode
	 * @param string $_displayCode
	 * @param string $_programId
	 * @param PayPalEnumIncentiveTypeCodeType $_incentiveType
	 * @param string $_incentiveDescription
	 * @param PayPalStructIncentiveAppliedToType $_appliedTo
	 * @param string $_status
	 * @param string $_errorCode
	 * @return PayPalStructIncentiveDetailType
	 */
	public function __construct($_redemptionCode = NULL,$_displayCode = NULL,$_programId = NULL,$_incentiveType = NULL,$_incentiveDescription = NULL,$_appliedTo = NULL,$_status = NULL,$_errorCode = NULL)
	{
		parent::__construct(array('RedemptionCode'=>$_redemptionCode,'DisplayCode'=>$_displayCode,'ProgramId'=>$_programId,'IncentiveType'=>$_incentiveType,'IncentiveDescription'=>$_incentiveDescription,'AppliedTo'=>$_appliedTo,'Status'=>$_status,'ErrorCode'=>$_errorCode));
	}
	/**
	 * Get RedemptionCode value
	 * @return string|null
	 */
	public function getRedemptionCode()
	{
		return $this->RedemptionCode;
	}
	/**
	 * Set RedemptionCode value
	 * @param string $_redemptionCode the RedemptionCode
	 * @return string
	 */
	public function setRedemptionCode($_redemptionCode)
	{
		return ($this->RedemptionCode = $_redemptionCode);
	}
	/**
	 * Get DisplayCode value
	 * @return string|null
	 */
	public function getDisplayCode()
	{
		return $this->DisplayCode;
	}
	/**
	 * Set DisplayCode value
	 * @param string $_displayCode the DisplayCode
	 * @return string
	 */
	public function setDisplayCode($_displayCode)
	{
		return ($this->DisplayCode = $_displayCode);
	}
	/**
	 * Get ProgramId value
	 * @return string|null
	 */
	public function getProgramId()
	{
		return $this->ProgramId;
	}
	/**
	 * Set ProgramId value
	 * @param string $_programId the ProgramId
	 * @return string
	 */
	public function setProgramId($_programId)
	{
		return ($this->ProgramId = $_programId);
	}
	/**
	 * Get IncentiveType value
	 * @return PayPalEnumIncentiveTypeCodeType|null
	 */
	public function getIncentiveType()
	{
		return $this->IncentiveType;
	}
	/**
	 * Set IncentiveType value
	 * @uses PayPalEnumIncentiveTypeCodeType::valueIsValid()
	 * @param PayPalEnumIncentiveTypeCodeType $_incentiveType the IncentiveType
	 * @return PayPalEnumIncentiveTypeCodeType
	 */
	public function setIncentiveType($_incentiveType)
	{
		if(!PayPalEnumIncentiveTypeCodeType::valueIsValid($_incentiveType))
		{
			return false;
		}
		return ($this->IncentiveType = $_incentiveType);
	}
	/**
	 * Get IncentiveDescription value
	 * @return string|null
	 */
	public function getIncentiveDescription()
	{
		return $this->IncentiveDescription;
	}
	/**
	 * Set IncentiveDescription value
	 * @param string $_incentiveDescription the IncentiveDescription
	 * @return string
	 */
	public function setIncentiveDescription($_incentiveDescription)
	{
		return ($this->IncentiveDescription = $_incentiveDescription);
	}
	/**
	 * Get AppliedTo value
	 * @return PayPalStructIncentiveAppliedToType|null
	 */
	public function getAppliedTo()
	{
		return $this->AppliedTo;
	}
	/**
	 * Set AppliedTo value
	 * @param PayPalStructIncentiveAppliedToType $_appliedTo the AppliedTo
	 * @return PayPalStructIncentiveAppliedToType
	 */
	public function setAppliedTo($_appliedTo)
	{
		return ($this->AppliedTo = $_appliedTo);
	}
	/**
	 * Get Status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @param string $_status the Status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->Status = $_status);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveDetailType
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