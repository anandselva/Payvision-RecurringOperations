<?php
/**
 * File for class PayvisionRecurringOperationsStructAuthorize
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionRecurringOperationsStructAuthorize originally named Authorize
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/RecurringOperations.asmx?WSDL}
 * @package PayvisionRecurringOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionRecurringOperationsStructAuthorize extends PayvisionRecurringOperationsWsdlClass
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
     * The countryId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $countryId;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var decimal
     */
    public $amount;
    /**
     * The currencyId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $currencyId;
    /**
     * The cardId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $cardId;
    /**
     * The merchantAccountType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $merchantAccountType;
    /**
     * The memberGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $memberGuid;
    /**
     * The trackingMemberCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $trackingMemberCode;
    /**
     * The cardGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardGuid;
    /**
     * The dynamicDescriptor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * Constructor method for Authorize
     * @see parent::__construct()
     * @param int $_memberId
     * @param int $_countryId
     * @param decimal $_amount
     * @param int $_currencyId
     * @param int $_cardId
     * @param int $_merchantAccountType
     * @param string $_memberGuid
     * @param string $_trackingMemberCode
     * @param string $_cardGuid
     * @param string $_dynamicDescriptor
     * @return PayvisionRecurringOperationsStructAuthorize
     */
    public function __construct($_memberId,$_countryId,$_amount,$_currencyId,$_cardId,$_merchantAccountType,$_memberGuid = NULL,$_trackingMemberCode = NULL,$_cardGuid = NULL,$_dynamicDescriptor = NULL)
    {
        parent::__construct(array('memberId'=>$_memberId,'countryId'=>$_countryId,'amount'=>$_amount,'currencyId'=>$_currencyId,'cardId'=>$_cardId,'merchantAccountType'=>$_merchantAccountType,'memberGuid'=>$_memberGuid,'trackingMemberCode'=>$_trackingMemberCode,'cardGuid'=>$_cardGuid,'dynamicDescriptor'=>$_dynamicDescriptor),false);
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
     * Get countryId value
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $_countryId the countryId
     * @return int
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get amount value
     * @return decimal
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param decimal $_amount the amount
     * @return decimal
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Get currencyId value
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }
    /**
     * Set currencyId value
     * @param int $_currencyId the currencyId
     * @return int
     */
    public function setCurrencyId($_currencyId)
    {
        return ($this->currencyId = $_currencyId);
    }
    /**
     * Get cardId value
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }
    /**
     * Set cardId value
     * @param int $_cardId the cardId
     * @return int
     */
    public function setCardId($_cardId)
    {
        return ($this->cardId = $_cardId);
    }
    /**
     * Get merchantAccountType value
     * @return int
     */
    public function getMerchantAccountType()
    {
        return $this->merchantAccountType;
    }
    /**
     * Set merchantAccountType value
     * @param int $_merchantAccountType the merchantAccountType
     * @return int
     */
    public function setMerchantAccountType($_merchantAccountType)
    {
        return ($this->merchantAccountType = $_merchantAccountType);
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
     * Get trackingMemberCode value
     * @return string|null
     */
    public function getTrackingMemberCode()
    {
        return $this->trackingMemberCode;
    }
    /**
     * Set trackingMemberCode value
     * @param string $_trackingMemberCode the trackingMemberCode
     * @return string
     */
    public function setTrackingMemberCode($_trackingMemberCode)
    {
        return ($this->trackingMemberCode = $_trackingMemberCode);
    }
    /**
     * Get cardGuid value
     * @return string|null
     */
    public function getCardGuid()
    {
        return $this->cardGuid;
    }
    /**
     * Set cardGuid value
     * @param string $_cardGuid the cardGuid
     * @return string
     */
    public function setCardGuid($_cardGuid)
    {
        return ($this->cardGuid = $_cardGuid);
    }
    /**
     * Get dynamicDescriptor value
     * @return string|null
     */
    public function getDynamicDescriptor()
    {
        return $this->dynamicDescriptor;
    }
    /**
     * Set dynamicDescriptor value
     * @param string $_dynamicDescriptor the dynamicDescriptor
     * @return string
     */
    public function setDynamicDescriptor($_dynamicDescriptor)
    {
        return ($this->dynamicDescriptor = $_dynamicDescriptor);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionRecurringOperationsWsdlClass::__set_state()
     * @uses PayvisionRecurringOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionRecurringOperationsStructAuthorize
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
