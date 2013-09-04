<?php
/**
 * File for class PayPalStructMerchantStoreDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMerchantStoreDetailsType originally named MerchantStoreDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMerchantStoreDetailsType extends PayPalWsdlClass
{
	/**
	 * The StoreID
	 * Meta informations extracted from the WSDL
	 * - documentation : Store IDOptional Character length and limits: 50 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $StoreID;
	/**
	 * The TerminalID
	 * Meta informations extracted from the WSDL
	 * - documentation : Terminal IDOptional Character length and limits: 50 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $TerminalID;
	/**
	 * Constructor method for MerchantStoreDetailsType
	 * @see parent::__construct()
	 * @param string $_storeID
	 * @param string $_terminalID
	 * @return PayPalStructMerchantStoreDetailsType
	 */
	public function __construct($_storeID,$_terminalID = NULL)
	{
		parent::__construct(array('StoreID'=>$_storeID,'TerminalID'=>$_terminalID));
	}
	/**
	 * Get StoreID value
	 * @return string
	 */
	public function getStoreID()
	{
		return $this->StoreID;
	}
	/**
	 * Set StoreID value
	 * @param string $_storeID the StoreID
	 * @return string
	 */
	public function setStoreID($_storeID)
	{
		return ($this->StoreID = $_storeID);
	}
	/**
	 * Get TerminalID value
	 * @return string|null
	 */
	public function getTerminalID()
	{
		return $this->TerminalID;
	}
	/**
	 * Set TerminalID value
	 * @param string $_terminalID the TerminalID
	 * @return string
	 */
	public function setTerminalID($_terminalID)
	{
		return ($this->TerminalID = $_terminalID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMerchantStoreDetailsType
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