<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing AdditionalDataType
 *
 * További adat leírására szolgáló típusType for additional data description
 * XSD Type: AdditionalDataType
 */
class AdditionalDataType
{

    /**
     * Az adatmező egyedi azonosítójaUnique identification of the data field
     *
     * @property string $dataName
     */
    private $dataName = null;

    /**
     * Az adatmező tartalmának szöveges leírásaDescription of content of the data field
     *
     * @property string $dataDescription
     */
    private $dataDescription = null;

    /**
     * Az adat értékeValue of the data
     *
     * @property string $dataValue
     */
    private $dataValue = null;

    /**
     * Gets as dataName
     *
     * Az adatmező egyedi azonosítójaUnique identification of the data field
     *
     * @return string
     */
    public function getDataName()
    {
        return $this->dataName;
    }

    /**
     * Sets a new dataName
     *
     * Az adatmező egyedi azonosítójaUnique identification of the data field
     *
     * @param string $dataName
     * @return self
     */
    public function setDataName($dataName)
    {
        $this->dataName = $dataName;
        return $this;
    }

    /**
     * Gets as dataDescription
     *
     * Az adatmező tartalmának szöveges leírásaDescription of content of the data field
     *
     * @return string
     */
    public function getDataDescription()
    {
        return $this->dataDescription;
    }

    /**
     * Sets a new dataDescription
     *
     * Az adatmező tartalmának szöveges leírásaDescription of content of the data field
     *
     * @param string $dataDescription
     * @return self
     */
    public function setDataDescription($dataDescription)
    {
        $this->dataDescription = $dataDescription;
        return $this;
    }

    /**
     * Gets as dataValue
     *
     * Az adat értékeValue of the data
     *
     * @return string
     */
    public function getDataValue()
    {
        return $this->dataValue;
    }

    /**
     * Sets a new dataValue
     *
     * Az adat értékeValue of the data
     *
     * @param string $dataValue
     * @return self
     */
    public function setDataValue($dataValue)
    {
        $this->dataValue = $dataValue;
        return $this;
    }


}

