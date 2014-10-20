<?php
/**
 * File for class PayvisionRecurringOperationsStructCardFundTransferResponse
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructCardFundTransferResponse originally named CardFundTransferResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructCardFundTransferResponse extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The CardFundTransferResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructTransactionResult
     */
    public $CardFundTransferResult;
    /**
     * Constructor method for CardFundTransferResponse
     * @see parent::__construct()
     * @param PayvisionRecurringOperationsStructTransactionResult $_cardFundTransferResult
     * @return PayvisionRecurringOperationsStructCardFundTransferResponse
     */
    public function __construct($_cardFundTransferResult = NULL)
    {
        parent::__construct(array('CardFundTransferResult'=>$_cardFundTransferResult),false);
    }
    /**
     * Get CardFundTransferResult value
     * @return PayvisionRecurringOperationsStructTransactionResult|null
     */
    public function getCardFundTransferResult()
    {
        return $this->CardFundTransferResult;
    }
    /**
     * Set CardFundTransferResult value
     * @param PayvisionRecurringOperationsStructTransactionResult $_cardFundTransferResult the CardFundTransferResult
     * @return PayvisionRecurringOperationsStructTransactionResult
     */
    public function setCardFundTransferResult($_cardFundTransferResult)
    {
        return ($this->CardFundTransferResult = $_cardFundTransferResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructCardFundTransferResponse
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
