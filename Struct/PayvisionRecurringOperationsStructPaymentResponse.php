<?php
/**
 * File for class PayvisionRecurringOperationsStructPaymentResponse
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructPaymentResponse originally named PaymentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructPaymentResponse extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The PaymentResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructTransactionResult
     */
    public $PaymentResult;
    /**
     * Constructor method for PaymentResponse
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructTransactionResult $_paymentResult
     * @return PayvisionRecurringOperationsStructPaymentResponse
     */
    public function __construct($_paymentResult = NULL)
    {
        parent::__construct(array('PaymentResult'=>$_paymentResult),false);
    }
    /**
     * Get PaymentResult value
     * @return PayvisionRecurringOperationsStructTransactionResult|null
     */
    public function getPaymentResult()
    {
        return $this->PaymentResult;
    }
    /**
     * Set PaymentResult value
     * @param PayvisionRecurringOperationsStructTransactionResult $_paymentResult the PaymentResult
     * @return PayvisionRecurringOperationsStructTransactionResult
     */
    public function setPaymentResult($_paymentResult)
    {
        return ($this->PaymentResult = $_paymentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructPaymentResponse
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
