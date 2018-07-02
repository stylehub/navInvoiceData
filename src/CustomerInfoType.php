<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing CustomerInfoType
 *
 * A vevő adataiCustomer data
 * XSD Type: CustomerInfoType
 */
class CustomerInfoType
{

    /**
     * Adószám, amely alatt a számlán szereplő termékbeszerzés vagy
     * szolgáltatás igénybevétele történt. Lehet csoportazonosító szám isTax
     * number or group identification number, under which the purchase of goods or
     * services is done
     *
     * @property \Dream\NavInvoiceData\TaxNumberType $customerTaxNumber
     */
    private $customerTaxNumber = null;

    /**
     * Csoport tag adószáma, ha a termékbeszerzés vagy szolgáltatás
     * igénybevétele csoportazonosító szám alatt történtTax number of group
     * member, when the purchase of goods or services is done under group
     * identification number
     *
     * @property \Dream\NavInvoiceData\TaxNumberType $groupMemberTaxNumber
     */
    private $groupMemberTaxNumber = null;

    /**
     * Közösségi adószámCommunity tax number
     *
     * @property string $communityVatNumber
     */
    private $communityVatNumber = null;

    /**
     * Harmadik országbeli adóazonosítóThird state tax identification number
     *
     * @property string $thirdStateTaxId
     */
    private $thirdStateTaxId = null;

    /**
     * A vevő neveName of the customer
     *
     * @property string $customerName
     */
    private $customerName = null;

    /**
     * A vevő címeAddress of the customer
     *
     * @property \Dream\NavInvoiceData\AddressType $customerAddress
     */
    private $customerAddress = null;

    /**
     * Vevő bankszámlaszámaBank account number of the customer
     *
     * @property string $customerBankAccountNumber
     */
    private $customerBankAccountNumber = null;

    /**
     * Gets as customerTaxNumber
     *
     * Adószám, amely alatt a számlán szereplő termékbeszerzés vagy
     * szolgáltatás igénybevétele történt. Lehet csoportazonosító szám isTax
     * number or group identification number, under which the purchase of goods or
     * services is done
     *
     * @return \Dream\NavInvoiceData\TaxNumberType
     */
    public function getCustomerTaxNumber()
    {
        return $this->customerTaxNumber;
    }

    /**
     * Sets a new customerTaxNumber
     *
     * Adószám, amely alatt a számlán szereplő termékbeszerzés vagy
     * szolgáltatás igénybevétele történt. Lehet csoportazonosító szám isTax
     * number or group identification number, under which the purchase of goods or
     * services is done
     *
     * @param \Dream\NavInvoiceData\TaxNumberType $customerTaxNumber
     * @return self
     */
    public function setCustomerTaxNumber(\Dream\NavInvoiceData\TaxNumberType $customerTaxNumber)
    {
        $this->customerTaxNumber = $customerTaxNumber;
        return $this;
    }

    /**
     * Gets as groupMemberTaxNumber
     *
     * Csoport tag adószáma, ha a termékbeszerzés vagy szolgáltatás
     * igénybevétele csoportazonosító szám alatt történtTax number of group
     * member, when the purchase of goods or services is done under group
     * identification number
     *
     * @return \Dream\NavInvoiceData\TaxNumberType
     */
    public function getGroupMemberTaxNumber()
    {
        return $this->groupMemberTaxNumber;
    }

    /**
     * Sets a new groupMemberTaxNumber
     *
     * Csoport tag adószáma, ha a termékbeszerzés vagy szolgáltatás
     * igénybevétele csoportazonosító szám alatt történtTax number of group
     * member, when the purchase of goods or services is done under group
     * identification number
     *
     * @param \Dream\NavInvoiceData\TaxNumberType $groupMemberTaxNumber
     * @return self
     */
    public function setGroupMemberTaxNumber(\Dream\NavInvoiceData\TaxNumberType $groupMemberTaxNumber)
    {
        $this->groupMemberTaxNumber = $groupMemberTaxNumber;
        return $this;
    }

    /**
     * Gets as communityVatNumber
     *
     * Közösségi adószámCommunity tax number
     *
     * @return string
     */
    public function getCommunityVatNumber()
    {
        return $this->communityVatNumber;
    }

    /**
     * Sets a new communityVatNumber
     *
     * Közösségi adószámCommunity tax number
     *
     * @param string $communityVatNumber
     * @return self
     */
    public function setCommunityVatNumber($communityVatNumber)
    {
        $this->communityVatNumber = $communityVatNumber;
        return $this;
    }

    /**
     * Gets as thirdStateTaxId
     *
     * Harmadik országbeli adóazonosítóThird state tax identification number
     *
     * @return string
     */
    public function getThirdStateTaxId()
    {
        return $this->thirdStateTaxId;
    }

    /**
     * Sets a new thirdStateTaxId
     *
     * Harmadik országbeli adóazonosítóThird state tax identification number
     *
     * @param string $thirdStateTaxId
     * @return self
     */
    public function setThirdStateTaxId($thirdStateTaxId)
    {
        $this->thirdStateTaxId = $thirdStateTaxId;
        return $this;
    }

    /**
     * Gets as customerName
     *
     * A vevő neveName of the customer
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Sets a new customerName
     *
     * A vevő neveName of the customer
     *
     * @param string $customerName
     * @return self
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * Gets as customerAddress
     *
     * A vevő címeAddress of the customer
     *
     * @return \Dream\NavInvoiceData\AddressType
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * Sets a new customerAddress
     *
     * A vevő címeAddress of the customer
     *
     * @param \Dream\NavInvoiceData\AddressType $customerAddress
     * @return self
     */
    public function setCustomerAddress(\Dream\NavInvoiceData\AddressType $customerAddress)
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    /**
     * Gets as customerBankAccountNumber
     *
     * Vevő bankszámlaszámaBank account number of the customer
     *
     * @return string
     */
    public function getCustomerBankAccountNumber()
    {
        return $this->customerBankAccountNumber;
    }

    /**
     * Sets a new customerBankAccountNumber
     *
     * Vevő bankszámlaszámaBank account number of the customer
     *
     * @param string $customerBankAccountNumber
     * @return self
     */
    public function setCustomerBankAccountNumber($customerBankAccountNumber)
    {
        $this->customerBankAccountNumber = $customerBankAccountNumber;
        return $this;
    }


}

