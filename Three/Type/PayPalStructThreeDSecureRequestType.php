<?php
/**
 * File for class PayPalStructThreeDSecureRequestType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructThreeDSecureRequestType originally named ThreeDSecureRequestType
 * Documentation : The Common 3DS fields. Common for both GTD and DCC API's.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructThreeDSecureRequestType extends PayPalWsdlClass
{
	/**
	 * The Eci3ds
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Eci3ds;
	/**
	 * The Cavv
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Cavv;
	/**
	 * The Xid
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $Xid;
	/**
	 * The MpiVendor3ds
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $MpiVendor3ds;
	/**
	 * The AuthStatus3ds
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $AuthStatus3ds;
	/**
	 * Constructor method for ThreeDSecureRequestType
	 * @see parent::__construct()
	 * @param string $_eci3ds
	 * @param string $_cavv
	 * @param string $_xid
	 * @param string $_mpiVendor3ds
	 * @param string $_authStatus3ds
	 * @return PayPalStructThreeDSecureRequestType
	 */
	public function __construct($_eci3ds = NULL,$_cavv = NULL,$_xid = NULL,$_mpiVendor3ds = NULL,$_authStatus3ds = NULL)
	{
		parent::__construct(array('Eci3ds'=>$_eci3ds,'Cavv'=>$_cavv,'Xid'=>$_xid,'MpiVendor3ds'=>$_mpiVendor3ds,'AuthStatus3ds'=>$_authStatus3ds));
	}
	/**
	 * Get Eci3ds value
	 * @return string|null
	 */
	public function getEci3ds()
	{
		return $this->Eci3ds;
	}
	/**
	 * Set Eci3ds value
	 * @param string $_eci3ds the Eci3ds
	 * @return string
	 */
	public function setEci3ds($_eci3ds)
	{
		return ($this->Eci3ds = $_eci3ds);
	}
	/**
	 * Get Cavv value
	 * @return string|null
	 */
	public function getCavv()
	{
		return $this->Cavv;
	}
	/**
	 * Set Cavv value
	 * @param string $_cavv the Cavv
	 * @return string
	 */
	public function setCavv($_cavv)
	{
		return ($this->Cavv = $_cavv);
	}
	/**
	 * Get Xid value
	 * @return string|null
	 */
	public function getXid()
	{
		return $this->Xid;
	}
	/**
	 * Set Xid value
	 * @param string $_xid the Xid
	 * @return string
	 */
	public function setXid($_xid)
	{
		return ($this->Xid = $_xid);
	}
	/**
	 * Get MpiVendor3ds value
	 * @return string|null
	 */
	public function getMpiVendor3ds()
	{
		return $this->MpiVendor3ds;
	}
	/**
	 * Set MpiVendor3ds value
	 * @param string $_mpiVendor3ds the MpiVendor3ds
	 * @return string
	 */
	public function setMpiVendor3ds($_mpiVendor3ds)
	{
		return ($this->MpiVendor3ds = $_mpiVendor3ds);
	}
	/**
	 * Get AuthStatus3ds value
	 * @return string|null
	 */
	public function getAuthStatus3ds()
	{
		return $this->AuthStatus3ds;
	}
	/**
	 * Set AuthStatus3ds value
	 * @param string $_authStatus3ds the AuthStatus3ds
	 * @return string
	 */
	public function setAuthStatus3ds($_authStatus3ds)
	{
		return ($this->AuthStatus3ds = $_authStatus3ds);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructThreeDSecureRequestType
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