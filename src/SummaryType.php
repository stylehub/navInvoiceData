<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing SummaryType
 *
 * Számla összesítés adataiData of calculation of invoice totals
 * XSD Type: SummaryType
 */
class SummaryType
{

    /**
     * Számla összesítés (nem egyszerűsített számla esetén)Calculation of
     * invoice totals (not simplified invoice)
     *
     * @property \Dream\NavInvoiceData\SummaryNormalType $summaryNormal
     */
    private $summaryNormal = null;

    /**
     * Egyszerűsített számla összesítésCalculation of simplified invoice totals
     *
     * @property \Dream\NavInvoiceData\SummarySimplifiedType[] $summarySimplified
     */
    private $summarySimplified = null;

    /**
     * A számla bruttó összege a számla pénznemébenGross amount of the invoice
     * expressed in the currency of the invoice
     *
     * @property float $invoiceGrossAmount
     */
    private $invoiceGrossAmount = null;

    /**
     * Gets as summaryNormal
     *
     * Számla összesítés (nem egyszerűsített számla esetén)Calculation of
     * invoice totals (not simplified invoice)
     *
     * @return \Dream\NavInvoiceData\SummaryNormalType
     */
    public function getSummaryNormal()
    {
        return $this->summaryNormal;
    }

    /**
     * Sets a new summaryNormal
     *
     * Számla összesítés (nem egyszerűsített számla esetén)Calculation of
     * invoice totals (not simplified invoice)
     *
     * @param \Dream\NavInvoiceData\SummaryNormalType $summaryNormal
     * @return self
     */
    public function setSummaryNormal(\Dream\NavInvoiceData\SummaryNormalType $summaryNormal)
    {
        $this->summaryNormal = $summaryNormal;
        return $this;
    }

    /**
     * Adds as summarySimplified
     *
     * Egyszerűsített számla összesítésCalculation of simplified invoice totals
     *
     * @return self
     * @param \Dream\NavInvoiceData\SummarySimplifiedType $summarySimplified
     */
    public function addToSummarySimplified(\Dream\NavInvoiceData\SummarySimplifiedType $summarySimplified)
    {
        $this->summarySimplified[] = $summarySimplified;
        return $this;
    }

    /**
     * isset summarySimplified
     *
     * Egyszerűsített számla összesítésCalculation of simplified invoice totals
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSummarySimplified($index)
    {
        return isset($this->summarySimplified[$index]);
    }

    /**
     * unset summarySimplified
     *
     * Egyszerűsített számla összesítésCalculation of simplified invoice totals
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSummarySimplified($index)
    {
        unset($this->summarySimplified[$index]);
    }

    /**
     * Gets as summarySimplified
     *
     * Egyszerűsített számla összesítésCalculation of simplified invoice totals
     *
     * @return \Dream\NavInvoiceData\SummarySimplifiedType[]
     */
    public function getSummarySimplified()
    {
        return $this->summarySimplified;
    }

    /**
     * Sets a new summarySimplified
     *
     * Egyszerűsített számla összesítésCalculation of simplified invoice totals
     *
     * @param \Dream\NavInvoiceData\SummarySimplifiedType[] $summarySimplified
     * @return self
     */
    public function setSummarySimplified(array $summarySimplified)
    {
        $this->summarySimplified = $summarySimplified;
        return $this;
    }

    /**
     * Gets as invoiceGrossAmount
     *
     * A számla bruttó összege a számla pénznemébenGross amount of the invoice
     * expressed in the currency of the invoice
     *
     * @return float
     */
    public function getInvoiceGrossAmount()
    {
        return $this->invoiceGrossAmount;
    }

    /**
     * Sets a new invoiceGrossAmount
     *
     * A számla bruttó összege a számla pénznemébenGross amount of the invoice
     * expressed in the currency of the invoice
     *
     * @param float $invoiceGrossAmount
     * @return self
     */
    public function setInvoiceGrossAmount($invoiceGrossAmount)
    {
        $this->invoiceGrossAmount = $invoiceGrossAmount;
        return $this;
    }


}

