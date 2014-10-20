<?php
/**
 * Test with PayvisionRecurringOperations for 'https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL'
 * @package PayvisionRecurringOperations
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/PayvisionRecurringOperationsAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a PayvisionRecurringOperationsWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * */

/**
 * RecurringOperations Informations
 */
define('PAYVISIONBASICOPERATIONS_WSDL_URL', 'https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL');
define('PAYVISIONBASICOPERATIONS_USER_LOGIN','');
define('PAYVISIONBASICOPERATIONS_USER_PASSWORD','');

$wsdl = array();
$wsdl[PayvisionRecurringOperationsWsdlClass::WSDL_URL] = PAYVISIONBASICOPERATIONS_WSDL_URL;
$wsdl[PayvisionRecurringOperationsWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[PayvisionRecurringOperationsWsdlClass::WSDL_TRACE] = true;
$wsdl[PayvisionRecurringOperationsWsdlClass::WSDL_LOGIN] = PAYVISIONBASICOPERATIONS_USER_LOGIN;
$wsdl[PayvisionRecurringOperationsWsdlClass::WSDL_PASSWD] = PAYVISIONBASICOPERATIONS_USER_PASSWORD;
 /* etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new PayvisionRecurringOperationsWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**********************************************************
 * Example for PayvisionRecurringOperationsServiceAuthorize
 */
$payvisionRecurringOperationsServiceAuthorize = new PayvisionRecurringOperationsServiceAuthorize();
// sample call for PayvisionRecurringOperationsServiceAuthorize::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionRecurringOperationsServiceAuthorize->setSoapHeaderOriginatorHeader(new PayvisionRecurringOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionRecurringOperationsServiceAuthorize::Authorize()
if($payvisionRecurringOperationsServiceAuthorize->Authorize(new PayvisionRecurringOperationsStructAuthorize(/*** update parameters list ***/)))
    print_r($payvisionRecurringOperationsServiceAuthorize->getResult());
else
    print_r($payvisionRecurringOperationsServiceAuthorize->getLastError());

/********************************************************
 * Example for PayvisionRecurringOperationsServicePayment
 */
$payvisionRecurringOperationsServicePayment = new PayvisionRecurringOperationsServicePayment();
// sample call for PayvisionRecurringOperationsServicePayment::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionRecurringOperationsServicePayment->setSoapHeaderOriginatorHeader(new PayvisionRecurringOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionRecurringOperationsServicePayment::Payment()
if($payvisionRecurringOperationsServicePayment->Payment(new PayvisionRecurringOperationsStructPayment(/*** update parameters list ***/)))
    print_r($payvisionRecurringOperationsServicePayment->getResult());
else
    print_r($payvisionRecurringOperationsServicePayment->getLastError());

/*******************************************************
 * Example for PayvisionRecurringOperationsServiceCredit
 */
$payvisionRecurringOperationsServiceCredit = new PayvisionRecurringOperationsServiceCredit();
// sample call for PayvisionRecurringOperationsServiceCredit::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionRecurringOperationsServiceCredit->setSoapHeaderOriginatorHeader(new PayvisionRecurringOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionRecurringOperationsServiceCredit::Credit()
if($payvisionRecurringOperationsServiceCredit->Credit(new PayvisionRecurringOperationsStructCredit(/*** update parameters list ***/)))
    print_r($payvisionRecurringOperationsServiceCredit->getResult());
else
    print_r($payvisionRecurringOperationsServiceCredit->getLastError());

/*****************************************************
 * Example for PayvisionRecurringOperationsServiceCard
 */
$payvisionRecurringOperationsServiceCard = new PayvisionRecurringOperationsServiceCard();
// sample call for PayvisionRecurringOperationsServiceCard::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionRecurringOperationsServiceCard->setSoapHeaderOriginatorHeader(new PayvisionRecurringOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionRecurringOperationsServiceCard::CardFundTransfer()
if($payvisionRecurringOperationsServiceCard->CardFundTransfer(new PayvisionRecurringOperationsStructCardFundTransfer(/*** update parameters list ***/)))
    print_r($payvisionRecurringOperationsServiceCard->getResult());
else
    print_r($payvisionRecurringOperationsServiceCard->getLastError());

/*********************************************************
 * Example for PayvisionRecurringOperationsServiceRegister
 */
$payvisionRecurringOperationsServiceRegister = new PayvisionRecurringOperationsServiceRegister();
// sample call for PayvisionRecurringOperationsServiceRegister::RegisterCard()
if($payvisionRecurringOperationsServiceRegister->RegisterCard(new PayvisionRecurringOperationsStructRegisterCard(/*** update parameters list ***/)))
    print_r($payvisionRecurringOperationsServiceRegister->getResult());
else
    print_r($payvisionRecurringOperationsServiceRegister->getLastError());
