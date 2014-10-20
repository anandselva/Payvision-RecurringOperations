<?php
/**
 * File for class PayvisionRecurringOperationsStructArrayOfCdcEntryItem
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructArrayOfCdcEntryItem originally named ArrayOfCdcEntryItem
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructArrayOfCdcEntryItem extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The CdcEntryItem
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var PayvisionRecurringOperationsStructCdcEntryItem
     */
    public $CdcEntryItem;
    /**
     * Constructor method for ArrayOfCdcEntryItem
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructCdcEntryItem $_cdcEntryItem
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntryItem
     */
    public function __construct($_cdcEntryItem = NULL)
    {
        parent::__construct(array('CdcEntryItem'=>$_cdcEntryItem),false);
    }
    /**
     * Get CdcEntryItem value
     * @return PayvisionRecurringOperationsStructCdcEntryItem|null
     */
    public function getCdcEntryItem()
    {
        return $this->CdcEntryItem;
    }
    /**
     * Set CdcEntryItem value
     * @param PayvisionRecurringOperationsStructCdcEntryItem $_cdcEntryItem the CdcEntryItem
     * @return PayvisionRecurringOperationsStructCdcEntryItem
     */
    public function setCdcEntryItem($_cdcEntryItem)
    {
        return ($this->CdcEntryItem = $_cdcEntryItem);
    }
    /**
     * Returns the current element
     * @see PayvisionRecurringOperationsWsdlClass::current()
     * @return PayvisionRecurringOperationsStructCdcEntryItem
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see PayvisionRecurringOperationsWsdlClass::item()
     * @param int $_index
     * @return PayvisionRecurringOperationsStructCdcEntryItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see PayvisionRecurringOperationsWsdlClass::first()
     * @return PayvisionRecurringOperationsStructCdcEntryItem
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see PayvisionRecurringOperationsWsdlClass::last()
     * @return PayvisionRecurringOperationsStructCdcEntryItem
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see PayvisionRecurringOperationsWsdlClass::last()
     * @param int $_offset
     * @return PayvisionRecurringOperationsStructCdcEntryItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see PayvisionRecurringOperationsWsdlClass::getAttributeName()
     * @return string CdcEntryItem
     */
    public function getAttributeName()
    {
        return 'CdcEntryItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntryItem
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
