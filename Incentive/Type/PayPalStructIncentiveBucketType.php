<?php
/**
 * File for class PayPalStructIncentiveBucketType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveBucketType originally named IncentiveBucketType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveBucketType extends PayPalWsdlClass
{
	/**
	 * The Items
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructIncentiveItemType
	 */
	public $Items;
	/**
	 * The BucketId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $BucketId;
	/**
	 * The SellerId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $SellerId;
	/**
	 * The ExternalSellerId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalSellerId;
	/**
	 * The BucketSubtotalAmt
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BucketSubtotalAmt;
	/**
	 * The BucketShippingAmt
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BucketShippingAmt;
	/**
	 * The BucketInsuranceAmt
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BucketInsuranceAmt;
	/**
	 * The BucketSalesTaxAmt
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BucketSalesTaxAmt;
	/**
	 * The BucketTotalAmt
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $BucketTotalAmt;
	/**
	 * Constructor method for IncentiveBucketType
	 * @see parent::__construct()
	 * @param PayPalStructIncentiveItemType $_items
	 * @param string $_bucketId
	 * @param string $_sellerId
	 * @param string $_externalSellerId
	 * @param PayPalStructBasicAmountType $_bucketSubtotalAmt
	 * @param PayPalStructBasicAmountType $_bucketShippingAmt
	 * @param PayPalStructBasicAmountType $_bucketInsuranceAmt
	 * @param PayPalStructBasicAmountType $_bucketSalesTaxAmt
	 * @param PayPalStructBasicAmountType $_bucketTotalAmt
	 * @return PayPalStructIncentiveBucketType
	 */
	public function __construct($_items = NULL,$_bucketId = NULL,$_sellerId = NULL,$_externalSellerId = NULL,$_bucketSubtotalAmt = NULL,$_bucketShippingAmt = NULL,$_bucketInsuranceAmt = NULL,$_bucketSalesTaxAmt = NULL,$_bucketTotalAmt = NULL)
	{
		parent::__construct(array('Items'=>$_items,'BucketId'=>$_bucketId,'SellerId'=>$_sellerId,'ExternalSellerId'=>$_externalSellerId,'BucketSubtotalAmt'=>$_bucketSubtotalAmt,'BucketShippingAmt'=>$_bucketShippingAmt,'BucketInsuranceAmt'=>$_bucketInsuranceAmt,'BucketSalesTaxAmt'=>$_bucketSalesTaxAmt,'BucketTotalAmt'=>$_bucketTotalAmt));
	}
	/**
	 * Get Items value
	 * @return PayPalStructIncentiveItemType|null
	 */
	public function getItems()
	{
		return $this->Items;
	}
	/**
	 * Set Items value
	 * @param PayPalStructIncentiveItemType $_items the Items
	 * @return PayPalStructIncentiveItemType
	 */
	public function setItems($_items)
	{
		return ($this->Items = $_items);
	}
	/**
	 * Get BucketId value
	 * @return string|null
	 */
	public function getBucketId()
	{
		return $this->BucketId;
	}
	/**
	 * Set BucketId value
	 * @param string $_bucketId the BucketId
	 * @return string
	 */
	public function setBucketId($_bucketId)
	{
		return ($this->BucketId = $_bucketId);
	}
	/**
	 * Get SellerId value
	 * @return string|null
	 */
	public function getSellerId()
	{
		return $this->SellerId;
	}
	/**
	 * Set SellerId value
	 * @param string $_sellerId the SellerId
	 * @return string
	 */
	public function setSellerId($_sellerId)
	{
		return ($this->SellerId = $_sellerId);
	}
	/**
	 * Get ExternalSellerId value
	 * @return string|null
	 */
	public function getExternalSellerId()
	{
		return $this->ExternalSellerId;
	}
	/**
	 * Set ExternalSellerId value
	 * @param string $_externalSellerId the ExternalSellerId
	 * @return string
	 */
	public function setExternalSellerId($_externalSellerId)
	{
		return ($this->ExternalSellerId = $_externalSellerId);
	}
	/**
	 * Get BucketSubtotalAmt value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBucketSubtotalAmt()
	{
		return $this->BucketSubtotalAmt;
	}
	/**
	 * Set BucketSubtotalAmt value
	 * @param PayPalStructBasicAmountType $_bucketSubtotalAmt the BucketSubtotalAmt
	 * @return PayPalStructBasicAmountType
	 */
	public function setBucketSubtotalAmt($_bucketSubtotalAmt)
	{
		return ($this->BucketSubtotalAmt = $_bucketSubtotalAmt);
	}
	/**
	 * Get BucketShippingAmt value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBucketShippingAmt()
	{
		return $this->BucketShippingAmt;
	}
	/**
	 * Set BucketShippingAmt value
	 * @param PayPalStructBasicAmountType $_bucketShippingAmt the BucketShippingAmt
	 * @return PayPalStructBasicAmountType
	 */
	public function setBucketShippingAmt($_bucketShippingAmt)
	{
		return ($this->BucketShippingAmt = $_bucketShippingAmt);
	}
	/**
	 * Get BucketInsuranceAmt value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBucketInsuranceAmt()
	{
		return $this->BucketInsuranceAmt;
	}
	/**
	 * Set BucketInsuranceAmt value
	 * @param PayPalStructBasicAmountType $_bucketInsuranceAmt the BucketInsuranceAmt
	 * @return PayPalStructBasicAmountType
	 */
	public function setBucketInsuranceAmt($_bucketInsuranceAmt)
	{
		return ($this->BucketInsuranceAmt = $_bucketInsuranceAmt);
	}
	/**
	 * Get BucketSalesTaxAmt value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBucketSalesTaxAmt()
	{
		return $this->BucketSalesTaxAmt;
	}
	/**
	 * Set BucketSalesTaxAmt value
	 * @param PayPalStructBasicAmountType $_bucketSalesTaxAmt the BucketSalesTaxAmt
	 * @return PayPalStructBasicAmountType
	 */
	public function setBucketSalesTaxAmt($_bucketSalesTaxAmt)
	{
		return ($this->BucketSalesTaxAmt = $_bucketSalesTaxAmt);
	}
	/**
	 * Get BucketTotalAmt value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getBucketTotalAmt()
	{
		return $this->BucketTotalAmt;
	}
	/**
	 * Set BucketTotalAmt value
	 * @param PayPalStructBasicAmountType $_bucketTotalAmt the BucketTotalAmt
	 * @return PayPalStructBasicAmountType
	 */
	public function setBucketTotalAmt($_bucketTotalAmt)
	{
		return ($this->BucketTotalAmt = $_bucketTotalAmt);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveBucketType
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