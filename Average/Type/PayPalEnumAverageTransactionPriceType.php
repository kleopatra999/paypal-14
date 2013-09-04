<?php
/**
 * File for class PayPalEnumAverageTransactionPriceType
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalEnumAverageTransactionPriceType originally named AverageTransactionPriceType
 * Documentation : AverageTransactionPriceType Enumeration Meaning AverageTransactionPrice-Not-Applicable AverageTransactionPrice-Range1 Less than $25 USD AverageTransactionPrice-Range2 $25 USD to $50 USD AverageTransactionPrice-Range3 $50 USD to $100 USD AverageTransactionPrice-Range4 $100 USD to $250 USD AverageTransactionPrice-Range5 $250 USD to $500 USD AverageTransactionPrice-Range6 $500 USD to $1,000 USD AverageTransactionPrice-Range7 $1,000 USD to $2,000 USD AverageTransactionPrice-Range8 $2,000 USD to $5,000 USD AverageTransactionPrice-Range9 $5,000 USD to $10,000 USD AverageTransactionPrice-Range10 More than $10,000 USD
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalEnumAverageTransactionPriceType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'AverageTransactionPrice-Not-Applicable'
	 * @return string 'AverageTransactionPrice-Not-Applicable'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_NOT_APPLICABLE = 'AverageTransactionPrice-Not-Applicable';
	/**
	 * Constant for value 'AverageTransactionPrice-Range1'
	 * @return string 'AverageTransactionPrice-Range1'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE1 = 'AverageTransactionPrice-Range1';
	/**
	 * Constant for value 'AverageTransactionPrice-Range2'
	 * @return string 'AverageTransactionPrice-Range2'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE2 = 'AverageTransactionPrice-Range2';
	/**
	 * Constant for value 'AverageTransactionPrice-Range3'
	 * @return string 'AverageTransactionPrice-Range3'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE3 = 'AverageTransactionPrice-Range3';
	/**
	 * Constant for value 'AverageTransactionPrice-Range4'
	 * @return string 'AverageTransactionPrice-Range4'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE4 = 'AverageTransactionPrice-Range4';
	/**
	 * Constant for value 'AverageTransactionPrice-Range5'
	 * @return string 'AverageTransactionPrice-Range5'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE5 = 'AverageTransactionPrice-Range5';
	/**
	 * Constant for value 'AverageTransactionPrice-Range6'
	 * @return string 'AverageTransactionPrice-Range6'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE6 = 'AverageTransactionPrice-Range6';
	/**
	 * Constant for value 'AverageTransactionPrice-Range7'
	 * @return string 'AverageTransactionPrice-Range7'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE7 = 'AverageTransactionPrice-Range7';
	/**
	 * Constant for value 'AverageTransactionPrice-Range8'
	 * @return string 'AverageTransactionPrice-Range8'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE8 = 'AverageTransactionPrice-Range8';
	/**
	 * Constant for value 'AverageTransactionPrice-Range9'
	 * @return string 'AverageTransactionPrice-Range9'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE9 = 'AverageTransactionPrice-Range9';
	/**
	 * Constant for value 'AverageTransactionPrice-Range10'
	 * @return string 'AverageTransactionPrice-Range10'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE10 = 'AverageTransactionPrice-Range10';
	/**
	 * Return true if value is allowed
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_NOT_APPLICABLE
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE1
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE2
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE3
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE4
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE5
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE6
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE7
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE8
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE9
	 * @uses PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE10
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_NOT_APPLICABLE,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE1,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE2,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE3,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE4,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE5,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE6,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE7,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE8,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE9,PayPalEnumAverageTransactionPriceType::VALUE_AVERAGETRANSACTIONPRICE_RANGE10));
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