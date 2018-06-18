<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing InvoiceDataType
 *
 * Számla adatokInvoice data
 * XSD Type: InvoiceDataType
 */
class InvoiceDataType
{

    /**
     * Számla vagy módosító okirat sorszáma - ÁFA tv. 169. § b) vagy 170. § (1) bek. b) pontSequential number of the original invoice or modifiation document - section 169 (b) or section 170 (1) b) of the VAT law
     *
     * @property string $invoiceNumber
     */
    private $invoiceNumber = null;

    /**
     * A számla típusa, módosító okirat esetén az eredeti számla típusaType of invoice. In case of modification document the type of original invoice
     *
     * @property string $invoiceCategory
     */
    private $invoiceCategory = null;

    /**
     * Számla kelte - ÁFA tv. 169. § a)Date of issue of the invoice - section 169 (a) of the VAT law
     *
     * @property \DateTime $invoiceIssueDate
     */
    private $invoiceIssueDate = null;

    /**
     * Teljesítés dátuma (ha nem szerepel a számlán, akkor azonos a számla keltével) - ÁFA tv. 169. § g)Delivery date (if this field does not exist on the invoice, the date of the invoice should be considered as such) - section 169 (g) of the VAT law
     *
     * @property \DateTime $invoiceDeliveryDate
     */
    private $invoiceDeliveryDate = null;

    /**
     * Amennyiben a számla egy időszakra vonatkozik, akkor az időszak első napjaThe first day of the delivery, if the invoice delivery is a period
     *
     * @property \DateTime $invoiceDeliveryPeriodStart
     */
    private $invoiceDeliveryPeriodStart = null;

    /**
     * Amennyiben a számla egy időszakra vonatkozik, akkor az időszak utolsó napjaThe last day of the delivery, if the invoice delivery is a period
     *
     * @property \DateTime $invoiceDeliveryPeriodEnd
     */
    private $invoiceDeliveryPeriodEnd = null;

    /**
     * Számviteli teljesítés dátuma. Időszak esetén az időszak utolsó napjaDate of accounting accomplishment. In the event of a period, the last day of the period
     *
     * @property \DateTime $invoiceAccountingDeliveryDate
     */
    private $invoiceAccountingDeliveryDate = null;

    /**
     * A számla pénzneme az ISO 4217 szabvány szerintISO 4217 currency code on the invoice
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * HUF-tól különböző pénznem esetén az alkalmazott árfolyam: egy egység értéke HUF-banIn case any currency is used other than HUF, the applied exchange rate should be mentioned: 1 unit of the foreign currency expressed in HUF
     *
     * @property float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Önszámlázás jelölése (önszámlázás esetén true)Marking the fact of self-billing (in the case of self-billing the value is true)
     *
     * @property boolean $selfBillingIndicator
     */
    private $selfBillingIndicator = null;

    /**
     * Fizetés módjaMethod of payment
     *
     * @property string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * Fizetési határidőDeadline for payment
     *
     * @property \DateTime $paymentDate
     */
    private $paymentDate = null;

    /**
     * Pénzforgalmi elszámolás jelölése, ha az szerepel a számlán - ÁFA tv. 169. § h). Értéke true pénzforgalmi elszámolás eseténMarking the fact of cash accounting if this is indicated on the invoice - section 169 (h) of the VAT law. The value is true in case of cash accounting
     *
     * @property boolean $cashAccountingIndicator
     */
    private $cashAccountingIndicator = null;

    /**
     * A számla vagy módosító okirat megjelenési formájaForm of appearance of the invoice or modification document
     *
     * @property string $invoiceAppearance
     */
    private $invoiceAppearance = null;

    /**
     * Elektronikus számla vagy módosító okirat állomány SHA256 lenyomataElectronic invoice or modification document file SHA256 hash value
     *
     * @property string $electronicInvoiceHash
     */
    private $electronicInvoiceHash = null;

