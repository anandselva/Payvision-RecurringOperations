<?php
/**
 * File for class PayvisionRecurringOperationsStructOriginatorHeader
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructOriginatorHeader originally named OriginatorHeader
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructOriginatorHeader extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The OriginatorId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $OriginatorId;
    /**
     * Constructor method for OriginatorHeader
     * @see parent::__construct()
     * @param int $_originatorId
     * @return PayvisionRecurringOperationsStructOriginatorHeader
     */
    public function __construct($_originatorId)
    {
        parent::__construct(array('OriginatorId'=>$_originatorId),false);
    }
    /**
     * Get OriginatorId value
     * @return int
     */
    public function getOriginatorId()
    {
        return $this->OriginatorId;
    }
    /**
     * Set OriginatorId value
     * @param int $_originatorId the OriginatorId
     * @return int
     */
    public function setOriginatorId($_originatorId)
    {
        return ($this->OriginatorId = $_originatorId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructOriginatorHeader
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
