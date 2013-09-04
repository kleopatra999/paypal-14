<?php
/**
 * File for class PayPalEnumUserStatusCodeType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumUserStatusCodeType originally named UserStatusCodeType
 * Documentation : UserStatusCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumUserStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations extracted from the WSDL
	 * - documentation : User properties have never been set. This value should seldom, if ever, be returned and typically represents a problem.
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Suspended'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has been suspended from selling and buying, such as for violations of eBay terms or agreement.
	 * @return string 'Suspended'
	 */
	const VALUE_SUSPENDED = 'Suspended';
	/**
	 * Constant for value 'Confirmed'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has completed online registration and has properly responded to confirmation email. Most users should fall in this category.
	 * @return string 'Confirmed'
	 */
	const VALUE_CONFIRMED = 'Confirmed';
	/**
	 * Constant for value 'Unconfirmed'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has completed online registration, but has either not responded to confirmation email or has not yet been sent the confirmation email. .
	 * @return string 'Unconfirmed'
	 */
	const VALUE_UNCONFIRMED = 'Unconfirmed';
	/**
	 * Constant for value 'Ghost'
	 * Meta informations extracted from the WSDL
	 * - documentation : Registered users of AuctionWeb (pre-eBay) who never re-registered on eBay.
	 * @return string 'Ghost'
	 */
	const VALUE_GHOST = 'Ghost';
	/**
	 * Constant for value 'InMaintenance'
	 * Meta informations extracted from the WSDL
	 * - documentation : Temporary user record state indicating the record is in the process of being changed by eBay. Query user information again to get new status.
	 * @return string 'InMaintenance'
	 */
	const VALUE_INMAINTENANCE = 'InMaintenance';
	/**
	 * Constant for value 'Deleted'
	 * Meta informations extracted from the WSDL
	 * - documentation : Records for the specified user have been deleted.
	 * @return string 'Deleted'
	 */
	const VALUE_DELETED = 'Deleted';
	/**
	 * Constant for value 'CreditCardVerify'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has completed registration and confirmation, but is pending a verification of credit card information.
	 * @return string 'CreditCardVerify'
	 */
	const VALUE_CREDITCARDVERIFY = 'CreditCardVerify';
	/**
	 * Constant for value 'AccountOnHold'
	 * Meta informations extracted from the WSDL
	 * - documentation : User's account is on hold, such as for non-payment of amounts due eBay. User cannot sell or buy items.
	 * @return string 'AccountOnHold'
	 */
	const VALUE_ACCOUNTONHOLD = 'AccountOnHold';
	/**
	 * Constant for value 'Merged'
	 * Meta informations extracted from the WSDL
	 * - documentation : User record has been merged with another account record for the same user.
	 * @return string 'Merged'
	 */
	const VALUE_MERGED = 'Merged';
	/**
	 * Constant for value 'RegistrationCodeMailOut'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has completed online registration and has been sent the confirmation email, but has not yet responded to the confirmation email.
	 * @return string 'RegistrationCodeMailOut'
	 */
	const VALUE_REGISTRATIONCODEMAILOUT = 'RegistrationCodeMailOut';
	/**
	 * Constant for value 'TermPending'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has been scheduled for account closure (typically when a user has requested to have their account closed.) A user in this state should not be considered an active user.
	 * @return string 'TermPending'
	 */
	const VALUE_TERMPENDING = 'TermPending';
	/**
	 * Constant for value 'UnconfirmedHalfOptIn'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the registration confirmation is still pending.
	 * @return string 'UnconfirmedHalfOptIn'
	 */
	const VALUE_UNCONFIRMEDHALFOPTIN = 'UnconfirmedHalfOptIn';
	/**
	 * Constant for value 'CreditCardVerifyHalfOptIn'
	 * Meta informations extracted from the WSDL
	 * - documentation : User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the verification of credit card information is still pending.
	 * @return string 'CreditCardVerifyHalfOptIn'
	 */
	const VALUE_CREDITCARDVERIFYHALFOPTIN = 'CreditCardVerifyHalfOptIn';
	/**
	 * Constant for value 'UnconfirmedPassport'
	 * Meta informations extracted from the WSDL
	 * - documentation : Passport User. User has completed the registration process, but the registration confirmation is still pending.
	 * @return string 'UnconfirmedPassport'
	 */
	const VALUE_UNCONFIRMEDPASSPORT = 'UnconfirmedPassport';
	/**
	 * Constant for value 'CreditCardVerifyPassport'
	 * Meta informations extracted from the WSDL
	 * - documentation : Passport User Requiring Credit Card Verification. User has completed the registration process with credit card verification, but the registration confirmation is still pending.
	 * @return string 'CreditCardVerifyPassport'
	 */
	const VALUE_CREDITCARDVERIFYPASSPORT = 'CreditCardVerifyPassport';
	/**
	 * Constant for value 'UnconfirmedExpress'
	 * Meta informations extracted from the WSDL
	 * - documentation : Half.com User. User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the registration confirmation is still pending.
	 * @return string 'UnconfirmedExpress'
	 */
	const VALUE_UNCONFIRMEDEXPRESS = 'UnconfirmedExpress';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumUserStatusCodeType::VALUE_UNKNOWN
	 * @uses PayPalEnumUserStatusCodeType::VALUE_SUSPENDED
	 * @uses PayPalEnumUserStatusCodeType::VALUE_CONFIRMED
	 * @uses PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMED
	 * @uses PayPalEnumUserStatusCodeType::VALUE_GHOST
	 * @uses PayPalEnumUserStatusCodeType::VALUE_INMAINTENANCE
	 * @uses PayPalEnumUserStatusCodeType::VALUE_DELETED
	 * @uses PayPalEnumUserStatusCodeType::VALUE_CREDITCARDVERIFY
	 * @uses PayPalEnumUserStatusCodeType::VALUE_ACCOUNTONHOLD
	 * @uses PayPalEnumUserStatusCodeType::VALUE_MERGED
	 * @uses PayPalEnumUserStatusCodeType::VALUE_REGISTRATIONCODEMAILOUT
	 * @uses PayPalEnumUserStatusCodeType::VALUE_TERMPENDING
	 * @uses PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMEDHALFOPTIN
	 * @uses PayPalEnumUserStatusCodeType::VALUE_CREDITCARDVERIFYHALFOPTIN
	 * @uses PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMEDPASSPORT
	 * @uses PayPalEnumUserStatusCodeType::VALUE_CREDITCARDVERIFYPASSPORT
	 * @uses PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMEDEXPRESS
	 * @uses PayPalEnumUserStatusCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumUserStatusCodeType::VALUE_UNKNOWN,PayPalEnumUserStatusCodeType::VALUE_SUSPENDED,PayPalEnumUserStatusCodeType::VALUE_CONFIRMED,PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMED,PayPalEnumUserStatusCodeType::VALUE_GHOST,PayPalEnumUserStatusCodeType::VALUE_INMAINTENANCE,PayPalEnumUserStatusCodeType::VALUE_DELETED,PayPalEnumUserStatusCodeType::VALUE_CREDITCARDVERIFY,PayPalEnumUserStatusCodeType::VALUE_ACCOUNTONHOLD,PayPalEnumUserStatusCodeType::VALUE_MERGED,PayPalEnumUserStatusCodeType::VALUE_REGISTRATIONCODEMAILOUT,PayPalEnumUserStatusCodeType::VALUE_TERMPENDING,PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMEDHALFOPTIN,PayPalEnumUserStatusCodeType::VALUE_CREDITCARDVERIFYHALFOPTIN,PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMEDPASSPORT,PayPalEnumUserStatusCodeType::VALUE_CREDITCARDVERIFYPASSPORT,PayPalEnumUserStatusCodeType::VALUE_UNCONFIRMEDEXPRESS,PayPalEnumUserStatusCodeType::VALUE_CUSTOMCODE));
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