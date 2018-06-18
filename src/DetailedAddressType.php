<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing DetailedAddressType
 *
 * Részletes címadatokDetailed address data
 * XSD Type: DetailedAddressType
 */
class DetailedAddressType
{

    /**
     * Az országkód ISO 3166 alpha-2 szabvány szerintISO 3166 alpha-2 country code
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Tartomány kódja (amennyiben értelmezhető az adott országban) az ISO 3166-2 alpha 2 szabvány szerintISO 3166 alpha-2 province code (if appropriate in a given country)
     *
     * @property string $region
     */
    private $region = null;

    /**
     * Irányítószám (amennyiben nem értelmezhető, 0000 értékkel kell kitölteni)ZIP code (If can not be interpreted, need to be filled "0000")
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * TelepülésSettlement
     *
     * @property string $city
     */
    private $city = null;

    /**
     * Közterület neveName of public place
     *
     * @property string $streetName
     */
    private $streetName = null;

    /**
     * Közterület jellegeCategory of public place
     *
     * @property string $publicPlaceCategory
     */
    private $publicPlaceCategory = null;

    /**
     * HázszámHouse number
     *
     * @property string $number
     */
    private $number = null;

    /**
     * ÉpületBuilding
     *
     * @property string $building
     */
    private $building = null;

    /**
     * LépcsőházStaircase
     *
     * @property string $staircase
     */
    private $staircase = null;

    /**
     * EmeletFloor
     *
     * @property string $floor
     */
    private $floor = null;

    /**
     * AjtóDoor number
     *
     * @property string $door
     */
    private $door = null;

    /**
     * Helyrajzi számLot number
     *
     * @property string $lotNumber
     */
    private $lotNumber = null;

    /**
     * Gets as countryCode
     *
     * Az országkód ISO 3166 alpha-2 szabvány szerintISO 3166 alpha-2 country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * Az országkód ISO 3166 alpha-2 szabvány szerintISO 3166 alpha-2 country code
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as region
     *
     * Tartomány kódja (amennyiben értelmezhető az adott országban) az ISO 3166-2 alpha 2 szabvány szerintISO 3166 alpha-2 province code (if appropriate in a given country)
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * Tartomány kódja (amennyiben értelmezhető az adott országban) az ISO 3166-2 alpha 2 szabvány szerintISO 3166 alpha-2 province code (if appropriate in a given country)
     *
     * @param string $region
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * Irányítószám (amennyiben nem értelmezhető, 0000 értékkel kell kitölteni)ZIP code (If can not be interpreted, need to be filled "0000")
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * Irányítószám (amennyiben nem értelmezhető, 0000 értékkel kell kitölteni)ZIP code (If can not be interpreted, need to be filled "0000")
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * TelepülésSettlement
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * TelepülésSettlement
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as streetName
     *
     * Közterület neveName of public place
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * Közterület neveName of public place
     *
     * @param string $streetName
     * @return self
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as publicPlaceCategory
     *
     * Közterület jellegeCategory of public place
     *
     * @return string
     */
    public function getPublicPlaceCategory()
    {
        return $this->publicPlaceCategory;
    }

    /**
     * Sets a new publicPlaceCategory
     *
     * Közterület jellegeCategory of public place
     *
     * @param string $publicPlaceCategory
     * @return self
     */
    public function setPublicPlaceCategory($publicPlaceCategory)
    {
        $this->publicPlaceCategory = $publicPlaceCategory;
        return $this;
    }

    /**
     * Gets as number
     *
     * HázszámHouse number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * HázszámHouse number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as building
     *
     * ÉpületBuilding
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets a new building
     *
     * ÉpületBuilding
     *
     * @param string $building
     * @return self
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * Gets as staircase
     *
     * LépcsőházStaircase
     *
     * @return string
     */
    public function getStaircase()
    {
        return $this->staircase;
    }

    /**
     * Sets a new staircase
     *
     * LépcsőházStaircase
     *
     * @param string $staircase
     * @return self
     */
    public function setStaircase($staircase)
    {
        $this->staircase = $staircase;
        return $this;
    }

    /**
     * Gets as floor
     *
     * EmeletFloor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * EmeletFloor
     *
     * @param string $floor
     * @return self
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as door
     *
     * AjtóDoor number
     *
     * @return string
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Sets a new door
     *
     * AjtóDoor number
     *
     * @param string $door
     * @return self
     */
    public function setDoor($door)
    {
        $this->door = $door;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * Helyrajzi számLot number
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * Helyrajzi számLot number
     *
     * @param string $lotNumber
     * @return self
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }


}

