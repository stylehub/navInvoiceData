<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing InvoiceReferenceType
 *
 * A módosítás vagy érvénytelenítés hivatkozási adataiModification or
 * cancellation reference data
 * XSD Type: InvoiceReferenceType
 */
class InvoiceReferenceType
{

    /**
     * Az eredeti számla sorszáma, melyre a módosítás vonatkozik - ÁFA tv. 170.
     * § (1) c)Sequence number of the original invoice, on which the modification
     * occurs - section 170 (1) c) of the VAT law
     *
     * @property string $originalInvoiceNumber
     */
    private $originalInvoiceNumber = null;

    /**
     * Módosító okirat kelte - ÁFA tv. 170. § (1) bek. a)Date of issue of the
     * modification document - section 170 (1) a) of the VAT law
     *
     * @property \DateTime $modificationIssueDate
     */
    private $modificationIssueDate = null;

    /**
     * A módosító okirat készítésének időbélyege a forrásrendszerben UTC
     * időbenCreation date timestamp of the modification document in UTC time
     *
     * @property \DateTime $modificationTimestamp
     */
    private $modificationTimestamp = null;

    /**
     * Az eredeti számla legutóbbi módosító okiratának sorszáma (ha
     * létezik)Sequence number of last modification document (if exists)
     *
     * @property string $lastModificationReference
     */
    private $lastModificationReference = null;

    /**
     * Annak jelzése, hogy a módosítás olyan alapszámlára hivatkozik, amelyről
     * nem történt és nem is fog történni adatszolgáltatásIndicates whether the
     * modification references to an original invoice which is not and will not be
     * exchanged
     *
     * @property boolean $modifyWithoutMaster
     */
    private $modifyWithoutMaster = null;

    /**
     * Gets as originalInvoiceNumber
     *
     * Az eredeti számla sorszáma, melyre a módosítás vonatkozik - ÁFA tv. 170.
     * § (1) c)Sequence number of the original invoice, on which the modification
     * occurs - section 170 (1) c) of the VAT law
     *
     * @return string
     */
    public function getOriginalInvoiceNumber()
    {
        return $this->originalInvoiceNumber;
    }

    /**
     * Sets a new originalInvoiceNumber
     *
     * Az eredeti számla sorszáma, melyre a módosítás vonatkozik - ÁFA tv. 170.
     * § (1) c)Sequence number of the original invoice, on which the modification
     * occurs - section 170 (1) c) of the VAT law
     *
     * @param string $originalInvoiceNumber
     * @return self
     */
    public function setOriginalInvoiceNumber($originalInvoiceNumber)
    {
        $this->originalInvoiceNumber = $originalInvoiceNumber;
        return $this;
    }

    /**
     * Gets as modificationIssueDate
     *
     * Módosító okirat kelte - ÁFA tv. 170. § (1) bek. a)Date of issue of the
     * modification document - section 170 (1) a) of the VAT law
     *
     * @return \DateTime
     */
    public function getModificationIssueDate()
    {
        return $this->modificationIssueDate;
    }

    /**
     * Sets a new modificationIssueDate
     *
     * Módosító okirat kelte - ÁFA tv. 170. § (1) bek. a)Date of issue of the
     * modification document - section 170 (1) a) of the VAT law
     *
     * @param \DateTime $modificationIssueDate
     * @return self
     */
    public function setModificationIssueDate(\DateTime $modificationIssueDate)
    {
        $this->modificationIssueDate = $modificationIssueDate;
        return $this;
    }

    /**
     * Gets as modificationTimestamp
     *
     * A módosító okirat készítésének időbélyege a forrásrendszerben UTC
     * időbenCreation date timestamp of the modification document in UTC time
     *
     * @return \DateTime
     */
    public function getModificationTimestamp()
    {
        return $this->modificationTimestamp;
    }

    /**
     * Sets a new modificationTimestamp
     *
     * A módosító okirat készítésének időbélyege a forrásrendszerben UTC
     * időbenCreation date timestamp of the modification document in UTC time
     *
     * @param \DateTime $modificationTimestamp
     * @return self
     */
    public function setModificationTimestamp(\DateTime $modificationTimestamp)
    {
        $this->modificationTimestamp = $modificationTimestamp;
        return $this;
    }

    /**
     * Gets as lastModificationReference
     *
     * Az eredeti számla legutóbbi módosító okiratának sorszáma (ha
     * létezik)Sequence number of last modification document (if exists)
     *
     * @return string
     */
    public function getLastModificationReference()
    {
        return $this->lastModificationReference;
    }

    /**
     * Sets a new lastModificationReference
     *
     * Az eredeti számla legutóbbi módosító okiratának sorszáma (ha
     * létezik)Sequence number of last modification document (if exists)
     *
     * @param string $lastModificationReference
     * @return self
     */
    public function setLastModificationReference($lastModificationReference)
    {
        $this->lastModificationReference = $lastModificationReference;
        return $this;
    }

    /**
     * Gets as modifyWithoutMaster
     *
     * Annak jelzése, hogy a módosítás olyan alapszámlára hivatkozik, amelyről
     * nem történt és nem is fog történni adatszolgáltatásIndicates whether the
     * modification references to an original invoice which is not and will not be
     * exchanged
     *
     * @return boolean
     */
    public function getModifyWithoutMaster()
    {
        return $this->modifyWithoutMaster;
    }

    /**
     * Sets a new modifyWithoutMaster
     *
     * Annak jelzése, hogy a módosítás olyan alapszámlára hivatkozik, amelyről
     * nem történt és nem is fog történni adatszolgáltatásIndicates whether the
     * modification references to an original invoice which is not and will not be
     * exchanged
     *
     * @param boolean $modifyWithoutMaster
     * @return self
     */
    public function setModifyWithoutMaster($modifyWithoutMaster)
    {
        $this->modifyWithoutMaster = $modifyWithoutMaster;
        return $this;
    }


}

