<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing ProductFeeClauseType
 *
 * A környezetvédelmi termékdíjról szóló 2011. évi LXXXV. tv. szerinti,
 * tételre vonatkozó záradékokClauses according to the Act LXXXV of 2011 on
 * Environmental Protection Product Fee (related to the item)
 * XSD Type: ProductFeeClauseType
 */
class ProductFeeClauseType
{

    /**
     * A környezetvédelmi termékdíj kötelezettség átvállalásával kapcsolatos
     * adatokData in connection with takeover of environmental protection product fee
     *
     * @property \Dream\NavInvoiceData\ProductFeeTakeoverDataType
     * $productFeeTakeoverData
     */
    private $productFeeTakeoverData = null;

    /**
     * Ha az eladó a vevő nyilatkozata alapján mentesül a termékdíj megfizetése
     * alól, akkor az érintett termékáramShould the supplier, based on statement
     * given by the purchaser, be exempted from paying product fee, then the product
     * stream affected
     *
     * @property \Dream\NavInvoiceData\CustomerDeclarationType $customerDeclaration
     */
    private $customerDeclaration = null;

    /**
     * Gets as productFeeTakeoverData
     *
     * A környezetvédelmi termékdíj kötelezettség átvállalásával kapcsolatos
     * adatokData in connection with takeover of environmental protection product fee
     *
     * @return \Dream\NavInvoiceData\ProductFeeTakeoverDataType
     */
    public function getProductFeeTakeoverData()
    {
        return $this->productFeeTakeoverData;
    }

    /**
     * Sets a new productFeeTakeoverData
     *
     * A környezetvédelmi termékdíj kötelezettség átvállalásával kapcsolatos
     * adatokData in connection with takeover of environmental protection product fee
     *
     * @param \Dream\NavInvoiceData\ProductFeeTakeoverDataType $productFeeTakeoverData
     * @return self
     */
    public function setProductFeeTakeoverData(\Dream\NavInvoiceData\ProductFeeTakeoverDataType $productFeeTakeoverData)
    {
        $this->productFeeTakeoverData = $productFeeTakeoverData;
        return $this;
    }

    /**
     * Gets as customerDeclaration
     *
     * Ha az eladó a vevő nyilatkozata alapján mentesül a termékdíj megfizetése
     * alól, akkor az érintett termékáramShould the supplier, based on statement
     * given by the purchaser, be exempted from paying product fee, then the product
     * stream affected
     *
     * @return \Dream\NavInvoiceData\CustomerDeclarationType
     */
    public function getCustomerDeclaration()
    {
        return $this->customerDeclaration;
    }

    /**
     * Sets a new customerDeclaration
     *
     * Ha az eladó a vevő nyilatkozata alapján mentesül a termékdíj megfizetése
     * alól, akkor az érintett termékáramShould the supplier, based on statement
     * given by the purchaser, be exempted from paying product fee, then the product
     * stream affected
     *
     * @param \Dream\NavInvoiceData\CustomerDeclarationType $customerDeclaration
     * @return self
     */
    public function setCustomerDeclaration(\Dream\NavInvoiceData\CustomerDeclarationType $customerDeclaration)
    {
        $this->customerDeclaration = $customerDeclaration;
        return $this;
    }


}

