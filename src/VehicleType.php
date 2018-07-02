<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing VehicleType
 *
 * Szárazföldi közlekedési eszköz további adataiOther data in relation to
 * motorised land vehicle
 * XSD Type: VehicleType
 */
class VehicleType
{

    /**
     * Hengerűrtartalom köbcentiméterbenEngine capacity in cubic centimetre
     *
     * @property float $engineCapacity
     */
    private $engineCapacity = null;

    /**
     * Teljesítmény kW-banEngine power in kW
     *
     * @property float $enginePower
     */
    private $enginePower = null;

    /**
     * Futott kilóméterek számaTravelled distance in km
     *
     * @property float $kms
     */
    private $kms = null;

    /**
     * Gets as engineCapacity
     *
     * Hengerűrtartalom köbcentiméterbenEngine capacity in cubic centimetre
     *
     * @return float
     */
    public function getEngineCapacity()
    {
        return $this->engineCapacity;
    }

    /**
     * Sets a new engineCapacity
     *
     * Hengerűrtartalom köbcentiméterbenEngine capacity in cubic centimetre
     *
     * @param float $engineCapacity
     * @return self
     */
    public function setEngineCapacity($engineCapacity)
    {
        $this->engineCapacity = $engineCapacity;
        return $this;
    }

    /**
     * Gets as enginePower
     *
     * Teljesítmény kW-banEngine power in kW
     *
     * @return float
     */
    public function getEnginePower()
    {
        return $this->enginePower;
    }

    /**
     * Sets a new enginePower
     *
     * Teljesítmény kW-banEngine power in kW
     *
     * @param float $enginePower
     * @return self
     */
    public function setEnginePower($enginePower)
    {
        $this->enginePower = $enginePower;
        return $this;
    }

    /**
     * Gets as kms
     *
     * Futott kilóméterek számaTravelled distance in km
     *
     * @return float
     */
    public function getKms()
    {
        return $this->kms;
    }

    /**
     * Sets a new kms
     *
     * Futott kilóméterek számaTravelled distance in km
     *
     * @param float $kms
     * @return self
     */
    public function setKms($kms)
    {
        $this->kms = $kms;
        return $this;
    }


}

