<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing InvoiceType
 *
 * Az adatszolgáltatás fő típusaMain type of the data exchange
 * XSD Type: InvoiceType
 */
class InvoiceType
{

    /**
     * A számla adatszolgáltatás adataiInvoice exchange data
     *
     * @property \Dream\NavInvoiceData\InvoiceExchangeType $invoiceExchange
     */
    private $invoiceExchange = null;

    /**
     * Korábbi adatszolgáltatás technikai érvénytelenítésének adataiData of technical annulment concerning previous data exchange
     *
     * @property \Dream\NavInvoiceData\InvoiceAnnulmentType $invoiceAnnulment
     */
    private $invoiceAnnulment = null;

    /**
     * Gets as invoiceExchange
     *
     * A számla adatszolgáltatás adataiInvoice exchange data
     *
     * @return \Dream\NavInvoiceData\InvoiceExchangeType
     */
    public function getInvoiceExchange()
    {
        return $this->invoiceExchange;
    }

    /**
     * Sets a new invoiceExchange
     *
     * A számla adatszolgáltatás adataiInvoice exchange data
     *
     * @param \Dream\NavInvoiceData\InvoiceExchangeType $invoiceExchange
     * @return self
     */
    public function setInvoiceExchange(\Dream\NavInvoiceData\InvoiceExchangeType $invoiceExchange)
    {
        $this->invoiceExchange = $invoiceExchange;
        return $this;
    }

    /**
     * Gets as invoiceAnnulment
     *
     * Korábbi adatszolgáltatás technikai érvénytelenítésének adataiData of technical annulment concerning previous data exchange
     *
     * @return \Dream\NavInvoiceData\InvoiceAnnulmentType
     */
    public function getInvoiceAnnulment()
    {
        return $this->invoiceAnnulment;
    }

    /**
     * Sets a new invoiceAnnulment
     *
     * Korábbi adatszolgáltatás technikai érvénytelenítésének adataiData of technical annulment concerning previous data exchange
     *
     * @param \Dream\NavInvoiceData\InvoiceAnnulmentType $invoiceAnnulment
     * @return self
     */
    public function setInvoiceAnnulment(\Dream\NavInvoiceData\InvoiceAnnulmentType $invoiceAnnulment)
    {
        $this->invoiceAnnulment = $invoiceAnnulment;
        return $this;
    }


}

