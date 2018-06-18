<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing AircraftType
 *
 * Légi közlekedési eszközAircraft
 * XSD Type: AircraftType
 */
class AircraftType
{

    /**
     * Felszállási tömeg kilogrammbanTake-off weight in kilogram
     *
     * @property float $takeOffWeight
     */
    private $takeOffWeight = null;

    /**
     * Értéke true ha a jármű az ÁFA tv. 259.§ 25. c) szerinti kivétel alá tartozikThe value is true if the means of transport is exempt from VAT as per section 259 [25] (c)
     *
     * @property boolean $airCargo
     */
    private $airCargo = null;

    /**
     * Repült órák számaNumber of aviated hours
     *
     * @property float $operationHours
     */
    private $operationHours = null;

    /**
     * Gets as takeOffWeight
     *
     * Felszállási tömeg kilogrammbanTake-off weight in kilogram
     *
     * @return float
     */
    public function getTakeOffWeight()
    {
        return $this->takeOffWeight;
    }

    /**
     * Sets a new takeOffWeight
     *
     * Felszállási tömeg kilogrammbanTake-off weight in kilogram
     *
     * @param float $takeOffWeight
     * @return self
     */
    public function setTakeOffWeight($takeOffWeight)
    {
        $this->takeOffWeight = $takeOffWeight;
        return $this;
    }

    /**
     * Gets as airCargo
     *
     * Értéke true ha a jármű az ÁFA tv. 259.§ 25. c) szerinti kivétel alá tartozikThe value is true if the means of transport is exempt from VAT as per section 259 [25] (c)
     *
     * @return boolean
     */
    public function getAirCargo()
    {
        return $this->airCargo;
    }

    /**
     * Sets a new airCargo
     *
     * Értéke true ha a jármű az ÁFA tv. 259.§ 25. c) szerinti kivétel alá tartozikThe value is true if the means of transport is exempt from VAT as per section 259 [25] (c)
     *
     * @param boolean $airCargo
     * @return self
     */
    public function setAirCargo($airCargo)
    {
        $this->airCargo = $airCargo;
        return $this;
    }

    /**
     * Gets as operationHours
     *
     * Repült órák számaNumber of aviated hours
     *
     * @return float
     */
    public function getOperationHours()
    {
        return $this->operationHours;
    }

    /**
     * Sets a new operationHours
     *
     * Repült órák számaNumber of aviated hours
     *
     * @param float $operationHours
     * @return self
     */
    public function setOperationHours($operationHours)
    {
        $this->operationHours = $operationHours;
        return $this;
    }


}

