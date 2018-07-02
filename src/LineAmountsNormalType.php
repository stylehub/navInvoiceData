<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing LineAmountsNormalType
 *
 * Normál vagy gyűjtő számla esetén kitöltendő tétel érték adatokItem
 * value data to be completed in case of normal or aggregate invoice
 * XSD Type: LineAmountsNormalType
 */
class LineAmountsNormalType
{

    /**
     * Tétel nettó összege a számla pénznemébenNet amount of the item expressed
     * in the currency of the invoice
     *
     * @property float $lineNetAmount
     */
    private $lineNetAmount = null;

    /**
     * Adómérték vagy adómentesség jelöléseTax rate or tax exemption marking
     *
     * @property \Dream\NavInvoiceData\VatRateType $lineVatRate
     */
    private $lineVatRate = null;

    /**
     * Tétel ÁFA összege a számla pénznemébenVAT amount of the item expressed in
     * the currency of the invoice
     *
     * @property float $lineVatAmount
     */
    private $lineVatAmount = null;

    /**
     * Tétel ÁFA összege forintbanVAT amount of the item expressed in HUF
     *
     * @property float $lineVatAmountHUF
     */
    private $lineVatAmountHUF = null;

    /**
     * Tétel bruttó értéke a számla pénznemébenGross amount of the item
     * expressed in the currency of the invoice
     *
     * @property float $lineGrossAmountNormal
     */
    private $lineGrossAmountNormal = null;

    /**
     * Gets as lineNetAmount
     *
     * Tétel nettó összege a számla pénznemébenNet amount of the item expressed
     * in the currency of the invoice
     *
     * @return float
     */
    public function getLineNetAmount()
    {
        return $this->lineNetAmount;
    }

    /**
     * Sets a new lineNetAmount
     *
     * Tétel nettó összege a számla pénznemébenNet amount of the item expressed
     * in the currency of the invoice
     *
     * @param float $lineNetAmount
     * @return self
     */
    public function setLineNetAmount($lineNetAmount)
    {
        $this->lineNetAmount = $lineNetAmount;
        return $this;
    }

    /**
     * Gets as lineVatRate
     *
     * Adómérték vagy adómentesség jelöléseTax rate or tax exemption marking
     *
     * @return \Dream\NavInvoiceData\VatRateType
     */
    public function getLineVatRate()
    {
        return $this->lineVatRate;
    }

    /**
     * Sets a new lineVatRate
     *
     * Adómérték vagy adómentesség jelöléseTax rate or tax exemption marking
     *
     * @param \Dream\NavInvoiceData\VatRateType $lineVatRate
     * @return self
     */
    public function setLineVatRate(\Dream\NavInvoiceData\VatRateType $lineVatRate)
    {
        $this->lineVatRate = $lineVatRate;
        return $this;
    }

    /**
     * Gets as lineVatAmount
     *
     * Tétel ÁFA összege a számla pénznemébenVAT amount of the item expressed in
     * the currency of the invoice
     *
     * @return float
     */
    public function getLineVatAmount()
    {
        return $this->lineVatAmount;
    }

    /**
     * Sets a new lineVatAmount
     *
     * Tétel ÁFA összege a számla pénznemébenVAT amount of the item expressed in
     * the currency of the invoice
     *
     * @param float $lineVatAmount
     * @return self
     */
    public function setLineVatAmount($lineVatAmount)
    {
        $this->lineVatAmount = $lineVatAmount;
        return $this;
    }

    /**
     * Gets as lineVatAmountHUF
     *
     * Tétel ÁFA összege forintbanVAT amount of the item expressed in HUF
     *
     * @return float
     */
    public function getLineVatAmountHUF()
    {
        return $this->lineVatAmountHUF;
    }

    /**
     * Sets a new lineVatAmountHUF
     *
     * Tétel ÁFA összege forintbanVAT amount of the item expressed in HUF
     *
     * @param float $lineVatAmountHUF
     * @return self
     */
    public function setLineVatAmountHUF($lineVatAmountHUF)
    {
        $this->lineVatAmountHUF = $lineVatAmountHUF;
        return $this;
    }

    /**
     * Gets as lineGrossAmountNormal
     *
     * Tétel bruttó értéke a számla pénznemébenGross amount of the item
     * expressed in the currency of the invoice
     *
     * @return float
     */
    public function getLineGrossAmountNormal()
    {
        return $this->lineGrossAmountNormal;
    }

    /**
     * Sets a new lineGrossAmountNormal
     *
     * Tétel bruttó értéke a számla pénznemébenGross amount of the item
     * expressed in the currency of the invoice
     *
     * @param float $lineGrossAmountNormal
     * @return self
     */
    public function setLineGrossAmountNormal($lineGrossAmountNormal)
    {
        $this->lineGrossAmountNormal = $lineGrossAmountNormal;
        return $this;
    }


}

