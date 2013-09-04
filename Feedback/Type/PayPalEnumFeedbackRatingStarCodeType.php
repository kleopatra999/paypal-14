<?php
/**
 * File for class PayPalEnumFeedbackRatingStarCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumFeedbackRatingStarCodeType originally named FeedbackRatingStarCodeType
 * Documentation : FeedbackRatingStarCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumFeedbackRatingStarCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : No graphic displayed
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Yellow'
	 * Meta informations extracted from the WSDL
	 * - documentation : Yellow Star
	 * @return string 'Yellow'
	 */
	const VALUE_YELLOW = 'Yellow';
	/**
	 * Constant for value 'Turquoise'
	 * Meta informations extracted from the WSDL
	 * - documentation : Turquoise Star
	 * @return string 'Turquoise'
	 */
	const VALUE_TURQUOISE = 'Turquoise';
	/**
	 * Constant for value 'Purple'
	 * Meta informations extracted from the WSDL
	 * - documentation : Purple Star
	 * @return string 'Purple'
	 */
	const VALUE_PURPLE = 'Purple';
	/**
	 * Constant for value 'Red'
	 * Meta informations extracted from the WSDL
	 * - documentation : Red Star
	 * @return string 'Red'
	 */
	const VALUE_RED = 'Red';
	/**
	 * Constant for value 'Green'
	 * Meta informations extracted from the WSDL
	 * - documentation : Green Star
	 * @return string 'Green'
	 */
	const VALUE_GREEN = 'Green';
	/**
	 * Constant for value 'YellowShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Yellow Shooting Star
	 * @return string 'YellowShooting'
	 */
	const VALUE_YELLOWSHOOTING = 'YellowShooting';
	/**
	 * Constant for value 'TurquoiseShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Turquoise Shooting Star
	 * @return string 'TurquoiseShooting'
	 */
	const VALUE_TURQUOISESHOOTING = 'TurquoiseShooting';
	/**
	 * Constant for value 'PurpleShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Purple Shooting Star
	 * @return string 'PurpleShooting'
	 */
	const VALUE_PURPLESHOOTING = 'PurpleShooting';
	/**
	 * Constant for value 'RedShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Red Shooting Star
	 * @return string 'RedShooting'
	 */
	const VALUE_REDSHOOTING = 'RedShooting';
	/**
	 * Constant for value 'Blue'
	 * Meta informations extracted from the WSDL
	 * - documentation : Blue Star
	 * @return string 'Blue'
	 */
	const VALUE_BLUE = 'Blue';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_NONE
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_YELLOW
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_TURQUOISE
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_PURPLE
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_RED
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_GREEN
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_YELLOWSHOOTING
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_TURQUOISESHOOTING
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_PURPLESHOOTING
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_REDSHOOTING
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_BLUE
	 * @uses PayPalEnumFeedbackRatingStarCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumFeedbackRatingStarCodeType::VALUE_NONE,PayPalEnumFeedbackRatingStarCodeType::VALUE_YELLOW,PayPalEnumFeedbackRatingStarCodeType::VALUE_TURQUOISE,PayPalEnumFeedbackRatingStarCodeType::VALUE_PURPLE,PayPalEnumFeedbackRatingStarCodeType::VALUE_RED,PayPalEnumFeedbackRatingStarCodeType::VALUE_GREEN,PayPalEnumFeedbackRatingStarCodeType::VALUE_YELLOWSHOOTING,PayPalEnumFeedbackRatingStarCodeType::VALUE_TURQUOISESHOOTING,PayPalEnumFeedbackRatingStarCodeType::VALUE_PURPLESHOOTING,PayPalEnumFeedbackRatingStarCodeType::VALUE_REDSHOOTING,PayPalEnumFeedbackRatingStarCodeType::VALUE_BLUE,PayPalEnumFeedbackRatingStarCodeType::VALUE_CUSTOMCODE));
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