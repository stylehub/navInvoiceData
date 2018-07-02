<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing LineType
 *
 * A számla tételek (termék vagy szolgáltatás) adatait tartalmazó típusField
 * type including data of invoice items (product or service)
 * XSD Type: LineType
 */
class LineType
{

    /**
     * A tétel sorszámaSequential number of the item
     *
     * @property integer $lineNumber
     */
    private $lineNumber = null;

    /**
     * Módosításról történő adatszolgáltatás esetén a tételsor módosítás
     * jellegének jelöléseMarking the goal of modification of the line (in the case
     * of data supply about changes/updates only)
     *
     * @property \Dream\NavInvoiceData\LineModificationReferenceType
     * $lineModificationReference
     */
    private $lineModificationReference = null;

    /**
     * Hivatkozások kapcsolódó tételekre, ha ez az ÁFA törvény alapján
     * szükségesReferences to connected items if it is necessary according to VAT law
     *
     * @property integer[] $referencesToOtherLines
     */
    private $referencesToOtherLines = null;

    /**
     * Értéke true, ha a számla tétel előleg jellegűThe value is true if the
     * invoice item is a kind of advance charge
     *
     * @property boolean $advanceIndicator
     */
    private $advanceIndicator = null;

    /**
     * TermékkódokProduct codes
     *
     * @property \Dream\NavInvoiceData\ProductCodeType[] $productCodes
     */
    private $productCodes = null;

    /**
     * A termék vagy szolgáltatás megnevezéseName / description of the product or
     * service
     *
     * @property string $lineDescription
     */
    private $lineDescription = null;

    /**
     * MennyiségQuantity
     *
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * Mennyiségi egységUnit of measure
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * Egységár a számla pénznemében. Egyszerűsített számla esetén bruttó,
     * egyéb esetben nettó egységárUnit price expressed in the currency of the
     * invoice In the event of simplified invoices gross unit price, in other cases net
     * unit price
     *
     * @property float $unitPrice
     */
    private $unitPrice = null;

    /**
     * A tételhez tartozó árengedmény adatokDiscount data in relation to the item
     *
     * @property \Dream\NavInvoiceData\DiscountDataType $lineDiscountData
     */
    private $lineDiscountData = null;

    /**
     * Normál (nem egyszerűsített) számla esetén (beleértve a gyűjtőszámlát)
     * kitöltendő tétel érték adatok.Item value data to be completed in case of
     * normal (not simplified, but including aggregated) invoice
     *
     * @property \Dream\NavInvoiceData\LineAmountsNormalType $lineAmountsNormal
     */
    private $lineAmountsNormal = null;

    /**
     * Egyszerűsített számla esetén kitöltendő tétel érték adatokItem value
     * data to be completed in case of simplified invoice
     *
     * @property \Dream\NavInvoiceData\LineAmountsSimplifiedType $lineAmountsSimplified
     */
    private $lineAmountsSimplified = null;

    /**
     * Értéke true ha a tétel közvetített szolgáltatás - Számviteli tv. 3.§
     * (4) 1The value is true if the item is an intermediated service - paragraph (4) 1
     * of the Article 3 of Accounting Act
     *
     * @property boolean $intermediatedService
     */
    private $intermediatedService = null;

    /**
     * Gyűjtő számla adatokAggregate invoice data
     *
     * @property \Dream\NavInvoiceData\AggregateInvoiceLineDataType
     * $aggregateInvoiceLineData
     */
    private $aggregateInvoiceLineData = null;

    /**
     * Új közlekedési eszköz értékesítés ÁFA tv. 89 § ill. 169 § o)Supply of
     * new means of transport - section 89 § and 169 (o) of the VAT law
     *
     * @property \Dream\NavInvoiceData\NewTransportMeanType $newTransportMean
     */
    private $newTransportMean = null;

    /**
     * Értéke true, ha a tétel betétdíj jellegűThe value is true if the item is
     * bottle/container deposit
     *
     * @property boolean $depositIndicator
     */
    private $depositIndicator = null;

    /**
     * Különbözet szerinti szabályozás jelölése - ÁFA tv. 169. § p) q)Marking
     * the margin-scheme taxation as per section 169 (p)(q)
     *
     * @property string $marginSchemeIndicator
     */
    private $marginSchemeIndicator = null;

