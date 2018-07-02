<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing VesselType
 *
 * Vízi jármű adataiData of vessel
 * XSD Type: VesselType
 */
class VesselType
{

    /**
     * Hajó hossza méterbenLength of hull in metre
     *
     * @property float $length
     */
    private $length = null;

    /**
     * Értéke true, ha a jármű az ÁFA tv. 259.§ 25. b) szerinti kivétel alá
     * tartozikThe value is true if the means of transport is exempt from VAT as per
     * section 259 [25] (b)
     *
     * @property boolean $activityReferred
     */
    private $activityReferred = null;

    /**
     * Hajózott órák számaNumber of sailed hours
     *
     * @property float $sailedHours
     */
    private $sailedHours = null;

    /**
     * Gets as length
     *
     * Hajó hossza méterbenLength of hull in metre
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Hajó hossza méterbenLength of hull in metre
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as activityReferred
     *
     * Értéke true, ha a jármű az ÁFA tv. 259.§ 25. b) szerinti kivétel alá
     * tartozikThe value is true if the means of transport is exempt from VAT as per
     * section 259 [25] (b)
     *
     * @return boolean
     */
    public function getActivityReferred()
    {
        return $this->activityReferred;
    }

    /**
     * Sets a new activityReferred
     *
     * Értéke true, ha a jármű az ÁFA tv. 259.§ 25. b) szerinti kivétel alá
     * tartozikThe value is true if the means of transport is exempt from VAT as per
     * section 259 [25] (b)
     *
     * @param boolean $activityReferred
     * @return self
     */
    public function setActivityReferred($activityReferred)
    {
        $this->activityReferred = $activityReferred;
        return $this;
    }

    /**
     * Gets as sailedHours
     *
     * Hajózott órák számaNumber of sailed hours
     *
     * @return float
     */
    public function getSailedHours()
    {
        return $this->sailedHours;
    }

    /**
     * Sets a new sailedHours
     *
     * Hajózott órák számaNumber of sailed hours
     *
     * @param float $sailedHours
     * @return self
     */
    public function setSailedHours($sailedHours)
    {
        $this->sailedHours = $sailedHours;
        return $this;
    }


}

