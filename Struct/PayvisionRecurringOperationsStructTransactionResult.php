<?php
/**
 * File for class PayvisionRecurringOperationsStructTransactionResult
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructTransactionResult originally named TransactionResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructTransactionResult extends PayvisionRecurringOperationsStructBaseEntity
{
    /**
     * The Result
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Result;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $TransactionId;
    /**
     * The TransactionGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * - pattern : [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $TransactionGuid;
    /**
     * The TransactionDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $TransactionDateTime;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Message;
    /**
     * The TrackingMemberCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TrackingMemberCode;
    /**
     * The Cdc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionRecurringOperationsStructArrayOfCdcEntry
     */
    public $Cdc;
    /**
     * The Recovered
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var boolean
     */
    public $Recovered;
    /**
     * Constructor method for TransactionResult
     * @see parent::__construct()
     * @param int $_result
     * @param int $_transactionId
     * @param string $_transactionGuid
     * @param dateTime $_transactionDateTime
     * @param string $_message
     * @param string $_trackingMemberCode
     * @param PayvisionRecurringOperationsStructArrayOfCdcEntry $_cdc
     * @param boolean $_recovered
     * @return PayvisionRecurringOperationsStructTransactionResult
     */
    public function __construct($_result,$_transactionId,$_transactionGuid,$_transactionDateTime,$_message = NULL,$_trackingMemberCode = NULL,$_cdc = NULL,$_recovered = NULL)
    {
        PayvisionRecurringOperationsWsdlClass::__construct(array('Result'=>$_result,'TransactionId'=>$_transactionId,'TransactionGuid'=>$_transactionGuid,'TransactionDateTime'=>$_transactionDateTime,'Message'=>$_message,'TrackingMemberCode'=>$_trackingMemberCode,'Cdc'=>($_cdc instanceof PayvisionRecurringOperationsStructArrayOfCdcEntry)?$_cdc:new PayvisionRecurringOperationsStructArrayOfCdcEntry($_cdc),'Recovered'=>$_recovered),false);
    }
    /**
     * Get Result value
     * @return int
     */
    public function getResult()
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @param int $_result the Result
     * @return int
     */
    public function setResult($_result)
    {
        return ($this->Result = $_result);
    }
    /**
     * Get TransactionId value
     * @return int
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param int $_transactionId the TransactionId
     * @return int
     */
    public function setTransactionId($_transactionId)
    {
        return ($this->TransactionId = $_transactionId);
    }
    /**
     * Get TransactionGuid value
     * @return string
     */
    public function getTransactionGuid()
    {
        return $this->TransactionGuid;
    }
    /**
     * Set TransactionGuid value
     * @param string $_transactionGuid the TransactionGuid
     * @return string
     */
    public function setTransactionGuid($_transactionGuid)
    {
        return ($this->TransactionGuid = $_transactionGuid);
    }
    /**
     * Get TransactionDateTime value
     * @return dateTime
     */
    public function getTransactionDateTime()
    {
        return $this->TransactionDateTime;
    }
    /**
     * Set TransactionDateTime value
     * @param dateTime $_transactionDateTime the TransactionDateTime
     * @return dateTime
     */
    public function setTransactionDateTime($_transactionDateTime)
    {
        return ($this->TransactionDateTime = $_transactionDateTime);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $_message the Message
     * @return string
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Get TrackingMemberCode value
     * @return string|null
     */
    public function getTrackingMemberCode()
    {
        return $this->TrackingMemberCode;
    }
    /**
     * Set TrackingMemberCode value
     * @param string $_trackingMemberCode the TrackingMemberCode
     * @return string
     */
    public function setTrackingMemberCode($_trackingMemberCode)
    {
        return ($this->TrackingMemberCode = $_trackingMemberCode);
    }
    /**
     * Get Cdc value
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntry|null
     */
    public function getCdc()
    {
        return $this->Cdc;
    }
    /**
     * Set Cdc value
     * @param PayvisionRecurringOperationsStructArrayOfCdcEntry $_cdc the Cdc
     * @return PayvisionRecurringOperationsStructArrayOfCdcEntry
     */
    public function setCdc($_cdc)
    {
        return ($this->Cdc = $_cdc);
    }
    /**
     * Get Recovered value
     * @return boolean|null
     */
    public function getRecovered()
    {
        return $this->Recovered;
    }
    /**
     * Set Recovered value
     * @param boolean $_recovered the Recovered
     * @return boolean
     */
    public function setRecovered($_recovered)
    {
        return ($this->Recovered = $_recovered);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructTransactionResult
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
