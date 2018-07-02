<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing AddressType
 *
 * Cím típus, amely vagy egyszerű, vagy részletes címet tartalmazFormat of
 * address that includes either a simple or a detailed address
 * XSD Type: AddressType
 */
class AddressType
{

    /**
     * Egyszerű címSimple address
     *
     * @property \Dream\NavInvoiceData\SimpleAddressType $simpleAddress
     */
    private $simpleAddress = null;

    /**
     * Részletes címDetailed address
     *
     * @property \Dream\NavInvoiceData\DetailedAddressType $detailedAddress
     */
    private $detailedAddress = null;

    /**
     * Gets as simpleAddress
     *
     * Egyszerű címSimple address
     *
     * @return \Dream\NavInvoiceData\SimpleAddressType
     */
    public function getSimpleAddress()
    {
        return $this->simpleAddress;
    }

    /**
     * Sets a new simpleAddress
     *
     * Egyszerű címSimple address
     *
     * @param \Dream\NavInvoiceData\SimpleAddressType $simpleAddress
     * @return self
     */
    public function setSimpleAddress(\Dream\NavInvoiceData\SimpleAddressType $simpleAddress)
    {
        $this->simpleAddress = $simpleAddress;
        return $this;
    }

    /**
     * Gets as detailedAddress
     *
     * Részletes címDetailed address
     *
     * @return \Dream\NavInvoiceData\DetailedAddressType
     */
    public function getDetailedAddress()
    {
        return $this->detailedAddress;
    }

    /**
     * Sets a new detailedAddress
     *
     * Részletes címDetailed address
     *
     * @param \Dream\NavInvoiceData\DetailedAddressType $detailedAddress
     * @return self
     */
    public function setDetailedAddress(\Dream\NavInvoiceData\DetailedAddressType $detailedAddress)
    {
        $this->detailedAddress = $detailedAddress;
        return $this;
    }


}

