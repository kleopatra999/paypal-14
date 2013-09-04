<?php
/**
 * File for class PayPalStructOptionTrackingDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOptionTrackingDetailsType originally named OptionTrackingDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOptionTrackingDetailsType extends PayPalWsdlClass
{
	/**
	 * The OptionNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Number. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionNumber;
	/**
	 * The OptionQty
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Quantity. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionQty;
	/**
	 * The OptionSelect
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Select Name. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionSelect;
	/**
	 * The OptionQtyDelta
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Quantity Delta. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionQtyDelta;
	/**
	 * The OptionAlert
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Alert. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionAlert;
	/**
	 * The OptionCost
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Cost. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionCost;
	/**
	 * Constructor method for OptionTrackingDetailsType
	 * @see parent::__construct()
	 * @param string $_optionNumber
	 * @param string $_optionQty
	 * @param string $_optionSelect
	 * @param string $_optionQtyDelta
	 * @param string $_optionAlert
	 * @param string $_optionCost
	 * @return PayPalStructOptionTrackingDetailsType
	 */
	public function __construct($_optionNumber = NULL,$_optionQty = NULL,$_optionSelect = NULL,$_optionQtyDelta = NULL,$_optionAlert = NULL,$_optionCost = NULL)
	{
		parent::__construct(array('OptionNumber'=>$_optionNumber,'OptionQty'=>$_optionQty,'OptionSelect'=>$_optionSelect,'OptionQtyDelta'=>$_optionQtyDelta,'OptionAlert'=>$_optionAlert,'OptionCost'=>$_optionCost));
	}
	/**
	 * Get OptionNumber value
	 * @return string|null
	 */
	public function getOptionNumber()
	{
		return $this->OptionNumber;
	}
	/**
	 * Set OptionNumber value
	 * @param string $_optionNumber the OptionNumber
	 * @return string
	 */
	public function setOptionNumber($_optionNumber)
	{
		return ($this->OptionNumber = $_optionNumber);
	}
	/**
	 * Get OptionQty value
	 * @return string|null
	 */
	public function getOptionQty()
	{
		return $this->OptionQty;
	}
	/**
	 * Set OptionQty value
	 * @param string $_optionQty the OptionQty
	 * @return string
	 */
	public function setOptionQty($_optionQty)
	{
		return ($this->OptionQty = $_optionQty);
	}
	/**
	 * Get OptionSelect value
	 * @return string|null
	 */
	public function getOptionSelect()
	{
		return $this->OptionSelect;
	}
	/**
	 * Set OptionSelect value
	 * @param string $_optionSelect the OptionSelect
	 * @return string
	 */
	public function setOptionSelect($_optionSelect)
	{
		return ($this->OptionSelect = $_optionSelect);
	}
	/**
	 * Get OptionQtyDelta value
	 * @return string|null
	 */
	public function getOptionQtyDelta()
	{
		return $this->OptionQtyDelta;
	}
	/**
	 * Set OptionQtyDelta value
	 * @param string $_optionQtyDelta the OptionQtyDelta
	 * @return string
	 */
	public function setOptionQtyDelta($_optionQtyDelta)
	{
		return ($this->OptionQtyDelta = $_optionQtyDelta);
	}
	/**
	 * Get OptionAlert value
	 * @return string|null
	 */
	public function getOptionAlert()
	{
		return $this->OptionAlert;
	}
	/**
	 * Set OptionAlert value
	 * @param string $_optionAlert the OptionAlert
	 * @return string
	 */
	public function setOptionAlert($_optionAlert)
	{
		return ($this->OptionAlert = $_optionAlert);
	}
	/**
	 * Get OptionCost value
	 * @return string|null
	 */
	public function getOptionCost()
	{
		return $this->OptionCost;
	}
	/**
	 * Set OptionCost value
	 * @param string $_optionCost the OptionCost
	 * @return string
	 */
	public function setOptionCost($_optionCost)
	{
		return ($this->OptionCost = $_optionCost);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOptionTrackingDetailsType
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