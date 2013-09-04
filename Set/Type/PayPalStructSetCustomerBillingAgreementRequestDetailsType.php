<?php
/**
 * File for class PayPalStructSetCustomerBillingAgreementRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetCustomerBillingAgreementRequestDetailsType originally named SetCustomerBillingAgreementRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetCustomerBillingAgreementRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingAgreementDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var PayPalStructBillingAgreementDetailsType
	 */
	public $BillingAgreementDetails;
	/**
	 * The ReturnURL
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The LocaleCode
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $LocaleCode;
	/**
	 * The PageStyle
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PageStyle;
	/**
	 * The cpp-header-image
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_image;
	/**
	 * The cpp-header-border-color
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_border_color;
	/**
	 * The cpp-header-back-color
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_back_color;
	/**
	 * The cpp-payflow-color
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_payflow_color;
	/**
	 * The BuyerEmail
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerEmail;
	/**
	 * The ReqBillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin. Optional Character length and limitations: One single-byte numeric character.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReqBillingAddress;
	/**
	 * Constructor method for SetCustomerBillingAgreementRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBillingAgreementDetailsType $_billingAgreementDetails
	 * @param string $_returnURL
	 * @param string $_cancelURL
	 * @param string $_localeCode
	 * @param string $_pageStyle
	 * @param string $_cpp_header_image
	 * @param string $_cpp_header_border_color
	 * @param string $_cpp_header_back_color
	 * @param string $_cpp_payflow_color
	 * @param string $_buyerEmail
	 * @param string $_reqBillingAddress
	 * @return PayPalStructSetCustomerBillingAgreementRequestDetailsType
	 */
	public function __construct($_billingAgreementDetails,$_returnURL,$_cancelURL,$_localeCode = NULL,$_pageStyle = NULL,$_cpp_header_image = NULL,$_cpp_header_border_color = NULL,$_cpp_header_back_color = NULL,$_cpp_payflow_color = NULL,$_buyerEmail = NULL,$_reqBillingAddress = NULL)
	{
		parent::__construct(array('BillingAgreementDetails'=>$_billingAgreementDetails,'ReturnURL'=>$_returnURL,'CancelURL'=>$_cancelURL,'LocaleCode'=>$_localeCode,'PageStyle'=>$_pageStyle,'cpp_header_image'=>$_cpp_header_image,'cpp_header_border_color'=>$_cpp_header_border_color,'cpp_header_back_color'=>$_cpp_header_back_color,'cpp_payflow_color'=>$_cpp_payflow_color,'BuyerEmail'=>$_buyerEmail,'ReqBillingAddress'=>$_reqBillingAddress));
	}
	/**
	 * Get BillingAgreementDetails value
	 * @return PayPalStructBillingAgreementDetailsType
	 */
	public function getBillingAgreementDetails()
	{
		return $this->BillingAgreementDetails;
	}
	/**
	 * Set BillingAgreementDetails value
	 * @param PayPalStructBillingAgreementDetailsType $_billingAgreementDetails the BillingAgreementDetails
	 * @return PayPalStructBillingAgreementDetailsType
	 */
	public function setBillingAgreementDetails($_billingAgreementDetails)
	{
		return ($this->BillingAgreementDetails = $_billingAgreementDetails);
	}
	/**
	 * Get ReturnURL value
	 * @return string
	 */
	public function getReturnURL()
	{
		return $this->ReturnURL;
	}
	/**
	 * Set ReturnURL value
	 * @param string $_returnURL the ReturnURL
	 * @return string
	 */
	public function setReturnURL($_returnURL)
	{
		return ($this->ReturnURL = $_returnURL);
	}
	/**
	 * Get CancelURL value
	 * @return string
	 */
	public function getCancelURL()
	{
		return $this->CancelURL;
	}
	/**
	 * Set CancelURL value
	 * @param string $_cancelURL the CancelURL
	 * @return string
	 */
	public function setCancelURL($_cancelURL)
	{
		return ($this->CancelURL = $_cancelURL);
	}
	/**
	 * Get LocaleCode value
	 * @return string|null
	 */
	public function getLocaleCode()
	{
		return $this->LocaleCode;
	}
	/**
	 * Set LocaleCode value
	 * @param string $_localeCode the LocaleCode
	 * @return string
	 */
	public function setLocaleCode($_localeCode)
	{
		return ($this->LocaleCode = $_localeCode);
	}
	/**
	 * Get PageStyle value
	 * @return string|null
	 */
	public function getPageStyle()
	{
		return $this->PageStyle;
	}
	/**
	 * Set PageStyle value
	 * @param string $_pageStyle the PageStyle
	 * @return string
	 */
	public function setPageStyle($_pageStyle)
	{
		return ($this->PageStyle = $_pageStyle);
	}
	/**
	 * Get cpp-header-image value
	 * @return string|null
	 */
	public function getCpp_header_image()
	{
		return $this->{'cpp-header-image'};
	}
	/**
	 * Set cpp-header-image value
	 * @param string $_cpp_header_image the cpp-header-image
	 * @return string
	 */
	public function setCpp_header_image($_cpp_header_image)
	{
		return ($this->cpp_header_image = $this->{'cpp-header-image'} = $_cpp_header_image);
	}
	/**
	 * Get cpp-header-border-color value
	 * @return string|null
	 */
	public function getCpp_header_border_color()
	{
		return $this->{'cpp-header-border-color'};
	}
	/**
	 * Set cpp-header-border-color value
	 * @param string $_cpp_header_border_color the cpp-header-border-color
	 * @return string
	 */
	public function setCpp_header_border_color($_cpp_header_border_color)
	{
		return ($this->cpp_header_border_color = $this->{'cpp-header-border-color'} = $_cpp_header_border_color);
	}
	/**
	 * Get cpp-header-back-color value
	 * @return string|null
	 */
	public function getCpp_header_back_color()
	{
		return $this->{'cpp-header-back-color'};
	}
	/**
	 * Set cpp-header-back-color value
	 * @param string $_cpp_header_back_color the cpp-header-back-color
	 * @return string
	 */
	public function setCpp_header_back_color($_cpp_header_back_color)
	{
		return ($this->cpp_header_back_color = $this->{'cpp-header-back-color'} = $_cpp_header_back_color);
	}
	/**
	 * Get cpp-payflow-color value
	 * @return string|null
	 */
	public function getCpp_payflow_color()
	{
		return $this->{'cpp-payflow-color'};
	}
	/**
	 * Set cpp-payflow-color value
	 * @param string $_cpp_payflow_color the cpp-payflow-color
	 * @return string
	 */
	public function setCpp_payflow_color($_cpp_payflow_color)
	{
		return ($this->cpp_payflow_color = $this->{'cpp-payflow-color'} = $_cpp_payflow_color);
	}
	/**
	 * Get BuyerEmail value
	 * @return string|null
	 */
	public function getBuyerEmail()
	{
		return $this->BuyerEmail;
	}
	/**
	 * Set BuyerEmail value
	 * @param string $_buyerEmail the BuyerEmail
	 * @return string
	 */
	public function setBuyerEmail($_buyerEmail)
	{
		return ($this->BuyerEmail = $_buyerEmail);
	}
	/**
	 * Get ReqBillingAddress value
	 * @return string|null
	 */
	public function getReqBillingAddress()
	{
		return $this->ReqBillingAddress;
	}
	/**
	 * Set ReqBillingAddress value
	 * @param string $_reqBillingAddress the ReqBillingAddress
	 * @return string
	 */
	public function setReqBillingAddress($_reqBillingAddress)
	{
		return ($this->ReqBillingAddress = $_reqBillingAddress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetCustomerBillingAgreementRequestDetailsType
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