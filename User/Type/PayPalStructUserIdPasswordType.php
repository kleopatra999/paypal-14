<?php
/**
 * File for class PayPalStructUserIdPasswordType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUserIdPasswordType originally named UserIdPasswordType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUserIdPasswordType extends PayPalWsdlClass
{
	/**
	 * The AppId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $AppId;
	/**
	 * The DevId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DevId;
	/**
	 * The AuthCert
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $AuthCert;
	/**
	 * The Username
	 * Meta informations extracted from the WSDL
	 * - documentation : The username is the identifier for an account.
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations extracted from the WSDL
	 * - documentation : Password contains the current password associated with the username.
	 * @var string
	 */
	public $Password;
	/**
	 * The Signature
	 * Meta informations extracted from the WSDL
	 * - documentation : Signature for Three Token authentication.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Signature;
	/**
	 * The Subject
	 * Meta informations extracted from the WSDL
	 * - documentation : This field identifies an account (e.g., payment) on whose behalf the operation is being performed. For instance one account holder may delegate the abililty to perform certain operations to another account holder. This delegation is done through a separate mechanism. If the base username has not been authorized by the subject the request will be rejected.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Subject;
	/**
	 * The AuthToken
	 * Meta informations extracted from the WSDL
	 * - documentation : Authentication Session Token for authentication and authorization.
	 * - minOccurs : 0
	 * @var string
	 */
	public $AuthToken;
	/**
	 * Constructor method for UserIdPasswordType
	 * @see parent::__construct()
	 * @param string $_appId
	 * @param string $_devId
	 * @param string $_authCert
	 * @param string $_username
	 * @param string $_password
	 * @param string $_signature
	 * @param string $_subject
	 * @param string $_authToken
	 * @return PayPalStructUserIdPasswordType
	 */
	public function __construct($_appId = NULL,$_devId = NULL,$_authCert = NULL,$_username = NULL,$_password = NULL,$_signature = NULL,$_subject = NULL,$_authToken = NULL)
	{
		parent::__construct(array('AppId'=>$_appId,'DevId'=>$_devId,'AuthCert'=>$_authCert,'Username'=>$_username,'Password'=>$_password,'Signature'=>$_signature,'Subject'=>$_subject,'AuthToken'=>$_authToken));
	}
	/**
	 * Get AppId value
	 * @return string|null
	 */
	public function getAppId()
	{
		return $this->AppId;
	}
	/**
	 * Set AppId value
	 * @param string $_appId the AppId
	 * @return string
	 */
	public function setAppId($_appId)
	{
		return ($this->AppId = $_appId);
	}
	/**
	 * Get DevId value
	 * @return string|null
	 */
	public function getDevId()
	{
		return $this->DevId;
	}
	/**
	 * Set DevId value
	 * @param string $_devId the DevId
	 * @return string
	 */
	public function setDevId($_devId)
	{
		return ($this->DevId = $_devId);
	}
	/**
	 * Get AuthCert value
	 * @return string|null
	 */
	public function getAuthCert()
	{
		return $this->AuthCert;
	}
	/**
	 * Set AuthCert value
	 * @param string $_authCert the AuthCert
	 * @return string
	 */
	public function setAuthCert($_authCert)
	{
		return ($this->AuthCert = $_authCert);
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
	 * Get Subject value
	 * @return string|null
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set Subject value
	 * @param string $_subject the Subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->Subject = $_subject);
	}
	/**
	 * Get AuthToken value
	 * @return string|null
	 */
	public function getAuthToken()
	{
		return $this->AuthToken;
	}
	/**
	 * Set AuthToken value
	 * @param string $_authToken the AuthToken
	 * @return string
	 */
	public function setAuthToken($_authToken)
	{
		return ($this->AuthToken = $_authToken);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUserIdPasswordType
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