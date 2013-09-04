<?php
/**
 * File for class PayPalStructDoNonReferencedCreditRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructDoNonReferencedCreditRequestDetailsType originally named DoNonReferencedCreditRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructDoNonReferencedCreditRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * @var PayPalStructBasicAmountType
	 */
	public $Amount;
	/**
	 * The NetAmount
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $NetAmount;
	/**
	 * The TaxAmount
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The ShippingAmount
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The CreditCard
	 * @var PayPalStructCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The ReceiverEmail
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReceiverEmail;
	/**
	 * The Comment
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Comment;
	/**
	 * Constructor method for DoNonReferencedCreditRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_amount
	 * @param PayPalStructBasicAmountType $_netAmount
	 * @param PayPalStructBasicAmountType $_taxAmount
	 * @param PayPalStructBasicAmountType $_shippingAmount
	 * @param PayPalStructCreditCardDetailsType $_creditCard
	 * @param string $_receiverEmail
	 * @param string $_comment
	 * @return PayPalStructDoNonReferencedCreditRequestDetailsType
	 */
	public function __construct($_amount = NULL,$_netAmount = NULL,$_taxAmount = NULL,$_shippingAmount = NULL,$_creditCard = NULL,$_receiverEmail = NULL,$_comment = NULL)
	{
		parent::__construct(array('Amount'=>$_amount,'NetAmount'=>$_netAmount,'TaxAmount'=>$_taxAmount,'ShippingAmount'=>$_shippingAmount,'CreditCard'=>$_creditCard,'ReceiverEmail'=>$_receiverEmail,'Comment'=>$_comment));
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
	 * Get TaxAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set TaxAmount value
	 * @param PayPalStructBasicAmountType $_taxAmount the TaxAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setTaxAmount($_taxAmount)
	{
		return ($this->TaxAmount = $_taxAmount);
	}
	/**
	 * Get ShippingAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set ShippingAmount value
	 * @param PayPalStructBasicAmountType $_shippingAmount the ShippingAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setShippingAmount($_shippingAmount)
	{
		return ($this->ShippingAmount = $_shippingAmount);
	}
	/**
	 * Get CreditCard value
	 * @return PayPalStructCreditCardDetailsType|null
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set CreditCard value
	 * @param PayPalStructCreditCardDetailsType $_creditCard the CreditCard
	 * @return PayPalStructCreditCardDetailsType
	 */
	public function setCreditCard($_creditCard)
	{
		return ($this->CreditCard = $_creditCard);
	}
	/**
	 * Get ReceiverEmail value
	 * @return string|null
	 */
	public function getReceiverEmail()
	{
		return $this->ReceiverEmail;
	}
	/**
	 * Set ReceiverEmail value
	 * @param string $_receiverEmail the ReceiverEmail
	 * @return string
	 */
	public function setReceiverEmail($_receiverEmail)
	{
		return ($this->ReceiverEmail = $_receiverEmail);
	}
	/**
	 * Get Comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->Comment;
	}
	/**
	 * Set Comment value
	 * @param string $_comment the Comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->Comment = $_comment);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructDoNonReferencedCreditRequestDetailsType
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