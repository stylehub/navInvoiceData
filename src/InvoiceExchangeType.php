<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing InvoiceExchangeType
 *
 * A számla adatszolgáltatás adataiInvoice exchange data
 * XSD Type: InvoiceExchangeType
 */
class InvoiceExchangeType
{

    /**
     * A módosítás vagy érvénytelenítés adataiModification or cancellation data
     *
     * @property \Dream\NavInvoiceData\InvoiceReferenceType $invoiceReference
     */
    private $invoiceReference = null;

    /**
     * A számla egészét jellemző adatokData concerning the whole invoice
     *
     * @property \Dream\NavInvoiceData\InvoiceHeadType $invoiceHead
     */
    private $invoiceHead = null;

    /**
     * A számlán szereplő tételek adataiProduct/service data appearing on the invoice
     *
     * @property \Dream\NavInvoiceData\LineType[] $invoiceLines
     */
    private $invoiceLines = null;

    /**
     * Termékdíjjal kapcsolatos összesítő adatokSummary data of product charges
     *
     * @property \Dream\NavInvoiceData\ProductFeeSummaryType[] $productFeeSummary
     */
    private $productFeeSummary = array(
        
    );

    /**
     * Az ÁFA törvény szerinti összesítő adatokSummary data according to VAT law
     *
     * @property \Dream\NavInvoiceData\SummaryType $invoiceSummary
     */
    private $invoiceSummary = null;

    /**
     * Gets as invoiceReference
     *
     * A módosítás vagy érvénytelenítés adataiModification or cancellation data
     *
     * @return \Dream\NavInvoiceData\InvoiceReferenceType
     */
    public function getInvoiceReference()
    {
        return $this->invoiceReference;
    }

    /**
     * Sets a new invoiceReference
     *
     * A módosítás vagy érvénytelenítés adataiModification or cancellation data
     *
     * @param \Dream\NavInvoiceData\InvoiceReferenceType $invoiceReference
     * @return self
     */
    public function setInvoiceReference(\Dream\NavInvoiceData\InvoiceReferenceType $invoiceReference)
    {
        $this->invoiceReference = $invoiceReference;
        return $this;
    }

    /**
     * Gets as invoiceHead
     *
     * A számla egészét jellemző adatokData concerning the whole invoice
     *
     * @return \Dream\NavInvoiceData\InvoiceHeadType
     */
    public function getInvoiceHead()
    {
        return $this->invoiceHead;
    }

    /**
     * Sets a new invoiceHead
     *
     * A számla egészét jellemző adatokData concerning the whole invoice
     *
     * @param \Dream\NavInvoiceData\InvoiceHeadType $invoiceHead
     * @return self
     */
    public function setInvoiceHead(\Dream\NavInvoiceData\InvoiceHeadType $invoiceHead)
    {
        $this->invoiceHead = $invoiceHead;
        return $this;
    }

    /**
     * Adds as line
     *
     * A számlán szereplő tételek adataiProduct/service data appearing on the invoice
     *
     * @return self
     * @param \Dream\NavInvoiceData\LineType $line
     */
    public function addToInvoiceLines(\Dream\NavInvoiceData\LineType $line)
    {
        $this->invoiceLines[] = $line;
        return $this;
    }

    /**
     * isset invoiceLines
     *
     * A számlán szereplő tételek adataiProduct/service data appearing on the invoice
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInvoiceLines($index)
    {
        return isset($this->invoiceLines[$index]);
    }

    /**
     * unset invoiceLines
     *
     * A számlán szereplő tételek adataiProduct/service data appearing on the invoice
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInvoiceLines($index)
    {
        unset($this->invoiceLines[$index]);
    }

    /**
     * Gets as invoiceLines
     *
     * A számlán szereplő tételek adataiProduct/service data appearing on the invoice
     *
     * @return \Dream\NavInvoiceData\LineType[]
     */
    public function getInvoiceLines()
    {
        return $this->invoiceLines;
    }

    /**
     * Sets a new invoiceLines
     *
     * A számlán szereplő tételek adataiProduct/service data appearing on the invoice
     *
     * @param \Dream\NavInvoiceData\LineType[] $invoiceLines
     * @return self
     */
    public function setInvoiceLines(array $invoiceLines)
    {
        $this->invoiceLines = $invoiceLines;
        return $this;
    }

    /**
     * Adds as productFeeSummary
     *
     * Termékdíjjal kapcsolatos összesítő adatokSummary data of product charges
     *
     * @return self
     * @param \Dream\NavInvoiceData\ProductFeeSummaryType $productFeeSummary
     */
    public function addToProductFeeSummary(\Dream\NavInvoiceData\ProductFeeSummaryType $productFeeSummary)
    {
        $this->productFeeSummary[] = $productFeeSummary;
        return $this;
    }

    /**
     * isset productFeeSummary
     *
     * Termékdíjjal kapcsolatos összesítő adatokSummary data of product charges
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductFeeSummary($index)
    {
        return isset($this->productFeeSummary[$index]);
    }

    /**
     * unset productFeeSummary
     *
     * Termékdíjjal kapcsolatos összesítő adatokSummary data of product charges
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductFeeSummary($index)
    {
        unset($this->productFeeSummary[$index]);
    }

    /**
     * Gets as productFeeSummary
     *
     * Termékdíjjal kapcsolatos összesítő adatokSummary data of product charges
     *
     * @return \Dream\NavInvoiceData\ProductFeeSummaryType[]
     */
    public function getProductFeeSummary()
    {
        return $this->productFeeSummary;
    }

    /**
     * Sets a new productFeeSummary
     *
     * Termékdíjjal kapcsolatos összesítő adatokSummary data of product charges
     *
     * @param \Dream\NavInvoiceData\ProductFeeSummaryType[] $productFeeSummary
     * @return self
     */
    public function setProductFeeSummary(array $productFeeSummary)
    {
        $this->productFeeSummary = $productFeeSummary;
        return $this;
    }

    /**
     * Gets as invoiceSummary
     *
     * Az ÁFA törvény szerinti összesítő adatokSummary data according to VAT law
     *
     * @return \Dream\NavInvoiceData\SummaryType
     */
    public function getInvoiceSummary()
    {
        return $this->invoiceSummary;
    }

    /**
     * Sets a new invoiceSummary
     *
     * Az ÁFA törvény szerinti összesítő adatokSummary data according to VAT law
     *
     * @param \Dream\NavInvoiceData\SummaryType $invoiceSummary
     * @return self
     */
    public function setInvoiceSummary(\Dream\NavInvoiceData\SummaryType $invoiceSummary)
    {
        $this->invoiceSummary = $invoiceSummary;
        return $this;
    }


}

