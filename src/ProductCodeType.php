<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing ProductCodeType
 *
 * Különböző termék- vagy szolgáltatáskódokat tartalmazó típusField type
 * including the different product and service codes
 * XSD Type: ProductCodeType
 */
class ProductCodeType
{

    /**
     * A termékkód fajtájának (pl. VTSZ, CsK, stb.) jelöléseThe kind of product
     * code (f. ex. VTSZ, CsK, etc.)
     *
     * @property string $productCodeCategory
     */
    private $productCodeCategory = null;

    /**
     * A termékkód értéke nem saját termékkód eseténThe value of (not own)
     * product code
     *
     * @property string $productCodeValue
     */
    private $productCodeValue = null;

    /**
     * Saját termékkód értékeOwn product code value
     *
     * @property string $productCodeOwnValue
     */
    private $productCodeOwnValue = null;

    /**
     * Gets as productCodeCategory
     *
     * A termékkód fajtájának (pl. VTSZ, CsK, stb.) jelöléseThe kind of product
     * code (f. ex. VTSZ, CsK, etc.)
     *
     * @return string
     */
    public function getProductCodeCategory()
    {
        return $this->productCodeCategory;
    }

    /**
     * Sets a new productCodeCategory
     *
     * A termékkód fajtájának (pl. VTSZ, CsK, stb.) jelöléseThe kind of product
     * code (f. ex. VTSZ, CsK, etc.)
     *
     * @param string $productCodeCategory
     * @return self
     */
    public function setProductCodeCategory($productCodeCategory)
    {
        $this->productCodeCategory = $productCodeCategory;
        return $this;
    }

    /**
     * Gets as productCodeValue
     *
     * A termékkód értéke nem saját termékkód eseténThe value of (not own)
     * product code
     *
     * @return string
     */
    public function getProductCodeValue()
    {
        return $this->productCodeValue;
    }

    /**
     * Sets a new productCodeValue
     *
     * A termékkód értéke nem saját termékkód eseténThe value of (not own)
     * product code
     *
     * @param string $productCodeValue
     * @return self
     */
    public function setProductCodeValue($productCodeValue)
    {
        $this->productCodeValue = $productCodeValue;
        return $this;
    }

    /**
     * Gets as productCodeOwnValue
     *
     * Saját termékkód értékeOwn product code value
     *
     * @return string
     */
    public function getProductCodeOwnValue()
    {
        return $this->productCodeOwnValue;
    }

    /**
     * Sets a new productCodeOwnValue
     *
     * Saját termékkód értékeOwn product code value
     *
     * @param string $productCodeOwnValue
     * @return self
     */
    public function setProductCodeOwnValue($productCodeOwnValue)
    {
        $this->productCodeOwnValue = $productCodeOwnValue;
        return $this;
    }


}

