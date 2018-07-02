<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing ProductFeeSummaryType
 *
 * Termékdíj összegzés adatokSummary of product charges
 * XSD Type: ProductFeeSummaryType
 */
class ProductFeeSummaryType
{

    /**
     * Annak jelzése, hogy a termékdíj összesítés visszaigénylésre (REFUND)
     * vagy raktárba történő beszállításra (DEPOSIT) vonatkozikIndicating
     * whether the the product fee summary concerns refund or deposit
     *
     * @property string $productFeeOperation
     */
    private $productFeeOperation = null;

    /**
     * Termékdíj adatokProduct charges data
     *
     * @property \Dream\NavInvoiceData\ProductFeeDataType[] $productFeeData
     */
    private $productFeeData = null;

    /**
     * Termékdíj összesenAggergate product charges
     *
     * @property float $productChargeSum
     */
    private $productChargeSum = null;

    /**
     * A termékdíj bevallását igazoló dokumentum adatai a 2011. évi LXXXV. tv.
     * 13. § (3) szerint és a 25. § (3) szerintData of the document verifying the
     * declaration submitted on the product fee according to the Paragraph (3), Section
     * 13 and the Paragraph (3) Section 25 of the Act LXXXV of 2011
     *
     * @property \Dream\NavInvoiceData\PaymentEvidenceDocumentDataType
     * $paymentEvidenceDocumentData
     */
    private $paymentEvidenceDocumentData = null;

    /**
     * Gets as productFeeOperation
     *
     * Annak jelzése, hogy a termékdíj összesítés visszaigénylésre (REFUND)
     * vagy raktárba történő beszállításra (DEPOSIT) vonatkozikIndicating
     * whether the the product fee summary concerns refund or deposit
     *
     * @return string
     */
    public function getProductFeeOperation()
    {
        return $this->productFeeOperation;
    }

    /**
     * Sets a new productFeeOperation
     *
     * Annak jelzése, hogy a termékdíj összesítés visszaigénylésre (REFUND)
     * vagy raktárba történő beszállításra (DEPOSIT) vonatkozikIndicating
     * whether the the product fee summary concerns refund or deposit
     *
     * @param string $productFeeOperation
     * @return self
     */
    public function setProductFeeOperation($productFeeOperation)
    {
        $this->productFeeOperation = $productFeeOperation;
        return $this;
    }

    /**
     * Adds as productFeeData
     *
     * Termékdíj adatokProduct charges data
     *
     * @return self
     * @param \Dream\NavInvoiceData\ProductFeeDataType $productFeeData
     */
    public function addToProductFeeData(\Dream\NavInvoiceData\ProductFeeDataType $productFeeData)
    {
        $this->productFeeData[] = $productFeeData;
        return $this;
    }

    /**
     * isset productFeeData
     *
     * Termékdíj adatokProduct charges data
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductFeeData($index)
    {
        return isset($this->productFeeData[$index]);
    }

    /**
     * unset productFeeData
     *
     * Termékdíj adatokProduct charges data
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductFeeData($index)
    {
        unset($this->productFeeData[$index]);
    }

    /**
     * Gets as productFeeData
     *
     * Termékdíj adatokProduct charges data
     *
     * @return \Dream\NavInvoiceData\ProductFeeDataType[]
     */
    public function getProductFeeData()
    {
        return $this->productFeeData;
    }

    /**
     * Sets a new productFeeData
     *
     * Termékdíj adatokProduct charges data
     *
     * @param \Dream\NavInvoiceData\ProductFeeDataType[] $productFeeData
     * @return self
     */
    public function setProductFeeData(array $productFeeData)
    {
        $this->productFeeData = $productFeeData;
        return $this;
    }

    /**
     * Gets as productChargeSum
     *
     * Termékdíj összesenAggergate product charges
     *
     * @return float
     */
    public function getProductChargeSum()
    {
        return $this->productChargeSum;
    }

    /**
     * Sets a new productChargeSum
     *
     * Termékdíj összesenAggergate product charges
     *
     * @param float $productChargeSum
     * @return self
     */
    public function setProductChargeSum($productChargeSum)
    {
        $this->productChargeSum = $productChargeSum;
        return $this;
    }

    /**
     * Gets as paymentEvidenceDocumentData
     *
     * A termékdíj bevallását igazoló dokumentum adatai a 2011. évi LXXXV. tv.
     * 13. § (3) szerint és a 25. § (3) szerintData of the document verifying the
     * declaration submitted on the product fee according to the Paragraph (3), Section
     * 13 and the Paragraph (3) Section 25 of the Act LXXXV of 2011
     *
     * @return \Dream\NavInvoiceData\PaymentEvidenceDocumentDataType
     */
    public function getPaymentEvidenceDocumentData()
    {
        return $this->paymentEvidenceDocumentData;
    }

    /**
     * Sets a new paymentEvidenceDocumentData
     *
     * A termékdíj bevallását igazoló dokumentum adatai a 2011. évi LXXXV. tv.
     * 13. § (3) szerint és a 25. § (3) szerintData of the document verifying the
     * declaration submitted on the product fee according to the Paragraph (3), Section
     * 13 and the Paragraph (3) Section 25 of the Act LXXXV of 2011
     *
     * @param \Dream\NavInvoiceData\PaymentEvidenceDocumentDataType
     * $paymentEvidenceDocumentData
     * @return self
     */
    public function setPaymentEvidenceDocumentData(\Dream\NavInvoiceData\PaymentEvidenceDocumentDataType $paymentEvidenceDocumentData)
    {
        $this->paymentEvidenceDocumentData = $paymentEvidenceDocumentData;
        return $this;
    }


}

