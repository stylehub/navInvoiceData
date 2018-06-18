<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing CustomerDeclarationType
 *
 * Ha az eladó a vevő nyilatkozata alapján mentesül a termékdíj megfizetése alól, akkor az érintett termékáramShould the supplier, based on statement given by the purchaser, be exempted from paying product fee, then the product stream affected
 * XSD Type: CustomerDeclarationType
 */
class CustomerDeclarationType
{

    /**
     * TermékáramProduct stream
     *
     * @property string $productStream
     */
    private $productStream = null;

    /**
     * Termékdíj köteles termék tömege kilogrammbanWeight of product fee obliged product in kilogram
     *
     * @property float $productFeeWeight
     */
    private $productFeeWeight = null;

    /**
     * Gets as productStream
     *
     * TermékáramProduct stream
     *
     * @return string
     */
    public function getProductStream()
    {
        return $this->productStream;
    }

    /**
     * Sets a new productStream
     *
     * TermékáramProduct stream
     *
     * @param string $productStream
     * @return self
     */
    public function setProductStream($productStream)
    {
        $this->productStream = $productStream;
        return $this;
    }

    /**
     * Gets as productFeeWeight
     *
     * Termékdíj köteles termék tömege kilogrammbanWeight of product fee obliged product in kilogram
     *
     * @return float
     */
    public function getProductFeeWeight()
    {
        return $this->productFeeWeight;
    }

    /**
     * Sets a new productFeeWeight
     *
     * Termékdíj köteles termék tömege kilogrammbanWeight of product fee obliged product in kilogram
     *
     * @param float $productFeeWeight
     * @return self
     */
    public function setProductFeeWeight($productFeeWeight)
    {
        $this->productFeeWeight = $productFeeWeight;
        return $this;
    }


}

