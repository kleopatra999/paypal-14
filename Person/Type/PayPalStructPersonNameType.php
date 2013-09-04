<?php
/**
 * File for class PayPalStructPersonNameType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPersonNameType originally named PersonNameType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPersonNameType extends PayPalWsdlClass
{
	/**
	 * The Salutation
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * - maxLength : 20
	 * @var string
	 */
	public $Salutation;
	/**
	 * The FirstName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * - maxLength : 25
	 * @var string
	 */
	public $FirstName;
	/**
	 * The MiddleName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * - maxLength : 25
	 * @var string
	 */
	public $MiddleName;
	/**
	 * The LastName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * - maxLength : 25
	 * @var string
	 */
	public $LastName;
	/**
	 * The Suffix
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * - maxLength : 12
	 * @var string
	 */
	public $Suffix;
	/**
	 * Constructor method for PersonNameType
	 * @see parent::__construct()
	 * @param string $_salutation
	 * @param string $_firstName
	 * @param string $_middleName
	 * @param string $_lastName
	 * @param string $_suffix
	 * @return PayPalStructPersonNameType
	 */
	public function __construct($_salutation = NULL,$_firstName = NULL,$_middleName = NULL,$_lastName = NULL,$_suffix = NULL)
	{
		parent::__construct(array('Salutation'=>$_salutation,'FirstName'=>$_firstName,'MiddleName'=>$_middleName,'LastName'=>$_lastName,'Suffix'=>$_suffix));
	}
	/**
	 * Get Salutation value
	 * @return string|null
	 */
	public function getSalutation()
	{
		return $this->Salutation;
	}
	/**
	 * Set Salutation value
	 * @param string $_salutation the Salutation
	 * @return string
	 */
	public function setSalutation($_salutation)
	{
		return ($this->Salutation = $_salutation);
	}
	/**
	 * Get FirstName value
	 * @return string|null
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set FirstName value
	 * @param string $_firstName the FirstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->FirstName = $_firstName);
	}
	/**
	 * Get MiddleName value
	 * @return string|null
	 */
	public function getMiddleName()
	{
		return $this->MiddleName;
	}
	/**
	 * Set MiddleName value
	 * @param string $_middleName the MiddleName
	 * @return string
	 */
	public function setMiddleName($_middleName)
	{
		return ($this->MiddleName = $_middleName);
	}
	/**
	 * Get LastName value
	 * @return string|null
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set LastName value
	 * @param string $_lastName the LastName
	 * @return string
	 */
	public function setLastName($_lastName)
	{
		return ($this->LastName = $_lastName);
	}
	/**
	 * Get Suffix value
	 * @return string|null
	 */
	public function getSuffix()
	{
		return $this->Suffix;
	}
	/**
	 * Set Suffix value
	 * @param string $_suffix the Suffix
	 * @return string
	 */
	public function setSuffix($_suffix)
	{
		return ($this->Suffix = $_suffix);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPersonNameType
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