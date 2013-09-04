<?php
/**
 * File for class PayPalStructMerchantPullInfoType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructMerchantPullInfoType originally named MerchantPullInfoType
 * Documentation : MerchantPullInfoType Information about the merchant pull.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructMerchantPullInfoType extends PayPalWsdlClass
{
	/**
	 * The MpStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Current status of billing agreement
	 * @var PayPalEnumMerchantPullStatusCodeType
	 */
	public $MpStatus;
	/**
	 * The MpMax
	 * Meta informations extracted from the WSDL
	 * - documentation : Monthly maximum payment amount
	 * @var PayPalStructBasicAmountType
	 */
	public $MpMax;
	/**
	 * The MpCustom
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of the mp_custom variable that you specified in a FORM submission to PayPal during the creation or updating of a customer billing agreement
	 * - minOccurs : 0
	 * @var string
	 */
	public $MpCustom;
	/**
	 * The Desc
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of the mp_desc variable (description of goods or services) associated with the billing agreement
	 * - minOccurs : 0
	 * @var string
	 */
	public $Desc;
	/**
	 * The Invoice
	 * Meta informations extracted from the WSDL
	 * - documentation : Invoice value as set by BillUserRequest API call
	 * - minOccurs : 0
	 * @var string
	 */
	public $Invoice;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : Custom field as set by BillUserRequest API call
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The PaymentSourceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Note: This field is no longer used and is always empty.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PaymentSourceID;
	/**
	 * Constructor method for MerchantPullInfoType
	 * @see parent::__construct()
	 * @param PayPalEnumMerchantPullStatusCodeType $_mpStatus
	 * @param PayPalStructBasicAmountType $_mpMax
	 * @param string $_mpCustom
	 * @param string $_desc
	 * @param string $_invoice
	 * @param string $_custom
	 * @param string $_paymentSourceID
	 * @return PayPalStructMerchantPullInfoType
	 */
	public function __construct($_mpStatus = NULL,$_mpMax = NULL,$_mpCustom = NULL,$_desc = NULL,$_invoice = NULL,$_custom = NULL,$_paymentSourceID = NULL)
	{
		parent::__construct(array('MpStatus'=>$_mpStatus,'MpMax'=>$_mpMax,'MpCustom'=>$_mpCustom,'Desc'=>$_desc,'Invoice'=>$_invoice,'Custom'=>$_custom,'PaymentSourceID'=>$_paymentSourceID));
	}
	/**
	 * Get MpStatus value
	 * @return PayPalEnumMerchantPullStatusCodeType|null
	 */
	public function getMpStatus()
	{
		return $this->MpStatus;
	}
	/**
	 * Set MpStatus value
	 * @uses PayPalEnumMerchantPullStatusCodeType::valueIsValid()
	 * @param PayPalEnumMerchantPullStatusCodeType $_mpStatus the MpStatus
	 * @return PayPalEnumMerchantPullStatusCodeType
	 */
	public function setMpStatus($_mpStatus)
	{
		if(!PayPalEnumMerchantPullStatusCodeType::valueIsValid($_mpStatus))
		{
			return false;
		}
		return ($this->MpStatus = $_mpStatus);
	}
	/**
	 * Get MpMax value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getMpMax()
	{
		return $this->MpMax;
	}
	/**
	 * Set MpMax value
	 * @param PayPalStructBasicAmountType $_mpMax the MpMax
	 * @return PayPalStructBasicAmountType
	 */
	public function setMpMax($_mpMax)
	{
		return ($this->MpMax = $_mpMax);
	}
	/**
	 * Get MpCustom value
	 * @return string|null
	 */
	public function getMpCustom()
	{
		return $this->MpCustom;
	}
	/**
	 * Set MpCustom value
	 * @param string $_mpCustom the MpCustom
	 * @return string
	 */
	public function setMpCustom($_mpCustom)
	{
		return ($this->MpCustom = $_mpCustom);
	}
	/**
	 * Get Desc value
	 * @return string|null
	 */
	public function getDesc()
	{
		return $this->Desc;
	}
	/**
	 * Set Desc value
	 * @param string $_desc the Desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->Desc = $_desc);
	}
	/**
	 * Get Invoice value
	 * @return string|null
	 */
	public function getInvoice()
	{
		return $this->Invoice;
	}
	/**
	 * Set Invoice value
	 * @param string $_invoice the Invoice
	 * @return string
	 */
	public function setInvoice($_invoice)
	{
		return ($this->Invoice = $_invoice);
	}
	/**
	 * Get Custom value
	 * @return string|null
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set Custom value
	 * @param string $_custom the Custom
	 * @return string
	 */
	public function setCustom($_custom)
	{
		return ($this->Custom = $_custom);
	}
	/**
	 * Get PaymentSourceID value
	 * @return string|null
	 */
	public function getPaymentSourceID()
	{
		return $this->PaymentSourceID;
	}
	/**
	 * Set PaymentSourceID value
	 * @param string $_paymentSourceID the PaymentSourceID
	 * @return string
	 */
	public function setPaymentSourceID($_paymentSourceID)
	{
		return ($this->PaymentSourceID = $_paymentSourceID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructMerchantPullInfoType
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