<?php
/**
 * File for class PayPalStructCreditCardNumberTypeType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreditCardNumberTypeType originally named CreditCardNumberTypeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreditCardNumberTypeType extends PayPalWsdlClass
{
	/**
	 * The CreditCardType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumCreditCardTypeType
	 */
	public $CreditCardType;
	/**
	 * The CreditCardNumber
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CreditCardNumber;
	/**
	 * Constructor method for CreditCardNumberTypeType
	 * @see parent::__construct()
	 * @param PayPalEnumCreditCardTypeType $_creditCardType
	 * @param string $_creditCardNumber
	 * @return PayPalStructCreditCardNumberTypeType
	 */
	public function __construct($_creditCardType = NULL,$_creditCardNumber = NULL)
	{
		parent::__construct(array('CreditCardType'=>$_creditCardType,'CreditCardNumber'=>$_creditCardNumber));
	}
	/**
	 * Get CreditCardType value
	 * @return PayPalEnumCreditCardTypeType|null
	 */
	public function getCreditCardType()
	{
		return $this->CreditCardType;
	}
	/**
	 * Set CreditCardType value
	 * @uses PayPalEnumCreditCardTypeType::valueIsValid()
	 * @param PayPalEnumCreditCardTypeType $_creditCardType the CreditCardType
	 * @return PayPalEnumCreditCardTypeType
	 */
	public function setCreditCardType($_creditCardType)
	{
		if(!PayPalEnumCreditCardTypeType::valueIsValid($_creditCardType))
		{
			return false;
		}
		return ($this->CreditCardType = $_creditCardType);
	}
	/**
	 * Get CreditCardNumber value
	 * @return string|null
	 */
	public function getCreditCardNumber()
	{
		return $this->CreditCardNumber;
	}
	/**
	 * Set CreditCardNumber value
	 * @param string $_creditCardNumber the CreditCardNumber
	 * @return string
	 */
	public function setCreditCardNumber($_creditCardNumber)
	{
		return ($this->CreditCardNumber = $_creditCardNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreditCardNumberTypeType
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