    /**
     * A számlára vonatkozó egyéb adatOther data in relation to the invoice
     *
     * @property \Dream\NavInvoiceData\AdditionalDataType[] $additionalInvoiceData
     */
    private $additionalInvoiceData = array(
        
    );

    /**
     * Gets as invoiceNumber
     *
     * Számla vagy módosító okirat sorszáma - ÁFA tv. 169. § b) vagy 170. § (1) bek. b) pontSequential number of the original invoice or modifiation document - section 169 (b) or section 170 (1) b) of the VAT law
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets a new invoiceNumber
     *
     * Számla vagy módosító okirat sorszáma - ÁFA tv. 169. § b) vagy 170. § (1) bek. b) pontSequential number of the original invoice or modifiation document - section 169 (b) or section 170 (1) b) of the VAT law
     *
     * @param string $invoiceNumber
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Gets as invoiceCategory
     *
     * A számla típusa, módosító okirat esetén az eredeti számla típusaType of invoice. In case of modification document the type of original invoice
     *
     * @return string
     */
    public function getInvoiceCategory()
    {
        return $this->invoiceCategory;
    }

    /**
     * Sets a new invoiceCategory
     *
     * A számla típusa, módosító okirat esetén az eredeti számla típusaType of invoice. In case of modification document the type of original invoice
     *
     * @param string $invoiceCategory
     * @return self
     */
    public function setInvoiceCategory($invoiceCategory)
    {
        $this->invoiceCategory = $invoiceCategory;
        return $this;
    }

    /**
     * Gets as invoiceIssueDate
     *
     * Számla kelte - ÁFA tv. 169. § a)Date of issue of the invoice - section 169 (a) of the VAT law
     *
     * @return \DateTime
     */
    public function getInvoiceIssueDate()
    {
        return $this->invoiceIssueDate;
    }

    /**
     * Sets a new invoiceIssueDate
     *
     * Számla kelte - ÁFA tv. 169. § a)Date of issue of the invoice - section 169 (a) of the VAT law
     *
     * @param \DateTime $invoiceIssueDate
     * @return self
     */
    public function setInvoiceIssueDate(\DateTime $invoiceIssueDate)
    {
        $this->invoiceIssueDate = $invoiceIssueDate;
        return $this;
    }

    /**
     * Gets as invoiceDeliveryDate
     *
     * Teljesítés dátuma (ha nem szerepel a számlán, akkor azonos a számla keltével) - ÁFA tv. 169. § g)Delivery date (if this field does not exist on the invoice, the date of the invoice should be considered as such) - section 169 (g) of the VAT law
     *
     * @return \DateTime
     */
    public function getInvoiceDeliveryDate()
    {
        return $this->invoiceDeliveryDate;
    }

    /**
     * Sets a new invoiceDeliveryDate
     *
     * Teljesítés dátuma (ha nem szerepel a számlán, akkor azonos a számla keltével) - ÁFA tv. 169. § g)Delivery date (if this field does not exist on the invoice, the date of the invoice should be considered as such) - section 169 (g) of the VAT law
     *
     * @param \DateTime $invoiceDeliveryDate
     * @return self
     */
    public function setInvoiceDeliveryDate(\DateTime $invoiceDeliveryDate)
    {
        $this->invoiceDeliveryDate = $invoiceDeliveryDate;
        return $this;
    }

    /**
     * Gets as invoiceDeliveryPeriodStart
     *
     * Amennyiben a számla egy időszakra vonatkozik, akkor az időszak első napjaThe first day of the delivery, if the invoice delivery is a period
     *
     * @return \DateTime
     */
    public function getInvoiceDeliveryPeriodStart()
    {
        return $this->invoiceDeliveryPeriodStart;
    }

    /**
     * Sets a new invoiceDeliveryPeriodStart
     *
     * Amennyiben a számla egy időszakra vonatkozik, akkor az időszak első napjaThe first day of the delivery, if the invoice delivery is a period
     *
     * @param \DateTime $invoiceDeliveryPeriodStart
     * @return self
     */
    public function setInvoiceDeliveryPeriodStart(\DateTime $invoiceDeliveryPeriodStart)
    {
        $this->invoiceDeliveryPeriodStart = $invoiceDeliveryPeriodStart;
        return $this;
    }

