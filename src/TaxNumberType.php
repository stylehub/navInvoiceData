<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing TaxNumberType
 *
 * Adószám típusTax number type
 * XSD Type: TaxNumberType
 */
class TaxNumberType
{

    /**
     * Az adóalany adó törzsszáma. Csoportos adóalany esetén csoportazonosító számCore tax number of the taxable person. In case of group taxation arrangement the group identification number
     *
     * @property string $taxpayerId
     */
    private $taxpayerId = null;

    /**
     * ÁFA kód az adóalanyiság típusanak jelzésére. Egy számjegyVAT code to indicate taxation type of the taxpayer. One digit
     *
     * @property string $vatCode
     */
    private $vatCode = null;

    /**
     * Megyekód, két számjegyCounty code, two digits
     *
     * @property string $countyCode
     */
    private $countyCode = null;

    /**
     * Gets as taxpayerId
     *
     * Az adóalany adó törzsszáma. Csoportos adóalany esetén csoportazonosító számCore tax number of the taxable person. In case of group taxation arrangement the group identification number
     *
     * @return string
     */
    public function getTaxpayerId()
    {
        return $this->taxpayerId;
    }

    /**
     * Sets a new taxpayerId
     *
     * Az adóalany adó törzsszáma. Csoportos adóalany esetén csoportazonosító számCore tax number of the taxable person. In case of group taxation arrangement the group identification number
     *
     * @param string $taxpayerId
     * @return self
     */
    public function setTaxpayerId($taxpayerId)
    {
        $this->taxpayerId = $taxpayerId;
        return $this;
    }

    /**
     * Gets as vatCode
     *
     * ÁFA kód az adóalanyiság típusanak jelzésére. Egy számjegyVAT code to indicate taxation type of the taxpayer. One digit
     *
     * @return string
     */
    public function getVatCode()
    {
        return $this->vatCode;
    }

    /**
     * Sets a new vatCode
     *
     * ÁFA kód az adóalanyiság típusanak jelzésére. Egy számjegyVAT code to indicate taxation type of the taxpayer. One digit
     *
     * @param string $vatCode
     * @return self
     */
    public function setVatCode($vatCode)
    {
        $this->vatCode = $vatCode;
        return $this;
    }

    /**
     * Gets as countyCode
     *
     * Megyekód, két számjegyCounty code, two digits
     *
     * @return string
     */
    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * Sets a new countyCode
     *
     * Megyekód, két számjegyCounty code, two digits
     *
     * @param string $countyCode
     * @return self
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode = $countyCode;
        return $this;
    }


}