    /**
     * A tételhez tartozó EKÁER azonosító(k)EKAER ID-s of the item
     *
     * @property string[] $ekaerIds
     */
    private $ekaerIds = null;

    /**
     * Értéke true ha a tételt termékdíj fizetési kötelezettség terheliThe
     * value is true if the item is liable to product fee
     *
     * @property boolean $obligatedForProductFee
     */
    private $obligatedForProductFee = null;

    /**
     * Földgáz, villamos energia, szén jövedéki adója forintban - Jöt. 118. §
     * (2)Excise duty on natural gas, electricity and coal in Hungarian forints –
     * paragraph (2), Section 118 of the Act on Excise Duties
     *
     * @property float $gPCExcise
     */
    private $gPCExcise = null;

    /**
     * Gázolaj adózottan történő beszerzésének adatai – 45/2016 (XI. 29.) NGM
     * rendelet 75. § (1) a)Data of gas oil acquisition after taxation – point a),
     * paragraph (1) of Section 75 of the NGM Decree No. 45/2016. (XI. 29.)
     *
     * @property \Dream\NavInvoiceData\DieselOilPurchaseType $dieselOilPurchase
     */
    private $dieselOilPurchase = null;

    /**
     * Értéke true, ha a Neta tv-ben meghatározott adókötelezettség az adó
     * alanyát terheli. 2011. évi CIII. tv. 3.§(2)Value is true, if the taxable
     * person is liable for tax obligation determined in the Act on Public Health
     * Product Tax (Neta tv.). Paragraph (2), Section 3 of the Act CIII of 2011
     *
     * @property boolean $netaDeclaration
     */
    private $netaDeclaration = null;

    /**
     * A környezetvédelmi termékdíjról szóló 2011. évi LXXXV. tv. szerinti,
     * tételre vonatkozó záradékokClauses according to the Act LXXXV of 2011 on
     * Environmental Protection Product Fee (related to the item)
     *
     * @property \Dream\NavInvoiceData\ProductFeeClauseType $productFeeClause
     */
    private $productFeeClause = null;

    /**
     * A tétel termékdíj tartalmára vonatkozó adatokData on the content of the
     * line's product charge
     *
     * @property \Dream\NavInvoiceData\ProductFeeDataType[] $lineProductFeeContent
     */
    private $lineProductFeeContent = null;

    /**
     * A termék/szolgáltatás tételhez kapcsolódó, további adatOther data in
     * relation to the product / service item
     *
     * @property \Dream\NavInvoiceData\AdditionalDataType[] $additionalLineData
     */
    private $additionalLineData = null;

    /**
     * Gets as lineNumber
     *
     * A tétel sorszámaSequential number of the item
     *
     * @return integer
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * Sets a new lineNumber
     *
     * A tétel sorszámaSequential number of the item
     *
     * @param integer $lineNumber
     * @return self
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * Gets as lineModificationReference
     *
     * Módosításról történő adatszolgáltatás esetén a tételsor módosítás
     * jellegének jelöléseMarking the goal of modification of the line (in the case
     * of data supply about changes/updates only)
     *
     * @return \Dream\NavInvoiceData\LineModificationReferenceType
     */
    public function getLineModificationReference()
    {
        return $this->lineModificationReference;
    }

    /**
     * Sets a new lineModificationReference
     *
     * Módosításról történő adatszolgáltatás esetén a tételsor módosítás
     * jellegének jelöléseMarking the goal of modification of the line (in the case
     * of data supply about changes/updates only)
     *
     * @param \Dream\NavInvoiceData\LineModificationReferenceType
     * $lineModificationReference
     * @return self
     */
    public function setLineModificationReference(\Dream\NavInvoiceData\LineModificationReferenceType $lineModificationReference)
    {
        $this->lineModificationReference = $lineModificationReference;
        return $this;
    }

    /**
     * Adds as referenceToOtherLine
     *
     * Hivatkozások kapcsolódó tételekre, ha ez az ÁFA törvény alapján
     * szükségesReferences to connected items if it is necessary according to VAT law
     *
     * @return self
     * @param integer $referenceToOtherLine
     */
    public function addToReferencesToOtherLines($referenceToOtherLine)
    {
        $this->referencesToOtherLines[] = $referenceToOtherLine;
        return $this;
    }

