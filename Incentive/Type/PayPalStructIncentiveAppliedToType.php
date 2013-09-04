<?php
/**
 * File for class PayPalStructIncentiveAppliedToType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructIncentiveAppliedToType originally named IncentiveAppliedToType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructIncentiveAppliedToType extends PayPalWsdlClass
{
	/**
	 * The BucketId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $BucketId;
	/**
	 * The ItemId
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemId;
	/**
	 * The IncentiveAmount
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $IncentiveAmount;
	/**
	 * The SubType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $SubType;
	/**
	 * Constructor method for IncentiveAppliedToType
	 * @see parent::__construct()
	 * @param string $_bucketId
	 * @param string $_itemId
	 * @param PayPalStructBasicAmountType $_incentiveAmount
	 * @param string $_subType
	 * @return PayPalStructIncentiveAppliedToType
	 */
	public function __construct($_bucketId = NULL,$_itemId = NULL,$_incentiveAmount = NULL,$_subType = NULL)
	{
		parent::__construct(array('BucketId'=>$_bucketId,'ItemId'=>$_itemId,'IncentiveAmount'=>$_incentiveAmount,'SubType'=>$_subType));
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
	 * Get ItemId value
	 * @return string|null
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set ItemId value
	 * @param string $_itemId the ItemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->ItemId = $_itemId);
	}
	/**
	 * Get IncentiveAmount value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getIncentiveAmount()
	{
		return $this->IncentiveAmount;
	}
	/**
	 * Set IncentiveAmount value
	 * @param PayPalStructBasicAmountType $_incentiveAmount the IncentiveAmount
	 * @return PayPalStructBasicAmountType
	 */
	public function setIncentiveAmount($_incentiveAmount)
	{
		return ($this->IncentiveAmount = $_incentiveAmount);
	}
	/**
	 * Get SubType value
	 * @return string|null
	 */
	public function getSubType()
	{
		return $this->SubType;
	}
	/**
	 * Set SubType value
	 * @param string $_subType the SubType
	 * @return string
	 */
	public function setSubType($_subType)
	{
		return ($this->SubType = $_subType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructIncentiveAppliedToType
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