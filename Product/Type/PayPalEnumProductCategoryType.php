<?php
/**
 * File for class PayPalEnumProductCategoryType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumProductCategoryType originally named ProductCategoryType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumProductCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations extracted from the WSDL
	 * - documentation : Other
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Airlines'
	 * Meta informations extracted from the WSDL
	 * - documentation : Airlines
	 * @return string 'Airlines'
	 */
	const VALUE_AIRLINES = 'Airlines';
	/**
	 * Constant for value 'Antiques'
	 * Meta informations extracted from the WSDL
	 * - documentation : Antiques
	 * @return string 'Antiques'
	 */
	const VALUE_ANTIQUES = 'Antiques';
	/**
	 * Constant for value 'Art'
	 * Meta informations extracted from the WSDL
	 * - documentation : Art
	 * @return string 'Art'
	 */
	const VALUE_ART = 'Art';
	/**
	 * Constant for value 'Cameras_Photos'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cameras & Photos
	 * @return string 'Cameras_Photos'
	 */
	const VALUE_CAMERAS_PHOTOS = 'Cameras_Photos';
	/**
	 * Constant for value 'Cars_Boats_Vehicles_Parts'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cars, Boats, Vehicles & Parts
	 * @return string 'Cars_Boats_Vehicles_Parts'
	 */
	const VALUE_CARS_BOATS_VEHICLES_PARTS = 'Cars_Boats_Vehicles_Parts';
	/**
	 * Constant for value 'CellPhones_Telecom'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cell Phones & Telecom
	 * @return string 'CellPhones_Telecom'
	 */
	const VALUE_CELLPHONES_TELECOM = 'CellPhones_Telecom';
	/**
	 * Constant for value 'Coins_PaperMoney'
	 * Meta informations extracted from the WSDL
	 * - documentation : Coins & Paper Money
	 * @return string 'Coins_PaperMoney'
	 */
	const VALUE_COINS_PAPERMONEY = 'Coins_PaperMoney';
	/**
	 * Constant for value 'Collectibles'
	 * Meta informations extracted from the WSDL
	 * - documentation : Collectibles
	 * @return string 'Collectibles'
	 */
	const VALUE_COLLECTIBLES = 'Collectibles';
	/**
	 * Constant for value 'Computers_Networking'
	 * Meta informations extracted from the WSDL
	 * - documentation : Computers & Networking
	 * @return string 'Computers_Networking'
	 */
	const VALUE_COMPUTERS_NETWORKING = 'Computers_Networking';
	/**
	 * Constant for value 'ConsumerElectronics'
	 * Meta informations extracted from the WSDL
	 * - documentation : Consumer Electronics
	 * @return string 'ConsumerElectronics'
	 */
	const VALUE_CONSUMERELECTRONICS = 'ConsumerElectronics';
	/**
	 * Constant for value 'Jewelry_Watches'
	 * Meta informations extracted from the WSDL
	 * - documentation : Jewelry & Watches
	 * @return string 'Jewelry_Watches'
	 */
	const VALUE_JEWELRY_WATCHES = 'Jewelry_Watches';
	/**
	 * Constant for value 'MusicalInstruments'
	 * Meta informations extracted from the WSDL
	 * - documentation : Musical Instruments
	 * @return string 'MusicalInstruments'
	 */
	const VALUE_MUSICALINSTRUMENTS = 'MusicalInstruments';
	/**
	 * Constant for value 'RealEstate'
	 * Meta informations extracted from the WSDL
	 * - documentation : Real Estate
	 * @return string 'RealEstate'
	 */
	const VALUE_REALESTATE = 'RealEstate';
	/**
	 * Constant for value 'SportsMemorabilia_Cards_FanShop'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sports Memorabilia, Cards & Fan Shop
	 * @return string 'SportsMemorabilia_Cards_FanShop'
	 */
	const VALUE_SPORTSMEMORABILIA_CARDS_FANSHOP = 'SportsMemorabilia_Cards_FanShop';
	/**
	 * Constant for value 'Stamps'
	 * Meta informations extracted from the WSDL
	 * - documentation : Stamps
	 * @return string 'Stamps'
	 */
	const VALUE_STAMPS = 'Stamps';
	/**
	 * Constant for value 'Tickets'
	 * Meta informations extracted from the WSDL
	 * - documentation : Tickets
	 * @return string 'Tickets'
	 */
	const VALUE_TICKETS = 'Tickets';
	/**
	 * Constant for value 'Travels'
	 * Meta informations extracted from the WSDL
	 * - documentation : Travels
	 * @return string 'Travels'
	 */
	const VALUE_TRAVELS = 'Travels';
	/**
	 * Constant for value 'Gambling'
	 * Meta informations extracted from the WSDL
	 * - documentation : Gambling
	 * @return string 'Gambling'
	 */
	const VALUE_GAMBLING = 'Gambling';
	/**
	 * Constant for value 'Alcohol'
	 * Meta informations extracted from the WSDL
	 * - documentation : Alcohol
	 * @return string 'Alcohol'
	 */
	const VALUE_ALCOHOL = 'Alcohol';
	/**
	 * Constant for value 'Tobacco'
	 * Meta informations extracted from the WSDL
	 * - documentation : Tobacco
	 * @return string 'Tobacco'
	 */
	const VALUE_TOBACCO = 'Tobacco';
	/**
	 * Constant for value 'MoneyTransfer'
	 * Meta informations extracted from the WSDL
	 * - documentation : Money Transfer
	 * @return string 'MoneyTransfer'
	 */
	const VALUE_MONEYTRANSFER = 'MoneyTransfer';
	/**
	 * Constant for value 'Software'
	 * Meta informations extracted from the WSDL
	 * - documentation : Software
	 * @return string 'Software'
	 */
	const VALUE_SOFTWARE = 'Software';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumProductCategoryType::VALUE_OTHER
	 * @uses PayPalEnumProductCategoryType::VALUE_AIRLINES
	 * @uses PayPalEnumProductCategoryType::VALUE_ANTIQUES
	 * @uses PayPalEnumProductCategoryType::VALUE_ART
	 * @uses PayPalEnumProductCategoryType::VALUE_CAMERAS_PHOTOS
	 * @uses PayPalEnumProductCategoryType::VALUE_CARS_BOATS_VEHICLES_PARTS
	 * @uses PayPalEnumProductCategoryType::VALUE_CELLPHONES_TELECOM
	 * @uses PayPalEnumProductCategoryType::VALUE_COINS_PAPERMONEY
	 * @uses PayPalEnumProductCategoryType::VALUE_COLLECTIBLES
	 * @uses PayPalEnumProductCategoryType::VALUE_COMPUTERS_NETWORKING
	 * @uses PayPalEnumProductCategoryType::VALUE_CONSUMERELECTRONICS
	 * @uses PayPalEnumProductCategoryType::VALUE_JEWELRY_WATCHES
	 * @uses PayPalEnumProductCategoryType::VALUE_MUSICALINSTRUMENTS
	 * @uses PayPalEnumProductCategoryType::VALUE_REALESTATE
	 * @uses PayPalEnumProductCategoryType::VALUE_SPORTSMEMORABILIA_CARDS_FANSHOP
	 * @uses PayPalEnumProductCategoryType::VALUE_STAMPS
	 * @uses PayPalEnumProductCategoryType::VALUE_TICKETS
	 * @uses PayPalEnumProductCategoryType::VALUE_TRAVELS
	 * @uses PayPalEnumProductCategoryType::VALUE_GAMBLING
	 * @uses PayPalEnumProductCategoryType::VALUE_ALCOHOL
	 * @uses PayPalEnumProductCategoryType::VALUE_TOBACCO
	 * @uses PayPalEnumProductCategoryType::VALUE_MONEYTRANSFER
	 * @uses PayPalEnumProductCategoryType::VALUE_SOFTWARE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumProductCategoryType::VALUE_OTHER,PayPalEnumProductCategoryType::VALUE_AIRLINES,PayPalEnumProductCategoryType::VALUE_ANTIQUES,PayPalEnumProductCategoryType::VALUE_ART,PayPalEnumProductCategoryType::VALUE_CAMERAS_PHOTOS,PayPalEnumProductCategoryType::VALUE_CARS_BOATS_VEHICLES_PARTS,PayPalEnumProductCategoryType::VALUE_CELLPHONES_TELECOM,PayPalEnumProductCategoryType::VALUE_COINS_PAPERMONEY,PayPalEnumProductCategoryType::VALUE_COLLECTIBLES,PayPalEnumProductCategoryType::VALUE_COMPUTERS_NETWORKING,PayPalEnumProductCategoryType::VALUE_CONSUMERELECTRONICS,PayPalEnumProductCategoryType::VALUE_JEWELRY_WATCHES,PayPalEnumProductCategoryType::VALUE_MUSICALINSTRUMENTS,PayPalEnumProductCategoryType::VALUE_REALESTATE,PayPalEnumProductCategoryType::VALUE_SPORTSMEMORABILIA_CARDS_FANSHOP,PayPalEnumProductCategoryType::VALUE_STAMPS,PayPalEnumProductCategoryType::VALUE_TICKETS,PayPalEnumProductCategoryType::VALUE_TRAVELS,PayPalEnumProductCategoryType::VALUE_GAMBLING,PayPalEnumProductCategoryType::VALUE_ALCOHOL,PayPalEnumProductCategoryType::VALUE_TOBACCO,PayPalEnumProductCategoryType::VALUE_MONEYTRANSFER,PayPalEnumProductCategoryType::VALUE_SOFTWARE));
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