<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing LineModificationReferenceType
 *
 * Módosításról történő adatszolgáltatás esetén a tételsor módosítás
 * jellegének jelöléseMarking the goal of modification of the line (in the case
 * of data supply about changes/updates only)
 * XSD Type: LineModificationReferenceType
 */
class LineModificationReferenceType
{

    /**
     * Az eredeti számla módosítással érintett tételének sorszáma (lineNumber).
     * Új tétel létrehozása esetén az új tétel sorszáma, a meglévő
     * tételsorok számozásának folytatásakéntLine number of the original invoice,
     * which the modification occurs with. In case of create operation the tag shall
     * contain the new line number, as a sequential increment of the the existing lines
     * set
     *
     * @property integer $lineNumberReference
     */
    private $lineNumberReference = null;

    /**
     * A számlatétel módosításának jellegeLine modification type
     *
     * @property string $lineOperation
     */
    private $lineOperation = null;

    /**
     * Gets as lineNumberReference
     *
     * Az eredeti számla módosítással érintett tételének sorszáma (lineNumber).
     * Új tétel létrehozása esetén az új tétel sorszáma, a meglévő
     * tételsorok számozásának folytatásakéntLine number of the original invoice,
     * which the modification occurs with. In case of create operation the tag shall
     * contain the new line number, as a sequential increment of the the existing lines
     * set
     *
     * @return integer
     */
    public function getLineNumberReference()
    {
        return $this->lineNumberReference;
    }

    /**
     * Sets a new lineNumberReference
     *
     * Az eredeti számla módosítással érintett tételének sorszáma (lineNumber).
     * Új tétel létrehozása esetén az új tétel sorszáma, a meglévő
     * tételsorok számozásának folytatásakéntLine number of the original invoice,
     * which the modification occurs with. In case of create operation the tag shall
     * contain the new line number, as a sequential increment of the the existing lines
     * set
     *
     * @param integer $lineNumberReference
     * @return self
     */
    public function setLineNumberReference($lineNumberReference)
    {
        $this->lineNumberReference = $lineNumberReference;
        return $this;
    }

    /**
     * Gets as lineOperation
     *
     * A számlatétel módosításának jellegeLine modification type
     *
     * @return string
     */
    public function getLineOperation()
    {
        return $this->lineOperation;
    }

    /**
     * Sets a new lineOperation
     *
     * A számlatétel módosításának jellegeLine modification type
     *
     * @param string $lineOperation
     * @return self
     */
    public function setLineOperation($lineOperation)
    {
        $this->lineOperation = $lineOperation;
        return $this;
    }


}

