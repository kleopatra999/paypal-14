<?php
/**
 * File for class PayPalStructBMButtonSearchResponseType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMButtonSearchResponseType originally named BMButtonSearchResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMButtonSearchResponseType extends PayPalStructAbstractResponseType
{
	/**
	 * The ButtonSearchResult
	 * @var PayPalStructButtonSearchResultType
	 */
	public $ButtonSearchResult;
	/**
	 * Constructor method for BMButtonSearchResponseType
	 * @see parent::__construct()
	 * @param PayPalStructButtonSearchResultType $_buttonSearchResult
	 * @return PayPalStructBMButtonSearchResponseType
	 */
	public function __construct($_buttonSearchResult = NULL)
	{
		PayPalWsdlClass::__construct(array('ButtonSearchResult'=>$_buttonSearchResult));
	}
	/**
	 * Get ButtonSearchResult value
	 * @return PayPalStructButtonSearchResultType|null
	 */
	public function getButtonSearchResult()
	{
		return $this->ButtonSearchResult;
	}
	/**
	 * Set ButtonSearchResult value
	 * @param PayPalStructButtonSearchResultType $_buttonSearchResult the ButtonSearchResult
	 * @return PayPalStructButtonSearchResultType
	 */
	public function setButtonSearchResult($_buttonSearchResult)
	{
		return ($this->ButtonSearchResult = $_buttonSearchResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMButtonSearchResponseType
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