<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing SimpleAddressType
 *
 * Egyszerű címtípusSimple address type
 * XSD Type: SimpleAddressType
 */
class SimpleAddressType
{

    /**
     * Az országkód az ISO 3166 alpha-2 szabvány szerintISO 3166 alpha-2 country code
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
     * További címadatok (pl. közterület neve és jellege, házszám, emelet, ajtó, helyrajzi szám, stb.)Further address data (name and type of public place, house number, floor, door, lot number, etc.)
     *
     * @property string $additionalAddressDetail
     */
    private $additionalAddressDetail = null;

    /**
     * Gets as countryCode
     *
     * Az országkód az ISO 3166 alpha-2 szabvány szerintISO 3166 alpha-2 country code
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
     * Az országkód az ISO 3166 alpha-2 szabvány szerintISO 3166 alpha-2 country code
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
     * Gets as additionalAddressDetail
     *
     * További címadatok (pl. közterület neve és jellege, házszám, emelet, ajtó, helyrajzi szám, stb.)Further address data (name and type of public place, house number, floor, door, lot number, etc.)
     *
     * @return string
     */
    public function getAdditionalAddressDetail()
    {
        return $this->additionalAddressDetail;
    }

    /**
     * Sets a new additionalAddressDetail
     *
     * További címadatok (pl. közterület neve és jellege, házszám, emelet, ajtó, helyrajzi szám, stb.)Further address data (name and type of public place, house number, floor, door, lot number, etc.)
     *
     * @param string $additionalAddressDetail
     * @return self
     */
    public function setAdditionalAddressDetail($additionalAddressDetail)
    {
        $this->additionalAddressDetail = $additionalAddressDetail;
        return $this;
    }


}

