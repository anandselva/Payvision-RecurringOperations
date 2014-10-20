<?php
/**
 * File for class PayvisionRecurringOperationsStructCreditResponse
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructCreditResponse originally named CreditResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructCreditResponse extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The CreditResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructTransactionResult
     */
    public $CreditResult;
    /**
     * Constructor method for CreditResponse
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructTransactionResult $_creditResult
     * @return PayvisionRecurringOperationsStructCreditResponse
     */
    public function __construct($_creditResult = NULL)
    {
        parent::__construct(array('CreditResult'=>$_creditResult),false);
    }
    /**
     * Get CreditResult value
     * @return PayvisionRecurringOperationsStructTransactionResult|null
     */
    public function getCreditResult()
    {
        return $this->CreditResult;
    }
    /**
     * Set CreditResult value
     * @param PayvisionRecurringOperationsStructTransactionResult $_creditResult the CreditResult
     * @return PayvisionRecurringOperationsStructTransactionResult
     */
    public function setCreditResult($_creditResult)
    {
        return ($this->CreditResult = $_creditResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructCreditResponse
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
