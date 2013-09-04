<?php
/**
 * File for class PayPalStructThreeDSecureResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructThreeDSecureResponseType originally named ThreeDSecureResponseType
 * Documentation : 3DS remaining fields.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructThreeDSecureResponseType extends PayPalWsdlClass
{
	/**
	 * The Vpas
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Vpas;
	/**
	 * The EciSubmitted3DS
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $EciSubmitted3DS;
	/**
	 * Constructor method for ThreeDSecureResponseType
	 * @see parent::__construct()
	 * @param string $_vpas
	 * @param string $_eciSubmitted3DS
	 * @return PayPalStructThreeDSecureResponseType
	 */
	public function __construct($_vpas = NULL,$_eciSubmitted3DS = NULL)
	{
		parent::__construct(array('Vpas'=>$_vpas,'EciSubmitted3DS'=>$_eciSubmitted3DS));
	}
	/**
	 * Get Vpas value
	 * @return string|null
	 */
	public function getVpas()
	{
		return $this->Vpas;
	}
	/**
	 * Set Vpas value
	 * @param string $_vpas the Vpas
	 * @return string
	 */
	public function setVpas($_vpas)
	{
		return ($this->Vpas = $_vpas);
	}
	/**
	 * Get EciSubmitted3DS value
	 * @return string|null
	 */
	public function getEciSubmitted3DS()
	{
		return $this->EciSubmitted3DS;
	}
	/**
	 * Set EciSubmitted3DS value
	 * @param string $_eciSubmitted3DS the EciSubmitted3DS
	 * @return string
	 */
	public function setEciSubmitted3DS($_eciSubmitted3DS)
	{
		return ($this->EciSubmitted3DS = $_eciSubmitted3DS);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructThreeDSecureResponseType
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