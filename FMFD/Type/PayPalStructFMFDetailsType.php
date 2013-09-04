<?php
/**
 * File for class PayPalStructFMFDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructFMFDetailsType originally named FMFDetailsType
 * Documentation : Thes are filters that could result in accept/deny/pending action.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructFMFDetailsType extends PayPalWsdlClass
{
	/**
	 * The AcceptFilters
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructRiskFilterListType
	 */
	public $AcceptFilters;
	/**
	 * The PendingFilters
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructRiskFilterListType
	 */
	public $PendingFilters;
	/**
	 * The DenyFilters
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructRiskFilterListType
	 */
	public $DenyFilters;
	/**
	 * The ReportFilters
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructRiskFilterListType
	 */
	public $ReportFilters;
	/**
	 * Constructor method for FMFDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructRiskFilterListType $_acceptFilters
	 * @param PayPalStructRiskFilterListType $_pendingFilters
	 * @param PayPalStructRiskFilterListType $_denyFilters
	 * @param PayPalStructRiskFilterListType $_reportFilters
	 * @return PayPalStructFMFDetailsType
	 */
	public function __construct($_acceptFilters = NULL,$_pendingFilters = NULL,$_denyFilters = NULL,$_reportFilters = NULL)
	{
		parent::__construct(array('AcceptFilters'=>$_acceptFilters,'PendingFilters'=>$_pendingFilters,'DenyFilters'=>$_denyFilters,'ReportFilters'=>$_reportFilters));
	}
	/**
	 * Get AcceptFilters value
	 * @return PayPalStructRiskFilterListType|null
	 */
	public function getAcceptFilters()
	{
		return $this->AcceptFilters;
	}
	/**
	 * Set AcceptFilters value
	 * @param PayPalStructRiskFilterListType $_acceptFilters the AcceptFilters
	 * @return PayPalStructRiskFilterListType
	 */
	public function setAcceptFilters($_acceptFilters)
	{
		return ($this->AcceptFilters = $_acceptFilters);
	}
	/**
	 * Get PendingFilters value
	 * @return PayPalStructRiskFilterListType|null
	 */
	public function getPendingFilters()
	{
		return $this->PendingFilters;
	}
	/**
	 * Set PendingFilters value
	 * @param PayPalStructRiskFilterListType $_pendingFilters the PendingFilters
	 * @return PayPalStructRiskFilterListType
	 */
	public function setPendingFilters($_pendingFilters)
	{
		return ($this->PendingFilters = $_pendingFilters);
	}
	/**
	 * Get DenyFilters value
	 * @return PayPalStructRiskFilterListType|null
	 */
	public function getDenyFilters()
	{
		return $this->DenyFilters;
	}
	/**
	 * Set DenyFilters value
	 * @param PayPalStructRiskFilterListType $_denyFilters the DenyFilters
	 * @return PayPalStructRiskFilterListType
	 */
	public function setDenyFilters($_denyFilters)
	{
		return ($this->DenyFilters = $_denyFilters);
	}
	/**
	 * Get ReportFilters value
	 * @return PayPalStructRiskFilterListType|null
	 */
	public function getReportFilters()
	{
		return $this->ReportFilters;
	}
	/**
	 * Set ReportFilters value
	 * @param PayPalStructRiskFilterListType $_reportFilters the ReportFilters
	 * @return PayPalStructRiskFilterListType
	 */
	public function setReportFilters($_reportFilters)
	{
		return ($this->ReportFilters = $_reportFilters);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructFMFDetailsType
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