    /**
     * isset referencesToOtherLines
     *
     * Hivatkozások kapcsolódó tételekre, ha ez az ÁFA törvény alapján
     * szükségesReferences to connected items if it is necessary according to VAT law
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReferencesToOtherLines($index)
    {
        return isset($this->referencesToOtherLines[$index]);
    }

    /**
     * unset referencesToOtherLines
     *
     * Hivatkozások kapcsolódó tételekre, ha ez az ÁFA törvény alapján
     * szükségesReferences to connected items if it is necessary according to VAT law
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReferencesToOtherLines($index)
    {
        unset($this->referencesToOtherLines[$index]);
    }

    /**
     * Gets as referencesToOtherLines
     *
     * Hivatkozások kapcsolódó tételekre, ha ez az ÁFA törvény alapján
     * szükségesReferences to connected items if it is necessary according to VAT law
     *
     * @return integer[]
     */
    public function getReferencesToOtherLines()
    {
        return $this->referencesToOtherLines;
    }

    /**
     * Sets a new referencesToOtherLines
     *
     * Hivatkozások kapcsolódó tételekre, ha ez az ÁFA törvény alapján
     * szükségesReferences to connected items if it is necessary according to VAT law
     *
     * @param integer $referencesToOtherLines
     * @return self
     */
    public function setReferencesToOtherLines(array $referencesToOtherLines)
    {
        $this->referencesToOtherLines = $referencesToOtherLines;
        return $this;
    }

    /**
     * Gets as advanceIndicator
     *
     * Értéke true, ha a számla tétel előleg jellegűThe value is true if the
     * invoice item is a kind of advance charge
     *
     * @return boolean
     */
    public function getAdvanceIndicator()
    {
        return $this->advanceIndicator;
    }

    /**
     * Sets a new advanceIndicator
     *
     * Értéke true, ha a számla tétel előleg jellegűThe value is true if the
     * invoice item is a kind of advance charge
     *
     * @param boolean $advanceIndicator
     * @return self
     */
    public function setAdvanceIndicator($advanceIndicator)
    {
        $this->advanceIndicator = $advanceIndicator;
        return $this;
    }

    /**
     * Adds as productCode
     *
     * TermékkódokProduct codes
     *
     * @return self
     * @param \Dream\NavInvoiceData\ProductCodeType $productCode
     */
    public function addToProductCodes(\Dream\NavInvoiceData\ProductCodeType $productCode)
    {
        $this->productCodes[] = $productCode;
        return $this;
    }

    /**
     * isset productCodes
     *
     * TermékkódokProduct codes
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductCodes($index)
    {
        return isset($this->productCodes[$index]);
    }

    /**
     * unset productCodes
     *
     * TermékkódokProduct codes
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductCodes($index)
    {
        unset($this->productCodes[$index]);
    }

    /**
     * Gets as productCodes
     *
     * TermékkódokProduct codes
     *
     * @return \Dream\NavInvoiceData\ProductCodeType[]
     */
    public function getProductCodes()
    {
        return $this->productCodes;
    }

    /**
     * Sets a new productCodes
     *
     * TermékkódokProduct codes
     *
     * @param \Dream\NavInvoiceData\ProductCodeType[] $productCodes
     * @return self
     */
    public function setProductCodes(array $productCodes)
    {
        $this->productCodes = $productCodes;
        return $this;
    }

    /**
     * Gets as lineDescription
     *
     * A termék vagy szolgáltatás megnevezéseName / description of the product or
     * service
     *
     * @return string
     */
    public function getLineDescription()
    {
        return $this->lineDescription;
    }

