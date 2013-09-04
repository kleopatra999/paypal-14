<?php
/**
 * File for class PayPalStructSchedulingInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSchedulingInfoType originally named SchedulingInfoType
 * Documentation : Contains information for Scheduling limits for the user. All dtails must be present,unless we will have revise call one day, just in case we might let's make min occur = 0
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSchedulingInfoType extends PayPalWsdlClass
{
	/**
	 * The MaxScheduledMinutes
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxScheduledMinutes;
	/**
	 * The MinScheduledMinutes
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $MinScheduledMinutes;
	/**
	 * The MaxScheduledItems
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxScheduledItems;
	/**
	 * Constructor method for SchedulingInfoType
	 * @see parent::__construct()
	 * @param int $_maxScheduledMinutes
	 * @param int $_minScheduledMinutes
	 * @param int $_maxScheduledItems
	 * @return PayPalStructSchedulingInfoType
	 */
	public function __construct($_maxScheduledMinutes = NULL,$_minScheduledMinutes = NULL,$_maxScheduledItems = NULL)
	{
		parent::__construct(array('MaxScheduledMinutes'=>$_maxScheduledMinutes,'MinScheduledMinutes'=>$_minScheduledMinutes,'MaxScheduledItems'=>$_maxScheduledItems));
	}
	/**
	 * Get MaxScheduledMinutes value
	 * @return int|null
	 */
	public function getMaxScheduledMinutes()
	{
		return $this->MaxScheduledMinutes;
	}
	/**
	 * Set MaxScheduledMinutes value
	 * @param int $_maxScheduledMinutes the MaxScheduledMinutes
	 * @return int
	 */
	public function setMaxScheduledMinutes($_maxScheduledMinutes)
	{
		return ($this->MaxScheduledMinutes = $_maxScheduledMinutes);
	}
	/**
	 * Get MinScheduledMinutes value
	 * @return int|null
	 */
	public function getMinScheduledMinutes()
	{
		return $this->MinScheduledMinutes;
	}
	/**
	 * Set MinScheduledMinutes value
	 * @param int $_minScheduledMinutes the MinScheduledMinutes
	 * @return int
	 */
	public function setMinScheduledMinutes($_minScheduledMinutes)
	{
		return ($this->MinScheduledMinutes = $_minScheduledMinutes);
	}
	/**
	 * Get MaxScheduledItems value
	 * @return int|null
	 */
	public function getMaxScheduledItems()
	{
		return $this->MaxScheduledItems;
	}
	/**
	 * Set MaxScheduledItems value
	 * @param int $_maxScheduledItems the MaxScheduledItems
	 * @return int
	 */
	public function setMaxScheduledItems($_maxScheduledItems)
	{
		return ($this->MaxScheduledItems = $_maxScheduledItems);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSchedulingInfoType
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