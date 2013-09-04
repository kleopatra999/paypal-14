<?php
/**
 * File for class PayPalStructInvoiceItemType
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for PayPalStructInvoiceItemType originally named InvoiceItemType
 * Documentation : Describes an individual item for an invoice.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.paypalobjects.com/wsdl/eBLBaseComponents.xsd}
 * @package PayPal
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class PayPalStructInvoiceItemType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : a human readable item nameOptional Character length and limits: 127 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : a human readable item descriptionOptional Character length and limits: 127 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The EAN
	 * Meta informations extracted from the WSDL
	 * - documentation : The International Article Number or Universal Product Code (UPC) for the item. Empty string is allowed. Character length and limits: 17 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $EAN;
	/**
	 * The SKU
	 * Meta informations extracted from the WSDL
	 * - documentation : The Stock-Keeping Unit or other identification code assigned to the item. Character length and limits: 64 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $SKU;
	/**
	 * The ReturnPolicyIdentifier
	 * Meta informations extracted from the WSDL
	 * - documentation : A retailer could apply different return policies on different items. Each return policy would be identified using a label or identifier. This return policy identifier should be set here. This identifier will be displayed next to the item in the e-Receipt. Character length and limits: 8 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReturnPolicyIdentifier;
	/**
	 * The Price
	 * Meta informations extracted from the WSDL
	 * - documentation : total price of this item
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $Price;
	/**
	 * The ItemPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : price per item quantity
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalStructBasicAmountType
	 */
	public $ItemPrice;
	/**
	 * The ItemCount
	 * Meta informations extracted from the WSDL
	 * - documentation : quantity of the item (non-negative)
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var double
	 */
	public $ItemCount;
	/**
	 * The ItemCountUnit
	 * Meta informations extracted from the WSDL
	 * - documentation : Unit of measure for the itemCount
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayPalEnumUnitOfMeasure
	 */
	public $ItemCountUnit;
	/**
	 * The Discount
	 * Meta informations extracted from the WSDL
	 * - documentation : discount applied to this item
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructDiscountType
	 */
	public $Discount;
	/**
	 * The Taxable
	 * Meta informations extracted from the WSDL
	 * - documentation : identifies whether this item is taxable or not. If not passed, this will be assumed to be true.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Taxable;
	/**
	 * The TaxRate
	 * Meta informations extracted from the WSDL
	 * - documentation : The tax percentage applied to the item. This is only used for displaying in the receipt, it is not used in pricing calculations. Note: we have totalTax at invoice level. It's up to the caller to do the calculations for setting that other element.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var double
	 */
	public $TaxRate;
	/**
	 * The AdditionalFees
	 * Meta informations extracted from the WSDL
	 * - documentation : Additional fees to this item
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var PayPalStructAdditionalFeeType
	 */
	public $AdditionalFees;
	/**
	 * The Reimbursable
	 * Meta informations extracted from the WSDL
	 * - documentation : identifies whether this is reimbursable or not. If not pass, this will be assumed to be true.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Reimbursable;
	/**
	 * The MPN
	 * Meta informations extracted from the WSDL
	 * - documentation : Manufacturer part number.
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $MPN;
	/**
	 * The ISBN
	 * Meta informations extracted from the WSDL
	 * - documentation : International Standard Book Number. Reference http://en.wikipedia.org/wiki/ISBN Character length and limits: 32 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ISBN;
	/**
	 * The PLU
	 * Meta informations extracted from the WSDL
	 * - documentation : Price Look-Up code Reference http://en.wikipedia.org/wiki/Price_Look-Up_code Character length and limits: 5 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $PLU;
	/**
	 * The ModelNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Character length and limits: 32 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $ModelNumber;
	/**
	 * The StyleNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Character length and limits: 32 single-byte characters
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $StyleNumber;
	/**
	 * Constructor method for InvoiceItemType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_description
	 * @param string $_eAN
	 * @param string $_sKU
	 * @param string $_returnPolicyIdentifier
	 * @param PayPalStructBasicAmountType $_price
	 * @param PayPalStructBasicAmountType $_itemPrice
	 * @param double $_itemCount
	 * @param PayPalEnumUnitOfMeasure $_itemCountUnit
	 * @param PayPalStructDiscountType $_discount
	 * @param boolean $_taxable
	 * @param double $_taxRate
	 * @param PayPalStructAdditionalFeeType $_additionalFees
	 * @param boolean $_reimbursable
	 * @param string $_mPN
	 * @param string $_iSBN
	 * @param string $_pLU
	 * @param string $_modelNumber
	 * @param string $_styleNumber
	 * @return PayPalStructInvoiceItemType
	 */
	public function __construct($_name = NULL,$_description = NULL,$_eAN = NULL,$_sKU = NULL,$_returnPolicyIdentifier = NULL,$_price = NULL,$_itemPrice = NULL,$_itemCount = NULL,$_itemCountUnit = NULL,$_discount = NULL,$_taxable = NULL,$_taxRate = NULL,$_additionalFees = NULL,$_reimbursable = NULL,$_mPN = NULL,$_iSBN = NULL,$_pLU = NULL,$_modelNumber = NULL,$_styleNumber = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Description'=>$_description,'EAN'=>$_eAN,'SKU'=>$_sKU,'ReturnPolicyIdentifier'=>$_returnPolicyIdentifier,'Price'=>$_price,'ItemPrice'=>$_itemPrice,'ItemCount'=>$_itemCount,'ItemCountUnit'=>$_itemCountUnit,'Discount'=>$_discount,'Taxable'=>$_taxable,'TaxRate'=>$_taxRate,'AdditionalFees'=>$_additionalFees,'Reimbursable'=>$_reimbursable,'MPN'=>$_mPN,'ISBN'=>$_iSBN,'PLU'=>$_pLU,'ModelNumber'=>$_modelNumber,'StyleNumber'=>$_styleNumber));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
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
	 * Get EAN value
	 * @return string|null
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set EAN value
	 * @param string $_eAN the EAN
	 * @return string
	 */
	public function setEAN($_eAN)
	{
		return ($this->EAN = $_eAN);
	}
	/**
	 * Get SKU value
	 * @return string|null
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set SKU value
	 * @param string $_sKU the SKU
	 * @return string
	 */
	public function setSKU($_sKU)
	{
		return ($this->SKU = $_sKU);
	}
	/**
	 * Get ReturnPolicyIdentifier value
	 * @return string|null
	 */
	public function getReturnPolicyIdentifier()
	{
		return $this->ReturnPolicyIdentifier;
	}
	/**
	 * Set ReturnPolicyIdentifier value
	 * @param string $_returnPolicyIdentifier the ReturnPolicyIdentifier
	 * @return string
	 */
	public function setReturnPolicyIdentifier($_returnPolicyIdentifier)
	{
		return ($this->ReturnPolicyIdentifier = $_returnPolicyIdentifier);
	}
	/**
	 * Get Price value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Price value
	 * @param PayPalStructBasicAmountType $_price the Price
	 * @return PayPalStructBasicAmountType
	 */
	public function setPrice($_price)
	{
		return ($this->Price = $_price);
	}
	/**
	 * Get ItemPrice value
	 * @return PayPalStructBasicAmountType|null
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * Set ItemPrice value
	 * @param PayPalStructBasicAmountType $_itemPrice the ItemPrice
	 * @return PayPalStructBasicAmountType
	 */
	public function setItemPrice($_itemPrice)
	{
		return ($this->ItemPrice = $_itemPrice);
	}
	/**
	 * Get ItemCount value
	 * @return double|null
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * Set ItemCount value
	 * @param double $_itemCount the ItemCount
	 * @return double
	 */
	public function setItemCount($_itemCount)
	{
		return ($this->ItemCount = $_itemCount);
	}
	/**
	 * Get ItemCountUnit value
	 * @return PayPalEnumUnitOfMeasure|null
	 */
	public function getItemCountUnit()
	{
		return $this->ItemCountUnit;
	}
	/**
	 * Set ItemCountUnit value
	 * @uses PayPalEnumUnitOfMeasure::valueIsValid()
	 * @param PayPalEnumUnitOfMeasure $_itemCountUnit the ItemCountUnit
	 * @return PayPalEnumUnitOfMeasure
	 */
	public function setItemCountUnit($_itemCountUnit)
	{
		if(!PayPalEnumUnitOfMeasure::valueIsValid($_itemCountUnit))
		{
			return false;
		}
		return ($this->ItemCountUnit = $_itemCountUnit);
	}
	/**
	 * Get Discount value
	 * @return PayPalStructDiscountType|null
	 */
	public function getDiscount()
	{
		return $this->Discount;
	}
	/**
	 * Set Discount value
	 * @param PayPalStructDiscountType $_discount the Discount
	 * @return PayPalStructDiscountType
	 */
	public function setDiscount($_discount)
	{
		return ($this->Discount = $_discount);
	}
	/**
	 * Get Taxable value
	 * @return boolean|null
	 */
	public function getTaxable()
	{
		return $this->Taxable;
	}
	/**
	 * Set Taxable value
	 * @param boolean $_taxable the Taxable
	 * @return boolean
	 */
	public function setTaxable($_taxable)
	{
		return ($this->Taxable = $_taxable);
	}
	/**
	 * Get TaxRate value
	 * @return double|null
	 */
	public function getTaxRate()
	{
		return $this->TaxRate;
	}
	/**
	 * Set TaxRate value
	 * @param double $_taxRate the TaxRate
	 * @return double
	 */
	public function setTaxRate($_taxRate)
	{
		return ($this->TaxRate = $_taxRate);
	}
	/**
	 * Get AdditionalFees value
	 * @return PayPalStructAdditionalFeeType|null
	 */
	public function getAdditionalFees()
	{
		return $this->AdditionalFees;
	}
	/**
	 * Set AdditionalFees value
	 * @param PayPalStructAdditionalFeeType $_additionalFees the AdditionalFees
	 * @return PayPalStructAdditionalFeeType
	 */
	public function setAdditionalFees($_additionalFees)
	{
		return ($this->AdditionalFees = $_additionalFees);
	}
	/**
	 * Get Reimbursable value
	 * @return boolean|null
	 */
	public function getReimbursable()
	{
		return $this->Reimbursable;
	}
	/**
	 * Set Reimbursable value
	 * @param boolean $_reimbursable the Reimbursable
	 * @return boolean
	 */
	public function setReimbursable($_reimbursable)
	{
		return ($this->Reimbursable = $_reimbursable);
	}
	/**
	 * Get MPN value
	 * @return string|null
	 */
	public function getMPN()
	{
		return $this->MPN;
	}
	/**
	 * Set MPN value
	 * @param string $_mPN the MPN
	 * @return string
	 */
	public function setMPN($_mPN)
	{
		return ($this->MPN = $_mPN);
	}
	/**
	 * Get ISBN value
	 * @return string|null
	 */
	public function getISBN()
	{
		return $this->ISBN;
	}
	/**
	 * Set ISBN value
	 * @param string $_iSBN the ISBN
	 * @return string
	 */
	public function setISBN($_iSBN)
	{
		return ($this->ISBN = $_iSBN);
	}
	/**
	 * Get PLU value
	 * @return string|null
	 */
	public function getPLU()
	{
		return $this->PLU;
	}
	/**
	 * Set PLU value
	 * @param string $_pLU the PLU
	 * @return string
	 */
	public function setPLU($_pLU)
	{
		return ($this->PLU = $_pLU);
	}
	/**
	 * Get ModelNumber value
	 * @return string|null
	 */
	public function getModelNumber()
	{
		return $this->ModelNumber;
	}
	/**
	 * Set ModelNumber value
	 * @param string $_modelNumber the ModelNumber
	 * @return string
	 */
	public function setModelNumber($_modelNumber)
	{
		return ($this->ModelNumber = $_modelNumber);
	}
	/**
	 * Get StyleNumber value
	 * @return string|null
	 */
	public function getStyleNumber()
	{
		return $this->StyleNumber;
	}
	/**
	 * Set StyleNumber value
	 * @param string $_styleNumber the StyleNumber
	 * @return string
	 */
	public function setStyleNumber($_styleNumber)
	{
		return ($this->StyleNumber = $_styleNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayPalWsdlClass::__set_state()
	 * @uses PayPalWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayPalStructInvoiceItemType
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