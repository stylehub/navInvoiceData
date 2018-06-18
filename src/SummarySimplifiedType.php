<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing SummarySimplifiedType
 *
 * Egyszerűsített számla összesítésCalculation of simplified invoice totals
 * XSD Type: SummarySimplifiedType
 */
class SummarySimplifiedType
{

    /**
     * Egyszerűsített számla esetén az adótartalom arányaIn the case of a simplified invoice, VAT content rate
     *
     * @property float $vatContent
     */
    private $vatContent = null;

    /**
     * Az adott adótartalomhoz tartozó értékesítés vagy szolgáltatásnyújtás bruttó összege a számla pénznemébenThe gross amount of the sale or service for the given tax amount in the currency of the invoice
     *
     * @property float $vatContentGrossAmount
     */
    private $vatContentGrossAmount = null;

    /**
     * Gets as vatContent
     *
     * Egyszerűsített számla esetén az adótartalom arányaIn the case of a simplified invoice, VAT content rate
     *
     * @return float
     */
    public function getVatContent()
    {
        return $this->vatContent;
    }

    /**
     * Sets a new vatContent
     *
     * Egyszerűsített számla esetén az adótartalom arányaIn the case of a simplified invoice, VAT content rate
     *
     * @param float $vatContent
     * @return self
     */
    public function setVatContent($vatContent)
    {
        $this->vatContent = $vatContent;
        return $this;
    }

    /**
     * Gets as vatContentGrossAmount
     *
     * Az adott adótartalomhoz tartozó értékesítés vagy szolgáltatásnyújtás bruttó összege a számla pénznemébenThe gross amount of the sale or service for the given tax amount in the currency of the invoice
     *
     * @return float
     */
    public function getVatContentGrossAmount()
    {
        return $this->vatContentGrossAmount;
    }

    /**
     * Sets a new vatContentGrossAmount
     *
     * Az adott adótartalomhoz tartozó értékesítés vagy szolgáltatásnyújtás bruttó összege a számla pénznemébenThe gross amount of the sale or service for the given tax amount in the currency of the invoice
     *
     * @param float $vatContentGrossAmount
     * @return self
     */
    public function setVatContentGrossAmount($vatContentGrossAmount)
    {
        $this->vatContentGrossAmount = $vatContentGrossAmount;
        return $this;
    }


}

