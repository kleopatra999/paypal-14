<?php
/**
 * File for class PayPalStructOtherPaymentMethodDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructOtherPaymentMethodDetailsType originally named OtherPaymentMethodDetailsType
 * Documentation : Lists the Payment Methods (other than PayPal) that the use can pay with e.g. Money Order. Optional.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructOtherPaymentMethodDetailsType extends PayPalWsdlClass
{
	/**
	 * The OtherPaymentMethodId
	 * Meta informations extracted from the WSDL
	 * - documentation : The identifier of the Payment Method.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodId;
	/**
	 * The OtherPaymentMethodType
	 * Meta informations extracted from the WSDL
	 * - documentation : Valid values are 'Method', 'SubMethod'.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodType;
	/**
	 * The OtherPaymentMethodLabel
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the Payment Method.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodLabel;
	/**
	 * The OtherPaymentMethodLabelDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : The short description of the Payment Method, goes along with the label.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodLabelDescription;
	/**
	 * The OtherPaymentMethodLongDescriptionTitle
	 * Meta informations extracted from the WSDL
	 * - documentation : The title for the long description.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodLongDescriptionTitle;
	/**
	 * The OtherPaymentMethodLongDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : The long description of the Payment Method.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodLongDescription;
	/**
	 * The OtherPaymentMethodIcon
	 * Meta informations extracted from the WSDL
	 * - documentation : The icon of the Payment Method.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OtherPaymentMethodIcon;
	/**
	 * The OtherPaymentMethodHideLabel
	 * Meta informations extracted from the WSDL
	 * - documentation : If this flag is true, then OtherPaymentMethodIcon is required to have a valid value; the label will be hidden and only ICON will be shown.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $OtherPaymentMethodHideLabel;
	/**
	 * Constructor method for OtherPaymentMethodDetailsType
	 * @see parent::__construct()
	 * @param string $_otherPaymentMethodId
	 * @param string $_otherPaymentMethodType
	 * @param string $_otherPaymentMethodLabel
	 * @param string $_otherPaymentMethodLabelDescription
	 * @param string $_otherPaymentMethodLongDescriptionTitle
	 * @param string $_otherPaymentMethodLongDescription
	 * @param string $_otherPaymentMethodIcon
	 * @param boolean $_otherPaymentMethodHideLabel
	 * @return PayPalStructOtherPaymentMethodDetailsType
	 */
	public function __construct($_otherPaymentMethodId = NULL,$_otherPaymentMethodType = NULL,$_otherPaymentMethodLabel = NULL,$_otherPaymentMethodLabelDescription = NULL,$_otherPaymentMethodLongDescriptionTitle = NULL,$_otherPaymentMethodLongDescription = NULL,$_otherPaymentMethodIcon = NULL,$_otherPaymentMethodHideLabel = NULL)
	{
		parent::__construct(array('OtherPaymentMethodId'=>$_otherPaymentMethodId,'OtherPaymentMethodType'=>$_otherPaymentMethodType,'OtherPaymentMethodLabel'=>$_otherPaymentMethodLabel,'OtherPaymentMethodLabelDescription'=>$_otherPaymentMethodLabelDescription,'OtherPaymentMethodLongDescriptionTitle'=>$_otherPaymentMethodLongDescriptionTitle,'OtherPaymentMethodLongDescription'=>$_otherPaymentMethodLongDescription,'OtherPaymentMethodIcon'=>$_otherPaymentMethodIcon,'OtherPaymentMethodHideLabel'=>$_otherPaymentMethodHideLabel));
	}
	/**
	 * Get OtherPaymentMethodId value
	 * @return string|null
	 */
	public function getOtherPaymentMethodId()
	{
		return $this->OtherPaymentMethodId;
	}
	/**
	 * Set OtherPaymentMethodId value
	 * @param string $_otherPaymentMethodId the OtherPaymentMethodId
	 * @return string
	 */
	public function setOtherPaymentMethodId($_otherPaymentMethodId)
	{
		return ($this->OtherPaymentMethodId = $_otherPaymentMethodId);
	}
	/**
	 * Get OtherPaymentMethodType value
	 * @return string|null
	 */
	public function getOtherPaymentMethodType()
	{
		return $this->OtherPaymentMethodType;
	}
	/**
	 * Set OtherPaymentMethodType value
	 * @param string $_otherPaymentMethodType the OtherPaymentMethodType
	 * @return string
	 */
	public function setOtherPaymentMethodType($_otherPaymentMethodType)
	{
		return ($this->OtherPaymentMethodType = $_otherPaymentMethodType);
	}
	/**
	 * Get OtherPaymentMethodLabel value
	 * @return string|null
	 */
	public function getOtherPaymentMethodLabel()
	{
		return $this->OtherPaymentMethodLabel;
	}
	/**
	 * Set OtherPaymentMethodLabel value
	 * @param string $_otherPaymentMethodLabel the OtherPaymentMethodLabel
	 * @return string
	 */
	public function setOtherPaymentMethodLabel($_otherPaymentMethodLabel)
	{
		return ($this->OtherPaymentMethodLabel = $_otherPaymentMethodLabel);
	}
	/**
	 * Get OtherPaymentMethodLabelDescription value
	 * @return string|null
	 */
	public function getOtherPaymentMethodLabelDescription()
	{
		return $this->OtherPaymentMethodLabelDescription;
	}
	/**
	 * Set OtherPaymentMethodLabelDescription value
	 * @param string $_otherPaymentMethodLabelDescription the OtherPaymentMethodLabelDescription
	 * @return string
	 */
	public function setOtherPaymentMethodLabelDescription($_otherPaymentMethodLabelDescription)
	{
		return ($this->OtherPaymentMethodLabelDescription = $_otherPaymentMethodLabelDescription);
	}
	/**
	 * Get OtherPaymentMethodLongDescriptionTitle value
	 * @return string|null
	 */
	public function getOtherPaymentMethodLongDescriptionTitle()
	{
		return $this->OtherPaymentMethodLongDescriptionTitle;
	}
	/**
	 * Set OtherPaymentMethodLongDescriptionTitle value
	 * @param string $_otherPaymentMethodLongDescriptionTitle the OtherPaymentMethodLongDescriptionTitle
	 * @return string
	 */
	public function setOtherPaymentMethodLongDescriptionTitle($_otherPaymentMethodLongDescriptionTitle)
	{
		return ($this->OtherPaymentMethodLongDescriptionTitle = $_otherPaymentMethodLongDescriptionTitle);
	}
	/**
	 * Get OtherPaymentMethodLongDescription value
	 * @return string|null
	 */
	public function getOtherPaymentMethodLongDescription()
	{
		return $this->OtherPaymentMethodLongDescription;
	}
	/**
	 * Set OtherPaymentMethodLongDescription value
	 * @param string $_otherPaymentMethodLongDescription the OtherPaymentMethodLongDescription
	 * @return string
	 */
	public function setOtherPaymentMethodLongDescription($_otherPaymentMethodLongDescription)
	{
		return ($this->OtherPaymentMethodLongDescription = $_otherPaymentMethodLongDescription);
	}
	/**
	 * Get OtherPaymentMethodIcon value
	 * @return string|null
	 */
	public function getOtherPaymentMethodIcon()
	{
		return $this->OtherPaymentMethodIcon;
	}
	/**
	 * Set OtherPaymentMethodIcon value
	 * @param string $_otherPaymentMethodIcon the OtherPaymentMethodIcon
	 * @return string
	 */
	public function setOtherPaymentMethodIcon($_otherPaymentMethodIcon)
	{
		return ($this->OtherPaymentMethodIcon = $_otherPaymentMethodIcon);
	}
	/**
	 * Get OtherPaymentMethodHideLabel value
	 * @return boolean|null
	 */
	public function getOtherPaymentMethodHideLabel()
	{
		return $this->OtherPaymentMethodHideLabel;
	}
	/**
	 * Set OtherPaymentMethodHideLabel value
	 * @param boolean $_otherPaymentMethodHideLabel the OtherPaymentMethodHideLabel
	 * @return boolean
	 */
	public function setOtherPaymentMethodHideLabel($_otherPaymentMethodHideLabel)
	{
		return ($this->OtherPaymentMethodHideLabel = $_otherPaymentMethodHideLabel);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructOtherPaymentMethodDetailsType
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