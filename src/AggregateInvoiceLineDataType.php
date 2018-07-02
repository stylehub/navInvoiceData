<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing AggregateInvoiceLineDataType
 *
 * A gyűjtő számlára vonatkozó speciális adatokat tartalmazó típusField
 * type including aggregate invoice special data
 * XSD Type: AggregateInvoiceLineDataType
 */
class AggregateInvoiceLineDataType
{

    /**
     * A tételhez tartozó árfolyam, 1 (egy) egységre vonatkoztatva. Csak külföldi
     * pénznemben kiállított gyűjtő számla esetén kitöltendőThe exchange rate
     * applied to the item, pertaining to 1 (one) unit. This should be filled in only
     * if an aggregate invoice in foreign currency is issued
     *
     * @property float $lineExchangeRate
     */
    private $lineExchangeRate = null;

    /**
     * Gyűjtőszámla esetén az adott tétel teljesítési dátumaDelivery date of
     * the given item in the case of an aggregate invoice
     *
     * @property \DateTime $lineDeliveryDate
     */
    private $lineDeliveryDate = null;

    /**
     * Gets as lineExchangeRate
     *
     * A tételhez tartozó árfolyam, 1 (egy) egységre vonatkoztatva. Csak külföldi
     * pénznemben kiállított gyűjtő számla esetén kitöltendőThe exchange rate
     * applied to the item, pertaining to 1 (one) unit. This should be filled in only
     * if an aggregate invoice in foreign currency is issued
     *
     * @return float
     */
    public function getLineExchangeRate()
    {
        return $this->lineExchangeRate;
    }

    /**
     * Sets a new lineExchangeRate
     *
     * A tételhez tartozó árfolyam, 1 (egy) egységre vonatkoztatva. Csak külföldi
     * pénznemben kiállított gyűjtő számla esetén kitöltendőThe exchange rate
     * applied to the item, pertaining to 1 (one) unit. This should be filled in only
     * if an aggregate invoice in foreign currency is issued
     *
     * @param float $lineExchangeRate
     * @return self
     */
    public function setLineExchangeRate($lineExchangeRate)
    {
        $this->lineExchangeRate = $lineExchangeRate;
        return $this;
    }

    /**
     * Gets as lineDeliveryDate
     *
     * Gyűjtőszámla esetén az adott tétel teljesítési dátumaDelivery date of
     * the given item in the case of an aggregate invoice
     *
     * @return \DateTime
     */
    public function getLineDeliveryDate()
    {
        return $this->lineDeliveryDate;
    }

    /**
     * Sets a new lineDeliveryDate
     *
     * Gyűjtőszámla esetén az adott tétel teljesítési dátumaDelivery date of
     * the given item in the case of an aggregate invoice
     *
     * @param \DateTime $lineDeliveryDate
     * @return self
     */
    public function setLineDeliveryDate(\DateTime $lineDeliveryDate)
    {
        $this->lineDeliveryDate = $lineDeliveryDate;
        return $this;
    }


}

