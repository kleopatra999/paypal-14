<?php
/**
 * File for class PayPalStructButtonSearchResultType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructButtonSearchResultType originally named ButtonSearchResultType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructButtonSearchResultType extends PayPalWsdlClass
{
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ButtonType;
	/**
	 * The ItemName
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ModifyDate
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $ModifyDate;
	/**
	 * Constructor method for ButtonSearchResultType
	 * @see parent::__construct()
	 * @param string $_hostedButtonID
	 * @param string $_buttonType
	 * @param string $_itemName
	 * @param dateTime $_modifyDate
	 * @return PayPalStructButtonSearchResultType
	 */
	public function __construct($_hostedButtonID = NULL,$_buttonType = NULL,$_itemName = NULL,$_modifyDate = NULL)
	{
		parent::__construct(array('HostedButtonID'=>$_hostedButtonID,'ButtonType'=>$_buttonType,'ItemName'=>$_itemName,'ModifyDate'=>$_modifyDate));
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
	 * Get ButtonType value
	 * @return string|null
	 */
	public function getButtonType()
	{
		return $this->ButtonType;
	}
	/**
	 * Set ButtonType value
	 * @param string $_buttonType the ButtonType
	 * @return string
	 */
	public function setButtonType($_buttonType)
	{
		return ($this->ButtonType = $_buttonType);
	}
	/**
	 * Get ItemName value
	 * @return string|null
	 */
	public function getItemName()
	{
		return $this->ItemName;
	}
	/**
	 * Set ItemName value
	 * @param string $_itemName the ItemName
	 * @return string
	 */
	public function setItemName($_itemName)
	{
		return ($this->ItemName = $_itemName);
	}
	/**
	 * Get ModifyDate value
	 * @return dateTime|null
	 */
	public function getModifyDate()
	{
		return $this->ModifyDate;
	}
	/**
	 * Set ModifyDate value
	 * @param dateTime $_modifyDate the ModifyDate
	 * @return dateTime
	 */
	public function setModifyDate($_modifyDate)
	{
		return ($this->ModifyDate = $_modifyDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructButtonSearchResultType
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