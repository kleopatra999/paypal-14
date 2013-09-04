<?php
/**
 * File for class PayPalStructCreateBillingAgreementResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructCreateBillingAgreementResponseType originally named CreateBillingAgreementResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructCreateBillingAgreementResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The BillingAgreementID
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $BillingAgreementID;
	/**
	 * Constructor method for CreateBillingAgreementResponseType
	 * @see parent::__construct()
	 * @param string $_billingAgreementID
	 * @return PayPalStructCreateBillingAgreementResponseType
	 */
	public function __construct($_billingAgreementID)
	{
		PayPalWsdlClass::__construct(array('BillingAgreementID'=>$_billingAgreementID));
	}
	/**
	 * Get BillingAgreementID value
	 * @return string
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
	}
	/**
	 * Set BillingAgreementID value
	 * @param string $_billingAgreementID the BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_billingAgreementID)
	{
		return ($this->BillingAgreementID = $_billingAgreementID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructCreateBillingAgreementResponseType
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