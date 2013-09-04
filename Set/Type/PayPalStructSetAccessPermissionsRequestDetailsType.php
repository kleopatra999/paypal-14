<?php
/**
 * File for class PayPalStructSetAccessPermissionsRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetAccessPermissionsRequestDetailsType originally named SetAccessPermissionsRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetAccessPermissionsRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ReturnURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after choosing to login with PayPal. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer is returned if he does not approve the use of PayPal login. Required Character length and limitations: no limit
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The LogoutURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after user logs out from PayPal. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $LogoutURL;
	/**
	 * The InitFlowType
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of the flow. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InitFlowType;
	/**
	 * The SkipLoginPage
	 * Meta informations extracted from the WSDL
	 * - documentation : The used to decide SkipLogin allowed or not. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $SkipLoginPage;
	/**
	 * The RequiredAccessPermissions
	 * Meta informations extracted from the WSDL
	 * - documentation : contains information about API Services
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $RequiredAccessPermissions;
	/**
	 * The OptionalAccessPermissions
	 * Meta informations extracted from the WSDL
	 * - documentation : contains information about API Services
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionalAccessPermissions;
	/**
	 * The LocaleCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Locale of pages displayed by PayPal during Authentication Login. Optional Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. Allowable values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT or it_ITJP or ja_JPUS or en_US
	 * - minOccurs : 0
	 * @var string
	 */
	public $LocaleCode;
	/**
	 * The PageStyle
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the Custom Payment Page Style for flow pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing flow pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. Optional Character length and limitations: 30 single-byte alphabetic characters.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PageStyle;
	/**
	 * The cpp-header-image
	 * Meta informations extracted from the WSDL
	 * - documentation : A URL for the image you want to appear at the top left of the flow page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character length and limitations: 127
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_image;
	/**
	 * The cpp-header-border-color
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the border color around the header of the flow page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. Optional Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_border_color;
	/**
	 * The cpp-header-back-color
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the background color for the header of the flow page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_back_color;
	/**
	 * The cpp-payflow-color
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the background color for the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_payflow_color;
	/**
	 * The FirstName
	 * Meta informations extracted from the WSDL
	 * - documentation : First Name of the user, this information is used if user chooses to signup with PayPal. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations extracted from the WSDL
	 * - documentation : Last Name of the user, this information is used if user chooses to signup with PayPal. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $LastName;
	/**
	 * The Address
	 * Meta informations extracted from the WSDL
	 * - documentation : User address, this information is used when user chooses to signup for PayPal. Optional If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $Address;
	/**
	 * Constructor method for SetAccessPermissionsRequestDetailsType
	 * @see parent::__construct()
	 * @param string $_returnURL
	 * @param string $_cancelURL
	 * @param string $_logoutURL
	 * @param string $_initFlowType
	 * @param string $_skipLoginPage
	 * @param string $_requiredAccessPermissions
	 * @param string $_optionalAccessPermissions
	 * @param string $_localeCode
	 * @param string $_pageStyle
	 * @param string $_cpp_header_image
	 * @param string $_cpp_header_border_color
	 * @param string $_cpp_header_back_color
	 * @param string $_cpp_payflow_color
	 * @param string $_firstName
	 * @param string $_lastName
	 * @param PayPalStructAddressType $_address
	 * @return PayPalStructSetAccessPermissionsRequestDetailsType
	 */
	public function __construct($_returnURL = NULL,$_cancelURL = NULL,$_logoutURL = NULL,$_initFlowType = NULL,$_skipLoginPage = NULL,$_requiredAccessPermissions = NULL,$_optionalAccessPermissions = NULL,$_localeCode = NULL,$_pageStyle = NULL,$_cpp_header_image = NULL,$_cpp_header_border_color = NULL,$_cpp_header_back_color = NULL,$_cpp_payflow_color = NULL,$_firstName = NULL,$_lastName = NULL,$_address = NULL)
	{
		parent::__construct(array('ReturnURL'=>$_returnURL,'CancelURL'=>$_cancelURL,'LogoutURL'=>$_logoutURL,'InitFlowType'=>$_initFlowType,'SkipLoginPage'=>$_skipLoginPage,'RequiredAccessPermissions'=>$_requiredAccessPermissions,'OptionalAccessPermissions'=>$_optionalAccessPermissions,'LocaleCode'=>$_localeCode,'PageStyle'=>$_pageStyle,'cpp_header_image'=>$_cpp_header_image,'cpp_header_border_color'=>$_cpp_header_border_color,'cpp_header_back_color'=>$_cpp_header_back_color,'cpp_payflow_color'=>$_cpp_payflow_color,'FirstName'=>$_firstName,'LastName'=>$_lastName,'Address'=>$_address));
	}
	/**
	 * Get ReturnURL value
	 * @return string|null
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
	 * @return string|null
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
	 * Get LogoutURL value
	 * @return string|null
	 */
	public function getLogoutURL()
	{
		return $this->LogoutURL;
	}
	/**
	 * Set LogoutURL value
	 * @param string $_logoutURL the LogoutURL
	 * @return string
	 */
	public function setLogoutURL($_logoutURL)
	{
		return ($this->LogoutURL = $_logoutURL);
	}
	/**
	 * Get InitFlowType value
	 * @return string|null
	 */
	public function getInitFlowType()
	{
		return $this->InitFlowType;
	}
	/**
	 * Set InitFlowType value
	 * @param string $_initFlowType the InitFlowType
	 * @return string
	 */
	public function setInitFlowType($_initFlowType)
	{
		return ($this->InitFlowType = $_initFlowType);
	}
	/**
	 * Get SkipLoginPage value
	 * @return string|null
	 */
	public function getSkipLoginPage()
	{
		return $this->SkipLoginPage;
	}
	/**
	 * Set SkipLoginPage value
	 * @param string $_skipLoginPage the SkipLoginPage
	 * @return string
	 */
	public function setSkipLoginPage($_skipLoginPage)
	{
		return ($this->SkipLoginPage = $_skipLoginPage);
	}
	/**
	 * Get RequiredAccessPermissions value
	 * @return string|null
	 */
	public function getRequiredAccessPermissions()
	{
		return $this->RequiredAccessPermissions;
	}
	/**
	 * Set RequiredAccessPermissions value
	 * @param string $_requiredAccessPermissions the RequiredAccessPermissions
	 * @return string
	 */
	public function setRequiredAccessPermissions($_requiredAccessPermissions)
	{
		return ($this->RequiredAccessPermissions = $_requiredAccessPermissions);
	}
	/**
	 * Get OptionalAccessPermissions value
	 * @return string|null
	 */
	public function getOptionalAccessPermissions()
	{
		return $this->OptionalAccessPermissions;
	}
	/**
	 * Set OptionalAccessPermissions value
	 * @param string $_optionalAccessPermissions the OptionalAccessPermissions
	 * @return string
	 */
	public function setOptionalAccessPermissions($_optionalAccessPermissions)
	{
		return ($this->OptionalAccessPermissions = $_optionalAccessPermissions);
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
	 * Get FirstName value
	 * @return string|null
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set FirstName value
	 * @param string $_firstName the FirstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->FirstName = $_firstName);
	}
	/**
	 * Get LastName value
	 * @return string|null
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set LastName value
	 * @param string $_lastName the LastName
	 * @return string
	 */
	public function setLastName($_lastName)
	{
		return ($this->LastName = $_lastName);
	}
	/**
	 * Get Address value
	 * @return PayPalStructAddressType|null
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Address value
	 * @param PayPalStructAddressType $_address the Address
	 * @return PayPalStructAddressType
	 */
	public function setAddress($_address)
	{
		return ($this->Address = $_address);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetAccessPermissionsRequestDetailsType
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