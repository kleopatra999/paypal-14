<?php
/**
 * File for class PayPalStructBillOutstandingAmountRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillOutstandingAmountRequestDetailsType originally named BillOutstandingAmountRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillOutstandingAmountRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The Amount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The Note
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Note;
	/**
	 * Constructor method for BillOutstandingAmountRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_profileID
	 * @param PayPalStructBasicAmountType $_amount
	 * @param string $_note
	 * @return PayPalStructBillOutstandingAmountRequestDetailsType
	 */
	public function __construct($_profileID,$_amount = NULL,$_note = NULL)
	{
		parent::__construct(array('ProfileID'=>$_profileID,'Amount'=>$_amount,'Note'=>$_note));
	}
	/**
	 * Get ProfileID value
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileID value
	 * @param string $_profileID the ProfileID
	 * @return string
	 */
	public function setProfileID($_profileID)
	{
		return ($this->ProfileID = $_profileID);
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
	 * Get Note value
	 * @return string|null
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Note value
	 * @param string $_note the Note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->Note = $_note);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillOutstandingAmountRequestDetailsType
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