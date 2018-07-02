<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing FiscalRepresentativeType
 *
 * A pénzügyi képviselő adataiFiscal representative data
 * XSD Type: FiscalRepresentativeType
 */
class FiscalRepresentativeType
{

    /**
     * A pénzügyi képviselő adószámaTax number of the fiscal representative
     *
     * @property \Dream\NavInvoiceData\TaxNumberType $fiscalRepresentativeTaxNumber
     */
    private $fiscalRepresentativeTaxNumber = null;

    /**
     * A pénzügyi képviselő neveName of the fiscal representative
     *
     * @property string $fiscalRepresentativeName
     */
    private $fiscalRepresentativeName = null;

    /**
     * Pénzügyi képviselő címeAddress of the fiscal representative
     *
     * @property \Dream\NavInvoiceData\AddressType $fiscalRepresentativeAddress
     */
    private $fiscalRepresentativeAddress = null;

    /**
     * Pénzügyi képviselő által a számla kibocsátó (eladó) számára
     * megnyitott bankszámla bankszámlaszámaBank account number opened by the fiscal
     * representative for the issuer of the invoice (supplier)
     *
     * @property string $fiscalRepresentativeBankAccountNumber
     */
    private $fiscalRepresentativeBankAccountNumber = null;

    /**
     * Gets as fiscalRepresentativeTaxNumber
     *
     * A pénzügyi képviselő adószámaTax number of the fiscal representative
     *
     * @return \Dream\NavInvoiceData\TaxNumberType
     */
    public function getFiscalRepresentativeTaxNumber()
    {
        return $this->fiscalRepresentativeTaxNumber;
    }

    /**
     * Sets a new fiscalRepresentativeTaxNumber
     *
     * A pénzügyi képviselő adószámaTax number of the fiscal representative
     *
     * @param \Dream\NavInvoiceData\TaxNumberType $fiscalRepresentativeTaxNumber
     * @return self
     */
    public function setFiscalRepresentativeTaxNumber(\Dream\NavInvoiceData\TaxNumberType $fiscalRepresentativeTaxNumber)
    {
        $this->fiscalRepresentativeTaxNumber = $fiscalRepresentativeTaxNumber;
        return $this;
    }

    /**
     * Gets as fiscalRepresentativeName
     *
     * A pénzügyi képviselő neveName of the fiscal representative
     *
     * @return string
     */
    public function getFiscalRepresentativeName()
    {
        return $this->fiscalRepresentativeName;
    }

    /**
     * Sets a new fiscalRepresentativeName
     *
     * A pénzügyi képviselő neveName of the fiscal representative
     *
     * @param string $fiscalRepresentativeName
     * @return self
     */
    public function setFiscalRepresentativeName($fiscalRepresentativeName)
    {
        $this->fiscalRepresentativeName = $fiscalRepresentativeName;
        return $this;
    }

    /**
     * Gets as fiscalRepresentativeAddress
     *
     * Pénzügyi képviselő címeAddress of the fiscal representative
     *
     * @return \Dream\NavInvoiceData\AddressType
     */
    public function getFiscalRepresentativeAddress()
    {
        return $this->fiscalRepresentativeAddress;
    }

    /**
     * Sets a new fiscalRepresentativeAddress
     *
     * Pénzügyi képviselő címeAddress of the fiscal representative
     *
     * @param \Dream\NavInvoiceData\AddressType $fiscalRepresentativeAddress
     * @return self
     */
    public function setFiscalRepresentativeAddress(\Dream\NavInvoiceData\AddressType $fiscalRepresentativeAddress)
    {
        $this->fiscalRepresentativeAddress = $fiscalRepresentativeAddress;
        return $this;
    }

    /**
     * Gets as fiscalRepresentativeBankAccountNumber
     *
     * Pénzügyi képviselő által a számla kibocsátó (eladó) számára
     * megnyitott bankszámla bankszámlaszámaBank account number opened by the fiscal
     * representative for the issuer of the invoice (supplier)
     *
     * @return string
     */
    public function getFiscalRepresentativeBankAccountNumber()
    {
        return $this->fiscalRepresentativeBankAccountNumber;
    }

    /**
     * Sets a new fiscalRepresentativeBankAccountNumber
     *
     * Pénzügyi képviselő által a számla kibocsátó (eladó) számára
     * megnyitott bankszámla bankszámlaszámaBank account number opened by the fiscal
     * representative for the issuer of the invoice (supplier)
     *
     * @param string $fiscalRepresentativeBankAccountNumber
     * @return self
     */
    public function setFiscalRepresentativeBankAccountNumber($fiscalRepresentativeBankAccountNumber)
    {
        $this->fiscalRepresentativeBankAccountNumber = $fiscalRepresentativeBankAccountNumber;
        return $this;
    }


}