    /**
     * Sets a new lineDescription
     *
     * A termék vagy szolgáltatás megnevezéseName / description of the product or
     * service
     *
     * @param string $lineDescription
     * @return self
     */
    public function setLineDescription($lineDescription)
    {
        $this->lineDescription = $lineDescription;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * MennyiségQuantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * MennyiségQuantity
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * Mennyiségi egységUnit of measure
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * Mennyiségi egységUnit of measure
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * Egységár a számla pénznemében. Egyszerűsített számla esetén bruttó,
     * egyéb esetben nettó egységárUnit price expressed in the currency of the
     * invoice In the event of simplified invoices gross unit price, in other cases net
     * unit price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * Egységár a számla pénznemében. Egyszerűsített számla esetén bruttó,
     * egyéb esetben nettó egységárUnit price expressed in the currency of the
     * invoice In the event of simplified invoices gross unit price, in other cases net
     * unit price
     *
     * @param float $unitPrice
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as lineDiscountData
     *
     * A tételhez tartozó árengedmény adatokDiscount data in relation to the item
     *
     * @return \Dream\NavInvoiceData\DiscountDataType
     */
    public function getLineDiscountData()
    {
        return $this->lineDiscountData;
    }

    /**
     * Sets a new lineDiscountData
     *
     * A tételhez tartozó árengedmény adatokDiscount data in relation to the item
     *
     * @param \Dream\NavInvoiceData\DiscountDataType $lineDiscountData
     * @return self
     */
    public function setLineDiscountData(\Dream\NavInvoiceData\DiscountDataType $lineDiscountData)
    {
        $this->lineDiscountData = $lineDiscountData;
        return $this;
    }

    /**
     * Gets as lineAmountsNormal
     *
     * Normál (nem egyszerűsített) számla esetén (beleértve a gyűjtőszámlát)
     * kitöltendő tétel érték adatok.Item value data to be completed in case of
     * normal (not simplified, but including aggregated) invoice
     *
     * @return \Dream\NavInvoiceData\LineAmountsNormalType
     */
    public function getLineAmountsNormal()
    {
        return $this->lineAmountsNormal;
    }

    /**
     * Sets a new lineAmountsNormal
     *
     * Normál (nem egyszerűsített) számla esetén (beleértve a gyűjtőszámlát)
     * kitöltendő tétel érték adatok.Item value data to be completed in case of
     * normal (not simplified, but including aggregated) invoice
     *
     * @param \Dream\NavInvoiceData\LineAmountsNormalType $lineAmountsNormal
     * @return self
     */
    public function setLineAmountsNormal(\Dream\NavInvoiceData\LineAmountsNormalType $lineAmountsNormal)
    {
        $this->lineAmountsNormal = $lineAmountsNormal;
        return $this;
    }

    /**
     * Gets as lineAmountsSimplified
     *
     * Egyszerűsített számla esetén kitöltendő tétel érték adatokItem value
     * data to be completed in case of simplified invoice
     *
     * @return \Dream\NavInvoiceData\LineAmountsSimplifiedType
     */
    public function getLineAmountsSimplified()
    {
        return $this->lineAmountsSimplified;
    }

    /**
     * Sets a new lineAmountsSimplified
     *
     * Egyszerűsített számla esetén kitöltendő tétel érték adatokItem value
     * data to be completed in case of simplified invoice
     *
     * @param \Dream\NavInvoiceData\LineAmountsSimplifiedType $lineAmountsSimplified
     * @return self
     */
    public function setLineAmountsSimplified(\Dream\NavInvoiceData\LineAmountsSimplifiedType $lineAmountsSimplified)
    {
        $this->lineAmountsSimplified = $lineAmountsSimplified;
        return $this;
    }

    /**
     * Gets as intermediatedService
     *
     * Értéke true ha a tétel közvetített szolgáltatás - Számviteli tv. 3.§
     * (4) 1The value is true if the item is an intermediated service - paragraph (4) 1
     * of the Article 3 of Accounting Act
     *
     * @return boolean
     */
    public function getIntermediatedService()
    {
        return $this->intermediatedService;
    }

    /**
     * Sets a new intermediatedService
     *
     * Értéke true ha a tétel közvetített szolgáltatás - Számviteli tv. 3.§
     * (4) 1The value is true if the item is an intermediated service - paragraph (4) 1
     * of the Article 3 of Accounting Act
     *
     * @param boolean $intermediatedService
     * @return self
     */
    public function setIntermediatedService($intermediatedService)
    {
        $this->intermediatedService = $intermediatedService;
        return $this;
    }

    /**
     * Gets as aggregateInvoiceLineData
     *
     * Gyűjtő számla adatokAggregate invoice data
     *
     * @return \Dream\NavInvoiceData\AggregateInvoiceLineDataType
     */
    public function getAggregateInvoiceLineData()
    {
        return $this->aggregateInvoiceLineData;
    }

    /**
     * Sets a new aggregateInvoiceLineData
     *
     * Gyűjtő számla adatokAggregate invoice data
     *
     * @param \Dream\NavInvoiceData\AggregateInvoiceLineDataType
     * $aggregateInvoiceLineData
     * @return self
     */
    public function setAggregateInvoiceLineData(\Dream\NavInvoiceData\AggregateInvoiceLineDataType $aggregateInvoiceLineData)
    {
        $this->aggregateInvoiceLineData = $aggregateInvoiceLineData;
        return $this;
    }

    /**
     * Gets as newTransportMean
     *
     * Új közlekedési eszköz értékesítés ÁFA tv. 89 § ill. 169 § o)Supply of
     * new means of transport - section 89 § and 169 (o) of the VAT law
     *
     * @return \Dream\NavInvoiceData\NewTransportMeanType
     */
    public function getNewTransportMean()
    {
        return $this->newTransportMean;
    }

    /**
     * Sets a new newTransportMean
     *
     * Új közlekedési eszköz értékesítés ÁFA tv. 89 § ill. 169 § o)Supply of
     * new means of transport - section 89 § and 169 (o) of the VAT law
     *
     * @param \Dream\NavInvoiceData\NewTransportMeanType $newTransportMean
     * @return self
     */
    public function setNewTransportMean(\Dream\NavInvoiceData\NewTransportMeanType $newTransportMean)
    {
        $this->newTransportMean = $newTransportMean;
        return $this;
    }

    /**
     * Gets as depositIndicator
     *
     * Értéke true, ha a tétel betétdíj jellegűThe value is true if the item is
     * bottle/container deposit
     *
     * @return boolean
     */
    public function getDepositIndicator()
    {
        return $this->depositIndicator;
    }

    /**
     * Sets a new depositIndicator
     *
     * Értéke true, ha a tétel betétdíj jellegűThe value is true if the item is
     * bottle/container deposit
     *
     * @param boolean $depositIndicator
     * @return self
     */
    public function setDepositIndicator($depositIndicator)
    {
        $this->depositIndicator = $depositIndicator;
        return $this;
    }

    /**
     * Gets as marginSchemeIndicator
     *
     * Különbözet szerinti szabályozás jelölése - ÁFA tv. 169. § p) q)Marking
     * the margin-scheme taxation as per section 169 (p)(q)
     *
     * @return string
     */
    public function getMarginSchemeIndicator()
    {
        return $this->marginSchemeIndicator;
    }

    /**
     * Sets a new marginSchemeIndicator
     *
     * Különbözet szerinti szabályozás jelölése - ÁFA tv. 169. § p) q)Marking
     * the margin-scheme taxation as per section 169 (p)(q)
     *
     * @param string $marginSchemeIndicator
     * @return self
     */
    public function setMarginSchemeIndicator($marginSchemeIndicator)
    {
        $this->marginSchemeIndicator = $marginSchemeIndicator;
        return $this;
    }

    /**
     * Adds as ekaerId
     *
     * A tételhez tartozó EKÁER azonosító(k)EKAER ID-s of the item
     *
     * @return self
     * @param string $ekaerId
     */
    public function addToEkaerIds($ekaerId)
    {
        $this->ekaerIds[] = $ekaerId;
        return $this;
    }

    /**
     * isset ekaerIds
     *
     * A tételhez tartozó EKÁER azonosító(k)EKAER ID-s of the item
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEkaerIds($index)
    {
        return isset($this->ekaerIds[$index]);
    }

    /**
     * unset ekaerIds
     *
     * A tételhez tartozó EKÁER azonosító(k)EKAER ID-s of the item
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEkaerIds($index)
    {
        unset($this->ekaerIds[$index]);
    }

    /**
     * Gets as ekaerIds
     *
     * A tételhez tartozó EKÁER azonosító(k)EKAER ID-s of the item
     *
     * @return string[]
     */
    public function getEkaerIds()
    {
        return $this->ekaerIds;
    }

    /**
     * Sets a new ekaerIds
     *
     * A tételhez tartozó EKÁER azonosító(k)EKAER ID-s of the item
     *
     * @param string $ekaerIds
     * @return self
     */
    public function setEkaerIds(array $ekaerIds)
    {
        $this->ekaerIds = $ekaerIds;
        return $this;
    }

    /**
     * Gets as obligatedForProductFee
     *
     * Értéke true ha a tételt termékdíj fizetési kötelezettség terheliThe
     * value is true if the item is liable to product fee
     *
     * @return boolean
     */
    public function getObligatedForProductFee()
    {
        return $this->obligatedForProductFee;
    }

    /**
     * Sets a new obligatedForProductFee
     *
     * Értéke true ha a tételt termékdíj fizetési kötelezettség terheliThe
     * value is true if the item is liable to product fee
     *
     * @param boolean $obligatedForProductFee
     * @return self
     */
    public function setObligatedForProductFee($obligatedForProductFee)
    {
        $this->obligatedForProductFee = $obligatedForProductFee;
        return $this;
    }

    /**
     * Gets as gPCExcise
     *
     * Földgáz, villamos energia, szén jövedéki adója forintban - Jöt. 118. §
     * (2)Excise duty on natural gas, electricity and coal in Hungarian forints –
     * paragraph (2), Section 118 of the Act on Excise Duties
     *
     * @return float
     */
    public function getGPCExcise()
    {
        return $this->gPCExcise;
    }

    /**
     * Sets a new gPCExcise
     *
     * Földgáz, villamos energia, szén jövedéki adója forintban - Jöt. 118. §
     * (2)Excise duty on natural gas, electricity and coal in Hungarian forints –
     * paragraph (2), Section 118 of the Act on Excise Duties
     *
     * @param float $gPCExcise
     * @return self
     */
    public function setGPCExcise($gPCExcise)
    {
        $this->gPCExcise = $gPCExcise;
        return $this;
    }

    /**
     * Gets as dieselOilPurchase
     *
     * Gázolaj adózottan történő beszerzésének adatai – 45/2016 (XI. 29.) NGM
     * rendelet 75. § (1) a)Data of gas oil acquisition after taxation – point a),
     * paragraph (1) of Section 75 of the NGM Decree No. 45/2016. (XI. 29.)
     *
     * @return \Dream\NavInvoiceData\DieselOilPurchaseType
     */
    public function getDieselOilPurchase()
    {
        return $this->dieselOilPurchase;
    }

    /**
     * Sets a new dieselOilPurchase
     *
     * Gázolaj adózottan történő beszerzésének adatai – 45/2016 (XI. 29.) NGM
     * rendelet 75. § (1) a)Data of gas oil acquisition after taxation – point a),
     * paragraph (1) of Section 75 of the NGM Decree No. 45/2016. (XI. 29.)
     *
     * @param \Dream\NavInvoiceData\DieselOilPurchaseType $dieselOilPurchase
     * @return self
     */
    public function setDieselOilPurchase(\Dream\NavInvoiceData\DieselOilPurchaseType $dieselOilPurchase)
    {
        $this->dieselOilPurchase = $dieselOilPurchase;
        return $this;
    }

    /**
     * Gets as netaDeclaration
     *
     * Értéke true, ha a Neta tv-ben meghatározott adókötelezettség az adó
     * alanyát terheli. 2011. évi CIII. tv. 3.§(2)Value is true, if the taxable
     * person is liable for tax obligation determined in the Act on Public Health
     * Product Tax (Neta tv.). Paragraph (2), Section 3 of the Act CIII of 2011
     *
     * @return boolean
     */
    public function getNetaDeclaration()
    {
        return $this->netaDeclaration;
    }

    /**
     * Sets a new netaDeclaration
     *
     * Értéke true, ha a Neta tv-ben meghatározott adókötelezettség az adó
     * alanyát terheli. 2011. évi CIII. tv. 3.§(2)Value is true, if the taxable
     * person is liable for tax obligation determined in the Act on Public Health
     * Product Tax (Neta tv.). Paragraph (2), Section 3 of the Act CIII of 2011
     *
     * @param boolean $netaDeclaration
     * @return self
     */
    public function setNetaDeclaration($netaDeclaration)
    {
        $this->netaDeclaration = $netaDeclaration;
        return $this;
    }

    /**
     * Gets as productFeeClause
     *
     * A környezetvédelmi termékdíjról szóló 2011. évi LXXXV. tv. szerinti,
     * tételre vonatkozó záradékokClauses according to the Act LXXXV of 2011 on
     * Environmental Protection Product Fee (related to the item)
     *
     * @return \Dream\NavInvoiceData\ProductFeeClauseType
     */
    public function getProductFeeClause()
    {
        return $this->productFeeClause;
    }

    /**
     * Sets a new productFeeClause
     *
     * A környezetvédelmi termékdíjról szóló 2011. évi LXXXV. tv. szerinti,
     * tételre vonatkozó záradékokClauses according to the Act LXXXV of 2011 on
     * Environmental Protection Product Fee (related to the item)
     *
     * @param \Dream\NavInvoiceData\ProductFeeClauseType $productFeeClause
     * @return self
     */
    public function setProductFeeClause(\Dream\NavInvoiceData\ProductFeeClauseType $productFeeClause)
    {
        $this->productFeeClause = $productFeeClause;
        return $this;
    }

    /**
     * Adds as lineProductFeeContent
     *
     * A tétel termékdíj tartalmára vonatkozó adatokData on the content of the
     * line's product charge
     *
     * @return self
     * @param \Dream\NavInvoiceData\ProductFeeDataType $lineProductFeeContent
     */
    public function addToLineProductFeeContent(\Dream\NavInvoiceData\ProductFeeDataType $lineProductFeeContent)
    {
        $this->lineProductFeeContent[] = $lineProductFeeContent;
        return $this;
    }

    /**
     * isset lineProductFeeContent
     *
     * A tétel termékdíj tartalmára vonatkozó adatokData on the content of the
     * line's product charge
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLineProductFeeContent($index)
    {
        return isset($this->lineProductFeeContent[$index]);
    }

    /**
     * unset lineProductFeeContent
     *
     * A tétel termékdíj tartalmára vonatkozó adatokData on the content of the
     * line's product charge
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLineProductFeeContent($index)
    {
        unset($this->lineProductFeeContent[$index]);
    }

    /**
     * Gets as lineProductFeeContent
     *
     * A tétel termékdíj tartalmára vonatkozó adatokData on the content of the
     * line's product charge
     *
     * @return \Dream\NavInvoiceData\ProductFeeDataType[]
     */
    public function getLineProductFeeContent()
    {
        return $this->lineProductFeeContent;
    }

    /**
     * Sets a new lineProductFeeContent
     *
     * A tétel termékdíj tartalmára vonatkozó adatokData on the content of the
     * line's product charge
     *
     * @param \Dream\NavInvoiceData\ProductFeeDataType[] $lineProductFeeContent
     * @return self
     */
    public function setLineProductFeeContent(array $lineProductFeeContent)
    {
        $this->lineProductFeeContent = $lineProductFeeContent;
        return $this;
    }

    /**
     * Adds as additionalLineData
     *
     * A termék/szolgáltatás tételhez kapcsolódó, további adatOther data in
     * relation to the product / service item
     *
     * @return self
     * @param \Dream\NavInvoiceData\AdditionalDataType $additionalLineData
     */
    public function addToAdditionalLineData(\Dream\NavInvoiceData\AdditionalDataType $additionalLineData)
    {
        $this->additionalLineData[] = $additionalLineData;
        return $this;
    }

    /**
     * isset additionalLineData
     *
     * A termék/szolgáltatás tételhez kapcsolódó, további adatOther data in
     * relation to the product / service item
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalLineData($index)
    {
        return isset($this->additionalLineData[$index]);
    }

    /**
     * unset additionalLineData
     *
     * A termék/szolgáltatás tételhez kapcsolódó, további adatOther data in
     * relation to the product / service item
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalLineData($index)
    {
        unset($this->additionalLineData[$index]);
    }

    /**
     * Gets as additionalLineData
     *
     * A termék/szolgáltatás tételhez kapcsolódó, további adatOther data in
     * relation to the product / service item
     *
     * @return \Dream\NavInvoiceData\AdditionalDataType[]
     */
    public function getAdditionalLineData()
    {
        return $this->additionalLineData;
    }

    /**
     * Sets a new additionalLineData
     *
     * A termék/szolgáltatás tételhez kapcsolódó, további adatOther data in
     * relation to the product / service item
     *
     * @param \Dream\NavInvoiceData\AdditionalDataType[] $additionalLineData
     * @return self
     */
    public function setAdditionalLineData(array $additionalLineData)
    {
        $this->additionalLineData = $additionalLineData;
        return $this;
    }


}

