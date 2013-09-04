<?php
/**
 * File for class PayPalStructAdditionalFeeType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructAdditionalFeeType originally named AdditionalFeeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructAdditionalFeeType extends PayPalWsdlClass
{
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Type;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * Constructor method for AdditionalFeeType
	 * @see parent::__construct()
	 * @param string $_type
	 * @param PayPalStructBasicAmountType $_amount
	 * @return PayPalStructAdditionalFeeType
	 */
	public function __construct($_type = NULL,$_amount = NULL)
	{
		parent::__construct(array('Type'=>$_type,'Amount'=>$_amount));
	}
	/**
	 * Get Type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @param string $_type the Type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->Type = $_type);
	}
	/**
	 * Get Amount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Amount value
	 * @param PayPalStructBasicAmountType $_amount the Amount
	 * @return PayPalStructBasicAmountType
	 */
	public function setAmount($_amount)
	{
		return ($this->Amount = $_amount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructAdditionalFeeType
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