<?php
/**
 * File for class PayPalStructCustomSecurityHeaderType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCustomSecurityHeaderType originally named CustomSecurityHeaderType
 * Documentation : Custom Securiy Header.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCustomSecurityHeaderType extends PayPalWsdlClass
{
	/**
	 * The eBayAuthToken
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $eBayAuthToken;
	/**
	 * The HardExpirationWarning
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $HardExpirationWarning;
	/**
	 * The Credentials
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructUserIdPasswordType
	 */
	public $Credentials;
	/**
	 * Constructor method for CustomSecurityHeaderType
	 * @see parent::__construct()
	 * @param string $_eBayAuthToken
	 * @param string $_hardExpirationWarning
	 * @param PayPalStructUserIdPasswordType $_credentials
	 * @return PayPalStructCustomSecurityHeaderType
	 */
	public function __construct($_eBayAuthToken = NULL,$_hardExpirationWarning = NULL,$_credentials = NULL)
	{
		parent::__construct(array('eBayAuthToken'=>$_eBayAuthToken,'HardExpirationWarning'=>$_hardExpirationWarning,'Credentials'=>$_credentials));
	}
	/**
	 * Get eBayAuthToken value
	 * @return string|null
	 */
	public function getEBayAuthToken()
	{
		return $this->eBayAuthToken;
	}
	/**
	 * Set eBayAuthToken value
	 * @param string $_eBayAuthToken the eBayAuthToken
	 * @return string
	 */
	public function setEBayAuthToken($_eBayAuthToken)
	{
		return ($this->eBayAuthToken = $_eBayAuthToken);
	}
	/**
	 * Get HardExpirationWarning value
	 * @return string|null
	 */
	public function getHardExpirationWarning()
	{
		return $this->HardExpirationWarning;
	}
	/**
	 * Set HardExpirationWarning value
	 * @param string $_hardExpirationWarning the HardExpirationWarning
	 * @return string
	 */
	public function setHardExpirationWarning($_hardExpirationWarning)
	{
		return ($this->HardExpirationWarning = $_hardExpirationWarning);
	}
	/**
	 * Get Credentials value
	 * @return PayPalStructUserIdPasswordType|null
	 */
	public function getCredentials()
	{
		return $this->Credentials;
	}
	/**
	 * Set Credentials value
	 * @param PayPalStructUserIdPasswordType $_credentials the Credentials
	 * @return PayPalStructUserIdPasswordType
	 */
	public function setCredentials($_credentials)
	{
		return ($this->Credentials = $_credentials);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCustomSecurityHeaderType
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