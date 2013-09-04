<?php
/**
 * File for class PayPalStructAPICredentialsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAPICredentialsType originally named APICredentialsType
 * Documentation : APICredentialsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAPICredentialsType extends PayPalWsdlClass
{
	/**
	 * The Username
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs PayPal API usernameCharacter length and limitations: 128 alphanumeric characters
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs PayPal API passwordCharacter length and limitations: 40 alphanumeric characters
	 * @var string
	 */
	public $Password;
	/**
	 * The Signature
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs PayPal API signature, if one exists. Character length and limitations: 256 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Signature;
	/**
	 * The Certificate
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs PayPal API certificate in PEM format, if one exists The certificate consists of two parts: the private key (2,048 bytes) and the certificate proper (4,000 bytes). Character length and limitations: 6,048 alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Certificate;
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs PayPal API authentication mechanism. Auth-None: no authentication mechanism on file Cert: API certificate Sign: API signature Character length and limitations: 9 alphanumeric characters
	 * @var PayPalEnumAPIAuthenticationType
	 */
	public $Type;
	/**
	 * Constructor method for APICredentialsType
	 * @see parent::__construct()
	 * @param string $_username
	 * @param string $_password
	 * @param string $_signature
	 * @param string $_certificate
	 * @param PayPalEnumAPIAuthenticationType $_type
	 * @return PayPalStructAPICredentialsType
	 */
	public function __construct($_username = NULL,$_password = NULL,$_signature = NULL,$_certificate = NULL,$_type = NULL)
	{
		parent::__construct(array('Username'=>$_username,'Password'=>$_password,'Signature'=>$_signature,'Certificate'=>$_certificate,'Type'=>$_type));
	}
	/**
	 * Get Username value
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->Username;
	}
	/**
	 * Set Username value
	 * @param string $_username the Username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->Username = $_username);
	}
	/**
	 * Get Password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set Password value
	 * @param string $_password the Password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->Password = $_password);
	}
	/**
	 * Get Signature value
	 * @return string|null
	 */
	public function getSignature()
	{
		return $this->Signature;
	}
	/**
	 * Set Signature value
	 * @param string $_signature the Signature
	 * @return string
	 */
	public function setSignature($_signature)
	{
		return ($this->Signature = $_signature);
	}
	/**
	 * Get Certificate value
	 * @return string|null
	 */
	public function getCertificate()
	{
		return $this->Certificate;
	}
	/**
	 * Set Certificate value
	 * @param string $_certificate the Certificate
	 * @return string
	 */
	public function setCertificate($_certificate)
	{
		return ($this->Certificate = $_certificate);
	}
	/**
	 * Get Type value
	 * @return PayPalEnumAPIAuthenticationType|null
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @uses PayPalEnumAPIAuthenticationType::valueIsValid()
	 * @param PayPalEnumAPIAuthenticationType $_type the Type
	 * @return PayPalEnumAPIAuthenticationType
	 */
	public function setType($_type)
	{
		if(!PayPalEnumAPIAuthenticationType::valueIsValid($_type))
		{
			return false;
		}
		return ($this->Type = $_type);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAPICredentialsType
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