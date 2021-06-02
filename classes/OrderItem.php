<?php
class OrderItem {
    private $orderID;
    private $drink;
    private $beverage=array();

    function __construct($drink,$beverage) {
        $this->drink = $drink;
        $this->beverage = $beverage;
    }

    function removeItem() {
        
    }


    /**
     * Get the value of orderID
     */ 
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Set the value of orderID
     *
     * @return  self
     */ 
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;

        return $this;
    }

    public function getDrink()
    {
        return $this->drink;
    }

    public function setDrink($drink)
    {
        $this->drink = $drink;

        return $this;
    }

    public function getBeverage()
    {
        return $this->beverage;
    }

    public function setBeverage($beverage)
    {
        $this->beverage = $beverage;

        return $this;
    }
}

?>