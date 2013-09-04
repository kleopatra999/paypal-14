<?php
/**
 * File for class PayPalStructDoUATPAuthorizationResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoUATPAuthorizationResponseType originally named DoUATPAuthorizationResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoUATPAuthorizationResponseType extends PayPalStructDoAuthorizationResponseType
{
	/**
	 * The AuthorizationCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Auth Authorization Code.
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $AuthorizationCode;
	/**
	 * The UATPDetails
	 * @var PayPalStructUATPDetailsType
	 */
	public $UATPDetails;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Invoice ID. A pass through.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The MsgSubID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor method for DoUATPAuthorizationResponseType
	 * @see parent::__construct()
	 * @param string $_authorizationCode
	 * @param PayPalStructUATPDetailsType $_uATPDetails
	 * @param string $_invoiceID
	 * @param string $_msgSubID
	 * @return PayPalStructDoUATPAuthorizationResponseType
	 */
	public function __construct($_authorizationCode,$_uATPDetails = NULL,$_invoiceID = NULL,$_msgSubID = NULL)
	{
		PayPalWsdlClass::__construct(array('AuthorizationCode'=>$_authorizationCode,'UATPDetails'=>$_uATPDetails,'InvoiceID'=>$_invoiceID,'MsgSubID'=>$_msgSubID));
	}
	/**
	 * Get AuthorizationCode value
	 * @return string
	 */
	public function getAuthorizationCode()
	{
		return $this->AuthorizationCode;
	}
	/**
	 * Set AuthorizationCode value
	 * @param string $_authorizationCode the AuthorizationCode
	 * @return string
	 */
	public function setAuthorizationCode($_authorizationCode)
	{
		return ($this->AuthorizationCode = $_authorizationCode);
	}
	/**
	 * Get UATPDetails value
	 * @return PayPalStructUATPDetailsType|null
	 */
	public function getUATPDetails()
	{
		return $this->UATPDetails;
	}
	/**
	 * Set UATPDetails value
	 * @param PayPalStructUATPDetailsType $_uATPDetails the UATPDetails
	 * @return PayPalStructUATPDetailsType
	 */
	public function setUATPDetails($_uATPDetails)
	{
		return ($this->UATPDetails = $_uATPDetails);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
	}
	/**
	 * Get MsgSubID value
	 * @return string|null
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
	}
	/**
	 * Set MsgSubID value
	 * @param string $_msgSubID the MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_msgSubID)
	{
		return ($this->MsgSubID = $_msgSubID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoUATPAuthorizationResponseType
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