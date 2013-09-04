<?php
/**
 * File for class PayPalStructUATPDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructUATPDetailsType originally named UATPDetailsType
 * Documentation : UATP Card Details Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructUATPDetailsType extends PayPalWsdlClass
{
	/**
	 * The UATPNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : UATP Card Number
	 * @var string
	 */
	public $UATPNumber;
	/**
	 * The ExpMonth
	 * Meta informations extracted from the WSDL
	 * - documentation : UATP Card expirty month
	 * @var int
	 */
	public $ExpMonth;
	/**
	 * The ExpYear
	 * Meta informations extracted from the WSDL
	 * - documentation : UATP Card expirty year
	 * @var int
	 */
	public $ExpYear;
	/**
	 * Constructor method for UATPDetailsType
	 * @see parent::__construct()
	 * @param string $_uATPNumber
	 * @param int $_expMonth
	 * @param int $_expYear
	 * @return PayPalStructUATPDetailsType
	 */
	public function __construct($_uATPNumber = NULL,$_expMonth = NULL,$_expYear = NULL)
	{
		parent::__construct(array('UATPNumber'=>$_uATPNumber,'ExpMonth'=>$_expMonth,'ExpYear'=>$_expYear));
	}
	/**
	 * Get UATPNumber value
	 * @return string|null
	 */
	public function getUATPNumber()
	{
		return $this->UATPNumber;
	}
	/**
	 * Set UATPNumber value
	 * @param string $_uATPNumber the UATPNumber
	 * @return string
	 */
	public function setUATPNumber($_uATPNumber)
	{
		return ($this->UATPNumber = $_uATPNumber);
	}
	/**
	 * Get ExpMonth value
	 * @return int|null
	 */
	public function getExpMonth()
	{
		return $this->ExpMonth;
	}
	/**
	 * Set ExpMonth value
	 * @param int $_expMonth the ExpMonth
	 * @return int
	 */
	public function setExpMonth($_expMonth)
	{
		return ($this->ExpMonth = $_expMonth);
	}
	/**
	 * Get ExpYear value
	 * @return int|null
	 */
	public function getExpYear()
	{
		return $this->ExpYear;
	}
	/**
	 * Set ExpYear value
	 * @param int $_expYear the ExpYear
	 * @return int
	 */
	public function setExpYear($_expYear)
	{
		return ($this->ExpYear = $_expYear);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructUATPDetailsType
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