<?php
/**
 * File for class PayPalStructGetPalDetailsResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructGetPalDetailsResponseType originally named GetPalDetailsResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructGetPalDetailsResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The Pal
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Pal;
	/**
	 * The Locale
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Locale;
	/**
	 * Constructor method for GetPalDetailsResponseType
	 * @see parent::__construct()
	 * @param string $_pal
	 * @param string $_locale
	 * @return PayPalStructGetPalDetailsResponseType
	 */
	public function __construct($_pal,$_locale)
	{
		PayPalWsdlClass::__construct(array('Pal'=>$_pal,'Locale'=>$_locale));
	}
	/**
	 * Get Pal value
	 * @return string
	 */
	public function getPal()
	{
		return $this->Pal;
	}
	/**
	 * Set Pal value
	 * @param string $_pal the Pal
	 * @return string
	 */
	public function setPal($_pal)
	{
		return ($this->Pal = $_pal);
	}
	/**
	 * Get Locale value
	 * @return string
	 */
	public function getLocale()
	{
		return $this->Locale;
	}
	/**
	 * Set Locale value
	 * @param string $_locale the Locale
	 * @return string
	 */
	public function setLocale($_locale)
	{
		return ($this->Locale = $_locale);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructGetPalDetailsResponseType
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