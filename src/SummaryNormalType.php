<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing SummaryNormalType
 *
 * Számla összesítés (nem egyszerűsített számla esetén)Calculation of invoice totals (not simplified invoice)
 * XSD Type: SummaryNormalType
 */
class SummaryNormalType
{

    /**
     * Összesítés ÁFA-mérték szerintCalculation of invoice totals per VAT rates
     *
     * @property \Dream\NavInvoiceData\SummaryByVatRateType[] $summaryByVatRate
     */
    private $summaryByVatRate = array(
        
    );

    /**
     * A számla nettó összege a számla pénznemébenNet amount of the invoice expressed in the currency of the invoice
     *
     * @property float $invoiceNetAmount
     */
    private $invoiceNetAmount = null;

    /**
     * A számla ÁFA összege a számla pénznemébenVAT amount of the invoice expressed in the currency of the invoice
     *
     * @property float $invoiceVatAmount
     */
    private $invoiceVatAmount = null;

    /**
     * A számla ÁFA összege forintbanVAT amount of the invoice expressed in HUF
     *
     * @property float $invoiceVatAmountHUF
     */
    private $invoiceVatAmountHUF = null;

    /**
     * Adds as summaryByVatRate
     *
     * Összesítés ÁFA-mérték szerintCalculation of invoice totals per VAT rates
     *
     * @return self
     * @param \Dream\NavInvoiceData\SummaryByVatRateType $summaryByVatRate
     */
    public function addToSummaryByVatRate(\Dream\NavInvoiceData\SummaryByVatRateType $summaryByVatRate)
    {
        $this->summaryByVatRate[] = $summaryByVatRate;
        return $this;
    }

    /**
     * isset summaryByVatRate
     *
     * Összesítés ÁFA-mérték szerintCalculation of invoice totals per VAT rates
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSummaryByVatRate($index)
    {
        return isset($this->summaryByVatRate[$index]);
    }

    /**
     * unset summaryByVatRate
     *
     * Összesítés ÁFA-mérték szerintCalculation of invoice totals per VAT rates
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSummaryByVatRate($index)
    {
        unset($this->summaryByVatRate[$index]);
    }

    /**
     * Gets as summaryByVatRate
     *
     * Összesítés ÁFA-mérték szerintCalculation of invoice totals per VAT rates
     *
     * @return \Dream\NavInvoiceData\SummaryByVatRateType[]
     */
    public function getSummaryByVatRate()
    {
        return $this->summaryByVatRate;
    }

    /**
     * Sets a new summaryByVatRate
     *
     * Összesítés ÁFA-mérték szerintCalculation of invoice totals per VAT rates
     *
     * @param \Dream\NavInvoiceData\SummaryByVatRateType[] $summaryByVatRate
     * @return self
     */
    public function setSummaryByVatRate(array $summaryByVatRate)
    {
        $this->summaryByVatRate = $summaryByVatRate;
        return $this;
    }

    /**
     * Gets as invoiceNetAmount
     *
     * A számla nettó összege a számla pénznemébenNet amount of the invoice expressed in the currency of the invoice
     *
     * @return float
     */
    public function getInvoiceNetAmount()
    {
        return $this->invoiceNetAmount;
    }

    /**
     * Sets a new invoiceNetAmount
     *
     * A számla nettó összege a számla pénznemébenNet amount of the invoice expressed in the currency of the invoice
     *
     * @param float $invoiceNetAmount
     * @return self
     */
    public function setInvoiceNetAmount($invoiceNetAmount)
    {
        $this->invoiceNetAmount = $invoiceNetAmount;
        return $this;
    }

    /**
     * Gets as invoiceVatAmount
     *
     * A számla ÁFA összege a számla pénznemébenVAT amount of the invoice expressed in the currency of the invoice
     *
     * @return float
     */
    public function getInvoiceVatAmount()
    {
        return $this->invoiceVatAmount;
    }

    /**
     * Sets a new invoiceVatAmount
     *
     * A számla ÁFA összege a számla pénznemébenVAT amount of the invoice expressed in the currency of the invoice
     *
     * @param float $invoiceVatAmount
     * @return self
     */
    public function setInvoiceVatAmount($invoiceVatAmount)
    {
        $this->invoiceVatAmount = $invoiceVatAmount;
        return $this;
    }

    /**
     * Gets as invoiceVatAmountHUF
     *
     * A számla ÁFA összege forintbanVAT amount of the invoice expressed in HUF
     *
     * @return float
     */
    public function getInvoiceVatAmountHUF()
    {
        return $this->invoiceVatAmountHUF;
    }

    /**
     * Sets a new invoiceVatAmountHUF
     *
     * A számla ÁFA összege forintbanVAT amount of the invoice expressed in HUF
     *
     * @param float $invoiceVatAmountHUF
     * @return self
     */
    public function setInvoiceVatAmountHUF($invoiceVatAmountHUF)
    {
        $this->invoiceVatAmountHUF = $invoiceVatAmountHUF;
        return $this;
    }


}

