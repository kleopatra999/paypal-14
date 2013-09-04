<?php
/**
 * File for class PayPalStructBillAgreementUpdateReq
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBillAgreementUpdateReq originally named BillAgreementUpdateReq
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBillAgreementUpdateReq extends PayPalWsdlClass
{
	/**
	 * The BAUpdateRequest
	 * @var PayPalStructBAUpdateRequestType
	 */
	public $BAUpdateRequest;
	/**
	 * Constructor method for BillAgreementUpdateReq
	 * @see parent::__construct()
	 * @param PayPalStructBAUpdateRequestType $_bAUpdateRequest
	 * @return PayPalStructBillAgreementUpdateReq
	 */
	public function __construct($_bAUpdateRequest = NULL)
	{
		parent::__construct(array('BAUpdateRequest'=>$_bAUpdateRequest));
	}
	/**
	 * Get BAUpdateRequest value
	 * @return PayPalStructBAUpdateRequestType|null
	 */
	public function getBAUpdateRequest()
	{
		return $this->BAUpdateRequest;
	}
	/**
	 * Set BAUpdateRequest value
	 * @param PayPalStructBAUpdateRequestType $_bAUpdateRequest the BAUpdateRequest
	 * @return PayPalStructBAUpdateRequestType
	 */
	public function setBAUpdateRequest($_bAUpdateRequest)
	{
		return ($this->BAUpdateRequest = $_bAUpdateRequest);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBillAgreementUpdateReq
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