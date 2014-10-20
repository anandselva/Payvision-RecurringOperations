<?php
/**
 * File for class PayvisionRecurringOperationsServiceCard
 * @package PayvisionRecurringOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsServiceCard originally named Card
 * @package PayvisionRecurringOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsServiceCard extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * Sets the OriginatorHeader SoapHeader param
     * @uses PayvisionRecurringOperationsWsdlClass::setSoapHeader()
     * @param PayvisionRecurringOperationsStructOriginatorHeader $_payvisionRecurringOperationsStructOriginatorHeader
     * @param string $_nameSpace http://payvision.com/gateway/
     * @param bool $_mustUnderstand
     * @param string $_actor
     * @return bool true|false
     */
    public function setSoapHeaderOriginatorHeader(PayvisionRecurringOperationsStructOriginatorHeader $_payvisionRecurringOperationsStructOriginatorHeader,$_nameSpace = 'http://payvision.com/gateway/',$_mustUnderstand = false,$_actor = null)
    {
        return $this->setSoapHeader($_nameSpace,'OriginatorHeader',$_payvisionRecurringOperationsStructOriginatorHeader,$_mustUnderstand,$_actor);
    }
    /**
     * Method to call the operation originally named CardFundTransfer
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : OriginatorHeader
     * - SOAPHeaderNamespaces : http://payvision.com/gateway/
     * - SOAPHeaderTypes : {@link PayvisionRecurringOperationsStructOriginatorHeader}
     * - SOAPHeaders : required
     * @uses PayvisionRecurringOperationsWsdlClass::getSoapClient()
     * @uses PayvisionRecurringOperationsWsdlClass::setResult()
     * @uses PayvisionRecurringOperationsWsdlClass::saveLastError()
     * @param PayvisionRecurringOperationsStructCardFundTransfer $_payvisionRecurringOperationsStructCardFundTransfer
     * @return PayvisionRecurringOperationsStructCardFundTransferResponse
     */
    public function CardFundTransfer(PayvisionRecurringOperationsStructCardFundTransfer $_payvisionRecurringOperationsStructCardFundTransfer)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CardFundTransfer($_payvisionRecurringOperationsStructCardFundTransfer));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see PayvisionRecurringOperationsWsdlClass::getResult()
     * @return PayvisionRecurringOperationsStructCardFundTransferResponse
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
