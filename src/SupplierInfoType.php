<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing SupplierInfoType
 *
 * A szállító (eladó) adataiInvoice supplier (seller) data
 * XSD Type: SupplierInfoType
 */
class SupplierInfoType
{

    /**
     * Belföldi adószám, amely alatt a számlán szereplő termékértékesítés
     * vagy szolgáltatás nyújtás történt. Lehet csoportazonosító szám isTax
     * number or group identification number, under which the supply of goods or
     * services is done
     *
     * @property \Dream\NavInvoiceData\TaxNumberType $supplierTaxNumber
     */
    private $supplierTaxNumber = null;

    /**
     * Csoport tag adószáma, ha a termékbeszerzés vagy szolgáltatás nyújtása
     * csoportazonosító szám alatt történtTax number of group member, when the
     * supply of goods or services is done under group identification number
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
     * Az eladó (szállító) neveName of the seller (supplier)
     *
     * @property string $supplierName
     */
    private $supplierName = null;

    /**
     * Az eladó (szállító) címeAddress of the seller (supplier)
     *
     * @property \Dream\NavInvoiceData\AddressType $supplierAddress
     */
    private $supplierAddress = null;

    /**
     * Az eladó (szállító) bankszámlaszámaBank account number of the seller
     * (supplier)
     *
     * @property string $supplierBankAccountNumber
     */
    private $supplierBankAccountNumber = null;

    /**
     * Értéke true, amennyiben az eladó (szállító) alanyi ÁFA mentesValue is
     * true if the seller (supplier) is individually exempted from VAT
     *
     * @property boolean $individualExemption
     */
    private $individualExemption = null;

    /**
     * Az eladó adóraktári engedélyének vagy jövedéki engedélyének száma
     * (2016. évi LXVIII. tv.)Number of supplier’s tax warehouse license or excise
     * license (Act LXVIII of 2016)
     *
     * @property string $exciseLicenceNum
     */
    private $exciseLicenceNum = null;

    /**
     * Gets as supplierTaxNumber
     *
     * Belföldi adószám, amely alatt a számlán szereplő termékértékesítés
     * vagy szolgáltatás nyújtás történt. Lehet csoportazonosító szám isTax
     * number or group identification number, under which the supply of goods or
     * services is done
     *
     * @return \Dream\NavInvoiceData\TaxNumberType
     */
    public function getSupplierTaxNumber()
    {
        return $this->supplierTaxNumber;
    }

    /**
     * Sets a new supplierTaxNumber
     *
     * Belföldi adószám, amely alatt a számlán szereplő termékértékesítés
     * vagy szolgáltatás nyújtás történt. Lehet csoportazonosító szám isTax
     * number or group identification number, under which the supply of goods or
     * services is done
     *
     * @param \Dream\NavInvoiceData\TaxNumberType $supplierTaxNumber
     * @return self
     */
    public function setSupplierTaxNumber(\Dream\NavInvoiceData\TaxNumberType $supplierTaxNumber)
    {
        $this->supplierTaxNumber = $supplierTaxNumber;
        return $this;
    }

    /**
     * Gets as groupMemberTaxNumber
     *
     * Csoport tag adószáma, ha a termékbeszerzés vagy szolgáltatás nyújtása
     * csoportazonosító szám alatt történtTax number of group member, when the
     * supply of goods or services is done under group identification number
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
     * Csoport tag adószáma, ha a termékbeszerzés vagy szolgáltatás nyújtása
     * csoportazonosító szám alatt történtTax number of group member, when the
     * supply of goods or services is done under group identification number
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
     * Gets as supplierName
     *
     * Az eladó (szállító) neveName of the seller (supplier)
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Sets a new supplierName
     *
     * Az eladó (szállító) neveName of the seller (supplier)
     *
     * @param string $supplierName
     * @return self
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    /**
     * Gets as supplierAddress
     *
     * Az eladó (szállító) címeAddress of the seller (supplier)
     *
     * @return \Dream\NavInvoiceData\AddressType
     */
    public function getSupplierAddress()
    {
        return $this->supplierAddress;
    }

    /**
     * Sets a new supplierAddress
     *
     * Az eladó (szállító) címeAddress of the seller (supplier)
     *
     * @param \Dream\NavInvoiceData\AddressType $supplierAddress
     * @return self
     */
    public function setSupplierAddress(\Dream\NavInvoiceData\AddressType $supplierAddress)
    {
        $this->supplierAddress = $supplierAddress;
        return $this;
    }

    /**
     * Gets as supplierBankAccountNumber
     *
     * Az eladó (szállító) bankszámlaszámaBank account number of the seller
     * (supplier)
     *
     * @return string
     */
    public function getSupplierBankAccountNumber()
    {
        return $this->supplierBankAccountNumber;
    }

    /**
     * Sets a new supplierBankAccountNumber
     *
     * Az eladó (szállító) bankszámlaszámaBank account number of the seller
     * (supplier)
     *
     * @param string $supplierBankAccountNumber
     * @return self
     */
    public function setSupplierBankAccountNumber($supplierBankAccountNumber)
    {
        $this->supplierBankAccountNumber = $supplierBankAccountNumber;
        return $this;
    }

    /**
     * Gets as individualExemption
     *
     * Értéke true, amennyiben az eladó (szállító) alanyi ÁFA mentesValue is
     * true if the seller (supplier) is individually exempted from VAT
     *
     * @return boolean
     */
    public function getIndividualExemption()
    {
        return $this->individualExemption;
    }

    /**
     * Sets a new individualExemption
     *
     * Értéke true, amennyiben az eladó (szállító) alanyi ÁFA mentesValue is
     * true if the seller (supplier) is individually exempted from VAT
     *
     * @param boolean $individualExemption
     * @return self
     */
    public function setIndividualExemption($individualExemption)
    {
        $this->individualExemption = $individualExemption;
        return $this;
    }

    /**
     * Gets as exciseLicenceNum
     *
     * Az eladó adóraktári engedélyének vagy jövedéki engedélyének száma
     * (2016. évi LXVIII. tv.)Number of supplier’s tax warehouse license or excise
     * license (Act LXVIII of 2016)
     *
     * @return string
     */
    public function getExciseLicenceNum()
    {
        return $this->exciseLicenceNum;
    }

    /**
     * Sets a new exciseLicenceNum
     *
     * Az eladó adóraktári engedélyének vagy jövedéki engedélyének száma
     * (2016. évi LXVIII. tv.)Number of supplier’s tax warehouse license or excise
     * license (Act LXVIII of 2016)
     *
     * @param string $exciseLicenceNum
     * @return self
     */
    public function setExciseLicenceNum($exciseLicenceNum)
    {
        $this->exciseLicenceNum = $exciseLicenceNum;
        return $this;
    }


}

