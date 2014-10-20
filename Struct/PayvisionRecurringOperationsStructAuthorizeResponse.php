<?php
/**
 * File for class PayvisionRecurringOperationsStructAuthorizeResponse
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructAuthorizeResponse originally named AuthorizeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructAuthorizeResponse extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The AuthorizeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructTransactionResult
     */
    public $AuthorizeResult;
    /**
     * Constructor method for AuthorizeResponse
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructTransactionResult $_authorizeResult
     * @return PayvisionRecurringOperationsStructAuthorizeResponse
     */
    public function __construct($_authorizeResult = NULL)
    {
        parent::__construct(array('AuthorizeResult'=>$_authorizeResult),false);
    }
    /**
     * Get AuthorizeResult value
     * @return PayvisionRecurringOperationsStructTransactionResult|null
     */
    public function getAuthorizeResult()
    {
        return $this->AuthorizeResult;
    }
    /**
     * Set AuthorizeResult value
     * @param PayvisionRecurringOperationsStructTransactionResult $_authorizeResult the AuthorizeResult
     * @return PayvisionRecurringOperationsStructTransactionResult
     */
    public function setAuthorizeResult($_authorizeResult)
    {
        return ($this->AuthorizeResult = $_authorizeResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructAuthorizeResponse
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
