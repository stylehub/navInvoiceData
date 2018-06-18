<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing SummaryByVatRateType
 *
 * ÁFA mértékek szerinti összesítésSummary according to VAT rates
 * XSD Type: SummaryByVatRateType
 */
class SummaryByVatRateType
{

    /**
     * Adómérték vagy adómentesség jelöléseMarking the tax rate or the fact of tax exemption
     *
     * @property \Dream\NavInvoiceData\VatRateType $vatRate
     */
    private $vatRate = null;

    /**
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás nettó összege a számla pénznemébenNet amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @property float $vatRateNetAmount
     */
    private $vatRateNetAmount = null;

    /**
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás ÁFA összege a számla pénznemébenVAT amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @property float $vatRateVatAmount
     */
    private $vatRateVatAmount = null;

    /**
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás ÁFA összege forintbanVAT amount of sales or service delivery under a given tax rate expressed in HUF
     *
     * @property float $vatRateVatAmountHUF
     */
    private $vatRateVatAmountHUF = null;

    /**
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás bruttó összege a számla pénznemébenGross amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @property float $vatRateGrossAmount
     */
    private $vatRateGrossAmount = null;

    /**
     * Gets as vatRate
     *
     * Adómérték vagy adómentesség jelöléseMarking the tax rate or the fact of tax exemption
     *
     * @return \Dream\NavInvoiceData\VatRateType
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * Sets a new vatRate
     *
     * Adómérték vagy adómentesség jelöléseMarking the tax rate or the fact of tax exemption
     *
     * @param \Dream\NavInvoiceData\VatRateType $vatRate
     * @return self
     */
    public function setVatRate(\Dream\NavInvoiceData\VatRateType $vatRate)
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    /**
     * Gets as vatRateNetAmount
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás nettó összege a számla pénznemébenNet amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @return float
     */
    public function getVatRateNetAmount()
    {
        return $this->vatRateNetAmount;
    }

    /**
     * Sets a new vatRateNetAmount
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás nettó összege a számla pénznemébenNet amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @param float $vatRateNetAmount
     * @return self
     */
    public function setVatRateNetAmount($vatRateNetAmount)
    {
        $this->vatRateNetAmount = $vatRateNetAmount;
        return $this;
    }

    /**
     * Gets as vatRateVatAmount
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás ÁFA összege a számla pénznemébenVAT amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @return float
     */
    public function getVatRateVatAmount()
    {
        return $this->vatRateVatAmount;
    }

    /**
     * Sets a new vatRateVatAmount
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás ÁFA összege a számla pénznemébenVAT amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @param float $vatRateVatAmount
     * @return self
     */
    public function setVatRateVatAmount($vatRateVatAmount)
    {
        $this->vatRateVatAmount = $vatRateVatAmount;
        return $this;
    }

    /**
     * Gets as vatRateVatAmountHUF
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás ÁFA összege forintbanVAT amount of sales or service delivery under a given tax rate expressed in HUF
     *
     * @return float
     */
    public function getVatRateVatAmountHUF()
    {
        return $this->vatRateVatAmountHUF;
    }

    /**
     * Sets a new vatRateVatAmountHUF
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás ÁFA összege forintbanVAT amount of sales or service delivery under a given tax rate expressed in HUF
     *
     * @param float $vatRateVatAmountHUF
     * @return self
     */
    public function setVatRateVatAmountHUF($vatRateVatAmountHUF)
    {
        $this->vatRateVatAmountHUF = $vatRateVatAmountHUF;
        return $this;
    }

    /**
     * Gets as vatRateGrossAmount
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás bruttó összege a számla pénznemébenGross amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @return float
     */
    public function getVatRateGrossAmount()
    {
        return $this->vatRateGrossAmount;
    }

    /**
     * Sets a new vatRateGrossAmount
     *
     * Az adott adómértékhez tartozó értékesítés vagy szolgáltatásnyújtás bruttó összege a számla pénznemébenGross amount of sales or service delivery under a given tax rate expressed in the currency of the invoice
     *
     * @param float $vatRateGrossAmount
     * @return self
     */
    public function setVatRateGrossAmount($vatRateGrossAmount)
    {
        $this->vatRateGrossAmount = $vatRateGrossAmount;
        return $this;
    }


}

