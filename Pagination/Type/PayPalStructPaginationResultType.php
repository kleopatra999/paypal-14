<?php
/**
 * File for class PayPalStructPaginationResultType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaginationResultType originally named PaginationResultType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaginationResultType extends PayPalWsdlClass
{
	/**
	 * The TotalNumberOfPages
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalNumberOfPages;
	/**
	 * The TotalNumberOfEntries
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalNumberOfEntries;
	/**
	 * Constructor method for PaginationResultType
	 * @see parent::__construct()
	 * @param int $_totalNumberOfPages
	 * @param int $_totalNumberOfEntries
	 * @return PayPalStructPaginationResultType
	 */
	public function __construct($_totalNumberOfPages = NULL,$_totalNumberOfEntries = NULL)
	{
		parent::__construct(array('TotalNumberOfPages'=>$_totalNumberOfPages,'TotalNumberOfEntries'=>$_totalNumberOfEntries));
	}
	/**
	 * Get TotalNumberOfPages value
	 * @return int|null
	 */
	public function getTotalNumberOfPages()
	{
		return $this->TotalNumberOfPages;
	}
	/**
	 * Set TotalNumberOfPages value
	 * @param int $_totalNumberOfPages the TotalNumberOfPages
	 * @return int
	 */
	public function setTotalNumberOfPages($_totalNumberOfPages)
	{
		return ($this->TotalNumberOfPages = $_totalNumberOfPages);
	}
	/**
	 * Get TotalNumberOfEntries value
	 * @return int|null
	 */
	public function getTotalNumberOfEntries()
	{
		return $this->TotalNumberOfEntries;
	}
	/**
	 * Set TotalNumberOfEntries value
	 * @param int $_totalNumberOfEntries the TotalNumberOfEntries
	 * @return int
	 */
	public function setTotalNumberOfEntries($_totalNumberOfEntries)
	{
		return ($this->TotalNumberOfEntries = $_totalNumberOfEntries);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaginationResultType
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