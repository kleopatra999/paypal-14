<?php
/**
 * File for class PayPalStructSetExpressCheckoutRequestDetailsType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructSetExpressCheckoutRequestDetailsType originally named SetExpressCheckoutRequestDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructSetExpressCheckoutRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The OrderTotal
	 * Meta informations extracted from the WSDL
	 * - documentation : The total cost of the order to the customer. If shipping cost and tax charges are known, include them in OrderTotal; if not, OrderTotal should be the current sub-total of the order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $OrderTotal;
	/**
	 * The ReturnURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Required Character length and limitations: no limit
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The TrackingImageURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Tracking URL for ebay. Required Character length and limitations: no limit
	 * - minOccurs : 0
	 * @var string
	 */
	public $TrackingImageURL;
	/**
	 * The giropaySuccessURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after paying with giropay online. Optional Character length and limitations: no limit.
	 * - minOccurs : 0
	 * @var string
	 */
	public $giropaySuccessURL;
	/**
	 * The giropayCancelURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser is returned after fail to pay with giropay online. Optional Character length and limitations: no limit.
	 * - minOccurs : 0
	 * @var string
	 */
	public $giropayCancelURL;
	/**
	 * The BanktxnPendingURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to which the customer's browser can be returned in the mEFT done page. Optional Character length and limitations: no limit.
	 * - minOccurs : 0
	 * @var string
	 */
	public $BanktxnPendingURL;
	/**
	 * The Token
	 * Meta informations extracted from the WSDL
	 * - documentation : On your first invocation of SetExpressCheckoutRequest, the value of this token is returned by SetExpressCheckoutResponse. Optional Include this element and its value only if you want to modify an existing checkout session with another invocation of SetExpressCheckoutRequest; for example, if you want the customer to edit his shipping address on PayPal. Character length and limitations: 20 single-byte characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Token;
	/**
	 * The MaxAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : The expected maximum total amount of the complete order, including shipping cost and tax charges. Optional You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $MaxAmount;
	/**
	 * The OrderDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $OrderDescription;
	/**
	 * The Custom
	 * Meta informations extracted from the WSDL
	 * - documentation : A free-form field for your own use, such as a tracking number or other value you want PayPal to return on GetExpressCheckoutDetailsResponse and DoExpressCheckoutPaymentResponse. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations extracted from the WSDL
	 * - documentation : Your own unique invoice or tracking number. PayPal returns this value to you on DoExpressCheckoutPaymentResponse. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ReqConfirmShipping
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Any value other than 1 indicates that the customer's shipping address on file with PayPal need NOT be a confirmed address. Setting this element overrides the setting you have specified in the recipient's Merchant Account Profile. Optional Character length and limitations: One single-byte numeric character.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReqConfirmShipping;
	/**
	 * The ReqBillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin. Optional Character length and limitations: One single-byte numeric character.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReqBillingAddress;
	/**
	 * The BillingAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : The billing address for the buyer. Optional If you include the BillingAddress element, the AddressType elements are required: Name Street1 CityName CountryCode Do not set set the CountryName element.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $BillingAddress;
	/**
	 * The NoShipping
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that on the PayPal pages, no shipping address fields should be displayed whatsoever. Optional Character length and limitations: Four single-byte numeric characters.
	 * - minOccurs : 0
	 * @var string
	 */
	public $NoShipping;
	/**
	 * The AddressOverride
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that the PayPal pages should display the shipping address set by you in the Address element on this SetExpressCheckoutRequest, not the shipping address on file with PayPal for this customer. Displaying the PayPal street address on file does not allow the customer to edit that address. Optional Character length and limitations: Four single-byte numeric characters.
	 * - minOccurs : 0
	 * @var string
	 */
	public $AddressOverride;
	/**
	 * The LocaleCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Locale of pages displayed by PayPal during Express Checkout. Optional Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. Allowable values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT or it_ITJP or ja_JPUS or en_US
	 * - minOccurs : 0
	 * @var string
	 */
	public $LocaleCode;
	/**
	 * The PageStyle
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the Custom Payment Page Style for payment pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing payment pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. Optional Character length and limitations: 30 single-byte alphabetic characters.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PageStyle;
	/**
	 * The cpp-header-image
	 * Meta informations extracted from the WSDL
	 * - documentation : A URL for the image you want to appear at the top left of the payment page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character length and limitations: 127
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_image;
	/**
	 * The cpp-header-border-color
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the border color around the header of the payment page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. Optional Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_header_border_color;
	/**
	 * The cpp-header-back-color
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the background color for the header of the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
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
	 * The cpp-cart-border-color
	 * Meta informations extracted from the WSDL
	 * - documentation : Sets the cart gradient color for the Mini Cart on 1X flow. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_cart_border_color;
	/**
	 * The cpp-logo-image
	 * Meta informations extracted from the WSDL
	 * - documentation : A URL for the image you want to appear above the mini-cart. The image has a maximum size of 190 pixels wide by 60 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character length and limitations: 127
	 * - minOccurs : 0
	 * @var string
	 */
	public $cpp_logo_image;
	/**
	 * The Address
	 * Meta informations extracted from the WSDL
	 * - documentation : Customer's shipping address. Optional If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse.
	 * - minOccurs : 0
	 * @var PayPalStructAddressType
	 */
	public $Address;
	/**
	 * The PaymentAction
	 * Meta informations extracted from the WSDL
	 * - documentation : How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale or Order on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
	 * - minOccurs : 0
	 * @var PayPalEnumPaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The SolutionType
	 * Meta informations extracted from the WSDL
	 * - documentation : This will indicate which flow you are choosing (expresschecheckout or expresscheckout optional) Optional None Sole indicates that you are in the ExpressO flow Mark indicates that you are in the old express flow.
	 * - minOccurs : 0
	 * @var PayPalEnumSolutionTypeType
	 */
	public $SolutionType;
	/**
	 * The LandingPage
	 * Meta informations extracted from the WSDL
	 * - documentation : This indicates Which page to display for ExpressO (Billing or Login) Optional None Billing indicates that you are not a paypal account holder Login indicates that you are a paypal account holder
	 * - minOccurs : 0
	 * @var PayPalEnumLandingPageType
	 */
	public $LandingPage;
	/**
	 * The BuyerEmail
	 * Meta informations extracted from the WSDL
	 * - documentation : Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the PayPal membership sign-up portion of the PayPal login page. Optional Character length and limit: 127 single-byte alphanumeric characters
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerEmail;
	/**
	 * The ChannelType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumChannelType
	 */
	public $ChannelType;
	/**
	 * The BillingAgreementDetails
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructBillingAgreementDetailsType
	 */
	public $BillingAgreementDetails;
	/**
	 * The PromoCodes
	 * Meta informations extracted from the WSDL
	 * - documentation : Promo Code Optional List of promo codes supplied by merchant. These promo codes enable the Merchant Services Promotion Financing feature.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $PromoCodes;
	/**
	 * The PayPalCheckOutBtnType
	 * Meta informations extracted from the WSDL
	 * - documentation : Default Funding option for PayLater Checkout button.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PayPalCheckOutBtnType;
	/**
	 * The ProductCategory
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumProductCategoryType
	 */
	public $ProductCategory;
	/**
	 * The ShippingMethod
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumShippingServiceCodeType
	 */
	public $ShippingMethod;
	/**
	 * The ProfileAddressChangeDate
	 * Meta informations extracted from the WSDL
	 * - documentation : Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $ProfileAddressChangeDate;
	/**
	 * The AllowNote
	 * Meta informations extracted from the WSDL
	 * - documentation : The value 1 indicates that the customer may enter a note to the merchant on the PayPal page during checkout. The note is returned in the GetExpressCheckoutDetails response and the DoExpressCheckoutPayment response. Optional Character length and limitations: One single-byte numeric character. Allowable values: 0,1
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $AllowNote;
	/**
	 * The FundingSourceDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Funding source preferences.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFundingSourceDetailsType
	 */
	public $FundingSourceDetails;
	/**
	 * The BrandName
	 * Meta informations extracted from the WSDL
	 * - documentation : The label that needs to be displayed on the cancel links in the PayPal hosted checkout pages. Optional Character length and limit: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BrandName;
	/**
	 * The CallbackURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for PayPal to use to retrieve shipping, handling, insurance, and tax details from your website. Optional Character length and limitations: 2048 characters.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CallbackURL;
	/**
	 * The EnhancedCheckoutData
	 * Meta informations extracted from the WSDL
	 * - documentation : Enhanced data for different industry segments. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructEnhancedCheckoutDataType
	 */
	public $EnhancedCheckoutData;
	/**
	 * The OtherPaymentMethods
	 * Meta informations extracted from the WSDL
	 * - documentation : List of other payment methods the user can pay with. Optional Refer to the OtherPaymentMethodDetailsType for more details.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructOtherPaymentMethodDetailsType
	 */
	public $OtherPaymentMethods;
	/**
	 * The BuyerDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Details about the buyer's account. Optional Refer to the BuyerDetailsType for more details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBuyerDetailsType
	 */
	public $BuyerDetails;
	/**
	 * The PaymentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the payment.
	 * - maxOccurs : 10
	 * - minOccurs : 0
	 * @var PayPalStructPaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The FlatRateShippingOptions
	 * Meta informations extracted from the WSDL
	 * - documentation : List of Fall Back Shipping options provided by merchant.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructShippingOptionType
	 */
	public $FlatRateShippingOptions;
	/**
	 * The CallbackTimeout
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the call back timeout override.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CallbackTimeout;
	/**
	 * The CallbackVersion
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the call back version.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CallbackVersion;
	/**
	 * The CustomerServiceNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Customer service number.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $CustomerServiceNumber;
	/**
	 * The GiftMessageEnable
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift message enable.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftMessageEnable;
	/**
	 * The GiftReceiptEnable
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift receipt enable.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftReceiptEnable;
	/**
	 * The GiftWrapEnable
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift Wrap enable.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftWrapEnable;
	/**
	 * The GiftWrapName
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift Wrap name.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $GiftWrapName;
	/**
	 * The GiftWrapAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Gift Wrap amount.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $GiftWrapAmount;
	/**
	 * The BuyerEmailOptInEnable
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the Buyer email option enable .
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $BuyerEmailOptInEnable;
	/**
	 * The SurveyEnable
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the survey enable.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SurveyEnable;
	/**
	 * The SurveyQuestion
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the survey question.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SurveyQuestion;
	/**
	 * The SurveyChoice
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the survey choices for survey question.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $SurveyChoice;
	/**
	 * The TotalType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalEnumTotalType
	 */
	public $TotalType;
	/**
	 * The NoteToBuyer
	 * Meta informations extracted from the WSDL
	 * - documentation : Any message the seller would like to be displayed in the Mini Cart for UX.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $NoteToBuyer;
	/**
	 * The Incentives
	 * Meta informations extracted from the WSDL
	 * - documentation : Incentive Code Optional List of incentive codes supplied by ebay/merchant.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveInfoType
	 */
	public $Incentives;
	/**
	 * The ReqInstrumentDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Merchant specified flag which indicates whether to return Funding Instrument Details in DoEC or not. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReqInstrumentDetails;
	/**
	 * The ExternalRememberMeOptInDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : This element contains information that allows the merchant to request to opt into external remember me on behalf of the buyer or to request login bypass using external remember me. Note the opt-in details are silently ignored if the ExternalRememberMeID is present.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructExternalRememberMeOptInDetailsType
	 */
	public $ExternalRememberMeOptInDetails;
	/**
	 * The FlowControlDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : An optional set of values related to flow-specific details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructFlowControlDetailsType
	 */
	public $FlowControlDetails;
	/**
	 * The DisplayControlDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : An optional set of values related to display-specific details.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructDisplayControlDetailsType
	 */
	public $DisplayControlDetails;
	/**
	 * The ExternalPartnerTrackingDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : An optional set of values related to tracking for external partner.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructExternalPartnerTrackingDetailsType
	 */
	public $ExternalPartnerTrackingDetails;
	/**
	 * The CoupledBuckets
	 * Meta informations extracted from the WSDL
	 * - documentation : Optional element that defines relationship between buckets
	 * - maxOccurs : 5
	 * - minOccurs : 0
	 * @var PayPalStructCoupledBucketsType
	 */
	public $CoupledBuckets;
	/**
	 * Constructor method for SetExpressCheckoutRequestDetailsType
	 * @see parent::__construct()
	 * @param PayPalStructBasicAmountType $_orderTotal
	 * @param string $_returnURL
	 * @param string $_cancelURL
	 * @param string $_trackingImageURL
	 * @param string $_giropaySuccessURL
	 * @param string $_giropayCancelURL
	 * @param string $_banktxnPendingURL
	 * @param string $_token
	 * @param PayPalStructBasicAmountType $_maxAmount
	 * @param string $_orderDescription
	 * @param string $_custom
	 * @param string $_invoiceID
	 * @param string $_reqConfirmShipping
	 * @param string $_reqBillingAddress
	 * @param PayPalStructAddressType $_billingAddress
	 * @param string $_noShipping
	 * @param string $_addressOverride
	 * @param string $_localeCode
	 * @param string $_pageStyle
	 * @param string $_cpp_header_image
	 * @param string $_cpp_header_border_color
	 * @param string $_cpp_header_back_color
	 * @param string $_cpp_payflow_color
	 * @param string $_cpp_cart_border_color
	 * @param string $_cpp_logo_image
	 * @param PayPalStructAddressType $_address
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction
	 * @param PayPalEnumSolutionTypeType $_solutionType
	 * @param PayPalEnumLandingPageType $_landingPage
	 * @param string $_buyerEmail
	 * @param PayPalEnumChannelType $_channelType
	 * @param PayPalStructBillingAgreementDetailsType $_billingAgreementDetails
	 * @param string $_promoCodes
	 * @param string $_payPalCheckOutBtnType
	 * @param PayPalEnumProductCategoryType $_productCategory
	 * @param PayPalEnumShippingServiceCodeType $_shippingMethod
	 * @param dateTime $_profileAddressChangeDate
	 * @param string $_allowNote
	 * @param PayPalStructFundingSourceDetailsType $_fundingSourceDetails
	 * @param string $_brandName
	 * @param string $_callbackURL
	 * @param PayPalStructEnhancedCheckoutDataType $_enhancedCheckoutData
	 * @param PayPalStructOtherPaymentMethodDetailsType $_otherPaymentMethods
	 * @param PayPalStructBuyerDetailsType $_buyerDetails
	 * @param PayPalStructPaymentDetailsType $_paymentDetails
	 * @param PayPalStructShippingOptionType $_flatRateShippingOptions
	 * @param string $_callbackTimeout
	 * @param string $_callbackVersion
	 * @param string $_customerServiceNumber
	 * @param string $_giftMessageEnable
	 * @param string $_giftReceiptEnable
	 * @param string $_giftWrapEnable
	 * @param string $_giftWrapName
	 * @param PayPalStructBasicAmountType $_giftWrapAmount
	 * @param string $_buyerEmailOptInEnable
	 * @param string $_surveyEnable
	 * @param string $_surveyQuestion
	 * @param string $_surveyChoice
	 * @param PayPalEnumTotalType $_totalType
	 * @param string $_noteToBuyer
	 * @param PayPalStructIncentiveInfoType $_incentives
	 * @param string $_reqInstrumentDetails
	 * @param PayPalStructExternalRememberMeOptInDetailsType $_externalRememberMeOptInDetails
	 * @param PayPalStructFlowControlDetailsType $_flowControlDetails
	 * @param PayPalStructDisplayControlDetailsType $_displayControlDetails
	 * @param PayPalStructExternalPartnerTrackingDetailsType $_externalPartnerTrackingDetails
	 * @param PayPalStructCoupledBucketsType $_coupledBuckets
	 * @return PayPalStructSetExpressCheckoutRequestDetailsType
	 */
	public function __construct($_orderTotal = NULL,$_returnURL = NULL,$_cancelURL = NULL,$_trackingImageURL = NULL,$_giropaySuccessURL = NULL,$_giropayCancelURL = NULL,$_banktxnPendingURL = NULL,$_token = NULL,$_maxAmount = NULL,$_orderDescription = NULL,$_custom = NULL,$_invoiceID = NULL,$_reqConfirmShipping = NULL,$_reqBillingAddress = NULL,$_billingAddress = NULL,$_noShipping = NULL,$_addressOverride = NULL,$_localeCode = NULL,$_pageStyle = NULL,$_cpp_header_image = NULL,$_cpp_header_border_color = NULL,$_cpp_header_back_color = NULL,$_cpp_payflow_color = NULL,$_cpp_cart_border_color = NULL,$_cpp_logo_image = NULL,$_address = NULL,$_paymentAction = NULL,$_solutionType = NULL,$_landingPage = NULL,$_buyerEmail = NULL,$_channelType = NULL,$_billingAgreementDetails = NULL,$_promoCodes = NULL,$_payPalCheckOutBtnType = NULL,$_productCategory = NULL,$_shippingMethod = NULL,$_profileAddressChangeDate = NULL,$_allowNote = NULL,$_fundingSourceDetails = NULL,$_brandName = NULL,$_callbackURL = NULL,$_enhancedCheckoutData = NULL,$_otherPaymentMethods = NULL,$_buyerDetails = NULL,$_paymentDetails = NULL,$_flatRateShippingOptions = NULL,$_callbackTimeout = NULL,$_callbackVersion = NULL,$_customerServiceNumber = NULL,$_giftMessageEnable = NULL,$_giftReceiptEnable = NULL,$_giftWrapEnable = NULL,$_giftWrapName = NULL,$_giftWrapAmount = NULL,$_buyerEmailOptInEnable = NULL,$_surveyEnable = NULL,$_surveyQuestion = NULL,$_surveyChoice = NULL,$_totalType = NULL,$_noteToBuyer = NULL,$_incentives = NULL,$_reqInstrumentDetails = NULL,$_externalRememberMeOptInDetails = NULL,$_flowControlDetails = NULL,$_displayControlDetails = NULL,$_externalPartnerTrackingDetails = NULL,$_coupledBuckets = NULL)
	{
		parent::__construct(array('OrderTotal'=>$_orderTotal,'ReturnURL'=>$_returnURL,'CancelURL'=>$_cancelURL,'TrackingImageURL'=>$_trackingImageURL,'giropaySuccessURL'=>$_giropaySuccessURL,'giropayCancelURL'=>$_giropayCancelURL,'BanktxnPendingURL'=>$_banktxnPendingURL,'Token'=>$_token,'MaxAmount'=>$_maxAmount,'OrderDescription'=>$_orderDescription,'Custom'=>$_custom,'InvoiceID'=>$_invoiceID,'ReqConfirmShipping'=>$_reqConfirmShipping,'ReqBillingAddress'=>$_reqBillingAddress,'BillingAddress'=>$_billingAddress,'NoShipping'=>$_noShipping,'AddressOverride'=>$_addressOverride,'LocaleCode'=>$_localeCode,'PageStyle'=>$_pageStyle,'cpp_header_image'=>$_cpp_header_image,'cpp_header_border_color'=>$_cpp_header_border_color,'cpp_header_back_color'=>$_cpp_header_back_color,'cpp_payflow_color'=>$_cpp_payflow_color,'cpp_cart_border_color'=>$_cpp_cart_border_color,'cpp_logo_image'=>$_cpp_logo_image,'Address'=>$_address,'PaymentAction'=>$_paymentAction,'SolutionType'=>$_solutionType,'LandingPage'=>$_landingPage,'BuyerEmail'=>$_buyerEmail,'ChannelType'=>$_channelType,'BillingAgreementDetails'=>$_billingAgreementDetails,'PromoCodes'=>$_promoCodes,'PayPalCheckOutBtnType'=>$_payPalCheckOutBtnType,'ProductCategory'=>$_productCategory,'ShippingMethod'=>$_shippingMethod,'ProfileAddressChangeDate'=>$_profileAddressChangeDate,'AllowNote'=>$_allowNote,'FundingSourceDetails'=>$_fundingSourceDetails,'BrandName'=>$_brandName,'CallbackURL'=>$_callbackURL,'EnhancedCheckoutData'=>$_enhancedCheckoutData,'OtherPaymentMethods'=>$_otherPaymentMethods,'BuyerDetails'=>$_buyerDetails,'PaymentDetails'=>$_paymentDetails,'FlatRateShippingOptions'=>$_flatRateShippingOptions,'CallbackTimeout'=>$_callbackTimeout,'CallbackVersion'=>$_callbackVersion,'CustomerServiceNumber'=>$_customerServiceNumber,'GiftMessageEnable'=>$_giftMessageEnable,'GiftReceiptEnable'=>$_giftReceiptEnable,'GiftWrapEnable'=>$_giftWrapEnable,'GiftWrapName'=>$_giftWrapName,'GiftWrapAmount'=>$_giftWrapAmount,'BuyerEmailOptInEnable'=>$_buyerEmailOptInEnable,'SurveyEnable'=>$_surveyEnable,'SurveyQuestion'=>$_surveyQuestion,'SurveyChoice'=>$_surveyChoice,'TotalType'=>$_totalType,'NoteToBuyer'=>$_noteToBuyer,'Incentives'=>$_incentives,'ReqInstrumentDetails'=>$_reqInstrumentDetails,'ExternalRememberMeOptInDetails'=>$_externalRememberMeOptInDetails,'FlowControlDetails'=>$_flowControlDetails,'DisplayControlDetails'=>$_displayControlDetails,'ExternalPartnerTrackingDetails'=>$_externalPartnerTrackingDetails,'CoupledBuckets'=>$_coupledBuckets));
	}
	/**
	 * Get OrderTotal value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getOrderTotal()
	{
		return $this->OrderTotal;
	}
	/**
	 * Set OrderTotal value
	 * @param PayPalStructBasicAmountType $_orderTotal the OrderTotal
	 * @return PayPalStructBasicAmountType
	 */
	public function setOrderTotal($_orderTotal)
	{
		return ($this->OrderTotal = $_orderTotal);
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
	 * Get TrackingImageURL value
	 * @return string|null
	 */
	public function getTrackingImageURL()
	{
		return $this->TrackingImageURL;
	}
	/**
	 * Set TrackingImageURL value
	 * @param string $_trackingImageURL the TrackingImageURL
	 * @return string
	 */
	public function setTrackingImageURL($_trackingImageURL)
	{
		return ($this->TrackingImageURL = $_trackingImageURL);
	}
	/**
	 * Get giropaySuccessURL value
	 * @return string|null
	 */
	public function getGiropaySuccessURL()
	{
		return $this->giropaySuccessURL;
	}
	/**
	 * Set giropaySuccessURL value
	 * @param string $_giropaySuccessURL the giropaySuccessURL
	 * @return string
	 */
	public function setGiropaySuccessURL($_giropaySuccessURL)
	{
		return ($this->giropaySuccessURL = $_giropaySuccessURL);
	}
	/**
	 * Get giropayCancelURL value
	 * @return string|null
	 */
	public function getGiropayCancelURL()
	{
		return $this->giropayCancelURL;
	}
	/**
	 * Set giropayCancelURL value
	 * @param string $_giropayCancelURL the giropayCancelURL
	 * @return string
	 */
	public function setGiropayCancelURL($_giropayCancelURL)
	{
		return ($this->giropayCancelURL = $_giropayCancelURL);
	}
	/**
	 * Get BanktxnPendingURL value
	 * @return string|null
	 */
	public function getBanktxnPendingURL()
	{
		return $this->BanktxnPendingURL;
	}
	/**
	 * Set BanktxnPendingURL value
	 * @param string $_banktxnPendingURL the BanktxnPendingURL
	 * @return string
	 */
	public function setBanktxnPendingURL($_banktxnPendingURL)
	{
		return ($this->BanktxnPendingURL = $_banktxnPendingURL);
	}
	/**
	 * Get Token value
	 * @return string|null
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set Token value
	 * @param string $_token the Token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->Token = $_token);
	}
	/**
	 * Get MaxAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getMaxAmount()
	{
		return $this->MaxAmount;
	}
	/**
	 * Set MaxAmount value
	 * @param PayPalStructBasicAmountType $_maxAmount the MaxAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setMaxAmount($_maxAmount)
	{
		return ($this->MaxAmount = $_maxAmount);
	}
	/**
	 * Get OrderDescription value
	 * @return string|null
	 */
	public function getOrderDescription()
	{
		return $this->OrderDescription;
	}
	/**
	 * Set OrderDescription value
	 * @param string $_orderDescription the OrderDescription
	 * @return string
	 */
	public function setOrderDescription($_orderDescription)
	{
		return ($this->OrderDescription = $_orderDescription);
	}
	/**
	 * Get Custom value
	 * @return string|null
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set Custom value
	 * @param string $_custom the Custom
	 * @return string
	 */
	public function setCustom($_custom)
	{
		return ($this->Custom = $_custom);
	}
	/**
	 * Get InvoiceID value
	 * @return string|null
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set InvoiceID value
	 * @param string $_invoiceID the InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->InvoiceID = $_invoiceID);
	}
	/**
	 * Get ReqConfirmShipping value
	 * @return string|null
	 */
	public function getReqConfirmShipping()
	{
		return $this->ReqConfirmShipping;
	}
	/**
	 * Set ReqConfirmShipping value
	 * @param string $_reqConfirmShipping the ReqConfirmShipping
	 * @return string
	 */
	public function setReqConfirmShipping($_reqConfirmShipping)
	{
		return ($this->ReqConfirmShipping = $_reqConfirmShipping);
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
	 * Get BillingAddress value
	 * @return PayPalStructAddressType|null
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
	}
	/**
	 * Set BillingAddress value
	 * @param PayPalStructAddressType $_billingAddress the BillingAddress
	 * @return PayPalStructAddressType
	 */
	public function setBillingAddress($_billingAddress)
	{
		return ($this->BillingAddress = $_billingAddress);
	}
	/**
	 * Get NoShipping value
	 * @return string|null
	 */
	public function getNoShipping()
	{
		return $this->NoShipping;
	}
	/**
	 * Set NoShipping value
	 * @param string $_noShipping the NoShipping
	 * @return string
	 */
	public function setNoShipping($_noShipping)
	{
		return ($this->NoShipping = $_noShipping);
	}
	/**
	 * Get AddressOverride value
	 * @return string|null
	 */
	public function getAddressOverride()
	{
		return $this->AddressOverride;
	}
	/**
	 * Set AddressOverride value
	 * @param string $_addressOverride the AddressOverride
	 * @return string
	 */
	public function setAddressOverride($_addressOverride)
	{
		return ($this->AddressOverride = $_addressOverride);
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
	 * Get cpp-cart-border-color value
	 * @return string|null
	 */
	public function getCpp_cart_border_color()
	{
		return $this->{'cpp-cart-border-color'};
	}
	/**
	 * Set cpp-cart-border-color value
	 * @param string $_cpp_cart_border_color the cpp-cart-border-color
	 * @return string
	 */
	public function setCpp_cart_border_color($_cpp_cart_border_color)
	{
		return ($this->cpp_cart_border_color = $this->{'cpp-cart-border-color'} = $_cpp_cart_border_color);
	}
	/**
	 * Get cpp-logo-image value
	 * @return string|null
	 */
	public function getCpp_logo_image()
	{
		return $this->{'cpp-logo-image'};
	}
	/**
	 * Set cpp-logo-image value
	 * @param string $_cpp_logo_image the cpp-logo-image
	 * @return string
	 */
	public function setCpp_logo_image($_cpp_logo_image)
	{
		return ($this->cpp_logo_image = $this->{'cpp-logo-image'} = $_cpp_logo_image);
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
	 * Get PaymentAction value
	 * @return PayPalEnumPaymentActionCodeType|null
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set PaymentAction value
	 * @uses PayPalEnumPaymentActionCodeType::valueIsValid()
	 * @param PayPalEnumPaymentActionCodeType $_paymentAction the PaymentAction
	 * @return PayPalEnumPaymentActionCodeType
	 */
	public function setPaymentAction($_paymentAction)
	{
		if(!PayPalEnumPaymentActionCodeType::valueIsValid($_paymentAction))
		{
			return false;
		}
		return ($this->PaymentAction = $_paymentAction);
	}
	/**
	 * Get SolutionType value
	 * @return PayPalEnumSolutionTypeType|null
	 */
	public function getSolutionType()
	{
		return $this->SolutionType;
	}
	/**
	 * Set SolutionType value
	 * @uses PayPalEnumSolutionTypeType::valueIsValid()
	 * @param PayPalEnumSolutionTypeType $_solutionType the SolutionType
	 * @return PayPalEnumSolutionTypeType
	 */
	public function setSolutionType($_solutionType)
	{
		if(!PayPalEnumSolutionTypeType::valueIsValid($_solutionType))
		{
			return false;
		}
		return ($this->SolutionType = $_solutionType);
	}
	/**
	 * Get LandingPage value
	 * @return PayPalEnumLandingPageType|null
	 */
	public function getLandingPage()
	{
		return $this->LandingPage;
	}
	/**
	 * Set LandingPage value
	 * @uses PayPalEnumLandingPageType::valueIsValid()
	 * @param PayPalEnumLandingPageType $_landingPage the LandingPage
	 * @return PayPalEnumLandingPageType
	 */
	public function setLandingPage($_landingPage)
	{
		if(!PayPalEnumLandingPageType::valueIsValid($_landingPage))
		{
			return false;
		}
		return ($this->LandingPage = $_landingPage);
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
	 * Get ChannelType value
	 * @return PayPalEnumChannelType|null
	 */
	public function getChannelType()
	{
		return $this->ChannelType;
	}
	/**
	 * Set ChannelType value
	 * @uses PayPalEnumChannelType::valueIsValid()
	 * @param PayPalEnumChannelType $_channelType the ChannelType
	 * @return PayPalEnumChannelType
	 */
	public function setChannelType($_channelType)
	{
		if(!PayPalEnumChannelType::valueIsValid($_channelType))
		{
			return false;
		}
		return ($this->ChannelType = $_channelType);
	}
	/**
	 * Get BillingAgreementDetails value
	 * @return PayPalStructBillingAgreementDetailsType|null
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
	 * Get PromoCodes value
	 * @return string|null
	 */
	public function getPromoCodes()
	{
		return $this->PromoCodes;
	}
	/**
	 * Set PromoCodes value
	 * @param string $_promoCodes the PromoCodes
	 * @return string
	 */
	public function setPromoCodes($_promoCodes)
	{
		return ($this->PromoCodes = $_promoCodes);
	}
	/**
	 * Get PayPalCheckOutBtnType value
	 * @return string|null
	 */
	public function getPayPalCheckOutBtnType()
	{
		return $this->PayPalCheckOutBtnType;
	}
	/**
	 * Set PayPalCheckOutBtnType value
	 * @param string $_payPalCheckOutBtnType the PayPalCheckOutBtnType
	 * @return string
	 */
	public function setPayPalCheckOutBtnType($_payPalCheckOutBtnType)
	{
		return ($this->PayPalCheckOutBtnType = $_payPalCheckOutBtnType);
	}
	/**
	 * Get ProductCategory value
	 * @return PayPalEnumProductCategoryType|null
	 */
	public function getProductCategory()
	{
		return $this->ProductCategory;
	}
	/**
	 * Set ProductCategory value
	 * @uses PayPalEnumProductCategoryType::valueIsValid()
	 * @param PayPalEnumProductCategoryType $_productCategory the ProductCategory
	 * @return PayPalEnumProductCategoryType
	 */
	public function setProductCategory($_productCategory)
	{
		if(!PayPalEnumProductCategoryType::valueIsValid($_productCategory))
		{
			return false;
		}
		return ($this->ProductCategory = $_productCategory);
	}
	/**
	 * Get ShippingMethod value
	 * @return PayPalEnumShippingServiceCodeType|null
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ShippingMethod value
	 * @uses PayPalEnumShippingServiceCodeType::valueIsValid()
	 * @param PayPalEnumShippingServiceCodeType $_shippingMethod the ShippingMethod
	 * @return PayPalEnumShippingServiceCodeType
	 */
	public function setShippingMethod($_shippingMethod)
	{
		if(!PayPalEnumShippingServiceCodeType::valueIsValid($_shippingMethod))
		{
			return false;
		}
		return ($this->ShippingMethod = $_shippingMethod);
	}
	/**
	 * Get ProfileAddressChangeDate value
	 * @return dateTime|null
	 */
	public function getProfileAddressChangeDate()
	{
		return $this->ProfileAddressChangeDate;
	}
	/**
	 * Set ProfileAddressChangeDate value
	 * @param dateTime $_profileAddressChangeDate the ProfileAddressChangeDate
	 * @return dateTime
	 */
	public function setProfileAddressChangeDate($_profileAddressChangeDate)
	{
		return ($this->ProfileAddressChangeDate = $_profileAddressChangeDate);
	}
	/**
	 * Get AllowNote value
	 * @return string|null
	 */
	public function getAllowNote()
	{
		return $this->AllowNote;
	}
	/**
	 * Set AllowNote value
	 * @param string $_allowNote the AllowNote
	 * @return string
	 */
	public function setAllowNote($_allowNote)
	{
		return ($this->AllowNote = $_allowNote);
	}
	/**
	 * Get FundingSourceDetails value
	 * @return PayPalStructFundingSourceDetailsType|null
	 */
	public function getFundingSourceDetails()
	{
		return $this->FundingSourceDetails;
	}
	/**
	 * Set FundingSourceDetails value
	 * @param PayPalStructFundingSourceDetailsType $_fundingSourceDetails the FundingSourceDetails
	 * @return PayPalStructFundingSourceDetailsType
	 */
	public function setFundingSourceDetails($_fundingSourceDetails)
	{
		return ($this->FundingSourceDetails = $_fundingSourceDetails);
	}
	/**
	 * Get BrandName value
	 * @return string|null
	 */
	public function getBrandName()
	{
		return $this->BrandName;
	}
	/**
	 * Set BrandName value
	 * @param string $_brandName the BrandName
	 * @return string
	 */
	public function setBrandName($_brandName)
	{
		return ($this->BrandName = $_brandName);
	}
	/**
	 * Get CallbackURL value
	 * @return string|null
	 */
	public function getCallbackURL()
	{
		return $this->CallbackURL;
	}
	/**
	 * Set CallbackURL value
	 * @param string $_callbackURL the CallbackURL
	 * @return string
	 */
	public function setCallbackURL($_callbackURL)
	{
		return ($this->CallbackURL = $_callbackURL);
	}
	/**
	 * Get EnhancedCheckoutData value
	 * @return PayPalStructEnhancedCheckoutDataType|null
	 */
	public function getEnhancedCheckoutData()
	{
		return $this->EnhancedCheckoutData;
	}
	/**
	 * Set EnhancedCheckoutData value
	 * @param PayPalStructEnhancedCheckoutDataType $_enhancedCheckoutData the EnhancedCheckoutData
	 * @return PayPalStructEnhancedCheckoutDataType
	 */
	public function setEnhancedCheckoutData($_enhancedCheckoutData)
	{
		return ($this->EnhancedCheckoutData = $_enhancedCheckoutData);
	}
	/**
	 * Get OtherPaymentMethods value
	 * @return PayPalStructOtherPaymentMethodDetailsType|null
	 */
	public function getOtherPaymentMethods()
	{
		return $this->OtherPaymentMethods;
	}
	/**
	 * Set OtherPaymentMethods value
	 * @param PayPalStructOtherPaymentMethodDetailsType $_otherPaymentMethods the OtherPaymentMethods
	 * @return PayPalStructOtherPaymentMethodDetailsType
	 */
	public function setOtherPaymentMethods($_otherPaymentMethods)
	{
		return ($this->OtherPaymentMethods = $_otherPaymentMethods);
	}
	/**
	 * Get BuyerDetails value
	 * @return PayPalStructBuyerDetailsType|null
	 */
	public function getBuyerDetails()
	{
		return $this->BuyerDetails;
	}
	/**
	 * Set BuyerDetails value
	 * @param PayPalStructBuyerDetailsType $_buyerDetails the BuyerDetails
	 * @return PayPalStructBuyerDetailsType
	 */
	public function setBuyerDetails($_buyerDetails)
	{
		return ($this->BuyerDetails = $_buyerDetails);
	}
	/**
	 * Get PaymentDetails value
	 * @return PayPalStructPaymentDetailsType|null
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set PaymentDetails value
	 * @param PayPalStructPaymentDetailsType $_paymentDetails the PaymentDetails
	 * @return PayPalStructPaymentDetailsType
	 */
	public function setPaymentDetails($_paymentDetails)
	{
		return ($this->PaymentDetails = $_paymentDetails);
	}
	/**
	 * Get FlatRateShippingOptions value
	 * @return PayPalStructShippingOptionType|null
	 */
	public function getFlatRateShippingOptions()
	{
		return $this->FlatRateShippingOptions;
	}
	/**
	 * Set FlatRateShippingOptions value
	 * @param PayPalStructShippingOptionType $_flatRateShippingOptions the FlatRateShippingOptions
	 * @return PayPalStructShippingOptionType
	 */
	public function setFlatRateShippingOptions($_flatRateShippingOptions)
	{
		return ($this->FlatRateShippingOptions = $_flatRateShippingOptions);
	}
	/**
	 * Get CallbackTimeout value
	 * @return string|null
	 */
	public function getCallbackTimeout()
	{
		return $this->CallbackTimeout;
	}
	/**
	 * Set CallbackTimeout value
	 * @param string $_callbackTimeout the CallbackTimeout
	 * @return string
	 */
	public function setCallbackTimeout($_callbackTimeout)
	{
		return ($this->CallbackTimeout = $_callbackTimeout);
	}
	/**
	 * Get CallbackVersion value
	 * @return string|null
	 */
	public function getCallbackVersion()
	{
		return $this->CallbackVersion;
	}
	/**
	 * Set CallbackVersion value
	 * @param string $_callbackVersion the CallbackVersion
	 * @return string
	 */
	public function setCallbackVersion($_callbackVersion)
	{
		return ($this->CallbackVersion = $_callbackVersion);
	}
	/**
	 * Get CustomerServiceNumber value
	 * @return string|null
	 */
	public function getCustomerServiceNumber()
	{
		return $this->CustomerServiceNumber;
	}
	/**
	 * Set CustomerServiceNumber value
	 * @param string $_customerServiceNumber the CustomerServiceNumber
	 * @return string
	 */
	public function setCustomerServiceNumber($_customerServiceNumber)
	{
		return ($this->CustomerServiceNumber = $_customerServiceNumber);
	}
	/**
	 * Get GiftMessageEnable value
	 * @return string|null
	 */
	public function getGiftMessageEnable()
	{
		return $this->GiftMessageEnable;
	}
	/**
	 * Set GiftMessageEnable value
	 * @param string $_giftMessageEnable the GiftMessageEnable
	 * @return string
	 */
	public function setGiftMessageEnable($_giftMessageEnable)
	{
		return ($this->GiftMessageEnable = $_giftMessageEnable);
	}
	/**
	 * Get GiftReceiptEnable value
	 * @return string|null
	 */
	public function getGiftReceiptEnable()
	{
		return $this->GiftReceiptEnable;
	}
	/**
	 * Set GiftReceiptEnable value
	 * @param string $_giftReceiptEnable the GiftReceiptEnable
	 * @return string
	 */
	public function setGiftReceiptEnable($_giftReceiptEnable)
	{
		return ($this->GiftReceiptEnable = $_giftReceiptEnable);
	}
	/**
	 * Get GiftWrapEnable value
	 * @return string|null
	 */
	public function getGiftWrapEnable()
	{
		return $this->GiftWrapEnable;
	}
	/**
	 * Set GiftWrapEnable value
	 * @param string $_giftWrapEnable the GiftWrapEnable
	 * @return string
	 */
	public function setGiftWrapEnable($_giftWrapEnable)
	{
		return ($this->GiftWrapEnable = $_giftWrapEnable);
	}
	/**
	 * Get GiftWrapName value
	 * @return string|null
	 */
	public function getGiftWrapName()
	{
		return $this->GiftWrapName;
	}
	/**
	 * Set GiftWrapName value
	 * @param string $_giftWrapName the GiftWrapName
	 * @return string
	 */
	public function setGiftWrapName($_giftWrapName)
	{
		return ($this->GiftWrapName = $_giftWrapName);
	}
	/**
	 * Get GiftWrapAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getGiftWrapAmount()
	{
		return $this->GiftWrapAmount;
	}
	/**
	 * Set GiftWrapAmount value
	 * @param PayPalStructBasicAmountType $_giftWrapAmount the GiftWrapAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setGiftWrapAmount($_giftWrapAmount)
	{
		return ($this->GiftWrapAmount = $_giftWrapAmount);
	}
	/**
	 * Get BuyerEmailOptInEnable value
	 * @return string|null
	 */
	public function getBuyerEmailOptInEnable()
	{
		return $this->BuyerEmailOptInEnable;
	}
	/**
	 * Set BuyerEmailOptInEnable value
	 * @param string $_buyerEmailOptInEnable the BuyerEmailOptInEnable
	 * @return string
	 */
	public function setBuyerEmailOptInEnable($_buyerEmailOptInEnable)
	{
		return ($this->BuyerEmailOptInEnable = $_buyerEmailOptInEnable);
	}
	/**
	 * Get SurveyEnable value
	 * @return string|null
	 */
	public function getSurveyEnable()
	{
		return $this->SurveyEnable;
	}
	/**
	 * Set SurveyEnable value
	 * @param string $_surveyEnable the SurveyEnable
	 * @return string
	 */
	public function setSurveyEnable($_surveyEnable)
	{
		return ($this->SurveyEnable = $_surveyEnable);
	}
	/**
	 * Get SurveyQuestion value
	 * @return string|null
	 */
	public function getSurveyQuestion()
	{
		return $this->SurveyQuestion;
	}
	/**
	 * Set SurveyQuestion value
	 * @param string $_surveyQuestion the SurveyQuestion
	 * @return string
	 */
	public function setSurveyQuestion($_surveyQuestion)
	{
		return ($this->SurveyQuestion = $_surveyQuestion);
	}
	/**
	 * Get SurveyChoice value
	 * @return string|null
	 */
	public function getSurveyChoice()
	{
		return $this->SurveyChoice;
	}
	/**
	 * Set SurveyChoice value
	 * @param string $_surveyChoice the SurveyChoice
	 * @return string
	 */
	public function setSurveyChoice($_surveyChoice)
	{
		return ($this->SurveyChoice = $_surveyChoice);
	}
	/**
	 * Get TotalType value
	 * @return PayPalEnumTotalType|null
	 */
	public function getTotalType()
	{
		return $this->TotalType;
	}
	/**
	 * Set TotalType value
	 * @uses PayPalEnumTotalType::valueIsValid()
	 * @param PayPalEnumTotalType $_totalType the TotalType
	 * @return PayPalEnumTotalType
	 */
	public function setTotalType($_totalType)
	{
		if(!PayPalEnumTotalType::valueIsValid($_totalType))
		{
			return false;
		}
		return ($this->TotalType = $_totalType);
	}
	/**
	 * Get NoteToBuyer value
	 * @return string|null
	 */
	public function getNoteToBuyer()
	{
		return $this->NoteToBuyer;
	}
	/**
	 * Set NoteToBuyer value
	 * @param string $_noteToBuyer the NoteToBuyer
	 * @return string
	 */
	public function setNoteToBuyer($_noteToBuyer)
	{
		return ($this->NoteToBuyer = $_noteToBuyer);
	}
	/**
	 * Get Incentives value
	 * @return PayPalStructIncentiveInfoType|null
	 */
	public function getIncentives()
	{
		return $this->Incentives;
	}
	/**
	 * Set Incentives value
	 * @param PayPalStructIncentiveInfoType $_incentives the Incentives
	 * @return PayPalStructIncentiveInfoType
	 */
	public function setIncentives($_incentives)
	{
		return ($this->Incentives = $_incentives);
	}
	/**
	 * Get ReqInstrumentDetails value
	 * @return string|null
	 */
	public function getReqInstrumentDetails()
	{
		return $this->ReqInstrumentDetails;
	}
	/**
	 * Set ReqInstrumentDetails value
	 * @param string $_reqInstrumentDetails the ReqInstrumentDetails
	 * @return string
	 */
	public function setReqInstrumentDetails($_reqInstrumentDetails)
	{
		return ($this->ReqInstrumentDetails = $_reqInstrumentDetails);
	}
	/**
	 * Get ExternalRememberMeOptInDetails value
	 * @return PayPalStructExternalRememberMeOptInDetailsType|null
	 */
	public function getExternalRememberMeOptInDetails()
	{
		return $this->ExternalRememberMeOptInDetails;
	}
	/**
	 * Set ExternalRememberMeOptInDetails value
	 * @param PayPalStructExternalRememberMeOptInDetailsType $_externalRememberMeOptInDetails the ExternalRememberMeOptInDetails
	 * @return PayPalStructExternalRememberMeOptInDetailsType
	 */
	public function setExternalRememberMeOptInDetails($_externalRememberMeOptInDetails)
	{
		return ($this->ExternalRememberMeOptInDetails = $_externalRememberMeOptInDetails);
	}
	/**
	 * Get FlowControlDetails value
	 * @return PayPalStructFlowControlDetailsType|null
	 */
	public function getFlowControlDetails()
	{
		return $this->FlowControlDetails;
	}
	/**
	 * Set FlowControlDetails value
	 * @param PayPalStructFlowControlDetailsType $_flowControlDetails the FlowControlDetails
	 * @return PayPalStructFlowControlDetailsType
	 */
	public function setFlowControlDetails($_flowControlDetails)
	{
		return ($this->FlowControlDetails = $_flowControlDetails);
	}
	/**
	 * Get DisplayControlDetails value
	 * @return PayPalStructDisplayControlDetailsType|null
	 */
	public function getDisplayControlDetails()
	{
		return $this->DisplayControlDetails;
	}
	/**
	 * Set DisplayControlDetails value
	 * @param PayPalStructDisplayControlDetailsType $_displayControlDetails the DisplayControlDetails
	 * @return PayPalStructDisplayControlDetailsType
	 */
	public function setDisplayControlDetails($_displayControlDetails)
	{
		return ($this->DisplayControlDetails = $_displayControlDetails);
	}
	/**
	 * Get ExternalPartnerTrackingDetails value
	 * @return PayPalStructExternalPartnerTrackingDetailsType|null
	 */
	public function getExternalPartnerTrackingDetails()
	{
		return $this->ExternalPartnerTrackingDetails;
	}
	/**
	 * Set ExternalPartnerTrackingDetails value
	 * @param PayPalStructExternalPartnerTrackingDetailsType $_externalPartnerTrackingDetails the ExternalPartnerTrackingDetails
	 * @return PayPalStructExternalPartnerTrackingDetailsType
	 */
	public function setExternalPartnerTrackingDetails($_externalPartnerTrackingDetails)
	{
		return ($this->ExternalPartnerTrackingDetails = $_externalPartnerTrackingDetails);
	}
	/**
	 * Get CoupledBuckets value
	 * @return PayPalStructCoupledBucketsType|null
	 */
	public function getCoupledBuckets()
	{
		return $this->CoupledBuckets;
	}
	/**
	 * Set CoupledBuckets value
	 * @param PayPalStructCoupledBucketsType $_coupledBuckets the CoupledBuckets
	 * @return PayPalStructCoupledBucketsType
	 */
	public function setCoupledBuckets($_coupledBuckets)
	{
		return ($this->CoupledBuckets = $_coupledBuckets);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructSetExpressCheckoutRequestDetailsType
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