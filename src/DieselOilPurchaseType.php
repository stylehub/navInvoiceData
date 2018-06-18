<?php

namespace Dream\NavInvoiceData;

/**
 * Class representing DieselOilPurchaseType
 *
 * Gázolaj adózottan történő beszerzésének adatai – 45/2016 (XI. 29.) NGM rendelet 75. § (1) a)Data of gas oil acquisition after taxation – point a), paragraph (1) of Section 75 of the NGM Decree No. 45/2016. (XI. 29.)
 * XSD Type: DieselOilPurchaseType
 */
class DieselOilPurchaseType
{

    /**
     * Gázolaj beszerzés helyePlace of purchase of the gas oil
     *
     * @property \Dream\NavInvoiceData\SimpleAddressType $purchaseLocation
     */
    private $purchaseLocation = null;

    /**
     * Gázolaj beszerzés dátumaDate of purchase of gas oil
     *
     * @property \DateTime $purchaseDate
     */
    private $purchaseDate = null;

    /**
     * Kereskedelmi jármű forgalmi rendszáma (csak betűk és számokRegistration number of vehicle (letters and numbers only)
     *
     * @property string $vehicleRegistrationNumber
     */
    private $vehicleRegistrationNumber = null;

    /**
     * Gépi bérmunka-szolgáltatás során felhasznált gázolaj mennyisége literben – Jöt. 117. § (2)Fordítandó helyett: Quantity of diesel oil used for contract work and machinery hire service in liter – Act LXVIII of 2016 on Excise Tax section 117 (2)
     *
     * @property float $dieselOilQuantity
     */
    private $dieselOilQuantity = null;

    /**
     * Gets as purchaseLocation
     *
     * Gázolaj beszerzés helyePlace of purchase of the gas oil
     *
     * @return \Dream\NavInvoiceData\SimpleAddressType
     */
    public function getPurchaseLocation()
    {
        return $this->purchaseLocation;
    }

    /**
     * Sets a new purchaseLocation
     *
     * Gázolaj beszerzés helyePlace of purchase of the gas oil
     *
     * @param \Dream\NavInvoiceData\SimpleAddressType $purchaseLocation
     * @return self
     */
    public function setPurchaseLocation(\Dream\NavInvoiceData\SimpleAddressType $purchaseLocation)
    {
        $this->purchaseLocation = $purchaseLocation;
        return $this;
    }

    /**
     * Gets as purchaseDate
     *
     * Gázolaj beszerzés dátumaDate of purchase of gas oil
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Sets a new purchaseDate
     *
     * Gázolaj beszerzés dátumaDate of purchase of gas oil
     *
     * @param \DateTime $purchaseDate
     * @return self
     */
    public function setPurchaseDate(\DateTime $purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }

    /**
     * Gets as vehicleRegistrationNumber
     *
     * Kereskedelmi jármű forgalmi rendszáma (csak betűk és számokRegistration number of vehicle (letters and numbers only)
     *
     * @return string
     */
    public function getVehicleRegistrationNumber()
    {
        return $this->vehicleRegistrationNumber;
    }

    /**
     * Sets a new vehicleRegistrationNumber
     *
     * Kereskedelmi jármű forgalmi rendszáma (csak betűk és számokRegistration number of vehicle (letters and numbers only)
     *
     * @param string $vehicleRegistrationNumber
     * @return self
     */
    public function setVehicleRegistrationNumber($vehicleRegistrationNumber)
    {
        $this->vehicleRegistrationNumber = $vehicleRegistrationNumber;
        return $this;
    }

    /**
     * Gets as dieselOilQuantity
     *
     * Gépi bérmunka-szolgáltatás során felhasznált gázolaj mennyisége literben – Jöt. 117. § (2)Fordítandó helyett: Quantity of diesel oil used for contract work and machinery hire service in liter – Act LXVIII of 2016 on Excise Tax section 117 (2)
     *
     * @return float
     */
    public function getDieselOilQuantity()
    {
        return $this->dieselOilQuantity;
    }

    /**
     * Sets a new dieselOilQuantity
     *
     * Gépi bérmunka-szolgáltatás során felhasznált gázolaj mennyisége literben – Jöt. 117. § (2)Fordítandó helyett: Quantity of diesel oil used for contract work and machinery hire service in liter – Act LXVIII of 2016 on Excise Tax section 117 (2)
     *
     * @param float $dieselOilQuantity
     * @return self
     */
    public function setDieselOilQuantity($dieselOilQuantity)
    {
        $this->dieselOilQuantity = $dieselOilQuantity;
        return $this;
    }


}

