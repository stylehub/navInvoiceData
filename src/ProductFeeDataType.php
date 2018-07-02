<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing ProductFeeDataType
 *
 * Termékdíj adatokProduct charges data
 * XSD Type: ProductFeeDataType
 */
class ProductFeeDataType
{

    /**
     * Termékdíj kód (Kt vagy Csk)Product charges code (Kt or Csk code)
     *
     * @property \Dream\NavInvoiceData\ProductCodeType $productFeeCode
     */
    private $productFeeCode = null;

    /**
     * A termékdíjjal érintett termék mennyiségeQuantity of product, according to
     * product charge
     *
     * @property float $productFeeQuantity
     */
    private $productFeeQuantity = null;

    /**
     * A díjtétel egysége (kg vagy darab)Unit of the rate (kg or piece)
     *
     * @property string $productFeeMeasuringUnit
     */
    private $productFeeMeasuringUnit = null;

    /**
     * A termékdíj díjtétele (HUF/egység)Product fee rate (HUF/unit)
     *
     * @property float $productFeeRate
     */
    private $productFeeRate = null;

    /**
     * Termékdíj összege forintbanAmount in Hungarian forints of the product fee
     *
     * @property float $productFeeAmount
     */
    private $productFeeAmount = null;

    /**
     * Gets as productFeeCode
     *
     * Termékdíj kód (Kt vagy Csk)Product charges code (Kt or Csk code)
     *
     * @return \Dream\NavInvoiceData\ProductCodeType
     */
    public function getProductFeeCode()
    {
        return $this->productFeeCode;
    }

    /**
     * Sets a new productFeeCode
     *
     * Termékdíj kód (Kt vagy Csk)Product charges code (Kt or Csk code)
     *
     * @param \Dream\NavInvoiceData\ProductCodeType $productFeeCode
     * @return self
     */
    public function setProductFeeCode(\Dream\NavInvoiceData\ProductCodeType $productFeeCode)
    {
        $this->productFeeCode = $productFeeCode;
        return $this;
    }

    /**
     * Gets as productFeeQuantity
     *
     * A termékdíjjal érintett termék mennyiségeQuantity of product, according to
     * product charge
     *
     * @return float
     */
    public function getProductFeeQuantity()
    {
        return $this->productFeeQuantity;
    }

    /**
     * Sets a new productFeeQuantity
     *
     * A termékdíjjal érintett termék mennyiségeQuantity of product, according to
     * product charge
     *
     * @param float $productFeeQuantity
     * @return self
     */
    public function setProductFeeQuantity($productFeeQuantity)
    {
        $this->productFeeQuantity = $productFeeQuantity;
        return $this;
    }

    /**
     * Gets as productFeeMeasuringUnit
     *
     * A díjtétel egysége (kg vagy darab)Unit of the rate (kg or piece)
     *
     * @return string
     */
    public function getProductFeeMeasuringUnit()
    {
        return $this->productFeeMeasuringUnit;
    }

    /**
     * Sets a new productFeeMeasuringUnit
     *
     * A díjtétel egysége (kg vagy darab)Unit of the rate (kg or piece)
     *
     * @param string $productFeeMeasuringUnit
     * @return self
     */
    public function setProductFeeMeasuringUnit($productFeeMeasuringUnit)
    {
        $this->productFeeMeasuringUnit = $productFeeMeasuringUnit;
        return $this;
    }

    /**
     * Gets as productFeeRate
     *
     * A termékdíj díjtétele (HUF/egység)Product fee rate (HUF/unit)
     *
     * @return float
     */
    public function getProductFeeRate()
    {
        return $this->productFeeRate;
    }

    /**
     * Sets a new productFeeRate
     *
     * A termékdíj díjtétele (HUF/egység)Product fee rate (HUF/unit)
     *
     * @param float $productFeeRate
     * @return self
     */
    public function setProductFeeRate($productFeeRate)
    {
        $this->productFeeRate = $productFeeRate;
        return $this;
    }

    /**
     * Gets as productFeeAmount
     *
     * Termékdíj összege forintbanAmount in Hungarian forints of the product fee
     *
     * @return float
     */
    public function getProductFeeAmount()
    {
        return $this->productFeeAmount;
    }

    /**
     * Sets a new productFeeAmount
     *
     * Termékdíj összege forintbanAmount in Hungarian forints of the product fee
     *
     * @param float $productFeeAmount
     * @return self
     */
    public function setProductFeeAmount($productFeeAmount)
    {
        $this->productFeeAmount = $productFeeAmount;
        return $this;
    }


}

