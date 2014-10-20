<?php
/**
 * File for class PayvisionRecurringOperationsServiceRegister
 * @package PayvisionRecurringOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsServiceRegister originally named Register
 * @package PayvisionRecurringOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsServiceRegister extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * Method to call the operation originally named RegisterCard
     * @uses PayvisionRecurringOperationsWsdlClass::getSoapClient()
     * @uses PayvisionRecurringOperationsWsdlClass::setResult()
     * @uses PayvisionRecurringOperationsWsdlClass::saveLastError()
     * @param PayvisionRecurringOperationsStructRegisterCard $_payvisionRecurringOperationsStructRegisterCard
     * @return PayvisionRecurringOperationsStructRegisterCardResponse
     */
    public function RegisterCard(PayvisionRecurringOperationsStructRegisterCard $_payvisionRecurringOperationsStructRegisterCard)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->RegisterCard($_payvisionRecurringOperationsStructRegisterCard));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see PayvisionRecurringOperationsWsdlClass::getResult()
     * @return PayvisionRecurringOperationsStructRegisterCardResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
