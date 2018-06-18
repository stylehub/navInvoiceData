<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing ProductFeeTakeoverDataType
 *
 * A környezetvédelmi termékdíj kötelezettség átvállalásával kapcsolatos adatokData in connection with takeover of environmental protection product fee
 * XSD Type: ProductFeeTakeoverDataType
 */
class ProductFeeTakeoverDataType
{

    /**
     * Az átvállalás iránya és jogszabályi alapjaDirection and legal base of takeover
     *
     * @property string $takeoverReason
     */
    private $takeoverReason = null;

    /**
     * Az átvállalt termékdíj összege forintban, ha a vevő vállalja át az eladó termékdíj-kötelezettségétAmount in Hungarian forints of the product fee taken over if the purchaser takes over the supplier’s product fee liability
     *
     * @property float $takeoverAmount
     */
    private $takeoverAmount = null;

    /**
     * Gets as takeoverReason
     *
     * Az átvállalás iránya és jogszabályi alapjaDirection and legal base of takeover
     *
     * @return string
     */
    public function getTakeoverReason()
    {
        return $this->takeoverReason;
    }

    /**
     * Sets a new takeoverReason
     *
     * Az átvállalás iránya és jogszabályi alapjaDirection and legal base of takeover
     *
     * @param string $takeoverReason
     * @return self
     */
    public function setTakeoverReason($takeoverReason)
    {
        $this->takeoverReason = $takeoverReason;
        return $this;
    }

    /**
     * Gets as takeoverAmount
     *
     * Az átvállalt termékdíj összege forintban, ha a vevő vállalja át az eladó termékdíj-kötelezettségétAmount in Hungarian forints of the product fee taken over if the purchaser takes over the supplier’s product fee liability
     *
     * @return float
     */
    public function getTakeoverAmount()
    {
        return $this->takeoverAmount;
    }

    /**
     * Sets a new takeoverAmount
     *
     * Az átvállalt termékdíj összege forintban, ha a vevő vállalja át az eladó termékdíj-kötelezettségétAmount in Hungarian forints of the product fee taken over if the purchaser takes over the supplier’s product fee liability
     *
     * @param float $takeoverAmount
     * @return self
     */
    public function setTakeoverAmount($takeoverAmount)
    {
        $this->takeoverAmount = $takeoverAmount;
        return $this;
    }


}

