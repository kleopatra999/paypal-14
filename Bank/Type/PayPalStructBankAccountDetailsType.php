<?php
/**
 * File for class PayPalStructBankAccountDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBankAccountDetailsType originally named BankAccountDetailsType
 * Documentation : BankAccountDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBankAccountDetailsType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of bank Character length and limitations: 192 alphanumeric characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of bank account: Checking or Savings
	 * @var PayPalEnumBankAccountTypeType
	 */
	public $Type;
	/**
	 * The RoutingNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs bank routing number Character length and limitations: 23 alphanumeric characters
	 * @var string
	 */
	public $RoutingNumber;
	/**
	 * The AccountNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchantâs bank account number Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $AccountNumber;
	/**
	 * Constructor method for BankAccountDetailsType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param PayPalEnumBankAccountTypeType $_type
	 * @param string $_routingNumber
	 * @param string $_accountNumber
	 * @return PayPalStructBankAccountDetailsType
	 */
	public function __construct($_name = NULL,$_type = NULL,$_routingNumber = NULL,$_accountNumber = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Type'=>$_type,'RoutingNumber'=>$_routingNumber,'AccountNumber'=>$_accountNumber));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Type value
	 * @return PayPalEnumBankAccountTypeType|null
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @uses PayPalEnumBankAccountTypeType::valueIsValid()
	 * @param PayPalEnumBankAccountTypeType $_type the Type
	 * @return PayPalEnumBankAccountTypeType
	 */
	public function setType($_type)
	{
		if(!PayPalEnumBankAccountTypeType::valueIsValid($_type))
		{
			return false;
		}
		return ($this->Type = $_type);
	}
	/**
	 * Get RoutingNumber value
	 * @return string|null
	 */
	public function getRoutingNumber()
	{
		return $this->RoutingNumber;
	}
	/**
	 * Set RoutingNumber value
	 * @param string $_routingNumber the RoutingNumber
	 * @return string
	 */
	public function setRoutingNumber($_routingNumber)
	{
		return ($this->RoutingNumber = $_routingNumber);
	}
	/**
	 * Get AccountNumber value
	 * @return string|null
	 */
	public function getAccountNumber()
	{
		return $this->AccountNumber;
	}
	/**
	 * Set AccountNumber value
	 * @param string $_accountNumber the AccountNumber
	 * @return string
	 */
	public function setAccountNumber($_accountNumber)
	{
		return ($this->AccountNumber = $_accountNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBankAccountDetailsType
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