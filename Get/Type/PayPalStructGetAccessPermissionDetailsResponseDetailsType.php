<?php
/**
 * File for class PayPalStructGetAccessPermissionDetailsResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetAccessPermissionDetailsResponseDetailsType originally named GetAccessPermissionDetailsResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetAccessPermissionDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The FirstName
	 * Meta informations extracted from the WSDL
	 * - documentation : The first name of the User. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations extracted from the WSDL
	 * - documentation : The Last name of the user. Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $LastName;
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - documentation : The email address of the user. Character length and limitations: 256 single-byte alphanumeric characters.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Email;
	/**
	 * The AccessPermissionName
	 * Meta informations extracted from the WSDL
	 * - documentation : contains information about API Services
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $AccessPermissionName;
	/**
	 * The AccessPermissionStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : contains information about API Services
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $AccessPermissionStatus;
	/**
	 * The PayerID
	 * Meta informations extracted from the WSDL
	 * - documentation : Encrypted PayPal customer account identification number. Required Character length and limitations: 127 single-byte characters.
	 * - maxLength : 127
	 * @var string
	 */
	public $PayerID;
	/**
	 * Constructor method for GetAccessPermissionDetailsResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_firstName
	 * @param string $_lastName
	 * @param string $_email
	 * @param string $_accessPermissionName
	 * @param string $_accessPermissionStatus
	 * @param string $_payerID
	 * @return PayPalStructGetAccessPermissionDetailsResponseDetailsType
	 */
	public function __construct($_firstName = NULL,$_lastName = NULL,$_email = NULL,$_accessPermissionName = NULL,$_accessPermissionStatus = NULL,$_payerID = NULL)
	{
		parent::__construct(array('FirstName'=>$_firstName,'LastName'=>$_lastName,'Email'=>$_email,'AccessPermissionName'=>$_accessPermissionName,'AccessPermissionStatus'=>$_accessPermissionStatus,'PayerID'=>$_payerID));
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
	 * Get Email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Email value
	 * @param string $_email the Email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->Email = $_email);
	}
	/**
	 * Get AccessPermissionName value
	 * @return string|null
	 */
	public function getAccessPermissionName()
	{
		return $this->AccessPermissionName;
	}
	/**
	 * Set AccessPermissionName value
	 * @param string $_accessPermissionName the AccessPermissionName
	 * @return string
	 */
	public function setAccessPermissionName($_accessPermissionName)
	{
		return ($this->AccessPermissionName = $_accessPermissionName);
	}
	/**
	 * Get AccessPermissionStatus value
	 * @return string|null
	 */
	public function getAccessPermissionStatus()
	{
		return $this->AccessPermissionStatus;
	}
	/**
	 * Set AccessPermissionStatus value
	 * @param string $_accessPermissionStatus the AccessPermissionStatus
	 * @return string
	 */
	public function setAccessPermissionStatus($_accessPermissionStatus)
	{
		return ($this->AccessPermissionStatus = $_accessPermissionStatus);
	}
	/**
	 * Get PayerID value
	 * @return string|null
	 */
	public function getPayerID()
	{
		return $this->PayerID;
	}
	/**
	 * Set PayerID value
	 * @param string $_payerID the PayerID
	 * @return string
	 */
	public function setPayerID($_payerID)
	{
		return ($this->PayerID = $_payerID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetAccessPermissionDetailsResponseDetailsType
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