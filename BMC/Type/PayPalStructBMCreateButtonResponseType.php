<?php
/**
 * File for class PayPalStructBMCreateButtonResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMCreateButtonResponseType originally named BMCreateButtonResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMCreateButtonResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The Website
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Website;
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Email;
	/**
	 * The Mobile
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Mobile;
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * Constructor method for BMCreateButtonResponseType
	 * @see parent::__construct()
	 * @param string $_website
	 * @param string $_email
	 * @param string $_mobile
	 * @param string $_hostedButtonID
	 * @return PayPalStructBMCreateButtonResponseType
	 */
	public function __construct($_website,$_email = NULL,$_mobile = NULL,$_hostedButtonID = NULL)
	{
		PayPalWsdlClass::__construct(array('Website'=>$_website,'Email'=>$_email,'Mobile'=>$_mobile,'HostedButtonID'=>$_hostedButtonID));
	}
	/**
	 * Get Website value
	 * @return string
	 */
	public function getWebsite()
	{
		return $this->Website;
	}
	/**
	 * Set Website value
	 * @param string $_website the Website
	 * @return string
	 */
	public function setWebsite($_website)
	{
		return ($this->Website = $_website);
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
	 * Get Mobile value
	 * @return string|null
	 */
	public function getMobile()
	{
		return $this->Mobile;
	}
	/**
	 * Set Mobile value
	 * @param string $_mobile the Mobile
	 * @return string
	 */
	public function setMobile($_mobile)
	{
		return ($this->Mobile = $_mobile);
	}
	/**
	 * Get HostedButtonID value
	 * @return string|null
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set HostedButtonID value
	 * @param string $_hostedButtonID the HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_hostedButtonID)
	{
		return ($this->HostedButtonID = $_hostedButtonID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMCreateButtonResponseType
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