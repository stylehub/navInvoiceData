<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing LineAmountsSimplifiedType
 *
 * Egyszerűsített számla esetén kitöltendő tétel érték adatokItem value
 * data to be completed in case of simplified invoice
 * XSD Type: LineAmountsSimplifiedType
 */
class LineAmountsSimplifiedType
{

    /**
     * A tétel ÁFA tartama egyszerűsített számla eseténVAT content of the item,
     * in case of simplified invoice
     *
     * @property float $lineVatContent
     */
    private $lineVatContent = null;

    /**
     * Tétel bruttó értéke a számla pénznemébenGross amount of the item
     * expressed in the currency of the invoice
     *
     * @property float $lineGrossAmountSimplified
     */
    private $lineGrossAmountSimplified = null;

    /**
     * Gets as lineVatContent
     *
     * A tétel ÁFA tartama egyszerűsített számla eseténVAT content of the item,
     * in case of simplified invoice
     *
     * @return float
     */
    public function getLineVatContent()
    {
        return $this->lineVatContent;
    }

    /**
     * Sets a new lineVatContent
     *
     * A tétel ÁFA tartama egyszerűsített számla eseténVAT content of the item,
     * in case of simplified invoice
     *
     * @param float $lineVatContent
     * @return self
     */
    public function setLineVatContent($lineVatContent)
    {
        $this->lineVatContent = $lineVatContent;
        return $this;
    }

    /**
     * Gets as lineGrossAmountSimplified
     *
     * Tétel bruttó értéke a számla pénznemébenGross amount of the item
     * expressed in the currency of the invoice
     *
     * @return float
     */
    public function getLineGrossAmountSimplified()
    {
        return $this->lineGrossAmountSimplified;
    }

    /**
     * Sets a new lineGrossAmountSimplified
     *
     * Tétel bruttó értéke a számla pénznemébenGross amount of the item
     * expressed in the currency of the invoice
     *
     * @param float $lineGrossAmountSimplified
     * @return self
     */
    public function setLineGrossAmountSimplified($lineGrossAmountSimplified)
    {
        $this->lineGrossAmountSimplified = $lineGrossAmountSimplified;
        return $this;
    }


}

