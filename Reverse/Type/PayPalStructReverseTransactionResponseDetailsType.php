<?php
/**
 * File for class PayPalStructReverseTransactionResponseDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructReverseTransactionResponseDetailsType originally named ReverseTransactionResponseDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructReverseTransactionResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : Status of reversal request. Required
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * The ReverseTransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique transaction identifier of the reversal transaction created. Character length and limitations:17 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * - nillable : true
	 * - documentation : TransactionId - Type for a PayPal Transaction ID.
	 * @var string
	 */
	public $ReverseTransactionID;
	/**
	 * Constructor method for ReverseTransactionResponseDetailsType
	 * @see parent::__construct()
	 * @param string $_status
	 * @param string $_reverseTransactionID
	 * @return PayPalStructReverseTransactionResponseDetailsType
	 */
	public function __construct($_status,$_reverseTransactionID = NULL)
	{
		parent::__construct(array('Status'=>$_status,'ReverseTransactionID'=>$_reverseTransactionID));
	}
	/**
	 * Get Status value
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @param string $_status the Status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->Status = $_status);
	}
	/**
	 * Get ReverseTransactionID value
	 * @return string|null
	 */
	public function getReverseTransactionID()
	{
		return $this->ReverseTransactionID;
	}
	/**
	 * Set ReverseTransactionID value
	 * @param string $_reverseTransactionID the ReverseTransactionID
	 * @return string
	 */
	public function setReverseTransactionID($_reverseTransactionID)
	{
		return ($this->ReverseTransactionID = $_reverseTransactionID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructReverseTransactionResponseDetailsType
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