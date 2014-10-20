<?php
/**
 * File for class PayvisionRecurringOperationsStructArrayOfCdcEntry
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructArrayOfCdcEntry originally named ArrayOfCdcEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructArrayOfCdcEntry extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The CdcEntry
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var PayvisionRecurringOperationsStructCdcEntry
     */
    public $CdcEntry;
    /**
     * Constructor method for ArrayOfCdcEntry
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructCdcEntry $_cdcEntry
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntry
     */
    public function __construct($_cdcEntry = NULL)
    {
        parent::__construct(array('CdcEntry'=>$_cdcEntry),false);
    }
    /**
     * Get CdcEntry value
     * @return PayvisionRecurringOperationsStructCdcEntry|null
     */
    public function getCdcEntry()
    {
        return $this->CdcEntry;
    }
    /**
     * Set CdcEntry value
     * @param PayvisionRecurringOperationsStructCdcEntry $_cdcEntry the CdcEntry
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function setCdcEntry($_cdcEntry)
    {
        return ($this->CdcEntry = $_cdcEntry);
    }
    /**
     * Returns the current element
     * @see PayvisionRecurringOperationsWsdlClass::current()
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see PayvisionRecurringOperationsWsdlClass::item()
     * @param int $_index
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see PayvisionRecurringOperationsWsdlClass::first()
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see PayvisionRecurringOperationsWsdlClass::last()
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see PayvisionRecurringOperationsWsdlClass::last()
     * @param int $_offset
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see PayvisionRecurringOperationsWsdlClass::getAttributeName()
     * @return string CdcEntry
     */
    public function getAttributeName()
    {
        return 'CdcEntry';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntry
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
