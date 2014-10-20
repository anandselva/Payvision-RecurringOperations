<?php
/**
 * File for class PayvisionRecurringOperationsStructRegisterCardResponse
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructRegisterCardResponse originally named RegisterCardResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructRegisterCardResponse extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The RegisterCardResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructRegisterCardResult
     */
    public $RegisterCardResult;
    /**
     * Constructor method for RegisterCardResponse
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructRegisterCardResult $_registerCardResult
     * @return PayvisionRecurringOperationsStructRegisterCardResponse
     */
    public function __construct($_registerCardResult = NULL)
    {
        parent::__construct(array('RegisterCardResult'=>$_registerCardResult),false);
    }
    /**
     * Get RegisterCardResult value
     * @return PayvisionRecurringOperationsStructRegisterCardResult|null
     */
    public function getRegisterCardResult()
    {
        return $this->RegisterCardResult;
    }
    /**
     * Set RegisterCardResult value
     * @param PayvisionRecurringOperationsStructRegisterCardResult $_registerCardResult the RegisterCardResult
     * @return PayvisionRecurringOperationsStructRegisterCardResult
     */
    public function setRegisterCardResult($_registerCardResult)
    {
        return ($this->RegisterCardResult = $_registerCardResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructRegisterCardResponse
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
