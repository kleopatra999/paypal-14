<?php
/**
 * File for class PayPalStructPaymentTransactionSearchResultType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaymentTransactionSearchResultType originally named PaymentTransactionSearchResultType
 * Documentation : PaymentTransactionSearchResultType Results from a PaymentTransaction search The transaction ID of the seller
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaymentTransactionSearchResultType extends PayPalWsdlClass
{
	/**
	 * The Timestamp
	 * Meta informations extracted from the WSDL
	 * - documentation : The date and time (in UTC/GMT format) the transaction occurred
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Timezone
	 * Meta informations extracted from the WSDL
	 * - documentation : The time zone of the transaction
	 * @var string
	 */
	public $Timezone;
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of the transaction
	 * @var string
	 */
	public $Type;
	/**
	 * The Payer
	 * Meta informations extracted from the WSDL
	 * - documentation : The email address of the payer
	 * @var string
	 */
	public $Payer;
	/**
	 * The PayerDisplayName
	 * Meta informations extracted from the WSDL
	 * - documentation : Display name of the payer
	 * @var string
	 */
	public $PayerDisplayName;
	/**
	 * The TransactionID
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : The status of the transaction
	 * @var string
	 */
	public $Status;
	/**
	 * The GrossAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : The total gross amount charged, including any profile shipping cost and taxes
	 * @var PayPalStructBasicAmountType
	 */
	public $GrossAmount;
	/**
	 * The FeeAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : The fee that PayPal charged for the transaction
	 * @var PayPalStructBasicAmountType
	 */
	public $FeeAmount;
	/**
	 * The NetAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : The net amount of the transaction
	 * @var PayPalStructBasicAmountType
	 */
	public $NetAmount;
	/**
	 * Constructor method for PaymentTransactionSearchResultType
	 * @see parent::__construct()
	 * @param dateTime $_timestamp
	 * @param string $_timezone
	 * @param string $_type
	 * @param string $_payer
	 * @param string $_payerDisplayName
	 * @param string $_transactionID
	 * @param string $_status
	 * @param PayPalStructBasicAmountType $_grossAmount
	 * @param PayPalStructBasicAmountType $_feeAmount
	 * @param PayPalStructBasicAmountType $_netAmount
	 * @return PayPalStructPaymentTransactionSearchResultType
	 */
	public function __construct($_timestamp = NULL,$_timezone = NULL,$_type = NULL,$_payer = NULL,$_payerDisplayName = NULL,$_transactionID = NULL,$_status = NULL,$_grossAmount = NULL,$_feeAmount = NULL,$_netAmount = NULL)
	{
		parent::__construct(array('Timestamp'=>$_timestamp,'Timezone'=>$_timezone,'Type'=>$_type,'Payer'=>$_payer,'PayerDisplayName'=>$_payerDisplayName,'TransactionID'=>$_transactionID,'Status'=>$_status,'GrossAmount'=>$_grossAmount,'FeeAmount'=>$_feeAmount,'NetAmount'=>$_netAmount));
	}
	/**
	 * Get Timestamp value
	 * @return dateTime|null
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Timestamp value
	 * @param dateTime $_timestamp the Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->Timestamp = $_timestamp);
	}
	/**
	 * Get Timezone value
	 * @return string|null
	 */
	public function getTimezone()
	{
		return $this->Timezone;
	}
	/**
	 * Set Timezone value
	 * @param string $_timezone the Timezone
	 * @return string
	 */
	public function setTimezone($_timezone)
	{
		return ($this->Timezone = $_timezone);
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
	 * Get Payer value
	 * @return string|null
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set Payer value
	 * @param string $_payer the Payer
	 * @return string
	 */
	public function setPayer($_payer)
	{
		return ($this->Payer = $_payer);
	}
	/**
	 * Get PayerDisplayName value
	 * @return string|null
	 */
	public function getPayerDisplayName()
	{
		return $this->PayerDisplayName;
	}
	/**
	 * Set PayerDisplayName value
	 * @param string $_payerDisplayName the PayerDisplayName
	 * @return string
	 */
	public function setPayerDisplayName($_payerDisplayName)
	{
		return ($this->PayerDisplayName = $_payerDisplayName);
	}
	/**
	 * Get TransactionID value
	 * @return string|null
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionID value
	 * @param string $_transactionID the TransactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->TransactionID = $_transactionID);
	}
	/**
	 * Get Status value
	 * @return string|null
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
	 * Get GrossAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getGrossAmount()
	{
		return $this->GrossAmount;
	}
	/**
	 * Set GrossAmount value
	 * @param PayPalStructBasicAmountType $_grossAmount the GrossAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setGrossAmount($_grossAmount)
	{
		return ($this->GrossAmount = $_grossAmount);
	}
	/**
	 * Get FeeAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getFeeAmount()
	{
		return $this->FeeAmount;
	}
	/**
	 * Set FeeAmount value
	 * @param PayPalStructBasicAmountType $_feeAmount the FeeAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setFeeAmount($_feeAmount)
	{
		return ($this->FeeAmount = $_feeAmount);
	}
	/**
	 * Get NetAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getNetAmount()
	{
		return $this->NetAmount;
	}
	/**
	 * Set NetAmount value
	 * @param PayPalStructBasicAmountType $_netAmount the NetAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setNetAmount($_netAmount)
	{
		return ($this->NetAmount = $_netAmount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaymentTransactionSearchResultType
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