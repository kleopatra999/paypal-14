<?php
/**
 * File for class PayPalStructExternalRememberMeOptInDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructExternalRememberMeOptInDetailsType originally named ExternalRememberMeOptInDetailsType
 * Documentation : This element contains information that allows the merchant to request to opt into external remember me on behalf of the buyer or to request login bypass using external remember me.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructExternalRememberMeOptInDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeOptIn
	 * Meta informations extracted from the WSDL
	 * - documentation : 1 = opt in to external remember me. 0 or omitted = no opt-in Other values are invalid
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalRememberMeOptIn;
	/**
	 * The ExternalRememberMeOwnerDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : E-mail address or secure merchant account ID of merchant to associate with new external remember-me. Currently, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant account.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructExternalRememberMeOwnerDetailsType
	 */
	public $ExternalRememberMeOwnerDetails;
	/**
	 * Constructor method for ExternalRememberMeOptInDetailsType
	 * @see parent::__construct()
	 * @param string $_externalRememberMeOptIn
	 * @param PayPalStructExternalRememberMeOwnerDetailsType $_externalRememberMeOwnerDetails
	 * @return PayPalStructExternalRememberMeOptInDetailsType
	 */
	public function __construct($_externalRememberMeOptIn = NULL,$_externalRememberMeOwnerDetails = NULL)
	{
		parent::__construct(array('ExternalRememberMeOptIn'=>$_externalRememberMeOptIn,'ExternalRememberMeOwnerDetails'=>$_externalRememberMeOwnerDetails));
	}
	/**
	 * Get ExternalRememberMeOptIn value
	 * @return string|null
	 */
	public function getExternalRememberMeOptIn()
	{
		return $this->ExternalRememberMeOptIn;
	}
	/**
	 * Set ExternalRememberMeOptIn value
	 * @param string $_externalRememberMeOptIn the ExternalRememberMeOptIn
	 * @return string
	 */
	public function setExternalRememberMeOptIn($_externalRememberMeOptIn)
	{
		return ($this->ExternalRememberMeOptIn = $_externalRememberMeOptIn);
	}
	/**
	 * Get ExternalRememberMeOwnerDetails value
	 * @return PayPalStructExternalRememberMeOwnerDetailsType|null
	 */
	public function getExternalRememberMeOwnerDetails()
	{
		return $this->ExternalRememberMeOwnerDetails;
	}
	/**
	 * Set ExternalRememberMeOwnerDetails value
	 * @param PayPalStructExternalRememberMeOwnerDetailsType $_externalRememberMeOwnerDetails the ExternalRememberMeOwnerDetails
	 * @return PayPalStructExternalRememberMeOwnerDetailsType
	 */
	public function setExternalRememberMeOwnerDetails($_externalRememberMeOwnerDetails)
	{
		return ($this->ExternalRememberMeOwnerDetails = $_externalRememberMeOwnerDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructExternalRememberMeOptInDetailsType
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