    /**
     * Gets as invoiceDeliveryPeriodEnd
     *
     * Amennyiben a számla egy időszakra vonatkozik, akkor az időszak utolsó napjaThe last day of the delivery, if the invoice delivery is a period
     *
     * @return \DateTime
     */
    public function getInvoiceDeliveryPeriodEnd()
    {
        return $this->invoiceDeliveryPeriodEnd;
    }

    /**
     * Sets a new invoiceDeliveryPeriodEnd
     *
     * Amennyiben a számla egy időszakra vonatkozik, akkor az időszak utolsó napjaThe last day of the delivery, if the invoice delivery is a period
     *
     * @param \DateTime $invoiceDeliveryPeriodEnd
     * @return self
     */
    public function setInvoiceDeliveryPeriodEnd(\DateTime $invoiceDeliveryPeriodEnd)
    {
        $this->invoiceDeliveryPeriodEnd = $invoiceDeliveryPeriodEnd;
        return $this;
    }

    /**
     * Gets as invoiceAccountingDeliveryDate
     *
     * Számviteli teljesítés dátuma. Időszak esetén az időszak utolsó napjaDate of accounting accomplishment. In the event of a period, the last day of the period
     *
     * @return \DateTime
     */
    public function getInvoiceAccountingDeliveryDate()
    {
        return $this->invoiceAccountingDeliveryDate;
    }

