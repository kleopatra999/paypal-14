<?php
/**
 * File for class PayPalStructPaginationType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructPaginationType originally named PaginationType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructPaginationType extends PayPalWsdlClass
{
	/**
	 * The EntriesPerPage
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $EntriesPerPage;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * Constructor method for PaginationType
	 * @see parent::__construct()
	 * @param int $_entriesPerPage
	 * @param int $_pageNumber
	 * @return PayPalStructPaginationType
	 */
	public function __construct($_entriesPerPage = NULL,$_pageNumber = NULL)
	{
		parent::__construct(array('EntriesPerPage'=>$_entriesPerPage,'PageNumber'=>$_pageNumber));
	}
	/**
	 * Get EntriesPerPage value
	 * @return int|null
	 */
	public function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}
	/**
	 * Set EntriesPerPage value
	 * @param int $_entriesPerPage the EntriesPerPage
	 * @return int
	 */
	public function setEntriesPerPage($_entriesPerPage)
	{
		return ($this->EntriesPerPage = $_entriesPerPage);
	}
	/**
	 * Get PageNumber value
	 * @return int|null
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set PageNumber value
	 * @param int $_pageNumber the PageNumber
	 * @return int
	 */
	public function setPageNumber($_pageNumber)
	{
		return ($this->PageNumber = $_pageNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructPaginationType
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