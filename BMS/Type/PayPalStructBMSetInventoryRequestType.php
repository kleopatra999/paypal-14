<?php
/**
 * File for class PayPalStructBMSetInventoryRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructBMSetInventoryRequestType originally named BMSetInventoryRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructBMSetInventoryRequestType extends PayPalStructAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations extracted from the WSDL
	 * - documentation : Hosted Button ID of button you wish to change. Required Character length and limitations: 10 single-byte numeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The TrackInv
	 * Meta informations extracted from the WSDL
	 * - documentation : Is Inventory tracked. Required 0 or 1
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $TrackInv;
	/**
	 * The TrackPnl
	 * Meta informations extracted from the WSDL
	 * - documentation : Is PNL Tracked. Required 0 or 1
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var string
	 */
	public $TrackPnl;
	/**
	 * The ItemTrackingDetails
	 * @var PayPalStructItemTrackingDetailsType
	 */
	public $ItemTrackingDetails;
	/**
	 * The OptionIndex
	 * Meta informations extracted from the WSDL
	 * - documentation : Option Index. Optional Character length and limitations: 1 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $OptionIndex;
	/**
	 * The OptionTrackingDetails
	 * @var PayPalStructOptionTrackingDetailsType
	 */
	public $OptionTrackingDetails;
	/**
	 * The SoldoutURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL of page to display when an item is soldout. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SoldoutURL;
	/**
	 * The ReuseDigitalDownloadKeys
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether to use the same digital download key repeatedly. Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReuseDigitalDownloadKeys;
	/**
	 * The AppendDigitalDownloadKeys
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether to append these keys to the list or not (replace). Optional
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $AppendDigitalDownloadKeys;
	/**
	 * The DigitalDownloadKeys
	 * Meta informations extracted from the WSDL
	 * - documentation : Zero or more digital download keys to distribute to customers after transaction is completed. Optional Character length and limitations: 1000 single-byte alphanumeric characters
	 * - maxOccurs : 1000
	 * - minOccurs : 0
	 * @var string
	 */
	public $DigitalDownloadKeys;
	/**
	 * Constructor method for BMSetInventoryRequestType
	 * @see parent::__construct()
	 * @param string $_hostedButtonID
	 * @param string $_trackInv
	 * @param string $_trackPnl
	 * @param PayPalStructItemTrackingDetailsType $_itemTrackingDetails
	 * @param string $_optionIndex
	 * @param PayPalStructOptionTrackingDetailsType $_optionTrackingDetails
	 * @param string $_soldoutURL
	 * @param string $_reuseDigitalDownloadKeys
	 * @param string $_appendDigitalDownloadKeys
	 * @param string $_digitalDownloadKeys
	 * @return PayPalStructBMSetInventoryRequestType
	 */
	public function __construct($_hostedButtonID,$_trackInv,$_trackPnl,$_itemTrackingDetails = NULL,$_optionIndex = NULL,$_optionTrackingDetails = NULL,$_soldoutURL = NULL,$_reuseDigitalDownloadKeys = NULL,$_appendDigitalDownloadKeys = NULL,$_digitalDownloadKeys = NULL)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_hostedButtonID,'TrackInv'=>$_trackInv,'TrackPnl'=>$_trackPnl,'ItemTrackingDetails'=>$_itemTrackingDetails,'OptionIndex'=>$_optionIndex,'OptionTrackingDetails'=>$_optionTrackingDetails,'SoldoutURL'=>$_soldoutURL,'ReuseDigitalDownloadKeys'=>$_reuseDigitalDownloadKeys,'AppendDigitalDownloadKeys'=>$_appendDigitalDownloadKeys,'DigitalDownloadKeys'=>$_digitalDownloadKeys));
	}
	/**
	 * Get HostedButtonID value
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set HostedButtonID value
	 * @param string $_hostedButtonID the HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_hostedButtonID)
	{
		return ($this->HostedButtonID = $_hostedButtonID);
	}
	/**
	 * Get TrackInv value
	 * @return string
	 */
	public function getTrackInv()
	{
		return $this->TrackInv;
	}
	/**
	 * Set TrackInv value
	 * @param string $_trackInv the TrackInv
	 * @return string
	 */
	public function setTrackInv($_trackInv)
	{
		return ($this->TrackInv = $_trackInv);
	}
	/**
	 * Get TrackPnl value
	 * @return string
	 */
	public function getTrackPnl()
	{
		return $this->TrackPnl;
	}
	/**
	 * Set TrackPnl value
	 * @param string $_trackPnl the TrackPnl
	 * @return string
	 */
	public function setTrackPnl($_trackPnl)
	{
		return ($this->TrackPnl = $_trackPnl);
	}
	/**
	 * Get ItemTrackingDetails value
	 * @return PayPalStructItemTrackingDetailsType|null
	 */
	public function getItemTrackingDetails()
	{
		return $this->ItemTrackingDetails;
	}
	/**
	 * Set ItemTrackingDetails value
	 * @param PayPalStructItemTrackingDetailsType $_itemTrackingDetails the ItemTrackingDetails
	 * @return PayPalStructItemTrackingDetailsType
	 */
	public function setItemTrackingDetails($_itemTrackingDetails)
	{
		return ($this->ItemTrackingDetails = $_itemTrackingDetails);
	}
	/**
	 * Get OptionIndex value
	 * @return string|null
	 */
	public function getOptionIndex()
	{
		return $this->OptionIndex;
	}
	/**
	 * Set OptionIndex value
	 * @param string $_optionIndex the OptionIndex
	 * @return string
	 */
	public function setOptionIndex($_optionIndex)
	{
		return ($this->OptionIndex = $_optionIndex);
	}
	/**
	 * Get OptionTrackingDetails value
	 * @return PayPalStructOptionTrackingDetailsType|null
	 */
	public function getOptionTrackingDetails()
	{
		return $this->OptionTrackingDetails;
	}
	/**
	 * Set OptionTrackingDetails value
	 * @param PayPalStructOptionTrackingDetailsType $_optionTrackingDetails the OptionTrackingDetails
	 * @return PayPalStructOptionTrackingDetailsType
	 */
	public function setOptionTrackingDetails($_optionTrackingDetails)
	{
		return ($this->OptionTrackingDetails = $_optionTrackingDetails);
	}
	/**
	 * Get SoldoutURL value
	 * @return string|null
	 */
	public function getSoldoutURL()
	{
		return $this->SoldoutURL;
	}
	/**
	 * Set SoldoutURL value
	 * @param string $_soldoutURL the SoldoutURL
	 * @return string
	 */
	public function setSoldoutURL($_soldoutURL)
	{
		return ($this->SoldoutURL = $_soldoutURL);
	}
	/**
	 * Get ReuseDigitalDownloadKeys value
	 * @return string|null
	 */
	public function getReuseDigitalDownloadKeys()
	{
		return $this->ReuseDigitalDownloadKeys;
	}
	/**
	 * Set ReuseDigitalDownloadKeys value
	 * @param string $_reuseDigitalDownloadKeys the ReuseDigitalDownloadKeys
	 * @return string
	 */
	public function setReuseDigitalDownloadKeys($_reuseDigitalDownloadKeys)
	{
		return ($this->ReuseDigitalDownloadKeys = $_reuseDigitalDownloadKeys);
	}
	/**
	 * Get AppendDigitalDownloadKeys value
	 * @return string|null
	 */
	public function getAppendDigitalDownloadKeys()
	{
		return $this->AppendDigitalDownloadKeys;
	}
	/**
	 * Set AppendDigitalDownloadKeys value
	 * @param string $_appendDigitalDownloadKeys the AppendDigitalDownloadKeys
	 * @return string
	 */
	public function setAppendDigitalDownloadKeys($_appendDigitalDownloadKeys)
	{
		return ($this->AppendDigitalDownloadKeys = $_appendDigitalDownloadKeys);
	}
	/**
	 * Get DigitalDownloadKeys value
	 * @return string|null
	 */
	public function getDigitalDownloadKeys()
	{
		return $this->DigitalDownloadKeys;
	}
	/**
	 * Set DigitalDownloadKeys value
	 * @param string $_digitalDownloadKeys the DigitalDownloadKeys
	 * @return string
	 */
	public function setDigitalDownloadKeys($_digitalDownloadKeys)
	{
		return ($this->DigitalDownloadKeys = $_digitalDownloadKeys);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructBMSetInventoryRequestType
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