<?php
/**
 * File for class PayvisionRecurringOperationsStructRegisterCard
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructRegisterCard originally named RegisterCard
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructRegisterCard extends PayvisionRecurringOperationsWsdlClass
{
    /**
     * The memberId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $memberId;
    /**
     * The expiryMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var unsignedByte
     */
    public $expiryMonth;
    /**
     * The expiryYear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var short
     */
    public $expiryYear;
    /**
     * The memberGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $memberGuid;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $number;
    /**
     * The holder
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $holder;
    /**
     * The cardType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardType;
    /**
     * Constructor method for RegisterCard
     * @see parent::__construct()
     * @param int $_memberId
     * @param unsignedByte $_expiryMonth
     * @param short $_expiryYear
     * @param string $_memberGuid
     * @param string $_number
     * @param string $_holder
     * @param string $_cardType
     * @return PayvisionRecurringOperationsStructRegisterCard
     */
    public function __construct($_memberId,$_expiryMonth,$_expiryYear,$_memberGuid = NULL,$_number = NULL,$_holder = NULL,$_cardType = NULL)
    {
        parent::__construct(array('memberId'=>$_memberId,'expiryMonth'=>$_expiryMonth,'expiryYear'=>$_expiryYear,'memberGuid'=>$_memberGuid,'number'=>$_number,'holder'=>$_holder,'cardType'=>$_cardType),false);
    }
    /**
     * Get memberId value
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }
    /**
     * Set memberId value
     * @param int $_memberId the memberId
     * @return int
     */
    public function setMemberId($_memberId)
    {
        return ($this->memberId = $_memberId);
    }
    /**
     * Get expiryMonth value
     * @return unsignedByte
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }
    /**
     * Set expiryMonth value
     * @param unsignedByte $_expiryMonth the expiryMonth
     * @return unsignedByte
     */
    public function setExpiryMonth($_expiryMonth)
    {
        return ($this->expiryMonth = $_expiryMonth);
    }
    /**
     * Get expiryYear value
     * @return short
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }
    /**
     * Set expiryYear value
     * @param short $_expiryYear the expiryYear
     * @return short
     */
    public function setExpiryYear($_expiryYear)
    {
        return ($this->expiryYear = $_expiryYear);
    }
    /**
     * Get memberGuid value
     * @return string|null
     */
    public function getMemberGuid()
    {
        return $this->memberGuid;
    }
    /**
     * Set memberGuid value
     * @param string $_memberGuid the memberGuid
     * @return string
     */
    public function setMemberGuid($_memberGuid)
    {
        return ($this->memberGuid = $_memberGuid);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $_number the number
     * @return string
     */
    public function setNumber($_number)
    {
        return ($this->number = $_number);
    }
    /**
     * Get holder value
     * @return string|null
     */
    public function getHolder()
    {
        return $this->holder;
    }
    /**
     * Set holder value
     * @param string $_holder the holder
     * @return string
     */
    public function setHolder($_holder)
    {
        return ($this->holder = $_holder);
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $_cardType the cardType
     * @return string
     */
    public function setCardType($_cardType)
    {
        return ($this->cardType = $_cardType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructRegisterCard
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
