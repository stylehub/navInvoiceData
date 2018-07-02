<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing InvoiceAnnulmentType
 *
 * Korábbi adatszolgáltatás technikai érvénytelenítésének adataiData of
 * technical annulment concerning previous data exchange
 * XSD Type: InvoiceAnnulmentType
 */
class InvoiceAnnulmentType
{

    /**
     * A technikai érvénytelenítéssel érintett számla vagy módosító okirat
     * sorszámaSequential number of the invoice or modification document to be annuled
     *
     * @property string $annulmentReference
     */
    private $annulmentReference = null;

    /**
     * A technikai érvénytelenítés időbélyege a forrásrendszerben UTC idő
     * szerintTimestamp of the technical annulment in UTC time
     *
     * @property \DateTime $annulmentTimestamp
     */
    private $annulmentTimestamp = null;

    /**
     * A technikai érvénytelenítés kódjaTechnical annulment code
     *
     * @property string $annulmentCode
     */
    private $annulmentCode = null;

    /**
     * A technikai érvénytelenítés okaTechnical annulment reason
     *
     * @property string $annulmentReason
     */
    private $annulmentReason = null;

    /**
     * Gets as annulmentReference
     *
     * A technikai érvénytelenítéssel érintett számla vagy módosító okirat
     * sorszámaSequential number of the invoice or modification document to be annuled
     *
     * @return string
     */
    public function getAnnulmentReference()
    {
        return $this->annulmentReference;
    }

    /**
     * Sets a new annulmentReference
     *
     * A technikai érvénytelenítéssel érintett számla vagy módosító okirat
     * sorszámaSequential number of the invoice or modification document to be annuled
     *
     * @param string $annulmentReference
     * @return self
     */
    public function setAnnulmentReference($annulmentReference)
    {
        $this->annulmentReference = $annulmentReference;
        return $this;
    }

    /**
     * Gets as annulmentTimestamp
     *
     * A technikai érvénytelenítés időbélyege a forrásrendszerben UTC idő
     * szerintTimestamp of the technical annulment in UTC time
     *
     * @return \DateTime
     */
    public function getAnnulmentTimestamp()
    {
        return $this->annulmentTimestamp;
    }

    /**
     * Sets a new annulmentTimestamp
     *
     * A technikai érvénytelenítés időbélyege a forrásrendszerben UTC idő
     * szerintTimestamp of the technical annulment in UTC time
     *
     * @param \DateTime $annulmentTimestamp
     * @return self
     */
    public function setAnnulmentTimestamp(\DateTime $annulmentTimestamp)
    {
        $this->annulmentTimestamp = $annulmentTimestamp;
        return $this;
    }

    /**
     * Gets as annulmentCode
     *
     * A technikai érvénytelenítés kódjaTechnical annulment code
     *
     * @return string
     */
    public function getAnnulmentCode()
    {
        return $this->annulmentCode;
    }

    /**
     * Sets a new annulmentCode
     *
     * A technikai érvénytelenítés kódjaTechnical annulment code
     *
     * @param string $annulmentCode
     * @return self
     */
    public function setAnnulmentCode($annulmentCode)
    {
        $this->annulmentCode = $annulmentCode;
        return $this;
    }

    /**
     * Gets as annulmentReason
     *
     * A technikai érvénytelenítés okaTechnical annulment reason
     *
     * @return string
     */
    public function getAnnulmentReason()
    {
        return $this->annulmentReason;
    }

    /**
     * Sets a new annulmentReason
     *
     * A technikai érvénytelenítés okaTechnical annulment reason
     *
     * @param string $annulmentReason
     * @return self
     */
    public function setAnnulmentReason($annulmentReason)
    {
        $this->annulmentReason = $annulmentReason;
        return $this;
    }


}

