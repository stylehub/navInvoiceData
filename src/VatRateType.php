<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing VatRateType
 *
 * Az adómérték vagy az adómentes értékesítés jelöléseMarking tax rate or
 * tax exempt supply
 * XSD Type: VatRateType
 */
class VatRateType
{

    /**
     * az alkalmazott adó mértéke - ÁFA tv. 169. § j)Applied tax rate - section
     * 169 (j) of the VAT law
     *
     * @property float $vatPercentage
     */
    private $vatPercentage = null;

    /**
     * Az adómentesség jelölése - ÁFA tv. 169. § m)Marking tax exemption -
     * section 169 (m) of the VAT law
     *
     * @property string $vatExemption
     */
    private $vatExemption = null;

    /**
     * Az ÁFA törvény hatályán kívüliOut of scope of the VAT law
     *
     * @property boolean $vatOutOfScope
     */
    private $vatOutOfScope = null;

    /**
     * A belföldi fordított adózás jelölése - ÁFA tv. 142. §Marking the
     * national is reverse charge taxation - section 142 of the VAT law
     *
     * @property boolean $vatDomesticReverseCharge
     */
    private $vatDomesticReverseCharge = null;

    /**
     * Áthárított adót tartalmazó különbözet szerinti adózásMargin scheme
     * including input tax
     *
     * @property boolean $marginSchemeVat
     */
    private $marginSchemeVat = null;

    /**
     * Áthárított adót nem tartalmazó különbözet szerinti adózásMargin scheme
     * not including input tax
     *
     * @property boolean $marginSchemeNoVat
     */
    private $marginSchemeNoVat = null;

    /**
     * Gets as vatPercentage
     *
     * az alkalmazott adó mértéke - ÁFA tv. 169. § j)Applied tax rate - section
     * 169 (j) of the VAT law
     *
     * @return float
     */
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }

    /**
     * Sets a new vatPercentage
     *
     * az alkalmazott adó mértéke - ÁFA tv. 169. § j)Applied tax rate - section
     * 169 (j) of the VAT law
     *
     * @param float $vatPercentage
     * @return self
     */
    public function setVatPercentage($vatPercentage)
    {
        $this->vatPercentage = $vatPercentage;
        return $this;
    }

    /**
     * Gets as vatExemption
     *
     * Az adómentesség jelölése - ÁFA tv. 169. § m)Marking tax exemption -
     * section 169 (m) of the VAT law
     *
     * @return string
     */
    public function getVatExemption()
    {
        return $this->vatExemption;
    }

    /**
     * Sets a new vatExemption
     *
     * Az adómentesség jelölése - ÁFA tv. 169. § m)Marking tax exemption -
     * section 169 (m) of the VAT law
     *
     * @param string $vatExemption
     * @return self
     */
    public function setVatExemption($vatExemption)
    {
        $this->vatExemption = $vatExemption;
        return $this;
    }

    /**
     * Gets as vatOutOfScope
     *
     * Az ÁFA törvény hatályán kívüliOut of scope of the VAT law
     *
     * @return boolean
     */
    public function getVatOutOfScope()
    {
        return $this->vatOutOfScope;
    }

    /**
     * Sets a new vatOutOfScope
     *
     * Az ÁFA törvény hatályán kívüliOut of scope of the VAT law
     *
     * @param boolean $vatOutOfScope
     * @return self
     */
    public function setVatOutOfScope($vatOutOfScope)
    {
        $this->vatOutOfScope = $vatOutOfScope;
        return $this;
    }

    /**
     * Gets as vatDomesticReverseCharge
     *
     * A belföldi fordított adózás jelölése - ÁFA tv. 142. §Marking the
     * national is reverse charge taxation - section 142 of the VAT law
     *
     * @return boolean
     */
    public function getVatDomesticReverseCharge()
    {
        return $this->vatDomesticReverseCharge;
    }

    /**
     * Sets a new vatDomesticReverseCharge
     *
     * A belföldi fordított adózás jelölése - ÁFA tv. 142. §Marking the
     * national is reverse charge taxation - section 142 of the VAT law
     *
     * @param boolean $vatDomesticReverseCharge
     * @return self
     */
    public function setVatDomesticReverseCharge($vatDomesticReverseCharge)
    {
        $this->vatDomesticReverseCharge = $vatDomesticReverseCharge;
        return $this;
    }

    /**
     * Gets as marginSchemeVat
     *
     * Áthárított adót tartalmazó különbözet szerinti adózásMargin scheme
     * including input tax
     *
     * @return boolean
     */
    public function getMarginSchemeVat()
    {
        return $this->marginSchemeVat;
    }

    /**
     * Sets a new marginSchemeVat
     *
     * Áthárított adót tartalmazó különbözet szerinti adózásMargin scheme
     * including input tax
     *
     * @param boolean $marginSchemeVat
     * @return self
     */
    public function setMarginSchemeVat($marginSchemeVat)
    {
        $this->marginSchemeVat = $marginSchemeVat;
        return $this;
    }

    /**
     * Gets as marginSchemeNoVat
     *
     * Áthárított adót nem tartalmazó különbözet szerinti adózásMargin scheme
     * not including input tax
     *
     * @return boolean
     */
    public function getMarginSchemeNoVat()
    {
        return $this->marginSchemeNoVat;
    }

    /**
     * Sets a new marginSchemeNoVat
     *
     * Áthárított adót nem tartalmazó különbözet szerinti adózásMargin scheme
     * not including input tax
     *
     * @param boolean $marginSchemeNoVat
     * @return self
     */
    public function setMarginSchemeNoVat($marginSchemeNoVat)
    {
        $this->marginSchemeNoVat = $marginSchemeNoVat;
        return $this;
    }


}

