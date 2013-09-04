<?php
/**
 * File for class PayPalStructAbstractRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAbstractRequestType originally named AbstractRequestType
 * Documentation : Base type definition of request payload that can carry any type of payload content with optional versioning information and detail level requirements.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAbstractRequestType extends PayPalWsdlClass
{
	/**
	 * The DetailLevel
	 * Meta informations extracted from the WSDL
	 * - documentation : This specifies the required detail level that is needed by a client application pertaining to a particular data component (e.g., Item, Transaction, etc.). The detail level is specified in the DetailLevelCodeType which has all the enumerated values of the detail level for each component.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalEnumDetailLevelCodeType
	 */
	public $DetailLevel;
	/**
	 * The ErrorLanguage
	 * Meta informations extracted from the WSDL
	 * - documentation : This should be the standard RFC 3066 language identification tag, e.g., en_US.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ErrorLanguage;
	/**
	 * The Version
	 * Meta informations extracted from the WSDL
	 * - documentation : This refers to the version of the request payload schema.
	 * @var string
	 */
	public $Version;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for AbstractRequestType
	 * @see parent::__construct()
	 * @param PayPalEnumDetailLevelCodeType $_detailLevel
	 * @param string $_errorLanguage
	 * @param string $_version
	 * @param DOMDocument $_any
	 * @return PayPalStructAbstractRequestType
	 */
	public function __construct($_detailLevel = NULL,$_errorLanguage = NULL,$_version = NULL,$_any = NULL)
	{
		parent::__construct(array('DetailLevel'=>$_detailLevel,'ErrorLanguage'=>$_errorLanguage,'Version'=>$_version,'any'=>$_any));
	}
	/**
	 * Get DetailLevel value
	 * @return PayPalEnumDetailLevelCodeType|null
	 */
	public function getDetailLevel()
	{
		return $this->DetailLevel;
	}
	/**
	 * Set DetailLevel value
	 * @uses PayPalEnumDetailLevelCodeType::valueIsValid()
	 * @param PayPalEnumDetailLevelCodeType $_detailLevel the DetailLevel
	 * @return PayPalEnumDetailLevelCodeType
	 */
	public function setDetailLevel($_detailLevel)
	{
		if(!PayPalEnumDetailLevelCodeType::valueIsValid($_detailLevel))
		{
			return false;
		}
		return ($this->DetailLevel = $_detailLevel);
	}
	/**
	 * Get ErrorLanguage value
	 * @return string|null
	 */
	public function getErrorLanguage()
	{
		return $this->ErrorLanguage;
	}
	/**
	 * Set ErrorLanguage value
	 * @param string $_errorLanguage the ErrorLanguage
	 * @return string
	 */
	public function setErrorLanguage($_errorLanguage)
	{
		return ($this->ErrorLanguage = $_errorLanguage);
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
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses PayPalStructAbstractRequestType::setAny()
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
	 * @return PayPalStructAbstractRequestType
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