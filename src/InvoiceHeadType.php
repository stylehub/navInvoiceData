<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing InvoiceHeadType
 *
 * Számla fejléc adataiData in header of invoice
 * XSD Type: InvoiceHeadType
 */
class InvoiceHeadType
{

    /**
     * Számla kibocsátó (eladó) adataiData related to the issuer of the invoice
     * (supplier)
     *
     * @property \Dream\NavInvoiceData\SupplierInfoType $supplierInfo
     */
    private $supplierInfo = null;

    /**
     * Vevő adataiData related to the customer
     *
     * @property \Dream\NavInvoiceData\CustomerInfoType $customerInfo
     */
    private $customerInfo = null;

    /**
     * Pénzügyi képviselő adataiData related to the fiscal representative
     *
     * @property \Dream\NavInvoiceData\FiscalRepresentativeType
     * $fiscalRepresentativeInfo
     */
    private $fiscalRepresentativeInfo = null;

    /**
     * Számla adatokInvoice adata
     *
     * @property \Dream\NavInvoiceData\InvoiceDataType $invoiceData
     */
    private $invoiceData = null;

    /**
     * Gets as supplierInfo
     *
     * Számla kibocsátó (eladó) adataiData related to the issuer of the invoice
     * (supplier)
     *
     * @return \Dream\NavInvoiceData\SupplierInfoType
     */
    public function getSupplierInfo()
    {
        return $this->supplierInfo;
    }

    /**
     * Sets a new supplierInfo
     *
     * Számla kibocsátó (eladó) adataiData related to the issuer of the invoice
     * (supplier)
     *
     * @param \Dream\NavInvoiceData\SupplierInfoType $supplierInfo
     * @return self
     */
    public function setSupplierInfo(\Dream\NavInvoiceData\SupplierInfoType $supplierInfo)
    {
        $this->supplierInfo = $supplierInfo;
        return $this;
    }

    /**
     * Gets as customerInfo
     *
     * Vevő adataiData related to the customer
     *
     * @return \Dream\NavInvoiceData\CustomerInfoType
     */
    public function getCustomerInfo()
    {
        return $this->customerInfo;
    }

    /**
     * Sets a new customerInfo
     *
     * Vevő adataiData related to the customer
     *
     * @param \Dream\NavInvoiceData\CustomerInfoType $customerInfo
     * @return self
     */
    public function setCustomerInfo(\Dream\NavInvoiceData\CustomerInfoType $customerInfo)
    {
        $this->customerInfo = $customerInfo;
        return $this;
    }

    /**
     * Gets as fiscalRepresentativeInfo
     *
     * Pénzügyi képviselő adataiData related to the fiscal representative
     *
     * @return \Dream\NavInvoiceData\FiscalRepresentativeType
     */
    public function getFiscalRepresentativeInfo()
    {
        return $this->fiscalRepresentativeInfo;
    }

    /**
     * Sets a new fiscalRepresentativeInfo
     *
     * Pénzügyi képviselő adataiData related to the fiscal representative
     *
     * @param \Dream\NavInvoiceData\FiscalRepresentativeType $fiscalRepresentativeInfo
     * @return self
     */
    public function setFiscalRepresentativeInfo(\Dream\NavInvoiceData\FiscalRepresentativeType $fiscalRepresentativeInfo)
    {
        $this->fiscalRepresentativeInfo = $fiscalRepresentativeInfo;
        return $this;
    }

    /**
     * Gets as invoiceData
     *
     * Számla adatokInvoice adata
     *
     * @return \Dream\NavInvoiceData\InvoiceDataType
     */
    public function getInvoiceData()
    {
        return $this->invoiceData;
    }

    /**
     * Sets a new invoiceData
     *
     * Számla adatokInvoice adata
     *
     * @param \Dream\NavInvoiceData\InvoiceDataType $invoiceData
     * @return self
     */
    public function setInvoiceData(\Dream\NavInvoiceData\InvoiceDataType $invoiceData)
    {
        $this->invoiceData = $invoiceData;
        return $this;
    }


}

