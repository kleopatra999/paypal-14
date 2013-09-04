<?php
/**
 * File for class PayPalStructBAUpdateResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBAUpdateResponseType originally named BAUpdateResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBAUpdateResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The BAUpdateResponseDetails
	 * @var PayPalStructBAUpdateResponseDetailsType
	 */
	public $BAUpdateResponseDetails;
	/**
	 * Constructor method for BAUpdateResponseType
	 * @see parent::__construct()
	 * @param PayPalStructBAUpdateResponseDetailsType $_bAUpdateResponseDetails
	 * @return PayPalStructBAUpdateResponseType
	 */
	public function __construct($_bAUpdateResponseDetails = NULL)
	{
		PayPalWsdlClass::__construct(array('BAUpdateResponseDetails'=>$_bAUpdateResponseDetails));
	}
	/**
	 * Get BAUpdateResponseDetails value
	 * @return PayPalStructBAUpdateResponseDetailsType|null
	 */
	public function getBAUpdateResponseDetails()
	{
		return $this->BAUpdateResponseDetails;
	}
	/**
	 * Set BAUpdateResponseDetails value
	 * @param PayPalStructBAUpdateResponseDetailsType $_bAUpdateResponseDetails the BAUpdateResponseDetails
	 * @return PayPalStructBAUpdateResponseDetailsType
	 */
	public function setBAUpdateResponseDetails($_bAUpdateResponseDetails)
	{
		return ($this->BAUpdateResponseDetails = $_bAUpdateResponseDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBAUpdateResponseType
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