    /**
     * Sets a new invoiceAccountingDeliveryDate
     *
     * Számviteli teljesítés dátuma. Időszak esetén az időszak utolsó napjaDate of accounting accomplishment. In the event of a period, the last day of the period
     *
     * @param \DateTime $invoiceAccountingDeliveryDate
     * @return self
     */
    public function setInvoiceAccountingDeliveryDate(\DateTime $invoiceAccountingDeliveryDate)
    {
        $this->invoiceAccountingDeliveryDate = $invoiceAccountingDeliveryDate;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * A számla pénzneme az ISO 4217 szabvány szerintISO 4217 currency code on the invoice
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * A számla pénzneme az ISO 4217 szabvány szerintISO 4217 currency code on the invoice
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * HUF-tól különböző pénznem esetén az alkalmazott árfolyam: egy egység értéke HUF-banIn case any currency is used other than HUF, the applied exchange rate should be mentioned: 1 unit of the foreign currency expressed in HUF
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * HUF-tól különböző pénznem esetén az alkalmazott árfolyam: egy egység értéke HUF-banIn case any currency is used other than HUF, the applied exchange rate should be mentioned: 1 unit of the foreign currency expressed in HUF
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Gets as selfBillingIndicator
     *
     * Önszámlázás jelölése (önszámlázás esetén true)Marking the fact of self-billing (in the case of self-billing the value is true)
     *
     * @return boolean
     */
    public function getSelfBillingIndicator()
    {
        return $this->selfBillingIndicator;
    }

    /**
     * Sets a new selfBillingIndicator
     *
     * Önszámlázás jelölése (önszámlázás esetén true)Marking the fact of self-billing (in the case of self-billing the value is true)
     *
     * @param boolean $selfBillingIndicator
     * @return self
     */
    public function setSelfBillingIndicator($selfBillingIndicator)
    {
        $this->selfBillingIndicator = $selfBillingIndicator;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * Fizetés módjaMethod of payment
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * Fizetés módjaMethod of payment
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as paymentDate
     *
     * Fizetési határidőDeadline for payment
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Sets a new paymentDate
     *
     * Fizetési határidőDeadline for payment
     *
     * @param \DateTime $paymentDate
     * @return self
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Gets as cashAccountingIndicator
     *
     * Pénzforgalmi elszámolás jelölése, ha az szerepel a számlán - ÁFA tv. 169. § h). Értéke true pénzforgalmi elszámolás eseténMarking the fact of cash accounting if this is indicated on the invoice - section 169 (h) of the VAT law. The value is true in case of cash accounting
     *
     * @return boolean
     */
    public function getCashAccountingIndicator()
    {
        return $this->cashAccountingIndicator;
    }

    /**
     * Sets a new cashAccountingIndicator
     *
     * Pénzforgalmi elszámolás jelölése, ha az szerepel a számlán - ÁFA tv. 169. § h). Értéke true pénzforgalmi elszámolás eseténMarking the fact of cash accounting if this is indicated on the invoice - section 169 (h) of the VAT law. The value is true in case of cash accounting
     *
     * @param boolean $cashAccountingIndicator
     * @return self
     */
    public function setCashAccountingIndicator($cashAccountingIndicator)
    {
        $this->cashAccountingIndicator = $cashAccountingIndicator;
        return $this;
    }

    /**
     * Gets as invoiceAppearance
     *
     * A számla vagy módosító okirat megjelenési formájaForm of appearance of the invoice or modification document
     *
     * @return string
     */
    public function getInvoiceAppearance()
    {
        return $this->invoiceAppearance;
    }

    /**
     * Sets a new invoiceAppearance
     *
     * A számla vagy módosító okirat megjelenési formájaForm of appearance of the invoice or modification document
     *
     * @param string $invoiceAppearance
     * @return self
     */
    public function setInvoiceAppearance($invoiceAppearance)
    {
        $this->invoiceAppearance = $invoiceAppearance;
        return $this;
    }

    /**
     * Gets as electronicInvoiceHash
     *
     * Elektronikus számla vagy módosító okirat állomány SHA256 lenyomataElectronic invoice or modification document file SHA256 hash value
     *
     * @return string
     */
    public function getElectronicInvoiceHash()
    {
        return $this->electronicInvoiceHash;
    }

    /**
     * Sets a new electronicInvoiceHash
     *
     * Elektronikus számla vagy módosító okirat állomány SHA256 lenyomataElectronic invoice or modification document file SHA256 hash value
     *
     * @param string $electronicInvoiceHash
     * @return self
     */
    public function setElectronicInvoiceHash($electronicInvoiceHash)
    {
        $this->electronicInvoiceHash = $electronicInvoiceHash;
        return $this;
    }

    /**
     * Adds as additionalInvoiceData
     *
     * A számlára vonatkozó egyéb adatOther data in relation to the invoice
     *
     * @return self
     * @param \Dream\NavInvoiceData\AdditionalDataType $additionalInvoiceData
     */
    public function addToAdditionalInvoiceData(\Dream\NavInvoiceData\AdditionalDataType $additionalInvoiceData)
    {
        $this->additionalInvoiceData[] = $additionalInvoiceData;
        return $this;
    }

    /**
     * isset additionalInvoiceData
     *
     * A számlára vonatkozó egyéb adatOther data in relation to the invoice
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInvoiceData($index)
    {
        return isset($this->additionalInvoiceData[$index]);
    }

    /**
     * unset additionalInvoiceData
     *
     * A számlára vonatkozó egyéb adatOther data in relation to the invoice
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInvoiceData($index)
    {
        unset($this->additionalInvoiceData[$index]);
    }

    /**
     * Gets as additionalInvoiceData
     *
     * A számlára vonatkozó egyéb adatOther data in relation to the invoice
     *
     * @return \Dream\NavInvoiceData\AdditionalDataType[]
     */
    public function getAdditionalInvoiceData()
    {
        return $this->additionalInvoiceData;
    }

    /**
     * Sets a new additionalInvoiceData
     *
     * A számlára vonatkozó egyéb adatOther data in relation to the invoice
     *
     * @param \Dream\NavInvoiceData\AdditionalDataType[] $additionalInvoiceData
     * @return self
     */
    public function setAdditionalInvoiceData(array $additionalInvoiceData)
    {
        $this->additionalInvoiceData = $additionalInvoiceData;
        return $this;
    }


}

