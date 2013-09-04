<?php
/**
 * File for class PayPalStructItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructItemType originally named ItemType
 * Documentation : 2-letter ISO 3166 Country Code. 3-letter ISO Currency Code. The ID that uniquely identifies the item listing. Describes the number of days the auction will be active. List of payment methods accepted by a seller from a buyer for a (checkout) transaction. Region where the item is listed. See Region Table for values. If the item is listed with a Region of 0 (zero), then this return field denotes no region association with the item, meaning that it is not listing the item regionally. Revise Status contains information about the item being revised. Seller user. Container for for selling status information (e.g., BidCount, BidIncrement, HighBidder, MinimimumToBid, etc). Contains the shipping payment related information for the listed item. Regions that seller will ship to. eBay site on which item is listed. Universally unique constraint tag. The UUID is unique to a category.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructItemType extends PayPalWsdlClass
{
	/**
	 * The ApplicationData
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns custom, application-specific data associated with the item. The data in this field is stored with the item in the items table at eBay, but is not used in any way by eBay. Use ApplicationData to store such special information as a part or SKU number. Maximum 32 characters in length.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ApplicationData;
	/**
	 * The ListOfAttributeSets
	 * Meta informations extracted from the WSDL
	 * - documentation : Carries one or more instances of the AttributeSet in a list.
	 * - minOccurs : 0
	 * @var PayPalStructListOfAttributeSetType
	 */
	public $ListOfAttributeSets;
	/**
	 * The AutoPay
	 * Meta informations extracted from the WSDL
	 * - documentation : If true (1), indicates that the seller requested immediate payment for the item. False (0) if immediate payment was not requested. (Does not indicate whether the item is still a candidate for puchase via immediate payment.) Only applicable for items listed on US and UK sites in categories that support immediate payment, when seller has a Premier or Business PayPal account.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $AutoPay;
	/**
	 * The BuyerProtection
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the status of the item's eligibility for the Buyer Protection Program. Possible values: ItemIneligible - Item is ineligible (e.g., category not applicable) ItemEligible - Item is eligible per standard criteria ItemMarkedIneligible - Item marked ineligible per special criteria (e.g., seller's account closed) ItemMarkedIneligible - Item marked elegible per other criteria Applicable for items listed to the US site and for the Parts and Accessories category (6028) or Everything Else category (10368) (or their subcategories) on the eBay Motors site.
	 * - minOccurs : 0
	 * @var PayPalEnumBuyerProtectionCodeType
	 */
	public $BuyerProtection;
	/**
	 * The BuyItNowPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Amount a Buyer would need to bid to take advantage of the Buy It Now feature. Not applicable to Fixed-Price items (Type = 7 or 9) or AdFormat-type listings. For Fixed-Price items, see StartPrice instead.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $BuyItNowPrice;
	/**
	 * The Charity
	 * Meta informations extracted from the WSDL
	 * - documentation : Charity listing container.
	 * - minOccurs : 0
	 * @var PayPalStructCharityType
	 */
	public $Charity;
	/**
	 * The Country
	 * @var PayPalEnumCountryCodeType
	 */
	public $Country;
	/**
	 * The CrossPromotion
	 * Meta informations extracted from the WSDL
	 * - documentation : CrossPromotions container, if applicable shows promoted items
	 * - minOccurs : 0
	 * @var PayPalStructCrossPromotionsType
	 */
	public $CrossPromotion;
	/**
	 * The Currency
	 * @var PayPalEnumCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : Item Description.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The Escrow
	 * Meta informations extracted from the WSDL
	 * - documentation : Online Escrow paid for by buyer or seller. Cannot use with real estate auctions. Escrow is recommended for for transactions over $500. Escrow service, available via Escrow.com, protects both buyer and seller by acting as a trusted third-party during the transaction and managing the payment process from start to finish. Also, if escrow by seller option used, then for Motors, this means that Escrow will be negotiated at the end of the auction.
	 * - minOccurs : 0
	 * @var PayPalEnumEscrowCodeType
	 */
	public $Escrow;
	/**
	 * The GiftIcon
	 * Meta informations extracted from the WSDL
	 * - documentation : If set, a generic gift icon displays in the listing's Title. GiftIcon must be set to to be able to use GiftServices options (e.g., GiftExpressShipping, GiftShipToRecipient, or GiftWrap).
	 * - minOccurs : 0
	 * @var int
	 */
	public $GiftIcon;
	/**
	 * The GiftServices
	 * Meta informations extracted from the WSDL
	 * - documentation : Gift service options offered by the seller of the listed item.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalEnumGiftServicesCodeType
	 */
	public $GiftServices;
	/**
	 * The HitCounter
	 * Meta informations extracted from the WSDL
	 * - documentation : Optional hit counter for the item's listing page. Possible values are: "NoHitCounter" "HonestyStyle" "GreenLED" "Hidden"
	 * - minOccurs : 0
	 * @var PayPalEnumHitCounterCodeType
	 */
	public $HitCounter;
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The ListingDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Includes listing details in terms of start and end time of listing (in GMT) as well as other details (e.g., orginal item for second chance, converted start price, etc.).
	 * - minOccurs : 0
	 * @var PayPalStructListingDetailsType
	 */
	public $ListingDetails;
	/**
	 * The ListingDesigner
	 * Meta informations extracted from the WSDL
	 * - documentation : When an item is first listed (using AddItem), a Layout template or a Theme template (or both) can be assigned to the item. A Layout template is assigned to a new item by specifying the Layout template ID (in the AddItem input argument LayoutID). Similarly, a Theme template is assigned to the item using the ThemeID argument.
	 * - minOccurs : 0
	 * @var PayPalStructListingDesignerType
	 */
	public $ListingDesigner;
	/**
	 * The ListingDuration
	 * @var PayPalEnumListingDurationCodeType
	 */
	public $ListingDuration;
	/**
	 * The ListingEnhancement
	 * Meta informations extracted from the WSDL
	 * - documentation : Describes the types of enhancment supported for the item's listing.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalEnumListingEnhancementsCodeType
	 */
	public $ListingEnhancement;
	/**
	 * The ListingType
	 * Meta informations extracted from the WSDL
	 * - documentation : Describes the type of listing for the item a seller has chosen (e.g., Chinese, Dutch, FixedPrice, etc.).
	 * - minOccurs : 0
	 * @var PayPalEnumListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Location
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the geographical location of the item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Location;
	/**
	 * The PartnerCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Needed for add item only for partners.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PartnerCode;
	/**
	 * The PartnerName
	 * Meta informations extracted from the WSDL
	 * - documentation : Needed for add item only for partners.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PartnerName;
	/**
	 * The PaymentMethods
	 * @var PayPalEnumBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The PayPalEmailAddress
	 * Meta informations extracted from the WSDL
	 * - documentation : Valid PayPal e-mail address if seller has chosen PayPal as a payment method for the listed item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PayPalEmailAddress;
	/**
	 * The PrimaryCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : Container for data on the primary category of listing.
	 * - minOccurs : 0
	 * @var PayPalStructCategoryType
	 */
	public $PrimaryCategory;
	/**
	 * The PrivateListing
	 * Meta informations extracted from the WSDL
	 * - documentation : Private auction. Not applicable to Fixed Price items.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $PrivateListing;
	/**
	 * The Quantity
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of items being sold in the auction.
	 * - minOccurs : 0
	 * @var int
	 */
	public $Quantity;
	/**
	 * The RegionID
	 * @var string
	 */
	public $RegionID;
	/**
	 * The RelistLink
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, creates a link from the old listing for the item to the new relist page, which accommodates users who might still look for the item under its old item ID. Also adds the relist ID to the old listing's record in the eBay database, which can be returned by calling GetItem for the old ItemId. If your application creates the listing page for the user, you need to add the relist link option to your application for your users.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $RelistLink;
	/**
	 * The ReservePrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the reserve price for a reserve auction. Returned only if DetailLevel = 4. ReservePrice is only returned for auctions with a reserve price where the user calling GetItem is the item's seller. Returned as null for International Fixed Price items. For more information on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $ReservePrice;
	/**
	 * The ReviseStatus
	 * @var PayPalStructReviseStatusType
	 */
	public $ReviseStatus;
	/**
	 * The ScheduleTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $ScheduleTime;
	/**
	 * The SecondaryCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : Container for data on the secondary category of listing. Secondary category is optional.
	 * - minOccurs : 0
	 * @var PayPalStructCategoryType
	 */
	public $SecondaryCategory;
	/**
	 * The SiteHostedPicture
	 * Meta informations extracted from the WSDL
	 * - documentation : Item picture information for pictures hosted at eBay site.
	 * - minOccurs : 0
	 * @var PayPalStructSiteHostedPictureType
	 */
	public $SiteHostedPicture;
	/**
	 * The Seller
	 * @var PayPalStructUserType
	 */
	public $Seller;
	/**
	 * The SellingStatus
	 * @var PayPalStructSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The ShippingOption
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies where the seller is willing to ship the item. Default "SiteOnly". Valid values are: SiteOnly (the default) WorldWide SitePlusRegions WillNotShip If SitePlusRegions is selected, then at least one regions argument (ShipToNorthAmerica, ShipToEurope, etc.) must also be set.
	 * - minOccurs : 0
	 * @var PayPalEnumShippingOptionCodeType
	 */
	public $ShippingOption;
	/**
	 * The ShippingDetails
	 * @var PayPalStructShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ShippingRegions
	 * @var PayPalEnumShippingRegionCodeType
	 */
	public $ShippingRegions;
	/**
	 * The ShippingTerms
	 * Meta informations extracted from the WSDL
	 * - documentation : Describes who pays for the delivery of an item (e.g., buyer or seller).
	 * - minOccurs : 0
	 * @var PayPalEnumShippingTermsCodeType
	 */
	public $ShippingTerms;
	/**
	 * The Site
	 * @var PayPalEnumSiteCodeType
	 */
	public $Site;
	/**
	 * The StartPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Starting price for the item. For Type=7 or Type=9 (Fixed Price) items, if the item price (MinimumBid) is revised, this field returns the new price.
	 * - minOccurs : 0
	 * @var PayPalStructAmountType
	 */
	public $StartPrice;
	/**
	 * The Storefront
	 * Meta informations extracted from the WSDL
	 * - documentation : Storefront is shown for any item that belongs to an eBay Store owner, regardless of whether it is fixed price or auction type. Not returned for International Fixed Price items.
	 * - minOccurs : 0
	 * @var PayPalStructStorefrontType
	 */
	public $Storefront;
	/**
	 * The SubTitle
	 * Meta informations extracted from the WSDL
	 * - documentation : Subtitle to use in addition to the title. Provides more keywords when buyers search in titles and descriptions.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SubTitle;
	/**
	 * The TimeLeft
	 * Meta informations extracted from the WSDL
	 * - documentation : Time until the the end of the listing (e.g., the amount of time left in an active auction).
	 * - minOccurs : 0
	 * @var duration
	 */
	public $TimeLeft;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of the item as it appears for auctions.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The UUID
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies a universally unique identifier. The UUID can only contain digits from 0-9 and letters from A-F. The UUID must be 32 characters long. For example, 1FB02B2-9D27-3acb-ABA2-9D539C374228
	 * - length : 36
	 * @var string
	 */
	public $UUID;
	/**
	 * The VATDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : VAT info container.
	 * - minOccurs : 0
	 * @var PayPalStructVATDetailsType
	 */
	public $VATDetails;
	/**
	 * The VendorHostedPicture
	 * Meta informations extracted from the WSDL
	 * - documentation : Item picture information for pictures hosted at vendor (i.e., remote) site.
	 * - minOccurs : 0
	 * @var PayPalStructVendorHostedPictureType
	 */
	public $VendorHostedPicture;
	/**
	 * Constructor method for ItemType
	 * @see parent::__construct()
	 * @param string $_applicationData
	 * @param PayPalStructListOfAttributeSetType $_listOfAttributeSets
	 * @param boolean $_autoPay
	 * @param PayPalEnumBuyerProtectionCodeType $_buyerProtection
	 * @param PayPalStructAmountType $_buyItNowPrice
	 * @param PayPalStructCharityType $_charity
	 * @param PayPalEnumCountryCodeType $_country
	 * @param PayPalStructCrossPromotionsType $_crossPromotion
	 * @param PayPalEnumCurrencyCodeType $_currency
	 * @param string $_description
	 * @param PayPalEnumEscrowCodeType $_escrow
	 * @param int $_giftIcon
	 * @param PayPalEnumGiftServicesCodeType $_giftServices
	 * @param PayPalEnumHitCounterCodeType $_hitCounter
	 * @param string $_itemID
	 * @param PayPalStructListingDetailsType $_listingDetails
	 * @param PayPalStructListingDesignerType $_listingDesigner
	 * @param PayPalEnumListingDurationCodeType $_listingDuration
	 * @param PayPalEnumListingEnhancementsCodeType $_listingEnhancement
	 * @param PayPalEnumListingTypeCodeType $_listingType
	 * @param string $_location
	 * @param string $_partnerCode
	 * @param string $_partnerName
	 * @param PayPalEnumBuyerPaymentMethodCodeType $_paymentMethods
	 * @param string $_payPalEmailAddress
	 * @param PayPalStructCategoryType $_primaryCategory
	 * @param boolean $_privateListing
	 * @param int $_quantity
	 * @param string $_regionID
	 * @param boolean $_relistLink
	 * @param PayPalStructAmountType $_reservePrice
	 * @param PayPalStructReviseStatusType $_reviseStatus
	 * @param dateTime $_scheduleTime
	 * @param PayPalStructCategoryType $_secondaryCategory
	 * @param PayPalStructSiteHostedPictureType $_siteHostedPicture
	 * @param PayPalStructUserType $_seller
	 * @param PayPalStructSellingStatusType $_sellingStatus
	 * @param PayPalEnumShippingOptionCodeType $_shippingOption
	 * @param PayPalStructShippingDetailsType $_shippingDetails
	 * @param PayPalEnumShippingRegionCodeType $_shippingRegions
	 * @param PayPalEnumShippingTermsCodeType $_shippingTerms
	 * @param PayPalEnumSiteCodeType $_site
	 * @param PayPalStructAmountType $_startPrice
	 * @param PayPalStructStorefrontType $_storefront
	 * @param string $_subTitle
	 * @param duration $_timeLeft
	 * @param string $_title
	 * @param string $_uUID
	 * @param PayPalStructVATDetailsType $_vATDetails
	 * @param PayPalStructVendorHostedPictureType $_vendorHostedPicture
	 * @return PayPalStructItemType
	 */
	public function __construct($_applicationData = NULL,$_listOfAttributeSets = NULL,$_autoPay = NULL,$_buyerProtection = NULL,$_buyItNowPrice = NULL,$_charity = NULL,$_country = NULL,$_crossPromotion = NULL,$_currency = NULL,$_description = NULL,$_escrow = NULL,$_giftIcon = NULL,$_giftServices = NULL,$_hitCounter = NULL,$_itemID = NULL,$_listingDetails = NULL,$_listingDesigner = NULL,$_listingDuration = NULL,$_listingEnhancement = NULL,$_listingType = NULL,$_location = NULL,$_partnerCode = NULL,$_partnerName = NULL,$_paymentMethods = NULL,$_payPalEmailAddress = NULL,$_primaryCategory = NULL,$_privateListing = NULL,$_quantity = NULL,$_regionID = NULL,$_relistLink = NULL,$_reservePrice = NULL,$_reviseStatus = NULL,$_scheduleTime = NULL,$_secondaryCategory = NULL,$_siteHostedPicture = NULL,$_seller = NULL,$_sellingStatus = NULL,$_shippingOption = NULL,$_shippingDetails = NULL,$_shippingRegions = NULL,$_shippingTerms = NULL,$_site = NULL,$_startPrice = NULL,$_storefront = NULL,$_subTitle = NULL,$_timeLeft = NULL,$_title = NULL,$_uUID = NULL,$_vATDetails = NULL,$_vendorHostedPicture = NULL)
	{
		parent::__construct(array('ApplicationData'=>$_applicationData,'ListOfAttributeSets'=>$_listOfAttributeSets,'AutoPay'=>$_autoPay,'BuyerProtection'=>$_buyerProtection,'BuyItNowPrice'=>$_buyItNowPrice,'Charity'=>$_charity,'Country'=>$_country,'CrossPromotion'=>$_crossPromotion,'Currency'=>$_currency,'Description'=>$_description,'Escrow'=>$_escrow,'GiftIcon'=>$_giftIcon,'GiftServices'=>$_giftServices,'HitCounter'=>$_hitCounter,'ItemID'=>$_itemID,'ListingDetails'=>$_listingDetails,'ListingDesigner'=>$_listingDesigner,'ListingDuration'=>$_listingDuration,'ListingEnhancement'=>$_listingEnhancement,'ListingType'=>$_listingType,'Location'=>$_location,'PartnerCode'=>$_partnerCode,'PartnerName'=>$_partnerName,'PaymentMethods'=>$_paymentMethods,'PayPalEmailAddress'=>$_payPalEmailAddress,'PrimaryCategory'=>$_primaryCategory,'PrivateListing'=>$_privateListing,'Quantity'=>$_quantity,'RegionID'=>$_regionID,'RelistLink'=>$_relistLink,'ReservePrice'=>$_reservePrice,'ReviseStatus'=>$_reviseStatus,'ScheduleTime'=>$_scheduleTime,'SecondaryCategory'=>$_secondaryCategory,'SiteHostedPicture'=>$_siteHostedPicture,'Seller'=>$_seller,'SellingStatus'=>$_sellingStatus,'ShippingOption'=>$_shippingOption,'ShippingDetails'=>$_shippingDetails,'ShippingRegions'=>$_shippingRegions,'ShippingTerms'=>$_shippingTerms,'Site'=>$_site,'StartPrice'=>$_startPrice,'Storefront'=>$_storefront,'SubTitle'=>$_subTitle,'TimeLeft'=>$_timeLeft,'Title'=>$_title,'UUID'=>$_uUID,'VATDetails'=>$_vATDetails,'VendorHostedPicture'=>$_vendorHostedPicture));
	}
	/**
	 * Get ApplicationData value
	 * @return string|null
	 */
	public function getApplicationData()
	{
		return $this->ApplicationData;
	}
	/**
	 * Set ApplicationData value
	 * @param string $_applicationData the ApplicationData
	 * @return string
	 */
	public function setApplicationData($_applicationData)
	{
		return ($this->ApplicationData = $_applicationData);
	}
	/**
	 * Get ListOfAttributeSets value
	 * @return PayPalStructListOfAttributeSetType|null
	 */
	public function getListOfAttributeSets()
	{
		return $this->ListOfAttributeSets;
	}
	/**
	 * Set ListOfAttributeSets value
	 * @param PayPalStructListOfAttributeSetType $_listOfAttributeSets the ListOfAttributeSets
	 * @return PayPalStructListOfAttributeSetType
	 */
	public function setListOfAttributeSets($_listOfAttributeSets)
	{
		return ($this->ListOfAttributeSets = $_listOfAttributeSets);
	}
	/**
	 * Get AutoPay value
	 * @return boolean|null
	 */
	public function getAutoPay()
	{
		return $this->AutoPay;
	}
	/**
	 * Set AutoPay value
	 * @param boolean $_autoPay the AutoPay
	 * @return boolean
	 */
	public function setAutoPay($_autoPay)
	{
		return ($this->AutoPay = $_autoPay);
	}
	/**
	 * Get BuyerProtection value
	 * @return PayPalEnumBuyerProtectionCodeType|null
	 */
	public function getBuyerProtection()
	{
		return $this->BuyerProtection;
	}
	/**
	 * Set BuyerProtection value
	 * @uses PayPalEnumBuyerProtectionCodeType::valueIsValid()
	 * @param PayPalEnumBuyerProtectionCodeType $_buyerProtection the BuyerProtection
	 * @return PayPalEnumBuyerProtectionCodeType
	 */
	public function setBuyerProtection($_buyerProtection)
	{
		if(!PayPalEnumBuyerProtectionCodeType::valueIsValid($_buyerProtection))
		{
			return false;
		}
		return ($this->BuyerProtection = $_buyerProtection);
	}
	/**
	 * Get BuyItNowPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * Set BuyItNowPrice value
	 * @param PayPalStructAmountType $_buyItNowPrice the BuyItNowPrice
	 * @return PayPalStructAmountType
	 */
	public function setBuyItNowPrice($_buyItNowPrice)
	{
		return ($this->BuyItNowPrice = $_buyItNowPrice);
	}
	/**
	 * Get Charity value
	 * @return PayPalStructCharityType|null
	 */
	public function getCharity()
	{
		return $this->Charity;
	}
	/**
	 * Set Charity value
	 * @param PayPalStructCharityType $_charity the Charity
	 * @return PayPalStructCharityType
	 */
	public function setCharity($_charity)
	{
		return ($this->Charity = $_charity);
	}
	/**
	 * Get Country value
	 * @return PayPalEnumCountryCodeType|null
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Country value
	 * @uses PayPalEnumCountryCodeType::valueIsValid()
	 * @param PayPalEnumCountryCodeType $_country the Country
	 * @return PayPalEnumCountryCodeType
	 */
	public function setCountry($_country)
	{
		if(!PayPalEnumCountryCodeType::valueIsValid($_country))
		{
			return false;
		}
		return ($this->Country = $_country);
	}
	/**
	 * Get CrossPromotion value
	 * @return PayPalStructCrossPromotionsType|null
	 */
	public function getCrossPromotion()
	{
		return $this->CrossPromotion;
	}
	/**
	 * Set CrossPromotion value
	 * @param PayPalStructCrossPromotionsType $_crossPromotion the CrossPromotion
	 * @return PayPalStructCrossPromotionsType
	 */
	public function setCrossPromotion($_crossPromotion)
	{
		return ($this->CrossPromotion = $_crossPromotion);
	}
	/**
	 * Get Currency value
	 * @return PayPalEnumCurrencyCodeType|null
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Currency value
	 * @uses PayPalEnumCurrencyCodeType::valueIsValid()
	 * @param PayPalEnumCurrencyCodeType $_currency the Currency
	 * @return PayPalEnumCurrencyCodeType
	 */
	public function setCurrency($_currency)
	{
		if(!PayPalEnumCurrencyCodeType::valueIsValid($_currency))
		{
			return false;
		}
		return ($this->Currency = $_currency);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get Escrow value
	 * @return PayPalEnumEscrowCodeType|null
	 */
	public function getEscrow()
	{
		return $this->Escrow;
	}
	/**
	 * Set Escrow value
	 * @uses PayPalEnumEscrowCodeType::valueIsValid()
	 * @param PayPalEnumEscrowCodeType $_escrow the Escrow
	 * @return PayPalEnumEscrowCodeType
	 */
	public function setEscrow($_escrow)
	{
		if(!PayPalEnumEscrowCodeType::valueIsValid($_escrow))
		{
			return false;
		}
		return ($this->Escrow = $_escrow);
	}
	/**
	 * Get GiftIcon value
	 * @return int|null
	 */
	public function getGiftIcon()
	{
		return $this->GiftIcon;
	}
	/**
	 * Set GiftIcon value
	 * @param int $_giftIcon the GiftIcon
	 * @return int
	 */
	public function setGiftIcon($_giftIcon)
	{
		return ($this->GiftIcon = $_giftIcon);
	}
	/**
	 * Get GiftServices value
	 * @return PayPalEnumGiftServicesCodeType|null
	 */
	public function getGiftServices()
	{
		return $this->GiftServices;
	}
	/**
	 * Set GiftServices value
	 * @uses PayPalEnumGiftServicesCodeType::valueIsValid()
	 * @param PayPalEnumGiftServicesCodeType $_giftServices the GiftServices
	 * @return PayPalEnumGiftServicesCodeType
	 */
	public function setGiftServices($_giftServices)
	{
		if(!PayPalEnumGiftServicesCodeType::valueIsValid($_giftServices))
		{
			return false;
		}
		return ($this->GiftServices = $_giftServices);
	}
	/**
	 * Get HitCounter value
	 * @return PayPalEnumHitCounterCodeType|null
	 */
	public function getHitCounter()
	{
		return $this->HitCounter;
	}
	/**
	 * Set HitCounter value
	 * @uses PayPalEnumHitCounterCodeType::valueIsValid()
	 * @param PayPalEnumHitCounterCodeType $_hitCounter the HitCounter
	 * @return PayPalEnumHitCounterCodeType
	 */
	public function setHitCounter($_hitCounter)
	{
		if(!PayPalEnumHitCounterCodeType::valueIsValid($_hitCounter))
		{
			return false;
		}
		return ($this->HitCounter = $_hitCounter);
	}
	/**
	 * Get ItemID value
	 * @return string|null
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ItemID value
	 * @param string $_itemID the ItemID
	 * @return string
	 */
	public function setItemID($_itemID)
	{
		return ($this->ItemID = $_itemID);
	}
	/**
	 * Get ListingDetails value
	 * @return PayPalStructListingDetailsType|null
	 */
	public function getListingDetails()
	{
		return $this->ListingDetails;
	}
	/**
	 * Set ListingDetails value
	 * @param PayPalStructListingDetailsType $_listingDetails the ListingDetails
	 * @return PayPalStructListingDetailsType
	 */
	public function setListingDetails($_listingDetails)
	{
		return ($this->ListingDetails = $_listingDetails);
	}
	/**
	 * Get ListingDesigner value
	 * @return PayPalStructListingDesignerType|null
	 */
	public function getListingDesigner()
	{
		return $this->ListingDesigner;
	}
	/**
	 * Set ListingDesigner value
	 * @param PayPalStructListingDesignerType $_listingDesigner the ListingDesigner
	 * @return PayPalStructListingDesignerType
	 */
	public function setListingDesigner($_listingDesigner)
	{
		return ($this->ListingDesigner = $_listingDesigner);
	}
	/**
	 * Get ListingDuration value
	 * @return PayPalEnumListingDurationCodeType|null
	 */
	public function getListingDuration()
	{
		return $this->ListingDuration;
	}
	/**
	 * Set ListingDuration value
	 * @uses PayPalEnumListingDurationCodeType::valueIsValid()
	 * @param PayPalEnumListingDurationCodeType $_listingDuration the ListingDuration
	 * @return PayPalEnumListingDurationCodeType
	 */
	public function setListingDuration($_listingDuration)
	{
		if(!PayPalEnumListingDurationCodeType::valueIsValid($_listingDuration))
		{
			return false;
		}
		return ($this->ListingDuration = $_listingDuration);
	}
	/**
	 * Get ListingEnhancement value
	 * @return PayPalEnumListingEnhancementsCodeType|null
	 */
	public function getListingEnhancement()
	{
		return $this->ListingEnhancement;
	}
	/**
	 * Set ListingEnhancement value
	 * @uses PayPalEnumListingEnhancementsCodeType::valueIsValid()
	 * @param PayPalEnumListingEnhancementsCodeType $_listingEnhancement the ListingEnhancement
	 * @return PayPalEnumListingEnhancementsCodeType
	 */
	public function setListingEnhancement($_listingEnhancement)
	{
		if(!PayPalEnumListingEnhancementsCodeType::valueIsValid($_listingEnhancement))
		{
			return false;
		}
		return ($this->ListingEnhancement = $_listingEnhancement);
	}
	/**
	 * Get ListingType value
	 * @return PayPalEnumListingTypeCodeType|null
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set ListingType value
	 * @uses PayPalEnumListingTypeCodeType::valueIsValid()
	 * @param PayPalEnumListingTypeCodeType $_listingType the ListingType
	 * @return PayPalEnumListingTypeCodeType
	 */
	public function setListingType($_listingType)
	{
		if(!PayPalEnumListingTypeCodeType::valueIsValid($_listingType))
		{
			return false;
		}
		return ($this->ListingType = $_listingType);
	}
	/**
	 * Get Location value
	 * @return string|null
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set Location value
	 * @param string $_location the Location
	 * @return string
	 */
	public function setLocation($_location)
	{
		return ($this->Location = $_location);
	}
	/**
	 * Get PartnerCode value
	 * @return string|null
	 */
	public function getPartnerCode()
	{
		return $this->PartnerCode;
	}
	/**
	 * Set PartnerCode value
	 * @param string $_partnerCode the PartnerCode
	 * @return string
	 */
	public function setPartnerCode($_partnerCode)
	{
		return ($this->PartnerCode = $_partnerCode);
	}
	/**
	 * Get PartnerName value
	 * @return string|null
	 */
	public function getPartnerName()
	{
		return $this->PartnerName;
	}
	/**
	 * Set PartnerName value
	 * @param string $_partnerName the PartnerName
	 * @return string
	 */
	public function setPartnerName($_partnerName)
	{
		return ($this->PartnerName = $_partnerName);
	}
	/**
	 * Get PaymentMethods value
	 * @return PayPalEnumBuyerPaymentMethodCodeType|null
	 */
	public function getPaymentMethods()
	{
		return $this->PaymentMethods;
	}
	/**
	 * Set PaymentMethods value
	 * @uses PayPalEnumBuyerPaymentMethodCodeType::valueIsValid()
	 * @param PayPalEnumBuyerPaymentMethodCodeType $_paymentMethods the PaymentMethods
	 * @return PayPalEnumBuyerPaymentMethodCodeType
	 */
	public function setPaymentMethods($_paymentMethods)
	{
		if(!PayPalEnumBuyerPaymentMethodCodeType::valueIsValid($_paymentMethods))
		{
			return false;
		}
		return ($this->PaymentMethods = $_paymentMethods);
	}
	/**
	 * Get PayPalEmailAddress value
	 * @return string|null
	 */
	public function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}
	/**
	 * Set PayPalEmailAddress value
	 * @param string $_payPalEmailAddress the PayPalEmailAddress
	 * @return string
	 */
	public function setPayPalEmailAddress($_payPalEmailAddress)
	{
		return ($this->PayPalEmailAddress = $_payPalEmailAddress);
	}
	/**
	 * Get PrimaryCategory value
	 * @return PayPalStructCategoryType|null
	 */
	public function getPrimaryCategory()
	{
		return $this->PrimaryCategory;
	}
	/**
	 * Set PrimaryCategory value
	 * @param PayPalStructCategoryType $_primaryCategory the PrimaryCategory
	 * @return PayPalStructCategoryType
	 */
	public function setPrimaryCategory($_primaryCategory)
	{
		return ($this->PrimaryCategory = $_primaryCategory);
	}
	/**
	 * Get PrivateListing value
	 * @return boolean|null
	 */
	public function getPrivateListing()
	{
		return $this->PrivateListing;
	}
	/**
	 * Set PrivateListing value
	 * @param boolean $_privateListing the PrivateListing
	 * @return boolean
	 */
	public function setPrivateListing($_privateListing)
	{
		return ($this->PrivateListing = $_privateListing);
	}
	/**
	 * Get Quantity value
	 * @return int|null
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Quantity value
	 * @param int $_quantity the Quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->Quantity = $_quantity);
	}
	/**
	 * Get RegionID value
	 * @return string|null
	 */
	public function getRegionID()
	{
		return $this->RegionID;
	}
	/**
	 * Set RegionID value
	 * @param string $_regionID the RegionID
	 * @return string
	 */
	public function setRegionID($_regionID)
	{
		return ($this->RegionID = $_regionID);
	}
	/**
	 * Get RelistLink value
	 * @return boolean|null
	 */
	public function getRelistLink()
	{
		return $this->RelistLink;
	}
	/**
	 * Set RelistLink value
	 * @param boolean $_relistLink the RelistLink
	 * @return boolean
	 */
	public function setRelistLink($_relistLink)
	{
		return ($this->RelistLink = $_relistLink);
	}
	/**
	 * Get ReservePrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getReservePrice()
	{
		return $this->ReservePrice;
	}
	/**
	 * Set ReservePrice value
	 * @param PayPalStructAmountType $_reservePrice the ReservePrice
	 * @return PayPalStructAmountType
	 */
	public function setReservePrice($_reservePrice)
	{
		return ($this->ReservePrice = $_reservePrice);
	}
	/**
	 * Get ReviseStatus value
	 * @return PayPalStructReviseStatusType|null
	 */
	public function getReviseStatus()
	{
		return $this->ReviseStatus;
	}
	/**
	 * Set ReviseStatus value
	 * @param PayPalStructReviseStatusType $_reviseStatus the ReviseStatus
	 * @return PayPalStructReviseStatusType
	 */
	public function setReviseStatus($_reviseStatus)
	{
		return ($this->ReviseStatus = $_reviseStatus);
	}
	/**
	 * Get ScheduleTime value
	 * @return dateTime|null
	 */
	public function getScheduleTime()
	{
		return $this->ScheduleTime;
	}
	/**
	 * Set ScheduleTime value
	 * @param dateTime $_scheduleTime the ScheduleTime
	 * @return dateTime
	 */
	public function setScheduleTime($_scheduleTime)
	{
		return ($this->ScheduleTime = $_scheduleTime);
	}
	/**
	 * Get SecondaryCategory value
	 * @return PayPalStructCategoryType|null
	 */
	public function getSecondaryCategory()
	{
		return $this->SecondaryCategory;
	}
	/**
	 * Set SecondaryCategory value
	 * @param PayPalStructCategoryType $_secondaryCategory the SecondaryCategory
	 * @return PayPalStructCategoryType
	 */
	public function setSecondaryCategory($_secondaryCategory)
	{
		return ($this->SecondaryCategory = $_secondaryCategory);
	}
	/**
	 * Get SiteHostedPicture value
	 * @return PayPalStructSiteHostedPictureType|null
	 */
	public function getSiteHostedPicture()
	{
		return $this->SiteHostedPicture;
	}
	/**
	 * Set SiteHostedPicture value
	 * @param PayPalStructSiteHostedPictureType $_siteHostedPicture the SiteHostedPicture
	 * @return PayPalStructSiteHostedPictureType
	 */
	public function setSiteHostedPicture($_siteHostedPicture)
	{
		return ($this->SiteHostedPicture = $_siteHostedPicture);
	}
	/**
	 * Get Seller value
	 * @return PayPalStructUserType|null
	 */
	public function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * Set Seller value
	 * @param PayPalStructUserType $_seller the Seller
	 * @return PayPalStructUserType
	 */
	public function setSeller($_seller)
	{
		return ($this->Seller = $_seller);
	}
	/**
	 * Get SellingStatus value
	 * @return PayPalStructSellingStatusType|null
	 */
	public function getSellingStatus()
	{
		return $this->SellingStatus;
	}
	/**
	 * Set SellingStatus value
	 * @param PayPalStructSellingStatusType $_sellingStatus the SellingStatus
	 * @return PayPalStructSellingStatusType
	 */
	public function setSellingStatus($_sellingStatus)
	{
		return ($this->SellingStatus = $_sellingStatus);
	}
	/**
	 * Get ShippingOption value
	 * @return PayPalEnumShippingOptionCodeType|null
	 */
	public function getShippingOption()
	{
		return $this->ShippingOption;
	}
	/**
	 * Set ShippingOption value
	 * @uses PayPalEnumShippingOptionCodeType::valueIsValid()
	 * @param PayPalEnumShippingOptionCodeType $_shippingOption the ShippingOption
	 * @return PayPalEnumShippingOptionCodeType
	 */
	public function setShippingOption($_shippingOption)
	{
		if(!PayPalEnumShippingOptionCodeType::valueIsValid($_shippingOption))
		{
			return false;
		}
		return ($this->ShippingOption = $_shippingOption);
	}
	/**
	 * Get ShippingDetails value
	 * @return PayPalStructShippingDetailsType|null
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ShippingDetails value
	 * @param PayPalStructShippingDetailsType $_shippingDetails the ShippingDetails
	 * @return PayPalStructShippingDetailsType
	 */
	public function setShippingDetails($_shippingDetails)
	{
		return ($this->ShippingDetails = $_shippingDetails);
	}
	/**
	 * Get ShippingRegions value
	 * @return PayPalEnumShippingRegionCodeType|null
	 */
	public function getShippingRegions()
	{
		return $this->ShippingRegions;
	}
	/**
	 * Set ShippingRegions value
	 * @uses PayPalEnumShippingRegionCodeType::valueIsValid()
	 * @param PayPalEnumShippingRegionCodeType $_shippingRegions the ShippingRegions
	 * @return PayPalEnumShippingRegionCodeType
	 */
	public function setShippingRegions($_shippingRegions)
	{
		if(!PayPalEnumShippingRegionCodeType::valueIsValid($_shippingRegions))
		{
			return false;
		}
		return ($this->ShippingRegions = $_shippingRegions);
	}
	/**
	 * Get ShippingTerms value
	 * @return PayPalEnumShippingTermsCodeType|null
	 */
	public function getShippingTerms()
	{
		return $this->ShippingTerms;
	}
	/**
	 * Set ShippingTerms value
	 * @uses PayPalEnumShippingTermsCodeType::valueIsValid()
	 * @param PayPalEnumShippingTermsCodeType $_shippingTerms the ShippingTerms
	 * @return PayPalEnumShippingTermsCodeType
	 */
	public function setShippingTerms($_shippingTerms)
	{
		if(!PayPalEnumShippingTermsCodeType::valueIsValid($_shippingTerms))
		{
			return false;
		}
		return ($this->ShippingTerms = $_shippingTerms);
	}
	/**
	 * Get Site value
	 * @return PayPalEnumSiteCodeType|null
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set Site value
	 * @uses PayPalEnumSiteCodeType::valueIsValid()
	 * @param PayPalEnumSiteCodeType $_site the Site
	 * @return PayPalEnumSiteCodeType
	 */
	public function setSite($_site)
	{
		if(!PayPalEnumSiteCodeType::valueIsValid($_site))
		{
			return false;
		}
		return ($this->Site = $_site);
	}
	/**
	 * Get StartPrice value
	 * @return PayPalStructAmountType|null
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set StartPrice value
	 * @param PayPalStructAmountType $_startPrice the StartPrice
	 * @return PayPalStructAmountType
	 */
	public function setStartPrice($_startPrice)
	{
		return ($this->StartPrice = $_startPrice);
	}
	/**
	 * Get Storefront value
	 * @return PayPalStructStorefrontType|null
	 */
	public function getStorefront()
	{
		return $this->Storefront;
	}
	/**
	 * Set Storefront value
	 * @param PayPalStructStorefrontType $_storefront the Storefront
	 * @return PayPalStructStorefrontType
	 */
	public function setStorefront($_storefront)
	{
		return ($this->Storefront = $_storefront);
	}
	/**
	 * Get SubTitle value
	 * @return string|null
	 */
	public function getSubTitle()
	{
		return $this->SubTitle;
	}
	/**
	 * Set SubTitle value
	 * @param string $_subTitle the SubTitle
	 * @return string
	 */
	public function setSubTitle($_subTitle)
	{
		return ($this->SubTitle = $_subTitle);
	}
	/**
	 * Get TimeLeft value
	 * @return duration|null
	 */
	public function getTimeLeft()
	{
		return $this->TimeLeft;
	}
	/**
	 * Set TimeLeft value
	 * @param duration $_timeLeft the TimeLeft
	 * @return duration
	 */
	public function setTimeLeft($_timeLeft)
	{
		return ($this->TimeLeft = $_timeLeft);
	}
	/**
	 * Get Title value
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Title value
	 * @param string $_title the Title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->Title = $_title);
	}
	/**
	 * Get UUID value
	 * @return string|null
	 */
	public function getUUID()
	{
		return $this->UUID;
	}
	/**
	 * Set UUID value
	 * @param string $_uUID the UUID
	 * @return string
	 */
	public function setUUID($_uUID)
	{
		return ($this->UUID = $_uUID);
	}
	/**
	 * Get VATDetails value
	 * @return PayPalStructVATDetailsType|null
	 */
	public function getVATDetails()
	{
		return $this->VATDetails;
	}
	/**
	 * Set VATDetails value
	 * @param PayPalStructVATDetailsType $_vATDetails the VATDetails
	 * @return PayPalStructVATDetailsType
	 */
	public function setVATDetails($_vATDetails)
	{
		return ($this->VATDetails = $_vATDetails);
	}
	/**
	 * Get VendorHostedPicture value
	 * @return PayPalStructVendorHostedPictureType|null
	 */
	public function getVendorHostedPicture()
	{
		return $this->VendorHostedPicture;
	}
	/**
	 * Set VendorHostedPicture value
	 * @param PayPalStructVendorHostedPictureType $_vendorHostedPicture the VendorHostedPicture
	 * @return PayPalStructVendorHostedPictureType
	 */
	public function setVendorHostedPicture($_vendorHostedPicture)
	{
		return ($this->VendorHostedPicture = $_vendorHostedPicture);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructItemType
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