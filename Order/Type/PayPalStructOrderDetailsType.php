<?php
/**
 * File for class PayPalStructOrderDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOrderDetailsType originally named OrderDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOrderDetailsType extends PayPalWsdlClass
{
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : Description of the Order.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The MaxAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Expected maximum amount that the merchant may pull using DoReferenceTransaction
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $MaxAmount;
	/**
	 * Constructor method for OrderDetailsType
	 * @see parent::__construct()
	 * @param string $_description
	 * @param PayPalStructBasicAmountType $_maxAmount
	 * @return PayPalStructOrderDetailsType
	 */
	public function __construct($_description = NULL,$_maxAmount = NULL)
	{
		parent::__construct(array('Description'=>$_description,'MaxAmount'=>$_maxAmount));
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get MaxAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getMaxAmount()
	{
		return $this->MaxAmount;
	}
	/**
	 * Set MaxAmount value
	 * @param PayPalStructBasicAmountType $_maxAmount the MaxAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setMaxAmount($_maxAmount)
	{
		return ($this->MaxAmount = $_maxAmount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOrderDetailsType
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