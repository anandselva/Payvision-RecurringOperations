<?php
/**
 * File for class PayvisionRecurringOperationsStructRegisterCardResult
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructRegisterCardResult originally named RegisterCardResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructRegisterCardResult extends PayvisionRecurringOperationsStructBaseEntity
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
     * The CardId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CardId;
    /**
     * The CardGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * - pattern : [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $CardGuid;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Message;
    /**
     * Constructor method for RegisterCardResult
     * @see parent::__construct()
     * @param int $_result
     * @param int $_cardId
     * @param string $_cardGuid
     * @param string $_message
     * @return PayvisionRecurringOperationsStructRegisterCardResult
     */
    public function __construct($_result,$_cardId,$_cardGuid,$_message = NULL)
    {
        PayvisionRecurringOperationsWsdlClass::__construct(array('Result'=>$_result,'CardId'=>$_cardId,'CardGuid'=>$_cardGuid,'Message'=>$_message),false);
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
     * Get CardId value
     * @return int
     */
    public function getCardId()
    {
        return $this->CardId;
    }
    /**
     * Set CardId value
     * @param int $_cardId the CardId
     * @return int
     */
    public function setCardId($_cardId)
    {
        return ($this->CardId = $_cardId);
    }
    /**
     * Get CardGuid value
     * @return string
     */
    public function getCardGuid()
    {
        return $this->CardGuid;
    }
    /**
     * Set CardGuid value
     * @param string $_cardGuid the CardGuid
     * @return string
     */
    public function setCardGuid($_cardGuid)
    {
        return ($this->CardGuid = $_cardGuid);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructRegisterCardResult
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
