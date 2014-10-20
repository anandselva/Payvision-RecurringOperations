<?php
/**
 * File for the class which returns the class map definition
 * @package PayvisionRecurringOperations
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * Class which returns the class map definition by the static method PayvisionRecurringOperationsClassMap::classMap()
 * @package PayvisionRecurringOperations
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'ArrayOfCdcEntry' => 'PayvisionRecurringOperationsStructArrayOfCdcEntry',
  'ArrayOfCdcEntryItem' => 'PayvisionRecurringOperationsStructArrayOfCdcEntryItem',
  'Authorize' => 'PayvisionRecurringOperationsStructAuthorize',
  'AuthorizeResponse' => 'PayvisionRecurringOperationsStructAuthorizeResponse',
  'BaseEntity' => 'PayvisionRecurringOperationsStructBaseEntity',
  'CardFundTransfer' => 'PayvisionRecurringOperationsStructCardFundTransfer',
  'CardFundTransferResponse' => 'PayvisionRecurringOperationsStructCardFundTransferResponse',
  'CdcEntry' => 'PayvisionRecurringOperationsStructCdcEntry',
  'CdcEntryItem' => 'PayvisionRecurringOperationsStructCdcEntryItem',
  'Credit' => 'PayvisionRecurringOperationsStructCredit',
  'CreditResponse' => 'PayvisionRecurringOperationsStructCreditResponse',
  'OriginatorHeader' => 'PayvisionRecurringOperationsStructOriginatorHeader',
  'Payment' => 'PayvisionRecurringOperationsStructPayment',
  'PaymentResponse' => 'PayvisionRecurringOperationsStructPaymentResponse',
  'RegisterCard' => 'PayvisionRecurringOperationsStructRegisterCard',
  'RegisterCardResponse' => 'PayvisionRecurringOperationsStructRegisterCardResponse',
  'RegisterCardResult' => 'PayvisionRecurringOperationsStructRegisterCardResult',
  'TransactionResult' => 'PayvisionRecurringOperationsStructTransactionResult',
);
    }
}
