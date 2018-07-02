<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing NewTransportMeanType
 *
 * Új közlekedési eszköz értékesítés ÁFA tv. 89 § ill. 169 § o)Supply of
 * new means of transport - section 89 § and 169 (o) of the VAT law
 * XSD Type: NewTransportMeanType
 */
class NewTransportMeanType
{

    /**
     * Gyártmány/típusProduct / type
     *
     * @property string $brand
     */
    private $brand = null;

    /**
     * Alvázszám/gyári szám/Gyártási számChassis number / serial number /
     * product number
     *
     * @property string $serialNum
     */
    private $serialNum = null;

    /**
     * MotorszámEngine number
     *
     * @property string $engineNum
     */
    private $engineNum = null;

    /**
     * Első forgalomba helyezés időpontjaFirst entry into service
     *
     * @property \DateTime $firstEntryIntoService
     */
    private $firstEntryIntoService = null;

    /**
     * Szárazföldi közlekedési eszköz további adataiOther data in relation to
     * motorised land vehicle
     *
     * @property \Dream\NavInvoiceData\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * Vízi jármű adataiData of vessel
     *
     * @property \Dream\NavInvoiceData\VesselType $vessel
     */
    private $vessel = null;

    /**
     * Légi közlekedési eszközAircraft
     *
     * @property \Dream\NavInvoiceData\AircraftType $aircraft
     */
    private $aircraft = null;

    /**
     * Gets as brand
     *
     * Gyártmány/típusProduct / type
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * Gyártmány/típusProduct / type
     *
     * @param string $brand
     * @return self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Gets as serialNum
     *
     * Alvázszám/gyári szám/Gyártási számChassis number / serial number /
     * product number
     *
     * @return string
     */
    public function getSerialNum()
    {
        return $this->serialNum;
    }

    /**
     * Sets a new serialNum
     *
     * Alvázszám/gyári szám/Gyártási számChassis number / serial number /
     * product number
     *
     * @param string $serialNum
     * @return self
     */
    public function setSerialNum($serialNum)
    {
        $this->serialNum = $serialNum;
        return $this;
    }

    /**
     * Gets as engineNum
     *
     * MotorszámEngine number
     *
     * @return string
     */
    public function getEngineNum()
    {
        return $this->engineNum;
    }

    /**
     * Sets a new engineNum
     *
     * MotorszámEngine number
     *
     * @param string $engineNum
     * @return self
     */
    public function setEngineNum($engineNum)
    {
        $this->engineNum = $engineNum;
        return $this;
    }

    /**
     * Gets as firstEntryIntoService
     *
     * Első forgalomba helyezés időpontjaFirst entry into service
     *
     * @return \DateTime
     */
    public function getFirstEntryIntoService()
    {
        return $this->firstEntryIntoService;
    }

    /**
     * Sets a new firstEntryIntoService
     *
     * Első forgalomba helyezés időpontjaFirst entry into service
     *
     * @param \DateTime $firstEntryIntoService
     * @return self
     */
    public function setFirstEntryIntoService(\DateTime $firstEntryIntoService)
    {
        $this->firstEntryIntoService = $firstEntryIntoService;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Szárazföldi közlekedési eszköz további adataiOther data in relation to
     * motorised land vehicle
     *
     * @return \Dream\NavInvoiceData\VehicleType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Szárazföldi közlekedési eszköz további adataiOther data in relation to
     * motorised land vehicle
     *
     * @param \Dream\NavInvoiceData\VehicleType $vehicle
     * @return self
     */
    public function setVehicle(\Dream\NavInvoiceData\VehicleType $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as vessel
     *
     * Vízi jármű adataiData of vessel
     *
     * @return \Dream\NavInvoiceData\VesselType
     */
    public function getVessel()
    {
        return $this->vessel;
    }

    /**
     * Sets a new vessel
     *
     * Vízi jármű adataiData of vessel
     *
     * @param \Dream\NavInvoiceData\VesselType $vessel
     * @return self
     */
    public function setVessel(\Dream\NavInvoiceData\VesselType $vessel)
    {
        $this->vessel = $vessel;
        return $this;
    }

    /**
     * Gets as aircraft
     *
     * Légi közlekedési eszközAircraft
     *
     * @return \Dream\NavInvoiceData\AircraftType
     */
    public function getAircraft()
    {
        return $this->aircraft;
    }

    /**
     * Sets a new aircraft
     *
     * Légi közlekedési eszközAircraft
     *
     * @param \Dream\NavInvoiceData\AircraftType $aircraft
     * @return self
     */
    public function setAircraft(\Dream\NavInvoiceData\AircraftType $aircraft)
    {
        $this->aircraft = $aircraft;
        return $this;
    }


}

