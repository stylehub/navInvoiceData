<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing PaymentEvidenceDocumentDataType
 *
 * A termékdíj bevallását igazoló dokumentum adatai a 2011. évi LXXXV. tv.
 * 13. § (3) szerint és a 25. § (3) szerintData of the document verifying the
 * declaration submitted on the product fee according to the Paragraph (3), Section
 * 13 and the Paragraph (3) Section 25 of the Act LXXXV of 2011
 * XSD Type: PaymentEvidenceDocumentDataType
 */
class PaymentEvidenceDocumentDataType
{

    /**
     * Számla sorszáma vagy egyéb okirat azonosító számaSequential number of the
     * invoice, or other document considered as such
     *
     * @property string $evidenceDocumentNo
     */
    private $evidenceDocumentNo = null;

    /**
     * Számla kelteDate of issue of the invoice
     *
     * @property \DateTime $evidenceDocumentDate
     */
    private $evidenceDocumentDate = null;

    /**
     * Kötelezett neveName of obligator
     *
     * @property string $obligatedName
     */
    private $obligatedName = null;

    /**
     * Kötelezett címeAddress of obligator
     *
     * @property \Dream\NavInvoiceData\AddressType $obligatedAddress
     */
    private $obligatedAddress = null;

    /**
     * A kötelezett adószámaTax number of obligated
     *
     * @property \Dream\NavInvoiceData\TaxNumberType $obligatedTaxNumber
     */
    private $obligatedTaxNumber = null;

    /**
     * Gets as evidenceDocumentNo
     *
     * Számla sorszáma vagy egyéb okirat azonosító számaSequential number of the
     * invoice, or other document considered as such
     *
     * @return string
     */
    public function getEvidenceDocumentNo()
    {
        return $this->evidenceDocumentNo;
    }

    /**
     * Sets a new evidenceDocumentNo
     *
     * Számla sorszáma vagy egyéb okirat azonosító számaSequential number of the
     * invoice, or other document considered as such
     *
     * @param string $evidenceDocumentNo
     * @return self
     */
    public function setEvidenceDocumentNo($evidenceDocumentNo)
    {
        $this->evidenceDocumentNo = $evidenceDocumentNo;
        return $this;
    }

    /**
     * Gets as evidenceDocumentDate
     *
     * Számla kelteDate of issue of the invoice
     *
     * @return \DateTime
     */
    public function getEvidenceDocumentDate()
    {
        return $this->evidenceDocumentDate;
    }

    /**
     * Sets a new evidenceDocumentDate
     *
     * Számla kelteDate of issue of the invoice
     *
     * @param \DateTime $evidenceDocumentDate
     * @return self
     */
    public function setEvidenceDocumentDate(\DateTime $evidenceDocumentDate)
    {
        $this->evidenceDocumentDate = $evidenceDocumentDate;
        return $this;
    }

    /**
     * Gets as obligatedName
     *
     * Kötelezett neveName of obligator
     *
     * @return string
     */
    public function getObligatedName()
    {
        return $this->obligatedName;
    }

    /**
     * Sets a new obligatedName
     *
     * Kötelezett neveName of obligator
     *
     * @param string $obligatedName
     * @return self
     */
    public function setObligatedName($obligatedName)
    {
        $this->obligatedName = $obligatedName;
        return $this;
    }

    /**
     * Gets as obligatedAddress
     *
     * Kötelezett címeAddress of obligator
     *
     * @return \Dream\NavInvoiceData\AddressType
     */
    public function getObligatedAddress()
    {
        return $this->obligatedAddress;
    }

    /**
     * Sets a new obligatedAddress
     *
     * Kötelezett címeAddress of obligator
     *
     * @param \Dream\NavInvoiceData\AddressType $obligatedAddress
     * @return self
     */
    public function setObligatedAddress(\Dream\NavInvoiceData\AddressType $obligatedAddress)
    {
        $this->obligatedAddress = $obligatedAddress;
        return $this;
    }

    /**
     * Gets as obligatedTaxNumber
     *
     * A kötelezett adószámaTax number of obligated
     *
     * @return \Dream\NavInvoiceData\TaxNumberType
     */
    public function getObligatedTaxNumber()
    {
        return $this->obligatedTaxNumber;
    }

    /**
     * Sets a new obligatedTaxNumber
     *
     * A kötelezett adószámaTax number of obligated
     *
     * @param \Dream\NavInvoiceData\TaxNumberType $obligatedTaxNumber
     * @return self
     */
    public function setObligatedTaxNumber(\Dream\NavInvoiceData\TaxNumberType $obligatedTaxNumber)
    {
        $this->obligatedTaxNumber = $obligatedTaxNumber;
        return $this;
    }


}

