<?php
/**
 * File for class PayvisionRecurringOperationsStructCdcEntry
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructCdcEntry originally named CdcEntry
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructCdcEntry extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Name;
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructArrayOfCdcEntryItem
     */
    public $Items;
    /**
     * Constructor method for CdcEntry
     * @see parent::__construct()
     * @param string $_name
     * @param PayvisionRecurringOperationsStructArrayOfCdcEntryItem $_items
     * @return PayvisionRecurringOperationsStructCdcEntry
     */
    public function __construct($_name = NULL,$_items = NULL)
    {
        parent::__construct(array('Name'=>$_name,'Items'=>($_items instanceof PayvisionRecurringOperationsStructArrayOfCdcEntryItem)?$_items:new PayvisionRecurringOperationsStructArrayOfCdcEntryItem($_items)),false);
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
     * Get Items value
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntryItem|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param PayvisionRecurringOperationsStructArrayOfCdcEntryItem $_items the Items
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntryItem
     */
    public function setItems($_items)
    {
        return ($this->Items = $_items);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructCdcEntry
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
