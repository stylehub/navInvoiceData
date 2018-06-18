<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing DiscountDataType
 *
 * Árengedmény adatokDiscount data
 * XSD Type: DiscountDataType
 */
class DiscountDataType
{

    /**
     * Az árengedmény leírásaDescription of the discount
     *
     * @property string $discountDescription
     */
    private $discountDescription = null;

    /**
     * Tételhez tartozó árengedmény összege a számla pénznemében, ha az egységár nem tartalmazzaTotal amount of discount per item expressed in the currency of the invoice if not included in the unit price
     *
     * @property float $discountValue
     */
    private $discountValue = null;

    /**
     * Tételhez tartozó árengedmény aránya, ha az egységár nem tartalmazzaRate of discount per item expressed in the currency of the invoice if not included in the unit price
     *
     * @property float $discountRate
     */
    private $discountRate = null;

    /**
     * Gets as discountDescription
     *
     * Az árengedmény leírásaDescription of the discount
     *
     * @return string
     */
    public function getDiscountDescription()
    {
        return $this->discountDescription;
    }

    /**
     * Sets a new discountDescription
     *
     * Az árengedmény leírásaDescription of the discount
     *
     * @param string $discountDescription
     * @return self
     */
    public function setDiscountDescription($discountDescription)
    {
        $this->discountDescription = $discountDescription;
        return $this;
    }

    /**
     * Gets as discountValue
     *
     * Tételhez tartozó árengedmény összege a számla pénznemében, ha az egységár nem tartalmazzaTotal amount of discount per item expressed in the currency of the invoice if not included in the unit price
     *
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Sets a new discountValue
     *
     * Tételhez tartozó árengedmény összege a számla pénznemében, ha az egységár nem tartalmazzaTotal amount of discount per item expressed in the currency of the invoice if not included in the unit price
     *
     * @param float $discountValue
     * @return self
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * Gets as discountRate
     *
     * Tételhez tartozó árengedmény aránya, ha az egységár nem tartalmazzaRate of discount per item expressed in the currency of the invoice if not included in the unit price
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Sets a new discountRate
     *
     * Tételhez tartozó árengedmény aránya, ha az egységár nem tartalmazzaRate of discount per item expressed in the currency of the invoice if not included in the unit price
     *
     * @param float $discountRate
     * @return self
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;
        return $this;
    }


}

